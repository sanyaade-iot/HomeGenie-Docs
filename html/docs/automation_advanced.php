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
                                    <h2>Advanced topics</h2>
                                </header>
                                <h3>Adding configuration parameters to a program</h3>
                                <p>
                                    In some case it is useful to let user configure some program parameters without having to dig into the source code. 
                                    To this purpose, the <a href="doxy/a00007.html" target="_blank">Program Helper</a> class implement the <a href="doxy/a00007.html#a7ba04163f85d61d47297601bd28c84f7" target="_blank">AddInputField</a> method.
                                    <br>
                                    For instance, the <span style="font-style: italic">Energy Saving Mode</span> program, adds a configuration parameter to let the user set the maximum allowed level for dimmer lights.
                                </p>
                                <div align="center">
                                    <a title="Program Cofiguration Parameters" href="images/docs/advancedtopics_01.jpg" rel="gallery" class="pirobox_gall"><img src="images/docs/advancedtopics_01.jpg" alt="" width="60%"></a>
                                </div>
                                <p>
                                    The <a href="doxy/a00007.html#a7ba04163f85d61d47297601bd28c84f7" target="_blank">AddInputField</a> method is meant to be used inside the <a href="doxy/a00007.html#aba65b477efba06ac22a4f908881bbece" target="_blank">Program.Setup</a> method delegate and placed in the <span style="font-style: italic">Trigger Code</span> block, as shown in the code below:
                                    <br>
                                    <pre class="csharp">Program.Setup(()=&gt;
{              
    Program.AddInputField("MaxLevel", "40", "Keep level below the following value");
});            </pre>
                                </p>
                                <p>
                                    This will automatically add a new input field in the program options popup as already seen in the previous screenshot.
                                    <br>
                                    To read the current value of a configuration parameter we will use the <a href="doxy/a00007.html" target="_blank">Program Helper</a> <a href="doxy/a00007.html#a166369d6ddf04d0fe9b41f6f7250cbcb" target="_blank">InputField</a> method:
                                    <br>
                                    <pre class="csharp">var maxLevel = Program.InputField("MaxLevel");
