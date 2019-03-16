//Here we bring the products from session that we choosen from productPage and save in the session
function checkChoosenProducts(){
    $.ajax({
      dataType:"json",
      type:"POST",
      url:'../Api/productRequests/viewSavedProduct.php',
      data:{savedProduct: 'saved'},
      success: data => {
        var savedData = data;
        //var checkOutButton = document.getElementById("checkOutButton");
        if(savedData == false) {
         // checkOutButton.style.opacity = "0";
          console.log("you did not choosen any product yet")
        }else{
          var shoppingCart = document.getElementById('shoppingCart');
          shoppingCart.innerText = " "+ savedData.length;
          printOutChoosenProducts(savedData)
          countTotalPrice(savedData)
          //checkOutButton.style.opacity = "1";

        }
      },
      error: error => {
        console.log(error)
      }
    })
  }

  function printOutChoosenProducts(data){
    var section = document.getElementById('content');
    for(var i = 0; i<data.length; i++) {
        var divForSingleProduct = createDiv();
        divForSingleProduct.appendChild(createProductName(data[i]));
        divForSingleProduct.appendChild(createImgTagg(data[i]))
        divForSingleProduct.appendChild(createProductPrice(data[i]));
        divForSingleProduct.appendChild(createAmountChoosen(data[i]));
        divForSingleProduct.appendChild(createDeleteButton(data[i]));
        section.appendChild(divForSingleProduct);

    }
  }

  function createDiv(){
    var singlDiv = document.createElement("div");
    return singlDiv 
  }
  
  function createProductName(categoryInfo){
    var h4 = document.createElement("h4")
    h4.innerText = categoryInfo.productName;
    return h4
  }
  function createImgTagg(categoryInfo){
    var img = document.createElement("img")
    if(categoryInfo.categoryName == "children"){
      img.src = "../Images/kidsClothes/"+categoryInfo.pictureUrl;
    }else if(categoryInfo.categoryName == "women") {
      img.src = "../Images/womensClothes/"+categoryInfo.pictureUrl;
    } else if(categoryInfo.categoryName == "men") {
      img.src = "../Images/mensClothes/"+categoryInfo.pictureUrl;
    }else {
      img.src = "../Images/accessories/"+categoryInfo.pictureUrl;
    }
    return img
  }
  
  function createProductPrice(categoryInfo){
    var h4 = document.createElement("h4")
    h4.innerText = categoryInfo.unitPrice +"kr";
    return h4
  }
  function createAmountChoosen(product) {
    var h4 = document.createElement("h4")
    h4.innerText = "Amount Of Choosen: " + product.numberChoosen;
    return h4

  }
  function createDeleteButton(categoryInfo){
    var putButton = document.createElement("button");
    putButton.innerText = "Delete";
    putButton.style.backgroundColor= "red";
    putButton.onclick = function(){ deleteProduct(categoryInfo)}
    return putButton
  }

  function deleteProduct(product){
    $.ajax({
      dataType:'json',
      type:'put',
      url:'../Api/productRequests/updateProduct.php',
      data:{wantToUpdate: JSON.stringify(product)},
      success: data => {
        if(data ==  true){
          alert("Now we decrement it by -1");
          location.reload();
        }
        if(data ==  false){
          alert("Now we delete it competley");
          location.reload();
        }
      
      },
      error: error => {
        console.log(error)
      }
    })
  }

//Here we count the toral price for all products
function countTotalPrice(priceOfProducts){
  var totalPrice = 0;
  for(var i = 0; i<priceOfProducts.length; i++) {
    var x = Number(priceOfProducts[i].unitPrice) * Number(priceOfProducts[i].numberChoosen)
    totalPrice += x
  }
  var theWholePrice = document.getElementById("totalPrice");
  theWholePrice.value = totalPrice;
 
}
//Here we get the first click to checkout and the fraktAlternatives which we get from the database
function DisPlayCheckOut() {
  document.getElementById('id09').style.display='block';
  $.ajax({
    dataType:'json',
    type: 'GET',
    url: '../Api/viewShippers.php',
    data:{getShippers: 'shipper'},
    success: data => {
      printOutFraktAlterNativ(data);
    },
    error: err => {console.log(err)}
  })
}
function printOutFraktAlterNativ(fraktInfo){
  var ContentFraktInfo = document.getElementById("ContentFraktInfo");
  var select = document.createElement("select");
  select.setAttribute("name", "choiceCompany");
  for(var i = 0; i<fraktInfo.length; i++){
    var compnayName = document.createElement("h6");
    compnayName.innerHTML = fraktInfo[i].CompanyName;
    var shippingPrice = document.createElement("h6");
    shippingPrice.innerHTML = fraktInfo[i].ShippingPrice + " SEK"; 
    var shippingMethod = document.createElement("h6");
    shippingMethod.innerHTML = fraktInfo[i].ShippingMethod; 
    var space = document.createElement("h6");
    space.innerHTML = "---------------------------------------"
    var option = document.createElement("option");
    option.value = fraktInfo[i].CompanyName;
    option.innerText = fraktInfo[i].CompanyName;
    select.appendChild(option);

    ContentFraktInfo.appendChild(compnayName);
    ContentFraktInfo.appendChild(shippingPrice);
    ContentFraktInfo.appendChild(shippingMethod);
    ContentFraktInfo.appendChild(space);
    ContentFraktInfo.appendChild(select);

  }
}
//Here we send the order by checking first if the person is singed and has something in the shoppingcart
function wantToCheckOut() {
  var formData  = $("#checkOutForm").serialize();
  $.ajax({
    dataType:'json',
    type: 'POST',
    url: '../Api/checkOutRequest.php',
    data:formData,
    success: data => {
      if(data == true) {
        alert("Now We have Your Order!")
        location.reload();
        alert("Thanks For Shopping!");
      }else {
        alert("Please Sing in Or Choose Products Or you fill the info")
  
      }
    },
    error: err => {console.log(err)}
  })
}


 