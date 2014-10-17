<!DOCTYPE html>
<!--
	Halcyonic 3.1 by HTML5 UP	html5up.net | @n33co	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)-->
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>HomeGenie DIY Ideas: Mirage, Home Automation Touch Panel</title>
    <meta name="description" content="Home Automation Touch Panel - Raspberry Pi Project">
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
                  <h2 style="font-family:'Lobster',sans-serif">Mirage <span style="font-size:9pt;color:gray"><span style="font-family:sans-serif">powered by</span> HomeGenie</span></h2>
                  <h3>2.8" TFT Touch Panel for Home Automation</h3>
                </header>

                <p>
                    Using a <a title="What is Raspberry Pi? (click for video)" href="http://www.youtube.com/embed/e0wkVVVLvR8?autoplay=1" rel="iframe-800-520" class="pirobox_gall1">
                        <img src="/docs/images/playvideo.png" />&nbsp;Raspberry&nbsp;Pi</a>, like we already did in the <a href="eden.php">Eden</a> project, we're now going to build a TFT Touch Panel for our Home Automation system based on HomeGenie.
                </p>
                

                <div align="center"><a title="" href="images/diy_touch/rpi_touch_00.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_00.jpg" alt="" height="250">
                    </a></div>


                <h3>Components Listing</h3>
                <p>
                    <ul style="list-style-type:square;padding-left:30px;">
                        <li>Raspberry Pi model A</li>
                        <li><a href="http://www.adafruit.com/products/1601" target="_blanl">Adafruit 2.8" 320x240 TFT Touchscreen</a></li>
                        <li><a href="http://www.adafruit.com/product/814" target="_blank">Mini Wi-Fi USB module</a></li>
                        <li>4GB SD Card with HomeGenie server + HomeGenie Smart Control client</li>
                        <li>Small 5V power supply</li>
                        <li>Flush mounting junction box 120x100x70</li>
                    </ul>
                </p>


