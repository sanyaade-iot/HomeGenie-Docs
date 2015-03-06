<!DOCTYPE html>
<!--
Halcyonic 3.1 by HTML5 UP	html5up.net | @n33co	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)-->
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="content-type">
        <title>HomeGenie, Downloads</title>
        <meta name="description" content="Download HomeGenie Server and Client">
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
                        <div class="12u">
                            <!-- Main Content -->
                            <section>
                                <header>
                                    <h2>Download</h2>
                                </header>
                                <h3><span style="font-weight: bold;">HomeGenie Server</span></h3>
                                <br>
                                <p style="float:left;text-wrap:no-wrap;margin-left:50px">
                                    <img src="images/logos/winicon.png" alt="" style="margin-right:16px" align="left" width="96">
                                    <a target="_top" title="Download HomeGenie for Windows" href="https://sourceforge.net/projects/homegenie/files/HomeGenie_1_00_beta_r482.exe/download"> <strong style="text-decoration: underline;">HomeGenie 1.00 beta rev. 482</strong> </a>
                                    <br>
                                    Windows Setup Installer
                                    <br>
                                    XP / Vista / Win7 / Win8
                                </p>
                                <p style="float:left;text-wrap:no-wrap;margin-left:50px">
                                    <img src="images/logos/luxicon.png" alt="" style="margin-right:16px" align="left" width="96">
                                    <a title="HomeGenie for Debian Linux" href="https://sourceforge.net/projects/homegenie/files/homegenie-beta_1.00.r482_all.deb/download"> <strong style="text-decoration: underline;">HomeGenie 1.00 beta rev. 482</strong> </a>
                                    <br>
                                    Linux .deb Package
                                    <br>
                                    Ubuntu / Debian derivatives
                                </p>
                                <p style="float:left;text-wrap:no-wrap;margin-left:50px">
                                    <img src="images/logos/macicon.png" alt="" style="margin-right:16px" align="left" width="96">
                                    <a title="Download HomeGenie platform agnostic archive" href="https://sourceforge.net/projects/homegenie/files/homegenie_1_00_beta_r482.tgz/download"> <strong style="text-decoration: underline;">HomeGenie 1.00 beta rev. 482</strong> </a>
                                    <br>
                                    Platform agnostic .tgz archive
                                    <br>
                                    Other Mono .NET systems
                                </p>

                                <br clear="all" />

                                <!--p style="float:left;text-wrap:no-wrap;margin-left:50px">
                                    <img src="images/logos/bug.png" alt="" style="margin-right:16px" align="left" width="92">
                                    <a title="Download latest HomeGenie testing package" href="http://sourceforge.net/projects/homegenie/files/testing">
                                        <strong style="text-decoration: underline;">HomeGenie 1.00 beta rev. 482</strong>
                                    </a>
                                    <br>
                                    .deb and .tgz packages<br />
                                    Latest <span style="font-weight: bold">testing</span> build
                                </p>
                                <br clear="all" /-->
                                

                                <h3><span style="font-weight: bold;">HomeGenie Mobile Client</span></h3>
                                <br>
                                <p style="float:left;text-wrap:no-wrap;margin-left:50px;">
                                    <img src="images/logos/android_logo.png" alt="" style="margin-right:16px" align="left" width="96">
                                    <a title="HomeGenie client for Android" href="https://play.google.com/store/apps/details?id=com.glabs.homegenie"> <strong style="text-decoration: underline;">HomeGenie for Android</strong> </a>
                                    <br>
                                    Play Store
                                    <br>
                                    Android 2.2 and up
                                </p>
                                <p style="float:left;text-wrap:no-wrap;margin-left:50px;">
                                    <img src="images/logos/wp_logo.png" alt="" style="margin-right:16px" align="left" width="96">
                                    <a title="HomeGenie client for Windows Phone" href="http://www.windowsphone.com/en-us/store/app/homegenie/b3bff0d6-f65a-4ce5-93f7-7be68d4849f3"> <strong style="text-decoration: underline;">HomeGenie for Windows Phone</strong> </a>
                                    <br>
                                    Windows Store
                                    <br>
                                    WP 7.5 and up
                                </p>

                                <br clear="all" />

                                <header>
                                    <h2>Install instructions</h2>
                                </header>
                                <h3><span style="font-weight: bold;">Windows</span></h3>
                                <p>
                                    Download Windows Setup file and run it. Once installed, you
                                    can access HomeGenie by right clicking on its tray icon..
                                </p>
                                <h3><span style="font-weight: bold;">Ubuntu, Raspbian and others Debian Linux</span></h3>
                                <p>
                                    Download Debian Package file and install it by double
                                    clicking on it, or by using <span style="font-weight: bold">gdebi</span>
                                    command line tool:
                                    <br>
                                    <span style="font-family: courier;color: blue"> &nbsp;&nbsp; sudo apt-get update
                                        <br>
                                        &nbsp;&nbsp; sudo apt-get install gdebi-core
                                        <br>
                                        &nbsp;&nbsp; sudo gdebi homegenie-beta_1.00.r482_all.deb</span>
                                    <br>
                                    HomeGenie will be installed in the &nbsp; <span style="font-style:italic">/usr/local/bin/homegenie</span> &nbsp; foder.
                                    <br/>
                                    Once installed, you can access HomeGenie opening the following
                                    URL in your web browser:
                                    <br>
                                    <span style="font-family: courier;">&nbsp;&nbsp;
                                        http://&lt;linux_box_address&gt;/</span>&nbsp;&nbsp;&nbsp;
                                    (where &lt;linux_box_address&gt; is the name or ip of the host
                                    where homegenie is installed)
                                    <br>
                                    <span style="font-weight:bold">Note:</span> HomeGenie requires mono runtime version 3.2 or later.
                                </p>
                                <h3><span style="font-weight: bold;">Mac OS X and other UNIX systems</span></h3>
                                <p>
                                    Read the <a href="#manualinstall">Manual Installation</a> procedure. 
                                </p>

                                <br>
                                <?php
                                include $_SERVER['DOCUMENT_ROOT'] . '/donate_link.php';
                                ?>
                                <br />
                                
                                <header>
                                    <h2>Optional configurations</h2>
                                </header>

                                <h3><span style="font-weight: bold;">Enabling LIRC infrared remote control</span></h3>

                                <p>
                                    To enable InfraRed remote control edit the <span style="font-weight:bold">/etc/lirc/hardware.conf</span> file:
                                    <br />
                                    <span style="font-family: courier;color:blue;"> &nbsp;&nbsp; sudo nano /etc/lirc/hardware.conf </span>
                                    <br />
                                    Paste the following text into it:
                                    <pre style="font-family: courier;line-height:11pt;font-size:10pt;margin-left:20px;margin-bottom:30px; padding:10px;background-color:#eaeaea;width:600px">########################################################
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

                                    Change <span style="font-weight:bold">MODULES="mceusb"</span> line with your IR transceiver module name.
                                    <br /><br />
                                    <h3>Raspberry Pi GPIO IR</h3>
                                    If you are using <u>Raspberry Pi GPIO IR hardware</u>, change the above mentioned line to <span style="font-weight:bold">MODULES="lirc_rpi"</span>.
                                    For more information about IR GPIO module for Raspberry Pi see: <a href="http://aron.ws/projects/lirc_rpi/" target="_blank">Raspberry Pi lirc_rpi</a>.
                                    <br /><br />
                                    <h3>CubieBoard and Banana Pi built-in IR receiver</h3>
                                    If you want to use built-in <u>Banana Pi</u> / <u>CubieBoard</u> IR receiver, follow these <a href="http://linux-sunxi.org/LIRC#Using_LIRC_with_Cubieboard2_.28A20_SoC.29" target="_blank">instructions</a> instead.
                                    <br />
                                    <br />
                                    <u>Restart LIRC</u>
                                    <br />
                                    <span style="font-family: courier;color:blue"> &nbsp;&nbsp; sudo /etc/init.d/lirc restart </span>
                                    <br />
                                    Happy remote controlling! =)

                                </p>
                                
                                <h3><span style="font-weight: bold;">Enabling GPIO programming on CubieBoard</span></h3>
                                To enable GPIO programming with HomeGenie on CubieBoard, the <span style="font-weight: bold">[gpio_para]</span> section of the <span style="font-weight: bold">script.fex</span> file
                                must be configured as shown below:
                                <br><br>
                                <pre style="font-family: courier;line-height:11pt;font-size:10pt;margin-left:20px;margin-bottom:30px; padding:10px;background-color:#eaeaea;width:600px">[gpio_para]
