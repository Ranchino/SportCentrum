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

function viewOrder(){
    makeRequest("../Api/orderRequest.php", "GET", null, function(response) {
        console.log(response);
        var contentBoxOrder = document.getElementById("orderForm");
        var templeOrder = document.getElementById("templeOrder");
        var clone = document.importNode(templeOrder.content, true);
        contentBoxOrder.innerHTML = "";
        contentBoxOrder.appendChild(clone);

        var orderTable = document.getElementById("orders");

        for(var order of response){
            var tableRowOrder = document.createElement("tr");
            var tdOrderID = document.createElement("td");
            var tdShipperID = document.createElement("td");
            var tdShippFirstName = document.createElement("td");
            var tdShippLastName = document.createElement("td");
            var tdShippAdress = document.createElement("td");
            var tdShippPostelCode = document.createElement("td");
            var tdShippCity = document.createElement("td");
            var tdShippMail = document.createElement("td");
            var tdShippPhoneNO = document.createElement("td");
            var tdTotalPrice = document.createElement("td");
            var tdOrderDate = document.createElement("td");
            var tdUserID = document.createElement("td");


            tableRowOrder.appendChild(tdOrderID);
            tableRowOrder.appendChild(tdShipperID);
            tableRowOrder.appendChild(tdShippFirstName);
            tableRowOrder.appendChild(tdShippLastName);
            tableRowOrder.appendChild(tdShippAdress);
            tableRowOrder.appendChild(tdShippPostelCode);
            tableRowOrder.appendChild(tdShippCity);
            tableRowOrder.appendChild(tdShippMail);
            tableRowOrder.appendChild(tdShippPhoneNO);
            tableRowOrder.appendChild(tdTotalPrice);
            tableRowOrder.appendChild(tdOrderDate);
            tableRowOrder.appendChild(tdUserID);


            tdOrderID.innerText = order.OrderID;
            tdShipperID.innerText = order.ShipperID;
            tdShippFirstName.innerText = order.ShipFirstName;
            tdShippLastName.innerText = order.ShipLastName;
            tdShippAdress.innerText = order.ShippAdress;
            tdShippPostelCode.innerText = order.ShippPostelCode;
            tdShippCity.innerText = order.ShipCity;
            tdShippMail.innerText = order.ShipMail;
            tdShippPhoneNO.innerText = order.ShipPhoneNO;
            tdTotalPrice.innerText = order.TotalPrice;
            tdOrderDate.innerText = order.OrderDate;
            tdUserID.innerText = order.UserID;


            orderTable.appendChild(tableRowOrder);

            
        }
    });
}