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
                  <h2>Overview by examples</h2>
                  <h3>Controlling modules</h3>
                </header>
                <p> 
                 
            So, as seen in the previous example, to control modules we will use the <em>Modules</em> helper class. The following examples are C# snippet but can be used for Javascript, Phyton and Ruby as well by adding the <em>hg.</em> prefix to the helper class name.<br>
            <h3>Selecting a module by Name</h3>
            <pre class="csharp">// select light with name "Ceiling Light"
var ceilingLight = Modules.WithName("Ceiling Light");
// turn it on
ceilingLight.On();
// wait 5 seconds and turn it off
Pause(5);
ceilingLight.Off();</pre>
            <h3>Selecting modules by Domain / Address</h3>
            <pre class="csharp">// select Z-Wave node 5
var zwave5 = Modules.InDomain("HomeAutomation.ZWave").WithAddress("5");
// select X10 module B4
var x10B4 = Modules.InDomain("HomeAutomation.X10").WithAddress("B4");
// turn them off
zwave5.Off();
x10B4.Off();</pre>
            <h3>Selecting modules by device Type</h3>
            <pre class="csharp">// select all switch type devices
var switches = Modules.OfDeviceType("Switch");</pre>
            <h3>Selecting modules in the same Group</h3>
            <pre class="csharp">// select and turn off all lights in the living room
Modules
    .InGroup("Living Room")
    .OfDeviceType("Dimmer,Light")
    .Off();</pre>
            <h3> </h3>
            <h3> </h3>
            <h3>Getting a reference to a module</h3>
            If we want to get a reference to the instance of a module selected with the <em>Modules</em> helper class, we will use the<em> Get()</em> method and then we will be able to access directly to all module parameters and read/modify them.<br>
            <pre class="csharp">// get the module instance and set a custom parameter on it
var module = Modules.WithName("Test Module").Get();
module.Parameter("MyCustom.Parameter").Value = "Just testing";</pre>
            <h3>Iterating through selected modules</h3>
            <span style="font-style: italic;">Javascript</span><br>
            <pre class="csharp">var selection = hg.Modules.InGroup("Living Room").SelectedModules;
for(i = 0; i &lt; selection.length; i++)
{
    var module = selection[i];
    module.On();
}</pre>
            <span style="font-style: italic;">CSharp</span><br>
            <pre class="csharp">var selection = Modules.InGroup("Living Room").SelectedModules;
foreach(var module in selection)
{
    module.On();
}</pre>
            <p>&nbsp;</p>
            <h2>Handling Events</h2>
            To handle module events (eg. a light changing on/off state, a temperature sensor value changes, ...) we will be using the <span style="font-style: italic;">Events Helper</span> class.<br>
            <h3> Forcing max dimmer level to limit power usage</h3>
            <pre class="csharp">When.ModuleParameterChange( (module, parameter) =&gt; 
{
    if (module.IsOfDeviceType("Dimmer") &amp;&amp; parameter.Is("Status.Level"))
    {
        // limit max dimmer level to 40% (Status.Level is stored as 0.0 to 1.0)
        if (parameter.DecimalValue &gt; 0.4)
        {
            module.Level = 40;
            // we don't want this event to be further processed by other listeners
            return false;
        }
    }
    // this event has not been handled here, so we allow it to be routed to other listeners
    return true;
});           </pre>
            Commonly used device type names are: <span style="font-style: italic;"><br>
              <br>
              Generic</span>, <span style="font-style: italic;">Program</span>, <span style="font-style: italic;">Switch</span>, <span style="font-style: italic;">Light</span>, <span style="font-style: italic;">Dimmer</span>, <span style="font-style: italic;">Sensor</span>, <span style="font-style: italic;">Temperature</span>, <span style="font-style: italic;">Siren</span>, <span style="font-style: italic;">Fan</span>, <span style="font-style: italic;">Thermostat</span>, <span style="font-style: italic;">Shutter</span>, <span style="font-style: italic;">DoorWindow</span>.<br>
            <br>
            Commonly used parameter names are: <br>
            <span style="font-style: italic;"><br>
              Status.Level</span>, <span style="font-style: italic;">Status.Battery</span>, <span style="font-style: italic;">Sensor.Generic</span>, <span style="font-style: italic;">Sensor.Temperature</span>, <span style="font-style: italic;">Sensor.Luminance</span>, <span style="font-style: italic;">Sensor.Humidity</span>, <span style="font-style: italic;">Sensor.DoorWindow</span>, <span style="font-style: italic;">Sensor.MotionDetect</span>, <span style="font-style: italic;">Sensor.Alarm</span>, <span style="font-style: italic;">Sensor.CarbonMonoxide</span>, <span style="font-style: italic;">Sensor.CarbonDioxide</span>, <span style="font-style: italic;">Sensor.Smoke</span>, <span style="font-style: italic;">Sensor.Heat</span>, <span style="font-style: italic;">Sensor.Flood</span>, <span style="font-style: italic;">Sensor.Tamper</span>, <span style="font-style: italic;">Meter.Watts</span>.<br>
            <br>
            All device type and parameter names are arbitrary and any user defined name is also possible. <br>
            It's the way our automation programs handle these that give them a specific semantic and logic mean.<br>
            <br>
            <h2>Time based events</h2>
            Some time we will need to run a program or take some actions upon time based events. The <span style="font-style: italic;">Scheduler Helper</span> class will let our programs to verify if a particular time event is occuring.<br>
            For better understanding how HG Scheduler works, see <a target="_blank" title="Events scheduler" href="http://www.homegenie.it/docs/scheduler.php">Events scheduler</a> documentation page.<br>
            <h3>Checking for a scheduler event occurence</h3>
            <pre class="csharp">// turn on the porch lights at sunrise
