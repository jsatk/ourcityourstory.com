<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Storytelling video product to help define the identity of this community. This is Rockford, Illinois.</title>
    <meta name="description" content="Rockford, IL, Storytelling video project, Stories of Rockford, Story video project, Rockford hometown pride building, Rockford illinois">
    <meta property="og:title" content="Our City, Our Story">
    <meta property="og:type" content="company">
    <meta property="og:url" content="http://ourcityourstory.com">
    <meta property="og:image" content="http://ourcityourstory.com/img/logo.png">
    <meta property="og:site_name" content="Our City, Our Story">
    <meta property="fb:app_id" content="463007328218">

    <!-- Mobile viewport optimized: h5bp.com/viewport. Width was originally set to 'device-width' but it was breaking. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Base URL. Change/disable/re-enable depending on environment. -->
    <!-- <base href="http://localhost:8888/"> -->
    <base href="http://ourcityourstory.com/dev/">
    <!-- <base href="http://ourcityourstory.com/"> -->

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

    <link class="rel" rel="stylesheet" href="css/style.css">

    <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

    <!-- All JavaScript at the bottom, except this Modernizr build.
    Modernizr enables HTML5 elements & feature detects for optimal performance.
    Create your own custom Modernizr build: www.modernizr.com/download/ -->
    <script class="rel" src="js/libs/modernizr-2.5.3.min.js"></script>
</head>

