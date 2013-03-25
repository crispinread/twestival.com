<!DOCTYPE html>
<!--[if lt IE 7]>	  <html class="no-js lt-ie9 lt-ie8 lt-ie7" xmlns:fb="http://ogp.me/ns/fb#" xmlns:xml="http://www.w3.org/XML/1998/namespace" lang="en/us" xml:lang="en/us"> <![endif]-->
<!--[if IE 7]>		 <html class="no-js lt-ie9 lt-ie8" xmlns:fb="http://ogp.me/ns/fb#" xmlns:xml="http://www.w3.org/XML/1998/namespace" lang="en/us" xml:lang="en/us"> <![endif]-->
<!--[if IE 8]>		 <html class="no-js lt-ie9" xmlns:fb="http://ogp.me/ns/fb#" xmlns:xml="http://www.w3.org/XML/1998/namespace" lang="en/us" xml:lang="en/us"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" xmlns:fb="http://ogp.me/ns/fb#" lang="en/us" xmlns:xml="http://www.w3.org/XML/1998/namespace" xml:lang="en/us"> <!--<![endif]-->

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<!--TODO: Copy title/keywords/description PHP from system/application/views/blocks/header.html-->
		<title>Twestival 2013</title>
		<meta name="viewport" content="width = 982, initial-scale = 0.5" />

		<link rel="stylesheet" href="css/normalize.min.css" />
		<link rel="stylesheet" href="css/main.css" />

		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>

		<link href="//fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"/>
		<meta name="google-translate-customization" content="dce9ce2b70773ac7-f775263886d4b470-g2466ff957e338966-d"></meta>
		
		<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico"/>
		<link rel="SHORTCUT ICON" href="favicon.ico"/>
		<link rel="icon" type="image/ico" href="favicon.ico"/>
		
		<!-- Blog Content -->
		<link rel="stylesheet" href="css/blog.css" />
		
		<!-- Twitter -->
		<script src="//widgets.twimg.com/j/2/widget.js"></script>
		<link href="//widgets.twimg.com/j/2/widget.css" type="text/css" rel="stylesheet"/>
		
		<!-- Social Media Counts -->
		<script type="text/javascript">
			function loadSocialMediaCounts(postID, url) {
				window['loadSocialMediaCountsForPost' + postID] = function(response) {
					$('#share-facebook-count-' + postID).text(response.Facebook.share_count).fadeIn();
					$('#share-twitter-count-' + postID).text(response.Twitter).fadeIn();
					$('#share-pinterest-count-' + postID).text(response.Pinterest).fadeIn();
					$('#share-googleplus-count-' + postID).text(response.GooglePlusOne).fadeIn();
				};
				$.ajax({
					dataType: 'jsonp',
					url: '//' + (location.protocol == 'https:' ? 'sharedcount.appspot' : 'api.sharedcount') + '.com',
					data: {
						url: url
					},
					cache: true,
					jsonpCallback: 'loadSocialMediaCountsForPost' + postID
				});
			};
		</script>
	</head>
	<body id="blog">
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<a href="#content" class="accessible-text">Skip navigation</a>

		<!-- 
		<div id="google_translate_element"></div><script type="text/javascript">
			function googleTranslateElementInit() {
			  new google.translate.TranslateElement({pageLanguage: 'en', gaTrack: true, gaId: 'UA-21127575-1'}, 'google_translate_element');
			}
		</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		 -->
 
		<div id="header">
			<div class="wrapper">
				<img class="logo" src="img/common/header/logo.png" alt="TWESTIVAL: tweet. meet. give."/>
				<div class="menu">
					<ul class="horizontal">
						<li><a href="our_story">Our Story</a></li>
						<li><a href="stats-scoreboard">Impact</a></li>
						<li><a href="http://twestival.tumblr.com/">Global Blog</a></li>
						<li><a href="events">Official Events</a></li>
						<li class="button-gray"><a href="get_involved">Get Involved</a></li>
					</ul>
				</div>
				<div class="info">
					<div class="social-media">
						<a href="https://www.facebook.com/sharer.php?u=http://www.twestival.com" target="_blank" id="header-social-media-facebook">
							<img src="img/common/header/share-facebook.png" alt="Facebook Like"/>
						</a>
						<a href="https://twitter.com/share?text=Check%20out%20%40Twestival!%20It's%20back%20and%20you%20can%20register%20your%20city%20at%26url%3Dhttp%3A%2F%2Fwww.twestival.com" target="_blank" id="header-social-media-twitter">
							<img src="img/common/header/share-twitter.png" alt="Twitter Share"/>
						</a>
					</div>
					<ul class="stats">
						<li id="stats-cities"><!-- SELECT COUNT(*) FROM Year INNER JOIN Event ON Year.Year = Event.Year INNER JOIN EventLocation ON Event.EventId = EventLocation.EventId INNER JOIN Location ON EventLocation.LocationID = Location.LocationID WHERE Year.Active = TRUE AND Location.Type = 'CITY'  -->209 cities</li>
						<li id="stats-countries"><!-- SELECT COUNT(*) FROM Year INNER JOIN Event ON Year.Year = Event.Year INNER JOIN EventLocation ON Event.EventId = EventLocation.EventId INNER JOIN Location ON EventLocation.LocationID = Location.LocationID WHERE Year.Active = TRUE  AND Location.Type = 'COUNTRY' -->241 countries</li>
						<li id="stats-total"><!-- SELECT SUM(Event.DonationTotalUSD) FROM Year INNER JOIN Event ON Year.Year = Event.Year WHERE Year.Active = TRUE -->$565,928 raised</li>
					</ul>
					<form action="url/to/search" method="GET" class="search">
						<label class="accessible-text" for="search-query">Find a Twestival</label>
						<input type="text" id="search-query" name="q" value="Find a Twestival"/>
						<label class="accessible-text" for="search-button">Search</label>
						<input type="image" id="search-button" name="btn" src="img/common/header/search.png" alt="Search"/>
					</form>
				</div>
			</div>
		</div>
		
		<!-- Blog -->
		
		<!-- Read from service -->
