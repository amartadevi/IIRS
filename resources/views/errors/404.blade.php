@extends('layouts.app')

@section('title', '404 – Page Not Found | Isra Institute of Rehabilitation Sciences (IIRS)')

@section('styles')
<style>
  .error-page-hero {
    background: linear-gradient(135deg, var(--color-primary-dark) 0%, var(--color-primary) 100%);
    min-height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid var(--color-accent);
  }
  .error-page-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: radial-gradient(circle at 80% 20%, rgba(245, 166, 35, 0.10) 0%, transparent 55%);
    pointer-events: none;
  }
  .error-code {
    font-size: clamp(6rem, 18vw, 14rem);
    font-weight: 900;
    line-height: 1;
    font-family: var(--font-heading);
    background: linear-gradient(135deg, rgba(255,255,255,0.15) 0%, rgba(245,166,35,0.55) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    letter-spacing: -4px;
    user-select: none;
  }
  .error-divider {
    width: 70px;
    height: 4px;
    background: var(--color-accent);
    border-radius: 2px;
    margin: 1.5rem auto;
  }
  .error-title {
    font-family: var(--font-heading);
    font-size: 1.9rem;
    font-weight: 700;
    color: #ffffff;
    letter-spacing: 0.5px;
  }
  .error-sub {
    font-family: var(--font-body);
    color: rgba(255,255,255,0.65);
    font-size: 1rem;
    max-width: 480px;
    margin: 0 auto;
    line-height: 1.7;
  }
  .error-btn-home {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: var(--color-accent);
    color: var(--color-primary-dark);
    font-family: var(--font-heading);
    font-weight: 700;
    font-size: 0.9rem;
    padding: 0.75rem 2rem;
    border-radius: 8px;
    text-decoration: none;
    letter-spacing: 0.5px;
    transition: all 0.25s ease;
    box-shadow: 0 4px 20px rgba(245, 166, 35, 0.35);
  }
  .error-btn-home:hover {
    background: var(--color-accent-hover);
    transform: translateY(-2px);
    box-shadow: 0 8px 30px rgba(245, 166, 35, 0.45);
    color: var(--color-primary-dark);
  }
  .error-btn-back {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: transparent;
    color: rgba(255,255,255,0.7);
    font-family: var(--font-heading);
    font-weight: 600;
    font-size: 0.9rem;
    padding: 0.75rem 2rem;
    border-radius: 8px;
    text-decoration: none;
    letter-spacing: 0.5px;
    border: 1px solid rgba(255,255,255,0.2);
    transition: all 0.25s ease;
  }
  .error-btn-back:hover {
    background: rgba(255,255,255,0.08);
    color: #fff;
    border-color: rgba(255,255,255,0.4);
  }
  .error-quick-links {
    display: flex;
    flex-wrap: wrap;
    gap: 0.75rem;
    justify-content: center;
    margin-top: 2.5rem;
  }
  .error-quick-link {
    font-size: 0.8rem;
    font-family: var(--font-heading);
    color: rgba(255,255,255,0.5);
    text-decoration: none;
    padding: 0.4rem 1rem;
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 20px;
    transition: all 0.2s ease;
  }
  .error-quick-link:hover {
    color: var(--color-accent);
    border-color: rgba(245,166,35,0.4);
    background: rgba(245,166,35,0.05);
  }
</style>
@endsection

@section('content')
<section class="error-page-hero">
  <div class="container text-center position-relative z-1" data-aos="fade-up">

    <!-- Animated 404 Number -->
    <div class="error-code">404</div>

    <!-- Divider -->
    <div class="error-divider mx-auto"></div>

    <!-- Heading & Message -->
    <h1 class="error-title mb-3">Page Not Found</h1>
    <p class="error-sub mb-5">
      The page you're looking for doesn't exist or has been moved. 
      Please check the URL or navigate back using the links below.
    </p>

    <!-- Action Buttons -->
    <div class="d-flex flex-wrap gap-3 justify-content-center">
      <a href="{{ url('/') }}" class="error-btn-home">
        <i class="fa-solid fa-house"></i> Back to Homepage
      </a>
      <a href="javascript:history.back()" class="error-btn-back">
        <i class="fa-solid fa-arrow-left"></i> Go Back
      </a>
    </div>

    <!-- Quick Navigation Links -->
    <div class="error-quick-links">
      <a href="{{ url('/teachers') }}" class="error-quick-link"><i class="fa-solid fa-users me-1"></i>Faculty</a>
      <a href="{{ url('/programs') }}" class="error-quick-link"><i class="fa-solid fa-graduation-cap me-1"></i>Programs</a>
      <a href="{{ url('/allnews') }}" class="error-quick-link"><i class="fa-solid fa-newspaper me-1"></i>News</a>
      <a href="{{ url('/about') }}" class="error-quick-link"><i class="fa-solid fa-circle-info me-1"></i>About</a>
      <a href="{{ url('/contact') }}" class="error-quick-link"><i class="fa-solid fa-envelope me-1"></i>Contact</a>
    </div>

  </div>
</section>
@endsection