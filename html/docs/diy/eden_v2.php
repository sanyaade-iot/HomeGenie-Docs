<!DOCTYPE html>
<!--
	Halcyonic 3.1 by HTML5 UP	html5up.net | @n33co	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)-->
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>HomeGenie DIY Ideas: Eden Sensor Board v2 - Arduino(TM) Pro Mini 3V3</title>
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
                  <h2 style="font-family:'Lobster',sans-serif">Eden Sensor Board v2 - Arduino compatible</h2>
                </header>

		<p>
		Designed to be a perfectly fitting Arduino&trade; hat for Raspberry Pi model A+, this board is also compatible with all other RPi models and can be used as a thermostat and IR controller with the plus of luminance sensing.<br />
		Its core is a <a href="http://arduino.cc/en/Main/ArduinoBoardProMini" target="_blank">Pro Mini 3V (Atmel328p)</a> that can be easily programmed within HomeGenie's Program Editor.<br />
		It is also possible programming external 3V Arduino&trade; connected to the builtin Serial Port and that could be then used as
		stand-alone device. Also any other 5V Arduino&trade; programming is possible by using a <a href="https://www.sparkfun.com/products/12009" target="_blank">logic level converter</a> or by connecting it to the USB port instead.<br />
		Eden V2 also comes with a small prototyping area where can be added buttons for starting scenarios or turning on/off lights, or just used for any other customization purpose (eg. RF, RFID, NFC,...).<br />
		HomeGenie r443 or later is required for this project.
		</p>

	        <!--p align="center">
			<a title="Eden V2 prototype on a breadboard" href="images/eden/edenv2_on_breadboard.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/edenv2_on_breadboard.jpg" alt="" height="420"></a><br />
<span style="font-weight:bold;font-size:10pt">early Eden V2 prototype on a breadboard</span>
		</p-->


		    <div align="center">
                    <object width="700" height="480"><param name="movie" value="//www.youtube.com/v/57H3ckz2c4U?hl=it_IT&amp;version=3"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="//www.youtube.com/v/57H3ckz2c4U?hl=it_IT&amp;version=3" type="application/x-shockwave-flash" width="700" height="480" allowscriptaccess="always" allowfullscreen="true"></embed></object>
		    </div>


		<p>

		<h3>Features</h3>
		<ul style="list-style-type:square;padding-left:30px;">
		<li>Temperature sensor</li>
		<li>Luminance sensor</li>
		<li>Infrared transceiver</li>
		<li>RPi Serial Port connector suitable for Arduino&trade; programming</li>
		<li>Up to 13 RPi GPIOs</li>
		<li>RPi I2C connector</li>
		<li>RPi 1-Wire connector</li>
		<li>I2C connector suitable for Grove modules as <a href="http://www.seeedstudio.com/wiki/Grove_-_OLED_Display_0.96%22" target="_blank">Grove Oled 128x64 display</a> (Pro Mini)</li>
		<li>3 analog channels (Pro Mini)</li>
		<li>6 digital channels (Pro Mini)</li>
		<li>16x6 prototyping area</li>
		</ul>

                </p>

                <br />
