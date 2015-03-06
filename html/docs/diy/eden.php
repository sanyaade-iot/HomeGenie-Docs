<!DOCTYPE html>
<!--
	Halcyonic 3.1 by HTML5 UP	html5up.net | @n33co	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)-->
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>HomeGenie DIY Ideas: Eden, Universal IR Controller and Network Thermostat</title>
    <meta name="description" content="Eden Multipurose Sensor Board for Raspberry Pi and Banana Pi">
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
                  <h2 style="font-family:'Lobster',sans-serif">Eden <span style="font-size:9pt;color:gray"><span style="font-family:sans-serif">powered by</span> HomeGenie</span></h2>
                  <h3>Programmable Wi-Fi Thermostat and Universal IR Controller</h3>
                </header>

                <p>
		<span  style="font-family:'Lobster',sans-serif">Eden</span> is a DIY project based on <span style="font-weight:bold">HomeGenie</span> software and <span style="font-weight:bold">Eden Sensor Board</span>, a <i>Multipurpose Sensor Board</i> for <u>Raspberry Pi</u>.<br />
		Its main purpose is to implement a programmable wi-fi thermostat and universal IR transceiver, but also other functionalities can be easily added by using various connectors and a small prototype area available on the board.
		</p>

	        <p align="center">
			<a title="Eden V1 with Ssd 1306 Oled" href="images/eden/eden_v1_oled.gif" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_v1_oled.gif" alt="" width="500"></a>
		</p>

		<h3>Component Listing</h3>
                <ul style="list-style-type:square;padding-left:30px;">
                        <li><a href="http://www.raspberrypi.org/" target="_blank">Raspberry Pi</a> (model A or A+ suggested) with 5V power supply</li>
                        <li><a href="http://elinux.org/RPi_USB_Wi-Fi_Adapters" target="_blank">Wi-Fi USB adapter</a></li>
                        <li><a href="#edenpcb">Eden Sensor Board</a> and <a href="/download.php">HomeGenie SDCard</a></li>
                </ul>


		<h3>Features you'll get out of the box</h3>
		<ul style="list-style-type:square;padding-left:30px;">
		<li>Temperature and Luminance sensing</li>
		<li>Programmable IR transceiver for controlling AC/AV and other IR controllable devices</li>
		<li>External enviroment data sensing (using third party internet service)</li>
		<li>"Wizard" scripting for creating scenarios and other automation tasks</li>
		<li>Builtin statistics, user interface and automation engine powered by HomeGenie</li>
		<li><u>Modular and expandible</u> hardware system (see Eden Board specifications below)</li>
		<li>Web Service API</li>
		<li>Web based IDE with a friendly user interface for easy <span style="font-weight:bold">GPIO</span>/<span style="font-weight:bold">I2C</span>/<span style="font-weight:bold">SPI</span>/<span style="font-weight:bold">UART</span>/<span style="font-weight:bold">Arduino&trade;</span> programming, using your favourite language (C#, Javascript, Python, Ruby)</li>
		</ul>

		<a name="edenpcb"></a>
		<h3>About Eden Sensor Board</h3>
		<p>
		We can choose between two models of this board. The first one (v1) is based on <a href="http://www.adafruit.com/product/856" target="_blank">MCP3008 ADC</a>, while the second one (v2) is based on <a href="http://arduino.cc/en/Main/ArduinoBoardProMini" target="_blank">Arduino&trade; Pro Mini 3V</a>.<br/>
		Click on the link below to find out more:
		</p>
		<ul style="list-style-type:square;padding-left:30px;">
		<li><a href="eden_v1.php" style="font-weight:bold;font-size:18px">Eden Sensor Board v1 (MCP3008 version)</a></li>
		<li><a href="eden_v2.php" style="font-weight:bold;font-size:18px">Eden Sensor Board v2 (Arduino&trade; Pro Mini version)</a></li>
		</ul>

		
		<a name="edenoled"></a>
		<h3>SSD1306 OLED Display with control buttons</h3>
		<p>
		SSD1306 is a cheap OLED display that can be connected to Raspberry Pi I2C port (or Arduino I2C if you are using Eden V2).<br />
                By also adding 4 buttons, we can create a menu on the display and navigate/control the various options by using the buttons.</br>
		These are connected with one end to the 3V3, and the other end to GPIO#22, GPIO#23, GPIO#24, GPIO#25. Also the internal pull-down resistor is enabled on these pins.<br />
                The video below will show how to setup all of this in few steps with HomeGenie:
		</p>

		    <div align="center">
                    <object width="700" height="480"><param name="movie" value="//www.youtube.com/v/8tsISYytX1Y?hl=it_IT&amp;version=3"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="//www.youtube.com/v/8tsISYytX1Y?hl=it_IT&amp;version=3" type="application/x-shockwave-flash" width="700" height="480" allowscriptaccess="always" allowfullscreen="true"></embed></object>
		    </div>
<br />
		<p>
		The program that control the menu and the navigation with the 4 buttons is entirely written in Javascript!
		This program source code is included in HomeGenie and can be customized by using built-in HomeGenie Program Editor.<br/>
		To get started with HomeGenie automation programming see <a href="http://www.homegenie.it/docs/automation_introduction.php">Automation Programming Introduction</a>.<br/>
		Just to give you an idea on how easy it is, we are posting its code below (hopefully at this point you already know how automation programming works in HomeGenie =)): 
		<pre class="csharp">// Get a reference to the OLED object
