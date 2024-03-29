<!DOCTYPE html>
<!--
	Halcyonic 3.1 by HTML5 UP	html5up.net | @n33co	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)-->
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>HomeGenie, Downloads</title>
    <meta name="description" content="Download HomeGenie Server and Client">
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
            <div class="12u">
              <!-- Main Content -->
              <section>
                <header>
                  <h2>Download</h2>
                </header>
                <h3><span style="font-weight: bold;">HomeGenie Server and Client</span></h3>
                <br>
                <p style="float:left;text-wrap:no-wrap;margin-left:50px">
                    <img src="images/logos/winicon.png" alt="" style="margin-right:16px" align="left" width="96">
                    <a target="_top" title="Download HomeGenie for Windows" href="http://sourceforge.net/projects/homegenie/files/HomeGenie_1_00_beta_r370.exe/download">
                        <strong style="text-decoration: underline;">HomeGenie 1.00 beta rev. 370</strong>
                    </a><br>
                    Windows Setup Installer<br>
                    XP / Vista / Win7 / Win8
                </p>
                <p style="float:left;text-wrap:no-wrap;margin-left:50px">
                    <img src="images/logos/luxicon.png" alt="" style="margin-right:16px" align="left" width="96">
                    <a title="HomeGenie for Debian Linux" href="http://sourceforge.net/projects/homegenie/files/homegenie-beta_1.00.370_all.deb/download">
                        <strong style="text-decoration: underline;">HomeGenie 1.00 beta rev. 370</strong>
                    </a><br>
                    Linux .deb Package<br>
                    Ubuntu / Debian / Raspbian
                </p>
                <p style="float:left;text-wrap:no-wrap;margin-left:50px">
                    <img src="images/logos/macicon.png" alt="" style="margin-right:16px" align="left" width="96">
                    <a title="Download HomeGenie platform agnostic archive" href="http://sourceforge.net/projects/homegenie/files/HomeGenie_1_00_beta_r370.tgz/download">
                        <strong style="text-decoration: underline;">HomeGenie 1.00 beta rev. 370</strong>
                    </a><br>
                    Platform agnostic .tgz archive<br>
                    Other Mono .NET systems
                </p>
                <p style="float:left;text-wrap:no-wrap;margin-left:50px;margin-left:50px">
                    <img src="images/logos/rpiicon.png" alt="" style="margin-right:16px" align="left" width="96">
                    <a title="Download HomeGenie for Raspberry Pi (prebuilt SD-Card)" href="http://sourceforge.net/projects/homegenie/files/HomeGenie_1_00_beta_r370_raspi-armhf-4GB.zip/download">
                        <strong style="text-decoration: underline;">HomeGenie 1.00 beta rev. 370</strong>
                    </a><br>
                    Raspberry Pi prebuilt SD-Card<br>
                    Arm-HF Debian w/ Mono 3.2
                </p>
                <p style="float:left;text-wrap:no-wrap;margin-left:50px;">
                    <img src="images/logos/android_logo.png" alt="" style="margin-right:16px" align="left" width="96">
                    <a title="HomeGenie client for Android" href="https://play.google.com/store/apps/details?id=com.glabs.homegenie">
                        <strong style="text-decoration: underline;">HomeGenie client for Android</strong>
                    </a><br>
                    Play Store<br>
                    Android 2.2 and up
                </p>
                <p style="float:left;text-wrap:no-wrap;margin-left:50px;">
                    <img src="images/logos/wp_logo.png" alt="" style="margin-right:16px" align="left" width="96">
                    <a title="HomeGenie client for Windows Phone" href="http://www.windowsphone.com/en-us/store/app/homegenie/b3bff0d6-f65a-4ce5-93f7-7be68d4849f3">
                        <strong style="text-decoration: underline;">HomeGenie client for Windows Phone</strong>
                    </a><br>
                    Windows Store<br>
                    WP 7.5 and up
                </p>


                <br clear="all"><br />


                <?php include $_SERVER['DOCUMENT_ROOT'].'/donate_link.php'; ?>


                <header>
                  <h2>Install instructions</h2>
                </header>
                <h3><span style="font-weight: bold;">Windows</span></h3>
                <p> Download Windows Setup file and run it. Once installed, you
                  can access HomeGenie by right clicking on its tray icon.. </p>
                <h3><span style="font-weight: bold;">Ubuntu, Raspbian and others
                    Debian Linux<br>
                  </span></h3>
                <p> Download Debian Package file and install it by double
                  clicking on it, or by using <span style="font-style: italic;">gdebi</span>
                  command line tool:<br>
                  <span style="font-family: courier;">
                    &nbsp;&nbsp; sudo apt-get update <br>
                    &nbsp;&nbsp; sudo apt-get install gdebi-core <br>
                    &nbsp;&nbsp; sudo gdebi homegenie-beta_1.00.370_all.deb</span><br>
                  HomeGenie will be installed in the &nbsp; <span style="font-style:italic">/usr/local/bin/homegenie</span> &nbsp; foder.<br/>
                  Once installed, you can access HomeGenie opening the following
                  URL in your web browser:<br>
                  <span style="font-family: courier;">&nbsp;&nbsp;
                    http://&lt;linux_box_address&gt;/</span>&nbsp;&nbsp;&nbsp;
                  (where &lt;linux_box_address&gt; is the name or ip of the host
                  where homegenie is installed)<br>
                  <br>
                  <span style="font-weight:bold">Note:</span> starting from r350, HG requires mono runtime version 3.0 or later.
                  <br>
                    
                    <h3>Troubleshooting common issues on Linux and ARM systems</h3>
                    <p>
                    In some circumstances, installation on a Linux system or ARM based hardware might result in a error, due to some bugs in older mono runtime component.
                    <br/>
                    On ARM systems ensure to set the locale to en_EN. On Raspberry Pi this can be done by using the raspi-config command line tool.
                    <br/>
                    Also it might be needed to replace the file "NewtosoftJson.dll" with an older release that can be found <a href="https://github.com/genielabs/HomeGenie/blob/b0079d005d89bdd851f1cd5b989c96b409d99d22/HomeGenie/Newtonsoft.Json.dll.mono">here</a> (click the "Raw" button and once downloaded rename it to NewtonsoftJson.dll).
                    </p>
                    
                    <h3>Additional step for configuring LIRC Infrared Remote Control</h3>
                    
                    Edit the <span style="font-weight:bold">/etc/lirc/hardware.conf</span> file:<br />
                    <span style="font-family: courier;">
                        &nbsp;&nbsp; sudo nano /etc/lirc/hardware.conf
                    </span>
                    <br />
                    Paste the following text into it: <br />
                    
                    <pre style="font-family: courier;line-height:10pt;font-size:9pt;margin-left:20px;padding:10px;background-color:#eaeaea;width:600px">########################################################
