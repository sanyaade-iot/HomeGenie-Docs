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
                  <h2>Getting started</h2>
                  <h3>Automation Groups and Programs</h3>
                </header>
                <p> 
                 
From <span style="font-style: italic;">Configure-&gt;Automation</span> section we can create new scenarios, extend system functionalities, add new features and achieve almost any desiderable sort of automation and interaction between our devices.<br>
            <br>
            Automation section consists of configurable groups and programs. Each program is identified by a uinique numeric ID.<br>
            Programs with ID below 1000 are system programs that we will find installed by default.<br>
            <br>
            <div align="center"> <a title="Automation Groups" href="images/docs/automation_01.jpg" rel="gallery" class="pirobox_gall"><img src="images/docs/automation_01.jpg" alt="" width="300"></a> <a title="Automation Programs" href="images/docs/automation_02.jpg" rel="gallery" class="pirobox_gall"><img src="images/docs/automation_02.jpg" alt="" width="300"></a><br>
              <br>
            </div>
            <h3> Adding a new Program</h3>
            Since automation programs are sorted into groups, first we have to choose a group for the program. We can add a new group as well by tapping the&nbsp; <em>Add Group</em>&nbsp; button.<br>
            After that, in the&nbsp; <i>Action</i>s&nbsp; menu of the group screen, we'll have the button for adding a new program and that will lead us to the <i>Program Editor</i>.<br>
            <br>
            <div align="center"> <a title="Program Types" href="images/docs/automation_03.jpg" rel="gallery" class="pirobox_gall"><img src="images/docs/automation_03.jpg" alt="" width="260"></a> <a title="Wizard Script Editor" href="images/docs/automation_04.jpg" rel="gallery" class="pirobox_gall"><img src="images/docs/automation_04.jpg" alt="" width="260"></a> <a title="CSharp Program Editor" href="images/docs/automation_05.jpg" rel="gallery" class="pirobox_gall"><img src="images/docs/automation_05.jpg" alt="" width="260"></a> </div>
            <br>
            For our newly added program we can now choose the type: <span style="font-weight: bold;">Wizard</span>, <span style="font-weight: bold;">CSharp</span>, <span style="font-weight: bold;">Javascript</span>, <span style="font-weight: bold;">Python</span> , <span style="font-weight: bold;">Ruby</span>.<br>
            Despite of the selected type, a program consist of two blocks: the <span style="font-style: italic;">Trigger Condition</span> and the <span style="font-style: italic;">Code to Run</span>.<br>
            If a <span style="font-style: italic;">Trigger Condition</span> is defined, the automation engine will automatically execute the <span style="font-style: italic;">Code to Run</span> whenever the <span style="font-style: italic;">Trigger Condition</span> is satisfied.<br>
            We can also choose between different triggering behavior (<span style="font-style: italic;">Trigger Type</span>):<br>
            <ul>
              <li><span style="text-decoration: underline;">when condition evaluation switches to true<br>
                </span><small>the <span style="font-style: italic;">Code to Run</span> will be executed once, when the condition changes from false to true. To trigger again, the condition must first change to false and then back to true.</small></li>
              <li><span style="text-decoration: underline;">when condition evaluation switches to false</span><br>
                <small>the <span style="font-style: italic;">Code to Run</span> will be executed once, when the condition changes from true&nbsp; to false. To trigger again, the condition must first change to true and then back to false.</small></li>
              <li><span style="text-decoration: underline;">run once, when condition evaluation returns true</span><br>
                <small>the <span style="font-style: italic;">Code to Run</span> will be executed once, whenever the condition is true.</small></li>
              <li><span style="text-decoration: underline;">when condition evaluation returns true</span><br>
                <small>the <span style="font-style: italic;">Code to Run</span> will be continuosly executed (loop) until the condition is true.</small></li>
              <li><span style="text-decoration: underline;">when condition evaluation returns false</span><br>
                <small>the <span style="font-style: italic;">Code to Run</span> will be continuosly executed (loop) until the condition is true.</small></li>
            </ul>
            If a <span style="font-style: italic;">Trigger Condition</span> is not defined the program can otherwise be executed manually by the user at any time.<br>
            <br>
            <h3>Wizard Script</h3>
            A Wizard script do not require any programming knowledge. It can be created with a few clicks/taps on the screen.<br>
            See <a title="Wizard Scenarios" href="http://www.homegenie.it/docs/scenarios.php"><span style="font-style: italic;">Creating Scenarios</span></a> for an explaination about how to create a Wizard script.<br>
            <br>
            <h3> Javascript, Python and Ruby</h3>
            When we need to implement more complex automation tasks, we can choose a more advanced language as Javascript, Phyton or Ruby.<br>
            For all of them we can use some <em>Helper Classes</em> that are accessible using the builtin <strong><em>hg</em></strong> object. For instance if we want to turn on the porch light we'll use the <em>Modules </em>helper class like this:<br>
            <pre class="csharp">hg.Modules.WithName('Porch Light').On()
