//
// namespace : HG.Automation.Groups namespace
// info      : -
//
HG.Automation = HG.Automation || {};
//
HG.Automation.Groups = HG.Automation.Groups || {};	
HG.Automation.Groups.LightsOff = function (group) 
	{
	    $.ajax({
	        url: "../" + HG.WebApp.Data.ServiceDomain + "/Automation/Groups.LightsOff/" + group + "/",
	        type: "POST",
	        dataType: "text"
	    });
	};
HG.Automation.Groups.LightsOn = function (group) 
	{
	    $.ajax({
	        url: "../" + HG.WebApp.Data.ServiceDomain + "/Automation/Groups.LightsOn/" + group + "/",
	        type: "POST",
	        dataType: "text"
	    });
	};
//
// namespace : HG.Automation.Programs namespace
// info      : -
//
HG.Automation.Programs = HG.Automation.Programs || {};	
HG.Automation.Programs.List = function (callback) 
	{
	    $.get('/' + HG.WebApp.Data.ServiceKey + '/' + HG.WebApp.Data.ServiceDomain + '/Automation/Programs.List/' + (new Date().getTime()), function (data) {
	        HG.WebApp.Data.Programs = eval(arguments[2].responseText);
	        callback();
	    });
	};
HG.Automation.Programs.AddProgram = function (program, callback)
	{
	    $.ajax({
	            type: 'POST',
	            url: '/' + HG.WebApp.Data.ServiceKey + '/' + HG.WebApp.Data.ServiceDomain + '/Automation/Programs.Add/' + (new Date().getTime()),
	            data: program,
	            success: function (response) {
	                callback();                            
	            },
	            error: function (a, b, c) {
	                alert('A problem ocurred');
	            }
	    });
	};
HG.Automation.Programs.DeleteProgram = function(program, callback)
	{
	    $.ajax({
	            type: 'POST',
	            url: '/' + HG.WebApp.Data.ServiceKey + '/' + HG.WebApp.Data.ServiceDomain + '/Automation/Programs.Delete/' + program + '/' + (new Date().getTime()),
	            success: function (response) {
	                callback();
	            },
	            error: function (a, b, c) {
	                alert('A problem ocurred');
	            }
	    });
	};   
