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
            <div class="9u skel-cell-important">
              <!-- Main Content -->
              <section>
                <header>
                  <h2>About Widgets</h2>
                  <h3></h3>
                </header>
                <p> 
                
Control Widgets are used by HG to display data and controls of a module in the <em>Control Panel</em>. Widgets are located in the <em>html/pages/control/widgets</em> folder.<br>
            The following is the list of builtin widgets:<br>
            <ul style="font-size:8pt">
              <li>homegenie/generic/camerainput</li>
              <li>homegenie/generic/colorlight</li>
              <li>homegenie/generic/dimmer</li>
              <li>homegenie/generic/doorwindow</li>
              <li>homegenie/generic/fan</li>
              <li>homegenie/generic/light</li>
              <li>homegenie/generic/link</li>
              <li>homegenie/generic/mediareceiver</li>
              <li>homegenie/generic/mediaserver</li>
              <li>homegenie/generic/program</li>
              <li>homegenie/generic/securitysystem</li>
              <li>homegenie/generic/sensor</li>
              <li>homegenie/generic/shutter</li>
              <li>homegenie/generic/siren</li>
              <li>homegenie/generic/status</li>
              <li>homegenie/generic/switch</li>
              <li>homegenie/generic/temperature</li>
            </ul>
            Each widget consists of two files. An HTML file and a JSON object implementing the function <em>RenderView</em>. This function is periodically called by HG Control Panel to update the module data that is displayed on screen. <br>
            The code used in the JSON file is <em>jQuery</em> based.<br>
            So with a little HTML/Javascript knowledge any other custom widget could be also added and associated to a module by using the <em>Program Helper</em> <em><strong>AddControlWidget</strong></em> method. <br>
            <pre class="csharp">Program.Setup(()=&gt;
{
    // set the widget that will display this program data (the temperature,luminance).
    Program.AddControlWidget("homegenie/generic/temperature");
    // ....
});
</pre> <br>                             
                </p>
					 <p>&nbsp;</p>
              
              
					<div class="row">
                  <div class="4u" align="left"><a href="automation_advanced.php">&lt;&lt; Advanced topics</a></div>
                  <div class="4u" align="center"><a href="#">TOP</a></div>
						<div class="4u" align="right"><a href="doxy/da/d4f/namespace_home_genie_1_1_automation_1_1_scripting.html" target="_blank">Helper Class Reference &gt;&gt;</a></div>
                </div>                            

              </section>
               
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