gpio_used = 1
gpio_num = 32
gpio_pin_1 = port:PH20<1><default><default><1>
gpio_pin_2 = port:PH10<0><default><default><0>
gpio_pin_3 = port:PC19<0><default><default><0>
gpio_pin_4 = port:PC21<0><default><default><0>
gpio_pin_5 = port:PC20<0><default><default><0>
gpio_pin_6 = port:PC22<0><default><default><0>
gpio_pin_7 = port:PB14<0><default><default><0>
gpio_pin_8 = port:PB16<0><default><default><0>
gpio_pin_9 = port:PB15<0><default><default><0>
gpio_pin_10 = port:PB17<0><default><default><0>
gpio_pin_11 = port:PI20<0><default><default><0>
gpio_pin_12 = port:PI14<0><default><default><0>
gpio_pin_13 = port:PI21<0><default><default><0>
gpio_pin_14 = port:PI15<0><default><default><0>
gpio_pin_15 = port:PI3<0><default><default><0>
gpio_pin_16 = port:PB3<0><default><default><0>
gpio_pin_17 = port:PB2<0><default><default><0>
gpio_pin_18 = port:PB4<0><default><default><0>
gpio_pin_19 = port:PB18<0><default><default><0>
gpio_pin_20 = port:PB19<0><default><default><0>
gpio_pin_21 = port:PG0<0><default><default><0>
gpio_pin_22 = port:PG3<0><default><default><0>
gpio_pin_23 = port:PG2<0><default><default><0>
gpio_pin_24 = port:PG1<0><default><default><0>
gpio_pin_25 = port:PG4<0><default><default><0>
gpio_pin_26 = port:PG5<0><default><default><0>
gpio_pin_27 = port:PG6<0><default><default><0>
gpio_pin_28 = port:PG7<0><default><default><0>
gpio_pin_29 = port:PG8<0><default><default><0>
gpio_pin_30 = port:PG9<0><default><default><0>
gpio_pin_31 = port:PG10<0><default><default><0>
gpio_pin_32 = port:PG11<0><default><default><0></pre>
    
                                For further instructions about how to change the system configuration on CubieBoar, see the following <a target="_blank" href="http://docs.cubieboard.org/tutorials/common/edit_the_system_configuration">tutorial</a>.
    
                                <br><br>
                                <a name="manualinstall">&nbsp;</a>
                                <header>
                                    <h2>Manual installation procedure for Mac OS X and other UNIX systems</h2>
                                </header>
                                <p>
                                    HomeGenie could also be installed on other systems (eg. Mac OS X and other UNIX based systems) by following the procedure
                                    described below.
                                </p>
                                <h4><span style="font-weight: bold;">Installing prerequisites</span></h4>
                                <p style="margin-bottom: 5px">
                                    Enter the following command from terminal ('apt-get' is shown here, eventually replace it with whatever package manager is suitable for your operating system):
                                </p>
                                <ul style="margin: 0 0 1.2em 10px; padding: 0px 0px 0px 20px; list-style-type: none; border-left-width: 5px; border-left-style: solid; border-left-color: gray;  ">
                                    <li>

                                        <b style="font-weight: bold;">sudo apt-get install</b> 
                                        libusb-1.0-0, libusb-1.0-0-dev, alsa-utils, mono-runtime, libmono-corlib2.0-cil, libmono-system-web4.0-cil, 
                                        libmono-system-numerics4.0-cil, libmono-system-serviceprocess4.0-cil, libmono-system-data4.0-cil, libmono-system-core4.0-cil, 
                                        libmono-windowsbase4.0-cil, libmono-system-runtime-serialization-formatters-soap4.0-cil, libmono-system-runtime-serialization4.0-cil, 
                                        libmono-system-xml-linq4.0-cil, mono-dmcs, lame, lirc, libv4l-0, arduino-mk, empty-expect
                                    </li>
                                </ul>
                                <h4><span style="font-weight: bold;">Uncompressing tgz archive
                                    file</span></h4>
                                <p style="margin-bottom: 5px">
                                    Enter the following command terminal
                                </p>
                                <ul style="margin: 0 0 1.2em 10px; padding: 0px 0px 0px 20px; list-style-type: none; border-left-width: 5px; border-left-style: solid; border-left-color: gray; ">
                                    <li>
                                        <b style="font-weight: bold;">tar xzvf&nbsp;</b><span class="Apple-converted-space"></span>HomeGenie_1_00_beta_r482.tgz
                                    </li>
                                </ul>
                                <h4><span style="font-weight: bold;">Running HomeGenie</span></h4>
                                <p style="margin-bottom: 5px">
                                    After unzipping, the <u>homegenie</u> folder will be created. Enter the following commands from terminal to run HomeGenie:
                                </p>
                                <ul style="margin: 0 0 1.2em 10px; padding: 0px 0px 0px 20px; list-style-type: none; border-left-width: 5px; border-left-style: solid; border-left-color: gray; ">
                                    <li>
                                        <b style="font-weight: bold;">cd</b> homegenie
                                    </li>
                                    <li>
                                         ./startup.sh
                                    </li>
                                </ul>
                                <p style="margin-bottom: 5px">Open the following URL in your browser to access HomeGenie:</p>
                                <ul style="margin: 0 0 1.2em 10px; padding: 0px 0px 0px 20px; list-style-type: none; border-left-width: 5px; border-left-style: solid; border-left-color: gray; ">
                                    <li>
                                        <b style="font-weight: bold;">http://localhost:80/</b>
                                    </li>
                                </ul>
                                <h4><span style="font-weight: bold;">Running HomeGenie as a Background Service</span></h4>
                                <p style="margin: 1em 0px;">
                                    Download <a target="_blank" href="https://raw.githubusercontent.com/genielabs/HomeGenie/master/HomeGenie_Linux/Packager/DEBIAN/homegenie">homegenie</a> and <a target="_blank" href="https://raw.githubusercontent.com/genielabs/HomeGenie/master/HomeGenie_Linux/Packager/DEBIAN/startup.sh">startup.sh</a> files from github repository.
                                </p>
                                <ol style="margin: 1em 0px; padding: 0px 0px 0px 40px;  list-style-type:decimal;">
                                    <li>
                                        Copy <i>homegenie</i> file to <u>/etc/init.d</u> folder:
                                        <pre style="color:blue;font-family: courier;">sudo cp homegenie /etc/init.d/</pre>
                                    </li>
                                    <li>
                                        Copy the <u>startup.sh</u> file to HomeGenie folder (overwrite old file)
                                    </li>
                                    <li>
                                        Change path to HomeGenie folder at line #22 of <u>/etc/init.d/homegenie</u>:
                                        <pre style="color:blue;font-family: courier;">INSTALL_PATH="/usr/local/bin"  # &lt;------ CHANGE INSTALL PATH HERE</pre>
                                    </li>
                                    <li>
                                        Set execution flag for both scripts:
                                        <pre style="color:blue;font-family: courier;">sudo chmod +x /etc/init.d/homegenie sudo chmod +x startup.sh</pre>
                                    </li>
                                </ol>
                                <p style="margin: 1em 0px; ">
                                    To
                                    start/stop/restart HomeGenie:
                                </p>
                                <pre style="color:blue;margin: 1em 0px;font-family: courier;">&nbsp;&nbsp; sudo /etc/init.d/homegenie start|stop|restart</pre>
                                <span>To start HomeGenie automatically after system boot:</span>
                                <pre style="color:blue;margin: 1em 0px;font-family: courier;">&nbsp;&nbsp; sudo update-rc.d -f homegenie defaults</pre>
                                <span>To stop HomeGenie from starting automatically:</span>
                                <pre style="color:blue;margin: 1em 0px;font-family: courier;">&nbsp;&nbsp; sudo update-rc.d -f homegenie remove</pre>
                                <span>To query HomeGenie status:</span>
                                <pre style="color:blue;margin: 1em 0px;font-family: courier;">&nbsp;&nbsp; /etc/init.d/homegenie status</pre>
                                <p></p>
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
                        <?php
                        include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer_links.php';
                        ?>
                    </div>
                    <div class="4u">
                        <?php
                        include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer_about_author.php';
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
