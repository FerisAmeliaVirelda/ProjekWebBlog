@extends('layouts.app')
@section('content')
<div class="text-center mb-4 mt-4 m-5">
    <div class="row align-items-center">
      <div class="col">
        <div class="card bg-body-tertiary" style="width: 18rem;">
            <img src="img/codplay.png" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="/cp" style="text-decoration: none; color:black"><h6 class="card-text">Mengenal Xylobands : Perangkat Wearable yang Digunakan dalam Konser Coldplay</h6></a>
            </div>
        </div>
      </div>
      <div class="col">
        <div class="card bg-body-tertiary" style="width: 18rem;">
            <img src="img/android.png" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="/android" style="text-decoration: none; color:black"><h6 class="card-text">Cara Meningkatkan Kinerja HP Android yang Lambat : Tips Terbaik Yang Bisa Dicoba</h6></a>
            </div>
        </div>
      </div>
      <div class="col">
        <div class="card bg-body-tertiary" style="width: 18rem;">
            <img src="img/xtwt.png" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="/twt" style="text-decoration: none; color:black"><h6 class="card-text">Fitur Pencari Lowongan Pekerjaan di X (Twitter) Kini Sudah Bisa Dicoba di Indonesia</h6></a>
            </div>
        </div>
      </div>
      <div class="col">
        <div class="card bg-body-tertiary" style="width: 18rem;">
            <img src="img/asus.png" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="/asus" style="text-decoration: none; color:black"><h6 class="card-text">Asus Terancam Tak Bisa Jual Laptop di Amerika Serikat, Ini dia Alasannya</h6></a>
            </div>
        </div>
      </div>
    </div>
</div>
<div class="container text-center mb-4">
    <div class="row align-items-center">
      <div class="col">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Pentingnya Kualitas Konten: Memikat dan Mempertahankan Followers Instagram yang Aktif
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">1. Membuat Konten yang Relevan dan Menarik
                    2. Penggunaan Visual yang Menarik
                    3. Cerita yang Menceritakan dan Menginspirasi
                    4. Aktif Berinteraksi dengan Pengikut
                    5. Menggunakan Hashtag Secara Bijak
                    6. Konsistensi dalam Posting Konten
                    7. Memanfaatkan Fitur-fitur Terbaru Instagram
                    8. Berkolaborasi dengan Pengguna Lain
                    9. Evaluasi Analytics dan Respons Terhadap Perubahan
                    10. Mempertahankan Integritas dan Autentisitas</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Tips Mudah Atasi File Gmail yang Tidak Bisa di Download
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Tips mudah untuk mengatasi masalah Gmail yang tidak dapat mengunduh file, serta memberikan solusi yang mudah diikuti agar pengguna dapat megakses file tanpa sebuah hambatan. 
                    1. Memperbarui Gmail 
                    2. Bershikan File Cache 
                    3. Unduh Melalui Google Drive                     
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Tips Ampuh Mengatasi Keyboard Laptop yang Tidak Berfungsi
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Mengalami kerusakan pada keyboard di laptop bisa menjadi salah satu pengalaman yang cukup membuat kita menjadi jengkel, terutama saat keyboard tidak berfungsi di tengah-tengah kita melakukan aktivitas, seperti bekerja atau pun membuat tugas kuliah. 
                    Ini adalah tips yang bisa dilakukan :
                        1. Bersihkan Keyboard dari Debu
                        2. Lakukan Restart pada Laptop 
                        3. Instal Ulang OS
                        4. Memperbaiki Driver Keyboard 
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="col">
        <div class="card" style="width: 40rem;">
            <div class="card-body bg-body-tertiary">
              <h5 class="card-title">iPhone 15 Series Punya Koneksi 5G Paling Kencang, Kalahkan Samsung Z Series</h5>
              {{-- <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6> --}}
              <p class="card-text">Jaringan 5G merupakan jaringan seluler generasi kelima yang menawarkan kecepatan internet lebih tinggi dari generasi sebelumnya yatiu 4G</p>
              <a href="/iphone" class="card-link">Learn More</a>
            </div>
          </div>
      </div>
    </div>
</div>
<div class="container">
  <div class="row">
      <div class="col-6">
          <div class="card mb-3 me-2 bg-body-tertiary">
              <div class="row g-0">
                  <div class="col-md-4">
                      <img src="img/daftariphone.png" class="img-fluid rounded-start" alt="hallowyellow">
                  </div>
                  <div class="col-md-8">
                      <div class="card-body">
                          <h5 class="card-title">Daftar Series iPhone dengan Kapasitas Baterai Terbaik dan Terburuk</h5>
                          <a href="#" class="btn btn-outline-dark" tabindex="-1" role="button"
                              aria-disabled="true">Learn More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-6">
          <div class="card mb-3 me-2 bg-body-tertiary">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="img/hallow.png" class="img-fluid rounded-start" alt="hallowyellow">
              </div>
              <div class="col-md-8">
                  <div class="card-body">
                      <h5 class="card-title">HaloYelow, Solusi Digital Contact Center Dengan Fitur CRM & Tanpa
                          Nomor
                          Telepon</h5>
                      <a href="/yellow" class="btn btn-outline-dark" tabindex="-1" role="button"
                          aria-disabled="true">Learn More</a>
                  </div>
              </div>
              </div>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-6">
          <div class="card mb-3 me-2 bg-body-tertiary">
              <div class="row g-0">
                  <div class="col-md-4">
                      <img src="img/mark.png" class="img-fluid rounded-start" alt="mark">
                  </div>
                  <div class="col-md-8">
                      <div class="card-body">
                          <h5 class="card-title">Mark Zuckerberg Berencana Musnahkan Penyakit Manusia Pakai AI,
                              Begini Caranya</h5>
                          <a href="/mark" class="btn btn-outline-dark" tabindex="-1" role="button"
                              aria-disabled="true">Learn More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-6">
          <div class="card mb-3 me-2 bg-body-tertiary">
              <div class="row g-0">
                  <div class="col-md-4">
                      <img src="img/tiktokshop.png" class="img-fluid rounded-start" alt="tiktok">
                  </div>
                  <div class="col-md-8">
                      <div class="card-body">
                          <h5 class="card-title">TikTok Buka Suara Soal Platform Medsos Dilarang Jualan</h5>
                          <a href="#" class="btn btn-outline-dark" tabindex="-1" role="button"
                              aria-disabled="true">Learn More</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
</body>
</html> 