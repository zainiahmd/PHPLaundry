<?php
	session_start();
	//cek apakah user sudah login
	if(!isset($_SESSION['userid'])){
		die("Anda belum login");//jika belum login ingatkan...
	}
	//cek level user
	if($_SESSION['level']!="admin" && $_SESSION['level']!="pelanggan"){
		die("Anda bukan admin"); //jika bukan admin dan user ingatkan...
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Daftar Harga</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="#">Express Laundry Online</a></h1>
      <p>Jl. Sukabirus</p>
      
    </div>
    <div id="search">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search the site&hellip;"  onfocus="this.value=(this.value=='Search the site&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="GO" />
        </fieldset>
      </form>
	  <br><br>
	  <?php
	if(!isset($_SESSION['userid'])){
		echo "<h2>Anda belum login</h2>";//jika belum login ingatkan...
		echo "<a href=homelogin.html> Klik disini untuk Log In</a>";
	}
	else {
		echo "<h3>Selamat Datang ".$_SESSION['userid']."</h3>";
		//if($_SESSION['level']=="admin"){
			//echo"<a href=homeadmin.php class='myButton'>Home //Admin<br></a>";
		//}
		//else{
			//echo"<a href=home.php >Home User<br></a>";
		//}
		echo "<a href=log.php?op=out >Log Out</a>";
		}
	?>
    </div>
    <div id="topnav">
      <ul>
        <li class="last"><a href="order.php">Tempat Order</a></li>
        <li><a href="#">Data Laundry</a>
          <ul>
            <li><a href="tampilMemUser.php">Data Member</a></li>
            <li><a href="det_pemUser.php">Detail Pemesanan</a></li>
          </ul>
        </li>
        <li><a href="harga.php">Daftar Harga</a></li>
        <li class="active"><a href="homeuser.php">Home</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="breadcrumb">
    <ul>
      <li class="first">You Are Here</li>
      <li>&#187;</li>
      <li><a href="home.html">Home</a></li>
      <li>&#187;</li>
      <li class="current"><a href="harga.html">Daftar harga</a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
    <div id="content">
      <h1>Daftar Harga</h1>
      <table border="1" cellpadding=5 cellspacing="0" align="center">
	     
		<tr>
			<th colspan="6">Dry Cleaning Price List</th>
		</tr>      
     
		<tr>
			<td>1.</td>
			<td>Cuci Kiloan</td>       
			<td>Rp. 3.000/Kg</td>
			<td>7.</td>
			<td>Korden</td>
			<td>Rp. 6.000</td>
		</tr>
		<tr>
			<td>2.</td>
			<td>Cuci Kilat</td>
			<td>Rp. 6.000/Kg</td>
			<td>8.</td>
			<td>Boneka</td>
			<td>Rp. 4.000</td>
		</tr>     
		<tr>
			<td>3.</td>
			<td>Selimut</td>	
			<td>Rp. 8.000</td>
			<td>9.</td>
			<td>Tas</td>
			<td>Rp. 5.000</td>	
		</tr>
		<tr>
			<td>4.</td>
			<td>Bed Cover</td>
			<td>Rp. 15.000</td>
			<td>10.</td>
			<td>Helm</td>
			<td>Rp. 15.000</td>
		</tr>   
		<tr>
			<td>5.</td>
			<td>Jaket</td>	
			<td>Rp. 8.000</td>
			<td>11.</td>
			<td>Sepatu</td>
			<td>Rp. 12.000</td>
		</tr>
		<tr>
			<td>6.</td>
			<td>Jas</td>
			<td>Rp. 15.000</td>
			<td>12.</td>
			<td>Karpet</td>
			<td>Rp. 25.000</td>
		</tr>
		</table>
      
    </div>
    <div id="column">
      <div class="subnav">
        <h2>Menu</h2>
        <ul>
          <li><a href="home.html">Home</a></li>
          <li><a href="harga.html">Daftar Harga</a></li>
          <li><a href="formDaftar.html">Become Member</a></li>
          <li><a href="#">Membership</a>
			<ul><a href="tampilMem.html">Data Member</a></ul>
			<ul><a href="coment.html">Comments</a></ul>
		  </li>
		  <li><a href="order.php">Tempat Order</a></li>
        </ul>
      </div>
      
      
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="footer">
    <div id="newsletter">
      <h2>Stay In The Know !</h2>
      <p>Please enter your email to join our mailing list</p>
      <form action="#" method="post">
        <fieldset>
          <legend>News Letter</legend>
          <input type="text" value="Enter Email Here&hellip;"  onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
          <input type="submit" name="news_go" id="news_go" value="GO" />
        </fieldset>
      </form>
      <p>To unsubscribe please <a href="#">click here &raquo;</a></p>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Pemrograman Web</a></p>
    <p class="fl_right">by Group Rizal, Fadil dan Ian</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>
