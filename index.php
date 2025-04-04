<?php

$page_title = "Home";

include 'includes/header.html';

include 'includes/navbar.html';

if (isset ($_SESSION ['username'])){
	echo "Logged in with name '" . $_SESSION['username'] . "'. You can <a href='logout.php'>logout</a>";
}
else{

  include 'includes/welcome_unauthenticated.html';
?>




<?php

}

include 'includes/footer.html';
?>