<?php

// Decode endpoint
$resuestUri = $_SERVER['REQUEST_URI'];
$count = 0;
$i = 0;
for ($i = strlen($_SERVER['REQUEST_URI']); $i >= 0; $i--)
{
	if ($_SERVER['REQUEST_URI'][$i] == "/")
	{
		$count = $i;
		break;
	}
}
$requestUri = substr($_SERVER['REQUEST_URI'],0, $count);
$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
//echo $url . $requestUri;

// Call service
$url="http://".$_SERVER['HTTP_HOST'].$requestUri;

$homepage = file_get_contents($url . '/eventblog/' . $_GET["eventid"]);

$json = json_decode($homepage);
//echo "count:" . count($json);

?>		<div class="wrapper">
			<ul id="breadcrumbs" class="horizontal">
				<li><a href="events">Official Events</a></li>
				<li class="current"><!-- DB: Event.Name --><?php echo($json[0]->Name) ?> <!--  DB: Year.Year --> 2013 </li>
			</ul>
		</div>
		
		<div class="clearfix"></div>
		
		<div class="wrapper">
			<div id="event">
				<div class="info">
					<div class="name"><!-- DB: Event.Name --><?php echo($json[0]->Name) ?> </div>
					<div class="datetime"><!-- DB: Event.Date, or "Comming Soon" --><?php echo($json[0]->Date) ?><!--  DB: Event.StartTime (include AM/PM if different from Event.EndTime) -->, <?php echo($json[0]->StartTime) ?><!--  DB: Event.EndTime -->-<?php echo($json[0]->EndTime) ?></div>
					<div class="location">
						<!--  DB: Event.LocationName, wrapped in link if Event.LocationURL set --><a href="<?php echo($json[0]->LocationURL) ?>"><?php echo($json[0]->LocationName) ?></a>
						<!-- DB: IF Event.LocationAddress1 IS NOT NULL -->
							<div class="address"><!--  DB: Event.LocationAddress1 --><?php echo($json[0]->LocationAddress1) ?></div>
						<!-- DB: IF -->
						<!-- DB: IF Event.LocationAddress2 IS NOT NULL -->
							<div class="address"><!--  DB: Event.LocationAddress2 --><?php echo($json[0]->LocationAddress2) ?></div>
						<!-- DB: IF -->
					</div>
				</div>
				<div class="stamp">
					<div class="logo"><img src="img/event/content/event-logo-1.png" alt=""/><!-- src = DB: Event.ImageFilename --></div>
					<div class="overlay"><img src="img/blog/event/logo-overlay.png" alt="Official Event"/></div>
				</div>
				<div class="clearfix"></div>
				<!-- Vertical aligning of unknown image sizes. http://giveupandusetables.com/ -->
				<table class="charity">
					<tbody>
						<tr>
							<td class="logo">
								<a href="#"><!-- href = DB: EventCharity.URL -->
									<img src="img/event/content/charity-logo-1.png" alt=""/><!-- src = DB: EventCharity.ImageFilename -->
								</a>
							</td>
							<td class="description">
								<div class="caption">Charity</div>
								<div class="name"><a href="<?php echo($json[0]->EventCharityURL) ?>"><!-- href = DB: EventCharity.URL --><!-- DB: EventCharity.Name --><?php echo($json[0]->EventCharityName) ?></a></div>
							</td>
						</tr>
					</tbody>
				</table>
				<a class="contact" href="mailto:<?php echo($json[0]->OrganizerEmailAddress)?>"><!-- href = 'mailto:' + DB: Event.OrganizerEmailAddress -->Contact Organizer</a>
				<ul class="social-media horizontal">
					<li><a href="#"><!--  href = 'https://twitter.com/' + DB: Event.TwitterName --><img src="img/blog/event/button-twitter.png" alt="Twitter"/></a></li>
					<!-- DB: IF Event.FacebookURL IS NOT NULL -->
						<li><a href="#"><!--  href = DB: Event.FacebookURL --><img src="img/blog/event/button-facebook.png" alt="Facebook"/></a></li>
					<!-- DB: IF -->
					<li><a href="mailto:?body="><!-- href = 'mailto:body=' + URLEncode('http://' + DB: Blog.Subdomain + '.twestival.com/') --><img src="img/blog/event/button-mail.png" alt="Email Link"/></a></li>
					<li><a href="https://twitter.com/share?text=' + <?php echo(URLEncode($json[0]->TwitterShareMessage))?>"><!-- href = 'https://twitter.com/share?text=' + URLEncode(DB: Event.TwitterShareMessage) --><img src="img/blog/event/button-tweet.png" alt="Tweet This"/></a></li>
				</ul>
			</div>
			
			<div id="fundraising">
				<div class="caption">Help to aim at the goal!</div>
				<div class="goal"><!-- DB: Event.FundraisingGoalUSD -->$33,940</div>
				<div class="graph">
					<div class="progress" style="width: 16.97%"><!-- style width = (DB: Event.DonationTotalUSD / Event.FundraisingGoalUSD) * 100 (Max: 100) --></div>
				</div>
				<div class="donated" style="margin-left: 16.97%"><!-- style margin-left = (DB: Event.DonationTotalUSD / Event.FundraisingGoalUSD) * 100 (Max: 90) --><!-- DB: Event.DonationTotalUSD -->$2,000</div>
				<!--  DB: IF Event.AttendURL IS NOT NULL -->
					<div class="button attend">
						<a href="<?php echo($json[0]->AttendURL)?>"><!-- href = DB: Event.AttendURL -->Attend</a>
					</div>
				<!-- /DB: IF -->
				<!-- DB: IF Event.DonateURL IS NOT NULL -->
					<div class="button donate">
						<a href="<?php echo($json[0]->DonateURL)?>"><!-- href = DB: Event.DonateURL -->Donate</a>
					</div>
				<!-- DB: IF -->
				<div class="description">
					<span class="event"><!-- DB: Event.Name --><?php echo($json[0]->Name)?></span>
					<!--  DB: Event.Description --><?php echo($json[0]->Description)?>.
				</div>
			</div>
		</div>
		
		<div class="clearfix"></div>
		
		<div class="wrapper content">
			<div id="blog-posts">
				<?php for ($count = 0; $count < count($json); $count++)
				{
				echo("<div class=\"post\" id=\"post-3\"><!-- id = 'post-' + BlogPost.PostID -->");
					echo("<!-- Define: PostURL = 'http://' + DB: Blog.Subdomain + '.twestival.com/blog-entry/' + DB: DB: BlogPost.PostID + '/' + ToSafePageName(BlogPost.Subject) + '.html' -->");
					echo("<!-- IF authenticated for current Blog -->");
						echo("<!-- Define: EditURL = 'http://' + DB: Blog.Subdomain + '.twestival.com/blog-entry/' + DB: DB: BlogPost.PostID + '?action=edit' -->");
						echo("<a href=\"#\" class=\"edit\"><!-- href = EditURL -->Edit</a>");
					echo("<!-- IF -->");
					echo("<a href=\"#\" class=\"subject\"><!-- href = PostURL -->"); echo($json[$count]->Title); echo("</a>");
				
					echo("<div class=\"date\">"); echo($json[$count]->BlogPostCreated); echo("<!--April 5th, 2011--> </div>");
					echo("<a href=\"comment\" class=\"comment-link\">Comment</a>");
				
					echo("<div class=\"body\">");
						echo($json[$count]->Content);
					echo("</div>");
					
					echo("<div class=\"social-media-share\">");
						echo("<a class=\"share share-facebook\" href=\"#\"><!-- href = 'http://www.facebook.com/sharer.php?u=' + URLEncode(PostURL) -->
							<span class=\"accessible-text\">Facebook Share Count: </span>
							<span class=\"count\" id=\"share-facebook-count-3\"><!-- id = 'share-facebook-count-' + BlogPost.PostID --></span>");
						echo("</a>");
						echo("<a class=\"share share-twitter\" href=\"#\"><!-- href = 'http://twitter.com/share?text=' + URLEncode(PostURL) -->
							<span class=\"accessible-text\">Twitter Share Count: </span>
							<span class=\"count\" id=\"share-twitter-count-3\"><!-- id = 'share-twitterk-count-' + BlogPost.PostID --></span>");
						echo("</a>");
						echo("<a class=\"share share-pinterest\" href=\"#\"><!-- href = 'http://pinterest.com/pin/create/button/?url=' + URLEncode(PostURL) + '&media=' + URLEncode('Waiting on requirements')  + '&description=' + URLEncode(BlogPost.Subject) -->
							<span class=\"accessible-text\">Pinterest Pin Count: </span>
							<span class=\"count\" id=\"share-pinterest-count-3\"><!-- id = 'share-pinterest-count-' + BlogPost.PostID --></span>");
						echo("</a>");
						echo("<a class=\"share share-googleplus\" href=\"#\"><!-- href = 'https://plus.google.com/share?url=' + URLEncode(PostURL) -->
							<span class=\"accessible-text\">Google+ Share Count: </span>
							<span class=\"count\" id=\"share-googleplus-count-3\"><!-- id = 'share-googleplus-count-' + BlogPost.PostID --></span>");
						echo("</a>");
						echo("<a class=\"share share-email\" href=\"mailto:?body=\"><!-- href = 'mailto:?body=' + URLEncode(PostURL) -->
							<span class=\"accessible-text\">Email Link</span>
							<span class=\"count\" id=\"share-email-count-3\"><!-- id = 'share-email-count-' + BlogPost.PostID --></span>");
						echo("</a>");
						echo("<script type=\"text/javascript\">
							loadSocialMediaCounts(3 /* Post.PostID */, 'http://www.twestival.com/' /* PostURL */)");
						echo("</script>");
					echo("</div>");
				echo("</div>");
				}
				?>
			</div>
			<div id="sidebars">
				<div id="sidebar-twitter" class="sidebar">
					<div class="title">@nyctwestival<!-- DB: Event.TwitterName --></div>
					<div class="body">
					<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/itswendylou"  data-widget-id="310550464611622912">Tweets by @itswendylou</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					
						<!-- 
						<script type="text/javascript">
							new TWTR.Widget({
								version: 2,
								type: 'profile',
								interval: 5000,
								title: '',
								subject: '',
								width: 270,
								height: 166,
								theme: {
									shell: {
										background: 'transparent',
										color: '#444444'
									},
									tweets: {
										background: 'transparent',
										color: '#444444',
										links: '#34747c'
									}
								},
								features: {
									scrollbar: false,
									loop: true,
									live: true,
									hashtags: true,
									timestamp: true,
									avatars: true,
									toptweets: true,
									behavior: 'default'
								}
							}).render().setUser('nyctwestival' /* DB: Event.TwitterName */).start();
						</script>
						-->
						<noscript>
							<a href="https://twitter.com/search?q=%40nyctwestival"><!-- href = 'https://twitter.com/search?q=%40' + DB: Event.TwitterName -->See @nyctwestival<!-- DB: Event.TwitterName --> Tweets</a>
						</noscript>
						<div class="fadeout"></div>
					</div>
				</div>
				<div id="event-sponsors" class="sidebar">
					<div class="title">Sponsors</div>
					<div class="body">
		<!-- Read from service -->
<?php

// Decode endpoint
$resuestUri = $_SERVER['REQUEST_URI'];
$count = 0;
$i = 0;
for ($i = strlen($_SERVER['REQUEST_URI']); $i >= 0; $i--)
{
	if ($_SERVER['REQUEST_URI'][$i] == "/")
	{
		$count = $i;
		break;
	}
}
$requestUri = substr($_SERVER['REQUEST_URI'],0, $count);
$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
//echo $url . $requestUri;

// Call service
$url="http://".$_SERVER['HTTP_HOST'].$requestUri;

$homepage = file_get_contents($url . '/eventteamsponsors/' . $_GET["eventid"]);

$json = json_decode($homepage);
//echo "count:" . count($json);

?>
						<!-- Vertical and horizontal aligning of unknown image sizes. http://giveupandusetables.com/ -->
						<table>
							<tbody>
								<tr>
									
									<td>
										<a href="<?php $json[0]->URL?>"><!-- href = DB: EventSponsor.URL -->
											<img src="img/event/content/sponsor-1.png" alt="Sponsor 1"/><!-- src = DB: EventSponsor.ImageFilename, alt = DB: EventSponsor.Name -->
										</a>
									</td>
									<td>
										<a href="#"><!-- href = DB: EventSponsor.URL -->
											<img src="img/event/content/sponsor-2.png" alt="Sponsor 2"/><!-- src = DB: EventSponsor.ImageFilename, alt = DB: EventSponsor.Name -->
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<a href="#"><!-- href = DB: EventSponsor.URL -->
											<img src="img/event/content/sponsor-3.png" alt="Sponsor 3"/><!-- src = DB: EventSponsor.ImageFilename, alt = DB: EventSponsor.Name -->
										</a>
									</td>
									<td>
										<a href="#"><!-- href = DB: EventSponsor.URL -->
											<img src="img/event/content/sponsor-4.png" alt="Sponsor 4"/><!-- src = DB: EventSponsor.ImageFilename, alt = DB: EventSponsor.Name -->
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<a href="#"><!-- href = DB: EventSponsor.URL -->
											<img src="img/event/content/sponsor-5.png" alt="Sponsor 5"/><!-- src = DB: EventSponsor.ImageFilename, alt = DB: EventSponsor.Name -->
										</a>
									</td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div id="event-team" class="sidebar">
					<div class="title">The Team</div>
					<div class="body">
						<ul class="horizontal">
							<li>
								<a href="https://twitter.com/GeekDadAVL"><!-- href = DB: EventTeamMember.TwitterName -->
									<img src="https://api.twitter.com/1/users/profile_image?screen_name=GeekDadAVL&size=normal" alt="GeekDadAVL"/><!-- src = 'https://api.twitter.com/1/users/profile_image?size=normal&screen_name=' + EventTeamMember.TwitterName, alt = EventTeamMember.TwitterName -->
								</a>
							</li>
							<li>
								<a href="https://twitter.com/ItsWendyLou"><!-- href = DB: EventTeamMember.TwitterName -->
									<img src="https://api.twitter.com/1/users/profile_image?screen_name=ItsWendyLou&size=normal" alt="ItsWendyLou"/><!-- src = 'https://api.twitter.com/1/users/profile_image?size=normal&screen_name=' + EventTeamMember.TwitterName, alt = EventTeamMember.TwitterName -->
								</a>
							</li>
							<li>
								<a href="https://twitter.com/GeekDadAVL"><!-- href = DB: EventTeamMember.TwitterName -->
									<img src="https://api.twitter.com/1/users/profile_image?screen_name=GeekDadAVL&size=normal" alt="GeekDadAVL"/><!-- src = 'https://api.twitter.com/1/users/profile_image?size=normal&screen_name=' + EventTeamMember.TwitterName, alt = EventTeamMember.TwitterName -->
								</a>
							</li>
							<li>
								<a href="https://twitter.com/ItsWendyLou"><!-- href = DB: EventTeamMember.TwitterName -->
									<img src="https://api.twitter.com/1/users/profile_image?screen_name=ItsWendyLou&size=normal" alt="ItsWendyLou"/><!-- src = 'https://api.twitter.com/1/users/profile_image?size=normal&screen_name=' + EventTeamMember.TwitterName, alt = EventTeamMember.TwitterName -->
								</a>
							</li>
							<li>
								<a href="https://twitter.com/GeekDadAVL"><!-- href = DB: EventTeamMember.TwitterName -->
									<img src="https://api.twitter.com/1/users/profile_image?screen_name=GeekDadAVL&size=normal" alt="GeekDadAVL"/><!-- src = 'https://api.twitter.com/1/users/profile_image?size=normal&screen_name=' + EventTeamMember.TwitterName, alt = EventTeamMember.TwitterName -->
								</a>
							</li>
							<li>
								<a href="https://twitter.com/ItsWendyLou"><!-- href = DB: EventTeamMember.TwitterName -->
									<img src="https://api.twitter.com/1/users/profile_image?screen_name=ItsWendyLou&size=normal" alt="ItsWendyLou"/><!-- src = 'https://api.twitter.com/1/users/profile_image?size=normal&screen_name=' + EventTeamMember.TwitterName, alt = EventTeamMember.TwitterName -->
								</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
				<div id="global-blog" class="sidebar">
					<div class="title">Global Stories</div>
					<div class="body">
						<ul></ul>
						<script type="text/javascript">
							// twestival.tumblr.com is not returning any posts, so use staff.tumblr.com as a temporary stand-in
							$.getJSON('http://api.tumblr.com/v2/blog/staff.tumblr.com/posts/text?callback=?',
									{
										api_key: '3QS3yzIDSOfn2gZ0Tl8tItq5dcoBRDMhfL5O1pryvkcMDn3186',
										limit: 4
									},
									function(response) {
										var target = $('#global-blog .body ul');
										for(var i = 0; i < response.response.posts.length; i++) {
											var post = response.response.posts[i];
											target
													.append($('<li/>')
															.append($('<a/>', {href: post.post_url, target: '_blank'})
																	.append(
																			post.title
																			|| post.slug
																					.replace(/-/g, ' ')
																					.replace(/\w\S*/g, function(txt){ return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase(); })
																	)
															)
													);
										};
									});
						</script>
						<noscript>
							<a href="http://twestival.tumblr.com">See recent Twestival Tumblr Stories</a>
						</noscript>
					</div>
				</div>
			</div>
		</div>
		
		<div class="clearfix"></div>
		
		<div id="footer">
			<div class="wrapper">
				<div class="newsletter">
					<form action="http://twestival.us2.list-manage1.com/subscribe/post?u=1e12004a88086491a227acb3a&id=7938ef1692" method="POST" class="subscribe" target="_blank">
						<label for="subscribe-email">Would you like to receive a Twestival Newsletter?</label>
						<input type="text" id="subscribe-email" name="mce-EMAIL" value=""/>
						<input type="submit" id="subscribe-button" value="Sign Up"/>
					</form>
				</div>
				<div class="menu">
					<ul class="horizontal">
						<li><a href="team">Team</a></li>
						<li><a href="partners">Partners</a></li>
						<li><a href="faq">FAQ</a></li>
						<li><a href="disclaimer">Conditions</a></li>
						<li><a href="privacy">Privacy</a></li>
						<li><a href="press">Press</a></li>
						<li id="footer-contact-us"><a href="mailto:info@twestival.com">Contact Us</a></li>
					</ul>
				</div>
				<div class="social-media">
					<div class="title">Follow Us:</div>
					<ul class="horizontal">
						<li id="footer-twitter"><a href="http://twitter.com/twestival" target="_blank"><img src="img/common/footer/emblem-twitter.png" alt="Twitter"/></a></li>
						<li id="footer-facebook"><a href="http://facebook.com/twestival" target="_blank"><img src="img/common/footer/emblem-facebook.png" alt="Facebook"/></a></li>
						<li id="footer-linkedin"><a href="http://linkedin.com/twestival" target="_blank"><img src="img/common/footer/emblem-linkedin.png" alt="LinkedIn"/></a></li>
						<li id="footer-tumblr"><a href="http://twestival.tumblr.com/l" target="_blank"><img src="img/common/footer/emblem-tumblr.png" alt="Tumblr"/></a></li>
						<li id="footer-youtube"><a href="http://www.youtube.com/user/twestivalglobal" target="_blank"><img src="img/common/footer/emblem-youtube.png" alt="YouTube"/></a></li>
						<li id="footer-pinterest"><a href="https://pinterest.com/twestival/" target="_blank"><img src="img/common/footer/emblem-pinterest.png" alt="Pinterest"/></a></li>
						<li id="footer-googleplus"><a href="https://plus.google.com/112844332844002811178/" target="_blank"><img src="img/common/footer/emblem-googleplus.png" alt="Google+"/></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="bottom">
			<div class="wrapper">
				<div class="copyright">
					&copy; Copyright 2013, Connect the Dots Foundation (Twestival). All Rights Reserved.
				</div>
				<div class="hosting">
					Hosting provided by
					<img src="img/common/footer/hosting.png" alt="mediatemple"/>
				</div>
			</div>
		</div>
		
		<!--
		<div style="position: absolute; top: 0px; left: 0px; opacity: 0.25; width: 100%; pointer-events: none; z-index:1000;">
			<div style="margin: 0px auto 0px auto; width:1556px">
				<img src="img/blog/screenshot.png" />
			</div>
		</div>
		-->

		<script type="text/javascript">
			var _gaq=[['_setAccount','UA-21127575-1'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>
		<noscript></noscript>
	</body>
</html>
