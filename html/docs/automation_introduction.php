<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<!--
	Halcyonic 3.1 by HTML5 UP	html5up.net | @n33co	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)-->
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>HomeGenie, Documentation</title>
    <meta name="description" content="User's Guide, Automation Program Plugins, Web Service API, HomeGenie Raspberry Pi Server">
     <?php include $_SERVER['DOCUMENT_ROOT'].'/includes/header_scripts.php'; ?>
  </head>
  <body class="subpage">
    <!-- Header -->
    <div id="header-wrapper">
      <header id="header" class="container">
        <div class="row">
          <div class="12u">
            <!-- Logo -->
            <h1><a href="#" id="logo">HomeGenie</a><img src="/images/hglogo.png" alt=""></h1>
            <!-- Nav -->
            <?php include $_SERVER['DOCUMENT_ROOT'].'/includes/header_navbar.php'; ?>
          </div>
        </div>
      </header>
    </div>
    <!-- Content -->
    <div id="content-wrapper">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="3u">
              <!-- Left Sidebar -->
              <?php include $_SERVER['DOCUMENT_ROOT'].'/docs/includes/menu_usersguide.php'; ?>
            </div>
            <div class="6u skel-cell-important">
              <!-- Main Content -->
              <section>
                <header>
                  <h2>Automation Programming</h2>
                  <h3>Introduction</h3>
                </header>
                <p> 
                  What we commonly think when approaching to HomeGenie is that we are using an Home Automation software. Of course this is how HG presents itself by factory settings. 
                </p>
                <p> 
                  But once we found the Automation section along with all of its programs, we could start seeing things from another perspective. 
                </p>
                <p> 
						For example: what would happen if we'd disable all those automation programs?
						<br />
						We would soon turn our HomeGenie into a dumb box just capable of switching on and off things by user interaction. 
                </p>
                <p> 
						So, what we want to say is that HomeGenie it is not really an Home Automation software, but rather it is a general purpose Automation software shipped with a bunch of automation programs that give HG some sort of intelligence for Home Automation. 
                </p>
                <p> 
						This means that anybody can create any sort of automation programs to customize or extend HG intelligence... and use it for various purposes, not just HA.<br /> 
						And there are no special requirements to get started with it. Just HomeGenie and a web browser. 
                </p>
                <p style="font-weight:bolder"> 
						So let's start to extend, customize, create!
                </p>
					 <p>&nbsp;</p>
<!--
                  <h3>Paradigm</h3>
						<p></p>
 						<p>One important component of HomeGenie is its <em>Automation
                	Program Engine (APE)</em>. </p>
            		<p>APE can be imagined as the <a target="_blank" title="Central Nervous System on Wikipedia"

                href="http://en.wikipedia.org/wiki/Central_nervous_system">Central
                Nervous System</a> of HomeGenie. So it integrates the
              information that it receives from, and coordinates the activity
              of, all modules (connected devices, services, virtual modules,
              etc..).</p>
            <p>Programs running inside APE can thus be imagined as <a target="_blank"

                title="Neuron on Wikipedia" href="http://en.wikipedia.org/wiki/Neuron">nerve
                cells</a> that processes and transmits information through event
              signals.<br>
              So an automation program can receive signals from any modules (or
              external service) and may react generating other signals that are
              then processed from the system.</p>
            <p>APE programs&nbsp;can be built using most common programming languages as Javascript, C#, Phyton and Ruby. This
              kind of programs are also called <strong>APP </strong>(<em>Automation
                Program Plugin</em>) and can be managed from HomeGenie
              Automation section.</p>
            <p>HomeGenie APPs can implement any sort of new functionality within
              few lines of code, taking advantage of some <strong>Helper
                Classes</strong> that will make easier, even for novice
              programmers, to control automation modules and interoperate with
              external services and "things". These helper classes will also try
              to make program's instructions sound more like human readable
              sentences.</p>
            <br>
            <div align="center"> <a title="Program Types" href="images/docs/automation_03.jpg" rel="gallery" class="pirobox_gall"><img src="images/docs/automation_03.jpg" alt="" width="300"></a></div>
            <br>
              -->
              
              
					<div class="row">
                  <div class="4u" align="left"><a href="index.php">&lt;&lt; Back to index</a></div>
                  <div class="4u" align="center"><a href="#">TOP</a></div>
						<div class="4u" align="right"><a href="automation_getstarted.php">Getting started &gt;&gt;</a></div>
                </div>                            

              </section>
               
            </div>
            <div class="3u">
              <!-- Right Sidebar -->

              <?php include $_SERVER['DOCUMENT_ROOT'].'/docs/includes/menu_diyrpi.php'; ?>

              <?php include $_SERVER['DOCUMENT_ROOT'].'/docs/includes/menu_forumlink.php'; ?>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <div id="footer-wrapper">
      <footer id="footer" class="container">
        <div class="row">
          <div class="8u">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer_links.php'; ?>
          </div>
          <div class="4u">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer_sitemenu.php'; ?>
          </div>
        </div>
      </footer>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer_copyright.php'; ?>
  </body>
</html>