</pre>
                                </p>
                                <br>
                                <header>
                                    <h2> Adding new features to modules</h2>
                                </header>
                                <p>
                                    Let's look at the <span style="font-style: italic;">Energy Saving Mode</span> program once more. Beside let the user configure the maximun dimmer level, the program also let the user specify what devices will be controlled by it.
                                    <br>
                                    This is where the <a href="doxy/a00007.html#a59e041d4aa2ea5fcd00d4a8b5efacc6b" target="_blank">AddFeature</a> method from the <a href="doxy/a00007.html" target="_blank">Program Helper</a> class become useful. The <a href="doxy/a00007.html#a59e041d4aa2ea5fcd00d4a8b5efacc6b" target="_blank">AddFeature</a> method
                                    will attach to a given types of module a checkbox or an input text field.
                                    <br>
                                    The program will then only select the modules having the Energy Saving Mode "feature" enabled and so adjust their dimmer level value.
                                    <br>
                                    As seen for the <a href="doxy/a00007.html#a7ba04163f85d61d47297601bd28c84f7" target="_blank">AddInputField</a> method, also the <a href="doxy/a00007.html#a59e041d4aa2ea5fcd00d4a8b5efacc6b" target="_blank">AddFeature</a> method is meant to be included in the <a href="doxy/a00007.html#aba65b477efba06ac22a4f908881bbece" target="_blank">Program.Setup</a> method delegate:
                                    <br>
                                    <pre class="csharp">Program.Setup(()=&gt;
{              
    Program.AddInputField("MaxLevel", "40", "Keep level below the following value");
    Program.AddFeature("Dimmer", 
                       "EnergyManagement.EnergySavingMode",
                       "Energy Saving Mode enabled light");
});            </pre>
                                </p>
                                <p>
                                    To select modules with a specific feature active, we can use the <span style="font-style: italic">Modules Helper</span> 
                                    <a href="doxy/a00004.html#aee44d6b7a86132df6f5061d88511d34a" target="_blank">WithFeature</a> selector, while to check if a certain
                                    module has a feature active we can use the <a href="doxy/a00003.html#ab97457cb185334f6dc26a99255d67977" target="_blank">HasFeature</a> property:
                                    <br>
                                    <pre class="csharp">When.ModuleParameterChange( (module, property) =&gt; {
    if (module.HasFeature("EnergyManagement.EnergySavingMode") 
        &amp;&amp; property.Name == "Status.Level")
    {
        // Adjust module level if needed ....
    }
});
</pre>
                                </p>
                                <p>
                                    In the following screenshots we can see, in the module's options popup, the resulting checkbox out of the <a href="doxy/a00007.html#a59e041d4aa2ea5fcd00d4a8b5efacc6b" target="_blank">AddFeature</a> method and in the program's options popup the summary of implemented features and configuration parameters.
                                </p>
                                <div align="center">
                                    <a title="Module Options and Features Popup" href="images/docs/advancedtopics_02.jpg" rel="gallery" class="pirobox_gall"><img src="images/docs/advancedtopics_02.jpg" alt="" width="300"></a><a title="Program Implementation Details" href="images/docs/advancedtopics_03.jpg" rel="gallery" class="pirobox_gall"><img src="images/docs/advancedtopics_03.jpg" alt="" width="300"></a>
                                </div>
                                <br>
                                <header>
                                    <h2>Virtual Modules</h2>
                                </header>
                                <p>
                                    We already learned that each program comes with an associated module. But we could also add an arbitrary number of modules
                                    that our program will manage. The <a href="doxy/a00007.html#a6ce0c82ab9edb50be6689919cf29c1ca" target="_blank">Program.AddVirtualModules</a> method is meant for this purpose. One of the system programs using this method, is the <em>Philips Hue Bridge</em> program.
                                    <br>
                                    It creates virtual modules that will let HG control the color lights connected to the Philips bridge hardware.
                                    <br>
                                    <pre class="csharp">Program.AddVirtualModules("HomeAutomation.PhilipsHue", 
                          "Dimmer", 
                          "homegenie/generic/colorlight", 
                          1, 5);</pre>
                                </p>
                                <p>
                                    The first parameter of the <a href="doxy/a00007.html#a6ce0c82ab9edb50be6689919cf29c1ca" target="_blank">AddVirtualModules</a> command is the domain associated to the modules.
                                    <br>
                                    The second parameter set the type of the device.
                                    <br>
                                    The third parameter set the control widget that will be used to display these modules in the <em>Control Panel</em>.
                                    <br>
                                    The last two parameters set the start and the end address of the modules that are being added.
                                </p>
                                <br>
                                <header>
                                    <h2>Handling custom Web Service calls</h2>
                                </header>
                                <p>
                                    To handle custom web service calls, we will be using the <a href="doxy/a00001.html" target="_blank">Events Helper</a> <a href="doxy/a00001.html#a58515455945c35783cde47d21f844663" target="_blank">WebServiceCallReceived</a> method.
                                    <br>
                                    This method let our program register and listen for a particular API call.
                                    <br>
                                    <pre class="csharp">When.WebServiceCallReceived("HomeAutomation.PhilipsHue", ( args ) =&gt; 
{
    // url path after "/api/" is passed as argument of the delegate 
    string[] reqs = ((string)args).Split('/');
    // ...
});
</pre>
                                    In the above example, all api calls starting with                                     <pre>    /api/<strong>HomeAutomation.PhilipsHue</strong></pre>
                                    will trigger the execution of our <a href="doxy/a00001.html#a58515455945c35783cde47d21f844663" target="_blank">WebServiceCallReceived</a> delegate.
                                    <br>
                                    The delegate will also receive an argument (<em>args</em>) with the relative url path (not including <em>/api/</em> string).
                                    <br>
                                    For example, the api call seen in the previous paragraph, will be passed as:
                                    <br>
                                    <pre>    HomeAutomation.PhilipsHue/2/Control.On</pre>
                                    So we can now just "split" this string to obtain the address of the module (<em>2</em>) and the command to be performed (<em>Control.On</em>).
                                    <br>

                                </p>
                                <p>
                                    &nbsp;
                                </p>

                                <div class="row">
                                    <div class="4u" align="left">
                                        <a href="automation_overview.php">&lt;&lt; Overview by example</a>
                                    </div>
                                    <div class="4u" align="center">
                                        <a href="#">TOP</a>
                                    </div>
                                    <div class="4u" align="right">
                                        <a href="automation_widgets.php">About Widgets &gt;&gt;</a>
                                    </div>
                                </div>

                            </section>

                        </div>

                        <div class="3u">
                            <!-- Left Sidebar -->
                            <?php
                                include $_SERVER['DOCUMENT_ROOT'] . '/docs/includes/menu_usersguide.php';
 ?>
                            <!-- Latest Forum Posts -->
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
