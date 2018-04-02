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

3.3.1 Modul siswa

3.3.1.1 Fungsi Modul

3.3.1.2 Spesifikasi Layar Utama

3.3.1.3 Spesifikasi Query

3.3.1.4 Spesifikasi Field Data Layar

3.3.1.5 Spesifikasi Obyek Pada Layer

3.3.1.6 Spesifikasi Proses / Algoritma

3.3.2 Modul kelas

3.3.2.1 Fungsi Modul

3.3.2.2 Spesifikasi Layar Utama

3.3.2.3 Spesifikasi Query

3.3.2.4 Spesifikasi Field Data Layar

3.3.2.5 Spesifikasi Obyek Pada Layer

3.3.2.6 Spesifikasi Proses / Algoritma

3.3.3 Modul jurusan

3.3.3.1 Fungsi Modul

3.3.3.2 Spesifikasi Layar Utama

3.3.3.3 Spesifikasi Query

3.3.3.4 Spesifikasi Field Data Layar

3.3.3.5 Spesifikasi Obyek Pada Layer

3.3.3.6 Spesifikasi Proses / Algoritma

3.3.4 Modul users

3.3.4.1 Fungsi Modul

3.3.4.2 Spesifikasi Layar Utama

3.3.4.3 Spesifikasi Query

3.3.4.4 Spesifikasi Field Data Layar

3.3.4.5 Spesifikasi Obyek Pada Layer

3.3.4.6 Spesifikasi Proses / Algoritma

3.3.5 Modul presensi

3.3.5.1 Fungsi Modul

3.3.5.2 Spesifikasi Layar Utama

3.3.5.3 Spesifikasi Query

3.3.5.4 Spesifikasi Field Data Layar

3.3.5.5 Spesifikasi Obyek Pada Layer

3.3.5.6 Spesifikasi Proses / Algoritma

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

