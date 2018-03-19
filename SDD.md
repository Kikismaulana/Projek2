<div align="center">

<h1>Software Design Document</h1> 

<p>Version 1.0 <br> 15 Maret 2018</p>

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


##Pendahuluan##


1.1 Tujuan

Tujuan  pembuatan  SDD  (Software  Design  Document) ini adalah  untuk  menjelaskan 
langkah  langkah  desain  dan  proses-proses  dalam  pembuatan  sistem  aplikasi  yang  akan  
diterapkan  pada  Sistem  Absensi “M-AFI”,  dan  juga  memberi  definisi  kebutuhan 
untuk sistem, spesifikasi kebutuhan fungsional. 

 Fungsi utama dari M-AFI ini adalah menyediakan sistem absensi siswa dengan sidik jari
dimana orang tua dapat melihat kehadiran dan rekap presensi anaknya, guru dan siswapun 
dapat melihat rekap presensinya.

1.2 Lingkup

Hasil dari SDD ini adalah aplikasi berbasis web untuk adminnya dan berbasis mobile untuk user-usernya,
yang digunakan untuk membantu manajemen di M-AFI ini adalah dalam hal :
- mencatat data siswa, kelas, jurusan, user dan presensi.
- Mencatat kehadiran siswa secara digital.
- mengupdate data kehadiran siswa


1.3 Definisi, akronim, dan Singkatan

Singkatan | Definisi 
| ------ | ------ |
| SRS | Merupakan singkatan dari Software Requirement Specfication |
| M-AFI | Singkatan Dari Mobile Attendence merupakan sebuah aplikasi absensi yang menggunakan mobile  |
|Fingerprint| Merupakan fingerprint merupakan suatu perangkat keras untuk memberikan data otomatis yang menggunakan sidik jari manusia. fingerprint digunakan biasannya untuk sistem absensi yang digunakan beberapa instansi.|
| Webserver | Webserver sebuah software yang memberikan layanan berbasis data dan berfungsi menerima permintaan dari HTTP atau HTTPS pada klien yang dikenal dan biasanya kita kenal dengan nama web browser (Mozilla Firefox, Google Chrome) dan untuk mengirimkan kembali yang hasilnya dalam bentuk beberapa halaman web dan pada umumnya akan berbentuk dokumen HTML. |
| LAN | LAN merupakan singkatan dari Local Area Network, yang mana merupakan sebuah jaringan komputer dengan skala kecil (local) seperti gedung perkantoran, sekolah atau rumah. LAN umumnya digunakan untuk berbagi resource dalam suatu gedung. LAN dapat berdiri sendiri, tanpa terhubung oleh jaringan luar atau internet. Namun apabila suatu LAN dihubungkan dengan beberapa LAN lainnya maka akan terbentuk suatu jaringan yang disebut Metropolitan Area Network (MAN). |

1.4 Referensi

IEEE Draft Standard for Software Design Descriptions

1.5 Ikhtisar Dokumen


##  Deskripsi Perancangan Global ##

2.1 Rancangan Lingkungan Implementasi

-	Sublime,
Sublime adalah sebuah software aplikasi/editor text untuk bahasa pemrograman termasuk pemrograman PHP, sublime mendukung banyak bahasa pemrograman dan bahasa markup serta fungsinya dapat ditambah dengan plugin, sublime juga memiliki banyak kelebihan.

- PHP adalah singkatan dari Hypertext Prepocessor, yaitu bahasa pemrograman yang digunakan secara luas untuk penanganan pembuatan dan pengembangan sebuah situs web dan bias digunakan bersamaan dengan HTML. PHP diciptakan oleh Rasmus Lerdorf pertama kali tahun 1994. Pada awalnya PHP adalah singkatan dari “Personal Home Page Tools”. Selanjutnya diganti menjadi FI (“Forms Interpreter”). Sejak versi 3.0, nama bahasa ini diubah menjadi “PHP Hypertext Prepocessor  dengan singkatannya PHP . PHP versi terbaru adalah versi ke-5. Berdasarkan survey Netcraft pada bulan Desember 1999, lebih dari sejuta website menggunakan PHP, diantaranya adalah NASA, Mitsubishi, dan RedHat.

