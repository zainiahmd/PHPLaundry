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
      
	  <?php
		mysql_connect("localhost","root","");
		mysql_select_db("laundry") or die("Database tidak ada");
		
		$berat = $_POST["berat"];
		$tipe = $_POST["tipe"];
		$tipe_lain = $_POST["tipe_lain"];
		switch($tipe){
			case "Reguler" : $harga=3000; break;
			case "Kilat" : $harga=6000; break;
			case "Lainnya" : $harga=0; break;
		}
		switch($tipe_lain){
			case "None" : $hrglain=0; break;
			case "Selimut" : $hrglain=8000; break;
			case "Bed_Cover" : $hrglain=15000; break;
			case "Jas" : $hrglain=15000; break;
			case "Korden" : $hrglain=6000; break;
			case "Boneka" : $hrglain=4000; break;
			case "Tas" : $hrglain=5000; break;
			case "Helm" : $hrglain=15000; break;
			case "Sepatu" : $hrglain=12000; break;
			case "Karpet" : $hrglain=25000; break;
			case "Jaket" : $hrglain=80000; break;
		}
		$total=$berat*($harga + $hrglain);
		
		$perintah="INSERT INTO pemesanan(Id_pemesanan, Nama, Tgl_pesan, Type_loundry, Type_lainnya, Status_pengambilan, Berat_kg, Total_harga)
		VALUES('$_POST[id_pesan]','$_POST[nama]','$_POST[tgl_msk]','$_POST[tipe]','$_POST[tipe_lain]','$_POST[status_ambil]', $_POST[berat], $total)"; 
										
		$isi_data=mysql_query($perintah);
		if(isset($isi_data)) {
			echo("ID Pemesanan	:<BR>");
			echo("Nama 			: $_POST[nama]<BR>");
			echo("Type Loundry  : $_POST[tipe]<BR>");
			echo("Type Lainnya  : $_POST[tipe_lain]<BR>");
			echo("Berat         : $_POST[berat]<BR>");
			echo("Status Pengambilan : $_POST[status_ambil]<BR>");
			echo("Total Harga   : $total <BR>");
			echo("Data telah dimasukkan<BR>");
			echo("<FORM METHOD = POST ACTION = order.php>");
			echo("<INPUT TYPE=SUBMIT NAME=SUBMIT VALUE='Pesan Lagi'> </FORM>");
			echo("<FORM METHOD = POST ACTION = homeuser.php>");
			echo("<INPUT TYPE=SUBMIT NAME=SUBMIT VALUE='Selesai'></FORM>");
		}
	else {
		echo("Data Pemesanan gagal dimasukkan");
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
