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
                                    <h2>About Widgets</h2>
                                </header>
                                <p>
                                    Widgets are small footprint applications that are displayed in the HomeGenie UI control panel.
                                    In most cases they are used to provide graphical control elements for device modules (eg. on/off button for a light),
                                    but can also be used to implement more complex functionalities (eg. the Weather widget, Energy Monitor or the TimeTable one).
                                </p>
                                <div align="center">
                                    <a title="Control page" href="images/hg_securityalarm_01.jpg" rel="gallery" class="pirobox_gall"><img alt="Control page" src="images/hg_securityalarm_01.jpg" width="50%"></a>
                                </div>
                                <br />
                                <p>
                                    A widget is made of two small files. One is the graphical part, that is implemented using HTML and the other one is the 
                                    interface logic that is implemented using Javascript.
                                    <br />
                                    HomeGenie integrates a friendly <span style="font-style: italic">Widgets Editor</span> that is accessible from the 
                                    <span style="font-style: italic">Actions</span> menu of the <span style="font-weight: bold">Configure->Automation</span> section,
                                    where we can edit existing widgets, create new ones or export/import them. 
                                </p>
                                <div align="center">
                                    <a title="Automation, Widgets Editor access option" href="images/docs/widgets_00.jpg" rel="gallery" class="pirobox_gall"><img alt="Automation, Widgets Editor access option" src="images/docs/widgets_00.jpg" width="40%"></a>
                                    <a title="Widgets Editor - Widget List" href="images/docs/widgets_02.jpg" rel="gallery" class="pirobox_gall"><img alt="Widgets Editor - Widget List" src="images/docs/widgets_02.jpg" width="40%"></a>
                                </div>
                                <br />
                                <h3>Widgets Editor</h3>
                                <p>
                                    The widgets editor consists of three parts: the HTML code editor, the Javascript code editor and a preview panel.<br />
                                    The Javascript code editor will also report any syntax and runtime error.
                                    When creating a new widget, an example minimal code both for HTML and Javascript will be automatically generated to help
                                    the user getting started with developing new widgets.
                                </p>
                                <div align="center">
                                    <a title="HTML editor" href="images/docs/widgets_04.jpg" rel="gallery" class="pirobox_gall"><img alt="HTML editor" src="images/docs/widgets_04.jpg" width="40%"></a>
                                    <a title="Javascript editor with error reporting" href="images/docs/widgets_06.jpg" rel="gallery" class="pirobox_gall"><img alt="Javascript editor with error reporting" src="images/docs/widgets_06.jpg" width="40%"></a>
                                </div>
                                <br />                                
                                <p>
                                    In order to be a valid HomeGenie widget, the Javascript code must implement an object, using <a href="http://www.w3.org/wiki/Objects_in_JavaScript#The_object_literal" target="_blank">literal notation</a>,
                                    with at least one method: <span style="font-weight: bold">RenderView</span><span style="font-style: italic">(cuid, module) {...}</span>.
                                    This method will be automatically invoked by HomeGenie, whenever widget data need to be updated. 
                                    <pre class="csharp">[{
    Name: "Basic Widget Object",
    RenderView: function(cuid, module) {
        // "cuid" is the id attribute of the HTML wrapper element for this
        // widget instance
        var container = $(cuid);
        // "module" is the module object associated to this widget instance
        // (see "Data Binding" paragraph below)  
        // ...
    }
}]</pre>
                                </p>
                                <h3>Data Binding</h3>
                                <p>
                                    In most cases, a widget instance is linked to a module, so that the widget will control and display data coming from that specific module.
                                    As seen in the example code above, the module linked to a specific widget instance, will be passed as an argument of the <span style="font-style: italic">RenderView</span> method.
                                    So if we have 3 color light modules, these all will be using the same "light" widget but with a different data module passed to the <span style="font-style: italic">RenderView</span> method.
                                    <br />
                                    So the Javascript code in the <span style="font-style: italic">RenderView</span> method can read properties of the object module and update user interface fields accordingly.
                                    <br />  
                                    This design pattern is called <a href="http://en.wikipedia.org/wiki/UI_data_binding" target="_blank">Data Binding</a>.
                                    <br />
                                    The default association between modules and widgets is based on the module type. So a switch module will be bound to the switch widget, while a dimmer light module
                                    will be bound to a dimmer widget, and so on.
                                    To change the widget that will be used for displaying a module in the control page, we can either change the type of the module or programmatically set the wanted widget
                                    with the <a href="doxy/a00007.html#a8db23c8895fe3b22b9b3dd2697486c8c" target="_blank">Program Helper</a> class.
                                    <br />
                                    Also see <a href="automation_advanced.php">Advanced Topics</a> for more insights about this.
                                    <br />
                                    <span style="font-weight: bold">Remarks:</span> in the HTML code, avoid using the <span style="font-weight: bold">id</span> attribute to reference an UI element, 
                                    use the custom <span style="font-weight: bold">data-ui-field</span> attribute instead. 
                                </p>
                                <h3>Frameworks</h3>
                                <p style="margin-bottom: 0">
                                    The following frameworks can be used in a widget:
                                </p>
                                <ul style="list-style:circle;margin:0;padding:0;margin-left: 40px;">
                                    <li><a href="http://api.jquery.com/" target="_blank">jQuery</a></li>
                                    <li><a href="http://api.jqueryui.com/" target="_blank">jQuery UI</a></li>
                                    <li><a href="http://api.jquerymobile.com/" target="_blank">jQuery Mobile</a></li>
                                    <li><a href="http://dev.jtsage.com/jQM-DateBox/" target="_blank">jQuery Mobile DateBox</a></li>
                                    <li><a href="http://anthonyterrien.com/knob/" target="_blank">jQuery Knob</a></li>
                                    <li><a href="http://jweir.github.io/colorwheel/" target="_blank">jQuery Color Wheel</a></li>
                                    <li><a href="http://qtip2.com/" target="_blank">jQuery qTip2</a></li>
                                    <li><a href="http://www.flotcharts.org/" target="_blank">jQuery Flot</a></li>
                                    <li><a href="http://raphaeljs.com/" target="_blank">Raphael Js</a></li>
                                </ul>
                                <p>
                                    &nbsp;
                                </p>

                                <div class="row">
                                    <div class="4u" align="left">
                                        <a href="automation_advanced.php">&lt;&lt; Advanced topics</a>
                                    </div>
                                    <div class="4u" align="center">
                                        <a href="#">TOP</a>
                                    </div>
                                    <div class="4u" align="right">
                                        <a href="/docs/doxy/annotated.html" target="_blank">Helper Class Reference &gt;&gt;</a>
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
