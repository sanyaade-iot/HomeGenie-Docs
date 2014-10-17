<!DOCTYPE html>
<!--
	Halcyonic 3.1 by HTML5 UP	html5up.net | @n33co	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)-->
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>HomeGenie, Do It Yourself Home Automation Server</title>
    <meta name="description" content="Extend and interconnect home IoT network">
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
                  <h2>HomeGenie Do It Yourself Project</h2>
                  <h3>Cheap, small and energy saving Home Automation Server</h3>
                </header>

                <div align="center"><img title="DIY HomeGenie Server" alt="DIY HomeGenie Server" src="/docs/images/homegenie_tablet_01.jpg" width="70%"></div>

                <p>

                    There are a couple of good reasons for installing HomeGenie on 
                    <a title="What is Raspberry Pi? (click for video)" href="http://www.youtube.com/embed/e0wkVVVLvR8?autoplay=1" rel="iframe-800-520" class="pirobox_gall1">
                        <img src="/docs/images/playvideo.png" />&nbsp;Raspberry&nbsp;Pi
                    </a>:

                    <ul style="list-style-type:square;padding-left:30px;">
                        <li>We don't have to keep our desktop PC on 24/7, the little box will do all the work</li>
                        <li>It's cheap and energy saving</li>
                        <li>Makes HomeGenie "Interconnections" more practical</li>
                        <li><a href="/docs_api/raspberrypi.html">Using its GPIO interface can be directly connected to sensors, relays and many other things</a></li>
                        <li>Can also run on top of <a href="http://wiki.xbmc.org/?title=Raspberry_Pi" target="_blank">XBMC Media Center</a>, so we kill two birds with a stone</li>
                    </ul>

                </p>

  
                <h3>Getting all the components</h3>

                <p>
                    First we need to get a Raspberry Pi. Raspberry Pi is a small computer that costs just $25.
                    <br />
                    See <a href="http://www.raspberrypi.org/" target="_blank">http://www.raspberrypi.org/</a> to
                    find out where to buy one.
                    <br />
                    Optionally we can also get a cheap Android tablet for about $40 and have a nice control panel for our automation system.
                    <br />
                    With $15 more, we can also build the HomeGenie Raspberry Pi Board (described later in this article), 
                    that will give our small server a programmable IR receiver, a buzzer, a temperature sensor and some nice status leds.
                </p>

                <h3>Installing HomeGenie Server on Raspberry Pi</h3>
                 
                <p>
                    For instructions about installing HomeGenie on Raspberry Pi, see the <a href="../download.php">Download</a> section.
                    <br />
                    <span style="font-style:italic">Please also read the following article about securing your Raspberry Pi SD card installation: <br />
                        &nbsp;&nbsp;&nbsp;-&gt;&nbsp;&nbsp;&nbsp;<a href="http://mattwilcox.net/archives/setting-up-a-secure-home-web-server-with-raspberry-pi/" target="_blank">SETTING UP A (REASONABLY) SECURE HOME WEB-SERVER WITH RASPBERRY PI</a>
                    </span>
                </p>
                
