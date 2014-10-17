<script type="text/javascript">

/*
// HomeGenie AJAX/WebService API
// Copyright: (c) 2010-2012 GenieLabs
// Author   : Generoso Martello
// E-Mail   : generoso@martello.com
*/ 


var HG = HG || {};
//
// namespace : HG.Automation
// info      : -
//
{include js/api/homegenie.automation.js}
//
// namespace : HG.Configure
// info      : -
//
{include js/api/homegenie.configure.js}
//
// namespace : HG.Control
// info      : -
//
{include js/api/homegenie.control.js}
//
// namespace : HG.System
// info      : -
//
{include js/api/homegenie.system.js}
//
// namespace : HG.Statistics
// info      : -
//
{include js/api/homegenie.statistics.js}
//
// namespace : HG.WebApp
// info      : -
//
{include js/api/homegenie.webapp.js}		
//
//
</script>













<script type="text/javascript">

    function zwave_AssociationGet(nodeid, groupid) {
        $.get('/' + HG.WebApp.Data.ServiceKey + '/HomeAutomation.ZWave/' + nodeid + '/Association.Get/' + groupid + '/' + (new Date().getTime()), function (data) {  });
    }
    function zwave_AssociationSet(nodeid, groupid, targetid) {
        $.get('/' + HG.WebApp.Data.ServiceKey + '/HomeAutomation.ZWave/' + nodeid + '/Association.Set/' + groupid + '/' + targetid + '/' + (new Date().getTime()), function (data) { });
    }
    function zwave_AssociationRemove(nodeid, groupid, targetid) {
        $.get('/' + HG.WebApp.Data.ServiceKey + '/HomeAutomation.ZWave/' + nodeid + '/Association.Remove/' + groupid + '/' + targetid + '/' + (new Date().getTime()), function (data) { });
    }

    function zwave_BasicGet(nodeid) {
        $.get('/' + HG.WebApp.Data.ServiceKey + '/HomeAutomation.ZWave/' + nodeid + '/Basic.Get/' + (new Date().getTime()), function (data) { });
    }
    function zwave_BasicSet(nodeid, value) {
        $.get('/' + HG.WebApp.Data.ServiceKey + '/HomeAutomation.ZWave/' + nodeid + '/Basic.Set/' + value + '/' + (new Date().getTime()), function (data) { });
    }

        
    
    function zwave_WakeUpGet(nodeid) {
        $.get('/' + HG.WebApp.Data.ServiceKey + '/HomeAutomation.ZWave/' + nodeid + '/WakeUp.Get/' + (new Date().getTime()), function (data) { });
    }
    function zwave_WakeUpSet(nodeid, opt1, opt2) {
        $.get('/' + HG.WebApp.Data.ServiceKey + '/HomeAutomation.ZWave/' + nodeid + '/WakeUp.Set/' + opt1 + '/' + opt2 + '/' + (new Date().getTime()), function (data) { });
    }

    
        
    
    function zwave_ConfigurationParameterGet(nodeid, varid) {
        $.get('/' + HG.WebApp.Data.ServiceKey + '/HomeAutomation.ZWave/' + nodeid + '/Config.ParameterGet/' + varid + '/' + (new Date().getTime()), function (data) { });
    }
    function zwave_ConfigurationParameterSet(nodeid, varid, value) {
        $.get('/' + HG.WebApp.Data.ServiceKey + '/HomeAutomation.ZWave/' + nodeid + '/Config.ParameterSet/' + varid + '/' + value + '/' + (new Date().getTime()), function (data) { });
    }
                


    function zwave_AutoReportSet(nodeid, intervalsec) {
        $.get('/' + HG.WebApp.Data.ServiceKey + '/HomeAutomation.ZWave/0/Controller.AutoReportSet/' + nodeid + '/' + intervalsec + '/' + (new Date().getTime()), function (data) { });
    }
    
    function zwave_NodesDiscovery(nodeid, intervalsec) {
        $.get('/' + HG.WebApp.Data.ServiceKey + '/HomeAutomation.ZWave/0/Controller.Discovery/' + (new Date().getTime()), function (data) { });
    }
    
    function zwave_NodeAdd(callback) {
        $.get('/' + HG.WebApp.Data.ServiceKey + '/HomeAutomation.ZWave/0/Controller.NodeAdd/' + (new Date().getTime()), function (data) { callback(data); });
    }
    
    function zwave_NodeRemove(callback) {
        $.get('/' + HG.WebApp.Data.ServiceKey + '/HomeAutomation.ZWave/0/Controller.NodeRemove/' + (new Date().getTime()), function (data) { callback(data); });
    }

    function zwave_ManufacturerSpecificGet(nodeid) {
        $.get('/' + HG.WebApp.Data.ServiceKey + '/HomeAutomation.ZWave/' + nodeid + '/ManufacturerSpecific.Get/' + (new Date().getTime()), function (data) { });
    }
    
    function _zwavedelayupdate(nodeid)
    {
    	HG.WebApp.GroupModules.ShowModuleOptions("HomeAutomation.ZWave", nodeid);
    	window.setTimeout(function(){
			HG.Configure.Modules.List(function(data){
				HG.WebApp.Data.Modules = eval(data); 	   	
		    	HG.WebApp.GroupModules.ShowModuleOptions("HomeAutomation.ZWave", nodeid);
	    	});
    	}, 3000);
    }
    
