<?php
//connect to my server
$conn = mysqli_connect('remotemysql.com','qXY9ubiY6y','5Z4PoW6Jm9','qXY9ubiY6y');
if (!$conn) {
  echo 'Error in connection to host'. mysqli_connect_error($conn);
}



//session_start();
//$_SESSION['user'] = $name;


?>

<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Omotola Moses-Fadulu Resume</title>
  <meta name="author" content="Omotola Moses-Fadulu">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
  <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Simonetta:400,900|Balthazar">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="responsive.css">
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
</head>

<body>
	<div id="w" itemscope itemtype="http://schema.org/Person">

		<header class="clearfix">
			<div id="info">			
				<h1><span itemprop="name">Thanks for contacting us! <?php  $name;?>
				
				</span></h1>
				<h3><span itemprop="jobTitle">We would get back to you shortly </span></h3>
			
		
		</header>
	
	
	
	
	</body>
</html>
