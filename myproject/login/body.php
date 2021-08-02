
<!DOCTYPE html>
<html>

    <head>

	<h2 class = "hello">Hello, <?php echo $user_data['user_name']; ?> /ID: <?php echo $user_data['user_id']; ?>   </h2>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
    </head>
	
    <body background = "Images/bg.png">
        <div id="wrapper" background = "Images/photo-1600456899121-68eda5705257.jpg">
            <div id="banner"> 
  			
            </div>
            
            <nav id="navigation">
                <ul id="nav" >
				<li> </li>
                    
                    <li> <a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    
					
					<li id = "logout"><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
            
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
            <div id="sidebar">
              <img src = "Images/side.jpg">
            </div>
            
            <footer>
                <p>All rights reserved </p>
            </footer>
        </div>
    </body>
</html>
