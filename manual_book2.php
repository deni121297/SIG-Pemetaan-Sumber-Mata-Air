<!DOCTYPE html>
<html>
<head>
	<title>manual book</title>
</head>
<body style="background: #888888;">
<style>
	#header{
		position: fixed;
		bottom: 0px;
		top: 95%;
		width: 100%;
		left: 0px;
		background: #787878;
		border-style: inset;
		border-color: gray;
	}
	#headeratas{
		position: fixed;
		top: 0px;
		height: 100px;
		width: 100%;
		left: 0px;
		background: #787878;
		color: white;
		font-size: 28px;
		border-style: outset;
		border-color: gray;
		z-index: 3;
	}
	#isi{
		color: white;
	}
	#page-wrap img{
  width:698px;
  height:600px;
  position:absolute;
  left:50%;
  top:40%;
  margin-left:-88px; /* (300/2) */
  margin-top:-180px;  /* (240/2) */
  border-style: inset;
  border-color: red;
  z-index: 2;

}
#page-wrap1 {
  width:510px;
  height:600px;
  position:absolute;
  left:50%;
  top:40%;
  margin-left:-600px; /* (300/2) */
  margin-top:-180px;  /* (240/2) */
  border-style: inset;
  border-color: red;
  z-index: 2;
}
#page-wrap1 p{
  color: white;
  margin-top: 10px;
  margin-left: 10px;
  margin-right: 10px;
  font-size: 20px;
   text-align: justify;
}
	
</style>
<div id="headeratas"><p><center><b><i>Manual Book</i></b></center></p>
<div id="header"> </div>




</div>


<div id="page-wrap1">
	<form action="index.php"><button><b>beranda</b></button></form><form action="manual_book1.php"><button ><b>sebelumnya</b></button>
</form>
<p>Gambar di samping merupakan fitur button yang ada pada website. Berikut fungsi dan keterangannya : <br><br>1. Fungsi button 1 pada gambar di samping yaitu untuk ke tujuan map yang ingin dituju sesuai nama alamat/tempat yang di tuju. <br><br> 2. Fungsi button 2, untuk mengetahui lokasi kita/user saat ini dan akang langsung menampilkan lokasi saat ini pada map. <br><br> 3. Fungsi button 3 (zoom out) untuk menampilkan map ke lokasi semula atau titik awal. <br><br> 4. Fungsi button 4 (manual book) untuk menampilkan halaman manual book yang berisi keterangan mengenai cara mengoperasikan website. <br><br> 5. fungsi button 5 (direction) untuk menampilkan halaman map untuk meenggunakan fitur direction yang berguna untuk mengetahui jalan dari titik A ke titik B. <br><br> 6. Fungsi button 6 (navigasi map) untuk melakukan zoom in dan zoom out pada map, dan juga dapat merotasi map.</p>	

</div>

<div id="page-wrap">
<img src="button.png" >
</div>


</body>
</html>

