<?php include("header.php"); ?>

<link rel="stylesheet" type="text/css" href="css/style3.css">

	<div class="contact">
	<div class="contact-title">
		<h1></h2>
			<p></p>
			<p></p>
		<h2>We are always ready to serve you.</h2>
		<h3>Please enter your Queries below.</h3>
	</div>
	<div class="contact-form">
	<form id="contact-form" method="post"action="contactform.php">
	<input name="name" type="text" class="form-control"placeholder="YOUR NAME"required><br>
	<input name="email" type="email" class="form-control"placeholder="YOUR EMAIL"required><br>
	<textarea name="message"class="form-control"placeholder="YOUR MESSAGE"row="10"required></textarea><br>
	<input type="submit"class="form-controlsubmit"value="SEND MESSAGE">
</form>
<p></p>
<p>Call us : (+0343) 123 456 789</p>
<p></p>
<p><b>Visit Us :</b></p>
<p><b> sector5 , 10th floor ,infinite building</b></p>
<p><b>Kolkata, West bengal</b></p>
</div>

<?php include("footer.php");  ?>