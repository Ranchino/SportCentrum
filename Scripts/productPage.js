var categoryName;
var allInfo;
function getTheseProducts(){
  var url = new URL (window.location.href);
  categoryName = url.searchParams.get("categoryName");
    $.ajax({
        type: 'get',
        dataType:'json',
        url: '../Api/productRequests/getProduct.php',
        data: {categoryName:categoryName}, 
        success: data => {
          document.getElementById("linksOption").value = categoryName;
          var title = document.querySelector("h2.title");
          if(categoryName == "women") {
            title.innerHTML = "" + "Womens Clothing";
          } else if (categoryName == "men") {
            title.innerHTML = "" + "Mens Clothing";
          } else if (categoryName == "children") {
            title.innerHTML = "" + "Childrens Clothing";
          } else {
            title.innerHTML = "" + "Accessories Clothing";
          }
          printOutProducts(data)
        },
        error: error => { console.log(error)}
    });

}

//Here we print out all products
function printOutProducts(categoryInfo) {
  var section = document.querySelector("section#content");
  for(var i = 0; i<categoryInfo.length; i++){
    var divForSingleProduct = createSingleDiv();
    divForSingleProduct.appendChild(createTitle(categoryInfo[i]));
    divForSingleProduct.appendChild(createImg(categoryInfo[i]))
    divForSingleProduct.appendChild(createPrice(categoryInfo[i]));
    divForSingleProduct.appendChild(createUnitInStock(categoryInfo[i]));
    divForSingleProduct.appendChild(createPutButton(categoryInfo[i]));
    section.appendChild(divForSingleProduct);
  }
}
function createSingleDiv(){
  var singlDiv = document.createElement("div");
  return singlDiv 
}

function createTitle(categoryInfo){
  var h4 = document.createElement("h4")
  h4.innerText = categoryInfo.productName;
  return h4
}
function createImg(categoryInfo){
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

function createPrice(categoryInfo){
  var h4 = document.createElement("h4")
  h4.innerText = categoryInfo.unitPrice +"SEK";
  return h4
}
function createUnitInStock(productInfo) {
  var h4 = document.createElement("h4")
  h4.innerText = "Amount Of This Product: " + productInfo.unitInStock;
  return h4

}
function createPutButton(categoryInfo){
  var putButton = document.createElement("button");
  putButton.innerText = "Add Product To Shoppingcart";
  putButton.onclick = function(){ addProduct(categoryInfo)}
  return putButton
}
//Here we want to add product to session
function addProduct(product){
  product.numberChoosen = 1;
  $.ajax({
    type:'JSON',
    method: 'POST',
    url: '../Api/productRequests/addProduct.php',
    data: {choosenProduct: JSON.stringify(product)},
    success: data => {
    location.reload();
     alert(data)

    },
    error: error => {
      alert(error);
    }
  })
}


//Here we check where is the header if it is from start page we add view otherwise no
function redirectForm() {
  var url = new URL (window.location.href);
  var categoryName = url.searchParams.get("categoryName");
  if(categoryName){
    document.getElementById("productPage").action = "./productPage.php";

  }else{
    document.getElementById("productPage").action = "./view/productPage.php";
  }

}

//Here we redirect the shoppingCart since it is on start page and product page
var url = new URL (window.location.href);
var categoryName = url.searchParams.get("categoryName");
function redirectTheShoppingCart(url){
    var url;
    if(categoryName) {
        url= window.location.href = './shoppingCart.php';
        
    }else {
        url = window.location.href = './view/shoppingCart.php';
    }
    return url;
}


function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }
