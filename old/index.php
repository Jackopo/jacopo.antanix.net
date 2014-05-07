<!DOCTYPE html>
<html xml:lang="en" lang="en"> 
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Jacopo Ghisolfi - Curriculum Vitae</title>
	<meta name="description" content="This is the Curriculum Vitae of Jacopo Ghisolfi" />
	<meta name="keywords" content="jacopo ghisolfi, cv, curriculum vitae, IT" /> 
	<meta name="author" content="Jacopo Ghisolfi" />
	<link media="screen" type="text/css" href="css/style.css" rel="stylesheet" />
	<link rel="icon" type="image/png" href="img/myFavicon.ico" />
	<style type="text/css" media="print">
	#cv {
		width: 100%;
	}
	</style> 
	<meta name="viewport" content="width = device-width" />
</head> 

<body> 

	<?php
	$browsers = array (
		'Opera', 
		'Chrome', 			  
		'Firefox', 
		'MSIE', 
		'Mobile', 
		'Android', 
		'Version', 
		'Nokia');

	$browser = array(
		'name' => '! I\'m sorry, but I don\'t recognize your browser' ,
		'version' => '!?!?');
	
	if (isset($_SERVER['HTTP_USER_AGENT'])) { 

		$browser['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
		$user_agent = $browser['user_agent'];


		foreach ($browsers as $temp_browser) {

			if (preg_match_all("/($temp_browser)[\/|\s](\d+\.\d+)/", $user_agent,$match, PREG_SET_ORDER))   {
				$browser['name'] = $match[0][1];
				$browser['version'] = $match[0][2];

			} 

			
		}

		if ($browser['name'] == 'MSIE') {
			$browser['name'] = 'Internet Explorer';
			if ($browser['version'] < 9.0) {
				$browser['version'] .= '<br/>Maybe you should think about upgrading your browser';
			}
		} elseif ($browser['name'] == 'Version') {
			$browser['name'] = 'Safari oder Opera';
		}
	} 

		//preg_match_all("/(Opera|Chrome|Version|Firefox|MSIE|Mobile)[\/|\s](\d+)/", $_SERVER['HTTP_USER_AGENT'], $matches, PREG_SET_ORDER);
		//list($browser, $version) = array($matches[0][1], $matches[0][2]);
	echo '<div class="browser-check">Hello '.$browser['name'].' '.$browser['version'].'</div>';
	?>

	<div class="lang">
		<a href="index.php">
			<img src="img/gb.png"/>
		</a> 
		<a href="index-de.php">
			<img src="img/de.png"/>
		</a>
	</div>

	<div id="cv"> 

		<div id="body"> 

			<div id="animation">
				<h1 id="title">Jacopo Ghisolfi</h1>
				<h2 id="subtitle">Curriculum Vitae</h2> 
			</div>

			<div id="nav-bar">
				<ul>
					<li><a id="Experience" href="#past-jobs">Experience</a></li>
					<li><a id="Education" href="#education">Education</a></li>
					<li><a id="Languages" href="#language">Languages</a></li>
					<li><a id="Interests" href="#interests">Interests</a></li>
					<li><a id="Contacts" href="#contacts">Contacts</a></li>
				</ul>
			</div>

			<div id="profile" class="block"> 
				<h3 class="section-title">Skills and Knowledges</h3>
				<div class="section-body">
					<p>Object Oriented Programming: Java, C, C++, PHP.</p>
					<p>HTML and CSS.</p>
					<p>MySQL.</p> 
					<p>Typo3 and Wordpress</p>	
					<p>Office Suite (MS Office and OpenOffice). Adobe Photoshop and Gimp Software. Excellent Internet and Web Knowledge (email, ftp, advanced Navigation). CMS Wordpress management.</p>
					<p>OS: Linux (ubuntu), Windows and Mac OS</p>
				</div> 
			</div> 

			<div id="past-jobs" class="block"> 
				<h3 class="section-title">Experience</h3> 

				<div class="past-job"> 
					<p class="date">from April 2012 and July 2012</p> 
					<h4 class="position">Web Designer (Internship)</h4> 
					<p class="company"><a href="http://www.m2-automation.de" target="_blank" title="Official Website">M2 Automation</a>, Berlin, Germany</p> 
					<p class="job-description">
						<ul>
							<li>Installing and Setting up Typo3 CMS</li>
							<li>Writing and implementation of the HTML/CSS Template</li>
							<li>Writing the Typoscript Template</li>
							<li>Installing and configuring the Typo3 Extensions</li>
						</ul>
					</p> 
				</div>

				<div class="past-job"> 
					<p class="date">from October 2007 and March 2011</p> 
					<h4 class="position">Web editor</h4> 
					<p class="company">Gold, Florence, Italy</p> 
					<p class="job-description">
						<ul>
							<li>Editing all the contents for the webzine "goldworld.it"</li>
							<li>Organizing the pubblication scheduling</li> 
							<li>Promotion of the website on social networks such as Facebook and Twitter</li>
							<li>Setting up Advertising Campaings on Facebook</li>
						</ul>
					</p> 
				</div> 

				<div class="past-job"> 
					<p class="date">from June 2008 and September 2008</p> 
					<h4 class="position">Customer Service Agent</h4> 
					<p class="company">Easyjet Customer Service, Potsdam, Germany</p> 
					<p class="job-description"></p>
				</div> 

				<div class="past-job"> 
					<p class="date">from November 2007 and September 2009</p> 
					<h4 class="position">Market Research Assistant</h4> 
					<p class="company">trendence GmbH, Berlin, Germany</p> 
					<p class="job-description"> 
						<ul>
							<li>Internet research</li>
							<li>Translation (English-Italian, German-Italian)</li>
							<li>Contacting the cooperation partner via email and telephone</li>
						</ul>
					</p>
				</div> 

				<div class="past-job"> 
					<p class="date">from June 2006 and May 2007</p> 
					<h4 class="position">Store Manager</h4> 
					<p class="company">RS-Handelsvertretung, Bremen, Germany</p> 
					<p class="job-description"> 
						<ul>
							<li>Management of the Store House</li>
							<li>Preparation and Shipment of the orders</li>
						</ul>
					</p>
				</div> 

				<div class="past-job"> 
					<p class="date">from January 2005 and September 2005</p> 
					<h4 class="position">Store Manager, Sales Agent</h4> 
					<p class="company">Aqualine, Valencia, Spain</p> 
					<p class="job-description">
						<ul>
							<li>Management of the Store House</li>
							<li>Customer Service via Telephone and Email</li>
							<li>Organization for the Exposition across Europe</li>
							<li>Sales Agent at the Expositions</li>
						</ul>
					</p>
				</div>
			</div>

			<div id="education" class="block"> 
				<h3 class="section-title">Education</h3> 

				<div id="uni" class="past-job"> 
					<p class="date">from September 2008</p> 
					<h4 class="position">International Media and Computing</h4> 
					<p class="company">HTW Berlin, Berlin, Germany</p> 
				</div>

				<div id="uni" class="past-job"> 
					<p class="date">from September 2004 and September 2005</p> 
					<h4 class="position">Erasmus program</h4> 
					<p class="company">University of Valencia -  Universidad de Valencia, Valencia, Spain</p> 
					<p class="job-description">Degree course: Biotechnology</p> 
				</div>

				<div id="uni" class="past-job"> 
					<p class="date">from September 2002 and September 2005</p> 
					<h4 class="position">Biotechnology</h4> 
					<p class="company">University of Florence - Università degli Studi di Firenze, Florence, Italy</p> 
					<p class="job-description">Passed many exams but never got the degree.</p> 
				</div>

				<div id="uni" class="past-job"> 
					<p class="date">from September 1996 and July 2002</p> 
					<h4 class="position">High School</h4> 
					<p class="company">Liceo Scientifico Leonardo da Vinci, Florence, Italy</p> 
					<p class="job-description">Final School Examination (Maturità: 76/100). Specialization in biology and chemistry.</p> 
				</div>
			</div> 

			<div id="language" class="block"> 
				<h3 class="section-title">Languages</h3> 
				<div class="section-body">
					<ul> 
						<li>Italian: Mother Language</li> 
						<li>German: Advanced (Test D.a.F.)</li> 
						<li>Spanish: Fluent spoken and written (CEFR B2/C1)</li> 
						<li>English: Intermediate (CEFR B2)</li> 
					</ul> 
				</div>
			</div> 

			<div id="interests" class="block"> 
				<h3 class="section-title">Interests</h3> 
				<div class="section-body">
					<ul> 
						<li>Internet and New Medias</li> 
						<li>Wildwater canoeing and kayaking (5 years at semi-professional level and more than 10 years as Kayak Trainer)</li> 
						<li>Rugby</li>
						<li>Politcs</li>
						<li>Literature</li>
						<li>Languages</li> 
					</ul> 
				</div>
			</div> 

			<div id="contacts" class="block"> 
				<h3 class="section-title">Contacts</h3> 
				<div class="section-body">  
					<dl> 
						<dt>My home</dt> 
						<dd><a href="http://jacopo.antanix.net" title="Where you are now" target="_blank" >jacopo.antanix.net</a></dd> 
						<dt>My Email:</dt>
						<dd><a href="mailto:jacopo.ghisolfi@gmail.com" title="Personal email adress">jacopo.ghisolfi@gmail.com</a></dd>
						<dt>Linkedin profile</dt> 
						<dd><a href="http://www.linkedin.com/in/jacopoghisolfi" title="My Profile on Linkedin" target="_blank">www.linkedin.com/in/jacopoghisolfi</a></dd> 
						<dt>Xing Profile</a>
							<dd><a href="https://www.xing.com/profile/Jacopo_Ghisolfi" title="My Profile on Xing" target="_blank">www.xing.com/profile/Jacopo_Ghisolfi</a>
							</dd> 
						</dl>
					</div> 
				</div>
			</div>
		</div>

		<!-- Piwik -->
		<script type="text/javascript">
		var pkBaseURL = (("https:" == document.location.protocol) ? "https://jacopo.antanix.net/piwik/" : "http://jacopo.antanix.net/	piwik/");
		document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		try {
			var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 8);
			piwikTracker.trackPageView();
			piwikTracker.enableLinkTracking();
		} catch( err ) {}
	</script><noscript><p><img src="http://jacopo.antanix.net/piwik/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
	<!-- End Piwik Tag -->


</body> 

<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-18303173-1']);
_gaq.push(['_trackPageview']);

(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>

</html> 
