<?php $page_title= $page_title ?? "Universal GP Calculator"?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo url_for("css/mine.css"); ?>"/>
     <link rel="stylesheet" media="all" href="<?php echo url_for("css/bootstrap.min.css"); ?>" />
    <title><?php echo $page_title ?></title>
</head>

<body> 


    <!-- The header stars here -->
    <header id="header" id="home">
        <div class="header-top bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
                    <a href="tel:+234 080 3064 5528">+234 090 370 962 90</a>&nbsp&nbsp&nbsp
                        <a href="tel:+234 080 3064 5528">+234 080 3064 5528</a> &nbsp&nbsp&nbsp
                        <a href="mailto:rexsteroxy22@gmail.com">rexsteroxy22@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- The header ends here -->


    <!-- The jumbo stars here -->
    <div class="jumbotron text-center">
	<div class="container">
		<h1>Online Result Checker(ORC). <span class="glyphicon glyphicon-thumbs-up"></span></h1>
		<h2><p class="">An Application  For Any University System!!.</p></h2>


	</div>
</div>
    <!-- The jumbo ends here -->
    <div class="container">
   <div class="row "> 
        <div class="col-md-10 col-lg-10 col-sm-10">
            <h4 class="text-info">Online Result Checker(ORC).</h4><?php if(isset($_SESSION['student_id'])){?>
            <h4><a href="<?php echo url_for('/profile.php'); ?>">(View Your Profile)</a></h4><?php } ?>
            
        </div>	

        <div class="col-md-1 col-lg-1 col-sm-1">
            <?php echo display_session_message()?>
         </div>
         <div class="col-md-1 col-lg-1 col-sm-1">
         <?php if(isset($_SESSION['student_id'])){
            echo "<h4><a class= text-danger href=\"logout.php\">logout</a></h4>" ;}
            else{ echo "<h4><a class= text-danger href=\"login.php\">login</a></h4>" ;}
            
            ?>
         </div>


    </div>
    </div>
    <hr>
    