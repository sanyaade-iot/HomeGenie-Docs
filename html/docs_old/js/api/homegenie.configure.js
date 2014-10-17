//
// namespace : HG.Configure.Groups namespace
// info      : -
//
HG.Configure = HG.Configure || {};
//
HG.Configure.Groups = HG.Configure.Groups || {};	
HG.Configure.Groups.List = function (callback) 
	{
	    $.get('/' + HG.WebApp.Data.ServiceKey + '/' + HG.WebApp.Data.ServiceDomain + '/Config/Groups.List/' + (new Date().getTime()), function (data) {
	        HG.WebApp.Data.Groups = eval(arguments[2].responseText);
	        callback();
	    });
	};
HG.Configure.Groups.AddGroup = function (group, callback)
	{
	    $.ajax({
	            type: 'POST',
	            url: '/' + HG.WebApp.Data.ServiceKey + '/' + HG.WebApp.Data.ServiceDomain + '/Config/Groups.Add/' + (new Date().getTime()),
	            data: group,
	            success: function (response) {
	                callback();                            
	            },
	            error: function (a, b, c) {
	                alert('A problem ocurred');
	            }
	    });
	};
HG.Configure.Groups.DeleteGroup = function (group, callback)
	{
	    $.ajax({
	            type: 'POST',
	            url: '/' + HG.WebApp.Data.ServiceKey + '/' + HG.WebApp.Data.ServiceDomain + '/Config/Groups.Delete/' + (new Date().getTime()),
	            data: group,
	            success: function (response) {
	                callback();
	            },
	            error: function (a, b, c) {
	                alert('A problem ocurred');
	            }
	    });
	};
//
// namespace : HG.Configure.Interfaces namespace
// info      : -
//
HG.Configure.Interfaces = HG.Configure.Interfaces || {};
HG.Configure.Interfaces.ServiceCall = function (ifacefn, callback) {
    $.ajax({
        url: '/' + HG.WebApp.Data.ServiceKey + '/' + HG.WebApp.Data.ServiceDomain + '/Config/Interfaces.Configure/' + ifacefn + '/',
        type: "POST",
        dataType: "text",
        success: function (data) {
            var value = eval(data);
            if (value == 'undefined') {
                value = data;
            }
            else {
                try {
                    value = value[0].ResponseValue;
                } catch (e) { value = data; }
            }
            callback(value);
        }
    });
};
//
// namespace : HG.Configure.Modules namespace
// info      : -
//	
HG.Configure.Modules = HG.Configure.Modules || {};	
HG.Configure.Modules.List = function(callback) 
	{
	    $.ajax({
	        url: '/' + HG.WebApp.Data.ServiceKey + '/' + HG.WebApp.Data.ServiceDomain + '/Config/Modules.List/' + (new Date().getTime()),
	        type: "POST",
	        dataType: "text",
	        success: function (data) {
	            callback(data);
	        }
	    });
	};
//
// namespace : HG.Configure.System namespace
// info      : -
//	
HG.Configure.System = HG.Configure.System || {};
HG.Configure.System.ServiceCall = function (systemfn, callback)
	{
	    $.ajax({
	        url: '/' + HG.WebApp.Data.ServiceKey + '/' + HG.WebApp.Data.ServiceDomain + '/Config/System.Configure/' + systemfn + '/',
	        type: "POST",
	        dataType: "text",
	        success: function (data) {
	            var value = eval(data);
	            if (value == 'undefined') {
	                value = data;
	            }
	            else {
	                try {
	                    value = value[0].ResponseValue;
	                } catch (e) { value = data; }
	            }
	            callback(value);
	        }
	    });
	};
