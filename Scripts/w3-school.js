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