@extends('layout\template_user')

@section('content')
@parent
<!-- Breadcrumbs -->
<section class="breadcrumbs-custom-inset">
  <div class="breadcrumbs-custom context-dark bg-overlay-60">
    <div class="container">
      <h2 class="breadcrumbs-custom-title">Destination</h2>
      <ul class="breadcrumbs-custom-path">
        <li><a href="index.html">Home</a></li>
        <li class="active">Destination</li>
      </ul>
    </div>
    <div class="box-position" style="background-image: url(/images/breadcrumbs-bg.jpg);"></div>
  </div>
</section>
<!-- Why choose us-->

<section class="section section-lg section-top-3 bg-gray-4">
  <div class="container offset-negative-1">
    <div class="box-categories cta-box-wrap">
      <div class="box-categories-content">
        <div class="row justify-content-center">
          @forelse ($destinasis as $destinasi)
          <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
            <ul class="list-marked-2 box-categories-list">
              <li><a href="#"><img src="{{ Storage::url('public/destinasis/').$destinasi->gambar }}" alt="" width="268" height="320" /></a>
                <h5 class="box-categories-title">{{ $destinasi->nama }}</h5>
              </li>
            </ul>

          </div>
          @empty
          @endforelse
        </div>
      </div>
    </div>
    <!-- Owl Carousel-->
  </div>
</section>
{{ $destinasis->links() }}

@endsection

@section('footer')
@endsection