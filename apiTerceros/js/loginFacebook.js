var persona = { userID: "", name: "", accessToken: "", picture: "", email: "" };
window.fbAsyncInit = function () {
    FB.init({
        appId: '3178375025763539',
        autoLogAppEvent: true,
        xfbml: true,
        version: 'v14.0'
    });

    // FB.AppEvents.logPageView();
    // FB.getLoginStatus(function (response) {
    //     // statusChangeCallback(response);
    //     console.log(response);
        
    // });

};

(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) { return; }
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function login() {

    FB.login(function (response) {
        console.log(response);
        if (response.status == "connected") {
            persona.userID = response.authResponse.userID;
            persona.accessToken = response.authResponse.accessToken;
            FB.api('/me?fields=id,name,first_name,last_name,email,picture.type(large)', function (userData) {
                console.log(userData);
                

                persona.name = userData.name;
                persona.email = userData.email;
                persona.picture = userData.picture.data.url;

                $.ajax({
                    url:'login.php',
                    method: 'POST',
                    data:persona,
                    dataType:'text',
                    success: function(serverResponse){
                        if(serverResponse=='success'){
                            window.location = 'index.php';
                        }
                    }
                })
            })
            
        }
        
    }, { scope: 'public_profile, email' });
}