![](https://image.ibb.co/f0Mujc/IMG_20180322_WA0007.jpg)

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

![](https://image.ibb.co/ieN3uc/IMG_20180322_WA0003.jpg)

##### 2.2.3 Physical Data Model

![](https://image.ibb.co/hT1UZc/IMG_20180322_WA0002.jpg)

##### 2.2.4 Daftar Tabel Aplikasi

 Nama Tabel | Primary key | Data Store | E/R | Dekripsi 
|-----------|-------------|------------|-----|---------|
| Siswa | NIS |  | tabel users, kelas dan presensi | tabel siswa terdiri dari NIS, id_kelas, nama_lengkap, jk, ttl, email,agama, alamat, no_hp, nama_ayah, pekerjaan_ayah, nama_ibu, pekerjaan_ibu dan alamat_ortu. tabel siswa terhubung dengan tabel users, kelas dan presensi |
| Guru | NIP |  | tabel users dan kelas | tabel guru terdiri dari NIP, id_kelas, nama_lengkap, email, password, jk, no_hp dan alamat. tabel guru terhubung dengan tabel users dan kelas |
| Kelas | id_kelas |  | tabel siswa, jurusan dan guru | tabel kelas terdiri dari id_kelas, nama_kelas dan id_jurusan. tabel kelas terhubung dengan tabel siswa, jurusan dan guru |
| Jurusan | id_jurusan |  | tabel kelas | tabel jurusan terdiri dari id_jurusan dan nama_jurusan. tabel jurusan terhubung dengan tabel kelas |
| Users | id_user |  | tabel siswa dan guru | tabel users terdiri dari id_user, NIP, NIS,NISN, level dan password. tabel users terhubung dengan tabel siswa dan guru. |
| Presensi | id_presensi |  | tabel siswa | tabel presensi terdiri dari id_presensi, NIS, keterangan, presensi, tanggal, masuk, terlambat, pulang dan lebih_cepat. tabel presensi terhubung dengan tabel siswa. |


#### 2.3 Deskripsi Modul ####

 No |  Nama Modul | Keterangan 
|---|-------------|-----------|
| 1 | Modul Siswa | Yang dapat mengelola modul siswa hanya admin saja, pada modul siswa admin dapat mengelola data siswa. | 
| 2 | Modul Kelas | Yang dapat mengelola modul kelas hanya admin saja, pada modul kelas admin dapat mengelola data kelas. |
| 3 | Modul Jurusan | Yang dapat mengelola modul jurusan hanya admin saja, pada modul jurusan admin dapat mengelola data jurusan. |
| 4 | Modul User | | Yang dapat mengelola modul user hanya admin saja, pada modul user admin dapat mengelola data user. |
| 5 | Modul Presensi | Pada modul presensi admin dapat mengelola, sedangkan guru, siswa dan orang tua dapat melihat hasil rekap absen berdasarkan levelnya. |



## Deskripsi Perancangan Rinci ##

#### 3.1 Diagram Konteks ####


![](https://image.ibb.co/h8rZZc/Konteks_Diagram.png)



##### 3.1.1 DFD level 0

![](https://image.ibb.co/bUeGfH/DFD_Level_0.png)





3.1.1.1 DFD Level 1 Proses Mengelola Data Master


![](https://image.ibb.co/fsfp0H/DFD_Level_1_mengelola_data_master.jpg)



 
3.1.1.1.1 DFD Level 2 Proses Mengelola Data Kelas

![](https://image.ibb.co/bOZA7x/DFD_Level_2_mengelola_data_kelas.jpg)







3.1.1.1.2 DFD Level 2 Proses Mengelola Data Siswa

![](https://image.ibb.co/gJdgEc/DFD_Level_2_mengelola_data_siswa.jpg)




3.1.1.1.3 DFD Level 2 Proses Mengelola Data Guru

![](https://image.ibb.co/dWjouc/DFD_Level_2_mengelola_data_guru.jpg)





3.1.1.1.4 DFD Level 2 Proses Mengelola Data Users

![](https://image.ibb.co/gh83Sx/DFD_Level_2_mengelola_data_user.jpg)


3.1.1.1.5 DFD Level 2 Proses Mengelola Data Jurusan

![](https://image.ibb.co/bvwZZc/DFD_Level_2_mengelola_data_jurusan.jpg)





3.1.1.1 DFD Level 1 Proses Mengelola Data Presensi 


![](https://image.ibb.co/iV7mfH/DFD_Level_1_mengelola_data_presensi.jpg)




#### 3.2 Deskripsi Rinci Tabel ####

##### 3.2.1 Tabel Siswa

Identifikasi/Nama	: siswa

Deskripsi Isi		: Berisi data-data siswa

Jenis 				: Tabel Referensi

Volume				: 

Laju				: 

Primary Key			: NIP 

![](https://image.ibb.co/gA0Ouc/IMG_20180323_WA0005.jpg)


##### 3.2.2 Tabel Guru

Identifikasi/Nama	: guru

Deskripsi Isi		: Berisi data-data guru.

Jenis 				: Tabel Referensi

Volume				:

Laju				:

Primary Key			: NIP

![](https://image.ibb.co/fQFCnx/IMG_20180323_WA0006.jpg)


##### 3.2.3 Tabel Kelas

Identifikasi/Nama	: kelas 

Deskripsi Isi		: Berisi id dan nama kelas.

Jenis 				: Tabel Referensi

Volume				:

Laju				:

Primary Key			: id_kelas

![](https://image.ibb.co/ey4iuc/IMG_20180323_WA0004.jpg)


##### 3.2.4 Tabel Jurusan

Identifikasi/Nama	: jurusan

Deskripsi Isi		: Berisi id dan nama jurusan.

Jenis 				: Tabel referensi

Volume				:

Laju				:

Primary Key			: id_jurusan

![](https://image.ibb.co/cq8nLH/IMG_20180323_WA0000.jpg)


##### 3.2.5 Tabel Users

Identifikasi/Nama	: users

Deskripsi Isi		: Berisi id dari berbagai user, password dan level.

Jenis 				: Tabel referensi

Volume				:

Laju				:

Primary Key			: id_users

![](https://image.ibb.co/fi7Q7x/IMG_20180323_WA0007.jpg)


##### 3.2.6 Tabel Presensi

Identifikasi/Nama	: presensi

Deskripsi Isi		: Berisi pengelolaan data induk.

Jenis 				: Tabel data induk

Volume				:

Laju				:

Primary Key			: id_presensi

![](https://image.ibb.co/mWJ9Zc/IMG_20180323_WA0008.jpg)


#### 3.3 Deskripsi Rinci Modul ####

##### 3.3.1 Modul Siswa

3.3.1.1 Fungsi Modul

![](https://image.ibb.co/iOaLPc/fungsi_siswa.png)

3.3.1.2 Spesifikasi Layar Utama

![](https://image.ibb.co/gEdD9c/data_siswa.png)

3.3.1.3 Spesifikasi Query

create table siswa (
NIS int not null,
id_kelas int not null,
nama_lengkap varchar (50),
jk varchar (9),
ttl varchar (50),
email varchar (50),
agama varchar (10),
alamat text,
no_hp varchar (15),
nama_ayah varchar (50),
nama_ibu varchar (50),
pekerjaan_ayah varchar (50),
pekerjaan_ibu varchar (50),
alamat_ortu text,
password varchar (50),
PRIMARY KEY (NIS),
FOREIGN KEY (id_kelas) REFERENCES kelas (id_kelas)
ON DELETE CASCADE
ON UPDATE CASCADE
);

3.3.1.4 Spesifikasi Field Data Layar

 Label | Field | Tabel/Query | Validasi | Keterangan
|------|-------|-------------|----------|-----------|

3.3.1.5 Spesifikasi Obyek Pada Layer

![](https://image.ibb.co/fxaXnx/obyek_siswa.png)

3.3.1.6 Spesifikasi Proses / Algoritma



##### 3.3.2 Modul Kelas

3.3.2.1 Fungsi Modul

![](https://image.ibb.co/c1ux4c/fungsi_kelass.png)

3.3.2.2 Spesifikasi Layar Utama

![](https://image.ibb.co/m5JD9c/data_kelas.png)

3.3.2.3 Spesifikasi Query

create table kelas (
id_kelas int not null AUTO_INCREMENT,
id_jurusan int not null,
nama_kelas varchar (20),
PRIMARY KEY (id_kelas),
FOREIGN KEY (id_jurusan) REFERENCES jurusan (id_jurusan)
ON DELETE CASCADE
ON UPDATE CASCADE
);


3.3.2.4 Spesifikasi Field Data Layar

 Label | Field | Tabel/Query | Validasi | Keterangan
|------|-------|-------------|----------|-----------|

3.3.2.5 Spesifikasi Obyek Pada Layer

![](https://image.ibb.co/g4xCnx/obyek_kelas.png)

3.3.2.6 Spesifikasi Proses / Algoritma


##### 3.3.3 Modul Jurusan

3.3.3.1 Fungsi Modul

![](https://image.ibb.co/ciWujc/fungsi_jurusan.png)

3.3.3.2 Spesifikasi Layar Utama

![](https://image.ibb.co/nNTKhx/data_jurusan.png)

3.3.3.3 Spesifikasi Query

create table jurusan (
id_jurusan int not null AUTO_INCREMENT,
nama_jurusan varchar (50),
PRIMARY KEY (id_jurusan));

3.3.3.4 Spesifikasi Field Data Layar

 Label | Field | Tabel/Query | Validasi | Keterangan
|------|-------|-------------|----------|-----------|

3.3.3.5 Spesifikasi Obyek Pada Layer

![](https://image.ibb.co/jJPsnx/obyek_jurusan.png)

3.3.3.6 Spesifikasi Proses / Algoritma


##### 3.3.4 Modul User

3.3.4.1 Fungsi Modul

![](https://image.ibb.co/h7yJAH/fungsi_users.png)

3.3.4.2 Spesifikasi Layar Utama

![](https://image.ibb.co/eyvh2x/data_user_siswa.png)
![](https://image.ibb.co/j5w0pc/data_user_guru.png)

3.3.4.3 Spesifikasi Query

create table users (
id_users int not null,
NIP int not null,
NIS int not null,
NISN int not null, 
password varchar (50),
level varchar (10),
PRIMARY KEY (id_users),
FOREIGN KEY (NIS) REFERENCES siswa (NIS), 
FOREIGN KEY (NIP) REFERENCES guru (NIP)
ON DELETE CASCADE
ON UPDATE CASCADE
);

3.3.4.4 Spesifikasi Field Data Layar

 Label | Field | Tabel/Query | Validasi | Keterangan
|------|-------|-------------|----------|-----------|

3.3.4.5 Spesifikasi Obyek Pada Layer

![](https://image.ibb.co/dopgfH/obyek_users.png)

3.3.4.6 Spesifikasi Proses / Algoritma


##### 3.3.5 Modul Presensi

3.3.5.1 Fungsi Modul

![](https://image.ibb.co/d709Hx/fungsi_presensi.png)

3.3.5.2 Spesifikasi Layar Utama

![](https://image.ibb.co/dsVn4c/data_presensi.png)

3.3.5.3 Spesifikasi Query

create table presensi (
id_presensi int not null AUTO_INCREMENT,
NIS int not null,
tanggal date,
keterangan text,
presensi varchar (20),
pulang time,
lebih_cepat int,
masuk time,
terlambat int,
PRIMARY KEY (id_presensi),
FOREIGN KEY (NIS) REFERENCES siswa (NIS)
ON DELETE CASCADE
ON UPDATE CASCADE
);

3.3.5.4 Spesifikasi Field Data Layar

 Label | Field | Tabel/Query | Validasi | Keterangan
|------|-------|-------------|----------|-----------|

3.3.5.5 Spesifikasi Obyek Pada Layer

![](https://image.ibb.co/i2YwEc/obyek_presensi.png)

3.3.5.6 Spesifikasi Proses / Algoritma




#### 3.4 Matriks Kerunutan  ####

 ID Kebutuhan | Modul | Keterangan 
|-------------|-------|-----------|



