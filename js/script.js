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

	var app = {
		config: {

		},

		init: function () {
			this.resize();
			this.position();
		},

		resize: function () {
			$(window).resize({namespace: this}, function (e) {
				var t = e.data.namespace,
					width = $("body").width();

				if (width > 900) {
					$("h1").removeClass();
					console.log(1);
				} else if (width < 900 && width > 780) {
					$("h1").removeClass().addClass("small1");
					console.log(2);
				} else if (width < 780 && width > 710) {
					$("h1").removeClass().addClass("small2");
					console.log(3);
				} else if (width < 710 && width > 640) {
					$("h1").removeClass().addClass("small3");
					console.log(4);
				} else if (width < 640 && width > 570) {
					$("h1").removeClass().addClass("small4");
					console.log(5);
				} else if (width < 570 && width > 480) {
					$("h1").removeClass().addClass("small5");
					console.log(6);
				} else if (width < 480) {
					$("h1").removeClass().addClass("small6");
					console.log(7);
				}
			});

			this.position();
		},

		position: function () {
			var marginLeft1 = $("header h1").width() / 2,
				marginLeft2 = $("header").width() / 2;

			if ($("header").width() > 760) {
				$("header h1").css("margin-left", "-" + marginLeft1 + "px").show();
			} else {
				$("header h1").css("margin-left", "-" + marginLeft2 + "px").show();
			}
		}
	};

	$(document).ready(function () {
		app.init();
	});

	window.app = app || {};
}(jQuery, this));