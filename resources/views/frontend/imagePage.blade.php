@extends('frontend.layout')

@section('content')
    {{-- <div class="bradcam_area bradcam_bg_3">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="bradcam_text text-center">
              <h3>Pudak B</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ bradcam_area  -->

    <div class="about_story">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="story_heading">
              <h3>Tentang Desa</h3>
            </div>
            <div class="row">
              <div class="col-lg-11 offset-lg-1">
                <div class="story_info">
                  <div class="row">
                    <div class="col-lg-9">
                      <p>
                      Padukuhan Pudak B merupakan bagian dari wilayah Kalurahan 
                      Jerukwudel, Kapanewon Girisubo,Kabupaten Gunungkidul. 
                      Padukuhan Pudak B berdekatan dengan Pudak A dan secara wilayah 
                      administratif kedua padukuhan ini terpisah, namun secara budaya dan 
                      sosial warganya bersatu dan tidak ada yang membedakan sehingga menciptakan 
                      fondasi yang kuat antardesa.
                      Rata-rata warga Pudak B bekerja sebagai petani ladang. 
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    <div class="gallery">
        @foreach ($gambar as $item)
            <div class="gallery-item-container">
                <h3>{{ $item->title }}</h3>
                <div class="gallery-item">
                    <img src="{{ asset($item->image) }}" alt="{{ $item->title }}">
                </div>
            </div>
        @endforeach
    </div>
@endsection
