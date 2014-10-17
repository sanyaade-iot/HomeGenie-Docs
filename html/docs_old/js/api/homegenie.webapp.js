HG.WebApp = HG.WebApp || {};
//
HG.WebApp.Data = HG.WebApp.Data || {};
//
HG.WebApp.Data.Modules = Array(); 
HG.WebApp.Data.Groups = Array();  
HG.WebApp.Data.Programs = Array();
HG.WebApp.Data.ServiceKey = '5EBE2294ECD0E0F08EAB7690D2A6EE69';
HG.WebApp.Data.ServiceDomain = "HomeAutomation.HomeGenie";
//
HG.WebApp.Data.ZWaveMainGroup = "1";
HG.WebApp.Data.ZWaveControllerId = "1";
HG.WebApp.Data.CurrentKw = -1;
//
HG.WebApp.Data._CurrentGroup = null;
HG.WebApp.Data._CurrentModule = null;
HG.WebApp.Data._IgnoreUIEvents = false;
//
HG.WebApp.Data._CurrentLocale = {};
//
var now = new Date();
HG.WebApp.Data.LoggingFrom = new Date(Date.UTC(now.getUTCFullYear(), now.getUTCMonth(), now.getUTCDate(),  now.getUTCHours(), now.getUTCMinutes(), now.getUTCSeconds(), now.getUTCMilliseconds()));
//
//
//
HG.WebApp.InitializePage = function ()
{
    //
    // application start - init stuff
    //
	HG.WebApp.Control.Refresh();
    window.setInterval('HG.WebApp.Home.UpdateHeaderStatus();', 10000);
    window.setInterval('HG.WebApp.Home.LoggingPoll();', 5000);
    //
	//
	// page open - init stuff
	//
    $('[data-role=page]').live('pageshow', function (event) 
    {
        if (this.id == "page_control" && HG.WebApp.Control._RefreshIntervalObject == null) 
        {
            // init "Control" page
	        HG.Automation.Programs.List(function () {
	            if ($('#control_groupslist').children().length == 0) 
	            {
	                HG.WebApp.Control.LoadGroups();
	            }
	            HG.WebApp.Control.Refresh();
	            HG.WebApp.Control.SetAutoRefresh( true );
	        });
        }
        else if (this.id == "page_analyze") 
        {
            HG.WebApp.Statistics.Refresh();
            HG.WebApp.Statistics.SetAutoRefresh( true );
        }
        else if (this.id == 'page_configure_interfaces') 
        {
        	HG.WebApp.SystemSettings.LoadSettings();
        }
        else if (this.id == 'page_configure_groups') 
        {
    	    HG.Configure.Modules.List(function (data) {
	            try
	            {
	        	    HG.WebApp.Data.Modules = eval(data);
	            } catch (e) { }
    	        HG.Automation.Programs.List(function () {
    	            HG.WebApp.GroupsList.LoadGroups();
                });
            });
        }
        else if (this.id == 'page_configure_groupmodules') 
        {
            HG.WebApp.GroupModules.LoadGroupModules();
        }
        else if (this.id == 'page_automation_programs') 
        {
	        HG.WebApp.ProgramsList.LoadPrograms();
        }
        else if (this.id == 'page_automation_editprogram') 
        {	            
			automationpage_ConditionsRefresh();                                                    
			automationpage_CommandsRefresh();                                                   
        }
        //
		$(window).bind('scroll resize', function() {
		    $('#statuspopup').css('top', $(this).scrollTop() + 40);
		})
    });
	//
	// page close - cleanup stuff
	//
    $('[data-role=page]').live('pagehide', function (event) {
        if ((this.id == 'page_control' || this.id == 'page_configure_groups')) 
        {
            HG.WebApp.Control.SetAutoRefresh( false );
        }
        else if (this.id == "page_analyze") 
        {
            HG.WebApp.Statistics.SetAutoRefresh( false );
        }
    });
};


