//
// namespace : HG.Control.Modules namespace
// info      : -
//
HG.Control = HG.Control || {};
//
HG.Control.Modules = HG.Control.Modules || {};	
HG.Control.Modules.ServiceCall = function(fn, domain, nodeid, fnopt) // TODO: implement callback
	{
	    $.get('/' + HG.WebApp.Data.ServiceKey + '/' + domain + '/' + nodeid + '/' + fn + '/' + fnopt + '/' + (new Date().getTime()), function (data) 
	    {
	    	HG.WebApp.Control.Refresh(); 
	    });
	};