<pre style="background-color:#ffffdd;font-family:courier;font-size:10pt;width:710px;margin-left:40px;padding:20px;line-height:11pt">DISCLAIMER
Please note that any project details posted on this site are supplied for general
interest only, rather than as contructional guidelines, and no guarantee is given about
their correctness or reliability. Anyone trying to build from them is responsible for
their own safety and for any possible resulting damage to property or to persons.</pre>
<br />


                <h3>Preparing Raspberry Pi for fitting into the junction box</h3>
                 
                <p>
                    For making RPi fit into the junction box we'll have to make some small adaptation.
                    <br/>
                    First, we'll "cut" the SD-Card (or buy a low profile micro SD-Card adapter like <a href="http://www.adafruit.com/product/966" target="_blank">this</a>).
                </p>

                <div align="center">
                    <a title="" href="images/diy_touch/rpi_touch_01.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_01.jpg" alt="" height="150">
                    </a>
                    <a title="" href="images/diy_touch/rpi_touch_02.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_02.jpg" alt="" height="150">
                    </a>
                </div>
                
                <p>
                    Since using an USB cable for powering RPi will waste more precious space, we'll also have to feed power to RPi by directly connecting the 5V source to the RPi board.
                    <br />
                    Further information about this step can be found <a href="http://www.instructables.com/id/Solder-USB-power-cable-to-Raspberry-Pi/" target="_blank">here</a>.
                </p>

                <div align="center">
                    <a title="" href="images/diy_touch/rpi_touch_04.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_04.jpg" alt="" height="150">
                    </a>
                    <a title="" href="images/diy_touch/rpi_touch_03.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_03.jpg" alt="" height="150">
                    </a>
                    <a title="" href="images/diy_touch/rpi_touch_05.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_05.jpg" alt="" height="150">
                    </a>
                </div>
                
                <p>
                    For convenience we fix the cable connections with some ectoplasma =) as shown in the last picture above, using a hot melt glue gun.
                    <br />
                    We can then use any male/female connectors to connect the power supply to the new power input we just made.
                </p>

                <div align="center">
                    <a title="" href="images/diy_touch/rpi_touch_06.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_06.jpg" alt="" height="150">
                    </a>
                    <a title="" href="images/diy_touch/rpi_touch_07.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_07.jpg" alt="" height="150">
                    </a>
                </div>
                
                <br />
                <h3>Preparing the junction box lid for hosting the 2.8" TFT Touchscreen</h3>
                
                <p>
                After finding out the right measurements for centering the touchscreen display over the lid, we use a pencil to draw the box for obtaining the hole.
                </p>

                <div align="center">
                    <a title="" href="images/diy_touch/rpi_touch_08.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_08.jpg" alt="" height="150">
                    </a>
                    <a title="" href="images/diy_touch/rpi_touch_09.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_09.jpg" alt="" height="150">
                    </a>
                </div>
                
                <p>
                Then we use a cutter and a ruler to make the traces over the drawn lines. This require a bit of patience because before we can pull off the "rectangle",
                it will need to make multiple cutter passes. No need to make heavy pressure on the cutter, we're just passing it many times over and over the lines, almost gently.
                </p>
                
                <div align="center">
                    <a title="" href="images/diy_touch/rpi_touch_10.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_10.jpg" alt="" height="150">
                    </a>
                    <a title="" href="images/diy_touch/rpi_touch_11.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_11.jpg" alt="" height="150">
                    </a>
                </div>
                
                <p>So... let's now give it some color...</p>
                
                <div align="center">
                    <a title="" href="images/diy_touch/rpi_touch_12.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_12.jpg" alt="" height="150">
                    </a>
                    <a title="" href="images/diy_touch/rpi_touch_13.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_13.jpg" alt="" height="150">
                    </a>
                </div>

                <br />
                <h3>Fixing the TFT display board to the box lid</h3>
                
                <p>We're now going to fix the touchscreen display board to the junction box lid.
                For this purpose we'll be using a hot melt glue gun.
                <br />
                Before putting the glue, we'll use some adhesive tape to ensure the display board won't be moving.
                <br/>
                We'll also apply a little pressure and hold down the board for at least one minute after putting the glue on each corner, to let the glue to solidify.
                </p>

                <div align="center">
                    <a title="" href="images/diy_touch/rpi_touch_14.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_14.jpg" alt="" height="150">
                    </a>
                    <a title="" href="images/diy_touch/rpi_touch_15.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_15.jpg" alt="" height="150">
                    </a>
                    <a title="" href="images/diy_touch/rpi_touch_16.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_16.jpg" alt="" height="150">
                    </a>
                </div>

                <p>
                After applying the glue it may happen that some of the paint will melt down, due to the heat.
                In that case we will be putting some more paint on the lid.
                </p>
                
                <div align="center">
                    <a title="" href="images/diy_touch/rpi_touch_17.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_17.jpg" alt="" height="150">
                    </a>
                </div>

                <br />
                <h3>Putting all togheter</h3>

                <p>We can now stick the Raspberry Pi to the display board and try to close the junction box lid...</p>
               
                <div align="center">
                    <a title="" href="images/diy_touch/rpi_touch_18.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_18.jpg" alt="" height="150">
                    </a>
                    <a title="" href="images/diy_touch/rpi_touch_19.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_19.jpg" alt="" height="150">
                    </a>
                </div> 

                <p>...oh-oh! It happened that the Wi-Fi dongle was not fitting well and won't let the lid to close.</p>
                <div align="center">
                    <a title="" href="images/diy_touch/rpi_touch_20.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_20.jpg" alt="" height="150">
                    </a>
                </div>
                
                <p>So we remove a small slice from the junction box... and voilà! Everything is fitting well now =)</p>
               
                <div align="center">
                    <a title="" href="images/diy_touch/rpi_touch_22.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_22.jpg" alt="" height="150">
                    </a>
                    <a title="" href="images/diy_touch/rpi_touch_21.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_21.jpg" alt="" height="150">
                    </a>
                    <a title="" href="images/diy_touch/rpi_touch_23.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_23.jpg" alt="" height="150">
                    </a>
                </div> 

                <p><u>NOTE:</u> in the picture above you can see the power supply inside the junction box, but it's safer to put it out of the
                junction box since there might be excessive heating issues.</p>
                
                <br />
                <h3>The final result</h3>
                
                <p></p>
                
                <div align="center">
                    <a title="" href="images/diy_touch/rpi_touch_24.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_24.jpg" alt="" height="150">
                    </a>
                    <a title="" href="images/diy_touch/rpi_touch_25.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_25.jpg" alt="" height="150">
                    </a>
                    <!--a title="" href="images/diy_touch/rpi_touch_26.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_26.jpg" alt="" height="150">
                    </a-->
                    <a title="" href="images/diy_touch/rpi_touch_27.jpg" rel="gallery" class="pirobox_gall">
                        <img src="images/diy_touch/rpi_touch_27.jpg" alt="" height="150">
                    </a>
                </div> 
                
                <p>Isn't it cute?</p>
 
 
                <h3>Installing Mirage touch panel software</h3>
                <p>
                Mirage software is designed to run on any 320x240 Touchscreen Display. The software is still an alpha release, but it is functional already.<br />
                <ul style="list-style-type:square;padding-left:30px;">
                    <li>Download latest <a href="http://sourceforge.net/projects/homegenie/files/" target="_blank">HomeGenie SD-Card image</a> and write it to the SD card</li>
                    <li><a href="http://learn.adafruit.com/adafruit-pitft-28-inch-resistive-touchscreen-display-raspberry-pi/software-installation" target="_blank">Configure the Touchscreen display</a></li>
                    <li><a href="http://learn.adafruit.com/adafruits-raspberry-pi-lesson-3-network-setup/setting-up-wifi-with-occidentalis" target="_blank">Setup your Wi-Fi connection</a></li>
                    <li>Build <a href="http://github.com/genielabs/HomeGenie-SmartControl" target="_blank">HomeGenie Smart Control</a> client and copy it to the Sd card.<br/>
                    Before building, remember to eventually change the HG server address and password you'll find at line 19 of the SmartControl.cs file.</li>
                    <li>Run HG Smart Control using the command "DISPLAY=:0 mono HgSmartControl.exe" (X11 desktop enviroment must be running)</li>
                </ul>
                </p>

                <?php include $_SERVER['DOCUMENT_ROOT'].'/donate_link.php'; ?>



		<p></p><p></p>
                
                <div align="center">
                  <a href="/docs/diy/mirage.php#">TOP</a>
                </div>
              </section>
            </div>
            <div class="3u">
              <!-- Right Sidebar -->
              <?php include $_SERVER['DOCUMENT_ROOT'].'/docs/includes/menu_diyrpi_1.php'; ?>
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