//
// namespace : HG.WebApp.Control 
// info      : -
//
{include pages/control/_control.js}		
//
// namespace : HG.WebApp.GroupsList 
// info      : Configure/Groups ui logic (Groups List)
//
{include pages/configure/groups/_groupslist.js}		
//
// namespace : HG.WebApp.GroupModules 
// info      : Configure/Groups ui logic (Group Modules)
//
{include pages/configure/groups/_groupmodules.js}	
//
// namespace : HG.WebApp.SecuritySettings 
// info      : -
//
{include pages/configure/security/_security.js}	
//
// namespace : HG.WebApp.SystemSettings 
// info      : -
//
{include pages/configure/interfaces/_systemsettings.js}	
//
// namespace : HG.WebApp.ProgramsList 
// info      : -
//
{include pages/configure/programengine/_programslist.js}	
//
// namespace : HG.WebApp.ProgramEdit 
// info      : -
//
{include pages/configure/programengine/_programedit.js}	
//
// namespace : HG.WebApp.Apps.NetPlay.SlideShow 
// info      : -
//
{include pages/apps/netplay/_slideshow.js}	
//
// namespace : HG.WebApp.Home namespace
// info      : -
//
HG.WebApp.Home = HG.WebApp.Home || {};
HG.WebApp.Home.UpdateHeaderStatus = function()
{
    HG.Statistics.Global.GetWattsCounter(function (data) {
        HG.WebApp.Home.FxAnimateNumber('[id=watts_hour]', parseFloat(data) / 1000);
    });
    HG.WebApp.Home.UpdateInterfacesStatus();
};
//
HG.WebApp.Home.LoggingPoll = function()
{
//TODO: put all the html code in js in separate html files!!
	var ts = -1;
	var now = new Date();
//    HG.WebApp.Data.LoggingFrom = new Date(Date.UTC(now.getUTCFullYear(), now.getUTCMonth(), now.getUTCDate(),  now.getUTCHours(), now.getUTCMinutes(), now.getUTCSeconds(), now.getUTCMilliseconds()));
    $.get('/' + HG.WebApp.Data.ServiceKey + '/' + HG.WebApp.Data.ServiceDomain + '/Logging/Recent.Last/5000/' + (new Date().getTime()), function (data) {
//    $.get('/' + HG.WebApp.Data.ServiceKey + '/' + HG.WebApp.Data.ServiceDomain + '/Logging/Recent.From/' + ts + '/' + (new Date().getTime()), function (data) {
        //
        var logs = eval(arguments[2].responseText);
        //
        if ( logs && logs != 'undefined')
        {
        	var popupopen = false;
	        for (i = 0; i < logs.length; i++) {
	            var s = '';
	            //
	            if (logs[i].UnixTimestamp > HG.WebApp.Data.LoggingFrom)
	            {
	            	if (ts == -1) ts = logs[i].UnixTimestamp;
		            switch (logs[i].Domain)
		            {
		            	case 'HomeAutomation.HomeGenie.Automation':
		            		var module = HG.WebApp.Utility.GetModuleByDomainAddress(logs[i].Domain, logs[i].Source);
		            		if (module != null && logs[i].Property != 'Meter.Watts')
		            		{
		            			// update current module prop
				            	HG.WebApp.Utility.SetModulePropertyByName(module, logs[i].Property, logs[i].Value);
				            	//
		            			var icon = '<img src="' + configurepage_GetModuleIcon(module) + '" width="48" height="48">';
				            	s += '<table><tr><td>';
				            	s += icon;
				            	s += '</td><td valign="top">';
				            	s += '' + logs[i].Property + '<br>' + logs[i].Value + '<br>';
		            			s += '</tr></table>';
		            		}
		            	break;
		            	default:
		            		var module = HG.WebApp.Utility.GetModuleByDomainAddress(logs[i].Domain, logs[i].Source);
		            		if (module != null && logs[i].Property != 'Meter.Watts')
		            		{
		            			// update current module prop
				            	HG.WebApp.Utility.SetModulePropertyByName(module, logs[i].Property, logs[i].Value);
				            	//
		            			var icon = '<img src="' + configurepage_GetModuleIcon(module) + '" width="48" height="48">';
			            		if (module.Address == 'RF' && logs[i].Value != '')
			            		{
			            			icon = '<img src="images/remote.png" width="48" height="48">';
					            	s += '<table><tr><td>';
					            	s += icon;
					            	s += '</td><td valign="top">';
					            	s += 'RF ' + logs[i].Property + '<br>' + logs[i].Value + '<br>';
			            			s += '</tr></table>';
			            		}
			            		else if (logs[i].Property.substring(0, 7) == 'Sensor.')
			            		{
					            	var group = HG.WebApp.GroupsList.GetModuleGroup(module);
					            	if (group != null) group = group.Name;
					            	var name = module.Domain.substring(module.Domain.indexOf('.') + 1) + ' ' + module.Address;
					            	var logdate = new Date(logs[i].UnixTimestamp);
					            	var date = HG.WebApp.Utility.FormatDateTime(logdate);
					            	var propname = logs[i].Property.substring(logs[i].Property.indexOf('.') + 1);
					            	//
					            	switch (propname)
					            	{
					            	case 'Temperature':
				            			icon = '<img src="images/temperature.png" width="48" height="48">';
				            			break;
					            	case 'Luminance':
				            			icon = '<img src="images/luminance.png" width="48" height="48">';
				            			break;
					            	case 'Humidity':
				            			icon = '<img src="images/sensor.png" width="48" height="48">';
				            			break;
					            	case 'MotionDetect':
				            			icon = '<img src="images/sensor.png" width="48" height="48">';
				            			break;
					            	}
					            	//
					            	if (module.Name != '') name = module.Name;
					            	if (group == null) group = '';
					            	//
					            	s += '<table width="100%"><tr><td width="48" rowspan="2">';
					            	s += icon;
					            	s += '</td><td valign="top" align="left">';
					            	s += '<span style="color:gray;font-size:8pt;">' + group + '</span><br><b>' + name + '</b><br>' + propname;
					            	s += '</td><td align="right" style="color:lime;font-size:12pt">' + parseFloat(logs[i].Value.replace(',', '.')).toFixed(2) + '</td></tr>';
			            			s += '<tr><td colspan="2" align="right"><span style="color:gray;font-size:8pt;">' + date + '</span>';
			            			s += '</td></tr></table>';
			            			
			            		}
					            else if (logs[i].Property == 'Status.Level')
					            {
					            	var group = HG.WebApp.GroupsList.GetModuleGroup(module);
					            	if (group != null) group = group.Name;
					            	var name = module.Domain.substring(module.Domain.indexOf('.') + 1) + ' ' + module.Address;
					            	var statuslevel = (parseFloat(logs[i].Value.replace(',', '.')) * 100) + '%';
					            	var logdate = new Date(logs[i].UnixTimestamp);
					            	var date = HG.WebApp.Utility.FormatDateTime(logdate);
					            	//
					            	if (module.Name != '') name = module.Name;
					            	if (group == null) group = '';
					            	//
					            	s += '<table width="100%"><tr><td width="48" rowspan="2">';
					            	s += icon;
					            	s += '</td><td valign="top" align="left">';
					            	s += '<span style="color:gray;font-size:8pt;">' + group + '</span><br><b>' + name + '</b>';
					            	s += '</td><td align="right" style="color:lime;font-size:12pt">' + statuslevel + '</td></tr>';
			            			s += '<tr><td colspan="2" align="right"><span style="color:gray;font-size:8pt;">' + date + '</span>';
			            			s += '</td></tr></table>';
					        	}
				        	}
				        	else
				        	{
				        		if (logs[i].Domain == 'Protocols.AirPlay' && logs[i].Property == 'PlayControl.DisplayImage')
				        		{
					            	var logdate = new Date(logs[i].UnixTimestamp);
					            	var date = HG.WebApp.Utility.FormatDateTime(logdate);
					            	
					            	s += '<table width="100%"><tr><td width="48" rowspan="2">';
					            	s += '<a _href="#dialog_netplay_show_popup" -data-rel="popup"><img src="images/playcontrol.png" width="48" height="48"></a>';
					            	s += '</td><td valign="top" align="left">';
					            	s += '<span style="color:gray;font-size:8pt;">AirPlay Service</span><br><b>Remote image display reuqest</b>';
					            	s += '</td><td align="right" style="color:lime;font-size:12pt">    </td></tr>';
			            			s += '<tr><td colspan="2" align="right"><span style="color:gray;font-size:8pt;">' + date + '</span>';
			            			s += '</td></tr></table>';

									var displayid = logs[i].Value;
									var cts = logs[i].UnixTimestamp;
									
									HG.WebApp.Apps.NetPlay.SlideShow.DisplayImage(displayid, cts);
    		
				        		}
				        	}
		            	break;
		            }
	            }
	            //
	            if (s != '')
	            {
			        var delay = logs[i].UnixTimestamp - ts;
			        HG.WebApp.Home.ShowEventPopup( s, delay + 500 );
	            	popupopen = true;
	            }
	            //
	            if (i == logs.length - 1) HG.WebApp.Data.LoggingFrom = logs[i].UnixTimestamp;
	        }
	        if (!popupopen) HG.WebApp.Home.ShowEventPopup( '' );
        }
        else
        {
	        HG.WebApp.Home.ShowEventPopup( '' );
        }
        
    });	
};
//
HG.WebApp.Home.ShowEventPopup = function(html, delay)
{
	var s = html;
	setTimeout(function(){
	    if ( s != '' )
	    {
	        $('#statuspopup').html( s );
		    $('#statuspopup').css('display', '');
		    //$('#statuspopup').animate({ opacity: '0.30'}, 250, function(){
	    	    $('#statuspopup').animate({right:'5px', opacity: '0.70'}, 500);
		    //});
	    }
	    else
	    {
	    	if ($('#statuspopup').css('display') != 'none')
	    	{
	    	    $('#statuspopup').animate({right:'-400px', opacity: '0.0'}, 500, function(){
		    	    $('#statuspopup').css('display', 'none');
	    	    });
	    	}
	    }
    }, delay);
}
//
HG.WebApp.Home.FxAnimateNumber = function(element, targetvalue) 
{
    if (HG.WebApp.Data.CurrentKw == -1)
    {
        HG.WebApp.Data.CurrentKw = targetvalue - 0.020;
    }
    if (HG.WebApp.Data.CurrentKw < targetvalue) {
        HG.WebApp.Data.CurrentKw += 0.001;
        var wh = parseFloat(HG.WebApp.Data.CurrentKw).toFixed(6);
        $('body').find(element).each(function(){ $(this).html('kW ' + (wh.substr(0, wh.length - 3))); }); /* + ' ' + wh.substr(wh.length - 3) */ 
        setTimeout('HG.WebApp.Home.FxAnimateNumber("' + element + '", ' + targetvalue + ')', 100);
    }
};
//
HG.WebApp.Home.UpdateInterfacesStatus = function() 
{
    var ifaceurl = '/' + HG.WebApp.Data.ServiceKey + '/' + HG.WebApp.Data.ServiceDomain + '/Config/Interfaces.List/' + (new Date().getTime());
	$.ajax({
		url: ifaceurl,
		dataType: 'json',
		success: function (data) {
            var interfaces = eval(data);
            var status = '';
            //
            if (interfaces && interfaces != 'undefined')
            {
	            for (i = 0; i < interfaces.length; i++) {
	                var domain = interfaces[i].Domain.split('.');
	                var name = domain[1].toUpperCase();
	                var connected = interfaces[i].IsConnected;
	                status += '<span style="color:' + (connected == 'True' ? 'lime' : 'gray') + ';margin-right:20px">' + name + '</span>';
	            }
            }
            //
            $('[id=interfaces_status]').each(function () { $(this).html('<div style="width:30px;height:2px;float:left;display:block"></div>' + status); } );
		}
	});		
};
//
// namespace : HG.WebApp.Statistics
// info      : -
//
HG.WebApp.Statistics = HG.WebApp.Statistics || {};
HG.WebApp.Statistics._RefreshIntervalObject = null;
HG.WebApp.Statistics._RefreshInterval = 10 * 60000; // stats refresh interval = 10 minutes
//
HG.WebApp.Statistics.SetAutoRefresh = function(autorefresh)
{
	if (HG.WebApp.Statistics._RefreshIntervalObject != null) clearInterval( HG.WebApp.Statistics._RefreshIntervalObject );
	HG.WebApp.Statistics._RefreshIntervalObject = null;
	if (autorefresh)
	{
		HG.WebApp.Statistics._RefreshIntervalObject = setInterval('HG.WebApp.Statistics.Refresh();', HG.WebApp.Statistics._RefreshInterval);
	}
};

