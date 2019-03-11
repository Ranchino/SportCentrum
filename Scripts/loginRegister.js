
function test(){
    var url = new URL (window.location.href);
    var categoryName = url.searchParams.get("categoryName");
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
                    alert("Välkommen User!")
                    window.location.href ="./userPage.php";
                } else if(info == "0") {
                    alert("Välkommen Admin!")
                    window.location.href ="./adminPage.php";
                }else {
                    alert(data)
                    
                }
                
            }else {
               
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
            }
        },
        error: error => { alert(error)}
    });
    return false;
}

//Function for sign in new user here
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
                    alert("Nu har vi registerat dig");
                    init()
                }else{
                    alert("Nu har vi registerat dig");
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
