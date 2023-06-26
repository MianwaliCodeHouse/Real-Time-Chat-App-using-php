<?php
session_start();
if(isset($_SESSION["userName"]) && isset($_SESSION["phone"])){

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ChatRoom</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h1>ChatRoom</h1>
  <div class="chat">
    <h2>Welcome to <span><?= $_SESSION["userName"]?></span></h2>
    <div class="msg">
      


    </div>
    <div class="input_msg">
      <input type="text" placeholder="Write msg Here" id="input_msg">
      <button onclick="update()">Send</button>
    </div>
  </div>
</body>
<script src="js/script.js"></script>

</html>

<?php
}else{

  header("location: login.php");


}
?>