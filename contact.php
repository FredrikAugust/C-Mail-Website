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
            $active = 4;
            include('parts/header.php');
        ?>
        
        <!-- Main content -->
        <div class="container">
          <!-- Contact information -->
           <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h1>MrMadsenMalmo</h1>
                    <h4>Web Designer</h4><hr>
                    <div class="col-xs-3">
                        <p class="lead">Name:</p>
                        <p class="lead">Email:</p>
                        <p class="lead">Website:</p>
                        <p class="lead">Twitter:</p>
                        <p class="lead">GitHub:</p>
                        <p class="lead">Bio:</p>
                    </div>
                    <div class="col-xs-9 contactinfo">
                        <p class="lead">Fredrik A. Madsen-Malmo</p>
                        <p class="lead"><a href="mailto:fredrik@mrmadsenmalmo.com">fredrik@mrmadsenmalmo.com</a></p>
                        <p class="lead"><a href="http://mrmadsenmalmo.com">mrmadsenmalmo.com</a></p>
                        <p class="lead"><a href="http://twitter.com/MrMadsenMalmo">@MrMadsenMalmo</a></p>
                        <p class="lead"><a href="https://github.com/FredrikAugust">FredrikAugust</a></p>
                        <p class="lead">Grew up in Norway, still live in Norway. I love web design, and I currently go to the Norwegian equivalent of high school.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <h1>MrTijn</h1>
                    <h4>C# Developer</h4><hr>
                    <div class="col-xs-3">
                        <p class="lead">Name:</p>
                        <p class="lead">Email:</p>
                        <p class="lead">GitHub:</p>
                        <p class="lead">Bio:</p>
                    </div>
                    <div class="col-xs-9 contactinfo">
                        <p class="lead">MrTijn</p>
                        <p class="lead"><a href="mailto:tijndagamer25@gmail.com">tijndagamer25@gmail.com</a></p>
                        <p class="lead"><a href="https://github.com/Tijndagamer">Tijndagamer</a></p>
                        <p class="lead">Grew up in The Netherlands, where I still live. After I tinkerd some around with Python (2.7.x) I started with C# and I currently go to the Dutch equivalent of high school.</p>
                    </div>
                </div>
            </div>
            
            <!-- Hiring -->
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <h1>Hiring</h1><hr>
                    <h4>Do you need help on a project? Do you have a cool idea, but you lack the skills to make your idea come to life?</h4>
                    <p>Well, we're here to help you. Whether it is a website or a program you need we can help. Depending on how good you want your website/program we work for free or take a very small payment. This is to ensure that the customer actually wants a website, and is not registring a phoney website for fun.</p>
                    <p>We're not perfect, and you need to understand that. Since both of us are fairly new to programming, what we make will not be perfect. We are both in the learning stadium of programming, so everything we do is helping us to grow bigger and better. But don't order our service if you want a really professional website/program. We will simply not be able to make that.</p>
                </div>
                <!-- Pricing -->
                <div class="col-xs-12 col-sm-6">
                    <h1>Pricing</h1><hr>
                    <div class="col-xs-6">
                        <h4>Open Source</h4><hr>
                        <p>Since open source is free you wont have to pay for the private repo. Depending on the project it will either be free or 5$.</p>
                        <p>Please contact us at one of the emails above for more information about private repos.</p>
                    </div>
                    <div class="col-xs-6">
                        <h4>Private</h4><hr>
                        <p>Well that is a bit more expensive, please see <a href="https://github.com/pricing">GitHub Pricing</a> for more information.</p>
                        <p>Considering the fact that you actually want to pay a bit for this, I assume this is a bit more serious. Again contact us to get a price estimate on the project.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contributors -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Contributors</h2>
                </div>
                <div class="col-xs-12">
                    <table class="table">
                        <tr>
                            <th><h4>#</h4></th>
                            <th><h4>Name</h4></th>
                            <th><h4>Role</h4></th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>MrMadsenMalmo</td>
                            <td>Web Designer</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>MrTijn</td>
                            <td>Software Developer</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <?php
            include('parts/footer.php');
        ?>
    	
    	<!-- Scripts -->
        <?php
            include('parts/scripts.php');
        ?>
	</body>
</html>
