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


## Pendahuluan ##


#### 1.1 Tujuan ####

Tujuan  pembuatan  SDD  (Software  Design  Document) ini adalah  untuk  menjelaskan 
langkah  langkah  desain  dan  proses-proses  dalam  pembuatan  sistem  aplikasi  yang  akan  
diterapkan  pada  Sistem  Absensi “M-AFI”,  dan  juga  memberi  definisi  kebutuhan 
untuk sistem, spesifikasi kebutuhan fungsional. 

 Fungsi utama dari M-AFI ini adalah menyediakan sistem absensi siswa dengan sidik jari
dimana orang tua dapat melihat kehadiran dan rekap presensi anaknya, guru dan siswapun 
dapat melihat rekap presensinya.

#### 1.2 Lingkup ####

Hasil dari SDD ini adalah aplikasi berbasis web untuk adminnya dan berbasis mobile untuk user-usernya,
yang digunakan untuk membantu manajemen di M-AFI ini adalah dalam hal :
- mencatat data siswa, kelas, jurusan, user dan presensi.
- Mencatat kehadiran siswa secara digital.
- mengupdate data kehadiran siswa


#### 1.3 Definisi, akronim, dan Singkatan ####

Singkatan | Definisi 
| ------ | ------ |
| SRS | Merupakan singkatan dari Software Requirement Specfication |
| M-AFI | Singkatan Dari Mobile Attendence merupakan sebuah aplikasi absensi yang menggunakan mobile  |
|Fingerprint| Merupakan fingerprint merupakan suatu perangkat keras untuk memberikan data otomatis yang menggunakan sidik jari manusia. fingerprint digunakan biasannya untuk sistem absensi yang digunakan beberapa instansi.|
| Webserver | Webserver sebuah software yang memberikan layanan berbasis data dan berfungsi menerima permintaan dari HTTP atau HTTPS pada klien yang dikenal dan biasanya kita kenal dengan nama web browser (Mozilla Firefox, Google Chrome) dan untuk mengirimkan kembali yang hasilnya dalam bentuk beberapa halaman web dan pada umumnya akan berbentuk dokumen HTML. |
| LAN | LAN merupakan singkatan dari Local Area Network, yang mana merupakan sebuah jaringan komputer dengan skala kecil (local) seperti gedung perkantoran, sekolah atau rumah. LAN umumnya digunakan untuk berbagi resource dalam suatu gedung. LAN dapat berdiri sendiri, tanpa terhubung oleh jaringan luar atau internet. Namun apabila suatu LAN dihubungkan dengan beberapa LAN lainnya maka akan terbentuk suatu jaringan yang disebut Metropolitan Area Network (MAN). |

#### 1.4 Referensi ####

IEEE Draft Standard for Software Design Descriptions

#### 1.5 Ikhtisar Dokumen ####

BAB 1 Pendahuluan
1.1 Tujuan
1.2 Lingkup
1.3 Definisi, Akronim, dan Singkatan
1.4 Referensi
1.5 Ikhtisar Dokumen

BAB 2 Deskripsi Perancangan Global
2.1 Rancangan Lingkungan Implementasi
2.2 Deskripsi Data
2.2.1  Definisi Domain/Type
2.2.2 Conceptual Data Model
2.2.3 Physical Data Model 
2.2.4 Daftar Tabel Aplikasi
2.3 Deskripsi Modul

