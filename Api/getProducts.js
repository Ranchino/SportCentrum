function getProduct(){
    var test = $("postProducts").serialize();
    console.log("test");
    $.ajax({
        type: 'POST',
        datatype: 'json',
        url: './Handler/requestHandler.php',
        data: test, 
        success: data => { alert(data) },
        error: error => { console.log(error)}
    });
    return false;
}