var oled = hg.Modules.InDomain("Components.Ssd1306").WithAddress("0");

// Get a reference to other programs of which data will be displayed on the OLED screen
var thermostat = hg.Modules.WithName("Generic Thermostat").Get();
var setPoint = thermostat.Parameter("Thermostat.SetPoint.Heating");
var securitySystem = hg.Modules.WithName("Security Alarm System").Get();
var securityArmed = securitySystem.Parameter("HomeGenie.SecurityArmed");

// Global state variables
var currentContext = '';
var displayMode = 'normal';
var lastButton = '';
var startPressTs = new Date().getTime();
// This system wide parameter is used to prevent other apps
// from writing on the OLED screen  when the menu is open
hg.Settings.Parameter('EdenDisplay.MenuMode').Value = 'OFF';

// Menu screens

function menuShowMain()
{
  oled.Command("Oled.GoTo").Execute("0/3");
  oled.Command("Oled.DrawText").Execute("----[ MENU ]----");
  oled.Command("Oled.GoTo").Execute("0/4");
  oled.Command("Oled.DrawText").Execute("1 Set Point/LEFT");
  oled.Command("Oled.GoTo").Execute("0/5");
  oled.Command("Oled.DrawText").Execute("2 Security/LEFT");
  oled.Command("Oled.GoTo").Execute("0/6");
  oled.Command("Oled.DrawText").Execute("3 Invert Display/LEFT");
  oled.Command("Oled.GoTo").Execute("0/7");
  oled.Command("Oled.DrawText").Execute("4 Exit/LEFT");
}

function menuShowSetPoint()
{
  oled.Command("Oled.GoTo").Execute("0/3");
  oled.Command("Oled.DrawText").Execute("/LEFT");
  oled.Command("Oled.GoTo").Execute("0/4");
  oled.Command("Oled.DrawText").Execute("Set Point:/LEFT");
  oled.Command("Oled.GoTo").Execute("0/5");
  oled.Command("Oled.DrawText2").Execute(setPoint.Value + "/CENTER");
  oled.Command("Oled.GoTo").Execute("0/7");
  oled.Command("Oled.DrawText").Execute("2 + 3 -   EXIT 4/CENTER");  
}

function menuShowSecurity()
{
  var level = securitySystem.Parameter("Status.Level");
  oled.Command("Oled.GoTo").Execute("0/3");
  oled.Command("Oled.DrawText").Execute("/LEFT");
  oled.Command("Oled.GoTo").Execute("0/4");
  oled.Command("Oled.DrawText").Execute("Security:/LEFT");
  oled.Command("Oled.GoTo").Execute("0/5");
  oled.Command("Oled.DrawText2").Execute((securityArmed.DecimalValue > 0 || level.DecimalValue > 0 ? "ARMED" : "DISARMED") + "/CENTER");
  oled.Command("Oled.GoTo").Execute("0/7");
  if (securityArmed.DecimalValue > 0 || level.DecimalValue > 0)
  {
    oled.Command("Oled.DrawText").Execute("2 DISARM  EXIT 4/CENTER");
  }
  else
  {
    oled.Command("Oled.DrawText").Execute("2 ARM     EXIT 4/CENTER");
  }
}

// Context switch functions

function setContext(ctx)
{
  currentContext = ctx;
  hg.Settings.Parameter('EdenDisplay.MenuMode').Value = 'ON';
  switch(ctx)
  {
    case 'main':
      menuShowMain();
      break;
    case 'setpoint':
      menuShowSetPoint();
      break;
    case 'security':
      menuShowSecurity();
      break;
    case 'energysaving':
      menuShowEnergySaving();
      break;
    case 'exit':
      oled.Command("Oled.GoTo").Execute("0/3");
      oled.Command("Oled.DrawText").Execute("/CENTER");
      oled.Command("Oled.GoTo").Execute("0/4");
      oled.Command("Oled.ShowLogo").Execute();
      hg.Pause(2);
      hg.Settings.Parameter('EdenDisplay.MenuMode').Value = 'OFF';
      break;
  }
}

