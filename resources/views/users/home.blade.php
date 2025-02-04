@extends('layouts.user')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row align-items-center">
    <div class="col-lg-6">
      <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
        <div class="company-badge mb-4">
          <i class="bi bi-mortarboard-fill me-2"></i>
          Study Tracer
        </div>

        <h1 class="mb-4">
          Lacak Jejak <br>
          Karir Alumni <br>
          <span class="accent-text">Bersama Kami</span>
        </h1>

        <p class="mb-4 mb-md-5">
          Selamat datang di Portal Tracer Study. Platform ini dirancang untuk memantau perkembangan karir alumni
          dan memperkuat jejaring antara institusi dengan para lulusan.
        </p>

        <div class="hero-buttons">
          <a href="{{ route('kuesioner.create') }}" class="btn btn-primary me-0 me-sm-2 mx-1">Isi Kuesioner</a>
          <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn btn-link mt-2 mt-sm-0 glightbox">
            <i class="bi bi-play-circle me-1"></i>
            Panduan Pengisian
          </a>
        </div>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
        <img src="assets/img/illustration-1.webp" alt="Hero Image" class="img-fluid">

        <div class="customers-badge">
          <div class="customer-avatars">
            <img src="assets/img/avatar-1.webp" alt="Customer 1" class="avatar">
            <img src="assets/img/avatar-2.webp" alt="Customer 2" class="avatar">
            <img src="assets/img/avatar-3.webp" alt="Customer 3" class="avatar">
            <img src="assets/img/avatar-4.webp" alt="Customer 4" class="avatar">
            <img src="assets/img/avatar-5.webp" alt="Customer 5" class="avatar">
            <span class="avatar more">12+</span>
          </div>
          <p class="mb-0 mt-2">12,000+ lorem ipsum dolor sit amet consectetur adipiscing elit</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
    <div class="col-lg-3 col-md-6">
      <div class="stat-item">
        <div class="stat-icon">
          <i class="bi bi-people"></i>
        </div>
        <div class="stat-content">
          <h4>5000+ Alumni</h4>
          <p class="mb-0">Terlacak</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="stat-item">
        <div class="stat-icon">
          <i class="bi bi-building"></i>
        </div>
        <div class="stat-content">
          <h4>1000+ Perusahaan</h4>
          <p class="mb-0">Mitra Kerja</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="stat-item">
        <div class="stat-icon">
          <i class="bi bi-graph-up"></i>
        </div>
        <div class="stat-content">
          <h4>85%</h4>
          <p class="mb-0">Tingkat Keterserapan</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="stat-item">
        <div class="stat-icon">
          <i class="bi bi-star"></i>
        </div>
        <div class="stat-content">
          <h4>90%</h4>
          <p class="mb-0">Kepuasan Pengguna</p>
        </div>
      </div>
    </div>
  </div>

</div>

</section><!-- /Hero Section -->

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row content justify-content-center align-items-center position-relative">
    <div class="col-lg-8 mx-auto text-center">
      <h2 class="display-4 mb-4">Berkontribusilah dalam Pengembangan Institusi</h2>
      <p class="mb-4">Partisipasi Anda dalam tracer study sangat berharga untuk meningkatkan kualitas pendidikan dan relevansi kurikulum dengan kebutuhan dunia kerja</p>
      <a href="{{ route('kuesioner.create') }}" class="btn btn-cta">Mulai Kuesioner</a>
    </div>

    <!-- Abstract Background Elements -->
    <div class="shape shape-1">
      <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
        <path d="M47.1,-57.1C59.9,-45.6,68.5,-28.9,71.4,-10.9C74.2,7.1,71.3,26.3,61.5,41.1C51.7,55.9,35,66.2,16.9,69.2C-1.3,72.2,-21,67.8,-36.9,57.9C-52.8,48,-64.9,32.6,-69.1,15.1C-73.3,-2.4,-69.5,-22,-59.4,-37.1C-49.3,-52.2,-32.8,-62.9,-15.7,-64.9C1.5,-67,34.3,-68.5,47.1,-57.1Z" transform="translate(100 100)"></path>
      </svg>
    </div>

    <div class="shape shape-2">
      <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
        <path d="M41.3,-49.1C54.4,-39.3,66.6,-27.2,71.1,-12.1C75.6,3,72.4,20.9,63.3,34.4C54.2,47.9,39.2,56.9,23.2,62.3C7.1,67.7,-10,69.4,-24.8,64.1C-39.7,58.8,-52.3,46.5,-60.1,31.5C-67.9,16.4,-70.9,-1.4,-66.3,-16.6C-61.8,-31.8,-49.7,-44.3,-36.3,-54C-22.9,-63.7,-8.2,-70.6,3.6,-75.1C15.4,-79.6,28.2,-58.9,41.3,-49.1Z" transform="translate(100 100)"></path>
      </svg>
    </div>

    <!-- Dot Pattern Groups -->
    <div class="dots dots-1">
      <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
        <pattern id="dot-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
          <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
        </pattern>
        <rect width="100" height="100" fill="url(#dot-pattern)"></rect>
      </svg>
    </div>

    <div class="dots dots-2">
      <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
        <pattern id="dot-pattern-2" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
          <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
        </pattern>
        <rect width="100" height="100" fill="url(#dot-pattern-2)"></rect>
      </svg>
    </div>

    <div class="shape shape-3">
      <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
        <path d="M43.3,-57.1C57.4,-46.5,71.1,-32.6,75.3,-16.2C79.5,0.2,74.2,19.1,65.1,35.3C56,51.5,43.1,65,27.4,71.7C11.7,78.4,-6.8,78.3,-23.9,72.4C-41,66.5,-56.7,54.8,-65.4,39.2C-74.1,23.6,-75.8,4,-71.7,-13.2C-67.6,-30.4,-57.7,-45.2,-44.3,-56.1C-30.9,-67,-15.5,-74,0.7,-74.9C16.8,-75.8,33.7,-70.7,43.3,-57.1Z" transform="translate(100 100)"></path>
      </svg>
    </div>
  </div>

</div>

</section><!-- /Call To Action Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section light-background">
  <div class="container section-title" data-aos="fade-up">
    <h2>Testimonials</h2>
    <p>Apa kata alumni tentang kami</p>
  </div>

  <div class="container">
    <div class="row g-5">
      @forelse($testimonials as $testimonial)
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
        <div class="testimonial-item">
          @if($testimonial->alumni->user && $testimonial->alumni->user->avatar)
              <img class="testimonial-avatar" src="{{ asset('avatars/' . $testimonial->alumni->user->avatar) }}">
          @else
              <img class="testimonial-avatar" src="{{ asset('img/default_profile.png') }}">
          @endif
          <h3>{{ $testimonial->alumni->nama_depan }} {{ $testimonial->alumni->nama_belakang }}</h3>
          <h4>{{ $testimonial->alumni->konsentrasiKeahlian->nama_konsentrasi ?? 'Alumni' }}</h4>
          <p>
            <i class="bi bi-quote quote-icon-left"></i>
            <span>{{ $testimonial->testimoni }}</span>
            <i class="bi bi-quote quote-icon-right"></i>
          </p>
        </div>
      </div>
      @empty
      <div class="col-12 text-center">
        <p>Belum ada testimoni</p>
      </div>
      @endforelse
    </div>
  </div>
</section>

<style>
    .testimonial-avatar {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
}
</style>
@endsection