# /etc/lirc/hardware.conf
#
# Arguments which will be used when launching lircd
LIRCD_ARGS="--uinput"

# Don't start lircmd even if there seems to be a good config file
# START_LIRCMD=false

# Don't start irexec, even if a good config file seems to exist.
# START_IREXEC=false

# Try to load appropriate kernel modules
LOAD_MODULES=true

# Run "lircd --driver=help" for a list of supported drivers.
DRIVER="default"
# usually /dev/lirc0 is the correct setting for systems using udev
DEVICE="/dev/lirc0"
<span style="font-weight:bold;color:blue">MODULES="mceusb"</span>

# Default configuration files for your hardware if any
LIRCD_CONF=""
LIRCMD_CONF=""
########################################################</pre>
                    Change <span style="font-weight:bold">MODULES="mceusb"</span> line with your IR transceiver module name.<br />
                    If you are using Raspberry Pi GPIO IR hardware, change it to <span style="font-weight:bold">MODULES="lirc_rpi"</span>.
                    For more information about IR GPIO module for Raspberry Pi see: <a href="http://aron.ws/projects/lirc_rpi/" target="_blank">Raspberry Pi lirc_rpi</a>.
                    <br />
                    Restart LIRC:<br />
                    <span style="font-family: courier;">
                        &nbsp;&nbsp; sudo /etc/init.d/lirc restart
                    </span>
                    <br />
                    Happy remote controlling! =)

                </p>
                <h3><span style="font-weight: bold;">Manual installation
                    procedure</span></h3>
                <p> HomeGenie could also be installed on other systems (eg. Mac
                  OS X and other unix based systems) by following the procedure
                  described below.</p>
                <h4><span style="font-weight: bold;">Installing prerequisites</span></h4>
                <p>Enter the following command from terminal:</p>
                <ul style="margin: 1em 0px 1em 5px; padding: 0px 0px 0px 15px; list-style-type: none; border-left-width: 5px; border-left-style: solid; border-left-color: gray; color: rgb(34, 34, 34); ">
                  <li>

                    <b style="font-weight: bold;">sudo apt-get install</b><span class="Apple-converted-space">&nbsp;</span>
                    libusb-1.0-0, libusb-1.0-0-dev, alsa-utils, mono-runtime, libmono-corlib2.0-cil, libmono-system-web4.0-cil, libmono-system-numerics4.0-cil,
                    libmono-system-serviceprocess4.0-cil, libmono-system-data4.0-cil, libmono-system-core4.0-cil, 
                    libmono-windowsbase4.0-cil, libmono-system-runtime-serialization-formatters-soap4.0-cil,
                    libmono-system-runtime-serialization4.0-cil, libmono-system-xml-linq4.0-cil, mono-dmcs,
                    libmono-zeroconf-cil-dev, libmono-zeroconf1.0-cil, lame, lirc, libv4l-0
                  </li>
                </ul>
                <h4><span style="font-weight: bold;">Uncompressing tgz archive
                    file</span></h4>
                <p>Enter the following command terminal</p>
                <ul style="margin: 1em 0px 1em 5px; padding: 0px 0px 0px 15px; list-style-type: none; border-left-width: 5px; border-left-style: solid; border-left-color: gray; color: rgb(34, 34, 34);">
                  <li><b style="font-weight: bold;">tar xzvf&nbsp;</b><span class="Apple-converted-space"></span>HomeGenie_1_00_beta_r370.tgz</li>
                </ul>
                <h4><span style="font-weight: bold;">Running HomeGenie</span></h4>
                <p style="margin: 1em 0px; color: rgb(34, 34, 34);">After
                  unzipping, an<span class="Apple-converted-space">&nbsp;</span><i>HomeGenie</i><span

                    class="Apple-converted-space">&nbsp;</span>folder will be
                  created. Enter the following commands from terminal to run
                  HomeGenie:</p>
                <ul style="margin: 1em 0px 1em 5px; padding: 0px 0px 0px 15px; list-style-type: none; border-left-width: 5px; border-left-style: solid; border-left-color: gray; color: rgb(34, 34, 34);">
                  <li><b style="font-weight: bold;">cd</b><span class="Apple-converted-space">&nbsp;</span>HomeGenie</li>
                  <li><span class="Apple-converted-space">&nbsp;</span>./startup.sh</li>
                </ul>
                <span style="color: rgb(34, 34, 34);">Open the following URL in
                  your browser to access HomeGenie:</span>
                <ul style="margin: 1em 0px 1em 5px; padding: 0px 0px 0px 15px; list-style-type: none; border-left-width: 5px; border-left-style: solid; border-left-color: gray; color: rgb(34, 34, 34);">
                  <li><b style="font-weight: bold;">http://localhost:80/</b></li>
                </ul>
                <h4><span style="font-weight: bold;">Running HomeGenie as a
                    Background Service</span></h4>
                <p style="margin: 1em 0px; color: rgb(34, 34, 34);">Download<span

                    class="Apple-converted-space">&nbsp;</span><a href="https://sourceforge.net/p/homegenie/code/HEAD/tree/trunk/Dist/Linux/DEBIAN.tgz?format=raw"

                    style="text-decoration: none;">HomeGenie init.d Scripts</a><span

                    class="Apple-converted-space">&nbsp;</span>archive. This
                  contains two files:<span class="Apple-converted-space">&nbsp;</span><i>homegenie</i><span

                    class="Apple-converted-space">&nbsp;</span>and<span class="Apple-converted-space">&nbsp;</span><i>startup.sh</i>.</p>
                <ol style="margin: 1em 0px; padding: 0px 0px 0px 40px; color: rgb(34, 34, 34); list-style-type:decimal;">
                  <li>Copy<span class="Apple-converted-space">&nbsp;</span><i>homegenie</i><span

                      class="Apple-converted-space">&nbsp;</span>file to<span class="Apple-converted-space">&nbsp;</span><i>/etc/init.d</i><span

                      class="Apple-converted-space">&nbsp;</span>folder:
                    <pre style="margin: 1em 0px; font-family: monospace, serif; font-size: 1em; white-space: pre-wrap; word-wrap: break-word;">sudo cp homegenie /etc/init.d/</pre>
                  </li>
                  <li>Copy the<span class="Apple-converted-space">&nbsp;</span><i>startup.sh</i><span

                      class="Apple-converted-space">&nbsp;</span>file to
                    HomeGenie folder (overwrite old file)</li>
                  <li>Change path to HomeGenie folder at line #22 of<span class="Apple-converted-space">&nbsp;</span><i>/etc/init.d/homegenie</i>:
                    <pre style="margin: 1em 0px; font-family: monospace, serif; font-size: 1em; white-space: pre-wrap; word-wrap: break-word;">INSTALL_PATH="/usr/local/bin"  # &lt;------ CHANGE INSTALL PATH HERE</pre>
                  </li>
                  <li>Set execution flag for both scripts:
                    <pre style="margin: 1em 0px; font-family: monospace, serif; font-size: 1em; white-space: pre-wrap; word-wrap: break-word;">sudo chmod +x /etc/init.d/homegenie
