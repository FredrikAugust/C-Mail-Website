        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
              	<div class="navbar-header">
                	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
          			</button>
              		<a class="navbar-brand brand-logo pull-left" href="index.php">C-Mail</a>
              	</div>
				<div class="navbar-collapse collapse">
				  	<ul class="nav navbar-nav right-nav">
                  		<?php
                  		// Make a switch that decides which tab should be displayed as active
                            switch ($active) {
                            	
                                // Home
                                case 1:
                                    echo "<li class='active'><a href='index.php'>Home</a></li><li><a href='todo.php'>Todo</a></li><li><a href='about.php'>About</a></li><li><a href='contact.php'>Contact</a></li>";
                                    break;
                                
                                // Todo
                                case 2:
                                    echo "<li><a href='index.php'>Home</a></li><li class='active'><a href='todo.php'>Todo</a></li><li><a href='about.php'>About</a></li><li><a href='contact.php'>Contact</a></li>";
                                    break;
                                
                                // About
                                case 3:
                                    echo "<li><a href='index.php'>Home</a></li><li><a href='todo.php'>Todo</a></li><li class='active'><a href='about.php'>About</a></li><li><a href='contact.php'>Contact</a></li>";
                                    break;
                                
                                // Contact
                                case 4:
                                    echo "<li><a href='index.php'>Home</a></li><li><a href='todo.php'>Todo</a></li><li><a href='about.php'>About</a></li><li class='active'><a href='contact.php'>Contact</a></li>";
                                    break;
                            }
                        ?>
                  	</ul>
            	</div>
			</div>
		</nav>
