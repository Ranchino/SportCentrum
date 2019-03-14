

  <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer" style="border-radius: 1em;">
    <div class="w3-row-padding">
      <div class="w3-col s4">
        <h4>Contact</h4>
        <p>Questions? Go ahead.</p>
        <form id="formu">
          <p><input class="w3-input w3-border" type="text" placeholder="Name" id ="contactName" name="Name"></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" id="contactMail" name="Email"></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Subject" id="contactSubject" name="Subject"></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Message" id="contactMessage" name="Message"></p>
          <button type="button" type="submit" class="w3-button w3-block w3-black" onclick="submitContactForm()">Send</button>
    </form>
      </div>
      
      <div class="w3-col s4">
          <!-- Subscribe section -->
          <div class="w3-container w3-black w3-padding-32 subscribe-footer" style="border-radius: 1em;">
            <h1>Subscribe</h1>
            <p>To get special offers and VIP treatment:</p>
            <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%" id="specialTreatmet"></p>
            <button type="button" class="w3-button w3-red w3-margin-bottom" onclick="specialTreatmentVip()">Subscribe</button>
          </div>

      </div>

      <div class="w3-col s4 w3-justify storeTextFooter">
        <h2 id="store">Store</h2>
        <p><i class="fa fa-fw fa-map-marker"></i> SportCentrum</p>
        <p><i class="fa fa-fw fa-phone"></i> 0044123123</p>
        <p><i class="fa fa-fw fa-envelope"></i> ex@mail.com</p>
        <h4>We accept</h4>
        <p><i class="fa fa-fw fa-cc-amex"></i> Amex</p>
        <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
        <br>
      </div>
    </div>
  </footer>


  <!-- End page content -->
</div>


<!-- Newsletter Modal -->
<div id="newsletter" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <form action="../Classes/newsletterClass.php" method="post"> 
        <h2 class="w3-wide">NEWSLETTER</h2>
        <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
        <p><input class="w3-input w3-border" type="text" placeholder="Surname" name="firstName" id="firstName"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Lastname" name="lastName" id="lastName"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" name="mail" id="mail"></p>
        <p><input class="w3-input w3-border" type="number" placeholder="Phonenumber" name="phoneNo" id="phone"></p>
        <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" type="submit" name="sendNewsletter" onclick="insertNewsletter()">Subscribe</button>
      </form>
    </div>
  </div>
</div>