- MySQL adalah sebuah perangkat lunak sistem manajemen basis data SQL (bahasa Inggris: database management system) atau DBMS yang multithread, multi-user, dengan sekitar 6 juta instalasi di seluruh dunia. MySQL AB membuat MySQL tersedia sebagai perangkat lunak gratis dibawah lisensi GNU General Public License (GPL), tetapi mereka juga menjual dibawah lisensi komersial untuk kasus-kasus di mana penggunaannya tidak cocok dengan penggunaan GPL. Tidak sama dengan proyek-proyek seperti Apache, di mana perangkat lunak dikembangkan oleh komunitas umum, dan hak cipta untuk kode sumber dimiliki oleh penulisnya masing-masing, MySQL dimiliki dan disponsori oleh sebuah perusahaan komersial Swedia MySQL AB, di mana memegang hak cipta hampir atas semua kode sumbernya. Kedua orang Swedia dan satu orang Finlandia yang mendirikan MySQL AB adalah: David Axmark, Allan Larsson, dan Michael "Monty" Widenius.

- Cascading Style Sheet (CSS) merupakan aturan untuk mengatur beberapa komponen dalam sebuah web sehingga akan lebih terstruktur dan seragam. CSS bukan merupakan bahasa pemograman. Sama halnya styles dalam aplikasi pengolahan kata seperti Microsoft Word yang dapat mengatur beberapa style, misalnya heading, subbab, bodytext, footer, images, dan style lainnya untuk dapat digunakan bersama-sama dalam beberapa berkas (file). Pada umumnya CSS dipakai untuk memformat tampilan halaman web yang dibuat dengan bahasa HTML dan XHTML. CSS dapat mengendalikan ukuran gambar, warna bagian tubuh pada teks, warna tabel, ukuran border, warna border, warna hyperlink, warna mouse over, spasi antar paragraf, spasi antar teks, margin kiri, kanan, atas, bawah, dan parameter lainnya.  CSS adalah bahasa style sheet yang digunakan untuk mengatur tampilan dokumen. Dengan adanya CSS memungkinkan kita untuk menampilkan halaman yang sama dengan format yang berbeda.

- Framework Boostrap adalah sebuah library framework CSS yang dibuat khusus untuk mengembangkan front-end boostrap. Boostrap merupakan salah satu framework HTML, CSS, dan Javascript yang banyak digunakan pada website. Boostrap telah menyidiakan kumpulan komponen dasar yang telah dirancang sedimikian rupa untuk menciptakaan tampilan yang menarik. Boostrap juga berfungsi untuk mengatur layout pada halaman website yang bisa digunakan dengan mudah.

- Codeigniter (CI) merupakan sebuah framework yang bersifat open source serta gratis dan menggunakan metode MVC (Model, View,Controller). Tujuannya sama dengan yang lainnya yaitu untuk mempermudah pembuatan website. Codeigniter (CI) adalah sekumpulan intruksi-intruksi yang dikumpulkan menjadi satu untuk mempermudah programmer dalam pemanggilannya tanpa harus mengetikan syntax nya secara berulang.

- Android-SDK merupakan tools bagi para programmer yang ingin mengembangkan aplikasi berbasis google android. Android SDK mencakup seperangkat alat pengembangan yang komprehensif. Android SDK terdiri dari debugger, libraries, handset emulator,dokumentasi, contoh kode, dan tutorial. Saat ini Android sudah mendukung arsitektur x86 pada Linux (distribusi Linux apapun untuk desktop modern), Mac OS X 10.4.8 atau lebih, Windows XP atau Vista. Persyaratan mencakup JDK, Apache Ant dan Python 2.2 atau yang lebih baru. IDE yang didukung secara resmi adalah Eclipse 3.2 atau lebih dengan menggunakan pluginAndroid Development Tools (ADT), dengan ini pengembang dapat menggunakan teks editor untuk mengedit file Java dan XML serta menggunakan peralatan command line untuk menciptakan, membangun, melakukan debug aplikasi Android dan pengendalian perangkat Android (misalnya, reboot, menginstal paket perangkat lunak dengan jarak jauh).

- Java JDK adalah sebuah perangkat lunak yang digunakan untuk menggunakan proses kompilasi dari kode  java ke bytecode yang dapat dimengerti dan dapat dijalankan oleh JRE (Java Runtime Envirotment). JDK wajib terinstall pada komputer yang akan melakukan proses pembuatan aplikasi berbasis java.

