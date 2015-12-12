<?php
include ('includes/header.html');
$konek=mysqli_connect("localhost","root","","tugas_uas");
$n=$_POST['nama'];
$p=$_POST['perusahaan'];
$j=$_POST['jabatan'];
$t=$_POST['tahun'];
 
$cek="SELECT * FROM pekerjaan";

$hasil=mysqli_query($konek,$cek);
  
$data=mysqli_fetch_array($hasil);
      
$input ="INSERT INTO pekerjaan(nama,perusahaan, jabatan, tahun) VALUE ('$n','$p', '$j', '$t')";
$hasil = mysqli_query($konek,$input);
     
 if($hasil)
 {
	 // Print a message:
	echo '<h1>Thank you!</h1>
	<p> You has been successed !</p><p><br /></p>
	<p>Thank you for the following  </p><p><br /></p>';
          
include ('includes/footer.html');
        
}
?>