<?php
	mysql_connect("localhost","root","");
	mysql_select_db("laundry");
	//if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$perintah="DELETE FROM pelanggan where No_KTP=$id";
	$hapus=mysql_query($perintah);
	//	if ($hapus) {
		//	echo "berhasil";
			//}
				//{
					echo "gagal";
		//		}
			//}
	header("Location:tampilMemAdmin.php");
?>