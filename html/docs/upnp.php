<!DOCTYPE html>
<!--
Halcyonic 3.1 by HTML5 UP	html5up.net | @n33co	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)-->
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="content-type">
        <title>HomeGenie, DLNA and UPnP</title>
        <meta name="description" content="Browse and Control your UPnP Lights, Media Servers and Receivers">
        <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/includes/header_scripts.php';
        ?>
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
                        <?php
                        include $_SERVER['DOCUMENT_ROOT'] . '/includes/header_navbar.php';
                        ?>
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
                                    <h2>Controlling DLNA/UPnP devices</h2>
                                </header>
                                <h3>Media servers, receivers and UPnP lighting</h3>
                                <p>
                                    Thanks to
                                    <a rel="iframe-800-520" class="pirobox_gall1" title="What is DLNA? (click for video)" href="http://www.youtube.com/embed/ygilmTwLSJ0?autoplay=1"> <img src="/docs/images/playvideo.png" /> UPnP/DLNA </a>
                                    integration, HomeGenie can also act as a Media Control Point to script and control your media devices and UPnP lighting.
                                    <br />
                                    Sharing your media from room to room and from device to device has never been easier. From <span style="font-weight:bold">Configure->Groups and Modules</span> section we can add to the control page our media devices
                                    by selecting the <span style="font-weight:bold">Add Module</span> option from the Actions menu.
                                </p>

                                <div align="center">
                                    <a title="Adding UPnP device to Dashboard (1)" href="images/hg_upnp_01.jpg" rel="gallery" class="pirobox_gall"><img alt="Adding UPnP device to Dashboard (1)" src="/docs/images/hg_upnp_01.jpg" width="35%"></a>
                                    <a title="Adding UPnP device to Dashboard (2)" href="images/hg_upnp_02.jpg" rel="gallery" class="pirobox_gall"><img alt="Adding UPnP device to Dashboard (2)" src="/docs/images/hg_upnp_02.jpg" width="35%"></a>
                                </div>
                                <br />

                                <p>
                                    Then we will be able to browse Media Servers from the control page (either from the web interface or the mobile client) and send pictures, videos and music to any Media Receiver.
                                </p>

                                <div align="center"><img title="Browsing Media Server" alt="Browsing Media Server" src="/docs/images/hg_upnp_03.jpg" width="70%">
                                </div>
                                <br />

                                <p>
                                    By adding Media Receivers to the control page, we'll also be able to control them.
                                </p>

                                <div align="center">
                                    <a title="Media renderer controls" href="images/hg_upnp_04.jpg" rel="gallery" class="pirobox_gall"><img alt="Media renderer controls" src="/docs/images/hg_upnp_04.jpg" width="33%"></a>
                                    <a title="UPnP within Android APP" href="images/hg_upnp_05.jpg" rel="gallery" class="pirobox_gall"><img alt="UPnP within Android APP" src="/docs/images/hg_upnp_05.jpg" width="34%"></a>
                                </div>
                                <br />

                                <p>
                                    For a list of DLNA/UPnp Media Servers and Clients see <a href="http://en.wikipedia.org/wiki/List_of_UPnP_AV_media_servers_and_clients" target="_blank">Wikipedia</a>.
                                </p>

                                <p>
                                    &nbsp;
                                </p>

                                <div class="row">
                                    <div class="4u" align="left">
                                        <a href="/docs/alarmsystem.php">&lt;&lt; Setting up a basic Alarm System</a>
                                    </div>
                                    <!--div class="4u" align="left"><a href="/docs/weather.php">&lt;&lt; Weather Service</a></div-->
                                    <div class="4u" align="center">
                                        <a href="/docs/upnp.php#">TOP</a>
                                    </div>
                                    <div class="4u" align="right">
                                        <a href="/docs/remotes.php">InfraRed and RF remotes &gt;&gt;</a>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="3u">
                            <!-- Right Sidebar -->
                            <?php
                            include $_SERVER['DOCUMENT_ROOT'] . '/docs/includes/menu_usersguide.php';
                            ?>
                            <?php
                            include $_SERVER['DOCUMENT_ROOT'] . '/docs/includes/menu_forumlink.php';
                            ?>
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
                        <?php
                        include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer_links.php';
                        ?>
                    </div>
                    <div class="4u">
                        <?php
                        include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer_sitemenu.php';
                        ?>
                    </div>
                </div>
            </footer>
        </div>
        <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer_copyright.php';
        ?>
    </body>
</html>