<pre style="background-color:#ffffdd;font-family:courier;font-size:10pt;width:710px;margin-left:40px;padding:20px;line-height:11pt">DISCLAIMER
Please note that any project details posted on this site are supplied for general
interest only, rather than as contructional guidelines, and no guarantee is given about
their correctness or reliability. Anyone trying to build from them is responsible for
their own safety and for any possible resulting damage to property or to persons.</pre>
<br />
              
                <h2>HomeGenie board</h2>
                <h3>Components Listing</h3>
                <p>
                    <ul style="list-style-type:square;padding-left:30px;">
                        <li><span style="font-weight:bold">1</span>&nbsp; BitBang Proto-Plate with 2x13 Way Header Socket</li>
                        <li><span style="font-weight:bold">3</span>&nbsp; 330 ohm resistors</li>
                        <li><span style="font-weight:bold">3</span>&nbsp; leds (red, yellow, green)</li>
                        <li><span style="font-weight:bold">1</span>&nbsp; Infrared Receiver TSOP 4838 38Khz</li>
                        <li><span style="font-weight:bold">1</span>&nbsp; DHT-11 temperature and humidity sensor</li>
                    </ul>

                    <div align="center">
                        <a title="HomeGenie Board: Components" href="images/diy/hg_components.jpg" rel="gallery" class="pirobox_gall"><img src="images/diy/hg_components.jpg" alt="" width="200"></a>                    </div>
                </p>

                <h3>Step 1: Socket and Leds</h3>
                <p>
					First we'll solder the header socket pins to the proto-board. The proto-board used here it's a <a href="http://www.bitbang.co.uk/proto-plate_1_1.html" target="_blank">BitBang Proto-Plate</a>, but we can eventually use any other board for Raspberry Pi.<br>
					To get some tip about soldering the header socket, see the first part of <a href="http://learn.adafruit.com/adafruit-prototyping-pi-plate/solder-it" target="_blank">Adafruit tutorial</a>.
				</p>
                <div align="center">
                    <a title="HomeGenie Board: Step 1" href="images/diy/step01.jpg" rel="gallery" class="pirobox_gall"><img src="images/diy/step01.jpg" alt="" width="300"></a>                    <a title="HomeGenie Board: Step 2" href="images/diy/step02.jpg" rel="gallery" class="pirobox_gall"><img src="images/diy/step02.jpg" alt="" width="300"></a>                </div>

                <br />
                <h3>Step 2: Wiring leds to GPIO pins</h3>
                <p>
					Each led will have one pin connected to the GND and the other one to a GPIO pin. The green led will use RaspberryPi <span style="font-weight:bold">GPIO21</span>, 
                    while the yellow one will use <span style="font-weight:bold">GPIO22</span>.
					The proto-plate used here has a GND pad close to the leds footprints, so connecting the two 330 ohm resistors will not require any additional wires.
					For connecting to the GPIOs, we'll use a green wire to the green led and a yellow wire to the yellow led.<br/>
					Once done that, we are ready for a first test. We can plug the HomeGenie board and power up our Raspberry Pi for testing.
					In order to enable leds, we have to activate the "HomeGenie Leds" APP under <span style="font-weight:bold">Configure->Automation->RaspberrySharp</span> menu in HomeGenie.
				</p>

                <div align="center">
                    <a title="HomeGenie Board: Step 3" href="images/diy/step03.jpg" rel="gallery" class="pirobox_gall"><img src="images/diy/step03.jpg" alt="" width="300"></a>                </div>

                <br />
                <h3>Step 3: Infrared Receiver</h3>
                <p>
					To setup the IR receiver sensor, first we have to activate the power pads on the Proto-Plate. BitBang protoplate comes with two power pads. We can see them in the pictures below.<br>
					The first one is below the TV-OUT connector and it's labeled "PWR". The other one is on the left side. To activate these power pads we have to wire the +3V out to the power pad on the left. 
					As we can see in the picture we've a little red wire connecting them (see it in the upper left corner of the board).<br>
					Also we will connect a wire from the power pad on the left to the red led.<br>
					Next we'll solder the IR receiver and connect its output pin (1) to <span style="font-weight:bold">GPIO18</span> pin on Raspberry Pi. This is the pink wire in the picture, going from GPIO18 to the IR receiver pin 1.<br>
				</p>

                <div align="center">
                    <a title="HomeGenie Board: Step 4" href="images/diy/step04.jpg" rel="gallery" class="pirobox_gall"><img src="images/diy/step04.jpg" alt="" width="300"></a>                </div>

                <p>
					If we look at the bottom side of the board (see the picture below), we'll also see how the GND and the +3V is connected to the IR receiver pin 2 and pin 3 respectively.
					The GND is taken from the GND pad on the proto-plate (see the black wire). While the +3V is taken from the power pad that is below the tv-out (red cable).
					Finally we'll have a 330 ohm resistor going from IR receiver output pin to the red led.
					For more details about how to connect a IR receiver to Raspberry Pi see <a href="http://learn.adafruit.com/using-an-ir-remote-with-a-raspberry-pi-media-center/hardware" target="_blank">Adafruit IR Tutorial</a>.
				</p>

                <div align="center">
					<a title="HomeGenie Board: Step 5" href="images/diy/step06.jpg" rel="gallery" class="pirobox_gall"><img src="images/diy/step06.jpg" alt="" width="300"></a>
                </div>

				<p>
					Once done that, we are ready to plug the HG board on the Raspberry Pi and test it with HomeGenie. 
					We can now activate IR receiving in HomeGenie from the <i>"Configure->System and Interfaces"</i> menu and start controlling lights and things with a TV remote =)
				</p>

				<h3>Step 4: Temperature and Humidity Sensor</h3>
				<p>
					If we want HomeGenie also sense the temperature and the humidity, we can add a DHT-11 sensor to HomeGenie board.
					Connect the pin 4 of the DHT-11 sensor to the GND pad, as we did for the IR receiver. Next we can connect the DHT-11 data pin 2 (the blue wire) to the Raspberry Pi <span style="font-weight:bold">CK0</span> (GPIO4) pin.
					And one last step, we connect the pin 1 of the DHT-11 to the +3V on the proto-plate power pad (red wire, as done with IR sensor).<br>
					To activate the DHT-11 in HomeGenie, go to the <i>"Configure->Automation->RaspberrySharp"</i> menu and enable the "DHT-11" APP.<br>
					For more details about how to connect DHT-11 sensor to Raspberry Pi see <a href="http://learn.adafruit.com/dht-humidity-sensing-on-raspberry-pi-with-gdocs-logging/overview" target="_blank">Adafruit DHT-11 Tutorial</a>.
				</p>

                <div align="center">
					<a title="HomeGenie Board: Step 6" href="images/diy/step07.jpg" rel="gallery" class="pirobox_gall"><img src="images/diy/step07.jpg" alt="" height="200"></a>
					<a title="HomeGenie Board: Step 7" href="images/diy/step08.jpg" rel="gallery" class="pirobox_gall"><img src="images/diy/step08.jpg" alt="" height="200"></a>
                </div>

				<h3>Choosing a case</h3>
				<p>
				When choosing a case consider that it must have enough room for fitting the protoplate along with its components. This one 
				<a href="http://www.ebay.it/itm/230873922897?ssPageName=STRK:MEWNX:IT&_trksid=p3984.m1497.l2649" target="_blank">iBox for the Raspberry Pi</a> is the one shown in the following pictures.
				</p>

                <div align="center">
					<a title="HomeGenie Board: Putting all togheter" href="images/diy/step09.jpg" rel="gallery" class="pirobox_gall"><img src="images/diy/step09.jpg" alt="" height="200"></a>
					<a title="HomeGenie Board: Final result" href="images/diy/step10.jpg" rel="gallery" class="pirobox_gall"><img src="images/diy/step10.jpg" alt="" height="200"></a>
                </div>

				<p></p>

                <div align="center">
                  <a href="/docs/doityourself.php#">TOP</a>
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
