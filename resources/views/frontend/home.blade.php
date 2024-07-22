@extends('frontend.layout')

@section('content')
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div style="background-image: url({{ asset('frontend/img/banner/Gambar1.jpg') }})"
                class="single_slider d-flex align-items-center overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Pudak B</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background-image: url({{ asset('frontend/img/banner/Gambar2.jpg') }})"
                class="single_slider d-flex align-items-center overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Pudak B</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background-image: url({{ asset('frontend/img/banner/Gambar3.jpg') }})"
                class="single_slider d-flex align-items-center overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Pudak B</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

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
    </div>

    <!-- Sumber daya dan produk desa-->
    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Sumber Daya & Produk Desa</h3>
                        <p>
                            Berikut adalah beberapa sumber daya dan produk yang ada di Pudak B
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($produk as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="single_place">
                            <div class="thumb fixed-size-image">
                                <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" />
                            </div>
                            <div class="place_info">
                                <h3>{{ $item->title }}</h3>
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Kebudayaan dan Kegiatan -->
    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Kebudayaan & Kegiatan Desa</h3>
                        <p>
                            Berikut adalah kebudayaan dan kegiatan yang ada di Pudak B
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($k as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="single_place">
                            <div class="thumb fixed-size-image">
                                <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" />
                            </div>
                            <div class="place_info">

                                <h3>{{ $item->title }}</h3>

                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
