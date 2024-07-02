@extends('frontend.layout')

@section('content')

<!-- slider_area_start -->
<div class="slider_area">
      <div class="slider_active owl-carousel">
        <div
          style="background-image: url({{ asset('frontend/img/banner/banner.png') }})"
          class="single_slider d-flex align-items-center overlay"
        >
          <div class="container">
            <div class="row align-items-center">
              <div class="col-xl-12 col-md-12">
                <div class="slider_text text-center">
                  <h3>Pudak B</h3>
                  <p>Pixel perfect design with awesome contents</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          style="background-image: url({{ asset('frontend/img/banner/banner2.png') }})"
          class="single_slider d-flex align-items-center overlay"
        >
          <div class="container">
            <div class="row align-items-center">
              <div class="col-xl-12 col-md-12">
                <div class="slider_text text-center">
                  <h3>Pudak B</h3>
                  <p>Pixel perfect design with awesome contents</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          style="background-image: url({{ asset('frontend/img/banner/banner3.png') }})"
          class="single_slider d-flex align-items-center overlay"
        >
          <div class="container">
            <div class="row align-items-center">
              <div class="col-xl-12 col-md-12">
                <div class="slider_text text-center">
                  <h3>Pudak B</h3>
                  <p>Pixel perfect design with awesome contents</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- slider_area_end -->

    <!-- destination -->
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
          <div class="col-lg-4 col-md-6">
            <div class="single_place">
              <div class="thumb">
                <img src="{{ asset('frontend/img/produk/jagung.jpg') }}" alt="" />
                <!-- <a href="#" class="prise">$500</a> -->
              </div>
              <div class="place_info">
                <a href="destination_details.html"><h3>Jagung</h3></a>
                <p>Jagung</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single_place">
              <div class="thumb">
                <img src="{{ asset('frontend/img/produk/popcorn.jpg') }}" alt="" />
                <!-- <a href="#" class="prise">$500</a> -->
              </div>
              <div class="place_info">
                <a href="destination_details.html"><h3>Popcorn</h3></a>
                <p>Produk olahan jagung</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end -->

    <div class="travel_variation_area">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single_travel text-center">
              <div class="icon">
                <img src="img/svg_icon/1.svg" alt="" />
              </div>
              <h3>Comfortable Journey</h3>
              <p>
                A wonderful serenity has taken to the possession of my entire
                soul.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single_travel text-center">
              <div class="icon">
                <img src="img/svg_icon/2.svg" alt="" />
              </div>
              <h3>Luxuries Hotel</h3>
              <p>
                A wonderful serenity has taken to the possession of my entire
                soul.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single_travel text-center">
              <div class="icon">
                <img src="img/svg_icon/3.svg" alt="" />
              </div>
              <h3>Travel Guide</h3>
              <p>
                A wonderful serenity has taken to the possession of my entire
                soul.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- testimonial_area  -->
    <div class="testimonial_area">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="testmonial_active owl-carousel">
              <div class="single_carousel">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <div class="single_testmonial text-center">
                      <div class="author_thumb">
                        <img src="img/testmonial/author.png" alt="" />
                      </div>
                      <p>
                        "Working in conjunction with humanitarian aid agencies,
                        we have supported programmes to help alleviate human
                        suffering.
                      </p>
                      <div class="testmonial_author">
                        <h3>- Micky Mouse</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="single_carousel">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <div class="single_testmonial text-center">
                      <div class="author_thumb">
                        <img src="img/testmonial/author.png" alt="" />
                      </div>
                      <p>
                        "Working in conjunction with humanitarian aid agencies,
                        we have supported programmes to help alleviate human
                        suffering.
                      </p>
                      <div class="testmonial_author">
                        <h3>- Tom Mouse</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="single_carousel">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <div class="single_testmonial text-center">
                      <div class="author_thumb">
                        <img src="img/testmonial/author.png" alt="" />
                      </div>
                      <p>
                        "Working in conjunction with humanitarian aid agencies,
                        we have supported programmes to help alleviate human
                        suffering.
                      </p>
                      <div class="testmonial_author">
                        <h3>- Jerry Mouse</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /testimonial_area  -->

@endsection