sudo chmod +x startup.sh</pre>
                  </li>
                </ol>
                <p style="margin: 1em 0px; color: rgb(34, 34, 34);">To
                  start/stop/restart HomeGenie:</p>
                <pre style="margin: 1em 0px; font-family: monospace, serif; font-size: 16px; white-space: pre-wrap; word-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 26px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">&nbsp;&nbsp; sudo /etc/init.d/homegenie start|stop|restart</pre>
                <span style="color: rgb(34, 34, 34);">To start HomeGenie
                  automatically after system boot:</span>
                <pre style="margin: 1em 0px; font-family: monospace, serif; font-size: 16px; white-space: pre-wrap; word-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 26px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">&nbsp;&nbsp; sudo update-rc.d -f homegenie defaults</pre>
                <span style="color: rgb(34, 34, 34);">To stop HomeGenie from
                  starting automatically:</span>
                <pre style="margin: 1em 0px; font-family: monospace, serif; font-size: 16px; white-space: pre-wrap; word-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 26px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">&nbsp;&nbsp; sudo update-rc.d -f homegenie remove</pre>
                <span style="color: rgb(34, 34, 34);">To query HomeGenie status:</span>
                <pre style="margin: 1em 0px; font-family: monospace, serif; font-size: 16px; white-space: pre-wrap; word-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 26px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">&nbsp;&nbsp; /etc/init.d/homegenie status</pre>
                <p> </p>
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
                    <?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer_about_author.php'; ?>
                </div>
            </div>
        </footer>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer_copyright.php'; ?>

  </body>
</html>
