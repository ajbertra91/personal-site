<?php
	/* set email recipient */
	$mailto = "ajbertra91@gmail.com";
	
	/* Check all form inputs using check_input function */
	$firstName = check_input($_POST['firstName'], "Enter your first name!") ;
	$lastName = check_input($_POST['lastName'], "Enter your last name!") ;
	$email = check_input($_POST['email'], "Enter your email address!") ;
	$subject = check_input($_POST['subject'], "Enter a subject!") ;
	$message = check_input($_POST['message'], "Enter a message!") ;
	$spam = check_input($_POST['spam'], "Enter the security code!") ;
	$name = $firstName . $lastName;
	
	/* If e-mail is not valid show error message */
	if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
	{
		show_error("Your e-mail address is not valid!");
	}
	
	/* Check for valid security code */
	If (strtolower($_POST['spam']) != '56728') 
	{
		die('Wrong security code!');
	}
	
	/* Send the message using mail() function */
	mail( $mailto, $subject, $message, "From: $name <$email>" );
	
	/* Redirect visitor to the thank you page */
	header( "Location: http://www.adam-bertrand.com/thankYou.html" );
	exit();
	
	/* Functions we used */
	function check_input($data, $problem='')
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		if ($problem && strlen($data) == 0)
		{
			show_error($problem);
		}
		return $data;
	}
	
	function show_error($myError)
	{
	?>
		<html>
		
		<head>
		
		<title>Error</title>
		
		<link rel="stylesheet" href="./style.css" type="text/css" media="screen" />
		
		</head>
		
			<body>
			<div id="container">
				<div id="header">
					<h1><a href="/" title="Go Home">Adam Bertrand</a></h1>
				</div>
				<div id="menu">
				<ul>
					<li id="about"><a href="about.html">about</a></li>
					<li id="portfolio"><a href="portfolio.html">portfolio</a></li>
					<li id="contact"><a href="contact.html">contact</a></li>
				</ul>
				</div>
				<div id="main">
					<div id="sidebar">
					</div>
					<div id="content">
						<h2 class="home">ERROR!</h2>
						<h3 class="home">
							Please correct the following error:
							<?php echo $myError; ?>
						</h3>
					</div>
				</div>
				<div id="footer">
					<p class="footer">&copy; 2010 Adam Bertrand. All rights reserved.</p>
					<ul id="sn">
						<li><a id="linkedin" title="Linkedin" target="_blank" href="http://www.linkedin.com/in/adambertrand"></a></li>
						<li><a id="facebook" title="Facebook" target="_blank" href="http://www.facebook.com/adam.bertrand1"></a></li>
						<li><a id="twitter" title="Twitter" target="_blank" href="http://twitter.com/ajbertra91"></a></li>
					</ul>
					<div class="clear"></div>
				</div>
			</div>
			</body>
		</html>
	<?php
	exit();
	}
?>