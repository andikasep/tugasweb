<?php

	// This script performs an INSERT query to add a record to the users table.
	$page_title = 'Riwayat Pendidikan';
	include ('includes/header.html');

	// Check for form submission:
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$errors = array(); // Initialize an error array.

	// Check for a first name:
	if (empty($_POST['nama'])) {
	$errors[] = 'You forgot to enter your name.';
	} else {
	$n = trim($_POST['nama']);
	}
	
	if (empty($_POST['sd'])) {
	$errors[] = 'You forgot to enter your elementary school .';
	} else {
	$sd = trim($_POST['sd']);
	}
	
	if (empty($_POST['periode_sd'])) {
	$errors[] = 'You forgot to enter your periode.';
	} else {
	$psd = trim($_POST['periode_sd']);
	}

	// Check for a last name:
	if (empty($_POST['smp'])) {
	$errors[] = 'You forgot to enter your junior high school.';
	} else {
	$smp = trim($_POST['smp']);
	}
	
	if (empty($_POST['periode_smp'])) {
	$errors[] = 'You forgot to enter your periode.';
	} else {
	$psmp = trim($_POST['periode_smp']);
	}

	// Check for an email address:
	if (empty($_POST['sma'])) {
	$errors[] = 'You forgot to enter your senior high school.';
	} else {
	$sma = trim($_POST['sma']);
	}
	
	if (empty($_POST['periode_sma'])) {
	$errors[] = 'You forgot to enter your periode.';
	} else {
	$psma = trim($_POST['periode_sma']);
	}
	
	if (empty($_POST['perguruan_tinggi'])) {
	$errors[] = 'You forgot to enter your college.';
	} else {
	$pt = trim($_POST['perguruan_tinggi']);
	}
	
	if (empty($_POST['periode_pt'])) {
	$errors[] = 'You forgot to enter your periode.';
	} else {
	$ppt = trim($_POST['periode_pt']);
	}
	
	if (empty($errors)) { // If everything's OK.

	// Register the user in the database...
	//require ('../mysqli_connect.php'); // Connect to the db.
	$Koneksi = mysql_connect("localhost","root","");
	
	mysql_select_db("tugas_uas", $Koneksi);
	// Make the query:
	mysql_query("INSERT INTO tugas_uas.pendidikan(nama,"."sd,periode_sd, smp, periode_smp, sma, periode_sma,perguruan_tinggi, periode_pt)". 
	"values ('$n','$sd','$psd', '$smp','$psmp', '$sma','$psma','$pt','$ppt' )");
	$r = mysql_query ("SELECT * FROM pendidikan"); // Run the query.
	if ($r) { // If it ran OK.

	// Print a message:
	echo '<h1>Thank you!</h1>
	<p> Anda berhasil melakukan pengisian Riwayat Pendidikan !</p><p><br /></p>
	<p>Untuk selanjutnya silahkan anda mengisi Form Pekerjaan !</p><p><br /></p>
	<p>Dengan cara memilih menu Pekerjaan </p><p><br /></p>';
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
<h1>Riwayat Pendidikan</h1> 
<form action="prosespendidikan.php" method="post">
<p>Nama : <input type="text" name="nama" size="15" maxlength="20" 
value="<?php if (isset($_POST['nama'])) echo $_POST['nama']; ?>" />

<p><font size="4">Pendidikan SD</font></p> 
<p>Nama Sekolah: <input type="text" name="sd" size="15" maxlength="20" 
value="<?php if (isset($_POST['sd'])) echo $_POST['sd']; ?>" />
&nbsp;&nbsp;&nbsp;                 
<select class="select" name="tahun_masuk" required>
<option value="" selected>--Tahun masuk--
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
&nbsp;&nbsp;&nbsp;
<select class="select" name="tahun_lulus" required>
<option value="" selected>--Tahun lulus--
<?php
$date=date('Y');
$tahun_akhir=$date-40;
for($x=$tahun_awal;$x<=$date;$x++)
{
 echo "<option value=$x>$x";
}
?>
</option>
                  </select>
</p> 
<p><font size="4">Pendidikan SMP</font></p>
<p>Nama Sekolah: <input type="text" name="smp" size="15" maxlength="40" 
value="<?php if (isset($_POST['smp'])) echo $_POST['smp']; ?>" />
&nbsp;&nbsp;&nbsp;                  
<select class="select" name="tahun_msk" required>
                   
<option value="" selected>--Tahun masuk--
                      
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

 

&nbsp;&nbsp;&nbsp;

                  
<select class="select" name="tahun_lls" required>
                   
<option value="" selected>--Tahun lulus--
                      
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
<p><font size="4">Pendidikan SMA/MK</font></p>
<p>Nama Sekolah: <input type="text" name="sma" size="15" maxlength="60" 
value="<?php if (isset($_POST['sma'])) echo $_POST['sma']; ?>" /> 
&nbsp;&nbsp;&nbsp;

                  
<select class="select" name="thmasuk" required>
                   
<option value="" selected>--Tahun masuk--
                      
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

 

&nbsp;&nbsp;&nbsp;

                  
<select class="select" name="thlulus" required>
                   
<option value="" selected>--Tahun lulus--
                      
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

<p><font size="4">Perguruan Tinggi</font></p>
<p>Nama Perguruan Tinggi: <input type="text" name="perguruan_tinggi" size="15" maxlength="60" 
value="<?php if (isset($_POST['perguruan_tinggi'])) echo $_POST['perguruan_tinggi']; ?>" /> 
&nbsp;&nbsp;&nbsp;

                  
<select class="select" name="tmasuk" required>
                   
<option value="" selected>--Tahun masuk--
                      
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

 

&nbsp;&nbsp;&nbsp;

                  
<select class="select" name="tlulus" required>
                   
<option value="" selected>--Tahun lulus--
                      
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
<p>
&nbsp;&nbsp;
<input type="submit" name="submit" 
value="Submit" />
&nbsp;&nbsp;
<input type="reset" name="button"  id="button4"  value="Reset"/></div></p> 
</form> 
<?php 
include ('includes/footer.html'); 
?>