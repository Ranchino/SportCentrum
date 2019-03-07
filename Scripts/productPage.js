// Accordion 
function getTheseProducts(){
    console.log("hej")
  
    var test = $("#productPage").serialize();
    $.ajax({
        type: 'POST',
        datatype: 'json',
        url: './Api/productRequest.php',
        data: test, 
        success: function checkData(data){
          printOutSpecefi(data)
        },
        error: error => { console.log(data)}
    });
    return false;
}
function printOutSpecefi(data){
    console.log(typeof data)
    /*for(var i = 0; i<data.length; i++){
        console.log(data[i])
    }*/

}








/* ------ */
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

// $(document).ready(function(){
//   $('.registerHere').click(function(){
//     
//   });
