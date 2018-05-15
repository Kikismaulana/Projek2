<html>
<div align="center">

<h1>Software Design Document</h1> 

<p>Version 1.0 <br> 15 Maret 2018</p><br>

<img src="https://image.ibb.co/bJCF0x/POLINDRA.png" height="200px"><br>

<br><br>

<h2>M-AFI</h2>


Diyah Ayu Amaliyah (1603067) <br>
		
Kikis Maulana (1603074) <br>
			
Noufal Ibrahim (1603080) <br>
			
Triyani Ramadhani (1603086) <br>
			
Widiana Silvi (1603088) <br><br><br>


<h2>Jurusan D3 Teknik Informatika
<br>
Politeknik Negeri Indramayu</h2>

</div>
</html>

## BAB I Pendahuluan ##


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

 SUBBAB | ISI
|-------|---------------------|
| BAB I | PENDAHULUAN |
|  | Berisi overview perangkat lunak yang merupakan ringkasan terhadap kemampuan aplikasisecara umum. |
| BAB II | DESKRIPSI PERANCANGAN GLOBAL |
|  | Berisi perancangan global dari perangkat lunak yang meliputi perancangan lingkungan operasidimana perangkat lunak akan dioperasikan, deskripsi dari data yang digunakan oleh perangkatlunak, serta dekomposisi lojik dari modul-modul perangkat lunak. |
| BAB III | DESKRIPSI PERANCANGAN RINCI |
|  | Berisi deskripsi lengkap dan rinci dari kebutuhan perangkat lunak yang meliputi deskripsi rincidari tabel yang digunakan, perincian dari setiap fungsi yang ada pada rancangan global,dekomposisi fisik dari modul –modul perangkat lunak, serta matriks kerunutan yangmenggambarkan keterkaitan antara perancangan dengan spesifikasi kebutuhan. |


## BAB II Deskripsi Perancangan Global ##

#### 2.1 Rancangan Lingkungan Implementasi ####

Tools | Definisi
| ------------- | ------------------|
| Sublime | Sublime adalah sebuah software aplikasi/editor text untuk bahasa pemrograman termasuk pemrograman PHP, sublime mendukung banyak bahasa pemrograman dan bahasa markup serta fungsinya dapat ditambah dengan plugin, sublime juga memiliki banyak kelebihan. |
| PHP | PHP adalah singkatan dari Hypertext Prepocessor, yaitu bahasa pemrograman yang digunakan secara luas untuk penanganan pembuatan dan pengembangan sebuah situs web dan bias digunakan bersamaan dengan HTML. PHP diciptakan oleh Rasmus Lerdorf pertama kali tahun 1994. Pada awalnya PHP adalah singkatan dari “Personal Home Page Tools”. Selanjutnya diganti menjadi FI (“Forms Interpreter”). Sejak versi 3.0, nama bahasa ini diubah menjadi “PHP Hypertext Prepocessor dengan singkatannya PHP . PHP versi terbaru adalah versi ke-5. Berdasarkan survey Netcraft pada bulan Desember 1999, lebih dari sejuta website menggunakan PHP, diantaranya adalah NASA, Mitsubishi, dan RedHat. |
| MySQL | MySQL adalah sebuah perangkat lunak sistem manajemen basis data SQL (bahasa Inggris: database management system) atau DBMS yang multithread, multi-user, dengan sekitar 6 juta instalasi di seluruh dunia. MySQL AB membuat MySQL tersedia sebagai perangkat lunak gratis dibawah lisensi GNU General Public License (GPL), tetapi mereka juga menjual dibawah lisensi komersial untuk kasus-kasus di mana penggunaannya tidak cocok dengan penggunaan GPL. Tidak sama dengan proyek-proyek seperti Apache, di mana perangkat lunak dikembangkan oleh komunitas umum, dan hak cipta untuk kode sumber dimiliki oleh penulisnya masing-masing, MySQL dimiliki dan disponsori oleh sebuah perusahaan komersial Swedia MySQL AB, di mana memegang hak cipta hampir atas semua kode sumbernya. Kedua orang Swedia dan satu orang Finlandia yang mendirikan MySQL AB adalah: David Axmark, Allan Larsson, dan Michael "Monty" Widenius. |
| CSS | Cascading Style Sheet (CSS) merupakan aturan untuk mengatur beberapa komponen dalam sebuah web sehingga akan lebih terstruktur dan seragam. CSS bukan merupakan bahasa pemograman. Sama halnya styles dalam aplikasi pengolahan kata seperti Microsoft Word yang dapat mengatur beberapa style, misalnya heading, subbab, bodytext, footer, images, dan style lainnya untuk dapat digunakan bersama-sama dalam beberapa berkas (file). Pada umumnya CSS dipakai untuk memformat tampilan halaman web yang dibuat dengan bahasa HTML dan XHTML. CSS dapat mengendalikan ukuran gambar, warna bagian tubuh pada teks, warna tabel, ukuran border, warna border, warna hyperlink, warna mouse over, spasi antar paragraf, spasi antar teks, margin kiri, kanan, atas, bawah, dan parameter lainnya. CSS adalah bahasa style sheet yang digunakan untuk mengatur tampilan dokumen. Dengan adanya CSS memungkinkan kita untuk menampilkan halaman yang sama dengan format yang berbeda. |
| Framework Boostrap | Framework Boostrap adalah sebuah library framework CSS yang dibuat khusus untuk mengembangkan front-end boostrap. Boostrap merupakan salah satu framework HTML, CSS, dan Javascript yang banyak digunakan pada website. Boostrap telah menyidiakan kumpulan komponen dasar yang telah dirancang sedimikian rupa untuk menciptakaan tampilan yang menarik. Boostrap juga berfungsi untuk mengatur layout pada halaman website yang bisa digunakan dengan mudah. |
| Codeigniter | Codeigniter (CI) merupakan sebuah framework yang bersifat open source serta gratis dan menggunakan metode MVC (Model, View,Controller). Tujuannya sama dengan yang lainnya yaitu untuk mempermudah pembuatan website. Codeigniter (CI) adalah sekumpulan intruksi-intruksi yang dikumpulkan menjadi satu untuk mempermudah programmer dalam pemanggilannya tanpa harus mengetikan syntax nya secara berulang. |
| Android-SDK | Android-SDK merupakan tools bagi para programmer yang ingin mengembangkan aplikasi berbasis google android. Android SDK mencakup seperangkat alat pengembangan yang komprehensif. Android SDK terdiri dari debugger, libraries, handset emulator,dokumentasi, contoh kode, dan tutorial. Saat ini Android sudah mendukung arsitektur x86 pada Linux (distribusi Linux apapun untuk desktop modern), Mac OS X 10.4.8 atau lebih, Windows XP atau Vista. Persyaratan mencakup JDK, Apache Ant dan Python 2.2 atau yang lebih baru. IDE yang didukung secara resmi adalah Eclipse 3.2 atau lebih dengan menggunakan pluginAndroid Development Tools (ADT), dengan ini pengembang dapat menggunakan teks editor untuk mengedit file Java dan XML serta menggunakan peralatan command line untuk menciptakan, membangun, melakukan debug aplikasi Android dan pengendalian perangkat Android (misalnya, reboot, menginstal paket perangkat lunak dengan jarak jauh). |
| Java JDK | Java JDK adalah sebuah perangkat lunak yang digunakan untuk menggunakan proses kompilasi dari kode java ke bytecode yang dapat dimengerti dan dapat dijalankan oleh JRE (Java Runtime Envirotment). JDK wajib terinstall pada komputer yang akan melakukan proses pembuatan aplikasi berbasis java. |
| JavaScript | JavaScript adalah bahasa pemrograman yang bisa disisipkan ke HTML seperti halnya PHP akan tetapi Javascript berjalan disisi Client. Desain javascript dipengaruhi oleh banyak bahasa pemrograman, termasuk C, tetapi dimaksudkan untuk lebih digunakan oleh non-programmer. |
| Fingerprint | Fingerprint adalah mesin untuk memberikan data otomatis yang secara cepat absensi siswa. Fingerprint adalah aplikasi yang didesain untuk memenuhi data yang cepat dengan menggunakan verifikasi sidik jari . |
| Android Studio | Android Studio adalah Lingkungan Pengembangan Terpadu - Integrated Development Environment (IDE) untuk pengembangan aplikasi Android, berdasarkan IntelliJ IDEA . |


