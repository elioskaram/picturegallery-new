<?php

$page_title = "Home";

include 'includes/header.html';

include 'includes/navbar.html';

if (isset ($_SESSION ['username'])){
	echo "Logged in with name '" . $_SESSION['username'] . "'. You can <a href='logout.php'>logout</a>";
}
else{

?>

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-bg">
        <img src="assets/img/hero-bg-light.webp" alt="">
      </div>
      <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h1>Welcome to the <span>Picture Gallery</span></h1>
          <p>You are not authentified, please log in.<br></p>
          <div class="d-flex">
            <a href="login.php" class="btn btn-primary btn-lg active" role="button">Log in</a>
          </div>
          <img src="assets/img/hero-services-img.webp" class="img-fluid hero-img" alt="">
        </div>
      </div>

    </section><!-- /Hero Section -->


<?php

}

include 'includes/footer.html';
?>