var porchLights = Modules.InGroup("Porch").OfDeviceType("Dimmer,Light");
var sunrise = Scheduler.WithName("Sunrise");
if (sunrise.IsScheduling())
{
    porchLights.On();
}
// check custom cron event (everyday at 11pm)
else if (Scheduler.IsScheduling("0 23 * * *"))
{
    porchLights.Off();
}</pre>
            <h3>Adding or updating scheduler events</h3>
            We can also programmatically add or update events to the Scheduler. This is what happen with the "Weather Underground Widget" program. It queries an external webservice to get current location enviromental data and also sunrise and sunset time. Once obtained these data, it updates the HG Scheduler by setting the "Sunrise" and "Sunset" events with data updated from the external webservice.<br>
            <pre class="csharp">// programmatically set the @Sunrise event to 6.40pm (fixed value)
Scheduler
    .WithName("Sunrise")
    .SetSchedule("40 18 * * *");
                  <br>// programmatically add a custom event (every Monday and Thursday at 4pm)
Scheduler
    .WithName("MyEvent")
    .SetSchedule("0 16 * * 1,4");</pre>
            <p>&nbsp;</p>
            <h2>Interacting with the external world</h2>
            Using the <span style="font-style: italic;">Net Helper</span> class, a program can interact with external world, get data from thirth party web service and integrate it into HG, for instance holding the data gained from the web service into the program module parameters.<br>
            For a complete working example we can see how the Philips Hue Bridge program (see Device and Things group) interacts with the Philips Hue hardware and how it creates virtual Color Light modules and make them controllable just as these were built-in in HG.<br>
            <span style="font-style: italic;">Net Helper</span> class also implement other network functionalities like <span style="font-style: italic;">Pinging </span>external hosts or sending <span style="font-style: italic;">E-Mail</span> with file attachments.<br>
            <h3>Calling an external WebService</h3>
            <pre class="csharp">// check if the freegeoip.net server is reachable
if (Net.Ping("freegeoip.net"))
{
    // get current location name from the freegeoip web service
    var iplocation = Net.WebService("<a href="http://freegeoip.net/json/" target="_blank">http://freegeoip.net/json/</a>").GetData();
    Program.Parameter("FreeGeoIP.Location").Value = iplocation.city;
    // show an event popup in the HG UI with the location name
    Program.Notify("IP to Location", iplocation.city);
}
else
{
    Program.Notify("IP to Location", "Service not reachable.");
} </pre>
            <h3>Sending e-mails</h3>
            <pre class="csharp">// send an e-mail (account settings must be configure from "Messaging and Social" group)
Net.SendMessage("pippo@pluto.com", "Test message", "Hello World!");            </pre>
            <h3>Tcp Socket and Serial Port I/O</h3>
            HG also offer other possibilities for communicating with external world by using the <em>Tcp Helper</em> class and <em>SerialPort Helper</em> class. The first one implement simple Tcp Socket I/O while the other one implement I/O over a standard Serial Port.<br>
            Both are using same identical methods and syntax. For an example see <em>Serial Port I/O Test</em> program from <em>Devices and Things</em> group.<br>
            <br>
            <h2>Need more examples?</h2>
            HomeGenie has got a bunch of system programs that can also be edited and reviewed just as user programs. So to get more complete examples we can dig into the source code of these programs as well.<br>

                             
                </p>
					 <p>&nbsp;</p>
              
              
					<div class="row">
                  <div class="4u" align="left"><a href="automation_getstarted.php">&lt;&lt; Getting started</a></div>
                  <div class="4u" align="center"><a href="#">TOP</a></div>
						<div class="4u" align="right"><a href="automation_advanced.php">Advanced topics &gt;&gt;</a></div>
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
