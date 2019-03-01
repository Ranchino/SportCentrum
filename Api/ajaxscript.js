
function test(){
    var test = $("#info").serialize();
    $.ajax({
        type: 'POST',
        url: '../Handler/requestHandler.php',
        data: test, 
        succsess: function(data) {
            console.log(data);
        },
        error: function checkerror(error){
            console.log(error);
        }
    });
}