BAB 3 Deskripsi Perancangan Rinci
3.1 Diagram Konteks
3.1.1 DFD level 0
3.1.1.1 DFD Level 1 Proses Mengelola Data Master 
3.1.1.1.1 DFD Level 2 Proses Mengelola Data Kelas
3.1.1.1.2 DFD Level 2 Proses Mengelola Data Siswa
3.1.1.1.3 DFD Level 2 Proses Mengelola Data Guru
3.1.1.1.4 DFD Level 2 Proses Mengelola Data Users
3.1.1.1.5 DFD Level 2 Proses Mengelola Data Jurusan
3.1.1.1 DFD Level 1 Proses Mengelola Data Presensi 
3.2 Deskripsi Rinci Tabel
3.2.1 Tabel Siswa
3.2.2 Tabel Guru
3.2.3 Tabel Kelas
3.2.4 Tabel Jurusan
3.2.5 Tabel User
3.2.6 Tabel Presensi
3.3 Deskripsi Rinci Modul
3.3.1 Modul 1
3.3.1.1 Fungsi Modul
3.3.1.2 Spesifikasi Layar Utama
3.3.1.3 Spesifikasi Query
3.3.1.4 Spesifikasi Field Data Layar
3.3.1.5 Spesifikasi Obyek Pada Layer
3.3.1.6 Spesifikasi Proses / Algoritma
3.3.2 Modul 2
3.3.3 Modul dst
3.4 Matriks Keturunan


##  Deskripsi Perancangan Global ##

#### 2.1 Rancangan Lingkungan Implementasi ####

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


#### 2.2 Deskripsi Data ####



##### 2.2.1 Definisi Domain/Type

 Domain Name | Power Designer Tipe
|------------|--------------------|
| NIP | integer |
| NIS | integer |
| id_kelas | integer |
| id_presensi | integer |
| id_user | integer |
| id_jurusan | integer |
| nama_lengkap | varchar |
| jk | varchar |
| ttl | varchar |
| email | varchar |
| agama | varchar |
| alamat | text |
| no_hp | varchar |
| nama_ayah | varchar |
| pekerjaan_ayah | varchar |
| nama_ibu | varchar |
| pekerjaan_ibu | varchar |
| alamat_ortu | text |
| keterangan | text |
| presensi | varchar |
| tanggal | date |
| masuk | time |
| terlambat | integer |
| pulang  | time |
| lebih_cepat | integer |
| level  |  |
| password | varchar |
| nama_kelas | varchar |
| nama_jurusan | varchar |


  
##### 2.2.2 Conceptual Data Model



##### 2.2.3 Physical Data Model



##### 2.2.4 Daftar Tabel Aplikasi

 Nama Tabel | Primary key | Data Store | E/R | Dekripsi 
|-----------|-------------|------------|-----|---------|
| Siswa | NIS |  | tabel users, kelas dan presensi | tabel siswa terdiri dari NIS, id_kelas, nama_lengkap, jk, ttl, email,agama, alamat, no_hp, nama_ayah, pekerjaan_ayah, nama_ibu, pekerjaan_ibu dan alamat_ortu. tabel siswa terhubung dengan tabel users, kelas dan presensi |
| Guru | NIP |  | tabel users dan kelas | tabel guru terdiri dari NIP, id_kelas, nama_lengkap, email, password, jk, no_hp dan alamat. tabel guru terhubung dengan tabel users dan kelas |
| Kelas | id_kelas |  | tabel siswa, jurusan dan guru | tabel kelas terdiri dari id_kelas, nama_kelas dan id_jurusan. tabel kelas terhubung dengan tabel siswa, jurusan dan guru |
| Jurusan | id_jurusan |  | tabel kelas | tabel jurusan terdiri dari id_jurusan dan nama_jurusan. tabel jurusan terhubung dengan tabel kelas |
| Users | id_user |  | tabel siswa dan guru | tabel users terdiri dari id_user, NIP, NIS, level dan password. tabel users terhubung dengan tabel siswa dan guru. |
| Presensi | id_presensi |  | tabel siswa | tabel presensi terdiri dari id_presensi, NIS, keterangan, presensi, tanggal, masuk, terlambat, pulang dan lebih_cepat. tabel presensi terhubung dengan tabel siswa. |


#### 2.3 Deskripsi Modul ####

 No |  Nama Modul | Keterangan 