#### 2.2 Deskripsi Data ####

Tabel Siswa

Nama Field | Jenis | Volume  | Laju | Primary Key | Constraint integrity	| Deskripsi
| ------------- | -------- | ----------- | ------- | -------------- | ------------------------- | ------------- |
| NIS | Integer	| 11 | Primary key | Iya | Auto_increment | Id siswa auto increment |
| Id_kelas | Integer | 11	 | Foreign key |	Iya | Id_kelas pada kelas | Relasi untuk menampilkan kelas |
| Nama_lengkap | Varchar | 50 | Tidak | Tidak |  - | Nama_lengkap  siswa |
| Jk | Varchar |	9 | Tidak | Tidak | - | Jk siswa |
| Ttl |	Varchar  | 50 |	Tidak |	Tidak |	- | Ttl siswa |
|  Email | Varchar  | 50 | Tidak | Tidak |	- | Email siswa |
| Agama | Varchar | 10	| Tidak | Tidak	| - | Agama siswa | 
| alamat | text | - | Tidak | Tidak | - | Alamat siswa |
| No_hp | Varchar | 15 | Tidak | Tidak | - | No_hp siswa |
| Nama_ayah |	Varchar | 50 | Tidak | Tidak | -	| Nama_ayah siswa |
| Nama_ibu | Varchar  | 50 | Tidak | Tidak | - | Nama_ibu siswa |
| Pekerjaan_ayah | Varchar | 50 | Tidak | Tidak | - | Pekerjaan_ayah siswa |
| Pekerjaan_ibu	 | Varchar | 50	| Tidak | Tidak | - | Pekerjaan_ibu siswa |
| Alamat_ortu | text | - | Tidak | Tidak | - | Alamat_ortu siswa |

Tabel guru

Nama Field | Jenis | Volume  | Laju | Primary Key | Constraint integrity	| Deskripsi
| ------------- | -------- | ----------- | ------- | -------------- | ------------------------- | ------------- |
| NIP | integer | 11 | Primary key | Iya	| Auto_increment | NIP auto incerement |
| Id_kelas | integer | 11	 | Foreign key |	Iya | Id kelas pada kelas	 | Relasi untuk menampilkan kelas |
| Nama_lengkap | Varchar | 50 | Tidak | Tidak | - | Nama_lengkap guru |
| Email | Varchar | 50 | Tidak | 	Tidak |	- | Email guru |
| Password | Varchar |	50 | Tidak | Tidak | - | Password guru |
| Jk | Varchar | 9 | Tidak | Tidak | - | Jenis kelamin guru |
| No_hp | Varchar | 15	| Tidak | Tidak | - | No_hp guru |
| alamat | text	| - | Tidak | Tidak | - | Alamat guru |

