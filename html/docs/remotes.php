<!DOCTYPE html>
<!--
	Halcyonic 3.1 by HTML5 UP	html5up.net | @n33co	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)-->
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>HomeGenie, Using IR and RF remotes</title>
    <meta name="description" content="Control you home automation system using a common IR or RF remote">
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
                  <h2>Infrared and RF remotes</h2>
                  <h3>Controlling HomeGenie with a remote control</h3>
                </header>
                <p>
                    Yes, today many people own a mobile device such as smartphones and tablets. But what we will really find in almost every house is the old good <a href="http://en.wikipedia.org/wiki/Remote_control" target="_blank">Infrared Remote</a>.
                    <br />
                    These are easy to use for everyone and are very cheap. So why not using one of these for programming and controlling our home automation system?
                </p>

                <div align="center"><img title="Configuring LIRC" alt="Configuring LIRC" src="/docs/images/hg_remotes_01.jpg" width="70%"></div>

                <p>
                    As shown in the picture above, we can setup IR remote control in HomeGenie from the <span style="font-weight:bold">Configure->System and Interfaces</span> section by
                    enabling the "LIRC Infrared Remotes" interface and by adding our remote model to the configuration.
                    <br />
                    Once configured, HomeGenie will be able to receive events from our IR remote. So we will be able to create automation scripts triggered by remote control buttons by
                    simply adding a new Wizard Script and capturing the desired IR button code as shown in the example below.
                </p>
                
                <div align="center"><img title="Triggering a script from IR command" alt="Triggering a script from IR command" src="/docs/images/hg_remotes_02.jpg" width="70%"></div>

                <p>
                    If our setup includes an X10 CM15 interface, HG will also be able to receive and script X10 RF remote control codes.
                    <br />
                    Note that the IR control feature is currently available only for Linux and other standard <a href="http://www.lirc.org/" target="_blank">LIRC</a> capable systems. It is currently not supported in Windows.
                </p>

                <div class="row">
                  <div class="4u" align="left"><a href="/docs/upnp.php">&lt;&lt; Controlling DLNA/UPnP devices </a></div>
                  <div class="4u" align="center"><a href="/docs/remotes.php#">TOP</a></div>
                  <div class="4u" align="right"><a href="/docs/interconnecting.php">Interconnections &gt;&gt;</a></div>
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
