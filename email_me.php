<?php
    $to = "brina@brinalee.com";
    $subject = "Contact Information from BrinaLee.com";
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $email = $_GET['email'];
    $reason = $_GET['reason'];
    $comments = $_GET['comments'];
    $body= $firstname + $lastname + $email + $reason + $comments;
    
    if (mail($to, $subject, $body)) {
    echo("<p>Message successfully sent!</p>");
    } else {
    echo("<p>Message delivery failed...</p>");
    }
    
?>

<?php
	include("header.php");
?>

		<section>
		    <div id = "main-body">
			<header>
			    <h1>Contact</h1>
			</header>
			<article>
			    <header>
				<hgroup>
				    <h2>Thank you for contacting me.</h2>
				</hgroup>
			    </header>
			    <a href="./"><input class="button" type="submit" value="Home"/></a>
			</article>
		    </div>
		</section>

<?php
	include("footer.php");
?>
