<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>ASESMEN BAKAT - MINAT</title>
		<link rel="stylesheet" href="./theme_mobile/themes/Bootstrap.css">
		<link rel="stylesheet" href="./theme_mobile/jquery.mobile.structure-1.4.0.min.css" />
		<link rel="stylesheet" href="./theme_mobile/themes/jquery.mobile.icons.min.css" />
		<script src="./theme_mobile/jquery-1.8.2.min.js"></script>
		<script src="./theme_mobile/jquery.mobile-1.4.0.min.js"></script>
	</head>
	<?php
	function get_opt_calendar($yago = 10, $span = 70){
    $tgl = '';
    for($i = 1; $i < 32; $i++){
        $tgl .= '<option value="'.$i.'">'.$i.'</option>';
    }
    $bln = '';
    for($i = 1; $i < 13; $i++){
        $bln .= '<option value="'.$i.'">'.$i.'</option>';
    }
    $th = date('Y') - $yago;
    $thn = '';
    for($i = $th; $i >= $th - $span; $i--){
        $thn .= '<option value="'.$i.'">'.$i.'</option>';
    }
    return array('tanggal' => $tgl, 'bulan' => $bln, 'tahun' => $thn);
	}
	$cal_d = get_opt_calendar(14, 30);
	?>
	<body>
	<div data-role="page" data-theme="a">
		<div data-role="header" data-position="inline">
	 <h1><img src="./theme_mobile/img/logo.png" height="85" ></h1>
			<h1>UNIVERSITAS PGRI SEMARANG</h1>
			<div data-role="navbar">
				<ul>
					<li><a href="#" data-icon="star" class="ui-btn-active">ASESMEN BAKAT - MINAT</a></li>
				</ul>
			</div>
		</div>
	<!-- isi data diri -->
    <div data-role="content" data-theme="a" id="isi_data_diri" style="display:1;">
        <a href="#" data-role="button" data-icon="star">Masukkan Data Diri</a>
        <h2>Login</h2>
        <form action=""  id="form_register" onSubmit="addsubmit();return false;" method="post">
          <p>Masukkan data diri anda dengan lengkap dan benar</p>
          <div data-role="fieldcontain">
            <label for="name">Nama</label>
            <input type="text" name="nama" id="nama" value="" tabindex="1000" class="input validate[required]"  />
          </div>
          <div data-role="fieldcontain">
            <label for="name">Kelas</label>
            <input type="text" name="kelas" id="kelas" value="" tabindex="1001" class="input validate[required]"  />
          </div>
          <div data-role="fieldcontain">
            <label for="name">J Kel</label>
            <select size="1" class="select validate[required]" name="jkel" tabindex="1002" id="jkel" >
            <option value="" selected="">J Kel</option> <option value="L" >Laki-Laki</option><option value="P" >Perempuan</option></select>
          </div>
           <div data-role="fieldcontain">
            <label for="name">Jurusan</label>
            <select size="1" class="select validate[required]" name="jurusan" tabindex="1003" id="jurusan" >
            <option value="" selected="">Jurusan</option> <option value="1" >IPA</option><option value="2" >IPS</option><option value="3" >IPC</option></select>
          </div>

          <div data-role="fieldcontain">
            <label for="select-choice-a" class="select">Tgl Lahir</label>
            <select size="1" class="select validate[required]" name="tgl_lhr" id="tgl_lhr" tabindex="1004">
        		<option value="" selected="">Tgl</option><?php echo $cal_d['tanggal']; ?></select>
            <label for="select-choice-a" class="select">Bln Lahir</label>
        		<select size="1" class="select validate[required]" name="bln_lhr" id="bln_lhr" tabindex="1005">
        		<option value="" selected="">bln</option><?php echo $cal_d['bulan']; ?></select>
            <label for="select-choice-a" class="select">Thn Lahir</label>
        		<select size="1" class="select validate[required]" name="thn_lhr" id="thn_lhr" tabindex="1006">
        		<option value="" selected="">Thn</option><?php echo $cal_d['tahun']; ?></select>
          </div>

          <div class="ui-body ui-body-b">
            <fieldset class="ui-grid-a">
              <div class="ui-block-a"><button type="reset" data-theme="a">Cancel</button></div>
              <div class="ui-block-b"><button id="btn1" tabindex="1007" data-theme="d">Submit</button></div>
              </fieldset>
          </div>
        </form>
      </div>
	<!-- end isi data diri -->
	<!-- Rule -->
	<div data-role="content" data-theme="a" id="rule" style="display:none;">
	<ul data-role="listview" data-inset="true" data-divider-theme="c">
		<li data-role="list-divider">Tujuan</li>
		<ul>
		<li>Asesmen ini disusun untuk membantumu menemukan jurusan/ program studi yang sesuai dengan ketertarikan dan kemampuanmu. </li><br/><br/>
	<li>Hasil asesmen akan memandu menemukan beberapa bidang yang layak dipertimbangkan untuk studi lanjut yang akan ditempuh. Jika kamu sudah memiliki keputusan tentang suatu bidang tertentu, hasil asesmen akan mendukung ide atau memberi berbagai kemungkinan lain padamu.</li><br/><br/>
	<li>Pertanyaan di dalam asesmen ini sifatnya menyenangkan. Ikuti petunjuk dengan seksama, lakukan dengan penuh pertimbangan, dan kerjakanlah sesuai dengan kondisimu sendiri.</li><br/><br/>
	<li>Selamat menemukan dirimu!</li>
		</ul>
	</ul>
	<fieldset class="ui-grid-a">
	<div class="ui-block-a"><button data-theme="a">Cancel</button></div>
	<div class="ui-block-b"><button id="bt_rule" data-theme="d">lanjut</button></div>
	</fieldset>
	</div>
	<!-- end Rule -->
	<!-- into 1 -->
	<div data-role="content" data-theme="a" id="intro1" style="display:none;">
	<div>
	<h1><img src="./theme_mobile/img/Picture1.png" alt=""></h1>
	<h1>BAGIAN I : APAKAH KAMU SUKA AKTIVITAS INI?</h1>
	</div>
	<fieldset class="ui-grid-a">
	<div class="ui-block-a"><button data-theme="a">Cancel</button></div>
	<div class="ui-block-b"><button id="bt_intro1" data-theme="d">lanjut</button></div>
	</fieldset>
	</div>
	<!-- end into 1 -->
	<!-- Rule -->
	<div data-role="content" data-theme="a" id="intro1a" style="display:none;">
	<h2>Cara Pengerjaan</h2>
	<ul>
	<li>Bagian I terdiri dari 6 kelompok: M – I – S – H – E – K</li><br/>
	<li>Setiap kelompok terdiri dari 7 kalimat/ aitem.</li><br/>
	<li>Tugasmu adalah memilih beberapa aktivitas yang kamu sukai dari ketujuh aitem tersebut.</li><br/>
	<li>Pilihlah dengan memberi tanda centang atau klik aitem yang kamu sukai.</li><br/>
	</ul>
	<fieldset class="ui-grid-a">
	<div class="ui-block-a"><button data-theme="a">Cancel</button></div>
	<div class="ui-block-b"><button id="bt_intro1a" data-theme="d">lanjut</button></div>
	</fieldset>
	</div>
	<!-- end Rule -->
	<!-- M -->
	<div data-role="content" data-theme="a" id="m1" style="display:none;">
	<ul data-role="listview" data-inset="true" data-divider-theme="a">
	<li data-role="list-divider">M</li>
	<li data-icon="gear"><a href="">
		<div data-role="fieldcontain">
		<fieldset data-role="controlgroup">
			<legend>Saya suka : </legend>
			<input type="checkbox" name="cbm1" id="cbm1" class="custom" />
			<label for="cbm1">Memperbaiki peralatan listrik</label>

			<input type="checkbox" name="cbm2" id="cbm2" class="custom" />
			<label for="cbm2">Memperbaiki mobil</label>

			<input type="checkbox" name="cbm3" id="cbm3" class="custom" />
			<label for="cbm3">Memperbaiki mesin – alat yang mekanis</label>

			<input type="checkbox" name="cbm4" id="cbm4" class="custom" />
			<label for="cbm4">Membangun sesuatu dari kayu</label>
			
			<input type="checkbox" name="cbm5" id="cbm5" class="custom" />
			<label for="cbm5">Ikut kursus teknologi/IT</label>
			
			<input type="checkbox" name="cbm6" id="cbm6" class="custom" />
			<label for="cbm6">Bekerja dengan peralatan mekanik</label>
			
			<input type="checkbox" name="cbm7" id="cbm7" class="custom" />
			<label for="cbm7">Mengoperasikan mesin atau peralatan motor</label>
		</fieldset>
	</div>
	</a></li>
	</ul> 
	<fieldset class="ui-grid-a">
	<div class="ui-block-a"><button id="btc_m1" data-theme="a">Kembali</button></div>
	<div class="ui-block-b"><button id="bt_m1" data-theme="d">lanjut</button></div>
	</fieldset>
	</div>
	<!-- end M -->
	<!-- i -->
	<div data-role="content" data-theme="a" id="i1" style="display:none;">
	<ul data-role="listview" data-inset="true" data-divider-theme="a">
	<li data-role="list-divider">I</li>
	<li data-icon="gear"><a href="">
		<div data-role="fieldcontain">
		<fieldset data-role="controlgroup">
			<legend>Saya suka : </legend>
			<input type="checkbox" name="checkbox-8a" id="checkbox-8a" class="custom" />
			<label for="checkbox-8a">Membaca buku ilmiah atau majalah</label>

			<input type="checkbox" name="checkbox-9a" id="checkbox-9a" class="custom" />
			<label for="checkbox-9a">Bekerja di ruang riset atau laboratorium</label>

			<input type="checkbox" name="checkbox-10a" id="checkbox-10a" class="custom" />
			<label for="checkbox-10a">Mengerjakan proyek keilmuan</label>

			<input type="checkbox" name="checkbox-11a" id="checkbox-11a" class="custom" />
			<label for="checkbox-11a">Ikut kursus/ kelompok belajar Fisika</label>
			
			<input type="checkbox" name="checkbox-12a" id="checkbox-12a" class="custom" />
			<label for="checkbox-12a">Ikut kursus/ kelompok belajar  Kimia</label>
			
			<input type="checkbox" name="checkbox-13a" id="checkbox-13a" class="custom" />
			<label for="checkbox-13a">Ikut kurus/ kelompok belajar  Matematika</label>
			
			<input type="checkbox" name="checkbox-14a" id="checkbox-14a" class="custom" />
			<label for="checkbox-14a">Ikut kursus/ kelompok belajar Biologi</label>
		</fieldset>
	</div>
	</a></li>
	</ul>
	<fieldset class="ui-grid-a">
	<div class="ui-block-a"><button id="btc_i1" data-theme="a">Kembali</button></div>
	<div class="ui-block-b"><button id="bt_i1" data-theme="d">lanjut</button></div>
	</fieldset>
	</div>
	<!-- end i -->
	<!-- s -->
	<div data-role="content" data-theme="a" id="s1" style="display:none;">
	<ul data-role="listview" data-inset="true" data-divider-theme="a">
	<li data-role="list-divider">S</li>
	<li data-icon="gear"><a href="">
		<div data-role="fieldcontain">
		<fieldset data-role="controlgroup">
			<legend>Saya suka : </legend>
			<input type="checkbox" name="checkbox-15a" id="checkbox-15a" class="custom" />
			<label for="checkbox-15a">Membuat sketsa, menggambar, atau melukis</label>

			<input type="checkbox" name="checkbox-16a" id="checkbox-16a" class="custom" />
			<label for="checkbox-16a">Bermain dalam band, kelompok atau orkestra</label>

			<input type="checkbox" name="checkbox-17a" id="checkbox-17a" class="custom" />
			<label for="checkbox-17a">Berlatih alat  musik</label>

			<input type="checkbox" name="checkbox-18a" id="checkbox-18a" class="custom" />
			<label for="checkbox-18a">Membuat lukisan atau foto</label>
			
			<input type="checkbox" name="checkbox-19a" id="checkbox-19a" class="custom" />
			<label for="checkbox-19a">Menulis novel atau drama</label>
			
			<input type="checkbox" name="checkbox-20a" id="checkbox-20a" class="custom" />
			<label for="checkbox-20a">Menciptakan aransemen atau mencipta musik</label>
			
			<input type="checkbox" name="checkbox-21a" id="checkbox-21a" class="custom" />
			<label for="checkbox-21a">Membaca tulisan tentang seni, sastra atau musik</label>
		</fieldset>
	</div>
	</a></li>
	</ul>
	<fieldset class="ui-grid-a">
	<div class="ui-block-a"><button id="btc_s1" data-theme="a">Kembali</button></div>
	<div class="ui-block-b"><button id="bt_s1" data-theme="d">lanjut</button></div>
	</fieldset>
	</div>
	<!-- end s -->
	<!-- H -->
	<div data-role="content" data-theme="a" id="h1" style="display:none;">
	<ul data-role="listview" data-inset="true" data-divider-theme="a">
	<li data-role="list-divider">H</li>
	<li data-icon="gear"><a href="">
		<div data-role="fieldcontain">
		<fieldset data-role="controlgroup">
			<legend>Saya suka : </legend>
			<input type="checkbox" name="checkbox-22a" id="checkbox-22a" class="custom" />
			<label for="checkbox-22a">Membaca tulisan atau buku sosial, seperti buku psikologi, sosiologi, politik, kemasyarakatan, dll</label>

			<input type="checkbox" name="checkbox-23a" id="checkbox-23a" class="custom" />
			<label for="checkbox-23a">Bekerja untuk kegiatan amal</label>

			<input type="checkbox" name="checkbox-24a" id="checkbox-24a" class="custom" />
			<label for="checkbox-24a">Membantu orang lain yang memiliki masalah pribadi</label>

			<input type="checkbox" name="checkbox-25a" id="checkbox-25a" class="custom" />
			<label for="checkbox-25a">Mempelajari masalah – masalah yang dihadapi remaja</label>
			
			<input type="checkbox" name="checkbox-26a" id="checkbox-26a" class="custom" />
			<label for="checkbox-26a">Bekerja sebagai sukarelawan</label>
			
			<input type="checkbox" name="checkbox-27a" id="checkbox-27a" class="custom" />
			<label for="checkbox-27a">Mengajar pengetahuan/ keterampilan kepada orang lain</label>
			
			<input type="checkbox" name="checkbox-28a" id="checkbox-28a" class="custom" />
			<label for="checkbox-28a">Mahir menjalin kerjasama dengan orang lain</label>
		</fieldset>
	</div>
	</a></li>
	</ul>
	<fieldset class="ui-grid-a">
	<div class="ui-block-a"><button id="btc_h1" data-theme="a">Kembali</button></div>
	<div class="ui-block-b"><button id="bt_h1" data-theme="d">lanjut</button></div>
	</fieldset>
	</div>
	<!-- end h -->
	<!-- E -->
	<div data-role="content" data-theme="a" id="e1" style="display:none;">
	<ul data-role="listview" data-inset="true" data-divider-theme="a">
	<li data-role="list-divider">E</li>
	<li data-icon="gear"><a href="">
		<div data-role="fieldcontain">
		<fieldset data-role="controlgroup">
			<legend>Saya suka : </legend>
			<input type="checkbox" name="checkbox-29a" id="checkbox-29a" class="custom" />
			<label for="checkbox-29a">Mempelajari strategi untuk keberhasilan usaha</label>

			<input type="checkbox" name="checkbox-30a" id="checkbox-30a" class="custom" />
			<label for="checkbox-30a">Menjalankan jasa atau usaha sendiri</label>

			<input type="checkbox" name="checkbox-31a" id="checkbox-31a" class="custom" />
			<label for="checkbox-31a">Ikut pelatihan administrasi atau kepemimpinan</label>

			<input type="checkbox" name="checkbox-32a" id="checkbox-32a" class="custom" />
			<label for="checkbox-32a">Memimpin kelompok</label>

			<input type="checkbox" name="checkbox-33a" id="checkbox-33a" class="custom" />
			<label for="checkbox-33a">Berpartisipasi dalam kampanye </label>

			<input type="checkbox" name="checkbox-34a" id="checkbox-34a" class="custom" />
			<label for="checkbox-34a">Mencoba beberapa usaha yang menghasilkan uang</label>

			<input type="checkbox" name="checkbox-35a" id="checkbox-35a" class="custom" />
			<label for="checkbox-35a">Membaca majalah atau tulisan tentang usaha</label>
		</fieldset>
	</div>
	</a></li>
	</ul>
	<fieldset class="ui-grid-a">
	<div class="ui-block-a"><button id="btc_e1" data-theme="a">Kembali</button></div>
	<div class="ui-block-b"><button id="bt_e1" data-theme="d">lanjut</button></div>
	</fieldset>
	</div>
	<!-- end e -->
	<!-- K -->
	<div data-role="content" data-theme="a" id="k1" style="display:none;">
	<ul data-role="listview" data-inset="true" data-divider-theme="a">
	<li data-role="list-divider">A</li>
	<li data-icon="gear"><a href="">
		<div data-role="fieldcontain">
		<fieldset data-role="controlgroup">
			<legend>Saya suka : </legend>
			<input type="checkbox" name="checkbox-36a" id="checkbox-36a" class="custom" />
			<label for="checkbox-36a">Menyimpan catatan rinci tentang pengeluaran</label>

			<input type="checkbox" name="checkbox-37a" id="checkbox-37a" class="custom" />
			<label for="checkbox-37a">Memiliki catatan yang rapi</label>

			<input type="checkbox" name="checkbox-38a" id="checkbox-38a" class="custom" />
			<label for="checkbox-38a">Mempelajari akuntansi</label>

			<input type="checkbox" name="checkbox-39a" id="checkbox-39a" class="custom" />
			<label for="checkbox-39a">Mendata persediaan atau barang </label>

			<input type="checkbox" name="checkbox-40a" id="checkbox-40a" class="custom" />
			<label for="checkbox-40a">Mengecek kesalahan atau kekurangan dari tulisan atau barang</label>

			<input type="checkbox" name="checkbox-41a" id="checkbox-41a" class="custom" />
			<label for="checkbox-41a">Mengupdate catatan atau file</label>

			<input type="checkbox" name="checkbox-42a" id="checkbox-42a" class="custom" />
			<label for="checkbox-42a">Lebih senang mengerjakan sesuatu di dalam ruangan</label>
		</fieldset>
	</div>
	</a></li>
	</ul>
	<fieldset class="ui-grid-a">
	<div class="ui-block-a"><button id="btc_k1" data-theme="a">Kembali</button></div>
	<div class="ui-block-b"><button id="bt_k1" data-theme="d">lanjut</button></div>
	</fieldset>
	</div>
	<!-- end k -->
	<!-- ending1 -->  
	<div data-role="content" data-theme="a" id="ending1" style="display:none;">
	<div>
	<h2>STOP DI BAGIAN INI</h2>
	<h2>CEK ULANG JAWABAN ANDA</h2>
	<h2>PASTIKAN TIDAK ADA YANG TERLEWATKAN !</h2>
	</div>
	<fieldset class="ui-grid-a">
	<div class="ui-block-a"><button id="btc_end1" data-theme="a">Kembali</button></div>
	<div class="ui-block-b"><button id="bt_end1" data-theme="d">lanjut</button></div>
	</fieldset>
	</div>
	<!-- end ending1 -->
	<!-- intro 2 -->
	<div data-role="content" data-theme="b" id="intro2a" style="display:none;">
	<div>
	<h1><img src="./theme_mobile/img/Picture1.png" alt=""></h1>
	<fieldset>
	<h2>BAGIAN II : APAKAH ANDA DAPAT MELAKUKANNYA DENGAN BAIK?</h2>
	</fieldset>
	</div>
	<fieldset class="ui-grid-a">
	<div class="ui-block-a"><button data-theme="a">Cancel</button></div>
	<div class="ui-block-b"><button id="bt_intro2" data-theme="d">lanjut</button></div>
	</fieldset>
	</div>
	<!-- end intro 1 -->
	<!-- Rule2 -->
	<div data-role="content" data-theme="a" id="rule2a" style="display:none;">
	<div>
	<h2>Cara Pengerjaan</h2>
	<ul>
	<li>Bagian II terdiri dari 6 kelompok: M – I – S – H – E – K</li><br/>
	<li>Setiap kelompok terdiri dari 7 kalimat/ aitem.</li><br/>
	<li>Tugasmu adalah memilih beberapa aktivitas yang dapat dilakukan dengan terampil dari ketujuh aitem tersebut</li><br/>
	<li>Pilihlah dengan memberi tanda centang atau klik aitem yang kamu sukai.</li><br/>
	</ul></div>
	<fieldset class="ui-grid-a">
	<div class="ui-block-a"><button data-theme="a">Cancel</button></div>
	<div class="ui-block-b"><button id="bt_rule2a" data-theme="d">lanjut</button></div>
	</fieldset>
	</div>
	<!-- end Rule2 -->
	<!-- M2 -->
	<div data-role="content" data-theme="a" id="m2" style="display:none;">
	<ul data-role="listview" data-inset="true" data-divider-theme="a">
	<li data-role="list-divider">M</li>
	<li data-icon="gear"><a href="">
		<div data-role="fieldcontain">
		<fieldset data-role="controlgroup">
			<legend>Saya terampil :</legend>
			<input type="checkbox" name="checkbox-1b" id="checkbox-1b" class="custom" />
			<label for="checkbox-1b">Mengganti oli atau ban</label> 
			
			<input type="checkbox" name="checkbox-2b" id="checkbox-2b" class="custom" />
			<label for="checkbox-2b">Memakai peralatan listrik seperti bor, gerinda atau mesin jahit</label>

			<input type="checkbox" name="checkbox-3b" id="checkbox-3b" class="custom" />
			<label for="checkbox-3b">Membuat perbaikan listrik yang sederhana</label>

			<input type="checkbox" name="checkbox-4b" id="checkbox-4b" class="custom" />
			<label for="checkbox-4b">Memperbaiki mesin kendaraan</label>
			
			<input type="checkbox" name="checkbox-5b" id="checkbox-5b" class="custom" />
			<label for="checkbox-5b">Menggunakan beberapa peralatan mekanik/ listrik</label>
			
			<input type="checkbox" name="checkbox-6b" id="checkbox-6b" class="custom" />
			<label for="checkbox-6b">Membangun sesuatu dari bahan-bahan kayu sederhana</label>
			
			<input type="checkbox" name="checkbox-7b" id="checkbox-7b" class="custom" />
			<label for="checkbox-7b">Bekerja dengan IT</label>
		</fieldset>
	</div>
	</a></li>
	</ul>
	<fieldset class="ui-grid-a">
	<div class="ui-block-a"><button id="btc_m2" data-theme="a">Kembali</button></div>
	<div class="ui-block-b"><button id="bt_m2" data-theme="d">lanjut</button></div>
	</fieldset>
	</div>
	<!-- end M2 -->
	<!-- i2 -->
	<div data-role="content" data-theme="a" id="i2" style="display:none;">
	<ul data-role="listview" data-inset="true" data-divider-theme="a">
	<li data-role="list-divider">I</li>
	<li data-icon="gear"><a href="">
		<div data-role="fieldcontain">
		<fieldset data-role="controlgroup">
			<legend>Saya terampil :</legend>
			<input type="checkbox" name="checkbox-8b" id="checkbox-8b" class="custom" />
			<label for="checkbox-8b">Mengerjakan aljabar untuk selesaikan soal matematika</label>

			<input type="checkbox" name="checkbox-9b" id="checkbox-9b" class="custom" />
			<label for="checkbox-9b">Melakukan percobaan atau survey ilmiah</label>

			<input type="checkbox" name="checkbox-10b" id="checkbox-10b" class="custom" />
			<label for="checkbox-10b">Menggunakan komputer untuk mengkaji masalah ilmiah</label>

			<input type="checkbox" name="checkbox-11b" id="checkbox-11b" class="custom" />
			<label for="checkbox-11b">Menjelaskan fungsi dari sel darah putih</label>
			
			<input type="checkbox" name="checkbox-12b" id="checkbox-12b" class="custom" />
			<label for="checkbox-12b">Memahami rumus kimia sederhana</label>
			
			<input type="checkbox" name="checkbox-13b" id="checkbox-13b" class="custom" />
			<label for="checkbox-13b">Menulis laporan ilmiah</label>
			
			<input type="checkbox" name="checkbox-14b" id="checkbox-14b" class="custom" />
			<label for="checkbox-14b">Memahami peran DNA dalam genetika</label>
		</fieldset>
	</div>
	</a></li>
	</ul>
	<fieldset class="ui-grid-a">
	<div class="ui-block-a"><button id="btc_i2" data-theme="a">Kembali</button></div>
	<div class="ui-block-b"><button id="bt_i2" data-theme="d">lanjut</button></div>
	</fieldset>
	</div>
	<!-- end i2 -->
	<!-- s2 -->
	<div data-role="content" data-theme="a" id="s2" style="display:none;">
	<ul data-role="listview" data-inset="true" data-divider-theme="a">
	<li data-role="list-divider">S</li>
	<li data-icon="gear"><a href="">
		<div data-role="fieldcontain">
		<fieldset data-role="controlgroup">
			<legend>Saya terampil :</legend>
			<input type="checkbox" name="checkbox-15b" id="checkbox-15b" class="custom" />
			<label for="checkbox-15b">Bermain alat musik</label>

			<input type="checkbox" name="checkbox-16b" id="checkbox-16b" class="custom" />
			<label for="checkbox-16b">Ikut serta dalam paduan suara maupun menjadi penyanyi tunggal</label>

			<input type="checkbox" name="checkbox-17b" id="checkbox-17b" class="custom" />
			<label for="checkbox-17b">Bermain drama</label>

			<input type="checkbox" name="checkbox-18b" id="checkbox-18b" class="custom" />
			<label for="checkbox-18b">Melukis, memahat atau mengambil foto-foto yang atraktif</label>
			
			<input type="checkbox" name="checkbox-19b" id="checkbox-19b" class="custom" />
			<label for="checkbox-19b">Mengaransemen atau mencipta musik</label>
			
			<input type="checkbox" name="checkbox-20b" id="checkbox-20b" class="custom" />
			<label for="checkbox-20b">Merancang baju, poster atau furnitur/perabot</label>
			
			<input type="checkbox" name="checkbox-21b" id="checkbox-21b" class="custom" />
			<label for="checkbox-21b">Menulis cerita, puisi atau pidato dengan baik</label>
		</fieldset>
	</div>
	</a></li>
	</ul>
	<fieldset class="ui-grid-a">
	<div class="ui-block-a"><button id="btc_s2" data-theme="a">Kembali</button></div>
	<div class="ui-block-b"><button id="bt_s2" data-theme="d">lanjut</button></div>
	</fieldset>
	</div>
	<!-- end s2 -->
	<!-- H -->
	<div data-role="content" data-theme="a" id="h2" style="display:none;">
	<ul data-role="listview" data-inset="true" data-divider-theme="a">
	<li data-role="list-divider">H</li>
	<li data-icon="gear"><a href="">
		<div data-role="fieldcontain">
		<fieldset data-role="controlgroup">
			<legend>Saya terampil :</legend>
			<input type="checkbox" name="checkbox-22b" id="checkbox-22b" class="custom" />
			<label for="checkbox-22b">Memulai pembicaraan dengan orang lain</label>

			<input type="checkbox" name="checkbox-23b" id="checkbox-23b" class="custom" />
			<label for="checkbox-23b">Menjelaskan suatu hal pada orang lain</label>

			<input type="checkbox" name="checkbox-24b" id="checkbox-24b" class="custom" />
			<label for="checkbox-24b">Menjadi pendengar cerita orang lain</label>

			<input type="checkbox" name="checkbox-25b" id="checkbox-25b" class="custom" />
			<label for="checkbox-25b">Membantu teman lain yang bermasalah</label>
			
			<input type="checkbox" name="checkbox-26b" id="checkbox-26b" class="custom" />
			<label for="checkbox-26b">Mempelajari masalah sosial</label>
			
			<input type="checkbox" name="checkbox-27b" id="checkbox-27b" class="custom" />
			<label for="checkbox-27b">Mahir membuat orang lain merasa terhibur</label>
			
			<input type="checkbox" name="checkbox-28b" id="checkbox-28b" class="custom" />
			<label for="checkbox-28b">Bekerja bersama orang daripada dengan barang/ ide</label>
		</fieldset>
	</div>
	</a></li>
	</ul>
	<fieldset class="ui-grid-a">
	<div class="ui-block-a"><button id="btc_h2" data-theme="a">Kembali</button></div>
	<div class="ui-block-b"><button id="bt_h2" data-theme="d">lanjut</button></div>
	</fieldset>
	</div>
	<!-- end h2 -->
	<!-- E2 -->
	<div data-role="content" data-theme="a" id="e2" style="display:none;">
	<ul data-role="listview" data-inset="true" data-divider-theme="a">
	<li data-role="list-divider">E</li>
	<li data-icon="gear"><a href="">
		<div data-role="fieldcontain">
		<fieldset data-role="controlgroup">
			<legend>Saya terampil :</legend>
			<input type="checkbox" name="checkbox-29b" id="checkbox-29b" class="custom" />
			<label for="checkbox-29b">Menjadi pemimpin yang sukses</label>

			<input type="checkbox" name="checkbox-30b" id="checkbox-30b" class="custom" />
			<label for="checkbox-30b">Berbicara di hadapan publik/umum</label>

			<input type="checkbox" name="checkbox-31b" id="checkbox-31b" class="custom" />
			<label for="checkbox-31b">Mengorganisir pekerjaan kelompok</label>

			<input type="checkbox" name="checkbox-32b" id="checkbox-32b" class="custom" />
			<label for="checkbox-32b">Membujuk orang melakukan hal yang sesuai cara saya</label>

			<input type="checkbox" name="checkbox-33b" id="checkbox-33b" class="custom" />
			<label for="checkbox-33b">Berdebat dengan logis tanpa melukai orang lain</label>

			<input type="checkbox" name="checkbox-34b" id="checkbox-34b" class="custom" />
			<label for="checkbox-34b">Terampil melakukan perencanaan dengan baik</label>

			<input type="checkbox" name="checkbox-35b" id="checkbox-35b" class="custom" />
			<label for="checkbox-35b">Terampil dalam memimpin kelompok</label>
		</fieldset>
	</div>
	</a></li>
	</ul>
	<fieldset class="ui-grid-a">
	<div class="ui-block-a"><button id="btc_e2" data-theme="a">Kembali</button></div>
	<div class="ui-block-b"><button id="bt_e2" data-theme="d">lanjut</button></div>
	</fieldset>
	</div>
	<!-- end e2 -->
	<!-- A2 -->
	<div data-role="content" data-theme="a" id="k2" style="display:none;">
	<ul data-role="listview" data-inset="true" data-divider-theme="a">
	<li data-role="list-divider">A</li>
	<li data-icon="gear"><a href="">
		<div data-role="fieldcontain">
		<fieldset data-role="controlgroup">
			<legend>Saya terampil :</legend>
			<input type="checkbox" name="checkbox-36b" id="checkbox-36b" class="custom" />
			<label for="checkbox-36b">Menyimpan dokumen secara teratur</label>

			<input type="checkbox" name="checkbox-37b" id="checkbox-37b" class="custom" />
			<label for="checkbox-37b">Menyelesaikan tugas akuntansi</label>

			<input type="checkbox" name="checkbox-38b" id="checkbox-38b" class="custom" />
			<label for="checkbox-38b">Mengoperasionalkan microsoft excel</label>

			<input type="checkbox" name="checkbox-39b" id="checkbox-39b" class="custom" />
			<label for="checkbox-39b">Menempatkan kredit dan debit</label>

			<input type="checkbox" name="checkbox-40b" id="checkbox-40b" class="custom" />
			<label for="checkbox-40b">Melakukan pencatatan penjualan yang akurat</label>

			<input type="checkbox" name="checkbox-41b" id="checkbox-41b" class="custom" />
			<label for="checkbox-41b">Melakukan aktivitas kantor yang rutin</label>

			<input type="checkbox" name="checkbox-42b" id="checkbox-42b" class="custom" />
			<label for="checkbox-42b">Melakukan kegiatan dengan hati-hati dan rapi</label>
		</fieldset>
	</div>
	</a></li>
	</ul>
	<fieldset class="ui-grid-a">
	<div class="ui-block-a"><button id="btc_k2" data-theme="a">Kembali</button></div>
	<div class="ui-block-b"><button id="bt_k2" data-theme="d">lanjut</button></div>
	</fieldset>
	</div>
	<!-- end k2 -->
	<!-- ending2 -->  
	<div data-role="content" data-theme="a" id="ending2" style="display:none;">
	<div>
	<h2>STOP DI BAGIAN INI</h2>
	<h2>CEK ULANG JAWABAN ANDA</h2>
	<h2>PASTIKAN TIDAK ADA YANG TERLEWATKAN !</h2>
	</a>
	<fieldset class="ui-grid-a">
	<div class="ui-block-a"><button id="btc_end2" data-theme="a">Kembali</button></div>
	<div class="ui-block-b"><button id="bt_end2" data-theme="d">LIHAT HASIL</button></div>
	</fieldset>
	</div>
	</div>
	<!-- end ending2 -->
	<!-- result -->  
	<div data-role="content" data-theme="a" id="result" style="display:none;">
		<h2>Hasil Penelusuran</h2>
		<ul data-role="listview" data-inset="true" data-divider-theme="a">
			<li data-role="list-divider">Indonesia</li>
			<li data-icon="gear"><a href=""><div id="pind"></div> Point</a></li> 
		</ul>
		<!--<ul data-role="listview" data-inset="true" data-divider-theme="b">
			<li data-role="list-divider">Inggris</li>
			<li data-icon="gear"><a href=""><div id="ping"></div> Point</a></li> 
		</ul>
		<ul data-role="listview" data-inset="true" data-divider-theme="c">
			<li data-role="list-divider">Bahasa Daerah</li>
			<li data-icon="gear"><a href=""><div id="pbd"></div> Point</a></li> 
		</ul>
		<ul data-role="listview" data-inset="true" data-divider-theme="d">
			<li data-role="list-divider">PKn</li>
			<li data-icon="gear"><a href=""><div id="ppkn"></div> Point</a></li> 
		</ul>
		<ul data-role="listview" data-inset="true" data-divider-theme="e">
			<li data-role="list-divider">Pendidikan Ekonomi </li>
			<li data-icon="gear"><a href=""><div id="peko"></div> Point</a></li> 
		</ul>
		<ul data-role="listview" data-inset="true" data-divider-theme="f">
			<li data-role="list-divider">PJKR</li>
			<li data-icon="gear"><a href=""><div id="pkjr"></div> Point</a></li> 
		</ul>
		<ul data-role="listview" data-inset="true" data-divider-theme="a">
			<li data-role="list-divider">Matematika</li>
			<li data-icon="gear"><a href=""><div id="pmat"></div> Point</a></li> 
		</ul>
		<ul data-role="listview" data-inset="true" data-divider-theme="b">
			<li data-role="list-divider">Biologi</li>
			<li data-icon="gear"><a href=""><div id="pbio"></div> Point</a></li> 
		</ul>
		<ul data-role="listview" data-inset="true" data-divider-theme="c">
			<li data-role="list-divider">Fisika</li>
			<li data-icon="gear"><a href=""><div id="pfis"></div> Point</a></li> 
		</ul>
		<ul data-role="listview" data-inset="true" data-divider-theme="d">
			<li data-role="list-divider">Teknologi Informasi</li>
			<li data-icon="gear"><a href=""><div id="pti"></div> Point</a></li> 
		</ul>
		<ul data-role="listview" data-inset="true" data-divider-theme="e">
			<li data-role="list-divider">Teknik Sipil </li>
			<li data-icon="gear"><a href=""><div id="pspl"></div> Point</a></li> 
		</ul>
		<ul data-role="listview" data-inset="true" data-divider-theme="f">
			<li data-role="list-divider">Teknik Mesin </li>
			<li data-icon="gear"><a href=""><div id="pmsn"></div> Point</a></li> 
		</ul>

		<ul data-role="listview" data-inset="true" data-divider-theme="a">
			<li data-role="list-divider">Teknik Elektro </li>
			<li data-icon="gear"><a href=""><div id="pelk"></div> Point</a></li> 
		</ul>
		<ul data-role="listview" data-inset="true" data-divider-theme="b">
			<li data-role="list-divider">Teknologi Pangan</li>
			<li data-icon="gear"><a href=""><div id="ppgn"></div> Point</a></li> 
		</ul>
		<ul data-role="listview" data-inset="true" data-divider-theme="c">
			<li data-role="list-divider">Informatika</li>
			<li data-icon="gear"><a href=""><div id="pinf"></div> Point</a></li> 
		</ul>
		<ul data-role="listview" data-inset="true" data-divider-theme="d">
			<li data-role="list-divider">Arsitek</li>
			<li data-icon="gear"><a href=""><div id="pars"></div> Point</a></li> 
		</ul>
		<ul data-role="listview" data-inset="true" data-divider-theme="e">-->
			<li data-role="list-divider">T.Lingkungan </li>
			<li data-icon="gear"><a href=""><div id="plink"></div> Point</a></li> 
		</ul> 
	</div>
	<!-- end result -->
	</div>
	</body>
