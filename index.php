<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");

  $descString = $_SERVER['DOCUMENT_ROOT']."/ecf/project-info/project-description.html";
  $desc = file_get_contents($descString);
 	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();
	include($App->getProjectCommon());

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Denis Roy
	# Date:			2005-10-11
	#
	# Description: Main eclipse.org page
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Communication Framework Project Home";
	$pageKeywords	= "eclipse,project,plug-ins,plugins,java,ide,swt,refactoring,free java ide,tools,platform,open source,development environment,development,ide";
	$pageAuthor		= "Eclipse Foundation, Inc.";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Place your html content in a file called content/en_pagename.php
	$html = <<<EOHTML
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
    
    <h1>$pageTitle</h1>
    
    <br/>	
	<div class="homeitem3col">	
         <h3>About the ECF Project</h3>
     	<div style="margin:10px;">
         $desc
	</div>
	<div class="homeitem3col">	
 	<h3>ECF Events</h3>
 <table cellspacing="5" cellpadding="2" width="100%" border="0">

	<tr>
	    <td align="left" valign="top" height="12" width="23">
	    </td>
	    <td align="center" valign="top" >
			<a href="http://eclipsecon.org/2007"><img border=0 src="images/logo-eclipsecon.gif"></a>
		</td>
	</tr>
	
	<tr>
	    <td align="center" valign="top" height="12" width="23">
	    </td>
	    <td>
	    	<b><a href="http://eclipsezilla.eclipsecon.org/show_bug.cgi?id=4199">ECF BOF</a></b>.  (Wed March 7, 8:45pm Grand Ballroom C)
		</td>
	</tr>
	
	<tr>
	    <td align="center" valign="top" height="12" width="23">
	    </td>
	    <td >
	    	<b><a href="http://eclipsezilla.eclipsecon.org/show_bug.cgi?id=4081">ECF for Collaborating Within Eclipse...and on Eclipse</a></b>.  Short talk by Ken Gilmer.  <a href="presentations/eclipsecon2007/ecf_talk.pdf">Talk slides</a>
		</td>
	</tr>
	</table>
	</div>
	<div class="homeitem3col">		
 	<h3>What's New</h3>
 <table cellspacing="5" cellpadding="2" width="100%" border="0">
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>April 28, 2007 - ECF 1.0.0 dev build released on eclipse.org. </b>
			See <a href="http://dev.eclipse.org/mhonarc/lists/ecf-dev/msg00786.html">Mailing List/Newsgroup Posting</a>.  Note this
			includes a new <a href="http://wiki.eclipse.org/index.php/Skype_Provider">Skype Provider for ECF</a>.
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>April 2, 2007 - ECF blog</b>
			Scott has (re)-started a <a href="http://eclipseecf.blogspot.com/">blog for ECF</a>.
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>March 30, 2007 - ECF 1.0.0 milestone 6 build released on eclipse.org. </b>
			See <a href="NewAndNoteworthy.html">New and Noteworthy</a> release documentation.  See also a 
			new <a href="http://wiki.eclipse.org/index.php/Bot_Framework">Bot Framework Tutorial</a> by Remy Suen for the new <a href="http://www.eclipse.org/ecf/org.eclipse.ecf.docs/api/org/eclipse/ecf/presence/bot/package-summary.html">ECF Robot API</a>.
		</td>
	</tr>

		<tr>
		 <td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		 </td>
		 <td valign="top">
			<b>March 7, 2007 - ECF Short talk by <b>Ken Gilmer</b> at <a href="http://www.eclipsecon.org/2007/index.php?page=sub/&id=4081">EclipseCon 2007</a>. </b>
			<a href="presentations/eclipsecon2007/ecf_talk.pdf">Here are the talk slides (pdf)</a>.
		 </td>
	</tr>


	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>February 15, 2007 - ECF 1.0.0-stable build released on eclipse.org. </b>
		</td>
	</tr>

	<tr>
		<td align="left" valign="top" height="12" width="23">
			<img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
		</td>
		<td valign="top">
	  	<b>January 13, 2007 - ECF 0.9.6-stable build released on eclipse.org. </b>  
		</td>
	</tr>

        <tr>
         <td align="left" valign="top" height="12" width="23">
          <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
         </td>
         <td valign="top">
          <b>June 19, 2006 - ECF Tutorial by Chris Aniszczyk for the 2006 Rational Software Developer's Conference. </b>
          <a href="presentations/ecf_rsdc2006.pdf">Here are the tutorial slides (pdf)</a>.
         </td>
    	</tr>

        <tr>
         <td align="left" valign="top" height="12" width="23">
          <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
         </td>
         <td valign="top">
          <b>April 12, 2006 - New tutorial documentation for running the ECF 'scribbleshare' example
          whiteboard application.</b>  
          See <a href="scribbleshare.html"/><b>here</b>
         </td>
        </tr>

        <tr>
         <td align="left" valign="top" height="12" width="23">
          <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
         </td>
         <td valign="top">
          <b>March 21, 2006 - EclipseCon 2006 </b>
          <a href="http://www.eclipsecon.org/2006/Sub.do?id=385">ECF Short Talk</a>.  Presentation
         materials (pdf) available here <a href="presentations/EclipseCon.2006.ECF.Talk.385.pdf">here</a>
         </td>
        </tr>

        <tr>
          <td align="left" valign="top" height="12" width="23">
          <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
          </td>
          <td valign="top">
           <b>March 20, 2006 - EclipseCon 2006 </b>
           <a href="http://www.eclipsecon.org/2006/Sub.do?id=46">ECF Tutorial</a>.  Presentation
           materials (pdf) available here <a href="presentations/EclipseCon.2006.ECF.Tutorial.42.pdf">here</a>
          </td>
         </tr>

         <tr>
          <td align="left" valign="top" height="12" width="23">
           <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
          </td>
          <td valign="top">
           <b>March 14, 2006 - IBM developerWorks® Article: </b>
           <a href="http://www-128.ibm.com/developerworks/opensource/library/os-ecl-commfwk/">
           Getting started with the Eclipse Communication Framework</a>
          </td>
         </tr>

        <tr>
         <td align="left" valign="top" height="12" width="23">
          <img src="../images/Adarrow.gif" border="0" width="16" height="16" alt="[Adarrow]"/>
         </td>
         <td valign="top">
          <b>September 27, 2005 </b> 
          <a href="http://www.eclipsezone.com/articles/ecf-interview">
          Interview with ECF project lead Scott Lewis</a> at <a href="http://www.eclipsezone.com">EclipseZone</a>
         </td>
        </tr>

      </table>    
	</div>

    </div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
