	<h1>Membuat Form Validation dengan CodeIgniter</h1>
	<?php echo validation_errors(); ?>
	<?php echo form_open('admin/form/aksi'); ?>
	
		<label>Nama</label><br/>
		<input type="text" name="nama"><br/>
		<label>Email</label><br/>
		<input type="text" name="email"><br/>
		<label>Konfirmasi Email</label><br/>
		<input type="text" name="konfir_email"><br/>
		<input type="submit" value="Simpan">
	</form>