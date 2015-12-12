<?php

	// This script performs an INSERT query to add a record to the users table.
	$page_title = 'Pengalaman Kerja';
	include ('includes/header.html');

	// Check for form submission:
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$errors = array(); // Initialize an error array.

	
	if (empty($_POST['nama'])) {
	$errors[] = 'You forgot to enter your name.';
	} else {
	$n = trim($_POST['nama']);
	}
	
	if (empty($_POST['perusahaan'])) {
	$errors[] = 'You forgot to enter your office.';
	} else {
	$p = trim($_POST['perusahaan']);
	}

	if (empty($_POST['jabatan'])) {
	$errors[] = 'You forgot to enter your position.';
	} else {
	$j = trim($_POST['jabatan']);
	}

	// Check for an email address:
	if (empty($_POST['tahun'])) {
	$errors[] = 'You forgot to enter your periode.';
	} else {
	$t = trim($_POST['tahun']);
	}
	
	if (empty($errors)) { // If everything's OK.

	// Register the user in the database...
	//require ('../mysqli_connect.php'); // Connect to the db.
	$Koneksi = mysql_connect("localhost","root","");
	
	mysql_select_db("tugas_uas", $Koneksi);
	// Make the query:
	mysql_query("INSERT INTO tugas_uas.pekerjaan(nama,"."perusahaan, jabatan, tahun)". 
	"values ('$n','$p', '$j', '$t')");
	$r = mysql_query ("SELECT * FROM pekerjaan"); // Run the query.
	if ($r) { // If it ran OK.

	// Print a message:
	echo '<h1>Thank you!</h1>
	<p> You has been successed !</p><p><br /></p>
	<p>Thank you for the following  </p><p><br /></p>';
	} else { // If it did not run OK.

	// Public message:
	echo '<h1>System Error</h1>
	<p class="error">You could not be registered due to a system error. '.
	'We apologize for any inconvenience.</p>';

	// Debugging message:
	//echo '<p>' mysql_error($Koneksi);
	} // End of if ($r) IF.
	mysql_close($Koneksi); // Close the database connection.

	// Include the footer and quit the script:
	include ('includes/footer.html');
	exit();
	} else { // Report the errors.
	echo '<h1>Error!</h1>
	<p class="error">The following error(s) occurred:<br />';
	}
	foreach ($errors as $msg) { // Print each error.
	echo " - $msg<br />\n";
	}

	echo '</p><p>Please try again.</p><p><br /></p>';
	 }// End of if (empty($errors)) IF.
	 // End of the main Submit conditional.
	?>
	<h1>Isikan Data Pekerjaan Terakhir Anda</h1>
	<form action="prosespekerjaan.php" method="post">
	<p>Nama : <input type="text" name="nama" size="25" maxlength="20" value="<?php if (isset($_POST['nama'])) echo $_POST['nama']; ?>" /></p>
	<p>Nama Perusahaan : <input type="text" name="perusahaan" size="25" maxlength="25" value="<?php if (isset($_POST['perusahaan'])) echo $_POST['perusahaan']; ?>" /></p>
	<p>Jabatan: <input type="text" name="jabatan" size="30" maxlength="40" value="<?php if (isset($_POST['jabatan'])) echo $_POST['jabatan']; ?>" />
	&nbsp;&nbsp;&nbsp;                  
	<select class="select" name="tahun" required>                   
	<option value="" selected>--Tahun--                      
	<?php                        
	$date=date('Y');                       
	$tahun_awal=$date-40;                        
	for($x=$tahun_awal;$x<=$date;$x++)                          
	{                           
	echo "<option value=$x>$x";                         
	}
	?>                   
	</option>                
	</select>
	</p></p>
	<p>
	&nbsp;&nbsp;
	<input type="submit" name="submit" value="Submit" />
	&nbsp;&nbsp;
	<input type="reset" name="button"  id="button4"  value="Reset"/>
	</p>
	</form>
	<?php 
	include ('includes/footer.html');
	?>