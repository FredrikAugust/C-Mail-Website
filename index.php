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
        <?php 
            $active = 1;
            include('parts/header.php');
        ?>
                       
        <!-- Main content -->
        <div class="container main" role="main">
        	<div class="jumbotron">
            	<h1>C-Mail</h1>
                <p>C-Mail is an email client written in C# using only the bare minimals to perform its task. The result of this is a lightning fast mail client with minimal clutter.</p>
                <div class="btn-group">
                    <button class="btn btn-success dl-button" id="download"><a href="https://github.com/Tijndagamer/C-Mail/releases">Download</a></button>
	                <button class="btn btn-default dl-button" id="github"><a href="https://github.com/Tijndagamer/C-Mail">View on GitHub</a></button>
	            </div>
            </div>
            
            <!-- Feature spotlight -->
            <div class="row">
            	<div class="col-md-4 col-xs-6 col-sm-6">
        			<div class="col-head">
	            		<b class="glyphicon glyphicon-send"></b>
	            		<h2>SMTP</h2>
            		</div>
            		<p>C-Mail features an easy way to send emails, powered by the SMTP protocol. Various hosts are supported, and adding your own host is easy!</p>
            	</div>
            	<div class="col-md-4 col-xs-6 col-sm-6">
            		<div class="col-head">
	            		<b class="glyphicon glyphicon-inbox"></b>
	            		<h2>IMAP</h2>
            		</div>
            		<p>The inbox, it might be the most necessary function of an email client. C-Mail features a nice and clean inbox using the IMAP4 protocol and your data is safe, with SSL.</p>
            	</div>
            	<div class="col-md-4 hidden-xs hidden-sm">
            		<div class="col-head">
	            		<b class="glyphicon glyphicon-floppy-disk"></b>
	            		<h2>Open Source</h2>
            		</div>
            		<p>C-Mail is completely open source, all the code is found on the github page and released under the MIT license. Do you think it misses a feature? Fork the repo and add it yourself!</p>
            	</div>
            </div>
            
            <!-- Detailed features -->
            <hr>
            <div class="row">
            	<div class="col-xs-9">
                	<h3>Don't like it? Edit it!</h3>
                	<p>As a benefit to making our software open source all users with a general knowledge of C# can now edit the program to their liking. And if you were to edit your program, feel free to share it with us! Since we are using GitHub as our repository host you can create a pull request and we'll take a look at it, and if we like it we'll incorporate your edits into the program. We will of course make sure you will get the credits for it, and as a bonus you'll get access to the beta versions of the program. Additionally, if this program ever were to cost money we'll of course send you a free copy.</p>
                </div>
                <div class="col-xs-3 clearfix">
                	<img src="img/desc1.png" alt="Lipsum" class="img-responsive img-circle detail-img">
                </div>
            </div><hr>
            <div class="row">
            	<div class="col-xs-3 clearfix hidden-xs">
                	<img src="img/desc2.png" alt="Lipsum" class="img-responsive img-circle detail-img">
                </div>
            	<div class="col-xs-9">
                	<h3>Have a problem?</h3>
                	<p>If you ever were to run into any problems while using the program, we'll make sure to help you as soon as possible. You can either drop us a mail, or use the <a href="https://github.com/Tijndagamer/C-Mail/issues">integrated bug tracker on GitHub</a>. As it makes the whole job a lot easier for us developers we would like if you could report all the bugs using the bug tracker on GitHub, but if you don't have an acc. or similar you can drop us a mail (<em>Please see the contact page for more information</em>). As we are no C# gurus (<em>yet</em>) we can't help you with all your problems, and that is why we need to help each other.</p>
                </div>
                <div class="col-xs-3 clearfix visible-xs">
                	<img src="img/desc2.png" alt="Lipsum" class="img-responsive img-circle detail-img">
                </div>
            </div><hr>
            <div class="row">
            	<div class="col-xs-9">
                	<h3>Want to join in?</h3>
                	<p>Are you looking for other young people that shares your interest in programming? Well this is your chance. We are looking for young developers that will work on projects and at the same time increase their skill in programming. As of right now we're not developing any products other than C-Mail, we do not have any deadlines or similar since both of us attend to school and have limited time. If you are interested in working with us or just want to chat, please <a href="mailto:fredrik@mrmadsenmalmo.com">send us an email</a> or find us on IRC (<em>#mnfh</em> or <em>#brackets</em>).</p>
                </div>
                <div class="col-xs-3 clearfix">
                	<img src="img/desc3.png" alt="Lipsum" class="img-responsive img-circle detail-img">
                </div>
            </div>
        </div>
        
        <!-- Footer -->
    	<div class="footer">
    		<hr>
    		<div class="container">
    		    <div class="row">
    		        <div class="col-sm-4 hidden-xs">
    		            <h4>Fork the website on GitHub <br>and make it your own</h4>
    		            <p>Did you find something you don't like? Go ahead an fork it on GitHub and make it your own!</p>
    		            <button type="button"><a href="https://github.com/FredrikAugust/C-Mail-Website/fork"><img class="forkicon" src="img/fork.png">Fork on GitHub</a></button>
    		        </div>
    		        <div class="col-sm-4">
    		            <h4>Stay connected with MrMadsenMalmo</h4>
    		            <p>Always be the first to recieve updates on project and other things. You can also chat with me if you need help.</p>
    		            <div class="icons">
    		                <a href="https://dribbble.com/MrMadsenMalmo"><img src="img/dribbble.png"></a>
    		                <a href="https://facebook.com/fredrik.madsenmalmo"><img src="img/facebook.png"></a>
    		                <a href="https://plus.google.com/+FredrikAugustMadsenMalmo"><img src="img/g+.png"></a>
    		                <a href="https://github.com/FredrikAugust"><img src="img/Github.png"></a>
    		                <a href="http://twitter.com/MrMadsenMalmo"><img src="img/twitter.png"></a>
    		            </div>
    		        </div>
    		        <div class="col-sm-4 hidden-xs">
    		            <h4>Short description of <br>the project</h4>
    		            <p>This website is dedicated to the program C-Mail made by my good friend MrTijn. <a href="https://github.com/Tijndagamer">Follow him on GitHub</a> to recieve the latest updates.</p>
    		            <button type="button"><a href="about.html">Read More</a></button>
    		        </div>
    		    </div>
    		</div>
    	</div>
    	
    	<!-- Scripts -->
    	<script src="script/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="script/bootstrap.min.js" type="text/javascript"></script>
        <script src="script/script.js" type="text/javascript"></script>
	</body>
</html>
