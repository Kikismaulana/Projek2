      <!-- Counts Section -->
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name text-black"><?php echo anchor('Datasiswa/read', 'Data Siswa', ['class'=>'text-uppercase']) ?><span>Jumlah</span>
                  <div class="count-number">725</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name text-black"><?php echo anchor('Dataguru/read', 'Data Guru', ['class'=>'text-uppercase']) ?><span>Jumlah</span>
                  <div class="count-number">60</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name text-black"><?php echo anchor('Datauser/readuserguru', 'Data User', ['class'=>'text-uppercase']) ?><span>Jumlah</span>
                  <div class="count-number">1342</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-home"></i></div>
                <div class="name text-black"><?php echo anchor('Datakelas', 'Data Kelas', ['class'=>'text-uppercase']) ?><span>Jumlah</span>
                  <div class="count-number">20</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-home"></i></div>
                <div class="name text-black"><div style="font-size: 15px"><?php echo anchor('Datajurusan', 'Data Jurusan', ['class'=>'text-uppercase']) ?></div><span>Jumlah</span>
                  <div class="count-number">92</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-bill"></i></div>
                <div class="name text-black"><div style="font-size: 13px"><?php echo anchor('Datapresensi/readrekap', 'Rekap PResensi', ['class'=>'text-uppercase']) ?></div><span>Jumlah</span>
                  <div class="count-number">-</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>