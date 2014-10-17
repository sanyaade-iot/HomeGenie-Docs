<!DOCTYPE html>
<!--
	Halcyonic 3.1 by HTML5 UP	html5up.net | @n33co	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)-->
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>HomeGenie, Scenarios and Lighting effects</title>
    <meta name="description" content="Creating Scenarios and Lighting effects; interactive recording and Wizard Scripts">
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
                  <h2>Scenarios and Lighting Effects</h2>
                  <h3>Interactive Recording</h3>
                </header>
                <p>To create scenarios and lighting effects, we can take
                  advantage of the Record functionality. From the Control
                  section, access the Actions menu to start recording as shown
                  in the following image.</p>
                <div align="center"><img title="Interactive Recording" alt="Interactive Recording"
                    src="/docs/images/hg_liverecord.jpg" width="70%"></div>
                <p>From now on, every action taken (eg. controlling
                  lights/appliances from the user interface or with a remote
                  control), will be recorded. By default, it will be put 1
                  second delay between each command, though we can also switch
                  to other kinds of timings. One of these is called Mimic. When
                  Mimic is selected, HomeGenie will replicate exactly the delay
                  we put between commands while recording.</p>
                <div align="center"><img title="Record options" alt="Record options"
                    src="/docs/images/hg_liverecord_options.jpg" width="70%"></div>
                <p>By clicking the "Save" option in the footer bar, we'll save
                  the current interactive recording session.</p>
                <header>
                  <h2>Wizard Scripts</h2>
                </header>
                <p>After saving an interactive recording session, a new "Wizard
                  Script" (macro), containing all performed commands, will be
                  created and opened in the Program Editor. Here we can
                  add/remove commands, change the name, the description and the
                  associated automation group. </p>
                <div align="center"><img title="Record options" alt="Record options"
                    src="/docs/images/hg_macrorecord.jpg" width="70%"></div>
                <p>A Wizard Script requires no programming knowledge and it can
                  either be created from the "Record" option, as just discussed,
                  or from the automation section itself by selecting the "Add
                  new program" option from its Actions menu.</p>
                <h3>Manual Script Execution</h3>
                <p>A Wizard Script can be added like a module to a group.</p>
                <div align="center"><img title="Record options" alt="Record options"
                    src="/docs/images/hg_program_add.jpg" width="70%"></div>
                <p>After adding it to a group, it will shows up as a button in
                  the Control menu. Tapping this button it will execute the
                  script.
                  A coloured led, on the left side of the button, will tell us
                  when the script is running (green light) or when it's idle
                  (yellow light).</p>
                <div align="center"><img title="Record options" alt="Record options"
                    src="/docs/images/hg_program_run.jpg" width="70%"></div>
                <p>A script can also be executed from the Program Editor's
                  Actions menu by selecting the "Run" option.</p>
                <h3>Automated Script Execution</h3>
                <p>Beside the manual execution, we can automatically execute a
                  script whenever some conditions are met.
                  By tapping the "Add Condition" button, we will be able to set
                  all the "Program Conditions" that will trigger the execution
                  of the script.</p>
                <div align="center"><img title="Record options" alt="Record options"
                    src="/docs/images/hg_wizardscript.jpg" width="70%"></div>
                <p>In the above picture we have an example where we want to turn
                  on two lights whenever the motion is detected from a sensor
                  and then switch them off after 1 minute. </p>
                  <p>A script can also be triggered on time based events as explained in the <a href="scheduler.php">Events Scheduler</a> page.</p>
                <div class="row">
                  <div class="4u" align="left"><a href="/docs/quickstart.php">&lt;&lt; Quick Start</a></div>
                  <div class="4u" align="center"><a href="/docs/scenarios.php#">TOP</a></div>
                  <div class="4u" align="right"><a href="/docs/alarmsystem.php">Setting up a basic Alarm System &gt;&gt;</a></div>
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
