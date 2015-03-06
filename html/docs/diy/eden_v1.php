<!DOCTYPE html>
<!--
	Halcyonic 3.1 by HTML5 UP	html5up.net | @n33co	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)-->
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>HomeGenie DIY Ideas: Eden Sensor Board v1 - MCP3008 ADC</title>
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
                  <h2 style="font-family:'Lobster',sans-serif">Eden Sensor Board v1 - MCP3008</h2>
                </header>

		<p>
		
		This version of Eden Board is designed with through-hole components and a simplified circuit. Less components = cheap = easy DIY assembling.<br />
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

		    <div align="center">
                    <object width="700" height="480"><param name="movie" value="//www.youtube.com/v/j6S7nWi6oKg?hl=it_IT&amp;version=3"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="//www.youtube.com/v/j6S7nWi6oKg?hl=it_IT&amp;version=3" type="application/x-shockwave-flash" width="700" height="480" allowscriptaccess="always" allowfullscreen="true"></embed></object>
		    </div>

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
                        <li>Eden Board v1 printed circuit 5.62 cm × 5.62 cm - 94.77 cm² (<a href="http://sourceforge.net/projects/homegenie/files/testing/" target="_blank">Download Etchable PDF/Gerber archive</a>)</li>
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
 			<a title="Eden Sensor Board: IR transceiver, temperature and luminance sensor onboard" href="images/eden/eden_shot_03.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_shot_03.jpg" alt="" height="140"></a>
 			<a title="4 pin connectors for I2C and GPIO with selectable 3V/5V line" href="images/eden/eden_shot_04.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_shot_04.jpg" alt="" height="140"></a>
 			<a title="GPIO and Analog channels' socket for breadboard and prototyping area" href="images/eden/eden_shot_05.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_shot_05.jpg" alt="" height="140"></a>
			<a title="Eden Sensor Board and Raspberry Pi" href="images/eden/eden_shot_02.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_shot_02.jpg" alt="" height="140"></a>
                </p>

		<h3>Configuring HomeGenie for Eden Board v1</h3>

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
		<br />
		We could also use an LCD display like this <a href="https://www.olimex.com/Products/Modules/LCD/MOD-LCD3310/open-source-hardware" target="_blank">Olimex LCD3310</a> to display data and messages.
		</p>
	
                <p align="center">
			<a title="Eden: LCD display and Relay modules" href="images/eden/eden_lcd.jpg" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_lcd.jpg" alt="" height="200"></a>
			<a title="Eden: OLED display" href="images/eden/eden_v1_oled.gif" rel="gallery" class="pirobox_gall"><img src="images/eden/eden_v1_oled.gif" alt="" height="200"></a>
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


                <table width="100%"><tr>
                  <td width="33%" align="center"><a href="/docs/diy/eden.php">&lt;&lt; Eden Project</a></td>
                  <td width="33%" align="center"><a href="/docs/diy/eden_v1.php#">TOP</a></td>
                  <td width="33%" align="center"><a href="/docs/diy/eden_v2.php">Eden Sensor Board v2 &gt;&gt;</a></td>
                </tr></table>

<p>&nbsp;</p>

                <?php include $_SERVER['DOCUMENT_ROOT'].'/donate_link.php'; ?>

<p>&nbsp;</p>

<p></p><p></p>

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
