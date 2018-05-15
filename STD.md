<html>
<div align="center"><h1> Software Testing Document</h1></div>

<p align="center"><b>Version 1.0 </b><br>
<p align="center">14 Mei 2018</b>
<p align="center">
<img src="https://image.ibb.co/nOcmsH/logo.jpg"/>
</p>

<br><h2 align="center"><b> M-AFI</b></h2><br>

<p align="center">Kelompok 6 <br>
 Diyah Ayu Amaliyah 	(1603067)<br>
 Kikis Maulana			(1603074)<br>
 Noufal Ibrahim			(1603080)<br>
 Triyani Ramadhani		(1603086)<br>
 Widiana Silvi			(1603088)<br><br><br>

<h2 align="center">Jurusan D3 Teknik Informatika</h2>
<h2 align="center">Politeknik Negeri Indramayu
</h2>
</html>

## BAB I Pendahuluan ##

#### 1.1 Tujuan Pembuatan Dokumen ####

Dokumen ini digunakan sebagai panduan untuk melakukan pengujian terhadap perangkat lunak Mobile-Attandace Fingerprint. Dokumen ini dipakai untuk melihat kemampuan dari program yang telah dirancang agar sesuai dengan keinginan dari penggguna. Pembuatan dokumen ini ditujukan untuk menguji perangkat lunak Mobile-Attandace Fingerprint yang merupakan bagian dari mata kuliah Rekayasa Perangkat Lunak.

#### 1.2 Deskripsi Umum Sistem ####

Perangkat lunak yang akan diuji “Mobile-Attandace Fingerprint’. Perangkat lunak ini adalah perangkat lunak yang digunakan untuk absensi siswa melalui fingerprint atau sidik jari dan presensi tersebut dapat dilihat oleh orang tua melalui aplikasi mobile atau perangkat bergerak. System ini diimplementasikan melalui interaksi di media antara sesame pengguna dengan sistem .

#### 1.3 Deskripsi Dokumen ####

Dalam dokumen ini berisi 3 bagian utama yaitu Pendahuluan, Identifikasi dan Rencana Pengujian, Deskripsi dan Uji Hasil.

#### 1.4 Definisi dan Singkatan ####

•	SKPL adalah Spesifikasi Kebutuhan Perangkat Lunak, atau dalam bahasa inggrisnya sering  juga disebut sebagai Software Requirements Spesification (SRS), dan merupakan spesifikasi dari perangkat lunak yang akan dikembangkan

•	SKPL-M-AFI.K- xxxx adalah kode yang digunakan untuk merepresentasikan kebutuhan (requirement) pada M-AFI dengan M-AFI merupakan kode perangkat lunak, M-AFI.K adalah kode fase, dan xxxx adalah digit/nomor kebutuhan (requirement).

•	DFD adalah Data Flow Diagram, diagram dan notasi yang digunakan untuk menunjukkan aliran data pada perangkat lunak.
•	ERD adalah Entity Relationship Diagram, diagram dan notai yang digunakan untuk mempresentasikan struktur data statis pada perangkat lunak.

•	DPPL-M-AFI.K-yyyy kode yang merepresentasikan kasus uji perangkat lunak pada Mobile Attandace Fingerprint dengan M-AFI adalah kode produk, DPPL adalah kode fase dan yyyy merupakan kasus uji relative terhadap nomor SKPL.


#### 1.5 Dokumen Referensi ####

•	Ernita H. GL03. Dokumen Uji Perangkat Lunak (DUPL) SDS. Bogor. 

•	Sistem Pentiketan Elektronik Konser.2013. Spesifikasi Kebutuhan Perangkat Lunak (SKPL)SPEK. Bogor.

•	Sistem Pentiketan Elektronik Konser.2013. Dokumen Perancangan Perangkat Lunak (DPPL)SPEK. Bogor.



## BAB II Lingkungan Pengujian Perangkat Lunak ##

#### 2.1 Perangkat Lunak Pengujian  ####

Perangkat lunak ini (SPP) diujikan dengan beberapa perangkat lunak lain, yaitu :

•	Sistem Operasi : Wndows 10