<pre style="background-color:#ffffdd;font-family:courier;font-size:10pt;width:710px;margin-left:40px;padding:20px;line-height:11pt">DISCLAIMER
Please note that any project details posted on this site are supplied for general
interest only, rather than as contructional guidelines, and no guarantee is given about
their correctness or reliability. Anyone trying to build from them is responsible for
their own safety and for any possible resulting damage to property or to persons.</pre>
<br />

		<p>

		<h3>Component Listing</h3>
                <ul style="list-style-type:square;padding-left:30px;">
                        <li>Eden Board v2 printed circuit 6.50 cm × 5.65 cm (<a href="http://sourceforge.net/projects/homegenie/files/testing/" target="_blank">Download Etchable PDF/Gerber archive</a>)</li>
                        <li><span style="font-weight:bold">Arduino</span>&nbsp; Pro Mini3V</li>
                        <li><span style="font-weight:bold">D1</span>&nbsp; TSOP4838 38Khz</li>
                        <li><span style="font-weight:bold">D2</span>&nbsp; TSAL5300 IR Emitter Photodiode 5mm, 940nm 22deg</li>
                        <li><span style="font-weight:bold">Q1</span>&nbsp; DS18B20 digital temperature sensor</li>
                        <li><span style="font-weight:bold">Q2</span>&nbsp; BC337-25RL1G</li>
                        <li><span style="font-weight:bold">R1</span>&nbsp; Photo cell</li>
                        <li><span style="font-weight:bold">R2-R3</span>&nbsp; 10Kohm resistor</li>
                        <li><span style="font-weight:bold">R4</span>&nbsp; 4.7Kohm resistor</li>
                        <li><span style="font-weight:bold">CN1</span>&nbsp; Standard Header (2x40) for RPi+ models or Extra Tall Header (2x13) for old RPi models</li>
                        <li><span style="font-weight:bold">OLED</span>&nbsp; Seeed Studio Grove 128x64 display</li>
                        <li><span style="font-weight:bold">J1-J3</span>&nbsp; 1x2 2.54 male connector</li>
                        <li><span style="font-weight:bold">SerialPort</span>&nbsp; 1x5 2.54 male connector</li>
                </ul>

		

		</p>

		<a name="hg_eden_setup" />
	
                <p align="center">
 			<a title="PCB front" href="images/eden/eden_v2_top.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_v2_top.jpg" alt="" height="140"></a>
 			<a title="PCB front with OLED display connected" href="images/eden/eden_v2_top_oled.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_v2_top_oled.jpg" alt="" height="140"></a>
 			<a title="PCB back" href="images/eden/eden_v2_bottom.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_v2_bottom.jpg" alt="" height="140"></a>
 			<a title="PCB back with Arduini Mini Pro 3V" href="images/eden/eden_v2_bottom_arduino.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_v2_bottom_arduino.jpg" alt="" height="140"></a>
                </p>

		<h3>Setting up Eden Board v2 in HomeGenie</h3>

		<h4>1. Uploading firmware to the internal Pro Mini</h2>
		<p>
			After assembling and connecting the board, we need to upload Eden's firmware to the internal Pro Mini. This operation is done within HomeGenie UI itself, no extra software is required.<br/>
			The firmware implement the following functionalities:
			<ul style="list-style-type:square;padding-left:30px;">
			<li>Values reading from temperature and luminance sensors</li>
			<li>Driver for controlling the OLED display</li>
			<li>Communication between Raspberry Pi and Pro Mini by using SPI</li>
			</ul>
			Here are step by step instruction:
			<ol style="list-style-type:number;padding-left:30px;">
			<li>Plug all 3 jumper caps in place (J1, J2, J3). This will enable serial port communication to the internal Pro Mini for uploading the firmware.</li>
			<li>Download latest firmware <a href="http://sourceforge.net/projects/homegenie/files/testing/" target="_blank">here</a>.</li>
			<li>From <span style="font-weight:bold">Configure->Automation</span> section create a new program group, name it Eden Board and then open it
                		<p align="center">
					<a title="" href="images/eden/eden_v2_step_1.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_v2_step_1.jpg" alt="" height="200"></a>
                		</p>
			</li>
			<li>From the <span style="font-weight:bold">Actions</span> menu choose <span style="font-weight:bold">Import Program</span>, select the firmware file and import it
                		<p align="center">
					<a title="" href="images/eden/eden_v2_step_2.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_v2_step_2.jpg" alt="" height="200"></a>
					<a title="" href="images/eden/eden_v2_step_3.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_v2_step_3.jpg" alt="" height="200"></a>
                		</p>
			</li>
			<li>Click on the just imported program from the list and enter the <span style="font-weight:bold">Program Editor</span>, then from the <span style="font-weight:bold">Actions</span> menu choose <span style="font-weight:bold">Run</span>. This will compile and upload the firmware. Be patient as the first time compile might take some time. If you then want to customize the firmware code, the compile/upload process will just take few seconds.
                		<p align="center">
					<a title="" href="images/eden/eden_v2_step_4.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_v2_step_4.jpg" alt="" height="200"></a>
					<a title="" href="images/eden/eden_v2_step_5.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_v2_step_5.jpg" alt="" height="200"></a>
                		</p>
			</li>
			<li>Unplug all 3 jumper caps.</li>
			</ol>
			If everything went well, the OLED display will turn on and show HomeGenie logo, luminance and temperature values.<br />
			<!--At this point we could even detach the board from Raspberry Pi and power it on batteries (by feeding RAW and GND pins in the upper left corner of the board with 3x1.5V batteries or equivalent power source) =D ... though without adding some extra component such as an RF transceiver it won't be too much useful. Perhaps we'll see how to do this later.-->
		</p>

		<h4>2. Integrating Eden V2 into HomeGenie</h2>
		<p>
			Now that we've got the board up and running, we can integrate it into HomeGenie as a sensor module that can be added to the control dashboard and used for any automation purpose (eg. turning on/off some lights against current luminance value, or use the temperature sensor with the <span style="font-weight:bold">Generic Thermostat</span> program).<br/>
			For such functionality we need to import and activate the <span style="font-weight:bold">Eden Module</span> program.
			<ol style="list-style-type:number;padding-left:30px;">
			<li>Download latest <span style="font-weight:bold">Eden Module</span> program <a href="http://sourceforge.net/projects/homegenie/files/testing/" target="_blank">here</a>.</li>
			<li>Import the program as arelady shown in step 4 of previous instructions</li>
			<li>Activate the program by clicking the button on the right. Events from Edens' sensors should popup right after.
                		<p align="center">
					<a title="" href="images/eden/eden_v2_step_6.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_v2_step_6.jpg" alt="" height="200"></a>
                		</p>
			</li>
			<li>Now add Eden module to the dashboard from the <span style="font-weight:bold">Configure->Groups and Modules</span> section.
                		<p align="center">
					<a title="" href="images/eden/eden_v2_step_7.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_v2_step_7.jpg" alt="" height="200"></a>
					<a title="" href="images/eden/eden_v2_step_8.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_v2_step_8.jpg" alt="" height="200"></a>
                		</p>
			</li>
			</ol>
		</p>


			<h4>3. Enabling the Thermostat APP</h2>
			Going to <u>Configure->Automation->Weather and Enviroment</u> section, we can activate the <span style="font-weight:bold">Generic Thermostat</span> program and use Eden V2 as a thermostat. All we need is activating
			the thermostat program and configure it for using the Eden Module for temperature reading.

			<ol style="list-style-type:number;padding-left:30px;margin-top:20px;">
			<li>Activate the <span style="font-weight:bold">Generic Thermostat program</span></li>
			<li>Enter <span style="font-weight:bold">Eden Module</span> address as module to read temperature from</li>
			<li>Enter address of the switch you will be using as actuator for your boiler (in this example is a relay switch connected to Raspberry Pi GPIO22)</li>
			<li>Restart the program
				<p align="center">
					<a title="Eden Board Thermostat Configuration" href="images/eden/eden_v2_step_9.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_v2_step_9.jpg" alt="" height="250"></a>
				</p>
			</li>
			</ol>

			We can now add the thermostat module to the dashboard and start using it.

		        <p align="center">
				<a title="Eden Board Thermostat Control" href="images/eden/eden_v2_step_10.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_v2_step_10.jpg" alt="" height="250"></a>
				<a title="Eden Board Thermostat Control" href="images/eden/eden_v2_step_11.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_v2_step_11.jpg" alt="" height="250"></a>                
			</p>


		</p>

		<h4>4. Enabling IR trasceiving</h2>
		<p>
			EdenV2 IR transceiver can be controlled either by the Arduino Pro Mini, or by Raspberry Pi. In the first case, we put the two caps of the "IR ROUTE" jumpers in the D3/D9 position. We'll also need to update the firmware by adding the Arduino IRremote library.<br/>
			In the latter case, we put the two caps of the "IR ROUTE" jumpers in the #17/#18 position.<br />
			When using Raspberry Pi to control IR hardware we can Setup IR transceiving in HomeGenie as described <a href="/docs/remotes.php" target="_blank">here</a>.
			Once IR transceiving is activated, we can create macros to automate and control IR devices in our home. 
			<br />
			By <a href="/docs/interconnecting.php" target="_blank">interconnecting</a> more HomeGenie boxes, we can also use them as gateways to control our devices from one room to another
			using a common and cheap infrared remote control.
			<br />
		</p>

		<h4>5. Eden Module API</h2>
		<p>
		The Eden Module program also implement API commands to enable other programs control the Arduino&trade; hardware:<br/>	
		<pre class="csharp">
