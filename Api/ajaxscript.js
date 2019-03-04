function test(){
    var test = $("#info").serialize();
    $.ajax({
        method: 'POST',
        datatype: 'json',
        url: './Handler/requestHandler.php',
        data: test, 
        success: function(data) {
            alert(data)
        },
        error: function checkerror(error){
            console.log(error);
        }
    });
    return false;
}


function registerNewUser() {
    var registerForm = $("#registering").serialize();
    $.ajax({
        method: 'POST',
        datatype: 'json',
        url: './Handler/requestHandler.php',
        data: registerForm, 
        success: function(data) {
            console.log(data)
        },
        error: function checkerror(error){
            console.log(error);
        }
    });
    return false;

}