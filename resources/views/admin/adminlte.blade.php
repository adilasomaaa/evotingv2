@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col">
    <a href="/pemilihan" class="btn btn-outline-primary btn-block">
      <h5 class="font-weight-bold mt-2"><i class="fa fa-person-booth"></i> Pemilihan telah dibuka!</h5>
      <p>Klik disini untuk  memilih pasangan calon ketua dan wakil ketua osis</p>
    </a>
  </div>
</div>

<div class="row mt-2">
  <div class="col">
    <a href="https://api.whatsapp.com/send?phone=6285311327490&text=Saya%20ingin%20bertanya%20mengenai%20pemilihan%20ketua%20osis." class="btn btn-success btn-block">
      <h5 class="font-weight-bold mt-2"><i class="fa fa-exclamation"></i> Mengalami Masalah saat memilih?</h5>
      <p>Klik disini untuk  menghubungi support center</p>
    </a>
  </div>
  <div class="col">
    <a href="https://www.instagram.com/osis_smkn1limboto/" class="btn btn-danger btn-block">
      <h5 class="font-weight-bold mt-2"><i class="fa fa-camera"></i> Lensa Kegiatan Pemilihan</h5>
      <p>Klik disini untuk  melihat kegiatan kami selama pemilihan</p>
    </a>
  </div>
  <div class="col">
    <a href="#how" class="btn btn-dark btn-block">
      <h5 class="font-weight-bold mt-2"><i class="fa fa-question-circle"></i> Bagaimana cara memilih?</h5>
      <p>Klik disini untuk melihat bagaimana cara memilih kandidat</p>
    </a>
  </div>
</div>

<div class="row">
<div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{url('Maundy/assets/img/1.jpg')}}" alt="First slide">
                    </div>
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="{{url('Maundy/assets/img/2.jpg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{url('Maundy/assets/img/3.jpg')}}" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
</div>

  <div class="card mt-3">
  <div class="card-header">
    <h3 class="card-title"> Sekilas tentang Pemilihan Ketua OSIS </h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
    </div>
  </div>
  <div class="card-body">
    <div class="row">
        
      </hr>
      Pemilihan Ketua dan Wakil Ketua OSIS adalah program tahunan yang wajib dilaksanakan oleh OSIS SMK Negeri 1 Limboto. 
           Sebelum melakukan pemilihan, OSIS melakukan perekrutan untuk pergantian masa jabatan.
          Lalu dibuka sesi pendaftaran untuk siswa yang ingin mencalonkan diri menjadi Ketua dan Wakil Ketua OSIS
          Pasangan bisa berasal dari jurusan manapun, namun kriteria untuk ketua ditentukan harus seorang siswa kelas 11 dan untuk Wakil Ketua harus seorang siswa kelas 10
          Metode pelaksanaan pemilihan dilakukan dengan cara demokrasi yaitu dengan memilih pasangan calon
          Pasangan yang memperoleh suara terbanyak akan dilantik menjadi Ketua dan Wakil Ketua OSIS
          Setelah terpilih, pasangan menyiapkan setiap sekbid dan programnya.</p>
          
    </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <div class="float-left">
       <b>OSIS</b>SMKN1Limboto
    </div>
    <div class="float-right">
      All Right Reserved
    </div>
  </div>
  <!-- /.card-footer-->
