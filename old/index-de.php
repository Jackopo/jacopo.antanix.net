<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xml:lang="de" lang="de"> 
<head> 
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Jacopo Ghisolfi - Lebenslauf</title>
  <meta name="description" content="Das ist der Lebenslauf von Jacopo Ghisolfi" />
  <meta name="keywords" content="jacopo ghisolfi, cv, curriculum vitae, lebenslauf, IT" /> 
  <meta name="author" content="Jacopo Ghisolfi" />
  <link media="screen" type="text/css" href="css/style.css" rel="stylesheet"/>
  <link rel="icon" type="image/png" href="img/myFavicon.ico">
  <style type="text/css" media="print"> 
  #cv {
    width: 100%;
  }
  </style> 
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
      'name' => 'unknown',
      'version' => '! Es tut mir leid, aber ich erkenne dein Browser nicht');
  
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
          $browser['version'] .= '<br/>Vielleicht solltest du mal ein Browser Update machen.';
        }
      } elseif ($browser['name'] == 'Version') {
        $browser['name'] = 'Safari oder Opera';
      }
    } 
    
    //preg_match_all("/(Opera|Chrome|Version|Firefox|MSIE|Mobile)[\/|\s](\d+)/", $_SERVER['HTTP_USER_AGENT'], $matches, PREG_SET_ORDER);
    //list($browser, $version) = array($matches[0][1], $matches[0][2]);
    echo '<div class="browser-check">Hallo '.$browser['name'].' '.$browser['version'].'</div>';
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
      <h2 id="subtitle">Lebenslauf</h2> 
    </div> 
    <div id="nav-bar">
     <ul>
      <li><a id="Experience" href="#past.jobs">Erfahrungen</a></li>
      <li><a id="Education" href="#education">Education</a></li>
      <li><a id="Languages" href="#language">Sprachen</a></li>
      <li><a id="Interests" href="#interests">Sonstiges</a></li>
      <li><a id="Contacts" href="#contacts">Kontakte</a></li>
    </ul>
  </div>

  <div id="profile" class="block"> 
    <h3 class="section-title">Tätigkeiten und Kenntnisse</h3>
    <div class="section-body">
      <p>Object Oriented Programmierung: Java, C++, PHP.</p>
      <p>HTML und CSS.</p>
      <p>MySQL.</p>
      <p>Typo3 und Wordpress.</p>
      <p>Office Suite (MS Office and OpenOffice). Adobe Photoshop und Gimp Software. Ausgezeichnete von Internet und Web Kenntnisse (email, ftp, advanced navigation).</p>
      <p>BS: Linux (ubuntu), Windows and Mac</p>
    </div> 
  </div> 

  <div id="past-jobs" class="block"> 
    <h3 class="section-title">Erfahrungen</h3>

    <div class="past-job"> 
      <p class="date">Ab April 2012 bis Juli 2012</p> 
      <h4 class="position">Web Designer (Praktikum)</h4> 
      <p class="company"><a href="http://www.m2-automation.de" target="_blank" title="Official Website">M2 Automation</a>, Berlin, Deutschland</p> 
      <p class="job-description">
        <ul>
          <li>Installation und Konfiguration des Typo3 CMS</li>
          <li>Erzeugung und Implementierung der HTML/CSS Templates für Typo3</li>
          <li>Erzeugung und Implementierung des Typoscript Templates</li>
          <li>Installation und Konfiguration der Typo3 Extensions</li>
        </ul>
      </p> 
    </div>

    <div class="past-job"> 
      <p class="date">Ab October 2007 bis März 2011</p> 
      <h4 class="position">Web editor</h4> 
      <p class="company">Gold, Florence, Italy</p> 
      <p class="job-description">
        <ul>
          <li>Berarbeitung des Inhalts für die webzine "goldworld.it"</li>
          <li>Organisation der Erscheinungstermine</li>
          <li>Koordinierung und Durchführung der PR Aktivitäten im Social Media Bereich (Facebook, Twitter, etc)</li>
          <li>Einrichtung von Werbekampagne auf Facebook</li>
        </ul>
      </p> 
    </div> 
    
    <div class="past-job"> 
      <p class="date">Ab Juni 2008 bis September 2008</p> 
      <h4 class="position">Telefonische Kundenbetreuung</h4> 
      <p class="company">Easyjet Customer Service, Potsdam, Germany</p> 
      <p class="job-description"></p>
    </div>
    
    <div class="past-job"> 
      <p class="date">Ab November 2007 bis September 2009</p> 
      <h4 class="position">Market Research Assistant</h4> 
      <p class="company">trendence GmbH, Berlin, Germany</p> 
      <p class="job-description"> 
        <ul>
         <li>Internet research</li>
         <li>Übersetzungen (English-Italian, German-Italian)</li>
         <li>Kontaktaufnahme zu Kooperationspartnern per Email und Telefon</li>
       </ul>
     </p>
   </div> 

   <div class="past-job"> 
    <p class="date">Ab Juni 2006 bis Mai 2007</p> 
    <h4 class="position">Store Manager</h4> 
    <p class="company">RS-Handelsvertretung, Bremen, Germany</p> 
    <p class="job-description"> 
      <ul>
       <li>Verwaltung des Warenhauses</li>
       <li>Vorbereitung und Sendugn der Bestellungen</li>
     </ul>
   </p>
 </div> 

 <div class="past-job"> 
  <p class="date">Ab January 2005 bis September 2005</p> 
  <h4 class="position">Store Manager, Sales Agent</h4> 
  <p class="company">Aqualine, Valencia, Spain</p> 
  <p class="job-description">
    <ul>
      <li>Verwaltung des Warenhauses</li>
      <li>Customer Service via Telephone and Email</li>
      <li>Organisation der Teilnahme an internationalen Messen</li>
      <li>Handelsvertreter und Verkäufer wahrend der Messen</li>
    </p>
  </div>

  <div id="education" class="block"> 
    <h3 class="section-title">Ausbildung</h3> 
    
    <div id="uni" class="past-job"> 
      <p class="date">Ab September 2008</p> 
      <h4 class="position">Internationale Medieninformatik</h4> 
      <p class="company">HTW Berlin, Berlin, Germany</p> 
    </div>
    
    <div id="uni" class="past-job"> 
      <p class="date">Ab September 2004 bis September 2005</p> 
      <h4 class="position">Erasmus Programme</h4> 
      <p class="company">Universität Valencia -  Universidad de Valencia, Valencia, Spain</p> 
      <p class="job-description">Studiengang: Biotechnologie</p> 
    </div>
    
    <div id="uni" class="past-job"> 
      <p class="date">Ab September 2002 bis September 2005</p> 
      <h4 class="position">Biotechnologie</h4> 
      <p class="company">Florenz Universität - Università  degli Studi di Firenze, Florence, Italy</p> 
      <p class="job-description">nicht beendet</p> 
    </div>
    
    <div id="uni" class="past-job"> 
      <p class="date">Ab September 1996 bis Juli 2002</p> 
      <h4 class="position">Gymnasiums</h4> 
      <p class="company">Liceo Scientifico Leonardo da Vinci, Florence, Italy</p> 
      <p class="job-description">Naturwissenschaft</p> 
    </div>
  </div> 

  <div id="language" class="block"> 
    <h3 class="section-title">Sprachen</h3> 
    <div class="section-body">
      <ul> 
        <li>Italian: Mother Language</li> 
        <li>Deutsch: Verhandlungssicher (Test D.a.F.)</li> 
        <li>Spanisch: Verhandlungssicher (CEFR B2)</li> 
        <li>Englisch: Sehr gute Kenntnisse in Wort und Schrift (GER C1)</li> 
      </ul>
    </div> 
  </div> 

  <div id="interests" class="block"> 
    <h3 class="section-title">Sonstiges</h3> 
    <div class="section-body">
      <ul> 
        <li>Internet und Neues Medien</li> 
        <li>Wildwasserkanu (5 Jahre als Leistungsport und mehr als 10 Jahre als Kayak Trainer) und Rugby</li> 
        <li>Politk</li>
        <li>Literatur</li>
        <li>Sprachen</li> 
      </ul>
    </div> 
  </div> 

  <div id="contacts" class="block"> 
    <h3 class="section-title">Kontakte</h3> 
    <div class="section-body">
      <dl> 
        <dt>Meine Homepage</dt> 
        <dd>
          <a href="http://jacopo.antanix.net" title="Meine Homepage also hier" target="_blank" >jacopo.antanix.net</a>
        </dd> 
        <dt>Meine Email:</dt>
        <dd>
          <a href="mailto:jacopo.ghisolfi@gmail.com" title="Schreib mir eine email">jacopo.ghisolfi@gmail.com</a>
        </dd>
        <dt>Linkedin Profil</dt> 
        <dd>
          <a href="http://www.linkedin.com/in/jacopoghisolfi" title="Meine Profil auf Linkedin" target="_blank" >www.linkedin.com/in/jacopoghisolfi</a>
        </dd>
        <dt>Xing Profil</dt>
        <dd>
          <a href="https://www.xing.com/profile/Jacopo_Ghisolfi" title="Meine Profil auf Xing" target="_blank" >www.xing.com/profile/Jacopo_Ghisolfi</a>
        </dd> 
      </dl> 
    </div>
  </div>
</div> 
</div> 

<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://jacopo.antanix.net/piwik/" : "http://jacopo.antanix.net/piwik/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
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
