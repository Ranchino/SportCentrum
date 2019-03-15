//Here we check the sign and for both user and admin
function test(){
    var urlTwo = new URL (window.location.href);
    var categoryName = urlTwo.searchParams.get("categoryName");
    function checkUrl(url){
        var url;
        if(categoryName) {
            url= '../Api/userRequest.php';
            
        }else {
            url = './Api/userRequest.php';
        }
        return url;
    }
    var test = $("#info").serialize();
    $.ajax({
        method: 'POST',
        datatype: 'json',
        url: checkUrl(url),
        data: test, 
        success: data =>{ 
            var info = data
            if(categoryName) {
                if(info == "1") {
                    alert("Welcome User!")
                    window.location.href ="../index.php";
                } else if(info == "0") {
                    alert("Welcome Admin!")
                    window.location.href ="./adminPage.php";
                }else {
                    alert(data)
                    
                }
                
            }else {
               
                if(info == "1") {
                    alert("Welcome User!")
                    window.location.href ="./index.php";
                } else if(info == "0") {
                    alert("Welcome Admin!")
                    window.location.href ="./view/adminPage.php";
                }else {
                    alert(data)
                    window.location.href ="./index.php";
                }
            }
        },
        error: error => { alert(error)}
    });
    return false;
}

//Here we register new user to our system and the first admin
function registerNewUser() {
    var url = new URL (window.location.href);
    var categoryName = url.searchParams.get("categoryName");
    function checkSecondUrl(url){
        var url;
        if(categoryName) {
            url= '../Api/userRequest.php';
            
        }else {
            url = './Api/userRequest.php';
        }
        return url;
    }
    var registerForm = $("#registering").serialize();
    $.ajax({
        method: 'POST',
        datatype: 'json',
        url: checkSecondUrl(url),
        data: registerForm, 
        success: data => { 
            if(data == "true") {
                if(categoryName){
                    //Here we just want to refresh the
                    alert("Register completed!");
                    init()
                }else{
                    alert("Register completed!");
                    window.location.href ="./index.php";
                    
                }
            }else {
                alert(data)
            }

        },
        error: error => { alert(error)}
    });
    return false;

}
//Here we destroy the session when the user clicks on sing out
function makeEmptySession(){
    var urlTwo = new URL (window.location.href);
    var categoryName = urlTwo.searchParams.get("categoryName");
    function checkSecondUrl(url){
        var url;
        if(categoryName) {
            url= '../Api/viewUser.php';
            
        }else {
            url = './Api/viewUser.php';
        }
        return url;
    }
    $.ajax({
        method: 'POST',
        dataType: 'json',
        url: checkSecondUrl(url),
        data: {action: "destroySession"}, 
        success: data => { 
            if(data == true) {
                if(categoryName){
                    alert("Now you Loggas out");
                    window.location.href ="../index.php";
                    var LoginPop = document.getElementById("LoginPop");
                    LoginPop.style.opacity = "1";
                    var LoginOut = document.getElementById("LogOut");
                    LoginOut.style.opacity = "0";
                }else{

                    alert("Now you Loggas out");
                    window.location.href ="./index.php";

                    var LoginPop = document.getElementById("LoginPop");
                    LoginPop.style.opacity = "1";
                    var LoginOut = document.getElementById("LogOut");
                    LoginOut.style.opacity = "0";
                    
                }
            }else {
                alert(data)
            }

        },
        error: error => { alert(error)}
    });

}

//Here when the person sign in we get the session which save on the server
function CheckSignIn(){
    var urlTwo = new URL (window.location.href);
    var categoryName = urlTwo.searchParams.get("categoryName");
    function checkSecondUrl(url){
        var url;
        if(categoryName) {
            url= '../Api/viewUser.php';
            
        }else {
            url = './Api/viewUser.php';
        }
        return url;
    }

    $.ajax({
        method: 'POST',
        dataType: 'json',
        url: checkSecondUrl(url),
        data: {action: "getSession"}, 
        success: data => { 
            if(data == false) {
                console.log("Nu har du loggats ut")
            }else {

                var userView = document.getElementById("userView");
                userView.innerHTML = "Hej " + data[0];
                var LoginPop = document.getElementById("LoginPop");
                LoginPop.style.opacity = "0";
                var LoginOut = document.getElementById("LogOut");
                LoginOut.style.opacity = "1";
            }
        },
        error: error => { console.log(error)}
    });

}


