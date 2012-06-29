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
			// this.resize();
		},

		resize: function () {
			$(window).resize({namespace: this}, function (e) {
				var t = e.data.namespace,
					percent, oldfontsize, newfontsize;

				percent = $("header").height() / 500;
				oldfontsize = $(".tagline").css("font-size").replace("px", "");
				newfontsize = oldfontsize * percent;
				$(".tagline").css("font-size", newfontsize + "px");
				console.log($(".tagline").css("font-size"), newfontsize);
			});
		}

	};

	$(document).ready(function () {
		app.init();
	});

	window.app = app || {};
}(jQuery, this));