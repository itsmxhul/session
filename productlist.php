<?php

require_once("header.php");
if (isset($_REQUEST['save'])) {
  if ($_COOKIE['username'] == $_REQUEST['username'] && $_COOKIE['password'] == $_REQUEST['password']) {
    echo "Success";
    $_SESSION['UserData'] = array("username" => $_REQUEST['username'], "password" => $_REQUEST['password']);
    header("location:dashboard.php");
  } else {
    echo "invalid user";
  }
}
if (isset($_REQUEST['addtocart'])) {
    header("location:viewcart.php");
  $_SESSION['CartData'] = array("prod1"=>array("price"=>$_REQUEST['price'],"title"=>$_REQUEST['p1name']));
  print_r($_SESSION['CartData']);
  echo "</pre>";
}
?>
<div class="container">
  <div class="row mt-5">
    <div class="col-md-3">
      <div class="card">
        <img class="card-img-top" src="images/p1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Ordinary</h5>
          <p class="card-text">The Ordinary serum Foundation</p>
          <p class="card-text">&#8377; 1500</p>
          <form method="post">
            <input type="hidden" name="price" value="1500" id="price">
            <input type="hidden" name="p1name" value="Ordinary" id="p1name">
            <input type="submit" name="addtocart" id="addtocart">
          </form>
        </div>
      </div>
    </div>
    
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>