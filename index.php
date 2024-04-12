<?php
  include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="utility/utilities.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <title>Life Of Artists</title>
  </head>
  <body>
    <form action="" method="POST">
    <div class="content">
      <div class="bgvideo">
        <video autoplay loop muted plays-inline class="video">
          <source src="Images/Login Page2.mp4" />
        </video>
      </div>
      <div class="login">
        <div class="container">
          <br />
          <center>
            <h1>LOGIN</h1>
          </center>
          <br />
          <center><input type="text" placeholder="Username" /></center>
          <br />
          <center><input type="text" placeholder="Password" /></center>

          <div class="button-group">
            <button>Submit</button>
            <button>Reset</button>
          </div>
          <center>
            <span>Don't have an account ?</span>
            <br />
            <a href="#">SIGN IN</a>
            <div class="space"></div>
          </center>
        </div>
      </div>
      <div class="website-info">
        <h1>Let's Create</h1>
        <p>Let's create the canvas of our creative minds.</p>
        <p>
          Unlock Your Artistic Potential. Explore. Create. Inspire. Welcome to
          the Canvas of Imagination. Discover the beauty within. Where
          creativity knows no bounds. Embrace the journey of artistic
          expression. Join us in celebrating artistry
        </p>
        <div class="icons">
          <!-- <ion-icon name="logo-instagram"></ion-icon
          ><ion-icon name="logo-facebook"></ion-icon>
          <ion-icon name="logo-youtube"></ion-icon>
          <ion-icon name="logo-discord"></ion-icon>
          <ion-icon name="logo-twitter"></ion-icon> -->
          <img src="Images/instagram.png" />
          <img src="Images/facebook.png" />
          <img src="Images/twitter.png" />
          <img src="Images/discord.png" />
          <img src="Images/youtube.png" />
        </div>
      </div>
    </div>
    <div class="disclaimer">
      <center>
        <p>
          Copyright ©️ 2024 Life of Artist. All rights reserved. Unauthorized
          duplication or distribution of content from this website is strictly
          prohibited. For inquiries, contact us at info@lifeofartist.com.
        </p>
      </center>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
    </form>
  </body>
</html>
