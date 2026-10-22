<!DOCTYPE html>
<html lang="en">
<head>
<?php

include 'head.php'; 

?>
</head>
<body>
    

    <section class="client" id="Client">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-lg-5">
            <div class="">
              <img src="images/controller.png" class="img-fluid">
            </div>
          </div>
          <div class="col-sm-12 col-lg-7">
            <div class="client_box">
              <div class="section_headline">
                <h2>Contact us!</h2>
              </div>
              <div class="client_text">
                <p>Please contact us if you have any quieres about ours guides or any other genral information  </p>
              <p>our contact info-</p>
              <li>
                <i class="fas fa-phone-alt"></i> Call Us:
                <a href="#">011-26242628</a>
              </li>
              <li>
                <i class="fas fa-envelope-open-text"></i>
                <a href="#">GamerWearhouse.@gmail.com</a>
              </li>
            </ul>
              </div>
            </div> 
          </div>
        </div>
      </div>

<div class="col-12 col-lg-5 col-lg-7">
 <div class="Wrap">
  <h2>Contact us</h2>
  <div id="error_message"></div>
  <form id="myform" onsubmit="return validate();">
    <div class="input_field">
        <input type="text" placeholder="Enter Your Name" id="name">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Subject" id="subject">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Enter Your Phone Number..." id="phone">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Enter Your Email..." id="email">
    </div>
    <div class="input_field">
        <textarea placeholder="Enter Your Message" id="message"></textarea>
    </div>
    <div class="btn">
        <input type="submit">
    </div>
  </form>
</div>
</div>
    </section>

      <?php

include 'foot.php'; 

?>



</body>
</html>


