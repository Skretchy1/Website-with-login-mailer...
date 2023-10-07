<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" />
    <title>New Technolgies</title>
    <link href="script.js" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        // $(document).ready(function(){
	    //     $('#sproba').hide();
	    //     $("#trigger1").hover(function(){
		//         $("#sproba").slideToggle("slow");
	    //     });
        // });
        $(document).ready(function(){
	        $('#sproba').hide();
	        $("#trigger1").hover(function(){
		        $("#sproba").slideDown("slow");
	        });
            $("#sproba").mouseleave(function(){
		        $("#sproba").slideUp("slow");
	        });
            
        });
        </script>
</head>
<body>
    <div id="trigger1">A</div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="sproba">
        <a class="navbar-brand" href="Index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="description.php">Description<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pictures.php">Pictures</a>
            </li>
             <?php 
                if(isset($_SESSION["ID"])){
                    echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"description.php\">Description</a></li>";
                    echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"logout.php\">Log out</a></li>";
                } else {
                    echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"register.php\">Register</a></li>";
                    echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"login.php\">Login</a></li>";
                }
            ?> 
            <!-- <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li> -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Explore 
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="upcomingtech.php">New Technologies</a>
                <a class="dropdown-item" href="price.php">Prices</a>
              </div>
            </li>
          </ul>
        </div>
    </nav>
        <!-- <script>
            $(document).ready(function(){
                $(".trigger1").hover(function(){
                    $(".sproba").slideToggle("slow");
                });
            });
        </script> -->