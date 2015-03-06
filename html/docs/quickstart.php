<!DOCTYPE html>
<!--
Halcyonic 3.1 by HTML5 UP	html5up.net | @n33co	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)-->
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="content-type">
        <title>HomeGenie, Quick Start</title>
        <meta name="description" content="Configuring and using HomeGenie">
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
                        <h1><a href="#" id="logo">HomeGenie</a><img src="/images/hglogo.png" alt=""></h1>
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
                                    <h2>Quick Start</h2>
                                </header>
                                <h3>Configuring: easy as 1, 2, 3</h3>
                                <p>
                                    Once installed we need to configure the system. This can be
                                    achieved in few steps from the "Configure" section.
                                </p>
                                <h3>1. Enabling Control Adapters and Interfaces</h3>
                                <p>
                                    From the main menu go to <span style="font-weight: bold;">Configure-&gt;Settings</span>.
                                </p>
                                <div align="center"><img title="System and Interfaces" alt="System and Interfaces"
                                    src="/docs/images/hg_configure_01.jpg" width="70%">
                                </div>
                                <p>
                                    Here we can activate various control Interfaces (eg. X10, Z-Wave, InfraRed, etc...).
                                </p>
                                <h3>2. Enabling Automation Programs and Features</h3>
                                <p>
                                    Going back to the Configure menu we can access the <span style="font-weight: bold;">Configure-&gt;Automation and Programs</span>
                                    section. Here we'll find, grouped into categories,
                                    a bunch of Automation Program Plugins (also called APP). Program
                                    plugins extend and add new features to HomeGenie. We can
                                    enable/disable each APP or download and import new ones. 
                                    By tapping a program item in the list, we can eventually configure its options.<br />
                                    In the <a href="http://www.homegenie.it/forum/index.php?board=3.0" target="_blank">APP contributions</a> forum thread,
                                    we can also find some extra APP goodies to enrich system functionalities. 
                                </p>
                                <div align="center"><img title="Automation Programs and Features"
                                    alt="Automation Programs and Features" src="/docs/images/hg_configure_02.jpg"
                                    width="70%">
                                </div>
                                <p></p>
                                <h3>3. Adding Groups and Modules</h3>
                                <p>
                                    Dimmers, switches, sensors and all other automation devices
                                    (modules) can now be organized into groups. From <span style="font-weight: bold;">Configure-&gt;Groups
                                        and Modules</span> section we can add new groups (eg. Living
                                    Room, Kitchen, etc...) and associate modules to them.
                                </p>
                                <div align="center"><img title="Groups and Modules" alt="Groups and Modules"
                                    src="/docs/images/hg_configure_03.jpg" width="70%">
                                </div>
                                <p>&nbsp;</p>
                                <header>
                                    <h2>Controlling</h2>
                                </header>
                                <p>
                                    Now that everything has been setup, we can go back to main
                                    menu and access the <span style="font-weight: bold;">Control</span> section, where we can monitor and control all
                                    modules.
                                </p>
                                <div align="center"><img title="Control page" alt="Control page"
                                    src="/docs/images/hg_control_01.jpg" width="70%">
                                </div>
                                <p>&nbsp;</p>
                                <div class="row">
                                    <div class="4u" align="left">
                                        <a href="/docs/index.php">&lt;&lt; Back to index</a>
                                    </div>
                                    <div class="4u" align="center">
                                        <a href="/docs/quickstart.php#">TOP</a>
                                    </div>
                                    <div class="4u" align="right">
                                        <a href="/docs/scenarios.php">Scenarios and lighting effects &gt;&gt;</a>
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