Tabel kelas

Nama Field | Jenis | Volume  | Laju | Primary Key | Constraint integrity	| Deskripsi
| ------------- | -------- | ----------- | ------- | -------------- | ------------------------- | ------------- |
| Id_kelas | Integer | 11	 | Primary key | Iya | Auto increment | Id_kelas auto increment |
| Id_jurusan | Integer | 11 | Foreign key | Iya | Id jurusan pada jurusan | Relasi untuk menampilkan jurusan |
| Nama_kelas | varchar	 | 20 | -	 | Tidak  | - | Nama_kelas kelas |

Tabel Jurusan 

Nama Field | Jenis | Volume  | Laju | Primary Key | Constraint integrity	| Deskripsi
| ------------- | -------- | ----------- | ------- | -------------- | ------------------------- | ------------- |
| Id_jurusan | Integer |	11 | Primary key | Iya |	Auto increment | Id jurusan auto increment |
| Nama_jurusan | varchar | 50 | Tidak | Tidak | - | Nama_jurusan untuk jurusan |

Tabel users

Nama Field | Jenis | Volume  | Laju | Primary Key | Constraint integrity	| Deskripsi
| ------------- | -------- | ----------- | ------- | -------------- | ------------------------- | ------------- |
| Id_users | Integer  | 11 | Primary key	| Iya | Auto increment | Id users auto increment |
| NIS | Integer | 11 | Foreign key | Iya | NIS pada siswa | Relasi untuk menampilkan siswa |
| NIP | Integer | 11 | Foreign key | Iya | NIP pada guru  | Relasi untuk menampilkan guru |
| NISN	| Integer | 11 | Foreign key | Iya | - | Untuk id orang tua |
| Password | Varchar  | 50 | Tidak | Tidak | - | Password users |
| level | Varchar | 50 | Tidak | Tidak | - | Level users |

Tabel Presensi

Nama Field | Jenis | Volume  | Laju | Primary Key | Constraint integrity	| Deskripsi
| ------------- | -------- | ----------- | ------- | -------------- | ------------------------- | ------------- |
| Id_presensi | Integer | 11 | Primary key | Iya | Auto increment | Id presensi auto increment |
| NIS | Integer | 11 | Foreign key | Iya | NIS pada siswa | Relasi untuk menampilkan siswa |
| Id_izin | Integer | 11 | Foreign key | Iya | Id izin pada izin | Relasi untuk menampilkan izin |
| Tanggal | Date | - | Tidak	 | Tidak | - | Tanggal presensi |
| Keterangan | Text | - | Tidak | Tidak | - | Keterangan presensi |
| Presensi | Varchar | 20 | Tidak | Tidak | - | Presensi pada presensi |
| Pulang | Time	| - | Tidak | Tidak | - | Waktu Pulang pada presensi |
| Lebih_cepat | Integer | 11 | Tidak | Tidak | - | Waktu lebih cepat pada presensi |
| Masuk | Time | - | Tidak | Tidak | - | Waktu masuk pada presensi |
| Terlambat | Integer | 11 | Tidak | Tidak | - | Waktu terlambat pada presensi |

Tabel izin

Nama Field | Jenis | Volume  | Laju | Primary Key | Constraint integrity	| Deskripsi
| ------------- | -------- | ----------- | ------- | -------------- | ------------------------- | ------------- |
| Id_izin | Integer | 11 | Primary key | Iya | Auto_increment | Id izin auto increment |
| Alasan | Text | - | Tidak | Tidak | - | Alasan pada izin  |
| Tanggal_mulai | Date | - | Tidak | Tidak | - | Tanggal mulai pada izin |
|Tanggal_selesai | Date | - | Tidak | Tidak | - | Tanggal selesai pada izin |
| Bukti | Varchar | 50 | Tidak | Tidak | - | Bukti pada izin |
| Status	| Varchar | 20 | Tidak | Tidak | - | Status pada izin | 


#### 2.2.1 Definisi Domain/Type

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


  
#### 2.2.2 Conceptual Data Model

