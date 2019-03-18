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


function listAllProducts(){
    var requestData = new FormData();
    requestData.append("collectionType", "products");
    requestData.append("action", "get");


    makeRequest("../Api/productRequests/updateStockRequest.php", "POST", requestData, function(response) {
        console.log(response);
        var contentBox = document.getElementById("tempForm");
        var templeSub = document.getElementById("productTemp");
        var clone = document.importNode(templeSub.content, true);
        contentBox.innerHTML = "";
        contentBox.appendChild(clone);

        var productTable = document.getElementById("products");

        for(var prod of response){
            var tableRow = document.createElement("tr");
            var tdProductID = document.createElement("td");
            var tdCategoryID = document.createElement("td");
            var tdProductName = document.createElement("td");
            var tdUnitInStock = document.createElement("td");
            var tdUnitPrice = document.createElement("td");
            var tdPictureUrl = document.createElement("td");

            tableRow.appendChild(tdProductID);
            tableRow.appendChild(tdCategoryID);
            tableRow.appendChild(tdProductName);
            tableRow.appendChild(tdUnitInStock);
            tableRow.appendChild(tdUnitPrice);
            tableRow.appendChild(tdPictureUrl);

            tdProductID.innerText = prod.ProductID;
            tdCategoryID.innerText = prod.categoryID;
            tdProductName.innerText = prod.ProductName;
            tdUnitInStock.innerText = prod.UnitInStock;
            tdUnitPrice.innerText = prod.UnitPrice;
            tdPictureUrl.innerText = prod.PictureUrl;

            productTable.appendChild(tableRow);

            
        }
    });

}
function updateProductInStock(){
    var requestData = new FormData();
    var productID = document.getElementById("productID").value;
    var quantity = document.getElementById("unitInStock").value;

    if( productID == "" || quantity == ""){
        alert("Fill both Product ID and quantity");
    }else{
        
        requestData.append("collectionType", "products");
        requestData.append("action", "update");
        requestData.append("productID", productID);
        requestData.append("quantity", quantity);
    }

    
    makeRequest("../Api/productRequests/updateStockRequest.php", "POST", requestData, function(response) {
        if(response == true){
            alert("Nu har du uppdaterat en produkt!");
            location.reload();
        }else{
            alert("Det gick fel!");
        }
    });
}