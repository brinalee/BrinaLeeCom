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
							<form>
								<ul>
								<label>First name</label><br/>
								<input type="text" name="firstname" placeholder="John" required autofocus/><br/><br/>
								<label>Last name</label><br/>
								<input type="text" name="lastname" placeholder="Doe" required autofocus/><br/><br/>
								<label>Email</label><br/>
								<input type="text" name="email" placeholder="example@example.com" required autofocus/><br/><br/>
								<label>Reason</label><br/>
								<select required autofocus>
									<option>Please select one...</option>
								</select><br/><br/>
								<label>Comments</label><br/>
								<textarea rows="8" columns="1" name="comments" placeholder="Write any additional information here." required autofocus></textarea><br/><br/>
								<input class="button" type="submit" value="Submit"/>
							</form>
						</article>
					</div>
				</section>
				
<?php
	include("footer.php");
?>