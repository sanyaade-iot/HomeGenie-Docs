<!DOCTYPE html>
<!--
	Halcyonic 3.1 by HTML5 UP	html5up.net | @n33co	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)-->
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>HomeGenie, Weather Underground APP</title>
    <meta name="description" content="Scriptable weather and climate data">
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
                  <h2>Weather Underground APP</h2>
                  <h3>Current weather and climate data</h3>
                </header>
                <p>
                    Another useful Automation Program Plugin is the Weather Underground APP. It will not just tell us about the current weather in our city, but it will also
                    collect some useful climate and sun data that we can use in Wizard Scripts or other APPs to take some actions based on these parameters values.
                </p>

                <div align="center"><img title="Weather Underground APP" alt="Weather Underground APP" src="/docs/images/hg_app_weather.jpg" width="70%"></div>

                <p>
                    For instance, we can turn on/off outside lights when the sun sets or rises. Or we can close our automated roof window when it's about to rain or the wind is high.
                    <br />
                    To activate the service we need an "API key" than can be obtained by creating a Weather Underground account.<br />
                    Signup for free <a href="http://italian.wunderground.com/weather/api/d/login.html" target="_blank">here</a>.
                    API key and other service configuration data can be specified in the APP options popup (see picture above).<br />
                    The weather app will update data for your location within 10 minutes. If we want to force update of weather data right away, we can disable and re-enable the app
                    as shown in the picture below.
                </p>

                <div align="center"><img title="Restarting APP" alt="Restarting APP" src="/docs/images/hg_app_enable_disable.jpg" width="70%"></div>

                <p>
                    Weather Underground data is also displayed in the web control page and in the mobile client dashboard.
                </p>

                <div align="center"><img title="Weather Underground Widget data" alt="Weather Underground Widget data" src="/docs/images/hg_app_weather_mobile.jpg"></div>
          
                <p></p>

                <div class="row">
                  <div class="4u" align="left"><a href="/docs/alarmsystem.php">&lt;&lt; Setting up a basic Alarm System</a></div>
                  <div class="4u" align="center"><a href="/docs/weather.php#">TOP</a></div>
                  <div class="4u" align="right"><a href="/docs/upnp.php">Controlling DLNA/UPnP devices &gt;&gt;</a></div>
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
