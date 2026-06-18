@extends('layouts.app')

@section('title', 'Isra Institute of Rehabilitation Sciences (IIRS) :: Isra University Islamabad Campus')

@section('content')
<main>
  @include('partials.slider')
  @include('partials.hod_message')
  @include('partials.offered_programs')
  @include('partials.peos')
  @include('partials.plos')
  @include('partials.highlights')
  @include('partials.teachers_preview')
</main>
@endsection
