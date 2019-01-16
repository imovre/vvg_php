<?php 
	print '
	<h1>Contact Form</h1>
	<div id="contact">
		<iframe src="https://maps.google.com/maps?q=gradska%20knji%C5%BEnica%20ivan%20goran%20kova%C4%8Di%C4%87%20karlovac&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		<form action="http://work2.eburza.hr/pwa/responsive-page/html/send-contact.php" id="contact_form" name="contact_form" method="POST">
			<label for="fname">Ime *</label>
			<input type="text" id="fname" name="firstname" placeholder="Vaše ime.." required>
			
			<label for="lname">Prezime *</label>
			<input type="text" id="lname" name="lastname" placeholder="Vaše prezime.." required>
				
			<label for="email">Vaša e-mail adresa *</label>
			<input type="email" id="email" name="email" placeholder="Vaša e-mail adresa.." required>

			<label for="country">Zemlja</label>
			<select id="country" name="country">
				<option value="">Molim odaberite</option>
				<option value="BE">Belgium</option>
				<option value="HR" selected>Croatia</option>
				<option value="LU">Luxembourg</option>
				<option value="HU">Hungary</option>
			</select>

			<label for="subject">Naslov</label>
			<textarea id="subject" name="subject" placeholder="Napišite nešto.." style="height:200px"></textarea>

			<input type="submit" value="Pošalji">
		</form>
	</div>';
?>