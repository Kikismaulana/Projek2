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

1.1 Lingkup

Hasil dari SDD ini adalah aplikasi berbasis web untuk adminnya dan berbasis mobile untuk user-usernya,
yang digunakan untuk membantu manajemen di M-AFI ini adalah dalam hal :
- mencatat data siswa, kelas, jurusan, user dan presensi.
- Mencatat kehadiran siswa secara digital.
- mengupdate data kehadiran siswa

1.2 Tujuan

Tujuan  pembuatan  SDD  (Software  Design  Document) ini adalah  untuk  menjelaskan 
langkah  langkah  desain  dan  proses-proses  dalam  pembuatan  sistem  aplikasi  yang  akan  
diterapkan  pada  Sistem  Absensi “M-AFI”,  dan  juga  memberi  definisi  kebutuhan 
untuk sistem, spesifikasi kebutuhan fungsional. 

 Fungsi utama dari M-AFI ini adalah menyediakan sistem absensi siswa dengan sidik jari
dimana orang tua dapat melihat kehadiran dan rekap presensi anaknya, guru dan siswapun 
dapat melihat rekap presensinya.

1.3 Audiens yang dituju

Dokumen ini ditujukan untuk individu yang terlibat langsung dalam pengembangan M-AFI. Ini termasuk pengembang perangkat lunak, konsultan proyek, dan manajer tim.


1.4 Kesesuaian

Dengan pembuatan dokumen ini maka spesifikasi pembuatan projek dapat dimengerti programmer lain, dimana jika suatu saat akan dikembangkan, dokumen ini dapat membantu dan tidak terjadi perselisihan dengan programmer sebelumnya.

## Referensi ##

IEEE Draft Standard for Software Design Descriptions 

## Definisi ##

Singkatan | Definisi 
| ------ | ------ |
| SDD | Merupakan singkatan dari Software Design Document |
| M-AFI | Singkatan Dari Mobile Attendence merupakan sebuah aplikasi absensi yang menggunakan mobile  |
|Fingerprint| Merupakan fingerprint merupakan suatu perangkat keras untuk memberikan data otomatis yang menggunakan sidik jari manusia. fingerprint digunakan biasannya untuk sistem absensi yang digunakan beberapa instansi.|
| Webserver | Webserver sebuah software yang memberikan layanan berbasis data dan berfungsi menerima permintaan dari HTTP atau HTTPS pada klien yang dikenal dan biasanya kita kenal dengan nama web browser (Mozilla Firefox, Google Chrome) dan untuk mengirimkan kembali yang hasilnya dalam bentuk beberapa halaman web dan pada umumnya akan berbentuk dokumen HTML. |
| LAN | LAN merupakan singkatan dari Local Area Network, yang mana merupakan sebuah jaringan komputer dengan skala kecil (local) seperti gedung perkantoran, sekolah atau rumah. LAN umumnya digunakan untuk berbagi resource dalam suatu gedung. LAN dapat berdiri sendiri, tanpa terhubung oleh jaringan luar atau internet. Namun apabila suatu LAN dihubungkan dengan beberapa LAN lainnya maka akan terbentuk suatu jaringan yang disebut Metropolitan Area Network (MAN). |


##  Kerangka Konseptual  Untuk Perangkat Lunak ##

4.1  Desain Perangkat Lunak dalam Konteks

M-AFI akan ditawarkan di sebuah instansi sekolah secara komersil. Pengembangan dan pemeliharaan menggunakan biaya karena terdapat alat sidik jari yang berkemungkinan rusak. Rencana pengembangan masa depan akan didasarkan pada dokumen ini maka pembuatannya tidak dimulai dari awal.  

4.2 Deskripsi Software Desain dalam Siklus Hidup

Pada tahap awal desain dalam sikulus hidup sebelum memulai perancangan produk secara terperinci. Menggambarkan Siklus Hidup (LC), dimana seorang perancang menggambarkan bagaimana sebuah produk menghabiskan siklus hidupnya. Tujuan dari penelitian ini adalah merupakan alat bantu deskripsi skenario siklus hidup untuk mendukung keputusan mendukung keputusan strategi siklus hidup. 

4.2.1 Pengaruh pada SDD persiapan 

4.2.2 Pengaruh SDD Software Life Cycle Produk

4.2.3 Desain Verifikasi dan Desain Peran di Validasi

## Desain Informasi Keterangan Isi ##

5.1 Pengantar

Pada document ini menjelaskan secara detail tenteng project.Tentang Web Aplikasi, database aplikasi dan mobile aplikasi perancangan dan antarmuka dijelaskan dalam dokumen ini.

5.2 SDD Identifikasi



5.3 Desain Stakeholder dan Kekhawatiran  



5.4 Pandangan Desain

5.5 Sudut Pandang Desain

5.6 Elemen Desain

5.6.1 Entitas Desain

5.6.2 Desain Atribut

5.6.3 Hubungan Desain

5.6.4 Kendala Desain

5.7 Overlay Desain

5.8 Desain Dasar Pemikiran

5.9 Bahasa Desain

## Pandangan Desain ##

6.1 Pengantar

6.2 Konteks Viewpoint

6.3 Komposisi Viewpoint

6.4 Viewpoint  Logis

6.5 Ketergantungan Viewpoint

6.6 Viewpoint Informasi

6.7 Pola Gunakan Viewpoint

6.8 Antarmuka Viewpoint

6.9 Struktur Viewpoint

6.10 Interaksi Viewpoint

6.11 State Dynamics Viewpoint

6.12 Algoritma Viewpoint

6.13 Sumber Daya Viewpoint

