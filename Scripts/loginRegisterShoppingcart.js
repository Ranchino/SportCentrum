//Because of the path in shoppingcart we needed to use a separeted loginRegister.js
function test(){
    var test = $("#info").serialize();
    $.ajax({
        method: 'POST',
        datatype: 'json',
        url:'../Api/userRequest.php',
        data: test, 
        success: data =>{ 
            var info = data   
            if(info == "1") {
                alert("Welcome User!")
                window.location.href ="../index.php";
            } else if(info == "0") {
                alert("Welcome Admin!")
                window.location.href ="./adminPage.php";
            }else {
                alert(data)
                
            }
        },
        error: error => { alert(error)}
    });
    return false;
}

//Here we register new user to our system and the first admin
function registerNewUser() {
    var registerForm = $("#registering").serialize();
    $.ajax({
        method: 'POST',
        datatype: 'json',
        url:'../Api/userRequest.php',
        data: registerForm, 
        success: data => { 
             window.location.href ="./index.php";
        },
        error: error => { alert(error)}
    });
    return false;

}
//Here we destroy the session when the user clicks on sing out
function makeEmptySession(){
    $.ajax({
        method: 'POST',
        dataType: 'json',
        url: '../Api/viewUser.php',
        data: {action: "destroySession"}, 
        success: data => { 
            alert("Now you Loggas out");
            window.location.href ="../index.php";
            var LoginPop = document.getElementById("LoginPop");
            LoginPop.style.opacity = "1";
            var LoginOut = document.getElementById("LogOut");
            LoginOut.style.opacity = "0";
        },
        error: error => { alert(error)}
    });

}

//Here when the person sign in we get the session which save on the server
function CheckSignIn(){
    $.ajax({
        method: 'POST',
        dataType: 'json',
        url:'../Api/viewUser.php',
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