@extends('layouts.app')

@section('content')
    @include('partial.nav')
    @include('partial.sectionHero')
    @include('partial.sectionAbout')  
    @include('partial.sectionCounts')
    @include('partial.sectionServices')
    @include('partial.sectionTestimonial')
    @include('partial.sectionContact')
    @include('partial.footer')
@endsection