</pre> For a complete documentation of <em>Helper Classes</em> see <a title="Helper Class Reference" href="hgsdk.html" target="_blank"><em>Helper Class Reference</em></a> section in this manual.<br>
            <br>
            <h3>CSharp<br>
            </h3>
            When using CSharp automation program there are some difference: there is no <em>hg</em> object and we can call a <em>Helper Class</em> directly using its name. So, as the previous example, for turning on the porch light, we'll write:&nbsp; <br>
            <pre class="csharp">Modules.WithName("Porch Light").On();               </pre>
            <br>
            <h3>Raspberry-IO<br>
            </h3>
            If you have got HomeGenie running on a Raspberry Pi, you can also easily program GPIO, I2C, SPI by using the <em>Raspberry-IO</em> helper class.<br>
            See <a title="Having fun with HG and Raspberry Pi" href="raspberrypi.html"><em>Having fun with HG and Raspberry Pi</em></a> for more details on Raspberry Pi programming with HG.<br>
            For getting help or examples about using this class from Python and Ruby see also this <a href="http://www.homegenie.it/forum/index.php?topic=133.0" target="_blank">forum post</a>.<br>
            <br>
            <h3><span style="font-weight: bold;">Automation Program Module</span></h3>
            Each automation program have a module associated to it. The program module is used to store program's data and it is threated by HG just as a standard module.<br>
            So it can be added to <span style="font-style: italic;">Control Groups</span> and have a widget for displaying its data in the <span style="font-style: italic;">Control Panel</span>. The default widget for a program is a simple button that will run the program itself once clicked.<br>
            Using the <span style="font-style: italic;">Program Helper</span> class we can set a different widget and change the way the program is shown in the <span style="font-style: italic;">Control Panel</span> and so, the program's parameters that will be displayed.<br>
            See the <a title="About Widgets" href="widgets.html"><em>Widgets</em></a> section for further informations.<br>
                 
                 
                </p>
					 <p>&nbsp;</p>
<!--
                  <h3>Paradigm</h3>
						<p></p>
 						<p>One important component of HomeGenie is its <em>Automation
                	Program Engine (APE)</em>. </p>
            		<p>APE can be imagined as the <a target="_blank" title="Central Nervous System on Wikipedia"

                href="http://en.wikipedia.org/wiki/Central_nervous_system">Central
                Nervous System</a> of HomeGenie. So it integrates the
              information that it receives from, and coordinates the activity
              of, all modules (connected devices, services, virtual modules,
              etc..).</p>
            <p>Programs running inside APE can thus be imagined as <a target="_blank"

                title="Neuron on Wikipedia" href="http://en.wikipedia.org/wiki/Neuron">nerve
                cells</a> that processes and transmits information through event
              signals.<br>
              So an automation program can receive signals from any modules (or
              external service) and may react generating other signals that are
              then processed from the system.</p>
            <p>APE programs&nbsp;can be built using most common programming languages as Javascript, C#, Phyton and Ruby. This
              kind of programs are also called <strong>APP </strong>(<em>Automation
                Program Plugin</em>) and can be managed from HomeGenie
              Automation section.</p>
            <p>HomeGenie APPs can implement any sort of new functionality within
              few lines of code, taking advantage of some <strong>Helper
                Classes</strong> that will make easier, even for novice
              programmers, to control automation modules and interoperate with
              external services and "things". These helper classes will also try
              to make program's instructions sound more like human readable
              sentences.</p>
            <br>
            <div align="center"> <a title="Program Types" href="images/docs/automation_03.jpg" rel="gallery" class="pirobox_gall"><img src="images/docs/automation_03.jpg" alt="" width="300"></a></div>
            <br>
              -->
              
              
					<div class="row">
                  <div class="4u" align="left"><a href="automation_introduction.php">&lt;&lt; Introduction</a></div>
                  <div class="4u" align="center"><a href="#">TOP</a></div>
						<div class="4u" align="right"><a href="automation_overview.php">Overview by examples &gt;&gt;</a></div>
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
