<?
$to = "stephanie_walker@live.com";
$subject = "Contact Form";
$message = $_REQUEST['Comment'];
$from = $_REQUEST['Name'];
$number_one = $_REQUEST['Phone1'];
$number_two = $_REQUEST['Phone2'];
$number_three = $_REQUEST['Phone3'];
$email = $_REQUEST['Email'];
$item = $_REQUEST['Subject'];

$message= "<html>
	<body>
		<table cellspacing='0' cellpadding='10' width='600'>
			<tr>
				<td colspan='2'><h1 style='color: #000'>Contact Form</h1></td>
			</tr>
			<tr bgcolor='#ddd'>
				<td>Name:</td>
				<td>" . $from . "</td>
			</tr>
			<tr>
				<td>Email:</td>
				<td>" .$email . "</td>
			</tr>
			<tr bgcolor='#ddd'>
				<td>Phone Number:</td>
				<td>" . $number_one . "-" . $number_two . "-" . $number_three . "</td>
			</tr>
			<tr>
				<td>Subject:</td>
				<td>" . $item . "</td>
			</tr>
			<tr bgcolor='#ddd'>
				<td>Comments:</td>
				<td>" . $message . "</td>
			</tr>
		</table>
	</body>
</html>";

    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/html; charset=ISO-8859-1\r\n"; 

mail($to, $subject, $message, $headers, $from);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SWD - Contact</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="header">
    	<div class="logo">
        	<h4>Stephanie Walker Design</h4>
        </div>
        <div class="search">
        	<!-- Search Bar Code -->
            	<a href="http://facebook.com/SWalkerDesign" target="_blank" alt="Facebook"><img src="icons/facebook1.png" /></a>
                <a href="http://twitter.com/StephReneeW" target="_blank" alt="Twitter"><img src="icons/twitter1.png" /></a>
                <a href="http://www.linkedin.com/pub/stephanie-walker/50/881/929" target="_blank" alt="LinkedIn"><img src="icons/linkedin1.png" /></a>
                <a href="http://jabberbox94.deviantart.com/" target="_blank" alt="Deviantart"><img src="icons/deviantart1.png" /></a>
                <a href="http://www.flickr.com/photos/stephwalker" target="_blank" alt="Flickr"><img src="icons/flickr1.png" /></a>
        </div>
    </div>
    <div class="navigation">
    	<ul>
        	<li><a href="index.html" alt="Home">Home</a></li>
        	<li><a href="news.html" alt="News">News</a></li>
        	<li><a href="about.html" alt="About Index">About</a></li>
        	<li><a href="services.html" alt="Service Index">Services</a></li>
        	<li><a href="portfolio.html" alt="Portfolio">Portfolio</a></li>
        	<li><a href="contact.html" alt="Contact">Contact</a></li>
        </ul>
    </div>
    <div class="content">
    	<h1>Contact Me</h1>
    	<p>Thank you! Your form has been sent!</p>
    </div>
    <div class="core_holder" style="background-color: #34b4ff;">
    	<div class="content">
    		<div class="core">
        		<h2>Experience</h2>
            	<p>Experience and knowledge are important. I have been designing and coding for five years and still counting. I have worked with various companies to design and develop unique and effective websites, emails, flyers, logos, postcards, and much more. Every customer wants to know that the designer they are hiring has experience and knowlege of their field.</p>
        	</div>
        	<div class="core">
        		<h2>Quality</h2>
            	<p>I take pride in my work. I wouldn't want to pay for something I don't like, and I don't want you to feel that way either. I work with you to create a design that suits your needs, making sure that nothing is less than perfect. I want my clients to be happy with my designs and I am devoted to working until I can be certain you're satisified with your purchase.</p>
        	</div>
        	<div class="core">
        		<h2>Affordable</h2>
            	<p>As a student, building clientel is the most challenging task to tackle. My services provide quality work, at an unbeatable price. Matching quality and affordability is the key to maintaining and gaining happy customers that will return for updates and additonal work, or even refer friends. Being a student, I am glad to negotiate prices with you so that it's a win-win situation in every case.</p>
        	</div>
        	<div class="core">
        		<h2>Exclusive</h2>
            	<p>Templates are boring and ugly, which is why I build everything from scratch. I make sure that all my designs are unique to you and your business to help you gain customers and reputation. Nobody wants to see the same website over and over.</p>
        	</div>
        </div>
    </div>
    <div class="core_holder" style="background-color: #eeeeee;">
    	<div class="sitemap">
    		<div class="core">
        		<ul>
            		<li><a href="http://facebook.com/SWalkerDesign" target="_blank" alt="Facebook">Facebook</a></li>
                	<li><a href="http://twitter.com/StephReneeW" target="_blank" alt="Twitter">Twitter</a></li>
                	<li><a href="http://www.linkedin.com/pub/stephanie-walker/50/881/929" target="_blank" alt="LinkedIn">LinkedIn</a></li>
            	</ul>
        	</div>
        	<div class="core">
        		<ul>
                	<li><a href="http://jabberbox94.deviantart.com/" target="_blank" alt="Deviantart">Deviantart</a></li>
                	<li><a href="http://www.flickr.com/photos/stephwalker" target="_blank" alt="Flickr">Flickr</a></li>
            		<li><a href="index.html" alt="Home">Home</a></li>
            	</ul>
        	</div>
        	<div class="core">
        		<ul>
            	    <li><a href="news.html" alt="News">News</a></li>
                    <li><a href="http://swdblog.tumblr.com" target="_blank" alt="Blog">Blog</a></li>
         			<li><a href="about.html" alt="About">About</a></li>
            	</ul>
        	</div>
        	<div class="core">
        		<ul>
                	<li><a href="resume.html" alt="Resume">Resume</a></li>
                	<li><a href="services.html" alt="Services">Services</a></li>
            		<li><a href="portfolio.html" alt="Portfolio">Portfolio</a></li>
            	</ul>
        	</div>
    	</div>
    </div>
    <div class="footer">
    	<p>Copyright &copy; 2013 Stephanie Walker</p>
    </div>
    
    <!-- Canvas Scripting -->
	<script type="text/javascript">
		var c=document.getElementById("myCanvas");
		var ctx=c.getContext("2d");
		var img=new Image();
		img.onload = function(){
			ctx.scale(.37,.37);
			ctx.drawImage(img,-350,-550);
		};
		img.src="images/DSC_0685-2.jpg";
	</script>
</body>
</html>
