//Here we bring the products from session that we choosen from productPage and save in the session
function checkChoosenProducts(){
    $.ajax({
      dataType:"json",
      type:"POST",
      url:'../Api/productRequests/viewSavedProduct.php',
      data:{savedProduct: 'saved'},
      success: data => {
        var savedData = data;
        console.log(savedData)
        
        var shoppingCart = document.getElementById('shoppingCart');
        shoppingCart.innerText = " "+ savedData.length;
        printOutChoosenProducts(savedData)
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
    putButton.innerText = "Delete Product From Shoppingcart";
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


function wantToCheckOut() {
  alert("Hej")
}
 