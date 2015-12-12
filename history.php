<?php

// This script retrieves all the records from the users table. 
// This new version links to edit and delete pages.
$page_title = 'History';

include ('includes/header.html');

echo '<h1>View User</h1>';

require('mysqli_connect.php');

// Define the query:
$q = "SELECT nama, email, tanggal_lahir, agama, jenis_kelamin, alamat, no_hp AS nh, user_id FROM biodata ORDER BY user_id ASC";
$r = @mysqli_query ($dbc, $q);

// Count the number of returned rows:
$num = mysqli_num_rows($r);
if ($num > 0) { // If it ran OK, display the records.
// Print how many users there are:
echo "<p> There are currently $num registered users.</p>\n";
// Table header:
echo '<table align="center" cellspacing="10" cellpadding="10" width="100%">
<tr>
<td align ="left"><b>Edit</b></td>
<td align="left"><b>Delete</b></td>
<td align="left"><td><b>Nama</b></td></td>
<td align="left"><b>Email</b></td>
<td align="left"><b>Tanggal Lahir</b></td>
<td align="left"><b>Agama</b></td>
<td align="left"><b>Jenis Kelamin</b></td>
<td align="left"><b>Alamat</b></td>
<td align="left"><b>No.HP</b></td>
</tr>';

// Fetch and print all the records:
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))	{
	echo'<tr>
		<td align="left"><a href="edit.php?id=' . $row['user_id'].
		' ">Edit</a></td>
		<td align="left"><a href="delete_user.php?id=' . $row['user_id'].
		'">Delete</a></td>
		<td align ="left"><td>' . $row['nama'] . '</td></td>
		<td align ="left">' . $row['email'] . '</td>
		<td align="left">' . $row['tanggal_lahir'] . '</td>
		<td align ="left">' . $row['agama'] . '</td>
		<td align="left">' . $row['jenis_kelamin'] . '</td>
		<td align="left">' . $row['alamat'] . '</td>
		<td align="left">' . $row['nh'] . '</td>
		</tr>
		';
	}
	echo '</table>';
	 mysqli_free_result ($r);
	} else { // If no records were returned. 
		echo '<p class="error">There are currently no registered users.</p>';
	}
	
	// Define the query:
$q = "SELECT nama, sd, periode_sd, smp, periode_smp, sma, periode_sma, perguruan_tinggi, periode_pt AS ppt, nama FROM pendidikan ORDER BY nama ASC";
$r = @mysqli_query ($dbc, $q);

// Count the number of returned rows:
$num = mysqli_num_rows($r);
if ($num > 0) { // If it ran OK, display the records.
// Print how many users there are:
echo "<p> There are currently $num registered users.</p>\n";
// Table header:
echo '<table align="center" cellspacing="10" cellpadding="10" width="100%">
<tr>

<td align="left"><b>Nama</b></td>
<td align="left"><b>SD</b></td>
<td align="left"><b>Periode SD</b></td>
<td align="left"><b>SMP</b></td>
<td align="left"><b>Periode SMP</b></td>
<td align="left"><b>SMA</b></td>
<td align="left"><b>Periode SMA</b></td>
<td align="left"><b>Perguruan Tinggi</b></td>
<td align="left"><b>Periode Perguruan Tinggi</b></td>
</tr>';

// Fetch and print all the records:
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))	{
	echo'<tr>

		<td align ="left">' . $row['nama'] . '</td>
		<td align ="left">' . $row['sd'] . '</td>
		<td align="left">' . $row['periode_sd'] . '</td>
		<td align ="left">' . $row['smp'] . '</td>
		<td align="left">' . $row['periode_smp'] . '</td>
		<td align="left">' . $row['sma'] . '</td>
		<td align="left">' . $row['periode_sma'] . '</td>
		<td align="left">' . $row['perguruan_tinggi'] . '</td>
		<td align="left">' . $row['ppt'] . '</td>
		</tr>
		';
	}
	echo '</table>';
	 mysqli_free_result ($r);
	} else { // If no records were returned. 
		echo '<p class="error">There are currently no registered users.</p>';
	}
	
	// Define the query:
$q = "SELECT nama, perusahaan, jabatan, tahun AS thn, nama FROM pekerjaan ORDER BY nama ASC";
$r = @mysqli_query ($dbc, $q);

// Count the number of returned rows:
$num = mysqli_num_rows($r);
if ($num > 0) { // If it ran OK, display the records.
// Print how many users there are:
echo "<p> There are currently $num registered users.</p>\n";
// Table header:
echo '<table align="center" cellspacing="10" cellpadding="10" width="100%">
<tr>
<td align="left"><b>Nama</b></td>
<td align="left"><b>Nama Perusahaan</b></td>
<td align="left"><b>Jabatan</b></td>
<td align="left"><b>Tahun</b></td>
</tr>';

// Fetch and print all the records:
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))	{
	echo'<tr>

		<td align ="left">' . $row['nama'] . '</td>
		<td align ="left">' . $row['perusahaan'] . '</td>
		<td align="left">' . $row['jabatan'] . '</td>
		<td align ="left">' . $row['thn'] . '</td>
		
		</tr>
		';
	}
	echo '</table>';
	 mysqli_free_result ($r);
	} else { // If no records were returned. 
		echo '<p class="error">There are currently no registered users.</p>';
	}
	
mysqli_close($dbc);
include ('includes/footer.html');

?>
