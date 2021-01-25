<?php
    $sum=$_GET['Name'];
    $email=$_GET['Email'];
    $content=$_GET['Content'];
    $city=$_GET['City'];
    $contact_number=$_GET['contact-number']
?> 
<html>
<head>
	<title>hello everybody</title>
</head>
<body>
	<form method="get" action="abc.php">
		Name<input type="text" name="Name" required="">
		<br>
		Email<input type="email" name="Email" required="">
		<br>
		Content<input type="text" name="Content" required="">
		<br>
		City<input type="text" name="City" required="">
		<br>
		Contact-Number<input type="text" name="contact-number" required="" maxlength="10">
		<br>
		Interest:
		<br>
		game <input type="radio" value="Volleyball" name="intrest">
		<br>
        song <input type="radio" value="music" name="intrest">
        <br>
        books <input type="radio" value="reading books" name="intrest">
        <br>
        games <input type="radio" value="indoor games" name="intrest"><br>
		<br>
		<input type="submit">
		<table border=1px; style = "border-collapse:collapse">
              <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Content</th>
                  <th>City</th>
                  <th>Contact-Number</th>
              </tr>
              <tr>
              	<td><?php echo "$sum" ?></td>
              	<td><?php echo "$email" ?></td>
              	<td><?php echo "$content" ?></td>
              	<td><?php echo "$city" ?></td>
              	<td><?php echo "$contact_number" ?></td>
              </tr>
          </table>
	</form>

</body>
</html>