//Function for login for Both user/admin
function test(){
    var test = $("#info").serialize();
    $.ajax({
        method: 'POST',
        datatype: 'json',
        url: './Api/userRequest.php',
        data: test, 
        success: data => { 
            if(data == "admin") {

                window.location.href ="./adminPage.php";
            }else if(data == "user"){
                window.location.href ="./userPage.php";
            } else {
                alert(data);
                window.location.href ="./login.php";
            }
        },
        error: error => { console.log(error)}
    });
    return false;
}

//Function for sign in new user here
function registerNewUser() {
    var registerForm = $("#registering").serialize();
    $.ajax({
        method: 'POST',
        datatype: 'json',
        url: './Handler/requestHandler.php',
        data: registerForm, 
        success: data => { alert(data) },
        error: error => { 
            alert(error)
            console.log(error); }
    });
    return false;

}