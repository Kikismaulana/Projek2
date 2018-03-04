# Software Requirement Specification #
Version -
04 Maret 2018

![](https://image.ibb.co/bJCF0x/POLINDRA.png)

M-AFI

Diyah Ayu Amaliyah

Kikis Maulana

Noufal Ibrahim

Widiana Silvi

Triyani Ramadhani

Jurusan D3 Teknik Informatika

Politeknik Negeri Indramayu


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

M-AFI (Mobile-Attendance Fingerprint) adalah aplikasi project 2 yang sedang kita garap saat ini, aplikasi ini diterapkan untuk absensi siswa dan guru menggunakan fingerprint. Fingerprint adalah sebuah metode biometrik yang mana pengaplikasiannya menggunakan sidik jari.
Aplikasi ini memiliki 2 user, yaitu user admin dan user monitoring. User admin mempunyai hak akses untuk mengelola data absensi dan mengelola user monitoring melalui web server. User monitoring adalah user pengguna aplikasi yang memonitoring report presensi dengan menggunakan aplikasi mobile melalui smartphone, dimana user monitoring tersebut adalah guru dan orang tua siswa. User monitoring guru dapat melihat report presensi nya sendiri melalui smartphone, dan user monitoring orang tua  juga mereka dapat memonitoring report presensi anaknya (siswa) melalui smartphone.
Aplikasi ini juga bisa mengirimkan izin siswa melalui user monitoring orang tua siswa melalui smartphone, orang tua siswa bisa mengirimkan surat izin atau sakit dengan cara mengupload foto surat izin yang sebelumnya sudah dibuat tulis tangan oleh orang tua, dan selanjutnya surat itu difoto dan di upload melalui smartphone, yang nantinya dari sisi user admin akan menerima notifikasi dari web server dan selanjutnya akan di update keterangan presensi siswa tersebut oleh admin.

B. Perbedaan system M-AFI dengan kompetitor

No | Nama Aplikasi | Keunggulan | Kekurangan
-- |  ------------ | ---------- | ----------
1 | Absensi siswa realtime dengan sms gateway | Orang tua siswa dapat memantau kehadiran anaknya melalui sms gateway | Admin banyak mengeluarkan uang untuk membeli pulsa karena menggunakan sms gateway
2 | Sistem absensi fingerprint untuk dosen di POLINDRA | Cepat dalam  kegiatan absensi karena menggunakan sidik jari | Dosen tidak bisa melihat report absensi nya sendiri karna data absensi hanya disimpan di mesin fingerprint. Tidak bisa menjamin keakuratan sidik jari karena bisa saja kemungkinan sewaktu-waktu data sidik jari tertukar
3 | M-AFI (Mobile-Attendance Fingerprint | User siswa dan guru lebih cepat dalam kegiatan absensi karena menggunakan sidik jari. User monitoring (orang tua siswa dan guru) juga bisa melihat/memonitoring report presensi di aplikasi mobile secara realtime | Tidak bisa menjamin keakuratan sidik jari karena bisa saja kemungkinan sewaktu-waktu data sidik jari tertukar


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
* Izin siswa, dapat mengupload foto surat izin/sakit siswa melalui mobile yang dilakukan orang tua siswa dan guru


	2.1.8. Kebutuhan adaptasi


2.2. Spesifikasi kebutuhan fungsional

	2.2.1 Siswa

![](https://image.ibb.co/bGY4L7/Siswausescases.jpg)

Deskripsi singkat :

Siswa akan melakukan absensi melalui fingerprint.

Langkah-langkah :

* Siswa meletakan sidik jari ke device fingerprint.


	2.2.2. Orang tua siswa

![](https://image.ibb.co/mTa6YS/Orangtuausescases.jpg)

Login/Logout uses cases

![](https://image.ibb.co/jwajL7/os1.jpg)

Deskripsi singkat :

Orang tua siswa dapat memonitoring anaknya dan dapat mengirim izin ketika anaknya tidak masuk sekolah.

Langkah-langkah :

* orang tua dapat login melalui aplikasi M-AFI.
* ketika orang tua sudah login, maka orang tua dapat melihat presensi anaknya serta dapat mendownload rekap absensi.
* orang tua dapat mengirm izin ketika anaknya tidak masuk sekolah.


Monitoring Presensi

![](https://image.ibb.co/kr84L7/os2.jpg)

Deskripsi singkat :

diisi

Langkah-langkah :

diisi


Rekap Presensi

![](https://image.ibb.co/bDOFSn/os3.jpg)

Deskripsi singkat :

diisi

Langkah-langkah :

diisi


Kirim Izin

![](https://image.ibb.co/jUq6YS/os4.jpg)

Deskripsi singkat :

diisi

Langkah-langkah :

diisi


Ganti Password

![](https://image.ibb.co/bGnmYS/os5.jpg)

Deskripsi singkat :

diisi

Langkah-langkah :

diisi


	2.2.3. Admin Uses Cases

![](https://image.ibb.co/j0CW07/Adminusescases.jpg)

Create Data Kelas

![](https://image.ibb.co/iquTf7/A1.jpg)

Deskripsi singkat :

diisi

Langkah-langkah :

diisi



Create Data Siswa

![](https://image.ibb.co/gOQenn/A2.jpg)

Update Presensi Izin

![](https://image.ibb.co/go0enn/A3.jpg)

Deskripsi singkat :

diisi

Langkah-langkah :

diisi



Hapus Data Kelas

![](https://image.ibb.co/cEFZL7/A4.jpg)

Deskripsi singkat :

diisi

Langkah-langkah :

diisi


Hapus Data Siswa

![](https://image.ibb.co/h1Jof7/A5.jpg)

Deskripsi singkat :

diisi

Langkah-langkah :

diisi


Rekap Presensi

![](https://image.ibb.co/nnZiDS/A6.jpg)

Deskripsi singkat :

diisi

Langkah-langkah :

diisi


2.3. Spesifikasi kebutuhan non-fungsional

- Design UI/UX layout mobile
- Design UI/UX layout web server

2.4. Karakteristik pengguna

karakteristik pengguna dari aplikasi M-AFI ini adalah semua yang ingin menggunakan absensi diantaranya siswa dan orang tua yang membedakan adalah pengguna yang berinteraksi dengan sistem dihubungkan dengan hak akses dan 
autentifikasi sesuai aturan yang terdapat pada absensi.

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