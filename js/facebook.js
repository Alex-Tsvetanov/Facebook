function sendInfo() {
	$.ajax({  
		type: "POST",  
		url: "/api.php",  
		data: window.person,  
		success: function(dataString) {  
			// no return data
			console.log(dataString);
		} 
	});  
}
function checkLoginState() {
	FB.getLoginStatus(function(response) {
		console.log(response);
		if (response.status === 'connected') {
			FB.api('/me?fields=id,name,email,permissions,gender,locale', function(responseAPI) {
				console.log(responseAPI);
				Object.defineProperty(window, "person", {
					value: responseAPI,
					writable: false,
				});
			});
		} else {
			FB.login(function(response) {}, {scope: 'email'});
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

function login() {
	checkLoginState();
	showQuiz();
}

window.document.onload = function() { init(); };
window.onload = function() { init(); };
