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
Aplikasi ini memiliki 2 user, yaitu user admin dan user monitoring. User admin mempunyai hak akses untuk mengelola data absensi dan mengelola user monitoring melalui web server. User monitoring adalah user pengguna aplikasi yang memonitoring report presensi dengan menggunakan aplikasi mobile melalui smartphone, dimana user monitoring tersebut adalah orang tua siswa. User monitoring user monitoring orang tua mereka dapat memonitoring report presensi anaknya (siswa) melalui smartphone.
Aplikasi ini juga bisa mengirimkan izin siswa melalui user monitoring orang tua siswa melalui smartphone, orang tua siswa bisa mengirimkan surat izin atau sakit dengan cara mengupload foto surat izin yang sebelumnya sudah dibuat tulis tangan oleh orang tua, dan selanjutnya surat itu difoto dan di upload melalui smartphone, yang nantinya dari sisi user admin akan menerima notifikasi dari web server dan selanjutnya akan di update keterangan presensi siswa tersebut oleh admin.

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

	2.2.1 Siswa

![](https://image.ibb.co/bGY4L7/Siswausescases.jpg)

Deskripsi singkat :

Siswa akan melakukan absensi melalui fingerprint.

Langkah-langkah :

* Siswa meletakan sidik jari ke device fingerprint.
* sistem akan merecord data siswa yang sudah absen.


	2.2.2. Orang tua siswa

![](https://image.ibb.co/mTa6YS/Orangtuausescases.jpg)

Login/Logout uses cases

![](https://image.ibb.co/jwajL7/os1.jpg)

Deskripsi singkat :

Orang tua siswa dapat login pada aplikasi M-AFI.

Langkah-langkah :

* login aplikasi M-AFI.
* sistem menampilkan dashboard presensi.
* mendwonload rekap absensi
* sistem menampilkan rekap yang sudah didownload.

Monitoring Presensi

![](https://image.ibb.co/kr84L7/os2.jpg)

Deskripsi singkat :

Orang tua dapat memonitoring anaknya di aplikais M-AFI.

Langkah-langkah :

* login aplikasi M-AFI 
* sistem menampilkan dashboard presensi
* orang tua dapat memonitoring presensi


![](https://image.ibb.co/bDOFSn/os3.jpg)

Deskripsi singkat :

Orang tua siswa dapat melihat rekap presensi anaknya melalui smartphone android dengan cara mendownload rekap presensi

Langkah-langkah :

-Login sebagai orang tua siswa melalui smartphone android
-Klik slide navbar pada aplikasi
-Lalu ada "Rekap presensi" dan kemudian download 


Kirim Izin

![](https://image.ibb.co/jUq6YS/os4.jpg)

Deskripsi singkat :

orang tua dapat mengirim izin pada aplikasi M-AFI.


Langkah-langkah :

* orang tua terlebih dulu menekan tombol izin pada tombol izin pada dasboard.
* Kemudian orang tua dapat mengirimkan izin siswa dan mengisi keterangannya.


Ganti Password

![](https://image.ibb.co/bGnmYS/os5.jpg)

Deskripsi singkat :

Orang tua dapat mengganti password pada aplikasi M-AFI.

Langkah-langkah :

* Orang tua dapat klik dropdown user kemudian orang tua dapat mengganti password tersebut.


	2.2.3. Admin Uses Cases

![](https://image.ibb.co/j0CW07/Adminusescases.jpg)

Create Data Kelas

![](https://image.ibb.co/iquTf7/A1.jpg)

Deskripsi singkat :

Admin dapat menambahkan kelas dan jurusan pada web server

Langkah-langkah :

- Masuk sebagai admin
- Masuk ke manu Data Kelas
- Klik tambah data
- Lalu pilih jurusan, tingkatan, kategori
- Submit



Create Data Siswa

![](https://image.ibb.co/gOQenn/A2.jpg)

Deskripsi singkat :

Mengisi data siswa pada tiap-tiap kelas dengan menggunakan button/module untuk mengeksport data dari file CSV.

Langkah-langkah :

- Masuk sebagai admin
- Klik menu data siswa
- klik button module untuk mencari file CSV yang akan di eksport
- submit

Update Presensi Izin

![](https://image.ibb.co/go0enn/A3.jpg)

Deskripsi singkat :

Admin dapat mengupdate keterangan presensi izin siswa melalui web server

Langkah-langkah :

- Masuk sebagai admin melalui web server
- Klik menu Rekap Absensi
- Pilih Kelas, pilih tahun, pilih bulan, klik view untuk melihat presensi
- Lalu update



Hapus Data Kelas

![](https://image.ibb.co/cEFZL7/A4.jpg)

Deskripsi singkat :

Admin dapat menghapus data yang ada dikelas.

Langkah-langkah :

* Sistem menampilkan menu-menu admin
* Admin memilih menu data kelas. *Sistem menampilkan data kelas serta button delete dan hapus.
*Admin menekan tombol hapus pada kelas yg ingin di hapus.
*Sistem secara otomatis akan menghapus data yang dipilih oleh admin.


Hapus Data Siswa

![](https://image.ibb.co/h1Jof7/A5.jpg)

Deskripsi singkat :

Admin Dapat menghapus data Siswa.

Langkah-langkah :

* sistem menampilkan isi data siswa
* admin mengklik button delete data siswa
* sistem secara otomatis akan menghapus data yang dipilih admin.

Rekap Presensi

![](https://image.ibb.co/nnZiDS/A6.jpg)

Deskripsi singkat :

Admin Dapat melihat rekap Presensi.

Langkah-langkah :

* Sistmen menampilkan rekap Presensi
* Admin dapat melihat rekap presensi



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

## Requiremet Spesification ##


3.1. External Interface Requirements

Kebutuhan akan pengelolaan/management presensi pada suatu instansi sangatlah penting dengan menimbang beberapa aspek yang saling mendukung, pada hal ini tertuju pada sekolah SMK Negeri Indramayu dimana penerapan management/pengelolaan presensi siswa-siswi sudah semestinya menggunakan komputerisasi untuk dapat menghindari terjadinya human error pada pengerjaannya, Staf TU pada bidang kesiswaan sangatlah terbantu untuk meningkatkan kedisplinan siswa-siswinya dikarenakan fitur dari aplikasi M-AFI ini menunjang kedua orang tua siswa untuk dapat memonitoring siswa/siswinya pada saat berada pada lingkungan sekolah, dengan ini faktor kedua orang tua siswa terhadap kediplinan siswa/siswnya pada lingkungan sekolah sangatlah membantu bidang kesiswaan.

Selain hal demikian, management/pengelolaan presensi yang terkomputerisasi dapat membantu guru-guru di sekolah tersebut sehingga sistem presensi yang dulu menggunakan buku absensi sekarang bisa di tinggalkan dengan adanya sistem presensi menggunakan fingerprint ini.


3.2. Functional Requirements

3.2.1. Uses Cases Siswa

3.2.1.1. Input presensi

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Input presensi |
| XRef |  |
| Trigger | Siswa-siswi akan melakukan presensi saat masuk dan pulang melalui device fingerprint |
| Precondition | Siswa-siswi hanya dapat melakukan 2 kali presensi melalui fingerprint yaitu saat masuk dan pulang |
| Basic Path | fingerprint akan mengirimkan data presensi ke database melalui kabel UTP yang terkoneksi dengna pc admin |
| Alternative Paths | jika pada proses presensi terdapat permasalahan siswa-siswi dapat menghubungi admin |
| Postcondition | Presensi masuk ke database pada kondisi masuk dan pulang dengan waktu sesuai user menekan |
| Exception Paths |  |
| Other |  |


3.2.2. Uses Cases Orang tua siswa

3.2.2.1. Login/Logout

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Login/logout |
| XRef |  |
| Trigger | Orang tua siswa melakukan login untuk masuk pada app M-AFI di perangkat mobile dan juga logout untuk keluarnya |
| Precondition | Orang tua siswa harus mempunyai app M-AFI pada smartphone dengan minimum OS Lolipop |
| Basic Path | Orang tua siswa membuka App M-AFI pada smartphone, mengisi form login yang telah disediakan dengan memasukkan username yaitu NISN dan password |
| Alternative Paths | Jika saat mengisi form login salah maka segera hubungi admin/klik lupa password |
| Postcondition | Setelah melakukan proses login orang tua siswa di suguhkan dengan tampilan monitoring presensi anaknya |
| Exception Paths |  |
| Other |  |


3.2.2.2. Monitoring Presensi

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


3.2.2.3. Rekap Presensi

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


3.2.2.5. Ganti Password

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



3.2.3. Uses Cases Admin

3.2.3.1. Create Data Kelas

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Create data kelas |
| XRef |  |
| Trigger | Create data kelas berguna untuk penampung siswa agar setiap data siswa yang diinputkan memiliki kelas sesuai dengan yang semestinya |
| Precondition | Masuk pada webserver sebagai admin |
| Basic Path | Menekan menu data kelas, klik button tambah kelas kemudian mengisi form yang telah disediakan pada webserver |
| Alternative Paths | klik menu data kelas |
| Postcondition | Data kelas akan masuk pada database |
| Exception Paths |  |
| Other |  |


3.2.3.2. Create Data Siswa

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Create data siswa |
| XRef |  |
| Trigger | Create data siswa berguna sebagai fungsi utama pada sistem presensi menggunakan fingerprint karena data yang akan diolah adalah data siswa-siswinya dengan menggunakan alat bantu fingerprint yang sebagai perantara untuk menginputkan pada database |
| Precondition | Masuk pada webserver sebagai admin |
| Basic Path | Admin memilih menu data siswa, admin dapat menekan tombol brows untuk data siswa dengan format CSV atau dapat pula menambahkan data siswa dengan satu-persatu melalui button tambah |
| Alternative Paths | Tambah data melalui database dengan mengeksport file CSV |
| Postcondition | Data siswa akan bertambah sesuai dengan yang di tambahkan admin |
| Exception Paths |  |
| Other |  |


3.2.3.3. Update Presensi Izin

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Update presensi izin |
| XRef |  |
| Trigger | Update perizinan berguna untuk mengubah data presensi siswa-siswi yang orang tuanya telah mengirimkan perizinan melalui app M-AFI |
| Precondition | Masuk pada webserver sebagai admin |
| Basic Path | Pada dashboard admin akan ada notifikasi, admin membuka notifikasi untuk memferifikasi data perizinan yang masuk, admin mengubah data presensi siswa pada menu rekap presensi, admin memilih kelas, tahun dan bulan kemudian mengisi form NISN dan form presensi untuk mengupdatenya |
| Alternative Paths | Admin dapat mengupdate malalui langsung pada databasenya |
| Postcondition | Data siswa akan terupdate dengan hari yang dikirimkan oleh orang tua siswa |
| Exception Paths |  |
| Other |  |


3.2.3.4. Hapus Data Kelas

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Hapus data kelas |
| XRef |  |
| Trigger | Hapus data kelas dapat dingunakan untuk kelas yang telah di hilangkan dari sekolah tersebut |
| Precondition | Masuk pada webserver sebagai admin |
| Basic Path | Admin menekan menu data kelas, admin mencari kelas yang ingin di hapus, admin menekan tombol button pada kelas yang ingin dihapus |
| Alternative Paths | admin dapat menghapus data kelas langsung pada databasenya |
| Postcondition | Data kelas akan terhapus sesuai dengan data yang dihapus oleh admin |
| Exception Paths |  |
| Other |  |


3.2.3.5. Hapus Data Siswa

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Hapus data siswa |
| XRef |  |
| Trigger | Hapus data siswa berguna untuk menghapus data siswa-siswi yang telah keluar dari sekolah tersebut |
| Precondition | Masuk pada webserver sebagai admin |
| Basic Path | Admin mesuk pada menu data siswa, admin mencari data siswa dengan mengetikkan NISN nya, admin menekan tombol delete pada siswa tersebut |
| Alternative Paths | admin dapat menghapus data siswa langsung pada databasenya |
| Postcondition | Data siswa akan terhapus sesuai dengan data yang dihapus oleh admin |
| Exception Paths |  |
| Other |  |


3.2.3.6. Rekap Presensi

| Item | Descriptions |
| ------ | ------ |
| Use Case Name | Rekap presensi |
| XRef |  |
| Trigger | Rekap presensi berguna untuk admin melihat keseluruhan rekap presensi yang dapat berguna untuk management presensi pada sekolah tersebut yang telah terkomputerisasi pada aplikasi ini |
| Precondition | admin dapat menghapus data kelas langsung pada databasenya |
| Basic Path | Admin memilih menu rekap presensi pada webserver, admin memilih kelas dan semester pada halaman rekap presensi |
| Alternative Paths | Admin dapat langsung mengambil keseluruhan data presensi dari aplikasi tersebut |
| Postcondition | Rekap keseluruhan presensi akan di tampilkan dan juga dapat di eksport menjadi file excel |
| Exception Paths |  |
| Other |  |



3.3. Detailed Non-Functional Requirements

3.3.1 Logical Structure data

![](https://image.ibb.co/dR8riS/ERD.jpg)


Entitas data User

Data Item | Type | Deskripsi | 
| ------ | ------ | ------ |
| IdUser | Int | NISN Siswa untuk username orang tua siswa login M-AFI App |
| Email | varchar | email untuk bantuan lupa password |
| Password | varchar | Password untuk login orang tua pada M-AFI App |
| NamaLengkap | Varchar |  |
| Level | Varchar | Pembedaan hak akses admin dan orang tua siswa |
| Alamat | Text | Alamat siswa |
| JK | Varchar | Jenis kelamin siswa |
| NoHp | Varchar | Nomor hp siswa |
| NamaAyah | Varchar | Nama ayah siswa |
| NamaIbu | Varchar | Nama ibu siswa |


Entitas data Kelas

Data Item | Type | Deskripsi | 
| ------ | ------ | ------ |
| IdKelas | int |  |
| IdUser | int |  |
| NamaKelas | Varchar |  |


Entitas data Jurusan

Data Item | Type | Deskripsi | 
| ------ | ------ | ------ |
| IdJurusan | int |  |
| IdKelas | int |  |
| NamaJurusan | Varchar |  |


Entitas data Presensi

Data Item | Type | Deskripsi | 
| ------ | ------ | ------ |
| IdPresensi | int |  |
| IdUser | int |  |
| IdMasuk | int |  |
| IdPulang | int |  |
| Tanggal | date |  |
| Keterangan | text | Untuk izin siswa melalui M-AFI |
| Presensi | verchar | Presensi siswa Hadir/Izin/Sakit/Tidak Hadir |


Entias data Pulang

Data Item | Type | Deskripsi | 
| ------ | ------ | ------ |
| IdPulang | int |  |
| Pulang | timestamp | Waktu saat menekat fingerprint |
| LebihCepat | int | kalkulasi dari waktu saat menekan fingerprint dikurangi waktu minimal pulang |


Entitas data Masuk

Data Item | Type | Deskripsi | 
| ------ | ------ | ------ |
| IdMasuk | int |  |
| Masuk | timestamp | Waktu saat menekan fingerprint |
| Keterlambatan | int | kalkulasi dari waktu maksimal masuk dikurangi waktu saat menekan fingerprint |
