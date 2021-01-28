<?php
if(isset($_POST['submit'])){
 if(isset($_POST['Name']) && isset($_POST['Email'])&&isset($_POST['Content'])&&isset($_POST['City'])&&isset($_POST['contact-number'])&&isset($_POST['intrest'])){
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Content=$_POST['Content'];
    $City=$_POST['City'];
    $contact_number=$_POST['contact-number'];
    $intrest=$_POST['intrest'];
  }
}
else{
$Name="none";
 $Email="none";
 $Content="none";
 $City="none";
 $contact_number="none";
 $intrest="none";
}
?>
<html>
<head>
	<title>hello everybody</title>
</head>
<body><h1>Student table</h1>
	<form method="POST" action="abc.php">
		Name <input type="text" name="Name" required="">
		<br>
		Email <input type="email" name="Email" required="">
		<br>
		Course <input type="text" name="Content" required="">
		<br>
		City <input type="text" name="City" required="">
		<br>
		Contact-Number <input type="text" name="contact-number" required="" maxlength="10">
		<br>
		Interest:
		<br>
		game <input type="checkbox" value="Volleyball" name="intrest">
		<br>
        song <input type="checkbox" value="music" name="intrest">
        <br>
        books <input type="checkbox" value="reading books" name="intrest">
        <br>
        games <input type="checkbox" value="indoor games" name="intrest"><br>
		<br>
		<input type="submit" value="submit" name="submit"><div style="align-self: center;">
		<table border=1px; style = "border-collapse:collapse">
              <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Course</th>
                  <th>City</th>
                  <th>Contact-Number</th>
                  <th>Intrest</th>
              </tr>
              <tr>
              	<td><?php echo "$Name" ?></td>
              	<td><?php echo "$Email" ?></td>
              	<td><?php echo "$Content" ?></td>
              	<td><?php echo "$City" ?></td>
              	<td><?php echo "$contact_number" ?></td>
              	<td><?php echo "$intrest" ?></td>
              </tr>
          </table></div>
	</form>
</body>
</html>
