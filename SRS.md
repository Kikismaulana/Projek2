<div align="center">
<h1>Software Requirement Specification</h1> 

<p>Version 1.1 <br> 04 Maret 2018</p>

<img src="https://image.ibb.co/bJCF0x/POLINDRA.png" height="300px">

<br><br>

<h2>M-AFI</h2><br>

<table>
	<tr>
		<td>
			<ul>
			
				<li>Diyah Ayu Amaliyah</li>
			
				<li>Kikis Maulana</li>
			
				<li>Noufal Ibrahim</li>
			
				<li>Triyani Ramadhani</li>
			
				<li>Widiana Silvi</li>
			
			<ul>
		</td>

		<td>
			<ul>
			
				<li>1603067</li>
			
				<li>1603074</li>
			
				<li>1603080</li>
			
				<li>1603086</li>
			
				<li>1603088</li>
			
			<ul>
		</td>
	</tr>
</table>

<h2>Jurusan D3 Teknik Informatika
<br><br>
Politeknik Negeri Indramayu</h2>

</div>


## Pendahuluan ##

1.1. Tujuan
	
Tujuan dari penulisan dokumen Softaware Requirement Specification (SRS) untuk mempermudah mengembangkan perangkat lunak untuk Mobile-Attendance Fingerprint dan memberikan gambaran yang spesifik dari kebutuhan softaware Mobile-Attendance Fingerprint(M-AFI). Spesifikasi kebutuhan tersebut termasuk dari segi perangkat lunak dan perangkat keras,untuk memberikan gambaran dan  penjelasan mengenai pembuatan produk termasuk kebutuhan fungsional hingga non-fungsional, dan kebutuhan antar muka mulai dari antar muka pengguna hingga antar muka komunikasi.


1.2. Lingkup

Ruang lingkup dalam membangun aplikasi M-AFI yaitu Mobile Attendence Fingerprint menggunakan beberapa perangkat lunak yang mendukung, diantaranya saat penginputan data siswa dan guru dimana admin harus mengoperasikannya melalui webserver pada komputer/laptop. M-AFI ini perlu dibuatkan karena untuk mempermudah instansi pendidikan untuk sistem absensinya.

1.3. Definisi, akronim, singkatan

Singkatan | Definisi 
| ------ | ------ |
| SRS | Merupakan singkatan dari Software Requirement Specfication |
| M-AFI | Singkatan Dari Mobile Attendence merupakan sebuah aplikasi absensi yang menggunakan mobile  |
|Fingerprint| Merupakan fingerprint merupakan suatu perangkat keras untuk memberikan data otomatis yang menggunakan sidik jari manusia. fingerprint digunakan biasannya untuk sistem absensi yang digunakan beberapa instansi.|
| Webserver | Webserver sebuah software yang memberikan layanan berbasis data dan berfungsi menerima permintaan dari HTTP atau HTTPS pada klien yang dikenal dan biasanya kita kenal dengan nama web browser (Mozilla Firefox, Google Chrome) dan untuk mengirimkan kembali yang hasilnya dalam bentuk beberapa halaman web dan pada umumnya akan berbentuk dokumen HTML. |
| LAN | LAN merupakan singkatan dari Local Area Network, yang mana merupakan sebuah jaringan komputer dengan skala kecil (local) seperti gedung perkantoran, sekolah atau rumah. LAN umumnya digunakan untuk berbagi resource dalam suatu gedung. LAN dapat berdiri sendiri, tanpa terhubung oleh jaringan luar atau internet. Namun apabila suatu LAN dihubungkan dengan beberapa LAN lainnya maka akan terbentuk suatu jaringan yang disebut Metropolitan Area Network (MAN). |


1.4. Referensi

http://hanungnp.staff.telkomuniversity.ac.id/files/2015/04/contoh-SKPL-Sistem-informasi-tugas-akhir-SISTA.pdf

https://dillinger.io/

https://martinyunianto.wordpress.com/desain-dan-implementasi-sistem-informasi-absensi/


1.5. Overview

Pada dokumen ini memberikan penjelasan tentang gambaran umum, termasuk karakterisitik pengguna proyek ini, hardware produk, dan persyaratan fungsional seperti data siswa/guru pada instansi yag terkait yang digunakan untuk persyaratan penginputan data. Gambaran umum ini dibahasan pada bagian 2 yang terdiri dari prespektif produk,antarmuka sistem, antarmuka pengguna,antarmuka perangkat keras,antarmuka perangkat lunak sampe anatrmuka komunikasi. Hal ini juga dapat memberikan suatu kebutuhan yang terdapat pada aplikasi M-AFI (Mobile Attandence Finger Print).


## Gambaran Umum ##

2.1. Perspektif produk

A.    Perbandingan dengan produk-produk kompetitor

1.    Absensi siswa realtime dengan sms gateway

Aplikasi ini adalah aplikasi absensi yang memanfaatkan fitur sms gateway, aplikasi ini digunakan untuk memantau para siswa terkait dengan tingkat kedisiplinan dalam proses belajar di sekolah, dimana tingkat kedisiplinan kehadiran siswa menjadi salah satu tolok ukur dalam proses penilaian. 
Aplikasi ini memiliki kelebihan untuk orang tua siswa dalam memantau anaknya apabila anaknya tersebut tidak hadir di sekolah, sistem akan otomatis mengirim pemberitahuan melalui sms langsung ke HP orang tua siswa.

