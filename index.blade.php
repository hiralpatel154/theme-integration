@extends('frontend.layouts.main')

@section('main-conatiner')
@include('frontend.partials.navigation')

@include('frontend.partials.slider')

@include('frontend.partials.banner-feature')

@include('frontend.partials.about')

<!-- courses -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">Our Course</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
            <a href="courses.html" class="btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block">see all</a>
          </div>
        </div>
      </div>
    </div>
    @include('frontend.partials.course')
    <!-- mobile see all button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="courses.html" class="btn btn-sm btn-outline-primary d-sm-none d-inline-block">sell all</a>
      </div>
    </div>
  </div>
</section>
<!-- /courses -->

@include('frontend.partials.cta')

@include('frontend.partials.success-story')

<!-- events -->
<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">Upcoming Events</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
            <a href="events.html" class="btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block">see all</a>
          </div>
        </div>
      </div>
    </div>
    @include('frontend.partials.events')
    <!-- mobile see all button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="course.html" class="btn btn-sm btn-outline-primary d-sm-none d-inline-block">sell all</a>
      </div>
    </div>
  </div>
</section>
<!-- /events -->

@include('frontend.partials.teachers')

<!-- blog -->
<section class="section pt-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">Latest News</h2>
      </div>
    </div>
    @include('frontend.partials.blog')
  </div>
</section>
<!-- /blog -->

@include('frontend.partials.footer')

@endsection