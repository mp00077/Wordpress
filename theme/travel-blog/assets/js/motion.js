(function () {
	'use strict';

	var revealItems = document.querySelectorAll('.travel-blog-reveal');
	var parallaxItems = document.querySelectorAll('.travel-blog-parallax');
	var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	if (!reducedMotion && 'IntersectionObserver' in window) {
		var revealObserver = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					entry.target.classList.add('is-visible');
					revealObserver.unobserve(entry.target);
				}
			});
		}, { threshold: 0.18 });

		revealItems.forEach(function (item) {
			revealObserver.observe(item);
		});
	} else {
		revealItems.forEach(function (item) {
			item.classList.add('is-visible');
		});
	}

	if (!reducedMotion && parallaxItems.length) {
		var ticking = false;

		function updateParallax() {
			var viewportHeight = window.innerHeight || 1;

			parallaxItems.forEach(function (item) {
				var rect = item.getBoundingClientRect();
				var progress = (rect.top + rect.height / 2 - viewportHeight / 2) / viewportHeight;
				var offset = Math.max(-18, Math.min(18, progress * -24));
				item.style.transform = 'translate3d(0,' + offset.toFixed(2) + 'px,0)';
			});

			ticking = false;
		}

		window.addEventListener('scroll', function () {
			if (!ticking) {
				window.requestAnimationFrame(updateParallax);
				ticking = true;
			}
		}, { passive: true });

		updateParallax();
	}
}());
