var categoryName;
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
          var title = document.querySelector("h1.title");
          title.innerHTML = "Welcome To " + categoryName +"'s Cloth!"
          printOutProducts(data)
          
        },
        error: error => { console.log(error)}
    });

}
//Here we print out all products
function printOutProducts(categoryInfo) {

  var section = document.querySelector("section#content");
  //var template = document.querySelector("template");
  for(var i = 0; i<categoryInfo.length; i++){
/*     var clone = template.content.cloneNode(true);
    var h1 = clone.querySelectorAll("h1");
    h1[0].innerHTML = categoryInfo[i].productName;

    var img = clone.querySelectorAll("img");


    var button = clone.querySelectorAll("button");
    button[0].innerHTML = "Add To ShoppingCart";
    var test = JSON.stringify(categoryInfo[i])
    button[0].onclick=function() { addProductToSession(test) }
    //Based on the category we set the picture src on that map
    if(categoryInfo[i].categoryName == "children"){
      img[0].src = "../Images/kidsClothes/"+categoryInfo[i].pictureUrl;
    }else if(categoryInfo[i].categoryName == "women") {
      img[0].src = "../Images/womensClothes/"+categoryInfo[i].pictureUrl;
    } else if(categoryInfo[i].categoryName == "men") {
      img[0].src = "../Images/mensClothes/"+categoryInfo[i].pictureUrl;
    }else {
      img[0].src = "../Images/accessories/"+categoryInfo[i].pictureUrl;
    }
    var h2 = clone.querySelectorAll("h2");
    h2[0].innerHTML = categoryInfo[i].unitPrice + " SEK";
    //template.parentNode.appendChild(clone)

    template.appendChild(clone) */


    var divForSingleProduct = createSingleDiv();
    divForSingleProduct.appendChild(createTitle(categoryInfo[i]));
    divForSingleProduct.appendChild(createImg(categoryInfo[i]))
    divForSingleProduct.appendChild(createPrice(categoryInfo[i]));
    divForSingleProduct.appendChild(createPutButton(categoryInfo[i]));
    section.appendChild(divForSingleProduct);
  }


}
function createSingleDiv(){
  var singlDiv = document.createElement("div");
  singlDiv.style.width = "100%";
  singlDiv.style.textAlign = "center";
  singlDiv.style.position= "relative";
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
  h4.innerText = categoryInfo.unitPrice +"kr";
  return h4
}
function createPutButton(categoryInfo){
  var putButton = document.createElement("button");
  putButton.innerText = "Add Product To Shoppingcart";
  putButton.onclick = function(){ addProduct(categoryInfo)}
  return putButton
}
//Here we want to add 
var choosenProductArray = [];
function addProduct(categoryInfo){
  choosenProductArray.push(categoryInfo)
  $.ajax({
    type:'JSON',
    method: 'POST',
    url: '../Api/productRequests/addProduct.php',
    data: {choosenProducts: JSON.stringify(choosenProductArray)},
    success: data => {
      console.log(data);
    },
    error: error => {
      alert(error);
    }
  })
  console.log(choosenProductArray)
}

//Here we check where is the header if it is from start page the we add view otherwise no
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


  
  
  // Click on the "Jeans" link on page load to open the accordion for demo purposes
  //document.getElementById("myBtn").click();
  
  
  // Open and close sidebar
  function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
    document.getElementById("login").style.display = "block";
  }
   
  function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
  }

  // Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function showLoginModal() {
    document.getElementById('id01').style.display='block'
    $('#loginShow').show();
    $('#registerAccount').hide();
    $('.signInHere').hide();
}

function switchToRegisterForm() {
    $('#loginShow').hide();
    $('.registerHere').hide();
    $('#registerAccount').show();
    $('.signInHere').show();

}

function switchToLoginForm() {
    $('#loginShow').show();
    $('.registerHere').show();
    $('#registerAccount').hide();
    $('.signInHere').hide();
}
