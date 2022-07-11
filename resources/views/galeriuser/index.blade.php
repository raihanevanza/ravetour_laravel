@extends('layout\template_user')

@section('content')
@parent
      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-60">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">Gallery</h2>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li class="active">Gallery</li>
            </ul>
          </div>
          <div class="box-position" style="background-image: url(/images/breadcrumbs-bg.jpg);"></div>
        </div>
      </section>
      <!-- Why choose us-->

     <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
   
        <div class="container-fluid">
          <h6 class="gallery-title">Gallery</h6>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
            <!-- Thumbnail Classic-->
            @forelse ($galeris as $galeri)
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="{{ Storage::url('public/galeris/').$galeri->gambar }}" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{ Storage::url('public/galeris/').$galeri->gambar }}" data-lightgallery="item"><img src="{{ Storage::url('public/galeris/').$galeri->gambar }}" alt="" width="270" height="195"/></a>
              </div>
              @empty
            </article>
            @endforelse
          </div>
        </div>
      </section>
      @endsection

@section('footer')
@endsection