<!DOCTYPE html>
<script src="script.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<html>
<body>


<h1>LIGMA</h1>
<p>Welcome to the honey pot.</p>
<img src="wilderness.jpg" alt="wilderness" usemap="#wildernessmap"/>

<map name="wildernessmap">
    <area class="honey" shape="rect" coords="150,525,325,775" href="raycaster.html"  />

</map>
<form method="POST">
	<input type="text" name="contents">
	<input type="submit" name="post" id="postbutton" value="Post"/>
</form>
<?php include 'server.php'; ?>
</body>
</html>
