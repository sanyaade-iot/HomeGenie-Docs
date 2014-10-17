//
// namespace : HG.System
// info      : -
//
HG.System = HG.System || {};
//
HG.System.SetHttpPort = function (port, callback)
	{
	    $.ajax({
	        url: '/' + HG.WebApp.Data.ServiceKey + '/' + HG.WebApp.Data.ServiceDomain + '/Config/System.Configure/HttpService.SetPort/' + port + '/' + (new Date().getTime()),
	        type: "POST",
	        dataType: "text",
	        success: function (data) {
	            callback(data);
	        }
	    });
	};
HG.System.SetPassword = function (pass, callback)
	{
	    $.ajax({
	        url: '/' + HG.WebApp.Data.ServiceKey + '/' + HG.WebApp.Data.ServiceDomain + '/Config/System.Configure/Security.SetPassword/' + pass + '/' + (new Date().getTime()),
	        type: "POST",
	        dataType: "text",
	        success: function (data) {
	            callback(data);
	        }
	    });
	};
HG.System.ClearPassword = function (callback) {
	    $.ajax({
	        url: '/' + HG.WebApp.Data.ServiceKey + '/' + HG.WebApp.Data.ServiceDomain + '/Config/System.Configure/Security.ClearPassword/' + (new Date().getTime()),
	        type: "POST",
	        dataType: "text",
	        success: function (data) {
	            callback(data);
	        }
	    });
	};
HG.System.HasPassword = function (callback) {
	    $.ajax({
	        url: '/' + HG.WebApp.Data.ServiceKey + '/' + HG.WebApp.Data.ServiceDomain + '/Config/System.Configure/Security.HasPassword/' + (new Date().getTime()),
	        type: "POST",
	        dataType: "text",
	        success: function (data) {
	            var haspass = eval(data)[0];
	            callback(haspass.ResponseValue);
	        }
	    });
	};



