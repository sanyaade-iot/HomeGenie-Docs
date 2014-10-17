<!DOCTYPE html>
<!--
	Halcyonic 3.1 by HTML5 UP	html5up.net | @n33co	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)-->
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>HomeGenie, Security Alarm System</title>
    <meta name="description" content="Setting up a basic Security Alarm System">
     <?php include $_SERVER['DOCUMENT_ROOT'].'/includes/header_scripts.php'; ?>
  </head>
  <body class="subpage">
    <!-- Header -->
    <div id="header-wrapper">
      <header id="header" class="container">
        <div class="row">
          <div class="12u">
            <!-- Logo -->
            <h1><a href="#" id="logo">HomeGenie</a><img src="/images/hglogo.png"
                alt=""></h1>
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
            <div class="9u skel-cell-important">
              <!-- Main Content -->
              <section>
                <header>
                  <h2>Setting up a basic Security Alarm System</h2>
                  <h3>Configuring e-mail notifications and control module</h3>
                </header>
                <p>
                    Security Alarm System is implemented in HomeGenie as an Automation Program Plugin. 
                    From <span style="font-weight:bold">Configure->Automation->Features</span> we can enable/disable it and optionally configure e-mail notifications' options. 
                    When e-mail notification is configured, an e-mail will be sent whenever the alarm is triggered.
                    <br />
                    For e-mail notification to work, we also have to configure an e-mail account from <span style="font-weight:bold">Configure->Automation->Messaging and Social</span>.
                </p>

                <div align="center"><img title="E-Mail Alerts" alt="E-Mail Alerts" src="/docs/images/hg_securityalarm_01.jpg" width="70%"></div>

                <p>
                    For arming and disarming the Security Alarm System, we can add the APP's control module from <span style="font-weight:bold">Configure->Groups and Modules</span> section.
                    <br /> 
                    Once added, the APP widget will be displayed in the control page.
                </p>

                <div align="center"><img title="Security Alarm Widget" alt="Security Alarm Widget" src="/docs/images/hg_securityalarm_05.jpg" width="70%"></div>

                <p>
                    <h3>Configuring Security Sensors</h3>
                    Now we can choose among our sensors whose of them has to be considered as a security sensor. 
                    This is done by activating the "Security Sensor" flag in the module options popup as shown below.
                </p>

                <div align="center"><img title="Security Sensor" alt="Security Sensor" src="/docs/images/hg_securityalarm_02.jpg" width="70%"></div>

                <p>
                <h3>Configuring Alarm Devices</h3>
                    To complete our security setup, we now choose our sirens/strobes or even simple lights that will be flashing whenever the alarm is triggered. 
                    This is done similarly to the previous step, by activating the "Security Alarm" flag in the module options popup.
                </p>

                <div align="center">
                    <img title="Security Alarm" alt="Security Alarm" src="/docs/images/hg_securityalarm_04.jpg" width="45%">
                    <img title="Security Alarm" alt="Security Alarm" src="/docs/images/hg_securityalarm_03.jpg" width="45%">
                </div>

                <p></p>
                
                <h3>How-To video</h3>
                <div align="center">
                    <object width="480" height="360"><param name="movie" value="//www.youtube.com/v/5yUiY52_-GQ?hl=it_IT&amp;version=3"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="//www.youtube.com/v/5yUiY52_-GQ?hl=it_IT&amp;version=3" type="application/x-shockwave-flash" width="480" height="360" allowscriptaccess="always" allowfullscreen="true"></embed></object>
                </div>

                <p></p>
          
                <div class="row">
                  <div class="4u" align="left"><a href="/docs/scenarios.php">&lt;&lt; Scenarios and Lighting effects</a></div>
                  <div class="4u" align="center"><a href="/docs/alarmsystem.php#">TOP</a></div>
                  <div class="4u" align="right"><a href="/docs/weather.php">Weather Service &gt;&gt;</a></div>
                </div>              
               
              </section>
            </div>
            <div class="3u">
              <!-- Right Sidebar -->
              <?php include $_SERVER['DOCUMENT_ROOT'].'/docs/includes/menu_usersguide.php'; ?>
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
