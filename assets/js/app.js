document.addEventListener('DOMContentLoaded', function () {
	var menuButton = document.querySelector('.mobile-nav-icon');
	var navBar = document.querySelector('.nav-bar');
	var statisticNumbers = document.querySelectorAll('.statistic-number');

	if (menuButton && navBar) {
		menuButton.addEventListener('click', function () {
			var isOpen = navBar.classList.toggle('is-open');

			document.body.classList.toggle('mobile-nav-open', isOpen);
			menuButton.classList.toggle('is-open', isOpen);
			menuButton.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
		});
	}

	if (!statisticNumbers.length) {
		return;
	}

	var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	function parseStatisticValue(element) {
		var originalText = element.textContent.trim();
		var match = originalText.match(/(-?\d[\d,]*(?:\.\d+)?)/);

		if (!match) {
			return null;
		}

		var numberText = match[0];
		var decimalPart = numberText.split('.')[1];

		return {
			originalText: originalText,
			target: parseFloat(numberText.replace(/,/g, '')),
			prefix: originalText.slice(0, match.index),
			suffix: originalText.slice(match.index + numberText.length),
			decimals: decimalPart ? decimalPart.length : 0,
			usesComma: numberText.indexOf(',') !== -1
		};
	}

	function formatStatisticValue(value, options) {
		var number = value.toFixed(options.decimals);

		if (options.usesComma) {
			var parts = number.split('.');
			parts[0] = Number(parts[0]).toLocaleString('en-US');
			number = parts.join('.');
		}

		return options.prefix + number + options.suffix;
	}

	function animateStatistic(element) {
		var options = parseStatisticValue(element);

		if (!options || element.dataset.statisticAnimated === 'true') {
			return;
		}

		element.dataset.statisticAnimated = 'true';

		if (prefersReducedMotion) {
			element.textContent = options.originalText;
			return;
		}

		var duration = 1600;
		var startTime = null;
		var startValue = 0;

		function step(timestamp) {
			if (!startTime) {
				startTime = timestamp;
			}

			var progress = Math.min((timestamp - startTime) / duration, 1);
			var easedProgress = 1 - Math.pow(1 - progress, 3);
			var currentValue = startValue + (options.target - startValue) * easedProgress;

			element.textContent = formatStatisticValue(currentValue, options);

			if (progress < 1) {
				window.requestAnimationFrame(step);
			} else {
				element.textContent = options.originalText;
			}
		}

		window.requestAnimationFrame(step);
	}

	if (!('IntersectionObserver' in window)) {
		statisticNumbers.forEach(animateStatistic);
		return;
	}

	var statisticObserver = new IntersectionObserver(function (entries, observer) {
		entries.forEach(function (entry) {
			if (!entry.isIntersecting) {
				return;
			}

			animateStatistic(entry.target);
			observer.unobserve(entry.target);
		});
	}, {
		threshold: 0.35
	});

	statisticNumbers.forEach(function (number) {
		statisticObserver.observe(number);
	});
});
