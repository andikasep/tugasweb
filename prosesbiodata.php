<?php
include ('includes/header.html');
$konek=mysqli_connect("localhost","root","","tugas_uas");
$n=$_POST['nama'];
$e=$_POST['email'];
$tl=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
$agama=$_POST['agama'];
$jk=$_POST['jenis_kelamin'];
$al=$_POST['alamat'];
$nh=$_POST['no_hp']; 
$cek="SELECT * FROM biodata";

$hasil=mysqli_query($konek,$cek);
  
$data=mysqli_fetch_array($hasil);
      
$input ="INSERT INTO biodata(nama,email,tanggal_lahir,agama,jenis_kelamin,alamat,no_hp) VALUE ('$n','$e','$tl','$agama','$jk','$al','$nh')";
$hasil = mysqli_query($konek,$input);
     
 if($hasil)
 {
	 echo '<h1>Thank you!</h1>
	<p>You has been successed !</p><p><br /></p>
	<p>Please fill the next form !</p><p><br /></p>;
	<p>select menu education </p><p><br /></p>';
         
include ('includes/footer.html');
        
}
?>