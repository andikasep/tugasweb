<html>
  
<head>
    
<title>tampil</title>
    
<link href="../css/style.css" rel="stylesheet"/>
    
<link href="../css/signup.css" rel="stylesheet"/>

  
</head>
  

<body>
    
<div id="wrapper">
      
<div id="header">

      
</div>
    
  
<div id="menu">
        
<img src="../gambar/logo.png"/>

        
<ul id="menu1">
          
<li><a href="../index.php">Login</a></li>
        
</ul>

      
</div>

      

<div id="form">
        
<form method="POST" action="proses-signup.php">
          
<table border="0">
            
<tr>
              
<td>Username</td>
              
<td><input class="input" name="username" type="text" required/></td>
            
</tr>
            

<tr>
              
<td>Nama</td>
              
<td><input class="input" name="nama" type="text" required/></td>
            
</tr>
            

<tr>
              
<td>Agama</td>
             
 <td>
                
<select class="select" name="agama">
                  
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
              
</td>
            
</tr>
            

<tr>
              
<td>Jenis Kelamin</td>
              
<td><input class="radio" name="jenis-kelamin" type="radio" value="pria" required>Pria</input>&nbsp;&nbsp; 
<input class="radio" name="jenis-kelamin" type="radio" value="wanita" required>Wanita</input></td>
            
</tr>
            
<tr>
              
<td>Tempat tanggal lahir</td>
              
<td>
                  
<select class="select" name="tempat" required>
                    
<option value="" selected>--Pilih tempat lahir--
                      
<?php
                        
$tempat=array("Bandung","jakarta","Yogyakarta","Semarang","Surabaya","Malang");
                        
for($x=0;$x<=5;$x++)
                          
{
                            
echo "<option value=$tempat[$x]>$tempat[$x]";
                          
}
                      
?>
                    
</option>
                  
</select>
                  
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

              
</td>
            
</tr>
            
<tr>
              
<td>Alamat</td>
             
 <td><textarea id="alamat" name="alamat" required></textarea></td>
            
</tr>
            
<tr>
              
<td>Password</td>
              
<td><input class="input" name="password" type="password" required/></td>
            
</tr>
            

<tr>
              
<td></td>
              
<td><input class="submit" type="submit" value="Daftar"/>&nbsp;&nbsp;&nbsp;<input class="submit" type="reset" value="Reset"/> </td>
            
</tr>
          
</table>
        
</form>
      
</div>
    
</div>
  
</body>

</html>
