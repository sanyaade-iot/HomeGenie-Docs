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
		This project is based on <a style="font-weight:bold" href="#edenpcb">Eden Board</a>, a <i>Multipurpose Sensor Board</i> for <u>Raspberry and Banana Pi</u>.<br />
		By using Eden board on a Pi computer with HomeGenie, we'll get <span  style="font-family:'Lobster',sans-serif">Eden</span>, a <span style="font-weight:bold">Wi-Fi Thermostat and Universal IR Controller</span>.
		<br />
		But it's not just that since Eden Board can be easily expanded...
		</p>

		    <div align="center">
                    <object width="700" height="480"><param name="movie" value="//www.youtube.com/v/j6S7nWi6oKg?hl=it_IT&amp;version=3"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="//www.youtube.com/v/j6S7nWi6oKg?hl=it_IT&amp;version=3" type="application/x-shockwave-flash" width="700" height="480" allowscriptaccess="always" allowfullscreen="true"></embed></object>
		    </div>

	<br />

		<h3>Component Listing</h3>
                <ul style="list-style-type:square;padding-left:30px;">
                        <li><a href="http://www.bananapi.org/" target="_blank">Banana Pi</a> or <a href="http://www.raspberrypi.org/" target="_blank">Raspberry Pi</a> model A + power supply</li>
                        <li><a href="http://elinux.org/RPi_USB_Wi-Fi_Adapters" target="_blank">Wi-Fi USB adapter</a></li>
                        <li><a href="#edenpcb">Eden Board</a> and <a href="/download.php">HomeGenie SDCard</a></li>
                </ul>


		<h3>Features you'll get out of the box</h3>
		<ul style="list-style-type:square;padding-left:30px;">
		<li>Temperature sensing</li>
		<li>Programmable IR transceiver for controlling AC/AV and other IR controllable devices</li>
		<li>External enviroment data sensing (using third party internet service)</li>
		<li>"Wizard" scripting for creating scenarios and other automation tasks</li>
		<li>Builtin statistics, user interface and automation engine powered by HomeGenie</li>
		<li><u>Modular and expandible</u> hardware system (see Eden Board specifications below)</li>
		<li>Web Service API</li>
		<li>Web based IDE with a friendly user interface for easy GPIO/I2C/SPI/UART programming, using your favourite language (C#, Javascript, Python, Ruby)</li>
		</ul>


                <br />
<pre style="background-color:#ffffdd;font-family:courier;font-size:10pt;width:710px;margin-left:40px;padding:20px;line-height:11pt">DISCLAIMER
Please note that any project details posted on this site are supplied for general
interest only, rather than as contructional guidelines, and no guarantee is given about
their correctness or reliability. Anyone trying to build from them is responsible for
their own safety and for any possible resulting damage to property or to persons.</pre>
<br />

		<a name="edenpcb"></a>
		<p>

		<h2 style="font-family:'Lobster',sans-serif">Eden Board</h2>
		
		Current version of Eden Board is designed with through-hole components and a simplified circuit. Less components = cheap = easy DIY assembling.<br />
		Early testing results show stable readings from analog input channels and about 1%-2% value displacement when loading the 3v3 line with extra components.
		In most situations this can be acceptable.<br />
		A complete version of the board circuit might also include a precise voltage input for the MCP3008 VREF line (eg. by using LM4040DTB-300GT3), a couple of capacitor for the TMP36 and perhaps
		most of the components as SMD.

		</p>

		<p>

		<h3>Features</h3>
		<ul style="list-style-type:square;padding-left:30px;">
		<li>Temperature sensor</li>
		<li>Infrared transceiver</li>
		<li>Grove compatible I2C connector</li>
		<li>Grove compatible digital I/O connector (1 or 2 wires) with selectable 3V3/5V line</li>
		<li>UEXT compatible connector</li>
		<li>7 analog channels</li>
		<li>6 GPIOs</li>
		<li>15x9 prototyping area</li>
		</ul>

                </p>

                <p align="center">
			<a title="Eden Board: PCB" href="images/eden/eden_pcb.png" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_pcb.png" alt="" height="300"></a>
                </p>

		<p>

		<h3>Component Listing</h3>
                <ul style="list-style-type:square;padding-left:30px;">
                        <li>Eden Board printed circuit 5.62 cm × 5.62 cm - 94.77 cm² (<a href="http://sourceforge.net/projects/homegenie/files/testing/">Download Etchable PDF/Gerber archive</a>)</li>
                        <li><span style="font-weight:bold">IC1</span>&nbsp; 10-bit ADC,SPI,8-ch,MCP3008-I/P</li>
                        <li><span style="font-weight:bold">D1</span>&nbsp; TSOP4838 38Khz</li>
                        <li><span style="font-weight:bold">D2</span>&nbsp; TSAL5300 IR Emitter Photodiode 5mm, 940nm 22deg</li>
                        <li><span style="font-weight:bold">T1</span>&nbsp; TMP36GT9Z</li>
                        <li><span style="font-weight:bold">R1</span>&nbsp; 10Kohm 0.5W resistor</li>
                        <li><span style="font-weight:bold">C1</span>&nbsp; 1uF ceramic capacitor</li>
                        <li><span style="font-weight:bold">Q1</span>&nbsp; BC337-25RL1G</li>
                        <li><span style="font-weight:bold">CN1</span>&nbsp; Stacking Header (2x13) Extra Tall</li>
                        <li><span style="font-weight:bold">P1</span>&nbsp; N2510-6002RB Header (2x5)</li>
                        <li><span style="font-weight:bold">P2</span>&nbsp; 1x4 2.54 male connector</li>
                        <li><span style="font-weight:bold">P3</span>&nbsp; 1x4 2.54 male connector</li>
                        <li><span style="font-weight:bold">P4</span>&nbsp; 1x3 2.54 male connector</li>
                        <li><span style="font-weight:bold">J1</span>&nbsp; 1x3 2.54 male connector</li>
                </ul>

		

		</p>

		<a name="hg_eden_setup" />
	
                <p align="center">
			<a title="Eden Sensor Board" href="images/eden/eden_shot_01.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_shot_01.jpg" alt="" height="300"></a>
                </p>

		<h3>Configuring HomeGenie for Eden Board</h3>

		<h4>1. Enabling IR trasceiving</h2>
		<p>
			Setup IR interface as described <a href="/docs/remotes.php" target="_blank">here</a>.
			Once IR transceiving is activated, we can create macros to automate and control IR devices in our home. 
			<br />
			By <a href="/docs/interconnecting.php" target="_blank">interconnecting</a> more HomeGenie boxes, we can also use them as gateways to control our devices from one room to another
			using a common and cheap infrared remote control.
		</p>

		<h4>2. Integrating Eden Board analog sensors in HomeGenie</h2>
		<p>
			From <u>Configure->Automation->RaspberryPi</u> section we can activate the <u>MCP3008</u> automation program. This program will add 8 new modules to the system.
			Each of them will report values read from analog channels (CH0 through CH7).
			<br />
			Since Eden board comes with a temperature sensor wired to CH0 and optionally a luminance sensor on CH1, we will add CH0 and CH1 modules to a control group.
		</p>

                <p align="center">
			<a title="Eden Board MCP3008 analog sensor modules" href="images/eden/eden_analog_sensors_01.png" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_analog_sensors_01.png" alt="" height="300"></a>
                </p>

		<p>
			Once done that, we can go to the <u>Control</u> section and configure them, as shown in the following pictures, by clicking the "edit" icon on the upper right corner of each module.
		</p>

                <p align="center">
			<a title="Temperature sensor on CH0" href="images/eden/eden_analog_sensors_02.png" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_analog_sensors_02.png" alt="" height="300"></a>
			<a title="Luminance sensor on CH1" href="images/eden/eden_analog_sensors_03.png" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_analog_sensors_03.png" alt="" height="300"></a>
			<a title="Eden Board MCP3008 analog sensor modules" href="images/eden/eden_analog_sensors_04.png" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_analog_sensors_04.png" alt="" width="400"></a>
                </p>

		<h4>3. Enabling the Thermostat APP</h2>
		<p>
		Already many add-on modules can be connected to Eden by using CN1, P1, P2, P4 connectors.
		<br/>
		For example we could just plug in this <a href="http://www.seeedstudio.com/depot/Grove-Relay-p-769.html" target="_blank">Grove Relay Module</a> to use Eden as Thermostat/Actuator for a boiler.
		</p>
	
                <p align="center">
			<a title="Eden: LCD display and Relay modules" href="images/eden/eden_lcd.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_lcd.jpg" alt="" height="300"></a>
                </p>

		<p>
		As already seen above for the MCP3008 app, we are now activating the thermostat program from <u>Configure->Automation->Weather and Enviroment</u> section. We also add the thermostat module to
		a control group and configure it as shown below:
		</p>

                <p align="center">
			<a title="Eden Board Thermostat Configuration" href="images/eden/eden_setup_02.png" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_setup_02.png" alt="" height="250"></a>
			<a title="Eden Board Thermostat Control" href="images/eden/eden_setup_01.png" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_setup_01.png" alt="" height="250"></a>
                </p>

		<h3>Other things Eden and HomeGenie can do</h3>
		<p>
		These are some of the modules that can be plugged to Eden:<br>
		</p>

                <ul style="list-style-type:square;padding-left:30px;">
		<li><a href="http://www.seeedstudio.com/wiki/Grove" target="_blank">Grove modules</a></li>
		<li><a href="http://www.olimex.com/Products/Modules/" target="_blank">Olimex UEXT modules</a></li>
		<li><a href="http://razberry.z-wave.me/" target="_blank">RaZberry</a></li>
		</ul>
		
		<p>
		Also adding custom components and functionalities is possible, by using the prototyping area.
		</p>

		<p>

		        <div align="center">
				<span style="font-weight:bold">Video:</span> Eden Board Recipe #1: Grove Chainable RGB Led<br />
	<object width="700" height="480"><param name="movie" value="//www.youtube.com/v/an5XDQ5dFLI?version=3&amp;hl=it_IT"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="//www.youtube.com/v/an5XDQ5dFLI?version=3&amp;hl=it_IT" type="application/x-shockwave-flash" width="700" height="480" allowscriptaccess="always" allowfullscreen="true"></embed></object>
		        </div>

			<br />

		        <div align="center">
				<span style="font-weight:bold">Video:</span> Eden Board Recipe #2: Grove Led Bar<br />
	<object width="700" height="480"><param name="movie" value="//www.youtube.com/v/JbFSiN3H2ig?version=3&amp;hl=it_IT"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="//www.youtube.com/v/JbFSiN3H2ig?version=3&amp;hl=it_IT" type="application/x-shockwave-flash" width="700" height="480" allowscriptaccess="always" allowfullscreen="true"></embed></object>
		        </div>

			<br />

		        <div align="center">
				<span style="font-weight:bold">Video:</span> Eden Board Recipe #3: DHT-11 Temperature and Humidity Sensor <br />
	<object width="700" height="480"><param name="movie" value="//www.youtube.com/v/Q0KtT9Lo6Ro?version=3&amp;hl=it_IT"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="//www.youtube.com/v/Q0KtT9Lo6Ro?version=3&amp;hl=it_IT" type="application/x-shockwave-flash" width="700" height="480" allowscriptaccess="always" allowfullscreen="true"></embed></object>
		        </div>

			<br />

		        <div align="center">
				<span style="font-weight:bold">Video:</span> Eden Board Recipe #4: Breadboard and Analog Luminance Sensor <br />
	<object width="700" height="480"><param name="movie" value="//www.youtube.com/v/UWbW2lubykA?version=3&amp;hl=it_IT"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="//www.youtube.com/v/UWbW2lubykA?version=3&amp;hl=it_IT" type="application/x-shockwave-flash" width="700" height="480" allowscriptaccess="always" allowfullscreen="true"></embed></object>
		        </div>

		</p>

		<p>

			<h2 style="font-family:'Lobster',sans-serif">Eden lite</h2>
				
			<p>The following is a light (and very cheap) version of Eden. It is using Raspberry Pi model A and gives temperature and humidity sensing + IR receiver and three status leds.</p>

		        <div align="center"><img title="DIY HomeGenie Server" alt="DIY HomeGenie Server" src="/images/hg_r1l.png"></div>

			<h3>Component Listing</h3>
		        <ul style="list-style-type:square;padding-left:30px;">
		                <li><span style="font-weight:bold">1</span>&nbsp; <a href="http://www.raspberrypi.org/" target="_blank">Raspberry Pi</a> model A + power supply</li>
		                <li><span style="font-weight:bold">1</span>&nbsp; <a href="http://elinux.org/RPi_USB_Wi-Fi_Adapters" target="_blank">Wi-Fi USB adapter</a></li>
		                <li><span style="font-weight:bold">1</span>&nbsp; BitBang Proto-Plate with 2x13 Way Header Socket</li>
		                <li><span style="font-weight:bold">3</span>&nbsp; 330 ohm resistors</li>
		                <li><span style="font-weight:bold">3</span>&nbsp; leds (red, yellow, green)</li>
		                <li><span style="font-weight:bold">1</span>&nbsp; Infrared Receiver TSOP 4838 38Khz</li>
		                <li><span style="font-weight:bold">1</span>&nbsp; DHT-11 temperature and humidity sensor</li>
		        </ul>
		
                </p>

                <h3>1: Installing HomeGenie on Raspberry Pi</h3>
                 
                <p>
                    For instructions about installing HomeGenie on Raspberry Pi, see the <a href="../download.php">Download</a> section.
                    <br />
                    <span style="font-style:italic">Please also read the following article about securing Raspberry Pi SD card installation: <br />
                        &nbsp;&nbsp;&nbsp;-&gt;&nbsp;&nbsp;&nbsp;<a href="http://mattwilcox.net/archives/setting-up-a-secure-home-web-server-with-raspberry-pi/" target="_blank">SETTING UP A (REASONABLY) SECURE HOME WEB-SERVER WITH RASPBERRY PI</a>
                    </span>
                </p>
              
                <h3>2: Assembling Eden daughter board for Raspberry Pi</h3>
                <p>

                    <div align="center">
                        <a title="HomeGenie Board: Components" href="images/diy/hg_components.jpg" rel="gallery" class="pirobox_gall"><img src="images/diy/hg_components.jpg" alt="" width="200"></a>                    </div>
                </p>

                <h3>2.1: Socket and Leds</h3>
                <p>
					First we'll solder the header socket pins to the proto-board. The proto-board used here it's a <a href="http://www.bitbang.co.uk/proto-plate_1_1.html" target="_blank">BitBang Proto-Plate</a>, but we can eventually use any other board for Raspberry Pi.<br>
					To get some tip about soldering the header socket, see the first part of <a href="http://learn.adafruit.com/adafruit-prototyping-pi-plate/solder-it" target="_blank">Adafruit tutorial</a>.
				</p>
                <div align="center">
                    <a title="HomeGenie Board: Step 2.1" href="images/diy/step01.jpg" rel="gallery" class="pirobox_gall"><img src="images/diy/step01.jpg" alt="" width="300"></a>                    <a title="HomeGenie Board: Step 2" href="images/diy/step02.jpg" rel="gallery" class="pirobox_gall"><img src="images/diy/step02.jpg" alt="" width="300"></a>                </div>

                <br />
                <h3>2.2: Wiring leds to GPIO pins</h3>
                <p>
					Each led will have one pin connected to the GND and the other one to a GPIO pin. The green led will use RaspberryPi <span style="font-weight:bold">GPIO21</span>, 
                    while the yellow one will use <span style="font-weight:bold">GPIO22</span>.
					The proto-plate used here has a GND pad close to the leds footprints, so connecting the two 330 ohm resistors will not require any additional wires.
					For connecting to the GPIOs, we'll use a green wire to the green led and a yellow wire to the yellow led.<br/>
					Once done that, we are ready for a first test. We can plug the HomeGenie board and power up our Raspberry Pi for testing.
					In order to enable leds, we have to activate the "HomeGenie Leds" APP under <span style="font-weight:bold">Configure->Automation->RaspberrySharp</span> menu in HomeGenie.
				</p>

                <div align="center">
                    <a title="HomeGenie Board: Step 2.2" href="images/diy/step03.jpg" rel="gallery" class="pirobox_gall"><img src="images/diy/step03.jpg" alt="" width="300"></a>                </div>

                <br />
                <h3>2.3: Infrared Receiver</h3>
                <p>
					To setup the IR receiver sensor, first we have to activate the power pads on the Proto-Plate. BitBang protoplate comes with two power pads. We can see them in the pictures below.<br>
					The first one is below the TV-OUT connector and it's labeled "PWR". The other one is on the left side. To activate these power pads we have to wire the +3V out to the power pad on the left. 
					As we can see in the picture we've a little red wire connecting them (see it in the upper left corner of the board).<br>
					Also we will connect a wire from the power pad on the left to the red led.<br>
					Next we'll solder the IR receiver and connect its output pin (1) to <span style="font-weight:bold">GPIO18</span> pin on Raspberry Pi. This is the pink wire in the picture, going from GPIO18 to the IR receiver pin 1.<br>
				</p>

                <div align="center">
                    <a title="HomeGenie Board: Step 2.3" href="images/diy/step04.jpg" rel="gallery" class="pirobox_gall"><img src="images/diy/step04.jpg" alt="" width="300"></a>                </div>

                <p>
					If we look at the bottom side of the board (see the picture below), we'll also see how the GND and the +3V is connected to the IR receiver pin 2 and pin 3 respectively.
					The GND is taken from the GND pad on the proto-plate (see the black wire). While the +3V is taken from the power pad that is below the tv-out (red cable).
					Finally we'll have a 330 ohm resistor going from IR receiver output pin to the red led.
					For more details about how to connect a IR receiver to Raspberry Pi see <a href="http://learn.adafruit.com/using-an-ir-remote-with-a-raspberry-pi-media-center/hardware" target="_blank">Adafruit IR Tutorial</a>.
				</p>

		<p>

		</p>

                <div align="center">
					<a title="HomeGenie Board: Step 2.3" href="images/diy/step06.jpg" rel="gallery" class="pirobox_gall"><img src="images/diy/step06.jpg" alt="" width="300"></a>
                </div>

				<p>
					Once done that, we are ready to plug the HG board on the Raspberry Pi and test it with HomeGenie. 
					We can now activate IR transceiving in HomeGenie from the <i>"Configure->System and Interfaces"</i> menu and start controlling lights and things by using IR.
				</p>

				<h3>2.4: Temperature and Humidity Sensor</h3>
				<p>
					If we want HomeGenie also sense the temperature and the humidity, we can add a DHT-11 sensor to HomeGenie board.
					Connect the pin 4 of the DHT-11 sensor to the GND pad, as we did for the IR receiver. Next we can connect the DHT-11 data pin 2 (the blue wire) to the Raspberry Pi <span style="font-weight:bold">CK0</span> (GPIO4) pin.
					And one last step, we connect the pin 1 of the DHT-11 to the +3V on the proto-plate power pad (red wire, as done with IR sensor).<br>
				jafar	To activate the DHT-11 in HomeGenie, go to the <i>"Configure->Automation->RaspberrySharp"</i> menu and enable the "DHT-11" APP.<br>
					For more details about how to connect DHT-11 sensor to Raspberry Pi see <a href="http://learn.adafruit.com/dht-humidity-sensing-on-raspberry-pi-with-gdocs-logging/overview" target="_blank">Adafruit DHT-11 Tutorial</a>.
				</p>

                <div align="center">
					<a title="HomeGenie Board: Step 2.4" href="images/diy/step07.jpg" rel="gallery" class="pirobox_gall"><img src="images/diy/step07.jpg" alt="" height="200"></a>
					<a title="HomeGenie Board: Step 2.4" href="images/diy/step08.jpg" rel="gallery" class="pirobox_gall"><img src="images/diy/step08.jpg" alt="" height="200"></a>
                </div>

				<h3>3: Choosing a case</h3>
				<p>
				When choosing a case consider that it must have enough room for fitting the protoplate along with its components. The 
				<a href="http://www.ebay.it/itm/230873922897?ssPageName=STRK:MEWNX:IT&_trksid=p3984.m1497.l2649" target="_blank">iBox for the Raspberry Pi</a> is the one shown in the following pictures.
				</p>



                <div align="center">
					<a title="HomeGenie Board: Putting all togheter" href="images/diy/step09.jpg" rel="gallery" class="pirobox_gall"><img src="images/diy/step09.jpg" alt="" height="200"></a>
					<a title="HomeGenie Board: Final result" href="images/diy/step10.jpg" rel="gallery" class="pirobox_gall"><img src="images/diy/step10.jpg" alt="" height="200"></a>
                </div>


				<!--h3>4: Installing Eden firmware</h3>
				<p>[[ WORK IN PROGRESS - DRAFT ]]</p>
				<p>
				Eden firmware is a standard HomeGenie configuration backup archive (with preconfigured gpio relay etc..) that we can download from the following link:
                                <br />eden_firmware_backup-v1.zip
				</p-->

<p>&nbsp;</p><p>&nbsp;</p>

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