![](http://image.ibb.co/ce5iZ7/cdm.png)

#### 2.2.3 Physical Data Model

<img src="https://image.ibb.co/ignTjx/ER.png" height="200px">

#### 2.2.4 Daftar Tabel Aplikasi

 Nama Tabel | Primary key | Data Store | E/R | Dekripsi 
|-----------|-------------|------------|-----|---------|
| Siswa | NIS | D2 | Tabel users, kelas dan presensi | Tabel siswa terdiri dari NIS int not null PRIMARY KEY, id_kelas int not null REFERENCES kelas (id_kelas) ON DELETE CASCADE ON UPDATE CASCADE, nama_lengkap varchar (50), jk varchar (9), ttl varchar (50), email varchar (50), agama varchar (10), alamat text, no_hp varchar (15), nama_ayah varchar (50), nama_ibu varchar (50), pekerjaan_ayah varchar (50), pekerjaan_ibu varchar (50), alamat_ortu text. tabel siswa terhubung dengan tabel users, kelas dan presensi |
| Guru | NIP | D3 | Tabel users dan kelas | Tabel guru terdiri dari NIP int not null, id_kelas int not null REFERENCES kelas (id_kelas) ON DELETE CASCADE ON UPDATE CASCADE, nama_lengkap varchar (50), email varchar (50), password varchar (50), jk varchar (9), no_hp varchar (15), alamat text, PRIMARY KEY (NIP). tabel guru terhubung dengan tabel users dan kelas |
| Kelas | id_kelas | D1 | Tabel siswa, jurusan dan guru | Tabel kelas terdiri dari id_kelas int not null PRIMARY KEY DEFAULT NEXTVAL('id_kelas'), id_jurusan int not null REFERENCES jurusan (id_jurusan) ON DELETE CASCADE ON UPDATE CASCADE, nama_kelas varchar (20). tabel kelas terhubung dengan tabel siswa, jurusan dan guru |
| Jurusan | id_jurusan | D5 | Tabel kelas | Tabel jurusan terdiri dari id_jurusan int not null PRIMARY KEY DEFAULT NEXTVAL('id_jurusan'), nama_jurusan varchar (50). tabel jurusan terhubung dengan tabel kelas |
| Users | id_user | D4 | Tabel siswa dan guru | Tabel users terdiri dari id_users int not null PRIMARY KEY, NIS int not null REFERENCES siswa (NIS) ON DELETE CASCADE ON UPDATE CASCADE, NIP int not null REFERENCES guru (NIP) ON DELETE CASCADE ON UPDATE CASCADE, NISN int not null, password varchar (50), level varchar (10). tabel users terhubung dengan tabel siswa dan guru. |
| Presensi | id_presensi | D6 | Tabel siswa | Tabel presensi terdiri dari id_presensi int not null PRIMARY KEY DEFAULT NEXTVAL('id_presensi'), NIS int not null REFERENCES siswa (NIS) ON DELETE CASCADE ON UPDATE CASCADE, id_izin int not null REFERENCES izin (id_izin) ON DELETE CASCADE ON UPDATE CASCADE, tanggal date, presensi varchar (20), pulang time, lebih_cepat int, masuk time, terlambat int. tabel presensi terhubung dengan tabel siswa. |
| Izin | id_izin | D7 | Tabel preseni | Tabel izin terdiri dari id_izin int not null PRIMARY KEY DEFAULT NEXTVAL ('id_izin'), alasan text, tanggal_mulai date, tanggal_selesai date, bukti varchar(50), status varchar (10). tabel izin terhubung dengan tabel presensi |
 


#### 2.3 Deskripsi Modul ####

 No |  Nama Modul | Keterangan 
|---|-------------|-----------|
| 1 | Modul Login | Pada Modul Login Terbagi menjadi empat yaitu admin, siswa, guru dan orang tua. | 
| 2 | Modul Siswa | Yang dapat mengelola modul siswa hanya admin saja, pada modul siswa admin dapat mengelola data siswa. |
| 3 | Modul Kelas | Yang dapat mengelola modul kelas hanya admin saja, pada modul kelas admin dapat mengelola data kelas. |
| 4 | Modul Jurusan | Yang dapat mengelola modul jurusan hanya admin saja, pada modul jurusan admin dapat mengelola data jurusan. |
| 5 | Modul User | | Yang dapat mengelola modul user hanya admin saja, pada modul user admin dapat mengelola data user. |
| 6 | Modul Rekap | Pada modul presensi admin dapat mengelola, sedangkan guru, siswa dan orang tua dapat melihat hasil rekap absen berdasarkan levelnya. |
| 7 | Modul Izin | |




## BAB III Deskripsi Perancangan Rinci ##

#### 3.1 Diagram Konteks ####


<img src="http://image.ibb.co/fEUMGc/Konteks_Diagram.png" height="600px">



#### 3.1.1 DFD level 0


<img src="http://image.ibb.co/dyXxpx/DFD_Level_0.png" height="500px">


#### 3.1.1.1 DFD Level 1 Proses Mengelola Data Master


<img src="http://image.ibb.co/c0tRhH/DFD_Level_1_mengelola_data_master.jpg" height="700px"><br><br><br><br>

 
#### 3.1.1.1.1 DFD Level 2 Proses Mengelola Data Kelas


<img src="http://image.ibb.co/mOEMGc/DFD_Level_2_mengelola_data_kelas.jpg" height="500px"><br><br><br><br>


#### 3.1.1.1.2 DFD Level 2 Proses Mengelola Data Siswa


<img src="http://image.ibb.co/jLYFbc/DFD_Level_2_mengelola_data_siswa.jpg" height="600px"><br><br><br><br>


#### 3.1.1.1.3 DFD Level 2 Proses Mengelola Data Guru


<img src="http://image.ibb.co/nGhV9x/DFD_Level_2_mengelola_data_guru.jpg" height="500px"><br><br><br><br>


#### 3.1.1.1.4 DFD Level 2 Proses Mengelola Data Users


<img src="http://image.ibb.co/mn33Ux/DFD_Level_2_mengelola_data_user.jpg" height="500px"><br><br><br><br>


#### 3.1.1.1.5 DFD Level 2 Proses Mengelola Data Jurusan


<img src="http://image.ibb.co/cqwCNH/DFD_Level_2_mengelola_data_jurusan.jpg" height="500px"><br><br><br><br>


#### 3.1.1.2 DFD Level 1 Proses Mengelola Data Presensi dan Izin


![](https://image.ibb.co/cVTRCH/mengelola_data_presensi_dan_izin.jpg)





#### 3.1.1.2.1 DFD Level 2 Mengelola Data Presensi

![](https://image.ibb.co/cX67Kx/mengelola_data_presensi.jpg)



#### 3.1.1.2.2 DFD Level 2 Mengelola Data Izin


![](https://image.ibb.co/n2EzXH/mengelola_data_izin.jpg)




#### 3.2 Deskripsi Rinci Tabel ####

#### 3.2.1 Tabel Siswa

Identifikasi/Nama	: siswa

Deskripsi Isi		: Berisi data-data siswa

Jenis 				: Tabel Referensi

Volume				: 

Laju				: 

Primary Key			: NIS 

<img src="https://image.ibb.co/gA0Ouc/IMG_20180323_WA0005.jpg" height="300px">


#### 3.2.2 Tabel Guru

Identifikasi/Nama	: guru

Deskripsi Isi		: Berisi data-data guru.

Jenis 				: Tabel Referensi

Volume				:

Laju				:

Primary Key			: NIP

<img src="https://image.ibb.co/fQFCnx/IMG_20180323_WA0006.jpg" height="250px">


#### 3.2.3 Tabel Kelas

Identifikasi/Nama	: kelas 

Deskripsi Isi		: Berisi id dan nama kelas.

Jenis 				: Tabel Referensi

Volume				:

Laju				:

Primary Key			: id_kelas

<img src="https://image.ibb.co/ey4iuc/IMG_20180323_WA0004.jpg" height="190px">


#### 3.2.4 Tabel Jurusan

Identifikasi/Nama	: jurusan

Deskripsi Isi		: Berisi id dan nama jurusan.

Jenis 				: Tabel referensi

Volume				:

Laju				:

Primary Key			: id_jurusan

<img src="https://image.ibb.co/cq8nLH/IMG_20180323_WA0000.jpg" height="160px">


#### 3.2.5 Tabel Users

Identifikasi/Nama	: users

Deskripsi Isi		: Berisi id dari berbagai user, password dan level.

Jenis 				: Tabel referensi

Volume				:

Laju				:

Primary Key			: id_users

<img src="https://image.ibb.co/fi7Q7x/IMG_20180323_WA0007.jpg" height="240px">


#### 3.2.6 Tabel Presensi

Identifikasi/Nama	: presensi

Deskripsi Isi		: Berisi pengelolaan data induk.

Jenis 				: Tabel data induk

Volume				:

Laju				:

Primary Key			: id_presensi

<img src="https://image.ibb.co/hBZDHH/presensi.png" height="270px">

#### 3.2.7 Tabel Izin


Identifikasi/Nama	: izin

Deskripsi Isi		: 

Jenis 				: 

Volume				:

Laju				:

Primary Key			: id_izin

<img src="https://image.ibb.co/dgjDHH/izin.png" height="220px">


#### 3.3 Deskripsi Rinci Modul ####

#### 3.3.1 Modul Login


#### 3.3.1.1 Fungsi Modul

 No | Fungsi | Jenis | Tabel Terkait
|---- | -------- | ------- | ---------------- |
| 1 | Login | Form Entry | Tabel siswa, guru, dan users |


#### 3.3.1.2 Spesifikasi Layar Utama

<img src="http://image.ibb.co/nby5pc/login.png" height="350">

#### 3.3.1.3 Spesifikasi Query

 Fungsi  | Query 
| -------- | -------- |
| validate_login | $this->db->select('*'); $this->db->where('admin', $postData['admin']); $this->db->where('password', $postData['password']); $this->db->from('users'); $query=$this->db->get(); if ($query->num_rows() == 0) return false; else return $query->result(); |


#### 3.3.1.4 Spesifikasi Field Data Layar

 Label | Field | Tabel/Query | Validasi | Keterangan
|------|-------|-------------|----------|-----------|


#### 3.3.1.5 Spesifikasi Obyek Pada Layar

 Id Objek | Jenis | Keterangan
| ---------- | --------- | --------------- |
| Username | TextBox | Jika di klik, maka masukkan inputan |
| Password | TextBox | Jika di klik, maka masukkan inputan |
| Login |  Button |  Jika diklik, akan mengaktifkan Proses Algo Login |


#### 3.3.1.6 Spesifikasi Proses / Algoritma



#### 3.3.2 Modul Siswa

#### 3.3.2.1 Fungsi Modul

No | Fungsi | Jenis | Tabel Terkait
|---- | -------- | ------- | ---------------- |
| 1 | Lihat data | Form Report  | Tabel Siswa |
| 2  | Choose File | Form Entry | Tabel Siswa |
| 3 |  Import Data | Form Entry | Tabel Siswa |
| 4 |  Get.pdf  | Form Report | Tabel Siswa |
| 5 | Update | Form Entry | Tabel Siswa |
| 6 | Delete | Form berisi dialog/button saja | Tabel Siswa |


#### 3.3.2.2 Spesifikasi Layar Utama

<img src="https://image.ibb.co/gEdD9c/data_siswa.png" height="350px">

#### 3.3.2.3 Spesifikasi Query

 Fungsi  | Query 
| -------- | -------- |
| Create table |create table siswa  (NIS int not null PRIMARY KEY, id_kelas int not null REFERENCES kelas (id_kelas) ON DELETE CASCADE ON UPDATE CASCADE, nama_lengkap varchar (50), jk varchar (9), ttl varchar (50), email varchar (50), agama varchar (10), alamat text, no_hp varchar (15), nama_ayah varchar (50), nama_ibu varchar (50), pekerjaan_ayah varchar (50), pekerjaan_ibu varchar (50), alamat_ortu text); |
| Create | return $this->db->insert('siswa', $data); |
| Read | return $this->db->get($this->tabel); |
| Update | return $this->db->where(nis, $nis)->update('siswa', $data); |
| Delete | return $this->db->delete('siswa', ['nis'=>$nis]); |



#### 3.3.2.4 Spesifikasi Field Data Layar

 Label | Field | Tabel/Query | Validasi | Keterangan
|------|-------|-------------|----------|-----------|
| ComboBox | Kelas.nama_kelas | 3.2.3 |  | Untuk pilih nama kelas |       
| TextBox | Siswa.nama_lengkap | 3.2.1 |  | Untuk mengisi nama siswa |       
| TextBox | Siswa.NIS | 3.2.1 |  | Untuk mengisi NIS siswa |       
| RadioButton | Siswa.jk | 3.2.1 |  | Untuk mengisi jenis kelamin |       
| TextBox | Siswa.ttl | 3.2.1  |  | Untuk mengisi tempat, tanggal lahir |       
| TextBox | Siswa.agama | 3.2.1  |  | Untuk mengisi agama  siswa |       
| Tinymce | Siswa.alamat | 3.2.1  |  | Untuk mengisi alamat siswa |       
| TextBox | Siswa.no_hp | 3.2.1  |  | Untuk mengisi nomer handphone siswa |       
| TextBox | Siswa.nama_ayah | 3.2.1  |  | Untuk mengisi nama ayah siswa |       
| TextBox | Siswa.nama_ibu | 3.2.1  |  | Untuk mengisi nama ibu siswa |       
| TextBox | Siswa.pekerjaan_ayah | 3.2.1  |  | Untuk mengisi pekerjaan ayah siswa |       
| TextBox | Siswa.pekerjaan_ibu | 3.2.1  |  | Untuk mengisi pekerjaan ibu siswa |       
| Tinymce | Siswa.alamat_ortu | 3.2.1  |  | Untuk mengisi alamat orang tua siswa |       
| Pilih file | Siswa.filesiswa | 3.2.1  |  | Untuk mengisi data siswa sekaligus tanpa harus memasukkan satu-persatu |       


#### 3.3.2.5 Spesifikasi Obyek Pada Layar

Id Objek | Jenis | Keterangan
| ---------- | --------- | --------------- |
| Tambah data  | Button | Jika diklik, akan mengaktifkan Proses Algo Tambah data   |
| Lihat Data | Button | Jika diklik, akan mengaktifkan Proses Algo Lihat Data |
| Import Data | Button | Jika diklik, akan mengaktifkan Proses Algo Import Data |
| Get PDF | Button | Jika diklik, akan mengaktifkan Proses Algo  Get PDF |
| Details | Button | Jika diklik, akan mengaktifkan Proses Algo Details |
| Update | Button | Jika diklik, akan mengaktifkan Proses Algo Update |
| Delete | Button | Jika diklik, akan mengaktifkan Proses Algo  Delete |
| Choose File | Label | Jika diklik, akan mengaktifkan Proses Algo Choose File |
| Pilih / Import Data | Section | Isi teks yang disimpan akan di simpan data tabel siswa |
| Data Siswa | Section | Isi teks yang ditampilkan hasil dari pilih/import data |


#### 3.3.2.6 Spesifikasi Proses / Algoritma

![](http://image.ibb.co/gZV1wc/algo_siswa.png)

#### 3.3.3 Modul Kelas

#### 3.3.3.1 Fungsi Modul

No | Fungsi | Jenis | Tabel Terkait
|---- | -------- | ------- | ---------------- |
| 1 | Tambah Data | Form Entry | Tabel Kelas |
| 2 | Update | Form Entry | Tabel Kelas |
| 3 | Delete | Form berisi dialog/button saja | Tabel Kelas | 


#### 3.3.3.2 Spesifikasi Layar Utama


<img src="https://image.ibb.co/m5JD9c/data_kelas.png" height="350px">

#### 3.3.3.3 Spesifikasi Query

Fungsi  | Query 
| -------- | -------- |
| Create table |create table kelas ( id_kelas int not null PRIMARY KEY DEFAULT NEXTVAL('id_kelas'), id_jurusan int not null REFERENCES jurusan (id_jurusan) ON DELETE CASCADE ON UPDATE CASCADE, nama_kelas varchar (50)); |
| Create | return $this->db->insert($this->tabel, $data); |
| Read | return $this->db->get($this->tabel); |
| Update | return $this->db->where('id_kelas', $id_kelas)->update($this->tabel, $data); |
| Delete | return $this->db->delete($this->tabel, ['id_kelas'=>$id_kelas]); |


#### 3.3.3.4 Spesifikasi Field Data Layar

 Label | Field | Tabel/Query | Validasi | Keterangan
|------|-------|-------------|----------|-----------|
| ComboBox (Tambah Kelas/ Tingkat) | Kelas.nama_kelas | 3.2.3 |  | Untuk menambah tingkat pada data nama_kelas |
| ComboBox (Tambah Kelas/ Jurusan) | Kelas.nama_kelas | 3.2.3 |  | ntuk menambah jurusan pada data nama_kelas |
| ComboBox (Tambah Kelas/ Kategori) | Kelas.nama_kelas | 3.2.3 |  | Untuk menambah kategori  pada data nama_kelas |
| ComboBox (Show) | Kelas.nama_kelas | 3.2.3 |  | Untuk memilih kelas mana yang akan ditampilkan |



#### 3.3.3.5 Spesifikasi Obyek Pada Layar

Id Objek | Jenis | Keterangan
| ---------- | --------- | --------------- |
| Tambah Data | Button | Jika diklik, akan mengaktifkan Proses Algo tambah data dan akan tersimpan pada tabel kelas |
| Update | Button | Jika diklik, akan mengaktifkan Proses Algo update |
| Delete | Button | Jika diklik, akan mengaktifkan Proses Algo delete |


#### 3.3.3.6 Spesifikasi Proses / Algoritma

![](http://image.ibb.co/e2tbUx/algo_kelas.png)

#### 3.3.4 Modul Jurusan

#### 3.3.4.1 Fungsi Modul

No | Fungsi | Jenis | Tabel Terkait
|---- | -------- | ------- | ---------------- |
| 1 | Tambah Data | Form Entry | Tabel Jurusan |
| 2 | Update | Form Entry | Tabel Jurusan |
| 3 | Delete | Form berisi dialog/button saja | Tabel Jurusan | 


#### 3.3.4.2 Spesifikasi Layar Utama

<img src="https://image.ibb.co/nNTKhx/data_jurusan.png" height="350px">

#### 3.3.4.3 Spesifikasi Query

Fungsi  | Query 
| -------- | -------- |
| Create table |create table jurusan ( id_jurusan int not null PRIMARY KEY DEFAULT NEXTVAL('id_jurusan'), nama_jurusan varchar (50)); |
| Create | return $this->db->insert($this->tabel, $data); |
| Read | return $this->db->get($this->tabel); |
| Update | return $this->db->where('id_jurusan', $id_jurusan)->update($this->tabel, $data); |
| Delete | return $this->db->delete($this->tabel, ['id_jurusan'=>$id_jurusan]); |


#### 3.3.4.4 Spesifikasi Field Data Layar

 Label | Field | Tabel/Query | Validasi | Keterangan
|------|-------|-------------|----------|-----------|
| TextBox ( Tambah data jurusan ) | Jurusan.nama_jurusan | 3.2.4 |  | Untuk menambah nama jurusan |
| ComboBox (Show) | Jurusan.nama_jurusan | 3.2.4 |  | Untuk memilih jurusan mana yang akan ditampilkan |


#### 3.3.4.5 Spesifikasi Obyek Pada Layar

Id Objek | Jenis | Keterangan
| ---------- | --------- | --------------- |
| Tambah Data | Button | Jika diklik, akan mengaktifkan Proses Algo tambah data dan akan tersimpan pada tabel jurusan | 
| Update | Button | Jika diklik, akan mengaktifkan Proses Algo update |
| Delete | Button | Jika diklik, akan mengaktifkan Proses Algo delete |


#### 3.3.4.6 Spesifikasi Proses / Algoritma

![](http://image.ibb.co/cNLO9x/algo_jurusan.png)

#### 3.3.5 Modul User

#### 3.3.5.1 Fungsi Modul

##### 3.3.5.1 Users Siswa

No | Fungsi | Jenis | Tabel Terkait
|---- | -------- | ------- | ---------------- |
| 1 | Tambah Data | Form Entry | Tabel  | Tabel Siswa dan Users |
| 2 | Update | Form Entry | Tabel  | Tabel Siswa dan Users |
| 3 | Delete | Form berisi dialog/button saja | Tabel  | Tabel Siswa dan Users |


##### 3.3.5.1 Users Guru

No | Fungsi | Jenis | Tabel Terkait
|---- | -------- | ------- | ---------------- |
| 1 | Tambah Data | Form Entry | Tabel  | Tabel Guru dan Users |
| 2 | Update | Form Entry | Tabel  | Tabel Guru dan Users |
| 3 | Delete | Form berisi dialog/button saja | Tabel  |  Tabel Guru dan Users |

##### 3.3.5.1 Users Ortu

No | Fungsi | Jenis | Tabel Terkait
|---- | -------- | ------- | ---------------- |
| 1 | Tambah Data | Form Entry | Tabel  | Tabel Siswa dan Users |
| 2 | Update | Form Entry | Tabel  | Tabel Siswa dan Users |
| 3 | Delete | Form berisi dialog/button saja | Tabel  | Tabel Siswa dan Users |


#### 3.3.5.2 Spesifikasi Layar Utama

<img src="https://image.ibb.co/eyvh2x/data_user_siswa.png" height="350">
<img src="https://image.ibb.co/j5w0pc/data_user_guru.png" height="350">
<img src="http://image.ibb.co/bGJern/user_ortu.png" height="350">


#### 3.3.5.3 Spesifikasi Query

Fungsi  | Query 
| -------- | -------- |
| Create table | create table users ( id_users int not null PRIMARY KEY DEFAULT NEXTVAL ('id_users'), NIS int REFERENCES siswa (NIS) ON DELETE CASCADE ON UPDATE CASCADE, NIP int REFERENCES guru (NIP) ON DELETE CASCADE ON UPDATE CASCADE, NISN int, admin varchar (50), password varchar (50), level varchar (10) ); |
| Create return $this->db->insert($this->tabel, $data);|
| Readadmin | return $this->db->get_where($this->tabel, 'level = admin'); |
| Read | return $this->db->get($this->tabel); |
| Readortu | $levelortu = "ortu"; return $this->db->get($this->v_ortu,'level', $levelortu); |
| Readguru | $levelguru = "guru"; return $this->db->get($this->v_guru,'level', $levelguru); |
| Readsiswa | $levelsiswa = "siswa"; return $this->db->get_where($this->v_siswa,'nis != '); |
| Updateadmin | return $this->db->where('id_users', $id_users)->update($this->tabel, $data); 



#### 3.3.5.4 Spesifikasi Field Data Layar

 Label | Field | Tabel/Query | Validasi | Keterangan
|------|-------|-------------|----------|-----------|
| TextBox ( Tambah data / NISN  ) | Users.NISN | 3.2.5 |  | Untuk menambah NISN pada table users |
| TextBox ( Tambah data / NIS  ) | Users.NIS | 3.2.5 |  | Untuk menambah NIS pada table users |
| TextBox ( Tambah data / Password ) | Users.password | 3.2.5 |  | Untuk menambah password  pada table users |
| ComboBox (Show) | Users.datausers | 3.2.5 |  | Untuk memilih users mana yang akan ditampilkan |

Label | Field | Tabel / Query | Validasi | Keterangan 
| ------- | ------ | ------------------- | ---------- | --------------- |
| TextBox ( Tambah data / NIP ) | Users.NIP | 3.2.5 |  | Untuk menambah NIP pada table users |
| TextBox ( Tambah data / password ) | Users.password | 3.2.5 |  | Untuk menambah password pada table users |
| ComboBox (Show) | Users.datausers | 3.2.5 |  | Untuk memilih users mana yang akan ditampilkan |


#### 3.3.5.5 Spesifikasi Obyek Pada Layar

 Id Objek | Jenis | Keterangan
| ---------- | --------- | --------------- |
| Tambah Data | Button | Jika diklik, akan mengaktifkan Proses Algo tambah data dan akan tersimpan pada tabel users | 
| Update | Button | Jika diklik, akan mengaktifkan Proses Algo update |
| Delete | Button | Jika diklik, akan mengaktifkan Proses Algo delete |
| Details | Button | jika diklik, akan menampilkan details data |


#### 3.3.5.6 Spesifikasi Proses / Algoritma

##### 3.3.5.6.1 Users Siswa

![](http://image.ibb.co/fCwKhH/algo_user_siswa.png)

##### 3.3.5.6.2 Users Guru

![](http://image.ibb.co/e77QNH/algo_user_guru.png)

##### 3.3.5.6.3 Users Ortu

![](http://image.ibb.co/gbrVpx/algo_user_ortu.png)


#### 3.3.6 Modul Rekap

#### 3.3.6.1 Fungsi Modul

No | Fungsi | Jenis | Tabel Terkait
|---- | -------- | ------- | ---------------- |

#### 3.3.6.2 Spesifikasi Layar Utama

<img src="https://image.ibb.co/dEyNwJ/rekap_absen.png" height="350">

#### 3.3.6.3 Spesifikasi Query

Fungsi  | Query 
| -------- | -------- |
| Create table | create table presensi (id_presensi int not null PRIMARY KEY DEFAULT NEXTVAL('id_presensi'), id_izin int REFERENCES izin (id_izin) ON DELETE CASCADE ON UPDATE CASCADE, NIS int not null REFERENCES siswa (NIS) ON DELETE CASCADE ON UPDATE CASCADE, tanggal date, presensi varchar (20), pulang time, lebih_cepat int, masuk time, terlambat int); |
| Create |  |
| Read |  |
| Update |  |
| Delete |  |
 

#### 3.3.6.4 Spesifikasi Field Data Layar

 Label | Field | Tabel/Query | Validasi | Keterangan
|------|-------|-------------|----------|-----------|

#### 3.3.6.5 Spesifikasi Obyek Pada Layar

![](https://image.ibb.co/i2YwEc/obyek_presensi.png)

#### 3.3.6.6 Spesifikasi Proses / Algoritma



#### 3.3.7 Modul Izin


#### 3.3.7.1 Fungsi Modul

No | Fungsi | Jenis | Tabel Terkait
|---- | -------- | ------- | ---------------- |

#### 3.3.7.2 Spesifikasi Layar Utama

<img src=https://image.ibb.co/cMVD3y/izin_siswa.png" height="350">

#### 3.3.7.3 Spesifikasi Query

  Fungsi  | Query 
| -------- | -------- |
| Create table |  |
| Create |  |
| Read |  |
| Update |  |
| Delete |  |

#### 3.3.7.4 Spesifikasi Field Data Layar

 Label | Field | Tabel/Query | Validasi | Keterangan
|------|-------|-------------|----------|-----------|

#### 3.3.7.5 Spesifikasi Obyek Pada Layar



#### 3.3.7.6 Spesifikasi Proses / Algoritma

#### 3.4 Matriks Kerunutan  ####

 ID Kebutuhan | Modul | Keterangan 
|-------------|-------|-----------|
| SRS-01 | 01 |  |
| SRS-02 | 02 |  |
| SRS-03 | 03 |  |
| SRS-04 | 04 |  |
| SRS-05 | 05 |  |
| SRS-06 | 06 |  |
| SRS-07 | 07 |  |



