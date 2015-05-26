<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Data di Masukkan</title>
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
	  <p><a href="join.php">Daftar disini</a></p>
    </div>
    <div id="topnav">
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
      <?php
		mysql_connect("localhost","root","");
		mysql_select_db("laundry") or die("Database tidak ada");
		$perintah="INSERT INTO pelanggan(No_KTP, Nama, Email, password, Alamat, No_Telp, Jenis_kelamin)
		VALUES('$_POST[noktp]','$_POST[nama]','$_POST[email]','$_POST[password]','$_POST[alamat]','$_POST[telp]','$_POST[jenkel]')";
		$isi_data=mysql_query($perintah);
		if(isset($isi_data)) {
			echo("Data pelanggan :<BR>");
			echo("No. KTP : $_POST[noktp]<BR>");
			echo("Nama : $_POST[nama]<BR>");
			echo("E-Mail : $_POST[email]<BR>");
			echo("Password : $_POST[password]<BR>");
			echo("Jenis Kelamin : $_POST[jenkel]<BR>");
			echo("No. Telp : $_POST[telp]<BR>");
			echo("Alamat : $_POST[alamat]<BR>");
			echo("Data telah dimasukkan<BR>");
			echo("<FORM METHOD = POST ACTION = join.php>");
			echo("<INPUT TYPE=SUBMIT NAME=SUBMIT VALUE='Daftar Lagi'></FORM>");
			echo("<FORM METHOD = POST ACTION = homeLogIn.php>");
			echo("<INPUT TYPE=SUBMIT NAME=SUBMIT VALUE='Selesai'></FORM>");
		}
	else {
		echo("Data mahasiswa gagal dimasukkan ke dalam tabel");
	}
?>
      
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
		  </li>
        </ul>
      </div>
      <div class="holder">
        <h2 class="title"><img src="images/demo/60x60.gif" alt="" />Nullamlacus dui ipsum conseque loborttis</h2>
        <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
      <div class="holder">
        <h2>Lorem ipsum dolor</h2>
        <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
        <ul>
          <li><a href="#">Lorem ipsum dolor sit</a></li>
          <li>Etiam vel sapien et</li>
          <li><a href="#">Etiam vel sapien et</a></li>
        </ul>
        <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed. Condimentumsantincidunt dui mattis magna intesque purus orci augue lor nibh.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
      <div class="flickrbox">
        <h2 class="title">Flickr</h2>
        <ul>
          <li><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
          <li><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
          <li class="last"><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
          <li><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
          <li><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
          <li class="last"><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
        </ul>
        <br class="clear" />
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
