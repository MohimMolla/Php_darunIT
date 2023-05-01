<!-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Responsive Form</title>
    <style>
      * {
        box-sizing: border-box;
      }
      body {
        font-family: Arial, sans-serif;
        margin: 0;
      }
      form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f2f2f2;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }
      label {
        display: block;
        margin-bottom: 10px;
      }
      input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
      }
      input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      input[type=submit]:hover {
        background-color: #45a049;
      }
      @media screen and (max-width: 600px) {
        form {
          width: 100%;
        }
      }
    </style>
  </head>
  <body>
    <form>
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Your name.." required>

      <label for="email">Email</label>
      <input type="text" id="email" name="email" placeholder="Your email.." required>

      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Write something.." style="height:200px" required></textarea>

      <input type="submit" value="Submit">
    </form>
  </body>
</html> -->
<!-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Responsive Form</title>
    <style>
      * {
        box-sizing: border-box;
      }
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-color: #f6f6f6;
		margin-top: 20px;
      }
      form {
        max-width: 600px;
        margin: 0 auto;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        padding: 40px;
        position: relative;
      }
      h1 {
        font-size: 24px;
        margin: 0 0 20px;
        text-align: center;
      }
      label {
        display: block;
        margin-bottom: 10px;
        font-size: 14px;
        font-weight: bold;
      }
      input[type=text], input[type=email], textarea {
        width: 100%;
        padding: 15px;
        border: none;
        border-radius: 4px;
        background-color: #f2f2f2;
        margin-bottom: 20px;
        font-size: 16px;
      }
      input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 15px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: all 0.3s ease;
      }
      input[type=submit]:hover {
        background-color: #45a049;
      }
      @media screen and (max-width: 600px) {
        form {
          width: 100%;
          padding: 20px;
        }
      }
      .form-group {
        position: relative;
        margin-bottom: 30px;
      }
      .form-group label {
        position: absolute;
        top: 0;
        left: 0;
        color: #bfbfbf;
        font-size: 16px;
        transition: all 0.3s ease;
        transform-origin: left center;
      }
      .form-group input:focus + label, .form-group input:valid + label, .form-group textarea:focus + label, .form-group textarea:valid + label {
        transform: translateY(-20px) scale(0.8);
        color: #4CAF50;
      }
    </style>
  </head>
  <body>
    <form>
      <h1>Contact Us</h1>
      <div class="form-group">
        <input type="text" id="name" name="name" required>
        <label for="name">Name</label>
      </div>
      <div class="form-group">
        <input type="email" id="email" name="email" required>
        <label for="email">Email</label>
      </div>
      <div class="form-group">
        <textarea id="message" name="message" rows="5" required></textarea>
        <label for="message">Message</label>
      </div>
      <input type="submit" value="Submit">
    </form>
  </body>
</html> -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bootstrap Responsive Form with PHP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1 class="text-center mt-5">Contact Us</h1>
      <?php
        if(isset($_POST['submit'])) {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $message = $_POST['message'];
          // Your code to process the form data goes here
          echo '<div class="alert alert-success mt-3">Thank you for your message!</div>';
        }
      ?>
      <form class="mt-4" method="post" action="">
        <div class="row">
          <div class="col-md-6">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
              <label for="name">Name</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
              <label for="email">Email</label>
            </div>
          </div>
        </div>
        <div class="form-floating mb-3">
          <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5" required></textarea>
          <label for="message">Message</label>
        </div>
        <div class="text-center">
          <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </div>
      </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"></script>
  </body>
</html>

