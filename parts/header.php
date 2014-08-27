        <!-- Header and navigation -->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
              	<div class="navbar-header">
                	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
          			</button>
              		<a class="navbar-brand brand-logo pull-left" href="index.html">C-Mail</a>
              	</div>
				<div class="navbar-collapse collapse">
				  	<ul class="nav navbar-nav right-nav">
                  		<?php
                            switch ($active) {
                                case 1:
                                    echo "<li class='active'><a href='index.html'>Home</a></li><li><a href='todo.html'>Todo</a></li><li><a href='about.html'>About</a></li><li><a href='contact.html'>Contact</a></li>";
                                    break;
                                case 2:
                                    echo "<li><a href='index.html'>Home</a></li><li class='active'><a href='todo.html'>Todo</a></li><li><a href='about.html'>About</a></li><li><a href='contact.html'>Contact</a></li>";
                                    break;
                                case 3:
                                    echo "<li><a href='index.html'>Home</a></li><li><a href='todo.html'>Todo</a></li><li class='active'><a href='about.html'>About</a></li><li><a href='contact.html'>Contact</a></li>";
                                    break;
                                case 4:
                                    echo "<li><a href='index.html'>Home</a></li><li><a href='todo.html'>Todo</a></li><li><a href='about.html'>About</a></li><li class='active'><a href='contact.html'>Contact</a></li>";
                                    break;
                            }
                        ?>
                  	</ul>
            	</div>
			</div>
		</nav>