function setContextInput(input)
{
  switch (input)
  {
    case '1': // BUTTON #1
      switch (currentContext)
      {
        case 'main':
          setContext('setpoint');
          break;
      }
      break;
    case '2': // BUTTON #2
      switch (currentContext)
      {
        case 'main':
          setContext('security');
          break;
        case 'setpoint':
          thermostat.Command("Thermostat.SetPointSet").Execute("Heating/" + (setPoint.DecimalValue + 1));
          menuShowSetPoint();
          break;
        case 'security':
          if (securityArmed.DecimalValue == 0)
          {
            securitySystem.Command("Control.On").Execute();
          }
          else
          {
            securitySystem.Command("Control.Off").Execute();
          }
          menuShowSecurity();
          break;
      }
      break;
    case '3': // BUTTON #3
      switch (currentContext)
      {
        case 'main':
          if (displayMode == 'normal')
          {
            displayMode = 'inverse';
            oled.Command("Oled.DisplayInvert").Execute();
          }
          else
          {
            displayMode = 'normal';
            oled.Command("Oled.DisplayNormal").Execute();
          }
          break;
        case 'setpoint':
          thermostat.Command("Thermostat.SetPointSet").Execute("Heating/" + (setPoint.DecimalValue - 1));
          menuShowSetPoint();
          break;
      }
      break;
    case '4': // BUTTON #4
      switch (currentContext)
      {
        case 'main':
          setContext('exit');
          break;
        default:
          setContext('main');
          break;
      }
      break;
  }

}

hg.When.ModuleParameterChange(function(module, parameter){
  if (module.Instance.Domain == 'RaspberryPi.Gpio' && parameter.Is("Status.Level") && parameter.DecimalValue > 0)
  {
    // A button was pressed, store the timestamp
    startPressTs = new Date().getTime();
    if (currentContext == '')
    {
      // A long press of 3 seconds will open the settings menu
      var duration = 0;
      while (duration < 3 && parameter.DecimalValue > 0)
      {
          hg.Pause(1);
          duration++;
      }
      if (duration >= 3) setContext('main');
      return true;
    }
    //
    // The input is only processed when the settings menu is opened
    switch (module.Instance.Address)
    {
        // BUTTON #1 pressed
      case 'GPIO22': 
        setContextInput('1');
        break;
        // BUTTON #2 pressed
      case 'GPIO23':
        setContextInput('2');
        break;
        // BUTTON #3 pressed
      case 'GPIO24':
        setContextInput('3');
        break;
        // BUTTON #4 pressed
      case 'GPIO25':
        setContextInput('4');
        break;
    }
  }
  else if (module.Instance.Domain == 'RaspberryPi.Gpio' && parameter.Is("Status.Level") && parameter.DecimalValue == 0)
  {
    // A button was released
    var currentTs = new Date().getTime();
    if (currentContext == 'exit')
    {
      currentContext = '';
    }
    else if (currentContext == '' && currentTs - startPressTs < 3000) // 3 seconds
    {
      // We are outside the settings menu, so
      // the buttons functionality is to toggle scenarios/devices
      lastButton = '';
      switch (module.Instance.Address)
      {
          // BUTTON #1 released
        case 'GPIO22': 
          lastButton = '1';
          break;
          // BUTTON #2 released
        case 'GPIO23': 
          lastButton = '2';
          break;
          // BUTTON #3 released
        case 'GPIO24': 
          lastButton = '3';
          break;
          // BUTTON #4 released
        case 'GPIO25':
          lastButton= '4';
          break;
      }
      if (lastButton != '')
      {
        hg.Modules.WithFeature("EdenDisplay.ToggleButton." + lastButton).Toggle();
        var program = hg.Program.InputField("EdenDisplay.ButtonProgram." + lastButton).Value;
        // scenarios are specified in the form <program_id_or_name>/<options>
        if (program != '')
        {
          // it is a scenario
          var options = '';
          if (program.lastIndexOf('/') > 0) 
          {
            options = program.substring(program.lastIndexOf('/') + 1);
            program = program.substring(0, program.lastIndexOf('/'));
          }
          hg.Program.Run(program, options);
        }
      }
    }
    // Reset long press timestamp
    startPressTs = new Date().getTime();
  }
  else if (parameter.Is("HomeGenie.SecurityArmed") && currentContext == "security")
  {
    // update security menu
    menuShowSecurity();
  }
  return true;
});

hg.Program.GoBackground();</pre>
		</p>


<p>&nbsp;</p>

                <?php include $_SERVER['DOCUMENT_ROOT'].'/donate_link.php'; ?>

<p>&nbsp;</p>

<p></p><p></p>


                <div align="center">
                  <a href="/docs/diy/eden.php#">TOP</a>
                </div>
              </section>
            </div>
            <div class="3u">
              <!-- Right Sidebar -->
              <?php include $_SERVER['DOCUMENT_ROOT'].'/docs/includes/menu_diyrpi_2.php'; ?>
              <?php include $_SERVER['DOCUMENT_ROOT'].'/docs/includes/menu_forumlink.php'; ?>
              <?php include $_SERVER['DOCUMENT_ROOT'].'/docs/includes/menu_usersguide.php'; ?>
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