|---|-------------|-----------|
| 1 | Modul Siswa | Yang dapat mengelola modul siswa hanya admin saja, pada modul siswa admin dapat mengelola data siswa. | 
| 2 | Modul Kelas | Yang dapat mengelola modul kelas hanya admin saja, pada modul kelas admin dapat mengelola data kelas. |
| 3 | Modul Jurusan | Yang dapat mengelola modul jurusan hanya admin saja, pada modul jurusan admin dapat mengelola data jurusan. |
| 4 | Modul User | | Yang dapat mengelola modul user hanya admin saja, pada modul user admin dapat mengelola data user. |
| 5 | Modul Presensi | Pada modul presensi admin dapat mengelola, sedangkan guru, siswa dan orang tua dapat melihat hasil rekap absen berdasarkan levelnya. |
| 6 | Modul Login | Yang dapat login adalah admin, guru, siswa dan orang tua namun beda-beda level. |



## Deskripsi Perancangan Rinci ##

#### 3.1 Diagram Konteks ####

##### 3.1.1 DFD level 0

3.1.1.1 DFD Level 1 Proses Mengelola Data Master
 
3.1.1.1.1 DFD Level 2 Proses Mengelola Data Kelas

3.1.1.1.2 DFD Level 2 Proses Mengelola Data Siswa

3.1.1.1.3 DFD Level 2 Proses Mengelola Data Guru

3.1.1.1.4 DFD Level 2 Proses Mengelola Data Users

3.1.1.1.5 DFD Level 2 Proses Mengelola Data Jurusan

3.1.1.1 DFD Level 1 Proses Mengelola Data Presensi 

#### 3.2 Deskripsi Rinci Tabel ####

##### 3.2.1 Tabel Siswa

Identifikasi/Nama	:

Deskripsi Isi		:

Jenis 				:

Volume				:

Laju				:

Primary Key			:


 Id Field | Deskripsi | Tipe & length | Boleh NULL | Default |Keterangan 
|---------|-----------|---------------|------------|---------|----------|

##### 3.2.2 Tabel Guru

Identifikasi/Nama	:

Deskripsi Isi		:

Jenis 				:

Volume				:

Laju				:

Primary Key			:


 Id Field | Deskripsi | Tipe & length | Boleh NULL | Default |Keterangan 
|---------|-----------|---------------|------------|---------|----------|


##### 3.2.3 Tabel Kelas

Identifikasi/Nama	:

Deskripsi Isi		:

Jenis 				:

Volume				:

Laju				:

Primary Key			:


 Id Field | Deskripsi | Tipe & length | Boleh NULL | Default |Keterangan 
|---------|-----------|---------------|------------|---------|----------|

##### 3.2.4 Tabel Jurusan

Identifikasi/Nama	:

Deskripsi Isi		:

Jenis 				:

Volume				:

Laju				:

Primary Key			:


 Id Field | Deskripsi | Tipe & length | Boleh NULL | Default |Keterangan 
|---------|-----------|---------------|------------|---------|----------|

##### 3.2.5 Tabel Users

Identifikasi/Nama	:

Deskripsi Isi		:

Jenis 				:

Volume				:

Laju				:

Primary Key			:


 Id Field | Deskripsi | Tipe & length | Boleh NULL | Default |Keterangan 
|---------|-----------|---------------|------------|---------|----------|

##### 3.2.6 Tabel Presensi

Identifikasi/Nama	:

Deskripsi Isi		:

Jenis 				:

Volume				:

Laju				:

Primary Key			:


 Id Field | Deskripsi | Tipe & length | Boleh NULL | Default |Keterangan 
|---------|-----------|---------------|------------|---------|----------|

#### 3.3 Deskripsi Rinci Modul ####

##### 3.3.1 Modul Siswa

3.3.1.1 Fungsi Modul

 No | Fungsi | Jenis | Tabel Terkait
|---|--------|-------|--------------|

