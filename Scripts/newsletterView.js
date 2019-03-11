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

function viewNewsletter(){
    var requestData = new FormData();
    requestData.append("collection", "newsletter");
    requestData.append("action", "get");
    
    makeRequest("../Api/viewNewsletter.php", "POST", requestData, function(response) {
        console.log(response);
        var contentBox = document.getElementById("tempForm");
        var templeSub = document.getElementById("templeSub");
        var clone = document.importNode(templeSub.content, true);
        contentBox.appendChild(clone);

        var newsTable = document.getElementById("newsletter");

        for(var news of response){
            var tableRow = document.createElement("tr");
            var tdFirstName = document.createElement("td");
            var tdLastName = document.createElement("td");
            var tdEmail = document.createElement("td");
            var tdPhone = document.createElement("td");

            tableRow.appendChild(tdFirstName);
            tableRow.appendChild(tdLastName);
            tableRow.appendChild(tdEmail);
            tableRow.appendChild(tdPhone);

            tdFirstName.innerText = news.FirstName;
            tdLastName.innerText = news.LastName;
            tdEmail.innerText = news.Mail;
            tdPhone.innerText = news.PhoneNO;

            newsTable.appendChild(tableRow);

            
        }
    });
}