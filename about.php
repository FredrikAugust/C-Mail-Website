<!doctype html>
<html lang="en">
	<head>
		<title>C-Mail</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
   	    <!-- Header -->
    	<?php 
            $active = 3;
            include('parts/header.php');
        ?>
       
        <!-- Jumbotron -->
        <div class="jumbotron about">
            <div class="container">
                <h1>C-Mail</h1>
                <h2>Our job was to make sending and recieving email easier.</h2><br>
                <h2>And so we did.</h2>
            </div>
        </div>
        
        <!-- Main content -->
        <div class="container">
            <!-- Paragraphs of text -->
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h2>What is it?</h2>
                    <p class="lead">C-Mail is a simple e-mail client designed for the average user. We removed all exess features that most people don't use, and instead focused on improving the most used features.</p>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <h2>How did you do it?</h2>
                    <p class="lead">Instead of starting off a pre-built base, we started from scratch. This gives us the opportunity to monitor everything that goes into the program and leave out unwanted content.</p>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <h2>Who built this?</h2>
                    <p class="lead">We are two young developers, devoting all our time outside school to improve our knowledge in programming. We're trying to build a base for the future.</p>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <h2>What is your focus?</h2>
                    <p class="lead">User experience. When you go into a website to buy shoes you only want to see the shoes. You only want to see what helps you achieve your goal. We work with the same principals in mind.</p>
                </div>
            </div>
            <hr>
        </div>
        
        <!-- Footer -->
        <?php
            include('parts/footer.php');
        ?>
    	
    	<!-- Scripts -->
    	<script src="script/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="script/bootstrap.min.js" type="text/javascript"></script>
        <script src="script/script.js" type="text/javascript"></script>
	</body>
</html>
