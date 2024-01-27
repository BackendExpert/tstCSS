<?php include("layouts/header.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>How to Make a Popup</title>
  <link rel="stylesheet" href="style.css">
  <script defer src="app.js"></script>
</head>
<body>

<div class="container">
  <button type="submit" class="btn" onclick="openPopup()">Submit</button>
  <div class="popup" id="popup">
    <img src="img/tick.png" alt="">
    <h2>Thank You!</h2>
    <p>Your Details has been Succesfully Submitted.Thanks!</p>
    <button type="button" onclick="closePopup()">OK</button>
  </div>  

</div>

</body>
</html>