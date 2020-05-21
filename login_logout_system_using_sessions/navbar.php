<?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">My User Registration System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>

        <li class="nav-item">
        <a class="nav-link" href="contactus.php">Contact Us</a>
      </li>
     
     
   
    </ul>
  
      Hi <?php echo $_SESSION['username']?>
  
 <!--    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
    <form method="POST">
      <input style="color: red;"type="submit" value="LogOut" class="btn btn-link"name="logout">
    </form>

  </div>
</nav>
<div class="alert alert-secondary" role="alert">
  Hi <?php echo $_SESSION['username']; ?>, welcome!
</div>

<?php
  if (isset($_SESSION['username'])==false) {
    header('location:index.php');
  }
  ?>

<?php
if (isset($_POST['logout'])) {
  session_destroy();
  header('location:index.php');
}
?>