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

  function submitContactForm() {
    document.getElementById = 'contactName';
    document.getElementById = 'contactMail';
    document.getElementById = 'contactSubject';
    document.getElementById = 'contactMessage';

    if(contactName.value.length == 0 || 
      contactMail.value.length == 0 || 
      contactSubject.value.length == 0 || 
      contactMessage.value.length == 0) {
      alert("Fill in the required field!");
    } else {
      alert("We will contact you soon!");
      document.location.reload()
  }
} 


function specialTreatmentVip() {
  document.getElementById = 'specialTreatmet';
  if(specialTreatmet.value.length = "03928329") {
    alert("Wrong discount.")
  }
}

// Get the modal
var modal = document.getElementById('id09');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
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


// fade in back-top
$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 800) {
            $('.go-back-tag').fadeOut();
        } else {
            $('.go-back-tag').fadeIn();
        }
    });

    // scroll body to 0px on click
/*     $('.go-back-tag').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 1600);
        return false;
    }); */
});
