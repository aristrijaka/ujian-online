function konfirmasiHapus(url,id,ket)
	{
		var jawab = confirm("Anda yakin menghapus data dari " + ket + "?");
		if(jawab)
			{
				window.location = url + "/hapus.php?" + id;
			}
		else{}
	}
	
function hapusFile(url,id,ket)
	{
		var jawabfile = confirm("Anda yakin menghapus data " + ket + "?");
		if(jawabfile)
			{
				window.location = url + "/hapusagenda.php?" + id;
			}
		else{}
	}	

function bukaJendela(url,w,h,id)
	{
		var param = 'scrollbars,location=false,titlebar=no,width=' + w + ',height=' + h;
		var nama = 'jendela_' + id;
		newWindow = window.open(url,nama,param);
		newWindow.focus();
	}

function alertWebBrowser(web)
	{
		if(web == 'Internet Explorer')
			{
				alert("PERHATIAN!!!!\nDEMI KEAMANAN GUNAKAN WEB BROWSER SELAIN INTERNET EXPLORER!\nANDA TIDAK DIPERBOLEHKAN LOGIN JIKA TETAP MENGGUNAKAN BROWSER INI.");
			}
		else{}
	}

function calon_nopes()
	{	
		var kuota = document.a1.kuota.value;
		var kab = document.a1.kab.value;
		var mapel = document.a1.mapel.value;
		var dept = document.a1.dept.value;
		if(kuota=='')
			{
				kuota='XX';
			}
		else{}
		if(kab=='')
			{
				kab='XXXX';
			}
		else{}
		if(mapel=='')
			{
				mapel='XXX';
			}
		else{}
		if(dept=='')
			{
				dept='X';
			}
		else{}
		document.getElementById("tampilan_no_peserta").innerHTML = kuota + kab + mapel + dept + 'XXXX';
	}

function ubahElemen(elemen,string)
	{
		document.getElementById(elemen).innerHTML = string;
	}

function cek_form()
	{	
		var f1 = document.kkn.keg_in.value;
		var f2 = document.kkn.keg_out.value;
		var f3 = document.kkn.ketrampilan.value;
		var f4 = document.kkn.jaket.value;
		var f5 = document.kkn.kesehatan.value;
		var f6 = document.kkn.rq.value; 
		var trig = '1';
		var peringatan = '';
		if(f1==''){trig = '0'; peringatan += 'Kegiatan didalam kampus; ';}
		else{}
		if(f2==''){trig = '0'; peringatan += 'Kegiatan diluar kampus; ';}
		else{}
		if(f3==''){trig = '0'; peringatan += 'Ketrampilan; ';}
		else{}
		if(f4==''){trig = '0'; peringatan += 'Ukuran Jaket; ';}
		else{}
		if(f5==''){trig = '0'; peringatan += 'Kondisi Kesehatan; ';}
		else{}
		if(f6==''){trig = '0'; peringatan += 'Pertanyaan Acak; ';}
		else{}
		if(trig=='0'){alert('Ada komponen penting yang masih kosong ('+peringatan+') Silakan lengkapi bagian tersebut!');}
		else 
		{kkn.submit();}
	}
	
function cek_pmb1()
	{	
		var f1 = document.pmb1.prop_almt.value;
		var f2 = document.pmb1.prop_lhr.value;
		var f4 = document.pmb1.prop_sklh.value;
		var f5 = document.pmb1.kota_almt.value;
		var f5 = document.pmb1.kota_lhr.value;
		var f6 = document.pmb1.kota_sklh.value;
		var trig = '1';
		var peringatan = '';
		if(f1==''){trig = '0'; peringatan += ' [Provinsi Alamat Asal] ';}
		else{}
		if(f2==''){trig = '0'; peringatan += ' [Provinsi Tempat Lahir] ';}
		else{}
		if(f3==''){trig = '0'; peringatan += ' [Provinsi Asal Sekolah] ';}
		else{}
		if(f4==''){trig = '0'; peringatan += ' [Kota Alamat Asal] ';}
		else{}
		if(f5==''){trig = '0'; peringatan += ' [Kota Tempat Lahir]';}
		else{}
		if(f6==''){trig = '0'; peringatan += ' [Kota Asal Sekolah] ';}
		else{}
		if(trig=='0'){alert('Anda wajib memilih '+peringatan+' !');}
		else 
		{pmb1.submit();}
	}


function cek_kkn1()
	{	
		var a1 = document.kkn.periode.value;
		var a2 = document.kkn.kab.value;
		var a3 = document.kkn.kec.value;
		var a4 = document.kkn.desa.value;
		var a5 = document.kkn.nim.value;
		var trig = '1';
		var peringatan = '';
		if(a1==''){trig = '0'; peringatan += 'Periode; ';}
		else{}
		if(a2==''){trig = '0'; peringatan += 'Kabupaten; ';}
		else{}
		if(a3==''){trig = '0'; peringatan += 'Kecamatan; ';}
		else{}
		if(a4==''){trig = '0'; peringatan += 'Desa; ';}
		else{}
		if(a5==''){trig = '0'; peringatan += 'NIM; ';}
		else{}
		if(trig=='0'){alert('Ada komponen penting yang masih kosong ('+peringatan+') Silakan lengkapi bagian tersebut!');}
		else 
		{kkn.submit();}
	}
function cek_duplikat(url,variabel,tampilan,str,len)
	{
		if(str.length>=len){posting_var(url,variabel,tampilan);}
		else{}
	}
function selecting(elemen,kondisi)
	{
		if(kondisi=='1'){document.getElementById(elemen).checked = true;}
		else{document.getElementById(elemen).checked = false;}
	}
