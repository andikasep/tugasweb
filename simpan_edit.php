<?php
include "mysqli_connect.php";

mysql_query("UPDATE biodata set $n='$_POST[nama]',$e='$_POST[email]',$tl='$_POST[tanggal_lahir]',$a='$_POST[agama]',$jk='$_POST[jenis_kelamin]',$al='$_POST[alamat]',$nh='$_POST[no_hp]' where user_id='$_POST[id]'");
?>
<script>
document.location='history.php'</script>