</script>













<script type="text/javascript">
// TODO: deprecate all js code below, or move it to appropriate place in hg api



//////////////////////////////////////////////////////

    
	function configurepage_GetModuleIcon(module) {
		var icon = 'images/unknown.png';
		//
		if (module != null && module.Domain == 'HomeAutomation.HomeGenie.Automation')
		{
			return 'images/program.png';
		}
		else if (module == null || HG.WebApp.Utility.GetModuleByDomainAddress(module.Domain, module.Address) == null)
		{
			return icon; //TODO: it should be a special icon indicating that this module does not exists (== null) 
		}
		//
		if (!module.DeviceType || module.DeviceType == null)
		{
			module.DeviceType = HG.WebApp.Utility.GetModuleByDomainAddress(module.Domain, module.Address).DeviceType;
		}
		//
		var type = (module.DeviceType + '').toLowerCase();
		var level = 0;
		//
		switch (type)
		{
			case "light":
			case "dimmer":
				var levelprop = HG.WebApp.Utility.GetModulePropertyByName(HG.WebApp.Utility.GetModuleByDomainAddress(module.Domain, module.Address), "Status.Level");
				if (levelprop != null) level = levelprop.Value.replace(',', '.') * 100;
				if (level > 0)
				{
					icon = 'images/light_on.png';
				}
				else
				{
					icon = 'images/light_off.png';
				}
				break;
			case "switch":
				var levelprop = HG.WebApp.Utility.GetModulePropertyByName(HG.WebApp.Utility.GetModuleByDomainAddress(module.Domain, module.Address), "Status.Level");
				if (levelprop != null) level = levelprop.Value.replace(',', '.') * 100;
				if (level > 0)
				{
					icon = 'images/socket_on.png';
				}
				else
				{
					icon = 'images/socket_off.png';
				}
				break;
			case "sensor":
				icon = 'images/sensor.png';
				break;
			case "temperature":
				icon = 'images/temperature.png';
				break;
			case "siren":
				icon = 'images/siren.png';
				break;
			case "fan":
				icon = 'images/fan.png';
				break;
			case "shutter":
				icon = 'images/shutters.png';
				break;
			default:
				break;
		}
		return icon;
	}


	function configurepage_GetModuleStatus(module) {
		var type = (module.Type + '').toLowerCase();
		var text = '';
		//
        var watts = null;
        var level = null;
        var temp = null;
        var customdata = '';
        //
        var type = module.DeviceType + '';
        type = type.toLowerCase();
        //
        if (module.Properties != null) {

            for (p = 0; p < module.Properties.length; p++) {
                if (module.Properties[p].Name == "Meter.Watts") {
                    watts = Math.round(module.Properties[p].Value.replace(',', '.')) / 1000;
                }
                else if (module.Properties[p].Name == "Status.Level") {
                    level = (module.Properties[p].Value.replace(',', '.')) * 100;
                }
                else if (module.Properties[p].Name == "Sensor.Temperature") {
                    temp = Math.round(module.Properties[p].Value.replace(',', '.') * 100) / 100;
                }
                else if (module.Properties[p].Name.indexOf('Sensor.') == 0 && module.Properties[p].Name != 'Sensor.MotionDetect') {
                    customdata += '<b>' + module.Properties[p].Name.replace('Sensor.', '') + '</b> &nbsp; <font style="color:gray;">' + Math.round(module.Properties[p].Value.replace(',', '.') * 100) / 100 + '</font> &nbsp;&nbsp;&nbsp;&nbsp; ';
                }
            }

        }
        //
        if (watts != null && (type == 'light' || type == 'dimmer' || type == 'switch'))
        {
			text += '<span class="ui-li-count"><strong>kW</strong> ' + (watts.toFixed(3)) + '</span>';
        }
        if (level != null && (type == 'light' || type == 'dimmer' || type == 'switch'))
        {
        	if (level == 100 || level == 0)
        	{
				text += '<span><strong>' + (level == 100 ? 'ON' : 'OFF') + '</strong></span>';
        	}
        	else
        	{
				text += '<span><strong>' + level.toFixed(0) + '%</strong></span>';
        	}
        }
        else if (level != null && type == 'shutter')
        {
			text += '<span><strong>' + (level > 0 ? 'OPENED' : 'CLOSED') + '</strong></span>';
        }
        if (temp != null)
        {
			text += '<span class="ui-li-count"><strong>&#8451;</strong> ' + temp.toFixed(1) + '</span>';
        }
        if (customdata != '')
        {
			text += '<span> ' + customdata + '</span>';
        }
        //
        if (text != '')
        {
        	text = '<div style="margin-top:3px;font-size:9pt;color:darkblue;">' + text + '</div>';
        }
        //
		return text;
	}


</script>	