HomeAutomation.Eden/MCU/Oled.ClearScreen
HomeAutomation.Eden/MCU/Oled.GoTo/&lt;row&gt;,&lt;column&gt;
HomeAutomation.Eden/MCU/Oled.ShowLogo
HomeAutomation.Eden/MCU/Oled.ShowText/&lt;message&gt;/&lt;align&gt;
HomeAutomation.Eden/MCU/Sensors.Update
HomeAutomation.Eden/MCU/Sensors.Temperature
HomeAutomation.Eden/MCU/Sensors.Luminance</pre>
		These can be invoked either as HTTP calls 
		<pre class="csharp">
http://&lt;homegenie_address&gt;/api/HomeAutomation.Eden/MCU/Oled.GoTo/1,0
http://&lt;homegenie_address&gt;/api/HomeAutomation.Eden/MCU/Oled.ShowText/Hello World/CENTER</pre>
		or using the <a href="/docs/doxy/d1/db5/class_home_genie_1_1_automation_1_1_scripting_1_1_modules_manager.html">ModulesManager</a> inside an automation program
		<pre class="csharp">
var eden = Modules.InDomain("HomeAutomation.Eden").WithAddress("MCU");
eden.Command("Oled.GoTo")
	.Execute("1,0"); // row=0-7,column=0-15
