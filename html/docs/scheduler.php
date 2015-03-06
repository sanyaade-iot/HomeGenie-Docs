<!DOCTYPE html>
<!--
Halcyonic 3.1 by HTML5 UP	html5up.net | @n33co	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)-->
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="content-type">
        <title>HomeGenie, Scheduler</title>
        <meta name="description" content="Scheduler and Events management">
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
                                    <h2>Events scheduler</h2>
                                    <h3>Events and time based programs activation</h3>
                                </header>
                                <p>
                                    Using HG Scheduler we can define time based events and use them in automation scripts/programs to start scenarios automatically.
                                    <br />
                                    Every event can be referenced in a Wizard Script condition by its name (preceeded by the @ symbol) or just defined in place using any valid "Cron Expression".
                                    <br />
                                    A Cron Expression is formed by 5 space separated entries, defined as described by the following schema:
                                    <pre style="font-family:monospace;font-size:9pt;line-height:9pt">
    * * * * *  
    | | | | |
    | | | | |
    | | | | |
    | | | | +------ day of week (0 - 7) (0 to 6 are Sunday to Saturday)
    | | | +----------- month (1 - 12)
    | | +---------------- day of month (1 - 31)
    | +--------------------- hour (0 - 23)
    +-------------------------- min (0 - 59)
                    </pre>

                                    The <span style="font-weight:bold">*</span> symbol stands for "any", so, for instance, if we want to execute a script every 5 minutes, we will enter the following expression:
                                    <br />
                                    <pre style="font-family:monospace;font-size:9pt;line-height:9pt">   */5 * * * *</pre>
                                    For further informations about building a valid cron expression see <a href="http://en.wikipedia.org/wiki/Cron" target="_blank">Wikipedia</a>.
                                </p>
                                <div align="center">
                                    <a title="Scheduler Event" href="images/hg_scheduler_01.jpg" rel="gallery" class="pirobox_gall"><img src="images/hg_scheduler_01.jpg" alt="" width="300"></a>
                                    <a title="Scheduler condition trigger in Wizard Scripts" href="images/hg_scheduler_02.jpg" rel="gallery" class="pirobox_gall"><img src="images/hg_scheduler_02.jpg" alt="" width="300"></a>
                                </div>
                                <br />
                                <p>
                                    In the pictures above, we can see some example events defined in the Scheduler and then a Wizard Script using them.
                                </p>
                                <div align="center">
                                    <a title="An example automation program plugin using the Scheduler Helper class" href="images/hg_scheduler_03.jpg" rel="gallery" class="pirobox_gall"><img src="images/hg_scheduler_03.jpg" alt="" width="300"></a>
                                </div>
                                <br />
                                <p>
                                    In the example above we can see how the Scheduler can be used by program plugins (Scheduled ON/OFF).
                                </p>
                                <p>
                                    Also note that "Sunrise" and "Sunet" events in the scheduler are automatically updated by the Weather Underground automation program when enabled.
                                </p>
                                <p>
                                    As shown in these examples, we can also describe an event by using more than one expression, separating them with a colon ':', that will basically stand for OR operator, and by using a semi-colon ';', that will behave like the AND operator.
                                </p>
                                <p>&nbsp;</p>
                                <div class="row">
                                    <div class="4u" align="left">
                                        <a href="/docs/interconnecting.php">&lt;&lt; Interconnections</a>
                                    </div>
                                    <div class="4u" align="center">
                                        <a href="/docs/scheduler.php#">TOP</a>
                                    </div>
                                    <div class="4u" align="right">
                                        <a href="/docs/automation_introduction.php">Automation Programming &gt;&gt;</a>
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
