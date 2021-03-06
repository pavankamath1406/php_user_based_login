<?php
  require "master.php"
?>

<?php
// Start the session
session_start();
if(!isset($_SESSION['username'])){
  header('Location:login.php');
}

$av = $_SESSION["access"];

//Check user authorization for imac
if($av != 1 && $av != 12){
  header('Location:codestrike.php');
  $_SESSION['unauthorized'] = "Not Authorized for Imac";
}
?>

<?php
  require 'menu.php';
?>

<br>
<div class="jumbotron">
  <?php 
    if(isset($_SESSION['unauthorized'])){
    echo $_SESSION['unauthorized'];
  }
  ?>
  <h1 class="display-4">Welcome to iMAC Lab</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
<input type="number" value = "<?php echo $_SESSION["access"]; ?>" id="access_number">

<script type="text/javascript">
  //show logout button
  $("#logout").show();

  var access_value = $("#access_number").val();


  $("#imac").click(function(){
    $("#imac").attr("href","imac.php");
  })

  $("#access_number").hide()
</script>
