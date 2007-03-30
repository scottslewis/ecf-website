<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
$App 	= new App();
$Nav	= new Nav();
$Menu 	= new Menu();
include($App->getProjectCommon());
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ECF Release Plan";
	$pageKeywords	= "Type, page, keywords, here";
	$pageAuthor		= "Scott Lewis, Pete Mackie";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 1);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 1);

	# End: page-specific settings
	#
	# Paste your HTML content between the markers!	
ob_start();
?>

<head>
 <link rel="stylesheet" type="text/css" href="table.css"/>
</head>


<div id="maincontent">
		
<div id="rightcolumn">
 <div class="sideitem">
   <h6>Incubation</h6>
   <div align="center"><a href="/projects/gazoo.php"><img
        align="middle" src="/images/gazoo-incubation.jpg"
        border="0" alt="[gazoo-incubation]"/></a>
   </div>
 </div>
</div>

<div id="midcolumn">
<h3 style="color:#fff;background-image:url(/eclipse.org-common/themes/Phoenix/images/header_bg.gif)">ECF Project Milestone Plan</h3>
   <div class="right"> Last modified on Feb 14, 2007 by slewis </div>

<p>
 See the <a href="http://wiki.eclipse.org/index.php/Eclipse_Communication_Framework_Project">ECF Wiki</a>
 for Sub-Project Info, Conference Call Schedule, and Longer-Range Planning.
</p>
<p>
 See <a href="org.eclipse.ecf.docs/api">Javadocs</a> for ECF API documentation.
</p>
<p>
 ECF is part of the <a href="http://wiki.eclipse.org/index.php/Europa_Simultaneous_Release">Europa Simultaneous Release</a>.  
 We are planning now on having our 1.0.0 final release with the Europa release (June 29, 2007).  As part of Europa, 
 we will be having 1.0 milestone release as per the schedule 
 <a href="http://wiki.eclipse.org/index.php/Europa_Simultaneous_Release#Milestones_and_Release_Candidates">here</a>.
</p>
<p>
Stay tuned here for details of features and bug fixes for each remaining milestone release (M6, M7, RCn).
</p>

<?php
	$html = ob_get_contents();
        include 'getNugget.php';

        $html = getNugget("EcfRelease1.0.0.M6.html",$html);
        $html = getNugget("EcfRelease1.0.0.M5.html",$html);
        $html = getNugget("EcfRelease0.9.6.html",$html);
        $html = getNugget("EcfRelease0.9.5.html",$html);
        $html = getNugget("EcfRelease0.9.4.html",$html);

 $html = $html . "</div></div>";

	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
