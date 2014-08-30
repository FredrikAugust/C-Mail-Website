<!doctype html>
<html lang="en">
	<!-- Head -->
	<?php
        $title = "C-Mail - Todo";
        include('parts/head.php');
    ?>
	
	<body>
   	    <!-- Header -->
    	<?php 
            $active = 2;
            include('parts/header.php');
        ?>
        
        <!-- Main Content -->
        <div class="container">
            <!-- Todo -->
            <div class="row">
                <div class="col-sm-8">
                    <h1>Todo</h1><hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Application</h3><hr>
                            <ul>
                                <li><h4>Improve inbox (add more than the latest message)</h4></li>
                                <li><h4>Host the download at personal server</h4></li>
                                <li><h4>Add a custom design</h4></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <h3>Website</h3><hr>
                            <ul>
                                <li><h4>Include screenshots from the application</h4></li>
                                <li><h4>Add documentation</h4></li>
                                <li><h4>More automation</h4></li>
                                <li><h4>Add more images and colors</h4></li>
                                <li><h4>Make the website feel more alive</h4></li>
                                <li><h4>Make a custom favicon</h4></li>
                                <li><h4>Make a custom error 404 page</h4></li>
                                <li><h4>Add a blog page</h4></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Roadmap/Coming Soon -->
                <div class="col-sm-4">
                    <h1>Coming Soon</h1><hr>
                    <h3>Estimated Time of Arrival</h3>
                    <table class="table table-hover">
                        <tr>
                            <th>Feature</th>
                            <th>ETA</th>
                        </tr>
                        <tr>
                            <td>Improved inbox</td>
                            <td>24.08.2014</td>
                        </tr>
                        <tr>
                            <td>Add documentation</td>
                            <td>28.08.2014</td>
                        </tr>
                        <tr>
                            <td>More automation</td>
                            <td>30.08.2014</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h1>Anything you'd like done?</h1><hr>
                    <h3>Even us geniuses will eventually run out of ideas.</h3>
                    <p>If you can figure something you'd like implemeted, we'd really appreciate if you could tell us. And who knows? Maybe we even can do something about it. Please fork this website on GitHub (<em>see footer</em>) and edit the todo.txt - or the todo.html if you're familiar with that - and create a pull request.</p>
                    <p>But we can't do everything, so you'll have to help us out. If you come up with an idea that we can't do on our own, we'll need help. We will try as best as we can to reply to you if the feature is beyond our skill level.</p>
                    <p>We also get some bad ideas. So please - <b>I repeat, please</b> - contact us if there is a feature that you think the majority of the users wont like. This does not mean that we will remove an idea just because you don't like it.</p>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <?php
            include('parts/footer.html');
        ?>
        
        <!-- Scripts -->
        <?php
            include('parts/scripts.html');
        ?>
	</body>
</html>
