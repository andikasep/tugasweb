<?php
include ('includes/header.html');
$konek=mysqli_connect("localhost","root","","tugas_uas");
$n=$_POST['nama'];
$sd=$_POST['sd'];
$psd=$_POST['tahun_masuk']."-".$_POST['tahun_lulus'];
$smp=$_POST['smp'];
$psmp=$_POST['tahun_msk']."-".$_POST['tahun_lls'];
$sma=$_POST['sma'];
$psma=$_POST['thmasuk']."-".$_POST['thlulus'];
$pt=$_POST['perguruan_tinggi'];
$ppt=$_POST['tmasuk']."-".$_POST['tlulus'];
 
$cek="SELECT * FROM pendidikan";

$hasil=mysqli_query($konek,$cek);
  
$data=mysqli_fetch_array($hasil);
      
$input ="INSERT INTO pendidikan(nama,sd,periode_sd, smp, periode_smp, sma, periode_sma,perguruan_tinggi, periode_pt) VALUE ('$n','$sd','$psd', '$smp','$psmp', '$sma','$psma','$pt','$ppt' )";
$hasil = mysqli_query($konek,$input);
     
 if($hasil)
 {
echo '<h1>Thank you!</h1>
	<p>You has been successed !</p><p><br /></p>
	<p>Please fill the next form !</p><p><br /></p>
	<p>select the job </p><p><br /></p>';
include ('includes/footer.html');
        
}
?>