3.3.1.2 Spesifikasi Layar Utama



3.3.1.3 Spesifikasi Query



3.3.1.4 Spesifikasi Field Data Layar

 Label | Field | Tabel/Query | Validasi | Keterangan
|------|-------|-------------|----------|-----------|

3.3.1.5 Spesifikasi Obyek Pada Layer

 Id Objek | Jenis | Keterangan 
|---------|-------|-----------|

3.3.1.6 Spesifikasi Proses / Algoritma



##### 3.3.2 Modul Kelas

3.3.2.1 Fungsi Modul

 No | Fungsi | Jenis | Tabel Terkait
|---|--------|-------|--------------|

3.3.2.2 Spesifikasi Layar Utama



3.3.2.3 Spesifikasi Query



3.3.2.4 Spesifikasi Field Data Layar

 Label | Field | Tabel/Query | Validasi | Keterangan
|------|-------|-------------|----------|-----------|

3.3.2.5 Spesifikasi Obyek Pada Layer

 Id Objek | Jenis | Keterangan 
|---------|-------|-----------|

3.3.2.6 Spesifikasi Proses / Algoritma


##### 3.3.3 Modul Jurusan

3.3.3.1 Fungsi Modul

 No | Fungsi | Jenis | Tabel Terkait
|---|--------|-------|--------------|

3.3.3.2 Spesifikasi Layar Utama



3.3.3.3 Spesifikasi Query



3.3.3.4 Spesifikasi Field Data Layar

 Label | Field | Tabel/Query | Validasi | Keterangan
|------|-------|-------------|----------|-----------|

3.3.3.5 Spesifikasi Obyek Pada Layer

 Id Objek | Jenis | Keterangan 
|---------|-------|-----------|

3.3.3.6 Spesifikasi Proses / Algoritma


##### 3.3.4 Modul User

3.3.4.1 Fungsi Modul

 No | Fungsi | Jenis | Tabel Terkait
|---|--------|-------|--------------|

3.3.4.2 Spesifikasi Layar Utama



3.3.4.3 Spesifikasi Query



3.3.4.4 Spesifikasi Field Data Layar

 Label | Field | Tabel/Query | Validasi | Keterangan
|------|-------|-------------|----------|-----------|

3.3.4.5 Spesifikasi Obyek Pada Layer

 Id Objek | Jenis | Keterangan 
|---------|-------|-----------|

3.3.4.6 Spesifikasi Proses / Algoritma


##### 3.3.5 Modul Presensi

3.3.5.1 Fungsi Modul

 No | Fungsi | Jenis | Tabel Terkait
|---|--------|-------|--------------|

3.3.5.2 Spesifikasi Layar Utama



3.3.5.3 Spesifikasi Query



3.3.5.4 Spesifikasi Field Data Layar

 Label | Field | Tabel/Query | Validasi | Keterangan
|------|-------|-------------|----------|-----------|

3.3.5.5 Spesifikasi Obyek Pada Layer

 Id Objek | Jenis | Keterangan 
|---------|-------|-----------|

3.3.5.6 Spesifikasi Proses / Algoritma


##### 3.3.6 Modul Login

3.3.6.1 Fungsi Modul

 No | Fungsi | Jenis | Tabel Terkait
|---|--------|-------|--------------|

3.3.6.2 Spesifikasi Layar Utama



3.3.6.3 Spesifikasi Query



3.3.6.4 Spesifikasi Field Data Layar

 Label | Field | Tabel/Query | Validasi | Keterangan
|------|-------|-------------|----------|-----------|

3.3.6.5 Spesifikasi Obyek Pada Layer

 Id Objek | Jenis | Keterangan 
|---------|-------|-----------|

3.3.6.6 Spesifikasi Proses / Algoritma


#### 3.4 Matriks Kerunutan  ####

 ID Kebutuhan | Modul | Keterangan 
|-------------|-------|-----------|


