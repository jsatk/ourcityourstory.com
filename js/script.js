// <strong>Title:</strong> <tt>script.js</tt><br />
// <strong>Package:</strong> <tt>app.init();</tt><br />
// <strong>Author(s):</strong>
// <a href="mailto:jesse.s.atkinson@gmail.com">Jesse Atkinson</a><br />
// <strong>Version:</strong> 1.0<br />
// <strong>Summary:</strong> <em>Includes sticky nav, supporters animation,
// newsletter animation, etc.<br /><br />
// This code passes <a href="http://www.jshint.com">JSHint</a>.<br />
// <br />If you have any questions feel free to
// <a href="mailto:jesse.s.atkinson@gmail.com">email me</a>!</em>

(function ($, window, undefined) {
	"use strict";

	console.log("scripts.js");

	var app = {
		config: {
			nav: ".top-nav"
		},

		init: function () {
			this.position();
			this.resize();
			this.sticky();
		},

		resize: function () {
			$(window).resize({namespace: this}, function (e) {
				var t = e.data.namespace;

				console.log("resize");

				// Re-grabs the value on resize because the distance from the
				// top of the browser to the top nav is different.
				t.position();
			});
		},

		position: function () {
			var marginLeft = $("header h1").width() / 2;

			// Ensures that the header text stays centered and also only shows
			// after all the fonts have loaded.
			$("header h1").css("margin-left", "-" + marginLeft + "px").show();
		},

		sticky: function () {
			var t = this;

			$(window).scroll({namespace: this}, function (e) {
				var t = e.data.namespace,
					aboveHeight = $("header").outerHeight();

				console.log(aboveHeight, $(window).scrollTop());

				if ($(window).scrollTop() > aboveHeight) {
					$(t.config.nav, "body").addClass("fixed");
				} else {
					$(t.config.nav, "body").removeClass("fixed");
				}
			});
		}
	};

	$(document).ready(function () {
		app.init();
	});

	window.app = app || {};
}(jQuery, this));