<script>
  var base_url='';
      $(document).ready(function(){
        //$("#form_register").validationEngine()
		});           
    function addsubmit(){ 
      var nama=$('#nama').val();
      var kelas=$('#kelas').val();
      var jurusan=$('#jurusan').val(); 
      var jkel=$('#jkel').val();
      var pass=$('#thn_lhr').val()+'-'+$('#bln_lhr').val()+'-'+$('#tgl_lhr').val(); 
      $('#isi_data_diri').slideUp(300); 
      $('#rule').show(300);       
      return false;
      
    }
	function simpanto_db($data){ 
		var datpost=$data;
      	var nama=$('#nama').val();
      	var kelas=$('#kelas').val();
      	var jurusan=$('#jurusan').val(); 
      	var jkel=$('#jkel').val();
      	var pass=$('#thn_lhr').val()+'-'+$('#bln_lhr').val()+'-'+$('#tgl_lhr').val(); 
			$.post('simpan.php',{'tgl_lahir':pass,'nama':nama,'jurusan':jurusan,'jkel':jkel,'kelas':kelas,'data':datpost}, function(data){
        		if(data.valid){
					alert('Data Sudah Berhasil Di Simpan');
        		}else{
          			alert('Mohon Isi Data Dengan Lengkap');
        		}
      		},'json');      
      return false;
      
      
    }
	function hitung(){ 
		var m1=0,i1=0,s1=0,h1=0,e1=0,k1=0;
		var m2=0,i2=0,s2=0,h2=0,e2=0,k2=0;
		//m = $('input[type="checkbox"]:checked').length;
		m1 = $('#m1').find('input[type="checkbox"]:checked').length;
		i1 = $('#i1').find('input[type="checkbox"]:checked').length;
		s1 = $('#s1').find('input[type="checkbox"]:checked').length;
		h1 = $('#h1').find('input[type="checkbox"]:checked').length;
		e1 = $('#e1').find('input[type="checkbox"]:checked').length;
		k1 = $('#k1').find('input[type="checkbox"]:checked').length;
		m2 = $('#m2').find('input[type="checkbox"]:checked').length;
		i2 = $('#i2').find('input[type="checkbox"]:checked').length;
		s2 = $('#s2').find('input[type="checkbox"]:checked').length;
		h2 = $('#h2').find('input[type="checkbox"]:checked').length;
		e2 = $('#e2').find('input[type="checkbox"]:checked').length;
		k2 = $('#k2').find('input[type="checkbox"]:checked').length;
		var M=0,I=0,S=0,H=0,E=0,K=0,A=0;
		M=m1+m2;
		I=i1+i2;
		S=s1+s2;
		H=h1+h2;
		E=e1+e2;
		K=k1+k2;
		//alert(M,I,S,H,E,K);

		var Indonesia='',Inggris='',Daerah='',PKn='',Ekonomi='',PJKR='',Matematika='',Biologi='',Fisika='',Informasi='',Sipil='',Mesin='',Elektro='',Pangan='',Informatika='',Arsitek='',Lingkungan='';
		Indonesia =S+H+E+A;
		Inggris =S+H+E+A;
		Daerah =S+H+E+A;
		PKn =E+I+H;
		Ekonomi =E+A+I;
		PJKR =E+H+M;
		Matematika =I+A+E;
		Biologi =I+S+E+A;
		Fisika =I+S+A+E;
		Informasi =M+A+I+E;
		Sipil =M+S+E;
		Mesin =M+I+E;
		Elektro =M+I+E;
		Pangan =I+M+E;
		Informatika =M+I+E;
		Arsitek =M+I+S+E;
		Lingkungan =M+I+E;
		$('#pind').html(Indonesia);
		$('#ping').html(Inggris);
		$('#pbd').html(Daerah);
		$('#ppkn').html(PKn);
		$('#peko').html(Ekonomi);
		$('#pjkr').html(PJKR);
		$('#pmat').html(Matematika);
		$('#pbio').html(Biologi);
		$('#pfis').html(Fisika);
		$('#pinf').html(Informasi);
		$('#pspl').html(Sipil);
		$('#pmsn').html(Mesin);
		$('#pelk').html(Elektro);
		$('#ppgn').html(Pangan);
		$('#pinf').html(Informatika);
		$('#pars').html(Arsitek);
		$('#plink').html(Lingkungan);
		var datax=[M,I,S,H,E,K];
		simpanto_db(datax);
		$('#result').show(300);
	}
	
	$('#btn1').click(function() { 
	  $('#rule').show(300); 
	  $('#isi_data_diri').slideUp(300);  
	});
	$( "#bt_rule" ).click(function() { 
  $('#rule').slideUp(300); 
  $('#intro1').show(300);  
	});
	$( "#bt_intro1" ).click(function() {
  $('#intro1').slideUp(300); 
  $('#intro1a').show(300);  
	});
	$( "#bt_intro1a" ).click(function() {
  $('#intro1a').slideUp(300); 
  $('#m1').show(300);  
	});
	$( "#bt_m1" ).click(function() {
  $('#m1').slideUp(300); 
  $('#i1').show(300);  
	});	
	$( "#btc_m1" ).click(function() {
  $('#m1').slideUp(300); 
  $('#intro1a').show(300);  
	});
	$( "#bt_i1" ).click(function() {
  $('#i1').slideUp(300); 
  $('#s1').show(300);  
	});
	$( "#btc_i1" ).click(function() {
  $('#m1').show(300);
  $('#i1').slideUp(300);  
	});
	$( "#bt_s1" ).click(function() {
  $('#s1').slideUp(300); 
  $('#h1').show(300);  
	});
	$( "#btc_s1" ).click(function() {
  $('#s1').slideUp(300); 
  $('#i1').show(300);  
	});
	$( "#bt_h1" ).click(function() {
  $('#h1').slideUp(300); 
  $('#e1').show(300);  
	});
	$( "#btc_h1" ).click(function() {
  $('#h1').slideUp(300); 
  $('#s1').show(300);  
	});
	$( "#btc_e1" ).click(function() {
  $('#e1').slideUp(300); 
  $('#h1').show(300);  
	});
	$( "#bt_e1" ).click(function() {
  $('#e1').slideUp(300); 
  $('#k1').show(300);  
	});
	$( "#bt_k1" ).click(function() {
  $('#k1').slideUp(300); 
  $('#ending1').show(300);  
	});
	$( "#btc_k1" ).click(function() {
  $('#k1').slideUp(300); 
  $('#e1').show(300);  
	});
	$( "#bt_end1" ).click(function() {
  $('#ending1').slideUp(300); 
  $('#intro2a').show(300);  
	});
	$( "#btc_end1" ).click(function() {
  $('#ending1').slideUp(300); 
  $('#k1').show(300);  
	});
	//seri ke dua
	$( "#bt_intro2" ).click(function() {
  $('#intro2a').slideUp(300); 
  $('#rule2a').show(300);  
	});	
	$( "#bt_rule2a" ).click(function() {
  $('#rule2a').slideUp(300); 
  $('#m2').show(300);  
	});	
	$( "#bt_m2" ).click(function() {
  $('#m2').slideUp(300); 
  $('#i2').show(300);  
	});	
	$( "#btc_m2" ).click(function() {
  $('#m2').slideUp(300); 
  $('#intro1a').show(300);  
	});
	$( "#bt_i2" ).click(function() {
  $('#i2').slideUp(300); 
  $('#s2').show(300);  
	});
	$( "#btc_i2" ).click(function() {
  $('#m2').show(300);
  $('#i2').slideUp(300);  
	});
	$( "#bt_s2" ).click(function() {
  $('#s2').slideUp(300); 
  $('#h2').show(300);  
	});
	$( "#btc_s2" ).click(function() {
  $('#s2').slideUp(300); 
  $('#i2').show(300);  
	});
	$( "#bt_h2" ).click(function() {
  $('#h2').slideUp(300); 
  $('#e2').show(300);  
	});
	$( "#btc_h2" ).click(function() {
  $('#h2').slideUp(300); 
  $('#s2').show(300);  
	});
	$( "#btc_e2" ).click(function() {
  $('#e2').slideUp(300); 
  $('#h2').show(300);  
	});
	$( "#bt_e2" ).click(function() {
  $('#e2').slideUp(300); 
  $('#k2').show(300);  
	});
	$( "#bt_k2" ).click(function() {
  $('#k2').slideUp(300); 
  $('#ending2').show(300);  
	});
	$( "#btc_k2" ).click(function() {
  $('#k2').slideUp(300); 
  $('#e2').show(300);  
	});
	$( "#bt_end2" ).click(function() {
	hitung();
	$('#ending2').slideUp(300);  
	});
	$( "#btc_end2" ).click(function() {
  $('#ending2').slideUp(300); 
  $('#k2').show(300);  
	});
</script
</script
</html>