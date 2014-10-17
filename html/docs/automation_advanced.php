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
                  <h2>Advanced topics</h2>
                  <h3>Adding configuration parameters to a program</h3>
                </header>
                <p> 
                 In some case it is useful to let user configure some program parameters without having to dig into the source code. For this purpose, the <span style="font-style: italic;">Program Helper</span> class offers the <strong><em>AddInputField</em> </strong>method.<br>
            For instance, the <em>Energy Saving Mode</em> program (available from <em>Energy Management</em> group), let the user configure the maximum allowed dimmer level.<br>
            <br>
            <div align="center"> <a title="Program Cofiguration Parameters" href="images/docs/advancedtopics_01.jpg" rel="gallery" class="pirobox_gall"><img src="images/docs/advancedtopics_01.jpg" alt="" width="300"></a> </div>
            <br>
            The <em><strong>AddInputField</strong></em> method is meant to be used inside the <em>Program Helper</em> <em><strong>Setup</strong> </em>method delegate and placed in the <em>Trigger Code</em> block, as shown in the code below:<br>
            <pre class="csharp">Program.Setup(()=&gt;
{              
    Program.AddInputField("MaxLevel", "40", "Keep level below the following value");
});            </pre>
            This will automatically add a new input field in the program options popup as already seen in the previous screenshot.<br>
            To read the current value of a configuration parameter we will use the <em>Program Helper</em> <em><strong>InputField</strong></em> method:<br>
            <pre class="csharp">var maxLevel = Program.InputField("MaxLevel");
</pre> <br>
            <h2> Adding new features to modules</h2>
            Let's see at the <span style="font-style: italic;">Energy Saving Mode</span> program once again. Beside letting the user configure the maximun dimmer level, the program also let the user specify what devices will be controlled by it.<br>
            This is where the <em><strong>AddFeature</strong></em> method from the Program Helper class become useful. The <em><strong>AddFeature </strong></em>method will "attach" to a given types of module a checkbox or an input text field.<br>
            The program will then select only the modules having the Energy Saving Mode "feature" enabled and so adjust their dimmer level value.<br>
            As seen for the <em>AddInputField</em> method, also the <em><strong>AddFeature </strong></em>method is meant to be included in the Program.Setup method delegate:<br>
            <pre class="csharp">Program.Setup(()=&gt;
{              
    Program.AddInputField("MaxLevel", "40", "Keep level below the following value");
    Program.AddFeature("Dimmer", "EnergyManagement.EnergySavingMode", "Energy Saving Mode enabled light");
});            </pre>
            To select modules with a specific feature active we can use the <em>Modules Helper</em> <strong><em>WithFeature</em></strong> selector, while to check if a certain module has a feature active we can use <strong><em>HasFeature</em></strong> property:<br>
            <pre class="csharp">When.ModuleParameterChange( (module, property) =&gt; {
    if (module.HasFeature("EnergyManagement.EnergySavingMode") &amp;&amp; property.Name == "Status.Level")
    {
        // Adjust module level if needed ....
    }
});
</pre> In the following screenshots we can see, in the module's options popup, the resulting checkbox out of the <em><strong>Addfeature</strong></em> method and in the program's options popup the summary of implemented features and configuration parameters.<br>
            <br>
            <div align="center"> <a title="Module Options and Features Popup" href="images/docs/advancedtopics_02.jpg" rel="gallery" class="pirobox_gall"><img src="images/docs/advancedtopics_02.jpg" alt="" width="300"></a> <a title="Program Implementation Details" href="images/docs/advancedtopics_03.jpg" rel="gallery" class="pirobox_gall"><img src="images/docs/advancedtopics_03.jpg" alt="" width="300"></a> </div>
            <br>
            <h2>Virtual Modules</h2>
            We already learned that each program comes with an associated module. But we could also add an arbitrary number of modules that our program will manage. The <em>Program Helper</em> <strong><em>AddVirtualModules </em></strong>method is meant for this purpose. One of the system programs using this method, is the <em>Philips Hue Bridge</em> program.<br>
            It creates virtual modules that will let HG control the color lights connected to the Philips bridge hardware. <br>
            <pre class="csharp">Program.AddVirtualModules("HomeAutomation.PhilipsHue", "Dimmer", "homegenie/generic/colorlight", 1, 5);</pre>
            The first parameter of the <em><strong>AddVirtualModules</strong></em> command is the domain associated to the modules.<br>
            The second parameter set the type of the device.<br>
            The thirth parameter set the control widget that will be used to display these modules in the <em>Control Panel</em>.<br>
            The last two parameters set the start and the end address of the modules that are being added.<br>
            The <em>Color Light</em> widget, associated to these modules, will send commands in the form:<br>
            <pre>    http://&lt;hg_address&gt;<span style="font-style: italic;">/api/&lt;module_domain&gt;/&lt;module_address&gt;/&lt;command&gt;/&lt;param&gt;</span></pre>
            An example call is:<br>
            <pre>    http://<span style="font-style: italic;">192.168.10.5/api/HomeAutomation.PhilipsHue/2/Control.On</span></pre>
            So, the <span style="font-style: italic;">Philips Hue Birdge</span> program must also handle these web service calls in order to invoke the corresponding API command on the Philips Hue Bridge hardware (using the <em>Net Helper</em> class).<br>
            See the next paragraph about how to handle custom web service calls.<br>
            &nbsp;<br>
            <h2>Handling custom Web Service calls</h2>
            To handle custom web service calls, we will be using the <em>Events Helper</em> <em><strong>WebServiceCallReceived</strong></em> method.<br>
            This method let our program register and listen for a particular API call.<br>
            <pre class="csharp">When.WebServiceCallReceived("HomeAutomation.PhilipsHue", ( args ) =&gt; 
{
    // url path after "/api/" is passed as argument of the delegate 
    string[] reqs = ((string)args).Split('/');
    // ...
});
</pre>In the above example, all api calls starting with
            <pre>    /api/<strong>HomeAutomation.PhilipsHue</strong></pre>
            will trig the execution of our WebServiceCallReceived delegate.<br>
            To the delegate will be also passed an argument (<em>args</em>) with the relative url path (not including <em>/api/</em> string).<br>
            For example, the api call seen in the previous paragraph, will be passed as:<br>
            <pre>    HomeAutomation.PhilipsHue/2/Control.On</pre>
            So we can now just "split" this string to obtain the address of the module (<em>2</em>) and the command to be issued (<em>Control.On</em>).<br>
                             
                </p>
					 <p>&nbsp;</p>
              
              
					<div class="row">
                  <div class="4u" align="left"><a href="automation_overview.php">&lt;&lt; Overview by example</a></div>
                  <div class="4u" align="center"><a href="#">TOP</a></div>
						<div class="4u" align="right"><a href="automation_widgets.php">About Widgets &gt;&gt;</a></div>
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
