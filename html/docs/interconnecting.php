<!DOCTYPE html>
<!--
	Halcyonic 3.1 by HTML5 UP	html5up.net | @n33co	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)-->
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>HomeGenie, Interconnecting HG boxes</title>
    <meta name="description" content="Extend and interconnect you home IoT network">
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
                  <h2>Interconnecting HG boxes</h2>
                  <h3>When to use more than just one HomeGenie server?</h3>
                </header>
                <p>
                    There are a couple of scenarios where interconnections may become useful.
                    <br />
                    For instance, if we placed the main HG server in the basement but we would like to control it using an IR remote from the living room floor.
                    <br />
                    Then we could setup another HG box in the living room that has just an IR receiver connected to it and nothing else.
                    <br />
                    After that, all we have to do is configure the living room HG, so that it will "forward" all received IR signals to the main HG box in the basement.<br />
                    The basement HG box, will see and receive all IR signals just as if the IR receiver was physically connected to it.<br />
                    This is done from <span style="font-weight:bold">Configure->Automation->Interconnection</span> section as shown in the picture below.
                </p>

                <div align="center"><img title="Configuring LIRC" alt="Configuring LIRC" src="/docs/images/hg_interconn_01.jpg" width="70%"></div>

                <p>
                    Now, let's say that the HG in the basement has a Z-Wave controller connected to it, while the living room HG has an X10 controller connected.
                    By activating the "Status.Level event forwarding" from the living room HG (source node) to the basement one (target node), the basement HG will automatically inherit
                    all X10 devices and see them as if these were effectively connected to it.
                    <br />
                    <span style="font-weight:bold">The devices available from the source HG node will be visible on the target HG node once an event is generated from the source HG node</span> (eg. turn a device on/off).
                    <br />
                    So, now, accessing the basement HG we will be able to program and control both X10 and Z-Wave.
                </p>

                <p>
                    More in general, by interconnecting more HomeGenie boxes we can:
                    <ul style="list-style-type:square;padding-left:30px;">
                        <li>Specialize each HG server to handle different hardware or services, but make them all "talk" each other from across the network</li>
                        <li>Balance and distribute all automation tasks between HG servers and still see the whole as a single entity</li>
                        <li>Design our home automation network as centralized or make it behave like a <a href="http://en.wikipedia.org/wiki/Grid_network" target="_blank">grid network</a>, or a mix of both</li>
                    </ul>
                </p>
                
                <div class="row">
                  <div class="4u" align="left"><a href="/docs/remotes.php">&lt;&lt; InfraRed and RF remotes</a></div>
                  <div class="4u" align="center"><a href="/docs/interconnecting.php#">TOP</a></div>
                  <div class="4u" align="right"><a href="/docs/scheduler.php">Events scheduler &gt;&gt;</a></div>
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
