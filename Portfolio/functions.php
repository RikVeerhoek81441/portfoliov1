<?php
function htmlhead(){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/homestyle.css">
    <!-- icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- favicon -->
    <link rel="icon" href="favicon.png" sizes="32x32" type="image/png">
    <!-- title -->
    <title>My portfolio</title>

    </head>
<?php
}

function navbar(){

  $menuItems = array
	(
		"index.php" => array
		(
			"menuName"	=> "Home",
			"menuTitle"	=> "Go to home page",
		),
		"admin.php" => array
		(
			"menuName"	=> "Admin",
			"menuTitle"	=> "Go to admin page",
		),
		"projects.php" => array
		(
			"menuName"	=> "Projects",
			"menuTitle"	=> "Go to projects page",
		),
		"about.php" => array
		(
			"menuName"	=> "About Me, Myself & I",
			"menuTitle"	=> "Info!",
		),
		"contact.php" => array
		(
			"menuName"	=> "Contact Me",
			"menuTitle"	=> "Contact me",
		),
	);
	?>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
			<a class="navbar-brand" href="index.php"><img src="img/me.jpg"/></a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	      	<?php
	      	foreach($menuItems as $key => $value)
	      	{
	      		if(currentScriptName() == $key)
	      		{
					$activeItem = "active";
				}
				else
				{
					$activeItem = "";
				}
			  	?>
			  	<li class="<?php echo $activeItem; ?>"><a href="<?php echo $key; ?>" title="<?php echo $value['menuTitle']; ?>"><?php echo $value['menuName']; ?></a></li>
			  	<?php
			}
			  ?>
	      	
	      	
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#" target="_blank">My Facebook</a></li>
	        <li><a href="#" target="_blank">My LinkedIn</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<?php	

}
?>