<!-- Slider Stylesheet -->
<link rel="stylesheet" href="{{ asset('components/slider/slider.css') }}">

<section class="flexslider">
  <ul class="slides">
    @foreach ($slides as $slide)
    <li class="slide-item {{ $loop->first ? 'active' : '' }}">
      <div class="slide-bg" style="background-image: url({{ asset('storage/' . $slide->image) }})"></div>
      <div class="slide-overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="probootstrap-slider-text text-center">
              <h1 class="probootstrap-heading probootstrap-animate">{!! $slide->title !!}</h1>
            </div>
          </div>
        </div>
      </div>
    </li>
    @endforeach
  </ul>
</section>

<!-- Slider JavaScript -->
<script src="{{ asset('components/slider/slider.js') }}"></script>
