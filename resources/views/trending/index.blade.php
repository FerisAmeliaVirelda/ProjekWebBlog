@extends('layouts.app')
@section('content')
<div class="container text-center mb-4 ">
    <div class="row">
        @foreach ($data as $item)
            
        <div class="col">
            <div class="card shadow bg-body-tertiary mt-4" style="width: 21.8rem;">
                <img src="{{ asset('/storage/amelias/' .$item->image) }}" class="card-img-top" alt="mk">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title}}</h5>
                    <br>
                    <a href="{{ route('amelias.show', $item->id) }}"
                      class="btn btn-sm btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container mt-4">
    <div class="container text-center ">
        <div class="row align-items-start">
          <div class="col">
            <div class="shadow card text-bg-ligh">
                <img src="img/akunwa2.png" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <a href="/fitur" style="text-decoration: none; color:black"><h5 class="card-title">Fitur Baru WhatsApp telah Dirilis: Bisa Pakai Dua Akun dalam Satu Aplikasi</h5></a>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="row align-items-start">
                <div class="col">
                  <div class="shadow card text-bg-ligh">
                      <img src="img/disney2.png" class="card-img" alt="...">
                      <div class="card-img-overlay">
                        <a href="/disney" style="text-decoration: none; color:black"><h5 class="card-title">Cara Ikut Tren Bikin Poster Film Ala Kartun Disney Menggunakan AI</h5></a>
                      </div>
                    </div>
                </div>
          </div>
        </div>
        <div class="col">
            <div class="card shadow" style="width: 25rem;">
                <div class="card-header bg-body-tertiary p-3">
                  Berita Trending Lainnya
                </div>
                <ul class="list-group list-group-flush">
                  <a href="#" style="text-decoration: none; color:black"><li class="list-group-item text-start">Grab Rilis Fitur "Mode Hening", Buat Perjalanan Jadi Lebih Tenang dan Minim Interaksi</li></a>
                  <a href="#" style="text-decoration: none; color:black"><li class="list-group-item text-start">Fitur Baru Instagram: Buat Stiker Baru dari Foto Anda Sendiri!</li></a>
                  <a href="#" style="text-decoration: none; color:black"><li class="list-group-item text-start">Pengalaman menjalani Haji Furoda oleh Aji Rizki Mewantara</li></a>
                  <a href="#" style="text-decoration: none; color:black"><li class="list-group-item text-start">Awas! Inilah Banjir Mengerikan yang Datang Secara Tiba-Tiba</li></a>
                </ul>
              </div>
        </div>
      </div>
</div>
@endsection
</body>
</html> 
