<!DOCTYPE html>  
<html>
<head>
	<title>Buku Tamu</title>
	<style type="text/css">
		body 
		{ 
			font-family:palatino; 
			font-size:20px; 
		}
		#container 
		{ 
			width:450px; 
			padding:20px 40px; 
			margin:50px auto; 
			border:0px solid #555; 
			box-shadow:0px 0px 2px #555; 
		}
		input[type="text"] 
		{
		 width:200px; 
		}
		input[type="text"], textarea 
		{ 
			padding:5px; 
			margin:2px 0px; 
			border: 1px solid #777; 
		}
		input[type="submit"], input[type="reset"] 
		{ 
			padding: 5px 20px;
			margin:2px 0px; 
			font-weight:bold; 
			cursor:pointer; 
		}
		#error
		{ 
			border:1px solid red; 
			background:#ffc0c0; 
			padding:5px; 
		}
	</style>
	<script type="text/javascript" src="../tinymce/tinymce/tiny_mce.js">
		
	</script>
	<script type="text/javascript">
		tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		 
		});
	</script>
</head>
<body>
	<div id="container">
		<h2>Buku Tamu</h2>
		<hr>
		<p>Silahkan isi buku tamu di bawah ini untuk meninggalkan pesan Anda!</p>
		<form action="aksi.php?module=bukutamu&act=inputtamu" method="post">
			<p><b>Id :</b><br><input type="text" name="id_bktamu" placeholder="Ketik id anda" required /></p>
			<p><b>Status :</b><br><input type="text" name="status_bktamu" placeholder="Ketik status anda" required /></p>
			<p><b>Nama :</b><br><input type="text" name="nama_bktamu" placeholder="Ketik nama anda" /></p>
			<p><b>Email :</b><br><input type="text" name="email_bktamu" placeholder="Ketik email anda" /></p>
			<p><b>Alamat :</b><br><input type="text" name="alamat_bktamu" placeholder="Ketik alamat anda" /></p>
			<p><b>Tanggal : </b></p><input type="date" name=”tgl_bktamu”>
			<p><b>Komentar :</b><br><textarea name="komentar"></textarea></p>
			<p><input type="submit" name="go" value="Kirim" /> <input type="reset" name="del" value="Hapus" /></p>
		</form>
	</div>
</body>
</html>