function checkLoginState() {
	FB.getLoginStatus(function(response) {
		console.log(response);
		if (response.status === 'connected') {
			FB.api('/me?fields=id,name,email,permissions', function(responseAPI) {
				console.log(responseAPI);
			});
		} else {
			document.getElementById('status').innerHTML = 'Please log into this app.';
		}
	});
}

function init () {
	FB.Event.subscribe('auth.authResponseChange', function(response) {
		if (response.status === 'connected') {
			FB.api('/me', function(response) {
				console.log(response);
			});   
		} else if (response.status === 'not_authorized') {
			FB.login(function(response) {}, {scope: 'email'});
		} else {
			FB.login(function(response) {}, {scope: 'email'});
		}
	});
	checkLoginState();
}

window.document.onload = function() { init(); };
window.onload = function() { init(); };
