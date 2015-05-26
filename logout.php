<?php
session_start();
session_destroy();
echo "<script>alert('Terima kasih, Anda Berhasil Logout')</script>";
echo "<meta http-equiv='refresh' content='1 url=login.php'>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/jquery.innerfade.js"></script>
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
    </div>
    <div id="topnav">
      <ul>
        <li class="last"><a href="order.php">Tempat Order</a></li>
        <li><a href="#">Data Laundry</a>
          <ul>
            <li><a href="tampilMem.php">Data Member</a></li>
            <li><a href="coment.html">Comment</a></li>
            <li><a href="barang.php">Data Barang</a></li>
          </ul>
        </li>
        <li><a href="join.php">Join Us</a></li>
        <li><a href="harga.html">Daftar Harga</a></li>
        <li class="active"><a href="home.html">Home</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="intro">
    <div class="fl_left">
      <h1>Usaha Laundry</h1>
      <ul>
        <li>
          <h2></h2>
          <p>Bagaimana memulai bisnis laundry? Mulai dari modalnya, perincian biaya untuk membeli alat dan fasilitas yang harus dipenuhi, hingga perkiraan pengeluaran per bulan dalam bisnis laundry dan keuntungannya. Selain itu, jika ingin ber-partner apa saja kriteria partner bisnis yang baik dan dapat dipercaya? Jika kita tak sanggup membeli alat atau fasilitas berat seperti mesin cucinya, apakah bisa menyewanya?

			Di Indonesia ada beberapa jenis usaha yang masih termasuk ke dalam kategori bisnis laundry alias cuci-mencuci baju.
			</p>
          <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
        </li>
      </ul>
    </div>
    <div class="fl_right">
      <ul id="rotation">
        <li><a href="#"><img src="slide_1.jpg" alt="" /></a></li>
        <li><a href="#"><img src="slide_2.jpg" alt="" /></a></li>
        <li><a href="#"><img src="slide_3.jpg" alt="" /></a></li>
		<li><a href="#"><img src="slide_4.jpg" alt="" /></a></li>
		<li><a href="#"><img src="slide_5.jpg" alt="" /></a></li>
		<li><a href="#"><img src="slide_6.jpg" alt="" /></a></li>
		<li><a href="#"><img src="slide_7.jpg" alt="" /></a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
    <div id="latest">
      <ul>
        <li>
          <h2>Free Delivery and Pick Up</h2>
          <p class="imgholder"><img src="pickup.png" alt="" /></p>
          <p>We value our esteemed customers and that's the reason we are trying so hard to make life comfortable for them. We did not stop after launching this dhobi online facility; we wanted to give you more! <a href="#">More &raquo;</a></p>
        </li>
        <li>
          <h2>Profesional Laundry Services</h2>
          <p class="imgholder"><img src="time.jpg" alt="" width="200" height="100"/></p>
          <p>Washing clothes and drying them is one of the most boring tasks that people have to perform daily, whether they like it or not. Especially for working professionals, who hardly find any time between work and life, it is very tough to wash clothes daily and then dry them. The main thing being that ever cloth needs special care.  <a href="#">More &raquo;</a></p>
        </li>
        <li class="last">
          <h2>About Express Laundry Online</h2>
          <p class="imgholder"><img src="laundryLady.jpg" alt="" width="200" height="100"/></p>
          <p>To be the most preferred/trusted laundry service in India by providing Customer delight.In today's time, with the dynamic environment all around it is so difficult to take our time for yourself and loved ones. <a href="#">More &raquo;</a></p>
        </li>
      </ul>
      <br class="clear" />
    </div>
    <div class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->

<html>
<head>
<title>LOGIN</title>
</head>
<body>
<form method="post" name="login" action="cek_login.php">
<table border=0 align="center" cellpadding=5 cellspacing=0>
<tr>
<td colspan=3><center><font size=5>LOGIN</font></center></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><input type="text" name="Email"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td colspan=2></td>
<td><input type="submit" name="submit" value="LOGIN"></td>
</tr>
<tr>
<td colspan=3><a href="join.php">join us</a></td>
</tr>
</table>
</form>
</body>
</html>


<!--
####################################################################################################### -->
<div class="wrapper col5">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Pemrograman Web</a></p>
    <p class="fl_right">by Group Rizal, Fadil dan Ian</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>