<body>
<!-- According to Facbeook (http://developers.facebook.com/docs/reference/plugins/like/) you should put this right after the <body> tag. -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=380552185302080";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
    <header>
        <img class="bg rel" src="img/header-bg.jpg" alt="Header" width="1752px" height="984px">
        <!-- For iPhone 4 only -->
        <img class="iphone rel" src="img/header-bg-m.jpg" alt="Header" width="320px" height="240px">
        <h1 class="title">Our City, Our Story aims to find and tell the stories which make up our identity. This is Rockford, Illinois.</h1>

        <a href="http://ourcityourstory.com" class="logo sprite"><span class="hidden">Our City, Our Story</span></a>
    </header>

    <div class="top-nav">
        <nav>
        <!--
            A note on the use of non-breaking spaces to create the nav. This was the best, simplest, and cleanest way to achieve what was comped. What was comped was using true | characters within the Proxima Nova font rather than a CSS border. To keep the | character of the Proxima Nova font and not break from style I had to use &nbsp; to force four spaces before and after each | character.
        -->
            <div class="links">
                <a href="#episode" class="nav scroll">Episode</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
                <a href="#about" class="nav scroll">About</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
                <a href="#recent" class="nav scroll">Recent</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
                <a href="#contact" class="nav scroll">Contact</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
                <a href="#sponsor" class="cut nav scroll">Sponsor</a><span class="cut">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
                <a href="http://ourcityourstory.bigcartel.com/" target="_blank"  class="cut nav">Shop</a><span class="cut">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
                <a href="http://vimeo.com/ourcityourstory/videos" target="_blank" class="nav">All<span> Stories</span></a>
                <a href="mailto:pablokorona@ourcityourstory.com" class="social email sprite newsletter"><span class="hidden">Email</span></a>
                <a href="https://twitter.com/ourcityourstory" class="social twitter sprite" target="_blank"><span class="hidden">Twitter</span></a>
                <a href="https://www.facebook.com/OurCityOurStory" class="social facebook sprite" target="_blank"><span class="hidden">Facebook</span></a>
            </div>

            <div class="subscribe_header clearfix">
                <div id="subscribe" class="subscribe">
                    <!-- Begin MailChimp Signup Form -->
                    <div id="mc_embed_signup">
                        <form action="http://OurCityOurStory.us4.list-manage2.com/subscribe/post?u=c9520922a151606a6cd234c19&amp;id=b51c4e7078" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                            <label>Subscribe to Newsletter</label>
                            <div class="mc-field-group">
                                <label for="mce-EMAIL" style="display: none;">Email Address </label>
                                <input type="email" value="" name="EMAIL" class="required" id="mce-EMAIL" placeholder="Enter Your Email Address">
                            </div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display: none"></div>
                                <div class="response" id="mce-success-response" style="display: none"></div>
                            </div>
                            <input id="submit" type="submit" value="SIGN UP" name="subscribe" id="mc-embedded-subscribe" class="button">
                        </form>
                    </div>
                    <!--End mc_embed_signup-->
                </div>
            </div>
        </nav>
    </div>

    <div role="main">
        <div id="episode" class="episode">
            <h1 title="Featured video title" class="cushycms">Hometown History</h1>
            <!-- I found this awesome trick here. http://www.netmagazine.com/tutorials/create-fluid-width-videos -->

            <!-- This is simply for the Cushy CMS. Current video ID to be entered here. -->
            <h1 title="Put this page's featured video ID here" class="invisible cushycms" id="video-id">43276390</h1>

            <a href="#" class="controls next"><em>&#8592;</em><span title="Next Episode" class="cushycms">E08: Team Fur Bandit</span></a>
            <a href="#" class="controls previous"><span title="Previous Episode" class="cushycms">E06: Bonds By Fire</span><em>&#8594;</em></a>
            <iframe id="video" title="iframe for featured episode." src="http://player.vimeo.com/video/{*id*}?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff&amp;api=1&amp;player_id=video" width="500" height="281" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>

        <div class="story clearfix">
            <article class="clearfix">
                <h5>Our City, Our Story</h5>
                <h4 title="Featured episode title. Must begin with 'E##'" class="cushycms">E07: Hometown History</h4>
                <div class="column left">
                    <img title="Featured episode thumbnail image" class="cushycms replace-2x rel" src="index_4_4234748640.jpg" alt="E11: Buddy Baseball" />
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
                <div title="Feature episode description" class="column center cushycms"><p>
	There are two things you can do when someone labels you. You can either accept it or prove it wrong. Darcy Hill is the Drama teacher at the Lutheran Academy. Every year she puts on a play with her 4th grade students. However, this was not like every other year.</p>
<p>
	Darcy is the type of lady that will write an entire production, just to get to know the community she lives in better. That&rsquo;s what this piece was. Years ago when she moved to Rockford, she felt this pride, and was curious. Her grandfather used to tell her all the old stories about Camp Grant, and she had seen &ldquo;A League of Their Own.&rdquo; But, there was more to the story&hellip;so she wrote it, and put it on the shelf. Her own project done.</p>
<p>
	This year, in response to magazine articles listing Rockford 9th most dangerous, and several other ratings and labels, she took the play off the shelf. It then became a magnet. People were drawn to the production. People agreed that the history of Rockford needed to be told.</p>
<a href="#" class="button next">&larr; Next Episode</a> <a href="#" class="button previous">Previous Episode &rarr;</a> </div>
                <div title="Featured episode credits" class="column right cushycms"><ul>
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
<li><h6>Audio</h6><span>Zach Staas</span></li>
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

        <div id="about" class="about clearfix">
            <img class="bg rel" src="img/about-bg.jpg" alt="About" width="1274px" height="719px">
            <article class="clearfix">
                <div class="column left">
                    <h5>Who We Are</h5>
                    <h1>About Our City,<br />Our Story</h1>
                </div>
                <div title="About" class="column right cushycms"><h5 class="border">
	Our Vision</h5>
<p>
	We tell the stories that if you live in Rockford, it makes you glad that you do. The stories that if you&rsquo;re from Rockford, they make you proud to be. The stories that if you&rsquo;re never been to Rockford, they make you want to come here.</p>
<h5 class="border">
	Our City</h5>
<p>
	These stories are a response to the national attention Rockford, Illinois received in 2011: from Forbes, #9 Most Dangerous in US; from the Wall Street Journal, #10th Most Dangerous in US; New York Times, Portraits From a Job-Starved City; and Comedy Central&#39;s The Daily Show portrayed Rockford as a wasteland littered with chain fast food restaurants.</p>
</div>
            </article>
        </div>

        <div id="recent" class="recent clearfix">
            <article class="clearfix">
                <h5>Our City, Our Story</h5>
                <h1>Recent Stories</h1>
                <div title="Recent episode #1" class="column left cushycms"><a href="http://ourcityourstory.com/episode/6"><img class="replace-2x rel" src="img/e06-thumb.jpg" alt="E06: Bonds By Fire" /></a>
<h6>
	Episode 06</h6>
<h3>
	<a href="http://ourcityourstory.com/episode/6">Bonds By Fire</a></h3>
<p>
	The O&rsquo;Keefe family is one of the only two 3rd generation Fire Fighting families to serve Rockford on the Fire Department. Though they share the same blood, and history, each of the members of the fire department are a part of a brotherhood&hellip;</p>
<a href="http://ourcityourstory.com/episode/6" class="button">Watch &rarr;</a></div>
                <div title="Recent episode #2" class="column center cushycms"><a href="http://ourcityourstory.com/episode/5"><img class="replace-2x rel" src="img/e05-thumb.jpg" alt="E05: Handcuffs To Handshakes" /></a>
<h6>
	Episode 05</h6>
<h3>
	<a href="http://ourcityourstory.com/episode/5">Handcuffs To Handshakes</a></h3>
<p>
	Joseph Goral was arrested in 2006 for vandalizing property with spray paint. He was one of a few that were made examples of by an anti-graffiti task force. Mayor Larry Morrissey&#39;s press conference was one of victory&hellip;</p>
<a href="http://ourcityourstory.com/episode/5" class="button">Watch &rarr;</a></div>
                <div title="Recent episode #2" class="column right cushycms"><a href="http://ourcityourstory.com/episode/4"><img class="replace-2x rel" src="img/e04-thumb.jpg" alt="E04: Darrell Hines" /></a>
<h6>
	Episode 04</h6>
<h3>
	<a href="http://ourcityourstory.com/episode/4">Darrell Hines</a></h3>
<p>
	Epictetus said, &ldquo;He is a wise man who does not grieve for the things which he has not, but rejoices for those which he has.&rdquo; We live in a world amply sprinkled with naysayers. Hearing the word NO more than YES has become&hellip;</p>
<a href="http://ourcityourstory.com/episode/4" class="button">Watch &rarr;</a></div>
                <a href="http://vimeo.com/ourcityourstory/videos" target="_blank" class="button-alt">All Stories</a>
            </article>
        </div>

        <div id="contact" class="contact">
            <img class="bg rel" src="img/contact-bg.jpg" alt="Contact background" width="1280px" height="719px">
            <div>
                <article>
                    <h1>Contact</h1>
                    <nav>
                        <a href="https://www.facebook.com/OurCityOurStory" target="_blank" class="sprite facebook"><span class="hidden">Facebook</span></a>
                        <a href="https://twitter.com/#!/ourcityourstory" target="_blank" class="sprite twitter"><span class="hidden">Twitter</span></a>
                        <a href="http://vimeo.com/ourcityourstory" target="_blank" class="sprite vimeo"><span class="hidden">Vimeo</span></a>
                    </nav>
                    <ul>
                        <li>
                            <label>Submit your feedback or your own story.</label>
                            <a href="mailto:MyStory@OurCityOurStory.com">MyStory@OurCityOurStory.com</a>
                        </li>
                        <li>
                            <label>Contact the Director.</label>
                            <a href="mailto:PabloKorona@OurCityOurStory.com">PabloKorona@OurCityOurStory.com</a>
                        </li>
                        <li>
                            <label>Is your community interested in telling its story?</label>
                            <a href="mailto:Licensing@OurCityOurStory.com">Licensing@OurCityOurStory.com</a>
                        </li>
                    </ul>
                </article>
            </div>
        </div>
    </div>

    <div id="sponsor" class="sponsor clearfix">
        <div class="container clearfix">
            <div class="fund">
                <h5>Fund Our City, Our Story</h5>
                <p>We are currently seeking corporate and individual sponsors to underwrite the ongoing production costs of the project. Please make a tax deductible donation, by way of the Rockford Area Arts Council.</p>
                <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=cDuvF3R53-E1FQEfBWCpfxYdyZViCa9O22tiYVVmH82YLFXFGshctLy4LJ8&dispatch=5885d80a13c0db1f8e263663d3faee8d8494db9703d295b4a2116480ee01a05c" target="_blank" class="button-alt">Donate</a>
            </div>

            <div class="sponsors">
                <div>
                    <h5>Sponsors</h5>
                    <p>Here are incredibly helpful and generous companies that enable us continue to making Our City, Our Story. We're proud to have their support, so please support them!</p>
                    <a href="mailto:pablokorona@ourcityourstory.com?subject=I%20Would%20Like%20To%20Become%20A%20Sponsor" class="button-alt">Become A Sponsor</a>
                </div>
                <nav class="clearfix">
                    <a href="http://pablokorona.com/" target="_blank">
                        <img class="replace-2x rel" src="img/pkmp.jpg" alt="pkmp" width="140px" height="70px">
                    </a>
                    <a href="http://artsforeveryone.com/" target="_blank">
                        <img class="replace-2x rel" src="img/raac.jpg" alt="raac" width="140px" height="70px">
                    </a>
                </nav>
            </div>
        </div>
    </div>

    <div id="supporters" class="supporters">
        <button class="sprite"></button>
        <article>
            <div>
                <h2>Supporters</h2>
                <span>The following growing list of people have made Our City, Our Story possible.</span>
            </div>
            <ul title="Supporters" class="cushycms clearfix"><ul>
	<li class="column">
		<ul>
			<li>
				<h6>
					Producer</h6>
			</li>
			<li>
				Pablo Korona</li>
			<li>
				<h6 class="padding">
					Editorial/<br />
					Advisory Board</h6>
			</li>
			<li>
				Linda Niemiec</li>
			<li>
				Courtney Oertel</li>
			<li>
				Shelton Kaye</li>
			<li>
				Chris Wachowiak</li>
			<li>
				Shawn Kelley</li>
			<li>
				Ron Clewer</li>
			<li>
				Jim Barbagallo</li>
			<li>
				&nbsp;</li>
			<li>
				<h6 class="padding">
					Associate Producers ($100+)</h6>
			</li>
			<li>
				Jojo G.</li>
			<li>
				Anthony Adamany</li>
			<li>
				Wendy Young</li>
			<li>
				Cyndie Hall</li>
			<li>
				Andrew Carlson</li>
			<li>
				Chris Manuel</li>
			<li>
				Eirik Augusston</li>
			<li>
				Deric Bloomingdale</li>
			<li>
				Janyce Fadden</li>
			<li>
				Katie Dorland</li>
			<li>
				Tony Chiarelli</li>
			<li>
				Sarah Adler</li>
			<li>
				Courtney Oertel</li>
		</ul>
	</li>
	<li class="column margin">
		<ul>
			<li>
				Kari McDonald - The Paper Button Studios</li>
			<li>
				Bret Konsdorf</li>
			<li>
				Jacob Rush</li>
			<li>
				Barton Bishoff</li>
			<li>
				Annie O&#39;Keefe</li>
			<li>
				Belles Firm of Architecture, Inc</li>
			<li>
				Victoria Melton</li>
			<li>
				John Groh</li>
			<li>
				Matthew Jeppsen</li>
			<li>
				Betsy Youngquist</li>
			<li>
				Cultivate Studios</li>
			<li>
				Mindy Young</li>
			<li>
				Woodfire/Pasta Cucina</li>
			<li>
				Arnold Dyer</li>
			<li>
				MedicineMan</li>
			<li>
				Joe Kelly</li>
			<li>
				Denise Guzzardo</li>
			<li>
				<h6 class="padding">
					Sponsors ($25+)</h6>
			</li>
			<li>
				Katrina McGrath</li>
			<li>
				Katie Martin</li>
			<li>
				Guillermo Martinez</li>
			<li>
				Paul Octavious</li>
			<li>
				Jay Schaul</li>
			<li>
				Jason Ryan</li>
			<li>
				Andrew Kitzmiller</li>
			<li>
				Eric Borchardt</li>
		</ul>
	</li>
	<li class="column margin">
		<ul>
			<li>
				Linda Grist Cunningham</li>
			<li>
				Patrick McDonough</li>
			<li>
				Joelene Chinn</li>
			<li>
				Bernice Armould</li>
			<li>
				Tom Leu</li>
			<li>
				Anna Brahmstedt Akerlund</li>
			<li>
				Nels Akerlund</li>
			<li>
				Jane Austin</li>
			<li>
				Irene Korona Dyer</li>
			<li>
				Gregory Farnham</li>
			<li>
				Ryan Davis</li>
			<li>
				Branson Werner</li>
			<li>
				MacFanBoy</li>
			<li>
				Andy Whorehall</li>
			<li>
				Tom &amp; Sarah McNamara</li>
			<li>
				Roger Peterson Jr.</li>
			<li>
				Rachael Pennell</li>
			<li>
				Meghan Jones Turley</li>
			<li>
				Ashley Ray-Harris</li>
			<li>
				Worland Guitars</li>
			<li>
				Lana M. Paris</li>
			<li>
				Andrew H Davis</li>
			<li>
				Eric Kelley</li>
			<li>
				Katie Barisa</li>
			<li>
				Jordan Guzzardo</li>
			<li>
				Mary H. Jones</li>
			<li>
				Linda Niemiec</li>
			<li>
				Jenica Rogers</li>
		</ul>
	</li>
	<li class="column margin">
		<ul>
			<li>
				Brian L. Shelton</li>
			<li>
				Gary &amp; Maddy Walters</li>
			<li>
				Jason Hoss</li>
			<li>
				Culture Shock Clothing and Records</li>
			<li>
				Mike Tarrolly</li>
			<li>
				Charlie Schweinler</li>
			<li>
				Max Gersh</li>
			<li>
				Mr. &amp; Mrs. Kirk Wescom</li>
			<li>
				Carol Bingley</li>
			<li>
				Mya Sadler</li>
			<li>
				Shayna Leber</li>
			<li>
				Alicia DiBenedetto Neubauer</li>
			<li>
				Amber Kresol</li>
			<li>
				Joe Hammack</li>
			<li>
				Government Spy</li>
			<li>
				Becky Martin</li>
			<li>
				Michael Lindvall</li>
			<li>
				Gins Ross</li>
			<li>
				Rebecca Shaffer</li>
			<li>
				Susan Fumo</li>
			<li>
				Joe Frisella</li>
			<li>
				Danny Lorden</li>
			<li>
				Steven Hall</li>
			<li>
				Jen Shelton</li>
		</ul>
	</li>
	<li class="column margin">
		<ul>
			<li>
				<h6>
					Dear<br />
					#9Sponsors ($9+)</h6>
			</li>
			<li>
				Kathy McNeely-Johnson</li>
			<li>
				Tricia Diduch</li>
			<li>
				Michael Kearney</li>
			<li>
				Sue Baily</li>
			<li>
				Michael D. Hopkins</li>
			<li>
				Aaron T.</li>
			<li>
				James D Madara</li>
			<li>
				Jason Judd</li>
			<li>
				Zak Rotello</li>
			<li>
				Jecca Green</li>
			<li>
				Scott Wilson</li>
			<li>
				Alya Adamany</li>
			<li>
				Callie Ezell</li>
			<li>
				Jason Ommodt</li>
			<li>
				Sarah Donohue</li>
			<li>
				Shawn Petersen</li>
			<li>
				Doug &amp; Holli Connell</li>
			<li>
				Javier Jimenez</li>
			<li>
				Kurt Laudicina</li>
			<li>
				John Curtis</li>
			<li>
				Planet5D</li>
			<li>
				Eva Frazier</li>
			<li>
				Lauran Cort Cacciatori</li>
			<li>
				Eli Nicolosi</li>
			<li>
				Kristina A.</li>
			<li>
				Elaine Breck</li>
			<li>
				Debra Werner</li>
		</ul>
	</li>
	<li class="column">
		<ul>
			<li>
				David Conroy</li>
			<li>
				Petrea Witt</li>
			<li>
				Pirate Ninja Print Shop</li>
			<li>
				Benjamin Grigg</li>
			<li>
				Deborah DeCastris</li>
			<li>
				Andrew Georgis</li>
			<li>
				Anne Duquennois</li>
			<li>
				Chris Cantwell</li>
			<li>
				Stefanie Dyer</li>
			<li>
				Kimberly Nelson</li>
			<li>
				Dominick Squicciarini</li>
			<li>
				Britney Dunnavan</li>
			<li>
				Sheri Meyers Cook</li>
			<li>
				Alicia Dyer</li>
			<li>
				Jessie Crow Mermel</li>
			<li>
				Julia Speck</li>
			<li>
				Patrick Delehanty</li>
		</ul>
	</li>
</ul>
</ul>
        </article>
    </div>

    <div class="subscribe_footer clearfix">
        <!-- Inject code -->
    </div>

    <footer>
        <div class="container clearfix">
            <div id="subscribe" class="subscribe mobile">
                <!-- Begin MailChimp Signup Form -->
                <div id="mc_embed_signup">
                    <form action="http://OurCityOurStory.us4.list-manage2.com/subscribe/post?u=c9520922a151606a6cd234c19&amp;id=b51c4e7078" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                        <label>Subscribe to Newsletter</label>
                        <div class="mc-field-group">
                            <label for="mce-EMAIL" style="display: none;">Email Address </label>
                            <input type="email" value="" name="EMAIL" class="required" id="mce-EMAIL" placeholder="Enter Your Email Address">
                        </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display: none"></div>
                            <div class="response" id="mce-success-response" style="display: none"></div>
                        </div>
                        <input id="submit" type="submit" value="SIGN UP" name="subscribe" id="mc-embedded-subscribe" class="button">
                    </form>
                </div>
                <!--End mc_embed_signup-->
            </div>

            <nav>
                <form target="_blank" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="X284BMLN5SZF2">
                    <button class="nav donate" type="submit" name="submit">Donate</button>
                </form>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" id="supporters_button" class="nav supporters_button">Supporters</a><span class="supporters_button">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <a href="#" class="newsletter nav cut">Subscribe</a>
                <a href="http://www.twitter.com/ourcityourstory/" target="_blank" class="social">Twitter</a><span class="social">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <a href="https://www.facebook.com/OurCityOurStory/" target="_blank" class="social">Facebook</a>
            </nav>

            <p>Copyright &copy; 2012 Our City, Our Story. All rights reserved. Legal services provided by Adam Stivers of <a href="http://stiverslegal.com/" target="_blank">StiversLegal.com</a>. Logo &amp; site design by <a href="http://jasonjam.es" target="_blank">The Office of Jason James</a>.</p>
        </div>
    </footer>

  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- Load Vimeo's Froogaloop2 library -->
  <script src="//a.vimeocdn.com/js/froogaloop2.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/froogaloop2.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script type="text/javascript" src="//use.typekit.com/czk0yby.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <script class="rel" src="js/plugins.js"></script>
  <script class="rel" src="js/script.js"></script>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
   <script>
       var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-32885306-1']);
      _gaq.push(['_setDomainName', 'ourcityourstory.com']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
  </script>

</body>
</html>