![](https://image.ibb.co/jVdNfx/Absensi_siswa.png)

2.    Sistem absensi fingerprint untuk dosen di POLINDRA

Sistem absensi dosen yang diterapkan untuk para dosen di POLINDRA ini adalah sistem absensi yang diterapkan dengan menggunakan fingerprint, sistem ini mempunyai kelebihan cepat dan akurat dalam proses absensi, karena sistem ini menggunakan metode biometrik dalam pengaplikasiannya, metode biometrik dalam sistem ini adalah menggunakan sidik jari dosen.
Sistem ini belum bisa dilihat report presensinya untuk para dosen, jadi aplikasi ini hanya sekedar absensi menggunakan sidik jari, dan data absensi nya hanya masuk ke database, tetapi tidak bisa dilihat oleh para dosen.

![](https://image.ibb.co/cww8Lx/absensi_polindra.jpg)

3.    M-AFI (Mobile-Attendance Fingerprint)

M-AFI (Mobile-Attendance Fingerprint) adalah aplikasi project 2 yang sedang kita garap saat ini, aplikasi ini diterapkan untuk absensi siswa menggunakan fingerprint. Fingerprint adalah sebuah metode biometrik yang mana pengaplikasiannya menggunakan sidik jari.
Aplikasi ini memiliki 4 user, yaitu user admin, user monitoring (orang tua siswa), user guru dan user siswa. User admin mempunyai hak akses untuk mengelola semua data diantaranya; data jurusan, data kelas, data siswa, data guru, data user dan data presensi melalui web server. User monitoring adalah user pengguna aplikasi android yang memonitoring report presensi siswa dengan menggunakan aplikasi mobile melalui smartphone, dimana user monitoring tersebut adalah orang orang tua siswa yang hanya dapat memonitoring presensi anaknya. User Guru dan user siswa hanya mempunyai hak akses untuk mendownload hasil/rekap presensi menggunakan aplikasi mobile melalui smartphone.
Aplikasi ini juga bisa mengirimkan izin siswa melalui user monitoring (orang tua siswa) melalui smartphone, orang tua siswa bisa mengirimkan surat izin atau sakit dengan cara mengupload foto surat izin yang sebelumnya sudah dibuat tulis tangan oleh orang tua, dan selanjutnya surat itu difoto dan di upload melalui aplikasi M-AFI, yang nantinya dari sisi user admin akan menerima notifikasi dari web server dan selanjutnya akan di update keterangan presensi siswa tersebut oleh admin.

B. Perbedaan system M-AFI dengan kompetitor

No | Nama Aplikasi | Keunggulan | Kekurangan
-- |  ------------ | ---------- | ----------
1 | Absensi siswa realtime dengan sms gateway | Orang tua siswa dapat memantau kehadiran anaknya melalui sms gateway | Admin banyak mengeluarkan uang untuk membeli pulsa karena menggunakan sms gateway
2 | Sistem absensi fingerprint untuk dosen di POLINDRA | Cepat dalam  kegiatan absensi karena menggunakan sidik jari | Dosen tidak bisa melihat report absensi nya sendiri karna data absensi hanya disimpan di mesin fingerprint. Tidak bisa menjamin keakuratan sidik jari karena bisa saja kemungkinan sewaktu-waktu data sidik jari tertukar
3 | M-AFI (Mobile-Attendance Fingerprint | User siswa lebih cepat dalam kegiatan absensi karena menggunakan sidik jari. User monitoring (orang tua siswa dan guru) juga bisa melihat/memonitoring report presensi di aplikasi mobile secara realtime | Tidak bisa menjamin keakuratan sidik jari karena bisa saja kemungkinan sewaktu-waktu data sidik jari tertukar


	2.1.1. Antarmuka sistem

![](https://image.ibb.co/m2STDS/Antarmuka_sistem.png)

Mobile - Attendance Fingerprint memiliki 3 faktor pada pengimplementasiannya, diantaranya, Siswa, Orangtua siswa dan admin.
Siswa berperan sebagai inputan pada presensi melalui device fingerprint.
Orang tua siswa dapat mengakses aplikasi M-AFI melalui perangkat mobile dengan standar sistem operasi Lolipop dan harus menggunakan akses internet.
Admin bertugas untuk memanage presensi pada webserver.

	2.1.2. Antarmuka Pengguna

![](https://image.ibb.co/hbTof7/login.png)

![](https://image.ibb.co/jSzGYS/login2.png)

![](https://image.ibb.co/mpYznn/dasboard.png)

![](https://image.ibb.co/dax3DS/sidebar.png)

![](https://image.ibb.co/bBFqtS/logout.png)

![](https://image.ibb.co/dsvZL7/izin_siswa.png)

![](https://image.ibb.co/gqoof7/lupa_password.png)


	2.1.3. Antarmuka perangkat keras

- Fingerprint

Fingerprint adalah sebuah hardware sensor untuk membaca sidik jari yang unik dari seseorang yang berguna untuk memverifikasi identitas seseorang. Sensor ini dapat digunakan sebagai password untuk membuka telepon, membuka konten atau layanan tertentu atau mengkonfirmasi transaksi keuangan. Pada hal ini device fingerprint berguna untuk presensi siswa-siswi.

- Server

adalah sebuah sistem komputer yang menyediakan jenis layanan (service) tertentu dalam sebuah jaringan komputer. Server didukung dengan prosesor yang bersifat scalable dan RAM yang besar, juga dilengkapi dengan sistem operasi khusus, yang disebut sebagai sistem operasi jaringan (network operating system).

- Laptop

Digunakan untuk pembuatan aplikasi M-AFI.

- Smartphone

Semartphone berfungsi untuk implementasi aplikasi mobile M-AFI.


	2.1.4. Antarmuka perangkat lunak

- Webserver

    Untuk Webserver admin dapat di akses menggunakan semua jenis browser (google chrom, Mozila, Opera dan lain-lain), dan pastinya harus menggunakan akses internet untuk mengakses data pada Firebase.


- Mobile M-AFI

    Aplikasi M-AFI yang berfungsi sebagai monitoring absensi ini hanya dapat di akses melalui smartphone android dengan OS minimum Lolipop.


	2.1.5. Antarmuka komunikasi

M-AFI menggunakan Local Area Network (LAN) untuk mengkoneksikan perangkat fingerprint ke laptop. Ini harus menggunakan protokol IP handal-jenis seperti TCP / IP ataureliable-UDP/IP untuk kompatibilitas maksimum dan stabilitas. Semua perangkat itu akanantarmuka dengan seharusnya berisi standar Ethernet kompatibel, perangkat lunak kartu LAN dapatdiakses untuk menjaga komunikasi antara server dan komputer. Perangkat yang nirkabel juga harus menggunakan Ethernet cardyang kompatibel, menggunakan IEEE 802.11b / g dan mendukung standar memiliki untuk enkripsiWPA2-PSK. Penggunaan IEEE 802.11n hardware standar transmisi juga diterima jika semua perangkat keras lokal lainnya adalah konforman dengan standar yang sama.

	2.1.6. Batasan memori

	2.1.7. Operasi-operasi

* Login melalui website, masuk sebagai admin untuk mengelola presensi dan mengelola user guru dan orang tua siswa
* Login melalui mobile, masuk sebagai orang tua siswa atau sebagai guru
* Rekap presensi, dapat di download melalui mobile
* Izin siswa, dapat mengupload foto surat izin/sakit siswa melalui mobile yang dilakukan orang tua siswa.


	2.1.8. Kebutuhan adaptasi


2.2. Spesifikasi kebutuhan fungsional

	2.2.1 Mobile App

![](https://image.ibb.co/mOnA5H/USES_CASES_APP.jpg)


		2.2.1.1 Siswa

		Masukkan presensi
		
![](https://image.ibb.co/frsMCx/19.jpg)

		Deskripsi singkat :

		Siswa melakukan proses absensi melalui device fingerprint yang tersedia sehingga data presensi yang dilakukan masuk di database.
	
		
		Langkah-langkah :
		
		* Siswa meletakan sidik jari ke device fingerprint.
		* sistem akan merecord data siswa yang sudah absen.

		masuk / keluar

![](https://image.ibb.co/keXGec/20.jpg)

		Deskripsi singkat :
		
		Siswa dapat mengakses (masuk/keluar) app M-AFI.
		
		Langkah-langkah :
		
		* Siswa membuka app M-AFI
		* Sistem menampilkan activity Login untuk masuk dengan level yang telah di tentukan
		* Siswa mengisi form login (username dan password)
		* Sistem melakukan verifikasi data user
		* Siswa mengakses app M-AFI dengan level sebagai siswa yang hanya dapat mendownload rekap presensi.
		* Siswa menekan dropdown user pada navbar
		* Sistem menampilkan pilihan ubah password dan logout
		* Siswa memilih logout untuk keluar dari sistem
		* Sistem Menampilkan activity login
		
		Ganti password

![](https://image.ibb.co/eyZwec/21.jpg)


		Deskripsi singkat :

		Siswa dapat merubah/mengganti password default akun app M-AFI.
		
		
		Langkah-langkah :

		* Siswa mengakses activity ganti password pada dropdown user di navbar.
		* Sistem menampilkan activity form ganti password.
		* Siswa mengisiform (password yang masih aktif, password baru dan konfirmasi password baru).
		* Sistem Memberikan notice bahwa password telah berubah.

	
		Rekap Presensi

![](https://image.ibb.co/escGec/22.jpg)


		Deskripsi singkat :

		Siswa dapat mendownload rekap presensi pada kelas yang ia tempati dalam kurun waktu persemester.
		
		
		Langkah-langkah :
		
		* Siswa menekan drawer pada dashboard
		* Sistem menampilkan button download rekap presensi
		* Siswa mendownload rekap presensi

	
		2.2.1.2 Orang tua siswa

		Masuk / Keluar

![](https://image.ibb.co/j17hKc/26.jpg)

		Deskripsi singkat :
		
		Orang tua siswa dapat mengakses (masuk/keluar) app M-AFI.
		
		Langkah-langkah :
		
		* Orang tua siswa membuka app M-AFI
		* Sistem menampilkan activity Login untuk masuk dengan level yang telah di tentukan
		* Orang tua siswa mengisi form login (username dan password)
		* Sistem melakukan verifikasi data user
		* Orang tua siswa mengakses app M-AFI dengan level sebagai Orang tua siswa yang dapat memonitoring anaknya, dapat mengirim izin, dan mendownload rekap presensi.
		* Orang tua siswa menekan dropdown user pada navbar
		* Sistem menampilkan pilihan ubah password dan logout
		* Orang tua siswa memilih logout untuk keluar dari sistem
		* Sistem Menampilkan activity login



		Ganti Password

![](https://image.ibb.co/ddcSkH/27.jpg)

		Deskripsi singkat :
	
		Orang tua siswa dapat merubah/mengganti password default akun app M-AFI.
		
		Langkah - langkah :

		* Orang tua siswa mengakses activity ganti password pada dropdown user di navbar.
		* Sistem menampilkan activity form ganti password.
		* Orang tua siswa mengisi form (password yang masih aktif, password baru dan konfirmasi password baru).
		* Sistem Memberikan notice bahwa password telah berubah.


		Monitoring Presensi

![](https://image.ibb.co/jSMnkH/28.jpg)

		Deskripsi singkat :
	
		Pada akun orang tua diberikan hak akses untuk dapat melakukan monitoring anaknya pada saat jam masuk dan jam pulan pada activity dashboard.
		
		Langkah - langkah :
		
		* Orang tua siswa melakukan proses login pada app M-AFI.
		* Sistem memperlihatkan presensi masuk dan pulang di hari tersebut pada activity dashboard.
		

		Kirim Izin

![](https://image.ibb.co/dL8NKc/29.jpg)

		Deskripsi singkat :

		Orang tua siswa dapat mengirimkan izin anaknya melalui app M-AFI dengan mengirimkan bukti/keterangan perizinannya.

		Langkah - langkah

		* Orang tua siswa memilih button Izin siswa pada activity dashboard yang berada di paling bawah.
		* Sistem menampilkan form untuk perizinan siswa.
		* Orang tua siswa mengisi form yang telah disediakan.
		* Pengiriman perizinan siswa akan masuk melalui webserver pada admin.


		Rekap presensi

![](https://image.ibb.co/dyX4Xx/30.jpg)

		Deskripsi singkat :

		Orang tua siswa tentunya dapat melihat rekap presensi anaknya pada akun yang ia miliki dengan mendownload pada bagian drawer.

		Langkah - langkah :
		
		* Orang tua siswa menekan drawer pada dashboard
		* Sistem menampilkan button download rekap presensi
		* Orang tua siswa mendownload rekap presensi
		


		2.2.1.3 Guru

		Masuk / Keluar

![](https://image.ibb.co/imBL5H/23.jpg)
		
		Deskripsi singkat :
	
		Guru dapat mengakses (masuk/keluar) app M-AFI.

		Langkah - langkah :

		* Guru membuka app M-AFI
		* Sistem menampilkan activity Login untuk masuk dengan level yang telah di tentukan
		* Guru mengisi form login (username dan password)
		* Sistem melakukan verifikasi data user
		* Guru mengakses app M-AFI dengan level sebagai Guru yang hanya dapat mendownload rekap presensi setiap kelas.
		* Guru menekan dropdown user pada navbar
		* Sistem menampilkan pilihan ubah password dan logout
		* Guru memilih logout untuk keluar dari sistem
		* Sistem Menampilkan activity login
		

		Ganti Password

![](https://image.ibb.co/bVejXx/24.jpg)


		Deskripsi singkat :

		Guru dapat merubah/mengganti password default akun app M-AFI.
		
		
		Langkah-langkah :

		* Guru mengakses activity ganti password pada dropdown user di navbar.
		* Sistem menampilkan activity form ganti password.
		* Guru mengisiform (password yang masih aktif, password baru dan konfirmasi password baru).
		* Sistem Memberikan notice bahwa password telah berubah.


		

		Rekap Presensi

![](https://image.ibb.co/gApwec/25.jpg)


		Deskripsi singkat :

		Guru dapat mendownload rekap presensi pada setiap kelas yang ada dalam kurun waktu persemester.

		Langkah - langkah :
		
		* Guru menekan drawer pada dashboard
		* Sistem menampilkan button download rekap presensi
		* Guru mendownload rekap presensi


		
	2.2.2 Webserver

![](https://image.ibb.co/nNRL5H/USES_CASES_WEBSERVER.jpg)

	2.2.2.1 Admin

		Masuk / Keluar

![](https://image.ibb.co/dknXKc/1.jpg)


		Deskripsi singkat :

		Admin yang telah di tentukan instansi dapat mengakses (masuk/keluar) webserver.

		Langkah - langkah :

		* Admin membuka webserver M-AFI
		* Sistem menampilkan halaman login
		* Admin memasukkan username dan password
		* Sistem melakukan verifikasi username dan password admin


		Tambah Data Siswa

![](https://image.ibb.co/kvMsKc/2.jpg)


		Deskripsi singkat :

		Admin dapat melakukan penambahan data siswa melalui kumpulan dati dengan menggunakan button import data melalui .CSV ataupun dapat berupa penambahan data perorangan melalui button tambah data.

		Langkah - langkah :

		* Admin mengakses halaman data siswa dengan menekan menu data siswa pada navigasi menu.
		* Sistem menampilkan halaman data siswa yang berisi button-button fungsi dan data siswa yang ada.
		* Admin menekan button pilih file untuk menambahkan data berupa import data dari file .CSV
		* Sistem menampilkan browse file pada admin.
		* Admin memilih file .CSV.
		* Sistem menyimpan pilihan admin.
		* Admin menekan button import.
		* Sistem akan merecod semua data yang ada pada file .CSV.
		* Admin menekan button tambah data untuk menambahkan data perorang.
		* Sistem menampilkan modal yang berisi form-form untuk pengisian data siswa.
		* Admin mengisi form dan menekan button save.
		* Sistem akan menyimpan data.

		Perbarui Data Siswa

![](https://image.ibb.co/jTLV5H/3.jpg)


		Deskripsi singkat :

		Admin dapat melakukan perubahan pada tiap-tiap data siswa yang ada.

		Langkah - langkah :

		* Admin mengakses halaman data siswa
		* Sistem menampilkan semua data siswa dalam tabel
		* Admin mencari data siswa yang akan di perbarui
		* Sistem menampilkan data yang di cari
		* Admin menekan button update pada kolom aksi
		* Sistem akan menampilkan modal yang form-formnya berisi dari data siswa yang ingin di perbarui
		* Admin melakukan perubahan pada data siswa dan menekan button save
		* Sistem akan memperbarui data siswa tersebut



		Hapus Data Siswa

![](https://image.ibb.co/gXiHkH/4.jpg)


		Deskripsi singkat :

		Admin dapat menghapus data siswa jika siswa yang bersangkutan sudah tidak lagi aktif/DO/keluar/berhenti dari sekolah tersebut.

		Langkah - langkah :

		* Admin mengakses halaman data siswa
		* Sistem menampilkan semua data siswa dalam tabel
		* Admin mencari data siswa yang akan di hapus
		* Sistem menampilkan data yang di cari
		* Admin menekan button delete pada kolom aksi
		* Sistem akan menampilkan modal untuk meyakinkan pilihan admin untuk menghapus data tersebut.
		* Admin memilih button ya untuk menghapus data siswa tersebut
		* Sistem akan menghapus data siswa tersebut 



		Tambah Data Guru

![](https://image.ibb.co/e7RsKc/5.jpg)


		Deskripsi singkat :
 		Admin dapat menambahkan data guru berupa Nip, nama lengkap  dll ke dalam tabel data guru yang ada di webserver M-AFI.
		

		Langkah - langkah :
		* Admin mengakses halaman data guru
		
		* Admin menekan button tambah guru
		
		* Sistem menampilkan form data guru yang harus diisi untuk ditambahkan
		
		* Admin mengisi data guru yang akan ditambahkan
		
		* Sistem menyediakan button Save changes dan close
		
		* Admin menekan button Save changes lalu close
		
		* Sistem menampilkan data yang guru yang berhasil ditambahkan.



		Perbarui Data Guru

![](https://image.ibb.co/d7Fmec/6.jpg)


		Deskripsi singkat :
		Admin dapat melakukan perubahan tiap-tiap data guru yang ada.


		Langkah - langkah : 
		* Admin mengakses halaman data guru
		* Sistem menampilkan semua data guru dalam tabel
		* Admin mencari data guru yang akan di perbarui
		* Sistem menampilkan data yang di cari
		* Admin menekan button update pada kolom aksi
		* Sistem akan menampilkan modal yang form-formnya berisi dari data guru yang ingin di perbarui
		* Admin melakukan perubahan pada data guru  dan menekan button save
		* Sistem akan memperbarui data guru tersebut


		Hapus Data Guru

![](https://image.ibb.co/nepCKc/7.jpg)


		Deskripsi singkat :
		Admin dapat menghapus data guru jika data guru yang bersangkutan sudah tidak aktif/keluar/mengundurkan diri/berhenti dari sekolah tersebut.


		Langkah - langkah :
		* Admin mengakses halaman data guru
		* Sistem menampilkan semua data guru dalam tabel
		* Admin mencari data guru yang akan di hapus
		* Sistem menampilkan data yang di cari
		* Admin menekan button delete pada kolom aksi
		* Sistem akan menampilkan modal untuk meyakinkan pilihan admin untuk menghapus data tersebut.
		* Admin memilih button ya untuk menghapus data guru tersebut
		* Sistem akan menghapus data guru tersebut 


		Tambah Data Users

![](https://image.ibb.co/hmOuXx/8.jpg)


		Deskripsi singkat :
		
		Admin dapat melakukan penambahan data users siswa dan users guru melalui penambahan data users melalui button tambah data.

		Langkah - langkah :

		* Admin mengakses halaman data users dengan menekan menu data user pada navigasi menu, pilih user siswa atau guru.
		* Sistem menampilkan halaman data user yang berisi button_button fungsi dan data user yang ada
		* Sistem menampilkan browse file pada admin.
		* Admin menekan button tambah data untuk menambahkan data peruser.
		* Sistem menampilkan modal yang berisi form-form untuk pengisian data user.
		* Admin mengisi form dan menekan button save.
		* Sistem akan menyimpan data.

		Perbarui Data Users

![](https://image.ibb.co/g5Zq5H/9.jpg)


		Deskripsi singkat :

		Admin dapat melakukan perubahan pada tiap-tiap data user yang ada.

		Langkah - langkah :

		* Admin mengakses halaman data user
		* Sistem menampilkan semua data user dalam tabel
		* Admin mencari data user yang akan di perbarui
		* Sistem menampilkan data yang di cari
		* Admin menekan button update pada kolom aksi
		* Sistem akan menampilkan modal yang form-formnya berisi dari data user yang ingin di perbarui
		* Admin melakukan perubahan pada data user dan menekan button save
		* Sistem akan memperbarui data user tersebut

		Hapus Data Users

![](https://image.ibb.co/chfV5H/10.jpg)


		Deskripsi singkat :

		Admin dapat menghapus data user jika user sudah tidak lagi aktif/DO/keluar/berhenti dari sekolah tersebut.

		Langkah - langkah :

		* Admin mengakses halaman data user siswa atau user guru
		* Sistem menampilkan semua data user dalam tabel
		* Admin mencari data user yang akan di hapus
		* Sistem menampilkan data yang di cari
		* Admin menekan button delete pada kolom aksi
		* Sistem akan menampilkan modal untuk meyakinkan pilihan admin untuk menghapus data tersebut.
		* Admin memilih button ya untuk menghapus data siswa tersebut
		* Sistem akan menghapus data user tersebut

		Tambah Data Kelas

![](https://image.ibb.co/cYggCx/11.jpg)


		Deskripsi singkat :

		Admin dapat menambahkan data kelas ketika ada tambahan dari tiap-tiap kelas.
	
		Langkah - langkah :
		
		* Admin mengakses halaman data Kelas

		* Admin menekan button tambah data

		* Sistem menampilkan form data kelas yang harus diisi untuk ditambahkan

		* Admin mengisi data kelas yang akan ditambahkan

		* Admin menekan button Save changes lalu close

		* Sistem menampilkan data yang kelas yang berhasil ditambahkan.


		Perbarui Data Kelas

![](https://image.ibb.co/j01Rec/12.jpg)


		Deskripsi singkat :

		Admin dapat melakukan perubahan pada tiap-tiap data kelas yang ada.


		Langkah - langkah :

		
		* Admin mengakses halaman data kelas
		* Sistem menampilkan semua data kelas pada tabel
		* Admin mencari data kelas yang akan di perbarui
		* Sistem menampilkan data yang akan cari
		* Admin menekan button update pada kolom aksi
		* Sistem akan menampilkan modal yang form-formnya berisi tambah data kelas yang ingin di perbarui
		* Admin melakukan perubahan pada data kelas dan menekan button save
		* Sistem akan memperbarui data kelas. 

		Hapus Data Kelas

![](https://image.ibb.co/iG2XKc/13.jpg)


		Deskripsi singkat :

		Admin dapat menghapus data yang sudah tidak diperlukan.

		Langkah - langkah :

		* Admin mengakses halaman data kelas
		* Sistem menampilkan semua data kelas pada tabel
		* Admin mencari data kelas yang akan di hapus
		* Sistem menampilkan data yang ingin di cari
		* Admin menekan button delete pada kolom aksi
		* Sistem akan menampilkan modal untuk meyakinkan pilihan admin untuk menghapus data tersebut.
		* Admin memilih button ya untuk menghapus data kelas tersebut
		* Sistem akan menghapus data kelas. 

		Tambah Data Jurusan

![](https://image.ibb.co/bUPOQH/14.jpg)


		Deskripsi singkat :
 
		Admin dapat melakukan penambahan data jurusan jika sekolah memiliki jurusan baru.
 
 		Langkah - langkah :
 
		* Admin mengakses halaman data jurusan dengan menekan menu data jurusan pada navigasi menu.
		* Sistem menampilkan halaman data jurusan yang berisi button-button fungsi dan data jurusan yang ada.
		* Admin mengisi form tambah data jurusan dan mengklik button tambah data.
		* Sistem menambahkan data jurusan yang telah diinputkan oleh admin 
		
	
		



		Perbarui Data Jurusan

![](https://image.ibb.co/b1w3QH/15.jpg)


		Deskripsi singkat :
		Admin dapat memperbaharui data jurusan dengan menekan button update


		Langkah - langkah :
		* Admin mencari data jurusan melalui fungsi search
		* Sistem memproses dan mencari data jurusan
		* Admin dapat mengupdate data jurusan dengan menekan button update.
		* Sistem memproses dan mengupdate data jurusan.


		Hapus Data Jurusan

![](https://image.ibb.co/f9cA5H/16.jpg)


		Deskripsi singkat :
		Admin dapat menghapus data jurusan jika memang tidak dibutuhkan.


		Langkah - langkah :
		* Admin mencari data jurusan melalui fungsi search
		* Sistem memproses dan mencari data jurusan
		* Admin dapat menghapus data dengan menekan button delete.
		* Sistem memproses dan menghapus data jurusan.



		Update Presensi Izin

![](https://image.ibb.co/d7hMCx/17.jpg)


		Deskripsi singkat :

		Admin akan menerima permintaan izin dari orang tua siswa yang kemudian admin melakukan approvement untuk mengupdate data prsensi siswa yang berkaitan tersebut.

		Langkah - langkah :

		* Sistem memberikan notifikasi pada admin melalui webserver di bagian notifikasi engan icon messages
		* Admin menekan button icon tersebut
		* Sistem menampilan halaman presensi
		* Admin melihat data perizinan siswa dan kemudian melakukan approvement dengan mengupdate presensi siswa tersebut.
		* Sistem memperbarui presensi siswa tersebut.


		Cari Data

![](https://image.ibb.co/ncVV5H/18.jpg)


		Deskripsi singkat :

		Admin dapat melakukan pencarian siswa pada data siswa, guru, user, kelas, jurusan dan presensi.

		Langkah - langkah :

		* Admin mengakses pada halaman tertentu yang ingin di cari datanya
		* Sistem menyediakan form search pada tiap-tiap halaman
		* Admin mengisi form search untuk mencari data yang ingin di cari
		* Sistem akan menampilkan data yang admin cari




2.3. Spesifikasi kebutuhan non-fungsional

- Design UI/UX layout mobile
- Design UI/UX layout web server

2.4. Karakteristik pengguna

karakteristik pengguna dari aplikasi M-AFI ini adalah semua yang ingin menggunakan absensi diantaranya siswa, guru dan orang tua yang membedakan adalah pengguna yang berinteraksi dengan sistem dihubungkan dengan hak akses dan 
autentifikasi sesuai aturan yang terdapat pada absensi (level).

2.5. Batasan-batasan

* Aplikasi M-AFI untuk waktu pengembangannya hanya ada beberapa fungsi yang dilaksanakan.
* Pengembangan aplikasi M-AFI tidak akan mengubah file-file ataupun database yang ada pada saat ini tanpa adanya izin dari pihak sekolah.
* Pengembangan aplikasi M-AFI ini akan meliputi pengelolaan data-data yang ada disekolah yang meliputi data absensi siswa serta laporan untuk siswa yang tidak masuk.

2.6. Asumsi-asumsi keterkaitan

* Kapasitas user pada fingerprint : 20.000 sidikjari
* Jenis komunikasi PC : TCP/IP (RJ45), RS 232/RS485, USB cable, USB disk
* Waktu respon input data pada fingerprint : <= 1 detik
* Semua absensi adalah untuk siswa di sekolah. 
* Absensi disekolah sendiri akan dilakukan oleh siswa yang apabila
  ketika ingin kehadirannya masuk ke sekolah.

2.7. Kebutuhan penyeimbang

## Requiremet Spesification ##


3.1. External Interface Requirements

Kebutuhan akan pengelolaan/management presensi pada suatu instansi sangatlah penting dengan menimbang beberapa aspek yang saling mendukung, pada hal ini tertuju pada sekolah SMK Negeri 1 Indramayu dimana penerapan management/pengelolaan presensi siswa-siswi sudah semestinya menggunakan komputerisasi untuk dapat menghindari terjadinya human error pada pengerjaannya, Staf TU pada bidang kesiswaan sangatlah terbantu untuk meningkatkan kedisplinan siswa-siswinya dikarenakan fitur dari aplikasi M-AFI ini menunjang kedua orang tua siswa untuk dapat memonitoring siswa/siswinya pada saat berada pada lingkungan sekolah, dengan ini faktor kedua orang tua siswa terhadap kedisplinan siswa/siswnya pada lingkungan sekolah sangatlah membantu bidang kesiswaan.

Selain hal demikian, management/pengelolaan presensi yang terkomputerisasi dapat membantu guru-guru di sekolah tersebut sehingga sistem presensi yang dulu menggunakan buku absensi sekarang bisa di tinggalkan dengan adanya sistem presensi menggunakan fingerprint ini.


3.2. Functional Requirements

3.2.1. Uses Cases Siswa

3.2.1.1. Masukkan presensi

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Masukkan presensi |
| XRef |  |
| Trigger |  |
| Precondition |  |
| Basic Path |  |
| Alternative Paths |  |
| Postcondition |  |
| Exception Paths |  |
| Other |  |


3.2.1.2. masuk / keluar

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | masuk / keluar |
| XRef |  |
| Trigger | Siswa dapat melakukan login untuk masuk app M-AFI diperangkat mobile dan kemudian logout untuk keluarnya  |
| Precondition | Siswa harus memiliki app M-AFI pada smartphonenya  |
| Basic Path | Siswa dapat membuka app M-AFI pada smartphone, kemudian mengisi form login yang telah disediakan dengan memasukan username dan password  |
| Alternative Paths | jika sudah mengisi form login salah maka bisa menghubungi admin atau mengklik lupa password |
| Postcondition | setelah melakukan proses login ssiswa dapat melihat tampilan presensi yang sudah ada |
| Exception Paths |  |
| Other |  |


3.2.1.2. Rekap Presensi

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Rekap Presensi |
| XRef |  |
| Trigger |Pada Rekap Presensi ini berisi keseluruhan presensi siswa dari mulai awal masuk sekolah sampai sekarang |
| Precondition | Siswa dapat login melalui app M-AFI, siswa dapat memilih rekap yang ingin di download dalam bentuk dokumen yakni tahun ataupun semester|
| Basic Path | siswa dapat menekan salah satu sub rekap |
| Alternative Paths |  |
| Postcondition | File yang didownload berupa file excel|
| Exception Paths |  |
| Other |  |


3.2.2. Uses Cases Orang tua siswa

3.2.2.1. Masuk / Keluar

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Masuk / keluar |
| XRef |  |
| Trigger | Orang tua siswa melakukan login untuk masuk pada app M-AFI di perangkat mobile dan juga logout untuk keluarnya |
| Precondition | Orang tua siswa harus mempunyai app M-AFI pada smartphone dengan minimum OS Lolipop |
| Basic Path | Orang tua siswa membuka App M-AFI pada smartphone, mengisi form login yang telah disediakan dengan memasukkan username yaitu NISN dan password |
| Alternative Paths | Jika saat mengisi form login salah maka segera hubungi admin/klik lupa password |
| Postcondition | Setelah melakukan proses login orang tua siswa di suguhkan dengan tampilan monitoring presensi anaknya |
| Exception Paths |  |
| Other |  |


3.2.2.2. Ganti Password

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Ganti password |
| XRef |  |
| Trigger | Ganti password berguna untuk orang tua siswa yang kesulitan untuk login ataupun lupa passwordnya |
| Precondition | Orang tua membuka app M-AFI |
| Basic Path | Orang tua siswa berada pada halaman login, orang tua siswa melakukan proses login namun terjadi kesalahan pada passwordnya, orang tua siswa menekan link lupa password yang akan di direct pada halaman web untuk memasukkan email, orang tua siswa akan mendapatkan email dari admin/sistem untuk merubah passwordnya |
| Alternative Paths | Jika sudah masuk/berada pada halaman dashboard dapat langsung diganti dengan menekan dropdown account dan menekan ganti password kemudian mengganti passwordnya |
| Postcondition | Password akun orang tua siswa akan terupdate dengan password baru |
| Exception Paths |  |
| Other |  |


3.2.2.3. Monitoring Presensi

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Monitoring presensi |
| XRef |  |
| Trigger | Pada bagian ini orang tua siswa dapat melihat waktu kedatangan anaknya saat masuk sekolah begitupun saat pulang |
| Precondition | Tampilan kolom masuk/pulang (hanya berisi tanda - atau TH ) tidak akan terlihat sebelum anaknya melakukan presensi dengan menekan fingerprint |
| Basic Path | Orang tua siswa dapat melakukan monitoring setidaknya minimal saat jam 8 untuk jam masuk dan jam set 4 untuk jam pulang |
| Alternative Paths | Orang tua siswa dapat selalu memonitoring pada dashboard, jika memang cemas akan kehadiran anaknya segera hubungi admin |
| Postcondition | Presensi akan nampak dengan waktu real time pada dashboar orang tua siswa |
| Exception Paths |  |
| Other |  |


3.2.2.4. Kirim Izin

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Kirim izin |
| XRef |  |
| Trigger | Orang tua siswa dapat mengirimkan perizinan anaknya jika berhalangan hadir melalui App M-AFI |
| Precondition | Orang tua siswa sudah login dan berada pada halaman dashboard |
| Basic Path | Orang tua siswa menekan tombol izin, Orang tua siswa mengisi form yang telah disediakan oleh sistem, orang tua siswa harus menyertakan foto surat keterangan sakit ataupun surat yang bertanda tangan orang tua tersebut, atur tanggal untuk perizinan, kirim perizinan |
| Alternative Paths | perizinan siswa dapat juga melalui admin langsung di sekolah |
| Postcondition | Data perizinan akan masuk pada admin yang kemudian akan diupdate setelah di approve oleh admin |
| Exception Paths |  |
| Other |  |



3.2.2.5. Rekap Presensi

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Rekap presensi |
| XRef |  |
| Trigger | Rekap presensi berisi keseluruhan presensi dari anaknya mulai masuk sekolah sampai waktu sekarang ini |
| Precondition | Orang tua siswa sudah login M-AFI, Orang tua siswa menekan slidebar pada header M-AFI, orang tua siswa dapat memilih rekap yang ingin di download dalam bentuk dokumen yakni mingguan, bulanan ataupun semester. |
| Basic Path | Orang tua siswa menekan salah satu sub rekap pada slide bar |
| Alternative Paths |  |
| Postcondition | File yang di download akan berupa file excel |
| Exception Paths |  |
| Other |  |



3.2.3. Uses Cases Admin

3.2.3.1. Masuk / Keluar

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Masuk / Keluar |
| XRef |  |
| Trigger | Admin melakukan login untuk masuk ke web server dan juga logout untuk keluarnya. |
| Precondition | Admin harus memiliki web server M-AFI pada laptopnya |
| Basic Path | Admin membuka web M-AFI pada laptop, mengisi form login yang sudah ada dengan memasukan username dan password |
| Alternative Paths | Jika mengisi form login dipastikan harus tahu username dan password |
| Postcondition | Setelah melakukan proses login admin akan melihat data-data yang ada pada web tersebut. |
| Exception Paths |  |
| Other |  |


3.2.3.2. Tambah Data Siswa

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Tambah Data Siswa |
| XRef |  |
| Trigger | Admin dapat menambahkan data siswa pada web server M-AFI |
| Precondition | Admin ketika sudah login maka akan berada pada tampilan awal admin |
| Basic Path | Admin menekan button pilih file untuk menambahkan data berupa import data dari file .CSV dan admin juga dapat menambahkan data perorangan dengan menekan button tambah data |
| Alternative Paths |Jika Admin sudah menambahkan data siswa maka admin dapat menekan button save |
| Postcondition | Setelah admin menambahkan data siswa maka sistem akan menyimpan data siswa tersebut |
| Exception Paths |  |
| Other |  |


3.2.3.3. Perbarui Data Siswa

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Perbarui Data Siswa |
| XRef |  |
| Trigger | Admin dapat melakukan perbarui data siswa ketika data siswa tersebut ada perubahan |
| Precondition | Admin ketika sudah mengakses halaman data siswa maka akan menampilkan semua data siswa pada tabel |
| Basic Path | Admin dapat mencari data siswa yang akan diperbarui dengan menekan button update |
| Alternative Paths | Admin dapat melakukan perubahan pada data siswa dengan menekan button save |
| Postcondition | Setelah admin melakukan perubahan data siswa maka akan tampil pada tabel  |
| Exception Paths |  |
| Other |  |


3.2.3.4. Hapus Data Siswa

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Hapus Data Siswa |
| XRef | |
| Trigger | Admin dapat menghapus data siswa yang sudah tidak digunakan atau siswa sudah berhenti sekolah |
| Precondition | Admin dapat mencari data yang ingin dihapus|
| Basic Path | Pada web server M-AFI akan menampilkan semua data yang telah dicari yang ingin dihapus pada tabel|
| Alternative Paths | Jika sudah menemukan data yang telah dicari maka admin dapat menekan button delete untuk menghapus data siswa tersebut |
| Postcondition | Data siswa akan terhapus pada web server M-AFI|
| Exception Paths |  |
| Other |  |


3.2.3.5. Tambah Data Guru

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Tambah Data Guru |
| XRef | |
| Trigger | Admin dapat menambahkan data guru pada web server M-AFI  |
| Precondition |Admin akan menampikan form data guru yang sudah disediakan untuk ditambahkan |
| Basic Path | Admin akan mengisi data guru yang telah ditambahkan pada web server M-AFI |
| Alternative Paths | Jika admin sudah mengisi data guru maka admin akan menekan button save untuk menyimpan data yang telah ditambahkan |
| Postcondition | Setelah melakukan proses penambahan data guru maka data akan tersimpan pada tabel|
| Exception Paths |  |
| Other |  |


3.2.3.6. Perbarui Data Guru

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Perbarui Data Guru |
| XRef | Admin   |
| Trigger | Admin dapat melakukan perubahan pada tiap-tiap data guru yang ada  |
| Precondition | Admin dapat mengkases halaman data guru dan admin dapat mencari data guru yang akan di peebaharui |
| Basic Path | Admin dapat merubah/memperbaharui data guru yang harus diubah sewaktu-waktu |
| Alternative Paths | Setelah melakukan perubahan pada data guru admin dapat mengklik tombol button update  |
| Postcondition | Data guru berhasil diperbaharui saat admin mengisi/merubah data  |
| Exception Paths |  |
| Other |  |


3.2.3.7. Hapus Data Guru

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Hapus Data Guru |
| XRef |  |
| Trigger | Admin dapat menghapus data guru sewakt-waktu saat ada data yang harus dihapus |
| Precondition |  Admin dapat mengakses data guru |
| Basic Path | Admin dapat memilih/mencari data guru yang harus dihapus   |
| Alternative Paths | Setelah admin dapat data guru yang harus dihapus admin dapat mengklik tombol button delete |
| Postcondition |  Data guru yang sudah dihapus oleh admin akan berhasil dan ditampilkan oleh sistem setelah hapus data berhasil |
| Exception Paths |  |
| Other |  |


3.2.3.8. Tambah Data Users

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Tambah Data Users |
| XRef |  |
| Trigger | Admin dapat menambahkan data user|
| Precondition | Admin dapat mengkases halaman data user dan dapat menambahkan data uesr |
| Basic Path | admin dapat menambhakan data user dengan mengisi form data user yang ditampilkan pada modal pengsian data user |
| Alternative Paths |  Admin dapat menekan button save saat tambah data user selesai  |
| Postcondition | sistem akan menampilkan hasil data user yang sudah ditambahkan oleh admin |
| Exception Paths |  |
| Other |  |


3.2.3.9. Perbarui Data Users

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Perbarui Data Users |
| XRef |  |
| Trigger | Admin dapat melakukan perubahan pada tiap-tiap data user yang ada |
| Precondition | Admin dapat mengakses data user dan dapat memperbaharui data user yang sudah dipilih  |
| Basic Path | Admin dapat memperbaharui data user setelah memilih data user yang akan diperbaharui |
| Alternative Paths | Admin dapat menekan button update setelah selesai melakukan perubahan data user |
| Postcondition |  sistem akan menapilkan hasil data user yang sudah diperbaharui|
| Exception Paths |  |
| Other |  |


3.2.3.10. Hapus Data Users

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Hapus Data Users |
| XRef |  |
| Trigger |  Admin dapat melakukan hapus data users |
| Precondition | Admin dapat mengkases data users dan admin dapat mencari data yang akan dihapus  |
| Basic Path | Admin dapat menghapus data user yang sudah dipilih |
| Alternative Paths | Admin dapat menekan button delete untuk menghapus data   |
| Postcondition | sistem akan menampilkan hasil data user yang sudah dihapus  |
| Exception Paths |  |
| Other |  |


3.2.3.11. Tambah Data Kelas

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Tambah Data Kelas |
| XRef |  |
| Trigger | Admin dapat menambahkan data kelas ketika ada data yang telah ditambahkan dari tiap-tiap kelas |
| Precondition | Admin sudah login dan akan mengakses halaman data kelas |
| Basic Path | Admin akan menekan button tambah data, kemudian mengisi form yang telah ada yang harus diisi untuk ditambahkan pada data kelas |
| Alternative Paths | Jika sudah ditambahkan data kelas akan tersimpan ketika menekan button save |
| Postcondition | Data siswa yang telah berhasil ditambahkan akan tampil pada web server M-AFI |
| Exception Paths |  |
| Other |  |


3.2.3.12. Perbarui Data Kelas

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Perbarui Data Kelas |
| XRef |  |
| Trigger | Admin dapat melakukan perubahan pada tiap-tiap data  yang ada  |
| Precondition | Admin dapat mengakses halaman data kelas  |
| Basic Path | Admin mencari data kelas yang akan diperbaharui |
| Alternative Paths | Admin menekan button update pada kolom aksi |
| Postcondition | Sistem akan menampikan hasil perbaharui data kelas  |
| Exception Paths |  |
| Other |  |


3.2.3.13. Hapus Data Kelas

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Hapus Data Kelas |
| XRef |  |
| Trigger | Admin dapat menghapus data kelas yang sudah tidak diperlukan |
| Precondition | Admin dapat mengakses halaman data kelas |
| Basic Path | Admin mencari data kelas yang akan dihapus pada tabel |
| Alternative Paths | Admin akan menekan button delete pada kolom aksi untuk menghapus data yang diinginkan |
| Postcondition | Sistem akan menampilkan semua data kelas pada tabel|
| Exception Paths |  |
| Other |  |


3.2.3.14. Tambah Data Jurusan

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Tambah Data Jurusan |
| XRef |  |
| Trigger |  |
| Precondition |  |
| Basic Path |  |
| Alternative Paths |  |
| Postcondition |  |
| Exception Paths |  |
| Other |  |


3.2.3.15. Perbarui Data Jurusan

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Perbarui data jurusan |
| XRef |  |
| Trigger |  |
| Precondition |  |
| Basic Path |  |
| Alternative Paths |  |
| Postcondition |  |
| Exception Paths |  |
| Other |  |


3.2.3.16. Hapus Data Jurusan

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Hapus data jurusan |
| XRef |  |
| Trigger |  |
| Precondition |  |
| Basic Path |  |
| Alternative Paths |  |
| Postcondition |  |
| Exception Paths |  |
| Other |  |


3.2.3.17. Update Presensi Izin

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Update Presensi Izin |
| XRef |  |
| Trigger |  |
| Precondition |  |
| Basic Path |  |
| Alternative Paths |  |
| Postcondition |  |
| Exception Paths |  |
| Other |  |


3.2.3.18. Cari Data

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Cari data |
| XRef |  |
| Trigger | Pada bagian ini admin dapat melakukan pencarian pada data siswa, guru, user, kelas, jurusan dan presensi pada web M-AFI|
| Precondition | Admin dapat membuka web M-AFI untuk mengakses pada halaman yang iningin dicari datanya |
| Basic Path |Pada web M-AFI ini menyediakan form search pada tiap-tiap halaman untuk mencari data |
| Alternative Paths | Admin dapat mengisi form search untuk mencari data yang ingin dicari |
| Postcondition |  |
| Exception Paths |  |
| Other |  |



3.3. Detailed Non-Functional Requirements

3.3.1 Logical Structure data

![](https://image.ibb.co/fuuq5H/ERD_FIX_BANGET_YA_ALLAH.jpg)


Entitas data Jurusan

Data Item | Type | Deskripsi | 
| ------ | ------ | ------ |
| Id_Jurusan | int | sebagai id saja |
| Nama_Jurusan | Varchar | nama jurusannya |


Entitas data Kelas

Data Item | Type | Deskripsi | 
| ------ | ------ | ------ |
| Id_Kelas | int | sebagai id saja |
| Id_jurusan | int | sebaga kepemilikan kelas pada jurusan |
| Nama_Kelas | Varchar | nama kelas |



Entitas data Siswa

Data Item | Type | Deskripsi | 
| ------ | ------ | ------ |
| NIS | Int | Sebagai primary key yang akan terhubung ke tabel presensi dan tabel user |
| id_kelas | int | sebagai penghubung tabel siswa dengan tael kelas agar mengidentifikasi bahwa NIS pada record ini memiliki kelas ini |
| nama_lengkap | varchar | nama lengkap siswa |
| jk | varchar | jenis kelamin siswa |
| ttl | varchar | tempat dan tanggal lahir siswa yang di tuliskan melalui form |
| email | varchar | email siswa yang akan berfungsi untuk bantuan lupa password |
| agama | varchar | agama siswa |
| alamat | text | alamat siswa |
| no_hp | varchar | nomor handphone siswa yang bisa dihubungi |
| nama_ayah | varchar | nama ayah siswa |
| pekerjaan_ayah | varchar | pekerjaan siswa |
| nama_ibu | varchar | nama ibu siswa |
| pekerjaan_ibu | varchar | pekerjaan ibu siswa |
| alamat_ortu | text | alamat tempat tinggal orang tua siswa |


Entitas data Guru

Data Item | Type | Deskripsi | 
| ------ | ------ | ------ |
| NIP | Int | Sebagai primary key untuk data guru dikarenakan NIP (id guru bagi yang belum memiliki NIP) pada tiap-tiap guru berbeda |
| id_kelas | int | sebagai penghubung tabel guru dengan tabel kelas untuk memudahkan dalam pengambilan rekap presensi dengan pilihan kelasnya |
| nama_lengkap | varchar | nama guru |
| email | varchar | email guru sebagai bantuan untuk memulihkan password yang lupa yang akan dikirim melalui email dari admin |
| jk | varchar | jenis kelamin guru |
| no_hp | varchar | nomor handphone guru |
| alamat | text | alamat guru |


Entitas data User

Data Item | Type | Deskripsi | 
| ------ | ------ | ------ |
| id_user | Int | Hanya sebagai id untuk user |
| NIP | int | sebagai username guru |
| NIS | int | sebagai username siswa |
| NISN | int | Sebagai username orang tua siswa |
| Password | varchar | untuk password akun |
| level | varchar | sebagai pembeda hak akses tiap-tiap user |


Entitas data Presensi

Data Item | Type | Deskripsi | 
| ------ | ------ | ------ |
| id_presensi | int | hanya untuk id saja |
| NIS | int | Untuk kepemilikan presensi |
| tanggal | date | keterangan tanggal presensi pada saat melakukan presensi melalui device fingerprint |
| presensi | varchar | keterangan presensi siswa, jika siswa melakukan proses presensi pada saat jam masuk sekolah maka akan terisi 'hadir', jika siswa tidak melakukan proses presensi pada saat jam masuk sampai waktu yang telah di tentukan maka akan terisi 'tidak hadir' dan jika siswa melakukan perizinan melalui app M-ADI pada akun orang tua siswa ataupun mengirimkan surat langsung maka presensi yang semua 'tidak hadir' akan di update menjadi 'izin/sakit' |
| keterangan | varchar | berisi keterangan untuk perizinan siswa |
| masuk | time | waktu saat siswa menekan device fingerprint/proses presensi |
| terlambat | int | waktu keterlambatan pada saat melakukan proses presensi dikarenakan melebihi batas waktu yang telah di tentukan |
| pulang | time | waktu saat siswa menekan device fingerprint/proses presensi |
| lebih_cepat | int | waktu dimana siswa lebih cepat menekan fingerprint saat pulang dikarenakan mendahului batas waktu yang telah di tentukan |
