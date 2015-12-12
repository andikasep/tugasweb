<?php

	// This script performs an INSERT query to add a record to the users table.
	$page_title = 'Biodata';
	include ('includes/header.html');
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$errors = array(); // Initialize an error array.

	
	if (empty($_POST['nama'])) {
	$errors[] = 'You forgot to enter your name.';
	} else {
	$n = trim($_POST['nama']);
	}
	
	if (empty($_POST['email'])) {
	$errors[] = 'You forgot to enter your email.';
	} else {
	$e = trim($_POST['email']);
	}

	if (empty($_POST['tanggal_lahir'])) {
	$errors[] = 'You forgot to enter your born.';
	} else {
	$tl = trim($_POST['tanggal_lahir']);
	}
	
	if (empty($_POST['agama'])) {
	$errors[] = 'You forgot to enter your religion.';
	} else {
	$agama = trim($_POST['agama']);
	}
	
	if (empty($_POST['jenis_kelamain'])) {
	$errors[] = 'You forgot to enter your gender.';
	} else {
	$jk = trim($_POST['jenis_kelamain']);
	}

	if (empty($_POST['alamat'])) {
	$errors[] = 'You forgot to enter your address.';
	} else {
	$al = trim($_POST['alamat']);
	}

	if (empty($_POST['no_hp'])) {
	$errors[] = 'You forgot to enter your phone number.';
	} else {
	$nh = trim($_POST['no_hp']);
	}

	if (empty($errors)) { // If everything's OK.

	// Register the user in the database...
	//require ('../mysqli_connect.php'); // Connect to the db.
	$Koneksi = mysql_connect("localhost","root","");
	mysql_select_db("tugas_uas", $Koneksi);
	// Make the query:
	mysql_query("INSERT INTO tugas_uas.biodata(nama,". "email, tanggal_lahir, agama, jenis_kelamin, alamat, no_hp)". 
	"values ('$n','$e','$tl','$agama','$jk','$al','$nh' )");
	$r = mysql_query ("SELECT * FROM biodata"); // Run the query.
	if ($r) { // If it ran OK.

	// Print a message:
	echo '<h1>Thank you!</h1>
	<p>You has registered !</p><p><br /></p>
	<p>Untuk selanjutnya silahkan anda mengisi Form Pendidikan !</p><p><br /></p>
	<p>Dengan cara memilih menu Pendidikan </p><p><br /></p>';
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
	<h1>Fill the following form</h1>
<form action="prosesbiodata.php" method="post">
	<p>Nama : <input type="text" name="nama" size="15" maxlength="20" value="<?php if (isset($_POST['nama'])) echo $_POST['nama']; ?>" /></p>
	<p>Email : <input type="text" name="email" size="15" maxlength="20" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" /></p>
	
	<p>Tanggal Lahir:     	
	&nbsp;&nbsp;&nbsp;                                 					  
<select class="select" name="tanggal" required>                  
<option value="" selected>--Tanggal--                     
<?php                  
for($x=1;$x<=31;$x++)                         
{                            
echo "<option value=$x>$x";                          
}                      
?>                    
</option>                  
</select>
                  
&nbsp;&nbsp;&nbsp;                 
<select class="select" name="bulan" required>                    
<option value="" selected>--Bulan--                     
<?php                       
for($x=1;$x<=12;$x++)                         
{                           
echo "<option value=$x>$x";                          
}                  
?>                    
</option>                  
</select>
 
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
</p>

<p>Agama: <select class="select" name="agama">                  
<option value="" selected>--Agama--                   
<?php                    
 $agama=array("Islam","Kristen","Hindu","Budha","Lainnya...");                      
for($x=0;$x<=4;$x++)                    
{                        
echo "<option value=$agama[$x]>$agama[$x]";                     
}                  
?>                  
</option>                
</select>
</p>

	<p>Jenis Kelamin: <input class="radio" name="jenis_kelamin" type="radio" value="pria" required>Pria</input>&nbsp;&nbsp; 
<input class="radio" name="jenis_kelamin" type="radio" value="wanita" required>Wanita</input><?php if (isset($_POST['alamat'])) echo $_POST['alamat']; ?></p>
	<p>Alamat: <textarea id="alamat" name="alamat" required></textarea> <?php if (isset($_POST['alamat'])) echo $_POST['alamat']; ?> </p>
	<p>No HP: <input type="integer" name="no_hp" size="12" maxlength="20" value="<?php if (isset($_POST['no_hp'])) echo $_POST['no_hp']; ?>" /></p>
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