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
                  <h2>Discover your HomeGenie</h2>
                  <h3>Beyond Home Automation</h3>
                </header>
                <p> 
                  Despite of what the name could suggest, HomeGenie it is not just for Home Automation. Yes, it is for sure automation for
                  "home"... meant to be a friendly and fully customizable automation system, easy to use for everyone, but still
                  powerful and fully featured.
                  <br>
                  HomeGenie is your &nbsp;
                    <a rel="iframe-800-520" class="pirobox_gall1" title="What is IoT? (click for video)" href="http://www.youtube.com/embed/p_R5ZVWMhzM?autoplay=1">
                      <img src="/docs/images/playvideo.png" />&nbsp;Internet&nbsp;of&nbsp;Things
                    </a>
                    &nbsp; buddy =).
                </p>
                <p style="text-align: center;">
                    <img title="HomeGenie and his friends..." alt="HomeGenie and his friends..." src="/images/homegenie_friends.png">
                </p>
                <ul style="list-style-type:square;margin-left:10px">
                  <li>
                    <h3>Modern, web based, responsive UI</h3>
                    use it on every device, from desktop PCs to smart phones and
                    tablets
                  </li>
                  <li>
                    <h3>Integrated drivers for X10, Z-Wave and UPnP</h3>
                    ready to use solution for your home automation
                  </li>
                  <li>
                    <h3>Real and virtual energy metering with statistics</h3>
                    energy consumption awareness for optimizing costs and usage
                  </li>
                  <li>
                    <h3>Embeddable</h3>
                    runs on low-energy and low-cost embedded systems such as &nbsp;
                    <a title="What is Raspberry Pi? (click for video)" href="http://www.youtube.com/embed/e0wkVVVLvR8?autoplay=1" rel="iframe-800-520" class="pirobox_gall1">
                        <img src="/docs/images/playvideo.png" />&nbsp;Raspberry&nbsp;Pi
                    </a>
                  </li>
                  <li>
                    <h3>Wizard Scripting</h3>
                    create scenarios with your fingers using the live macro
                    recording feature
                  </li>
                  <li>
                    <h3>Localization</h3>
                    English, Italian, German, Spanish, French, Netherlands.
                    Other languages can by added by creating a simple JSON file.
                  </li>
                  <li>
                    <h3>Voice control</h3>
                  </li>
                  <li>
                    <h3>Password protected access</h3>
                  </li>
                  <li>
                    <h3>Configuration backup/restore and factory reset</h3>
                  </li>
                  <li>
                    <h3>Customizable widgets and features</h3>
                    create new features and widgets that interact with your
                    devices and internet services
                  </li>
                  <li>
                    <h3>Programmable Automation Engine</h3>
                    with web based <i>Program Editor</i> and compiler, the
                    power of C# language for the <i>Internet Of Things</i>
                  </li>
                  <li>
                    <h3>Dynamic Web Service API and Helper Classes</h3>
                    make your "things" talk each other using a common language
                    over the net
                  </li>
                  <li>
                    <h3>Direct access to Raspberry Pi hardware</h3>
                    GPIO, SPI, I2C programming using an event driven model
                  </li>
                  <li>
                    <h3>Programmable InfraRed receiver</h3>
                    use a common infrared remote to control your automation
                    system
                  </li>
                  <li>
                    <h3>Virtual modules</h3>
                  </li>
                  <li>
                    <h3>Speech synthesys</h3>
                  </li>
                  <li>
                    <h3>Open Source</h3>
                  </li>
                </ul>
              </section>
            </div>
            <div class="3u">
              <!-- Right Sidebar -->
              <?php include $_SERVER['DOCUMENT_ROOT'].'/docs/includes/menu_appsdk.php'; ?>
              <?php include $_SERVER['DOCUMENT_ROOT'].'/docs/includes/menu_forumlink2.php'; ?>
              <?php include $_SERVER['DOCUMENT_ROOT'].'/docs/includes/menu_webapi.php'; ?>
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
