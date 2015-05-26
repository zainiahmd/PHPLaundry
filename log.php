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
	  <p><a href="join.php">Daftar disini</a></p>
    </div>
    <div id="topnav">
      
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="intro">
    <div class="fl_left">
      <?php
session_start();
mysql_connect("localhost","root","") or die("Tidak bisa koneksi");
mysql_select_db("laundry");
	$userid = $_POST['email'];
	$psw = $_POST['password'];
	$level = $_POST['type'];
	$op = $_GET['op'];
	if($op=="in"){
		$cek = mysql_query("SELECT * FROM pelanggan WHERE Email='$userid' AND Password='$psw'");
		if(mysql_num_rows($cek)==1){
			$c = mysql_fetch_array($cek);
			$_SESSION['userid'] = $c['Email'];
			$_SESSION['level'] = $level;
			if($level == 'admin'){
				//echo "anda masuk ke halaman admin";
				header("location:homeadmin.php");
			}else if($level == 'pelanggan'){
				//echo "anda masuk ke halaman pelanggan";
				header("location:homeuser.php");
			}
		}else{
			die("password salah <a href=\"javascript:history.back()\">kembali</a>");
		}
		
	}else if($op=="out"){
unset($_SESSION['userid']);
unset($_SESSION['level']);
header("location:homelogin.html");
}
?>
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
