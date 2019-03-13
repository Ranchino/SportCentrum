function makeRequest(url, method, formdata, callback){
    fetch(url, {
        method: method,
        body: formdata
    }).then((data) => {
        return data.json();
    })
    .then((result) => {
        callback(result);
    })
    .catch((err) => {
        console.log(err);
    });
}


function insertNewsletter(){
    document.getElementById('newsletter').style.display='none';
    var formdata = new FormData();
    var firstname = document.getElementById("firstName").value;
    var lastname = document.getElementById("lastName").value;
    var mail = document.getElementById("mail").value;
    var phone = document.getElementById("phone").value;

    console.log(firstname, lastname, mail, phone);

    formdata.append("firstname", firstname);
    formdata.append("lastname", lastname);
    formdata.append("mail", mail);
    formdata.append("phone", phone);
    
<<<<<<< HEAD
    if(firstname === "" || lastname === "" || mail === "" || phone === "") {
        window.alert("Please fill in the required fields!");
    } else {
        makeRequest( "../Api/sendNewsletterRequest.php", "POST", formdata, function(response) {
=======
    var url = new URL (window.location.href);
    var categoryName = url.searchParams.get("categoryName");
    function checkUrl(url){
        var url;
        if(categoryName) {
            url= '../Api/sendNewsletterRequest.php';
            
        }else {
            url = './Api/sendNewsletterRequest.php';
        }
        return url;
    }
    makeRequest( checkUrl(url), "POST", formdata, function(response) {
>>>>>>> cfc9810e6209e38c08a212c5fe56b9daf9963f9e
        if(response){
            alert("Thanks for choosing our newsletter!");
        }else{
            alert("det gick fel!");
        }
    });

    }
}