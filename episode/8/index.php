<!doctype html>
    <!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
    <!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
    <!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
    <!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
    <!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
    <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

    <head>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/head.php"); ?>

        <meta name="description" title="Meta-Description" class="cushycms" content="Rockford, IL, Storytelling video project, Stories of Rockford, Story video project, Rockford hometown pride building, Rockford illinois">        <meta property="og:title" class="cushycms" title="Facebook Share Title" content="Our City, Our Story" />
        <meta property="og:image" class="cushycms" title="Facebook Share Image." content="http://ourcityourstory.com/img/logo.png" />
    </head>

    <body>

        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/facebook.php"); ?>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); ?>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/top-nav.php"); ?>

    <div role="main">
        <div id="episode" class="episode">
            <h1 class="cushycms" title="Featured video title">Team Fur Bandit</h1>
            <!-- I found this awesome trick here. http://www.netmagazine.com/tutorials/create-fluid-width-videos -->

            <!-- This is simply for the Cushy CMS. Current video ID to be entered here. -->
            <h1 class="invisible cushycms" title="Put this page's featured video ID here" id="video-id">43470589</h1>
            <h1 title="Is this the most recent episode?" class="hidden cushycms" id="current">No</h1>

            <a href="#" class="controls next"><em>&#8592;</em><span class="cushycms" title="Next Episode">E09: Hazzard Free</span></a>
            <a href="#" class="controls previous"><span class="cushycms" title="Previous Episode">E07: Hometown History</span><em>&#8594;</em></a>
            <iframe id="video" title="iframe for featured episode." src="http://player.vimeo.com/video/{*id*}?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff&amp;api=1&amp;player_id=video" width="500" height="281" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>

        <div class="story clearfix">
            <article class="clearfix">
                <h5>Our City, Our Story</h5>
                <h4 class="cushycms" title="Featured episode title. Must begin with 'E##'">E08: Team Fur Bandit</h4>
                <div class="column left">
                    <img class="cushycms replace-2x rel" title="Featured episode thumbnail image" src="img/f8.jpg" height="221" alt="E8" width="316">
                    <nav class="clearfix">
                        <div class="social">
                            <div class="fb-like" data-href="http://ourcityourstory.com" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>
                        </div>

                        <div class="social">
                            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://ourcityourstory.com">Tweet</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div>

                        <div class="social">
                            <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fourcityourstory.com&media=http%3A%2F%2Fourcityourstory.com%2Fimg%2Flogo.png&description=Our%20City%2C%20Our%20Story%20aims%20to%20find%20and%20tell%20the%20stories%20which%20make%20up%20our%20identity.%20This%20is%20Rockford%2C%20Illinois." class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                        </div>
                    </nav>

                </div>
                <div class="column clearfix center cushycms" title="Feature episode description"><p>
	&ldquo;Did I just really see that?&rdquo;&nbsp;It was the middle of December, and on a snow soaked Sunday afternoon a couple dozen fur covered bikes were sprinting down East State Street. Directly after this mass of bikes was a white truck with orange alert lights blazing, hauling a trailer with Team Fur Bandit on it. For the past two years, this has been a common sight during some of the dreariest of all gray winter days. They say it, and you&#39;ve got to believe it: &ldquo;We&#39;re bandits because we steal your attention.&rdquo; These charity bikes rides were organized by DJ Wilson, and this all started after he and his friend got the idea to decorate their bikes during the RAGBRAI &ldquo;the oldest, longest, largest bicycle tour&rdquo; across Iowa.</p>
<p>
	This is a story that has us look back and discover with DJ, how all the pieces came together. This is Team Fur Bandit.</p>
<a href="#" class="button next">&larr; Next<span class="cut">&nbsp;Episode</span></a> <a href="#" class="button previous">Previous<span class="cut">&nbsp;Episode</span> &rarr;</a> </div>
                <div class="column right cushycms" title="Featured episode credits"><ul>
	<li>
		<h6>
			Directed &amp; Produced By</h6>
		<span>Pablo Korona</span></li>
	<li>
		<h6>
			Assistant &amp; Second Shooter</h6>
		<span>Julia Moore</span></li>
	<li>
		<h6>
			Music</h6>
		<span>Daniel James McMahon</span></li>
	<li>
		<h6>
			Audio</h6>
		<span>Zach Staas</span></li>
	<li>
		<h6>
			Special Thanks</h6>
		<span>TBD</span><br />
		<br />
		&nbsp;</li>
</ul>
</div>
            </article>
        </div>

            <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/about.php"); ?>

        <div id="recent" class="recent clearfix">
            <article class="clearfix">
                <h5>Our City, Our Story</h5>
                <h1>Recent Stories</h1>
                <div class="column left cushycms" title="Recent episode #1"><a href="http://ourcityourstory.com/episode/7/#episode"><img class="replace-2x rel" src="img/e07-thumb.jpg" alt="E07: Hometown History" /></a>
<h6>
	Episode 07</h6>
<h3>
	<a href="http://ourcityourstory.com/episode/7/#episode">Hometown History</a></h3>
<p>
	There are two things you can do when someone labels you. You can either accept it, or prove it wrong. Darcy Hill is the Drama teacher at the Lutheran Academy. Every year she puts on a play with her 4th grade students. However, this was not like every other year&hellip;</p>
<a href="http://ourcityourstory.com/episode/7/#episode" class="button">Watch &rarr;</a></div>
                <div class="column center cushycms" title="Recent episode #2"><a href="http://ourcityourstory.com/episode/6/#episode"><img class="replace-2x rel" src="img/e06-thumb.jpg" alt="E06: Bonds By Fire" /></a>
<h6>
	Episode 06</h6>
<h3>
	<a href="http://ourcityourstory.com/episode/6/#episode">Bonds By Fire</a></h3>
<p>
	The O&rsquo;Keefe family is one of the only two 3rd generation Fire Fighting families to serve Rockford on the Fire Department. Though they share the same blood, and history, each of the members of the fire department are a part of a brotherhood&hellip;</p>
<a href="http://ourcityourstory.com/episode/6/#episode" class="button">Watch &rarr;</a></div>
                <div class="column right cushycms" title="Recent episode #3"><a href="http://ourcityourstory.com/episode/5/#episode"><img class="replace-2x rel" src="img/e05-thumb.jpg" alt="E05: Handcuffs To Handshakes" /></a>
<h6>
	Episode 05</h6>
<h3>
	<a href="http://ourcityourstory.com/episode/5/#episode">Handcuffs To Handshakes</a></h3>
<p>
	Joseph Goral was arrested in 2006 for vandalizing property with spray paint. He was one of a few that were made examples of by an anti-graffiti task force. Mayor Larry Morrissey&#39;s press conference was one of victory&hellip;</p>
<a href="http://ourcityourstory.com/episode/5/#episode" class="button">Watch &rarr;</a></div>
                    <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/allstorieslink.php"); ?>
            </article>
        </div>

            <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/contact.php"); ?>

        </div>
        <!-- End of role="main" -->

        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/sponsor.php"); ?>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/supporters.php"); ?>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"); ?>

    </body>
</html>