eden.Command("Oled.ShowText")
	.Execute("Hello World/CENTER");
// align parameter can be CENTER, LEFT or RIGHT</pre>
		So, by using the API, we can easily make other programs to push informations on the display (eg. displaying outside temperature and weather from Wunderground program, or overall energy consumption from Energy Monitor program).
		</p>

		<h4>6. Customizing Arduino&trade; Firmware</h2>
		<p>
		By using <span style="font-weight:bold">HomeGenie Program Editor</span> we can customize Eden board firmware or create any other Sketch and upload it to an external Arduino&trade;.<br />
		See videos below.
		</p>
	        <p align="center">
			<a title="" href="images/eden/arduino_programming.gif" rel="gallery" class="pirobox_gall"><img src="images/eden/arduino_programming.gif" alt="" height="560"></a>
		</p>
		    <div align="center">
		    <iframe width="560" height="315" src="//www.youtube.com/embed/2hFbufXEJb0" frameborder="0" allowfullscreen></iframe>
		    </div>


<p>&nbsp;</p>




                <table width="100%"><tr>
                  <td width="33%" align="center"><a href="/docs/diy/eden.php">&lt;&lt; Eden Project</a></td>
                  <td width="33%" align="center"><a href="/docs/diy/eden_v2.php#">TOP</a></td>
                  <td width="33%" align="center"><a href="/docs/diy/eden_v1.php">Eden Sensor Board v1 &gt;&gt;</a></td>
                </tr></table>


<p>&nbsp;</p>

                <?php include $_SERVER['DOCUMENT_ROOT'].'/donate_link.php'; ?>


<p style="font-style:italic;font-size:11pt;"><a href="http://arduino.cc" target="_blank">Arduino&trade; is a registered trademark of Arduino, LLC.</a></p>
<p>&nbsp;</p>

<p></p>
<p></p>
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