- JavaScript adalah bahasa pemrograman yang bisa disisipkan ke HTML seperti halnya PHP akan tetapi Javascript berjalan disisi Client. Desain javascript dipengaruhi oleh banyak bahasa pemrograman, termasuk C, tetapi dimaksudkan untuk lebih digunakan oleh non-programmer.

- Fingerprint adalah mesin untuk memberikan data otomatis yang secara cepat absensi siswa. Fingerprint adalah aplikasi yang didesain untuk memenuhi data yang cepat dengan menggunakan verifikasi sidik jari .

- Android Studio adalah Lingkungan Pengembangan Terpadu - Integrated Development Environment (IDE) untuk pengembangan aplikasi Android, berdasarkan IntelliJ IDEA .


2.2 Deskripsi Data



2.2.1 Definisi Domain/Type

2.2.1 Conceptual Data Model

2.2.3 Physical Data Model

2.2.4 Daftar Tabel Aplikasi

Nama Tabel | Primary key | Data Store | E/R | Dekripsi 
|----------|-------------|------------|-----|---------|
| users	 | id_users | 11 | siswa dan guru | tabel users terdiri dari id_users, NIS, password dan level. tabel users terhubung dengan tabel guru dan siswa.|
| guru | NIP | 11 | users | Tabel guru terdiri dari NIP, nama_lengkap, email, password, jk, no_hp dan alamat. tabel guru terhubung dengan tabel users.|
| siswa | NIS | 11 | users, presensi dan kelas | Tabel siswa terdiri dari NIS, id_kelas, nama_lengkap, jk, ttl, email, agama, alamat, no_hp, nama_ayah, nama_ibu, pekerjaan_ayah, pekerjaan_ibu, alamat_ortu, dan password. tabel siswa terhubung dengan tabel users, presensi dan users.|
| kelas | id_kelas | 11 | siswa dan jurusan | Tabel kelas terdiri dari id_kelas, id_jurusan dan nama kelas |
| jurusan |  id_jurusan | 11 | kelas |  Tabel jurusan terdiri dari id_jurusan dan nama_jurusan. tabel jurusan terhubung dengan tabel kelas |
| presensi | id_presensi | 11 | siswa , masuk dan pulang | Tabel presensi terdiri dari id_presensi, NIS id_masuk, id_pulang, tanggal, keterangan dan presensi. Tabel presensi terhubung dengan tabel masuk, pulang dan siswa. |
| masuk | id_masuk | 11 | presensi | Tabel masuk terdiri dari id_masuk, masuk dan terlambat. Tabel masuk terhubung dengan tabel presensi |
| pulang | id_pulang | 11 | presensi | Tabel pulang terdiri id_pulang, pulang, dan lebih_cepat. Tabel pulang terhubung dengan presensi. | 

2.3 Deskripsi Modul


## Deskripsi Perancangan Rinci ##

3.1 Diagram Konteks

3.1.1 DFD Level 0

3.1.1.1 DFD Level 1 Proses 1

3.1.1.2 DFD Level 1 Proses 2

3.1.1.3 DFD Level 1 Proses 3

3.1.1.4 DFD Level 1 Proses 4

3.1.1.5 DFD Level 1 Proses 5

3.1.1.6 DFD Level 1 Proses 6

3.1.1.7 DFD Level 1 Proses 7

3.1.1.8 DFD Level 1 Proses 8

3.1.1.9 DFD Level 1 Proses 9

3.1.1.10 DFD Level 1 Proses 10

3.1.1.11 DFD Level 1 Proses 11

3.2 Deskripsi Rinci Tabel

3.2.1 Tabel A

3.2.2 Tabel B

3.2.3 Tabel dst

3.3 Deskripsi Rinci Modul

3.3.1 Modul

3.3.1.1 Fungsi Modul

3.3.1.2 Spesifikasi Layar Utama

3.3.1.3 Spesifikasi Query

3.3.1.4 Spesifikasi Field Data Layar

3.3.1.5 Spesifikasi Obyek Pada Layer

3.3.1.6 Spesifikasi Proses / Algoritma

3.3.2 Modul ?

3.4 Matriks Kerunutan 




