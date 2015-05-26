<?php
session_start();
	if(!isset($_SESSION['userid'])){
		echo "<center>";
		echo "<h2>Anda belum login</h2>";//jika belum login ingatkan...
		echo "<a href=homelogin.html> Klik disini untuk Log In</a>";
		echo "</center>";
		die;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Data Member</title>
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
      <li class="current"><a href="tampilMem.php">Data Member</a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
    <div id="content">
		<FORM METHOD=POST ACTION=cariPlg.php>
			Masukkan No. KTP:<BR>
			<INPUT TYPE=TEXT NAME=cari ><BR>
			<INPUT TYPE=submit NAME=submit VALUE=cari>
		</FORM>
	</div>
    <div id="column">
      <div class="subnav">
        <h2>Menu Navigation</h2>
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
</div></body>
</html>
