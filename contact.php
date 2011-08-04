<?php
	include("header.php");
?>

				<section>
					<div id = "main-body">
						<header>
							<h1>Contact</h1>
						</header>
						<article>
							<h3>Please fill out this form and I will contact you asap.</h3>
							<form action="email_me.php" method="get">
								<ul>
								<label>First name</label><br/>
								<input type="text" name="firstname" placeholder="John" required autofocus/><br/><br/>
								<label>Last name</label><br/>
								<input type="text" name="lastname" placeholder="Doe" required/><br/><br/>
								<label>Email</label><br/>
								<input type="text" name="email" placeholder="example@example.com" required/><br/><br/>
								<label>Reason for Contacting</label><br/>
								<select name="reason" required>
									<option>Please select one...</option>
									<option>Discuss a product idea</option>
									<option>For recruiting</option>
									<option>To setup a meeting</option>
									<option>Other</option>
								</select><br/><br/>
								<label>Comments</label><br/>
								<textarea rows="8" columns="1" name="comments" placeholder="Write any additional information here." required></textarea><br/><br/>
								<input class="button" type="submit" value="Submit"/>
							</form>
						</article>
					</div>
				</section>
				
<?php
	include("footer.php");
?>