HG.WebApp.Statistics.Refresh = function () {
    $.mobile.showPageLoadingMsg();
    //
    HG.Statistics.ServiceCall('Parameter.Stats', '0', 'Meter.Watts', function(stats){
            if (stats != null)
            {
                var sd = [ { label: "Watts", data: stats } ];
                //
                try
                {
                    $.plot($("#statslast"), sd, { 
                        yaxis: {},
                        xaxis: { mode: "time" },
                        series: {
                            lines: { show: true },
                            points: { show: false }
                        },
                        legend: { position: "nw" }
                    });
                } catch (e) { }
                //
                HG.Statistics.ServiceCall('Parameter.StatsHour', '0', 'Meter.Watts', function(stats){
                        if (stats != null)
                        {
                            try
                            {
                                $.plot($("#statshour"), [ { 
                                    label: "Watts", 
                                    data: stats 
                                } ], 
                                { 
                                    yaxis: {},
                                    xaxis: { mode: "time" },
                                    legend: { position: "nw" },
                                    //lines: {show: false, steps: true },
                                    bars: { show: true, barWidth: (30 * 60 * 1000), align: 'center', steps: true }//,	
                                    //points: { show: false }
                                });
                            } catch (e) { }
                            //
                            $.mobile.hidePageLoadingMsg();
                        }
                });
            }
    });
};
//
// namespace : HG.WebApp.Utility namespace
// info      : global utility functions
//
HG.WebApp.Utility = HG.WebApp.Utility || {};
HG.WebApp.Utility.GetModuleByDomainAddress = function (domain, address) 
{
    var module = null;
    for (var m = 0; m < HG.WebApp.Data.Modules.length; m++) {
        if (HG.WebApp.Data.Modules[m].Domain == domain && HG.WebApp.Data.Modules[m].Address == address) {
            module = HG.WebApp.Data.Modules[m];
            break;
        }
    }
    return module;
};
HG.WebApp.Utility.GetModuleIndexByDomainAddress = function (domain, address) 
{
    var moduleidx = -1;
    for (var m = 0; m < HG.WebApp.Data.Modules.length; m++) {
        if (HG.WebApp.Data.Modules[m].Domain == domain && HG.WebApp.Data.Modules[m].Address == address) {
            moduleidx = m;
            break;
        }
    }
    return moduleidx;
};
HG.WebApp.Utility.GetModulePropertyByName = function (module, prop) {
    var value = null;
    if (module.Properties != null) {
        for (var p = 0; p < module.Properties.length; p++) {
            if (module.Properties[p].Name == prop) {
                value = module.Properties[p];
                break;
            }
        }
    }
    return value;
}
HG.WebApp.Utility.SetModulePropertyByName = function (module, prop, value) {
	var found = false;
    if (module.Properties != null) {
        for (var p = 0; p < module.Properties.length; p++) {
            if (module.Properties[p].Name == prop) {
                module.Properties[p].Value = value;
                found = true;
                break;
            }
        }
    }
    if (!found)
    {
    	module.Properties.push({ 'Name' : prop, 'Value' : value });
    }
}
	
