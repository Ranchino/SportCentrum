//Function for login for Both user/admin
function test(){
    var test = $("#info").serialize();
    $.ajax({
        method: 'POST',
        datatype: 'json',
        url: './Handler/requestHandler.php',
        data: test, 
        success: data => { alert(data) },
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