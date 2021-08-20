<?php
//connect to my server
$conn = mysqli_connect('remotemysql.com','qXY9ubiY6y','5Z4PoW6Jm9','qXY9ubiY6y');
if (!$conn) {
  echo 'Error in connection to host'. mysqli_connect_error($conn);
}

$name = $email = $subject = $message = '';
	$errors = array('name' => '', 'email' => '', 'subject' => '','message' => '');

	if(isset($_POST['submit'])){
	  $name = $_POST['name'];
	  $email = $_POST['email'];
	  $subject = $_POST['subject'];
	  $message = $_POST['message'];
	  	  		// check name
		if(empty($_POST['name'])){
			$errors['name'] = '* A name is required';
		} else{
			$name = $_POST['name'];
			if(!preg_match('/^[A-Za-z\s]+$/', $name)){
				$errors['name'] = '* Name must be letters  only';
			}
		}
		
		// check email
		if(empty($_POST['email'])){
			$errors['email'] = '* An email is required';
		} else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = '* Email must be a valid email address';
			}
		}
  	  		// check subject
		if(empty($_POST['subject'])){
			$errors['subject'] = '* A subject is required';
		} else{
			$subject = $_POST['subject'];
			if(!preg_match('/^[A-Za-z0-9\s]+$/', $subject)){
				$errors['subject'] = '* subject must be letters  only';
			}
		}
		  	  		// check name
		if(empty($_POST['message'])){
			$errors['message'] = '* A message is required';
		} else{
			$message = $_POST['message'];
			if(!preg_match('/^[A-Za-z0-9\s]+$/', $message)){
				$errors['message'] = '* Message must be letters  only';
			}
		}
		

		
if (array_filter($errors)) {
  
}else{
	  
	  
	  
	  

    
  
    
    
	  
	  $sql = "INSERT INTO `resume`(`name`,`email`,`subject`,`message`)VALUES('$name','$email','$subject','$message')";
	  


    $query= mysqli_query($conn, $sql);
   
    if ($query) {
      
      
      // $_SESSION['user'] = $name;
        header('Location: form.php');
    } else {
        echo '<p>Your form was not submitted!!!</p>';
    }
}
}









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
	  <nav>
	    <a href="#profile">Profile</a> 
	        <a href="#skills">Skills</a> 
	            <a href="#education">Education</a> 
	                <a href="#experience">Experience</a> 
	                    <a href="#contact">Contact</a> 
	  </nav>
		<header class="clearfix">
			<div id="info">			
				<h1><span itemprop="name">Omotola Moses-Fadulu</span></h1>
				<h3><span itemprop="jobTitle">Web Developer </span></h3>
			
				<small><span itemprop="email">mikealomotola@gmail.com</span></small>
				<small><a href="http://teeportfolio.epizy.com" itemprop="url">My Portfolio</a> &bull; <a href="https://www.linkedin.com/in/moses-fadulu-omotola-08a794177" itemprop="url">Moses-Fadulu Omotola</a></small>
			</div>
			
			<div id="photo">
				<img src="omotola.jpg" alt="Omotola Moses-Fadulu resume photo avatar" itemprop="image" />
			</div>
		</header>
		
		<section id="profile">
			<h2>  Profile</h2>
			<p itemprop="description">I am a web developer who focuses on the backend. I have quite a robust knowledge on PHP(core functions). I'm also a frontend developer. Problem solving is my forte. I am a Mathematician and possess good understanding of soft skills.</p>
			
			<p>I am currently doing my internship at <a href="https://internship.zuri.team">  Zuri Internship</a> a remote internship firm</p>
		</section>
		
		<section id="skills" class="clearfix" itemscope itemtype="http://schema.org/ItemList">
			<h2 itemprop="name">Skills</h2>
			<section id="skills-left">
				<h4 itemprop="about">Development</h4>
				<ul>
					<li itemprop="itemListElement">HTML5/CSS3</li>
					<li itemprop="itemListElement">JavaScript &amp; Bootstrap</li>
					<li itemprop="itemListElement">PHP Backend</li>
					<li itemprop="itemListElement">SQL Databases</li>
			
				</ul>
			</section>
			
			<section id="skills-right">
				<h4 itemprop="about">Software</h4>
				<ul>
					<li itemprop="itemListElement">MS365</li>
					
					<li itemprop="itemListElement">MS Office 2007-2010</li>
					<li itemprop="itemListElement">cPanel &amp; phpMyAdmin</li>
					<li itemprop="itemListElement">Visual Studio Code</li>
				</ul>
			</section>
		</section>
		
		<section id="education">
			<h2>Education</h2>
			<p><span itemprop="alumniOf">Web Design and Development
</span> Linar School of Media and ICT</p>
		</section>
		
		<section id="experience">
			<h2>Work Experience</h2>
			<p>Backend Development Intern- Pixie Technologies</p>
			<p>Web Design and Development (Backend) - Intern  Freelance Writer for <span itemprop="worksFor">
			Side Hustle Internship</span> ~June 2021-July 2021</p>
			
		</section>
		
		<section id="contact">
		  <h2>Contact Form</h2>
	<form action="" method="POST" accept-charset="utf-8">
	  <input type="text" name="name" id="name" value="<?php echo htmlspecialchars ($name) ?>" placeholder="Enter your name" />
	  <div>
	    <?php echo $errors['name'];?>
	  </div>
	  <br /> 	  <br />
	  	  <input type="email" name="email" id="email" value="<?php echo htmlspecialchars ($email) ?>" placeholder="Enter your email" />
	  	    <div>
	    <?php echo $errors['email'];?>
	  </div>
	  	  <br /> 	  <br />
	  	  	  <input type="text" name="subject" id="sub" value="<?php echo htmlspecialchars ($subject) ?>" placeholder="Enter the subject of your message" />
	  	  	    <div>
	    <?php echo $errors['subject'];?>
	  </div>
	  	  	  <br /> 	 <br />
	  	  	  <textarea name="message" id= rows="8" value="<?php echo htmlspecialchars ($message) ?>" placeholder="Enter your message" cols="30"></textarea>
	  	  	    <div>
	    <?php echo $errors['message'];?>
	  </div>
	  	  	  <button type="submit" name="submit">Submit</button>
	</form>
		</section>

	</div>
</body>
</html>
