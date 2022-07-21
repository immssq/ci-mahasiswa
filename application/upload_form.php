<h3>Tambah Data Mahasiswa</h3>
<hr />

<div style="color:red">
	<?php echo validation_errors(); ?>
  <?php if(isset($error)){print $error;}?>
</div>
<?php echo form_open_multipart('upload/file_data');?>

  <div class="form-group">
    <label for="NIM">NIM :</label>
    <input type="text" class="form-control" name="NIM" value="<?= set_value('NIM'); ?>" id="NIM" required>
  </div>
	<div class="form-group">
    <label for="nama">Nama :</label>
    <input type="text" class="form-control" name="nama_mahasiswa" value="<?= set_value('nama_mahasiswa'); ?>" id="nama_mahasiswa" required>
  </div>
  <div class="form-group">
    <label for="foto_diri_mahasiswa">Foto Profil :</label>
    <input type="file" name="foto_diri_mahasiswa" class="form-control"  id="foto_diri_mahasiswa" required>
  </div>
	<div class="form-group">
    <label for="foto_ktp_mahasiswa">Foto KTP :</label>
    <input type="file" name="foto_ktp_mahasiswa" class="form-control"  id="foto_ktp_mahasiswa" required>
  </div>
		<a href="<?=base_url();?>" class="btn btn-warning">Kembali</a>
  <button type="submit" class="btn btn-success">Tambah</button>
</form>
