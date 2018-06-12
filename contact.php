<?php

if($_POST["submit"]) {
    $recipient="bella_gb@hotmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $number=$_POST["number"];
    $message=$_POST["message"];
    $date=$_POST["date"];
    $treatment=$_POST["treatment"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n Phonenumber:$number \nMessage:\n$message\nTreatment:\n$treatment\nDate:\n$date";

    mail($recipient, $subject, $mailBody, "From: $sender");


}
?>

<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
        <title>Special Offers</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
      <script src="script.js">
        </script>
    <header>
      <div class="container">
            <h1> <a href="index.html">Beauty Central Coast</a></h1>
            <h2>Contact us</h2>
      </div>
    </header>
    <nav id="myTopnav">
        <a href="index.html" >Home</a>
        <div class="dropdown">
                <button class="dropbtn">Wedding Packages
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="wedding.html#glow">Bridal package 1</a>
                  <a href="wedding.html#allinclusive"> Bridal package 2</a>
                  <a href="wedding.html#wed1">Wedding package 1</a>
                  <a href="wedding.html#wed2"> Wedding package 2</a>
                  <a href="wedding.html#addons">Add-ons</a>
             </div>
          </div> 
        <a href="hens.php">Hens Party</a>
        <div class="dropdown">
            <button class="dropbtn">Skin Treatments
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="treatments.html#signature">Ultimate relaxation & revitalisation</a>          
              <a href="treatments.html#micro"> Microdermabrasion </a>
              <a href="treatments.html#chempeel">Chemical peels</a>
              <a href="treatments.html#facial">facials</a>
              <a href="treatments.html#package">packages</a>
            </div>
          </div> 
        <div class="dropdown">
          <button class="dropbtn">All Services
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="services.html#skin">Skin Treatments</a>
            <a href="services.html#lashes"> Lashes and Brows</a>
            <a href="services.html#tan">Tanning </a>
            <a href="services.html#shallac"> Nails </a>
          </div>
        </div> 
        <a href="vouchers.html">Gift vouchers</a>
        <a href="vouchers.html">Gallery</a> 
        <a href="blog.html">Blog</a>
        <a href="contact.php">Contact</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      </nav>
    <main> 

<section class="container">
<h2>Enquire about treatment</h2>
<p>Please fill out the preferred date and time on your treatment below. We will be in contact with you shortly after to confirm the time.
</p>
<p>
If enquiring about Hens party or bridal services please include number of people and location in the message box.
</p>
        <br>
    <form method="post" action="contact.php">
    <label>Choose a Treatment:</label>
    <br/>
    <br/>
    <select name="treatment">
    <option value="consultation">Consultation</option>
    <option value="facials">Facials</option>
    <option value="strengthen and hydrate">Strengthen and hydrate AHA enzymatic peel </option>
    <option value="clearing and brightening">Clearing and brightening  AHA chemical peel </option>
    <option value="anti-age">Ultimate anti-aging treatment </option>
    <option value="express microderm">Express microdermabrasion</option>
    <option value="extended microderm">deep cleanse extended microdermabrasion</option>
    <option value="vitamin c microderm">Vitamin C Microdermabrasion</option>
    <option value="anit-oxidant microderm">Anti-oxidant Algae Microdermabrasion</option>
    <option value="lashes and brows">lashes and brows </option>
    <option value="tanning">Tanning </option>
    <option value="nails">Nails </option>
    <option value="general question">General question</option>
  </select>
  <br><br>  
        <label>Date:</label>
        <br/>
        <br/>
        <input type="date" name="date">
        <br/>
        <br/>
        <label>Message:</label>
        <br/>
        <br>
        <textarea name="message" cols="40" rows="6"> 
    </textarea>
    <br/>
        <label>Name:</label>
        <br>
        <input name="sender" required> *
        <br>
        <label>Phone number:</label>
        <br/>
        <input name="number"required > *
        <br/>
        <label>Email address:</label>
        <br>
        <input name="senderEmail" required> *
         <br>
</br>
        <input type="submit" 
        class="btn" name="submit">
    </form>
</section>

    <section class="container" id="news">
        <h2>Newsletter</h2>
        <p>Sign up for our News Letter, to get the latest offers and tips!</p>
        <br>
    <form method="post" action="contact.php">
        <label>Name:</label>
        <br>
        <input name="sender">
        <br>
        <label>Email address:</label>
        <br>
        <input name="senderEmail" required > *
         <br>
</br>
        <input type="submit" 
        class="btn" name="submit">
    </form>
</section>      
</main>

<section class="board">
  <div class="container">
  </div>
</section>

<footer>
    <ul class="ikoner ikoner-zoom list-unstyled list-inline">  
      <li> <a href="https://www.facebook.com/beautycentralcoast/?ref=br_tf" target="_blank"><i class="fa fa-facebook"></i></a></li> 
      <li> <a href="https://www.instagram.com/beautycentralcoast/" target="_blank"><i class="fa fa-instagram"></i></a></li> 
    </ul>

      <p>@BeautyCentralcoast</p>
     <p>Email: info@beautycentralcoast.com.au</p>
    </footer>
  </body>
</html>