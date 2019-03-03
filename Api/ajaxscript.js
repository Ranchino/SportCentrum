function test(){
    var test = $("#info").serialize();
    $.ajax({
        method: 'POST',
        datatype: 'json',
        url: './Handler/requestHandler.php',
        data: test, 
        success: function(data) {
            console.log(data);
        },
        error: function checkerror(error){
            console.log(error);
        }
    });
    return false;
}
