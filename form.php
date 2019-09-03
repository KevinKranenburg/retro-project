
<!DOCTYPE html>

<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

<header>
		<h2><a href="index.php">Home</a></h2>
		<nav class="top-nav">
			<ul>
				<li><a href="winkel.php">Winkelmand</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>

	<body>

<div class="container3">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lname">Address</label>
    <input type="text" id="lname" name="lastname" placeholder="Your Address..">

    <label for="lname">Phone number</label>
    <input type="text" id="lname" name="lastname" placeholder="Your Phone number..">

    <label for="lname">Email</label>
    <input type="text" id="lname" name="lastname" placeholder="Your Phone Email..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="nl">Netherlands</option>
      <option value="canada">ik wil weekend help me</option>
    </select>

    <label for="subject">Question</label>
    <textarea id="subject" name="subject" placeholder="Do you have a question about your order?.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

	</body>

	<footer>
			<p>Copyright &copy; 2019 Gijs Huitenga en Kevin Kranenburg.</p>
		</footer>

</html>
