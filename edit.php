<?php
include ('includes/header.html');
include "mysqli_connect.php";

?>
<h1>Fill the following form</h1> 
<form action=simpan_edit.php method=POST>
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