•	Bahasa Pemrograman : PHP dan Java

•	Database : XAMPP


#### 2.2 Perangkat Keras Pengujian ####

Perangkat keras yang diperlukan untuk menguji aplikasi M-AFI ini adalah Fingerprint dan satu atau dua computer atau laptop dengan minimum spesifikasi :

•	Processor : Intel® Core™ i3-5005U (2.0 GHz, 3MB L3 Cache)

•	Memory : 4GB DDR3 

•	Hardisk 500 GB


#### 2.3 Sumber Daya Manusia  ####

Persyaratan sumber daya manusia yang akan terlibat dalam proses pengujian perangkat lunak ini adalah :

•	Memahasi konsep pemrograman berorientasi objek dalam bahasa pemrograman PHP dan Java.

•	Memahami proses pengujian perangkat lunak berorietasi objek.

•	Memahami konsep pemrograman database XAMPP.

•	Memahami pengoperasian alat fingerprint.

•	Memahami hubungan antar perangkat lunak.


#### 2.4 Prosedur Umum Pengujian ####

##### 2.4.1 Pengenalan dan Latihan  #####

Penguji aplikasi ini hanya diberikan latihan tentang SQL, dan pengenalan lebih lanjut tentang Android Studio dan Java. Pada dasarnya penguji telah memiliki pengetahuan tentang hal yang disebutkan sebelumnya tetapi latihan diberikan hanya bersifat penyegaran kembali.

##### 2.4.2 Persiapan Awal #####

##### 2.4.2.1 Persiapan Prosedural  #####

Pengujian ini dilakukan diluar lingkungan kampus. Dimana pengujian ini dilakukan oleh tim penguji yang telah ditenntukan oleh Dosen mata kuliah Rekayasa Perangkat Lunak (RPL). Alata yang digunakan adalah 2 buah laptop dengan software yang telah di instalisasi, 1 buah handphone dan 1 buah fingerprint.

##### 2.4.2.2 Persiapan Perangkat Keras #####

Perangkat keras yang perlu dipersiapkan adalah :

•	2 Buah Laptop dengan minimum spesifikasi (Processor : Intel® Core™ i3-5005U (2.0 GHz, 3MB L3 Cache) , Memory : 4GB DDR3 dan Hardisk 500 GB ).

•	1 Buah handphone

•	1 buah alat Fingerprint


##### 2.4.2.3 Persiapan Perangkat Lunak #####

Persiapan yang harus dilakukan untuk menyiapkan perangkat lunak untuk diuji dilingkungan system operasi Microsoft windows 10 adalah sebagai berikut :

•	Persiapan system operasi Microsoft Windows

•	Perangkat lunak yang akan di uji di copy kesebuah direktori, misalnya C:XAMPP\htdocs

•	Browser Google Chrome / Mozilla firefox / Opera Browser

•	Database diimport ke PhpMyAdmin didatabase mafi

•	Sublime Text untuk melihat source code

•	Android studio untuk membuat perangkat lunak di mobile

•	Java JDK, SDK dan JRE untuk menunjang aplikasi Android Studio.


##### 2.4.3 Pelaksanaan #####

Pelaksanaan pengujian dilakukan dengan mengeksekusi perangkat lunak M-AFI dengan mengikuti scenario tertentu yang dibuat berdasarkan scenario yang terdapat pada dokuman SKPL-M-AFI.

##### 2.4.4 Pelaporan Hasil #####

Dokumen hasil uji dari aplikkasi ini akan diberikan kepada asisten praktikum dan dievaluasi oleh asisten dan kelompok lain yang bertindak sebagai klien dari kelompok kami. Sehingga aplikasi mendapatkan umpan balik dalam pengembangan perangkat lunak ini selanjutnya.


## BAB III Identifikasi dan Rencana Pengujian ##

Tabel 1 Identifikasi dan Rencana Pengujian di Web

Tabel 2 Identifikasi dan Rencana Pengujian di Mobile


## BAB V Deskripsi dan Hasil Uji

a. Deskripsi dan Hasil Uji di web

b. Deskripsi dan Hasil Uji di mobile



