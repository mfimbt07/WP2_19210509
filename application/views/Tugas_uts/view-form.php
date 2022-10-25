<html>
<head>
	<title>Form Input Data Siswa</title>
</head>
<body>
	<center>
		<form action="<?= base_url('Tugas_uts/cetak'); ?>"
method="post">
			<table>
				<tr>
					<th colspan="3">
						D-Lemas : Form Input Data Siswa
					</th>
				</tr>
				<tr>
					<td colspan="3">
						<hr>
					</td>
				</tr>
				<tr>
					<th align="left">Nama Siswa</th>
					<th>:</th>
					<td>
						<input type="text" name="nama" id="nama" value="<?= set_value('nama'); ?>">
					</td>
				</tr>
				
				<tr>
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:8; line-height:30px; align:center;"><?= form_error('nama');?></font>
					</td>
				</tr>
				
				<tr>
					<th align="left">NIS</th>
					<td>:</td>
					<td>
						<input type="text" name="nis" id="nis"  value="<?= set_value('nis'); ?>">
					</td>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:8; line-height:30px; align:center;"><?= form_error('nis');?></font>
					</td>
				</tr>
				
				<tr>
					<th align="left">Kelas</th>
					<td>:</td>
					<td>
						<input type="text" name="kelas" id="kelas"  value="<?= set_value('kelas'); ?>">
					</td>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:8; line-height:30px; align:center;"><?= form_error('kelas');?></font>
					</td>
				</tr>
				<tr>
				
				<tr>
					<th align="left">Tanggal Lahir<br>
						<font style="font-size:12;">(format : 2021-04-23)</font>
					</th>
					<td>:</td>
					<td>
						<input type="text" name="tanggal" id="tanggal"  value="<?= set_value('tanggal'); ?>">
					</td>
				</tr>
				
				<tr>
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:8; line-height:20px; align:center;"><?= form_error('tanggal');?></font>
					</td>
				</tr>
				<tr>
				<tr>
					<th align="left">Tempat Lahir</th>
					<td>:</td>
					<td>
						<input type="text" name="tempat" id="tempat"  value="<?= set_value('tempat'); ?>">
					</td>
				</tr>
				
				<tr>
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:8; line-height:30px; align:center;"><?= form_error('tempat');?></font>
					</td>
				</tr>
				<tr>
				<tr>
					<th align="left">Alamat</th>
					<td>:</td>
					<td>
						<input type="text" name="alamat" id="alamat"  value="<?= set_value('alamat'); ?>">
					</td>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:8; line-height:30px; align:center;"><?= form_error('alamat');?></font>
					</td>
				</tr>
				
				<tr>
					<th align="left">Jenis Kelamin</th>
					<td>:</td>
					<td>
						<input type="radio" name="jenis" value="Laki-laki" <?php echo set_select('jenis', 'Laki-laki'); ?> >Laki-laki</input><br>
						<input type="radio" name="jenis" value="Perempuan" <?php echo set_select('jenis', 'Perempuan'); ?> >Perempuan</input><br>
				<tr>
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:8; line-height:30px; align:center;"><?= form_error('jenis');?></font>
					</td>
				</tr>
				<tr>
					<th align="left">Agama</th>
					<td>:</td>
					<td>
						<select name="agama">
						<option value="" <?php echo set_select('agama', '', TRUE); ?> >Pilih Agama</option>
						<option value="Islam" <?php echo set_select('agama', 'islam'); ?> >Islam</option>
						<option value="Kristen" <?php echo set_select('agama', 'kristen'); ?> >Kristen</option>
						<option value="Katolik" <?php echo set_select('agama', 'katolik'); ?> >Katolik</option>
						<option value="Buddha" <?php echo set_select('agama', 'buddha'); ?> >Buddha</option>
						<option value="Hindu" <?php echo set_select('agama', 'hindu'); ?> >Hindu</option>
						<option value="Protestan" <?php echo set_select('agama', 'protestan'); ?> >Protestan</option>
						<option value="Konghucu" <?php echo set_select('agama', 'konghucu'); ?> >Konghucu</option>
						</select> 
					</td>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:8; line-height:30px; align:center;"><?= form_error('agama');?></font>
					</td>
				</tr>
				<tr>
					<td colspan="7">
						<hr>
					</td>
				</tr>	
				<tr>
					<td colspan="3" align="center">
						<input type="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>