HG.WebApp.Utility.GetProgramByName = function (pname)
	{
		var cp = null;
		for (i = 0; i < HG.WebApp.Data.Programs.length; i++) {
			if (HG.WebApp.Data.Programs[i].Name == pname)
			{
				cp = HG.WebApp.Data.Programs[i];
				break;
			}
		}
		return cp;
	};	
	
HG.WebApp.Utility.FormatDateTime = function (date)
{
	var dt = $.datepicker.formatDate('DD dd/mm/yy', date) + ' ';
	var hh = date.getHours().toString(); if (hh.length == 1) hh = '0' + hh;
	var mm = date.getMinutes().toString(); if (mm.length == 1) mm = '0' + mm;
	var ss = date.getSeconds().toString(); if (ss.length == 1) ss = '0' + ss;
	dt = hh + ':' + mm + ':' + ss; // + '.' + date.getMilliseconds();
	return dt; 
};
	
HG.WebApp.Utility.JScrollToElement = function (element, delay) {
	    $('html, body').animate({
	        scrollTop: $(element).offset().top
	    }, delay);
	};
//
// namespace : HG.WebApp.Utility namespace
// info      : global utility functions
//
HG.WebApp.Locales = HG.WebApp.Locales || {};
HG.WebApp.Locales.Localize = function(langurl)
	{
		// get data via ajax 
		// store it in 		HG.WebApp.Data._CurrentLocale
		// and replace locales strings in the current page
		$.ajax({
		        url: langurl,
		        //dataType: 'json',
		        success: function (data) {
		            HG.WebApp.Data._CurrentLocale = $.parseJSON( data );
					//
					$(document).find('[data-locale-id]').each(function(index){
			    		var stringid = $(this).attr('data-locale-id');
			    		var text = HG.WebApp.Locales.GetLocaleString(stringid);
			    		if (text != null && text.trim() != '') $(this).html(text);
					});
		        }
		    });		
	};
HG.WebApp.Locales.GetLocaleString = function(stringid)
	{
		var retval = null;
    	$.each(HG.WebApp.Data._CurrentLocale, function(key, value) {
    		if (key == stringid)
    		{
    			retval = value;
    			return false; // break each
    		}
		});
		return retval;
	}
HG.WebApp.Locales.GenerateTemplate = function()
	{
		//
		var localestring = '';
		$(document).find('[data-locale-id]').each(function(index){
    		var stringid = $(this).attr('data-locale-id');
    		var value = $(this).html().trim();
    		if (localestring.indexOf('"' + stringid + '\"') < 0)
    		{
    			localestring += '\t\"' + stringid + '\": \n\t\t \"' + value + '\",\n';
			}
		});
		alert( localestring );
		//
	};
	