
<?php
session_start(); // Start the session

// Check if session exists (user is logged in)
if (!isset($_SESSION['email'])) {
    header("Location: sing.html"); // Redirect to login page if not logged in
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Page Design</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css\\\\\\\\\\\\\\\\\"
    />
    <link rel="stylesheet" href="feedback.css" />
  </head>
  <body>
    <div class="container">
      <h2>Get in touch</h2>
      <p>Feel free to contact us about anything and anytime related to providing water services </p>
      <form class="contact-form" method="post" action="insertfeedback.php">
        <div class="input-area">
          <input type="text" placeholder="Your name"  name="name"/>
        </div>
        <div class="input-area">
          <input type="email" placeholder="Email address" name="email" />
        </div>
        <div class="input-area">
          <input type="text" placeholder="Subject"  name="sub"/>
        </div>
        <div class="input-area h-80">
          <textarea placeholder="Your message" name="message"></textarea>
        </div>
        <button class="sendbtn">Send</button>
      </form>
    </div>
    <div class="social-container">
      <div class="custom-social-container">
        <p>Contact me on</p>
        <button class="cross-btn"><i class="fas fa-times"></i></button>
        <ul>
          <li>
            <a
              href="https://instagram.com/codewithfaraz"
              target="_blank"
              rel="nofollow"
            >
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li>
            <a
              href="https://www.youtube.com/@codewithfaraz"
              target="_blank"
              rel="nofollow"
            >
              <i class="fab fa-youtube"></i>
            </a>
          </li>
          <li>
            <a
              href="https://facebook.com/codewithfaraz"
              target="_blank"
              rel="nofollow"
            >
              <i class="fab fa-facebook"></i>
            </a>
          </li>
          <li>
            <a
              href="https://twitter.com/codewithfaraz"
              target="_blank"
              rel="nofollow"
            >
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li>
            <a
              href="https://linkedin.com/in/farazc60"
              target="_blank"
              rel="nofollow"
            >
              <i class="fab fa-linkedin"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <button class="connect-btn">Get Connected</button>
    <script src="script.js"></script>
  </body>
</html>