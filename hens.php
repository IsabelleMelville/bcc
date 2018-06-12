<?php

if($_POST["submit"]) {
    $recipient="bella_gb@hotmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];
    $cell=$_POST["cell"];

    $mailBody="Name: $sender\nPhone nr:$cell \n\n  Email: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender");
}
?>

<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
        <title>Hens package</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <header>
      <div class="container">
            <h1> <a href="index.html">Beauty Central Coast</a></h1>
            <h2>Hens packages</h2>
      </div>
    </header>
    <script src="script.js">
      </script>

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
        <a href="gallery.html">Gallery</a> 
        <a href="blog.html">Blog</a>
        <a href="contact.php">Contact</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      </nav>

    <section class="wrap">
      <article class="frame" >
       <img id="hens" src="girls.jpg"> 
        <h3>Hens Party</h3>
        <h4>Hens Pamper Party (minimum of 5 ppl)</h4>
        <p class="italic"> Looking for a relaxed hens party? Getting 
         ready for a big night out? The Pamper party is 
         perfect for all hens parties!</p>
        <p>
         - All hens/party guests receive an express hydration renewal 
         facial while the Bride enjoys an ultimate relaxation & revitalisation 
         treatment which includes an indulgent facial and shoulder massage. 
        </p>
        <p>
          - Express facials include an enzyme exfoliation, brow tint and leave on mask.
       </p>
       <p>
       - Brides extra pampering ultimate relaxation & revitalisation treatment includes
        a hydrating, relaxing and renewing facial which provides an enzyme exfoliation,
         20 min indulgent facial massage, Brow & lash tint and leave on mask.
       </p>
       <p>
       - Trial Make-up and hair styling can be added on for the Bride and her Bridal Party
        at a separate cost. Conveniently trial your perfect Make-up Artist 
        for your wedding at the hens party.
       </p>
       <p>
       Parties can be customised to include beverages grazing plates.
      </p>
      <p>
      The Pamper Party is not restricted to just a hens party, they are also suitable for girls weekends away or the day of the wedding to help the bride and her hens to calm nerves, relax and be transformed before the big “I do”.
      </p>
      </article>
      <article class="frame">
        <h3>Add-ons</h3>
        <p>
              can be added to all Skin Packages & Series
               (on skin packages page & all services page)
            </p>
            <p>
                Express microdermabrasion: $25
                <br/>
                <br/>
                EyeLash Tint $
                <br/>
                <br/>
                Eyebrow Tint $
                <br/>
                <br/>
                Lash & Brow Tint $
                <br/>
                <br/>
                Lash Lift $
                <br/>
                <br/>
                Henna Brows $
                <br/>
                <br/>
                Lash Lift & Henna Brows $
                <br/>
                <br/>
                Lash Tint & Henna Brows $
                <br/>
                <br/>
                Lash Lift & Brow Tint $
            </p>
    </article class="frame">
    <article class="enquiry">
        <h3>Send an enquiry</h3>
        <p>
          Write us a message with the details of your party, 
          <br/>
          please include number of people, date and location.  
        </p>
    <form method="post" action="hens.php">
    <textarea name="message" cols="40" rows="6"> 
    </textarea>
      <br/>
      <br/>
        <label>Name:</label>
        <br>
        <input name="sender" required>*
        <br>
        <label>Email address:</label>
        <br>
        <input name="senderEmail" required>*
        <br/>
        <label>Phone number:</label>
        <br>
        <input name="cell" required >*
         <br/>
         <br/>
         <input type="reset" class="btn" value="Reset" /> 
         <input type="submit" class="btn" value="Send" />
    </form>
  </article>   
       
  </section>

    <section class="board">
      <div class="container">
          <h3>Do you want to join our news letter to find out about our offers and new treatments?</h3>
          <a class="btn" href="contact.php#news">Yes please!</a>
      </div>
</section>

    <footer>
      <ul class="ikoner ikoner-zoom list-unstyled list-inline">  
          <li> <a href="https://www.facebook.com/beautycentralcoast/?ref=br_tf" target="_blank" ><i class="fa fa-facebook"></i></a></li> 
          <li> <a href="https://www.instagram.com/beautycentralcoast/" target="_blank" ><i class="fa fa-instagram"></i></a></li> 
    </ul>
          <p>@BeautyCentralcoast</p>
         <p>info@beautycentralcoast.com.au</p>
  </footer>
  </body>
</html>