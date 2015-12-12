<?php
$konek=mysqli_connect("localhost","root","","tugas_uas");
  
$tampil="SELECT * FROM biodata ORDER BY user_id DESC";
  
$hasil=mysqli_query($konek,$tampil);
$page_title = 'welcome to this site !';
include ('includes/header.html');
?>
   
<div id="wrapper">
      



      


      
</div>

<div align="left">
            
<div id="login">
      
<form method="POST" action="php/proseslogin.php">
            
<table border="0">
              
<tr>
               
 <td>Username</td>
                
<td><input class="input" name="username" type="text" placeholder="Masukan username" required autofocus/></td>
              
</tr>
              
<tr>
               
 <td>Password</td>
                
<td><input class="input" name="password" type="password" placeholder="Masukan password" required/></td>
             
 </tr>
              
<tr>
               
 <td></td>
               
 <td colspan="2"><a id="signup" href="php/signup.php">Signup</a>&nbsp;&nbsp;&nbsp;<input id="submit" type="submit" value="Login"/></td>
              
</tr>

            
</table>
         
 </form>
        
</div>
      
</div>



<h1>Selamat Datang</h1>
<p>Ini adalah layanan informasi yang sederhana.</p> 
<p>hanya bisa menyajikan hal-hal dasar pada website ini karena kami pembuat website masih dalam proses pembelajaran.</p>
<p>di buat oleh Mulyani dan Andi gunadi
<p>Website ini dibuat dengan berbagai bahasa pemrograman web seperti HTML, PHP, CSS dll dan menggunakan aplikasi XAMPP Versi 1.7.2</p>
<p>This is where the page-specific content goes. This section, and the corresponding header, 
	will change from one page to the next.</p>
	<p>Volutpat at varius sed sollicitudin et, arcu. Vivamus viverra. Nullam turpis. Vestibulum sed etiam. Lorem ipsum sit amet dolore. Nulla facilisi. Sed tortor. Aenean felis. Quisque eros. Cras lobortis commodo metus. Vestibulum vel purus. In eget odio in sapien adipiscing blandit. Quisque augue tortor, facilisis sit amet, aliquam, 
		suscipit vitae, cursus sed, arcu lorem ipsum dolor sit amet.</p>      
<?php
include ('includes/footer.html');
?>
