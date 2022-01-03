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
  height:500px;
  position:absolute;
  left:50%;
  top:45%;
  margin-left:-88px; /* (300/2) */
  margin-top:-180px;  /* (240/2) */
  border-style: inset;
  border-color: red;
  z-index: 2;
}
#page-wrap1 {
  width:510px;
  height:500px;
  position:absolute;
  left:50%;
  top:45%;
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
<div id="isi"><br><br><br>

</div>

<div id="page-wrap1">
<form action="index.php">
<button><b>kembali</b></button>
</form>	
<form action="manual_book2.php">
<button ><b>selanjutnya</b></button>
</form>
<p>Gambar di samping merupakan tampilan peta yang ada di kota Pati, pada tampilan peta tersebut memiliki fitur untuk menghitung jarak dari titak A ke titik B. Penghitungan jarak ini di sebut algoritma haversine. <br><br>Ketika layar di klik kiri maka titik A akan terbuat, kemudian klik kiri lagi maka titik B akan terbuat. Kemudian jarak titik A ke titik B akan terhitung berdasarkan jarak yang sebenarnya dengan menggunakan titik koordinat. <br><br>Klik kanan tahan kemudian geser untuk merotasi map. <br><br>Cara menggunakan fitur haversine : pilih button alamat pertama, tandai dengan klik kiri pada map. pilih button alamat kedua, tandai dengan klik kiri pada map. maka jarak titik 1 ke titik kedua akan tehitung pada kiri atas map.</p>	

</div>

<div id="page-wrap">
<img src="peta.png" >
</div>


</body>
</html>