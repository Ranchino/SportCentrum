function test(){
    var test = $("#info").serialize();
    $.ajax({
        method: 'POST',
        datatype: 'json',
        url: './Api/userRequest.php',
        data: test, 
        success: data =>{ 
            var info = data;
            if(info == "1") {
                alert("Välkommen User!")
                window.location.href ="./view/userPage.php";
            } else if(info == "0") {
                alert("Välkommen Admin!")
                window.location.href ="./view/adminPage.php";
            }else {
                alert(data)
                window.location.href ="./index.php";
            }
        },
        error: error => { alert(error)}
    });
    return false;
}

//Function for sign in new user here
function registerNewUser() {
    var registerForm = $("#registering").serialize();
    $.ajax({
        method: 'POST',
        datatype: 'json',
        url: './Api/userRequest.php',
        data: registerForm, 
        success: data => { 
            if(data == "true") {
                alert("Nu har vi registerat dig");
                window.location.href ="./index.php";
            }else {
                alert(data)
            }

        },
        error: error => { alert(error)}
    });
    return false;

}