</div>

  
  <div class="card mt-3" id="how">
      <div class="card-header">
        <h3 class="card-title"> Bagaimana cara memilih pasangan Ketua dan Wakil Ketua OSIS? </h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
        <ul>
        
            <li>
                Silahkan hubungi setiap wali kelas untuk memperoleh Email dan Password untuk memilih
            </li>
            
            <li>
                Kunjungi <a href="https://evoting.smkn1limboto.sch.id/">https://evoting.smkn1limboto.sch.id/</a> 
            </li>

            <li>
                Klik Tombol Mari Memilih, anda akan otomatis dialihkan pada halaman Login
            </li>

            <li>
                Silahkan Login menggunakan email dan password yang telah anda peroleh dari wali kelas 
            </li>
            <li>
                Setelah berhasil Login, anda akan dialihkan di halaman admin
            </li>
            <li>
                Pilih menu <a href="/voting">Voting</a> untuk memilih
            </li>
            <li>
                Pilih pasangan anda
            </li>
            <li>
                Pastikan pilihan anda berhasil diinput
            </li>
            <li>
                Keluar dari akun anda
            </li>
        </ul>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <div class="float-left">
        <b>OSIS</b>SMKN1Limboto
        </div>
        <div class="float-right">
          All Right Reserved
        </div>
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    <div class="card mt-3">
      <div class="card-header">
        <h3 class="card-title"> Rundown Kegiatan Pemilihan Ketua dan Wakil Ketua OSIS </h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        </div>
      </div>
      <div class="card-body">
         <!-- Timelime example  -->
         <div class="row">
          <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
            <div class="time-label">
                <span class="bg-red">6 Sep - 9 Nov, 2020</span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              
              <!-- timeline item -->
              <div>
                <i class="fas fa-comments bg-yellow"></i>
                <div class="timeline-item">
                  
                  <h3 class="timeline-header"><b>Perekrutan Pengurus OSIS</b></h3>
                  <div class="timeline-body">
                    Perekrutan dilaksanakan secara online dan dikumpulkan pada tanggal 9 November 2020
                  </div>
                  
                </div>
              </div>
              <!-- END timeline item -->
              <div class="time-label">
                <span class="bg-green">23 Nov, 2020</span>
              </div>
              <!-- timeline item -->
              <div>
                <i class="fas fa-comments bg-yellow"></i>
                <div class="timeline-item">
                  
                  <h3 class="timeline-header"><b>Perekrutan MPK</b></h3>
                  <div class="timeline-body">
                    MPK merupakan Majelis Permusyawaratan Kelas dan yang mewakili dari setiap kelas berjumlah 2 orang. MPK bertugas mengamati jalannya proses pemilihan mulai dari pendaftaran calon, pengambilan nomor urut, hingga pemaparan visi misi dan debat.
                  </div>
                  
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline time label -->
               <!-- END timeline item -->
               <div class="time-label">
                <span class="bg-green">10 November 2020</span>
              </div>
              <!-- timeline item -->
              <div>
                <i class="fas fa-comments bg-yellow"></i>
                <div class="timeline-item">
                  
                  <h3 class="timeline-header"><b>Pendaftaran Calon Ketua dan Wakil Ketua OSIS</b></h3>
                  <div class="timeline-body">
                    Calon Ketua dan Wakil Ketua mendaftarkan diri secara langsung di mimbar upacara disaksikan langsung oleh pengurus OSIS baru dan MPK dari setiap kelas. 
                  </div>
                  
                </div>
              </div>
              <!-- END timeline item -->
               <!-- END timeline item -->
               <div class="time-label">
                <span class="bg-green">10 November 2020</span>
              </div>
              <!-- timeline item -->
              <div>
                <i class="fas fa-comments bg-yellow"></i>
                <div class="timeline-item">
                  
                  <h3 class="timeline-header"><b>Pengambilan No Urut Paslon</b></h3>
                  <div class="timeline-body">
                    Setelah mendaftarkan diri, Pasangan calon mengambil No Urut yang disediakan oleh panellist
                  </div>
                  
                </div>
              </div>
              <!-- END timeline item -->
               <!-- END timeline item -->
               <div class="time-label">
                <span class="bg-green">11 Nov 2020</span>
              </div>
              <!-- timeline item -->
              <div>
                <i class="fas fa-comments bg-yellow"></i>
                <div class="timeline-item">
                  
                  <h3 class="timeline-header"><b>Kampanye secara Online</b></h3>
                  <div class="timeline-body">
                    Setiap pasangan calon berhak untuk mengkampanyekan program dan visi misinya kepada setiap siswa.
                  </div>
                  
                </div>
              </div>
              <div class="time-label">
                <span class="bg-green">12 Nov, 2020</span>
              </div>
              <!-- timeline item -->
              <div>
                <i class="fas fa-comments bg-yellow"></i>
                <div class="timeline-item">
                  
                  <h3 class="timeline-header"><b>Penyampaian Visi Misi dan Debat Kandidat</b></h3>
                  <div class="timeline-body">
                    Penyampaian visi misi dan juga debat kandidat secara langsung diadakan di Aula Serba Guna SMK 1 Limboto. Disaksikan oleh pengurus OSIS baru dan MPK yang diwakili oleh 2 orang dari setiap kelas. Materi dari debat ditentukan oleh panelist.
                  </div>
                  
                </div>
              </div>
              <div class="time-label">
                <span class="bg-green">14 Nov, 2020</span>
              </div>
              <!-- timeline item -->
              <div>
                <i class="fas fa-comments bg-yellow"></i>
                <div class="timeline-item">
                  
                  <h3 class="timeline-header"><b>Pemilihan</b></h3>
                  <div class="timeline-body">
                    Setiap siswa SMK Negeri 1 Limboto berhak menggunakan hak suaranya untuk memilih Ketua dan Wakil Ketua OSIS dalam 1 tahun kedepannya. Nantinya, pemilih akan diberikan user yang digunakan untuk memilih secara online dan tidak wajib untuk datang ke sekolah.
                  </div>
                  
                </div>
              </div>
              <div class="time-label">
                <span class="bg-green">16 Nov, 2020</span>
              </div>
              <!-- timeline item -->
              <div>
                <i class="fas fa-comments bg-yellow"></i>
                <div class="timeline-item">
                  
                  <h3 class="timeline-header"><b>Perhitungan Suara</b></h3>
                  <div class="timeline-body">
                    Perhitungan suara akan diumumkan secara langsung melalui media.
                  </div>
                  
                </div>
              </div>
              <div class="time-label">
                <span class="bg-green">16 Nov, 2020</span>
              </div>
              <!-- timeline item -->
              <div>
                <i class="fas fa-comments bg-yellow"></i>
                <div class="timeline-item">
                  
                  <h3 class="timeline-header"><b>Pengumuman Hasil</b></h3>
                  <div class="timeline-body">
                    Pengumuman dari suara terbanyak akan diumumkan secara langsung melalui media.
                  </div>
                  
                </div>
              </div>
              <div>
                <i class="fas fa-clock bg-gray"></i>
              </div>
            </div>
          </div>
          <!-- /.col -->

        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <div class="float-left">
        <b>OSIS</b>SMKN1Limboto
        </div>
        <div class="float-right">
          All Right Reserved
        </div>
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->
  




@endsection