<?php
	if(isset($_POST['sendmail'])){
		if(mail($_POST['email'], $_POST['subject'], $_POST['message'])){
			echo "<p>Email berhasil dikirim ke alamat tujuan</p>";
		}
		else{
			echo "<p>Email gagal dikirim ke alamat tujuan</p>";
		}
	}
							
?>
								
<form role="form" type="form" method="POST" enctype="multipart/form-data">

	<input type="hidden" name="email" value="ddolans111@gmail.com"/>
	<input type="text" name="subject" placeholder="topik"/> <br><br>
	<textarea type="textarea" name="message" placeholder="pesan yang ingin disampaikan"></textarea> <br><br>
	<button type="submit" name="sendmail" value="Kirim">Kirim</button>
	
	<!--<input type="hidden" name="email" placeholder="Email" value="ddolans111@gmail.com"/>
	<input type="text" name="subject" placeholder="Subject"/>
	<input type="textarea" name="message" id="" cols="30" rows="7" placeholder="Message" />
	<button type="submit" name="sendmail" value="Kirim">Kirim</button>		-->	
</form>