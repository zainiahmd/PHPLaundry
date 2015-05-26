<?php
	mysql_connect("localhost","root","");
	mysql_select_db("laundry");
	//if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$perintah="DELETE FROM pemesanan where Id_pemesanan=$id";
	$hapus=mysql_query($perintah);
	//	if ($hapus) {
		//	echo "berhasil";
			//}
				//{
					echo "gagal";
		//		}
			//}
	header("Location:det_pem.php");
?>