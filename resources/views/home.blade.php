@extends('layouts.landing-page')

@section('title')
{{$settings["general"]->site_title}} Get your Coffee Fix
@endsection


@section('content')
    <section id="information">
      <div class="cafe-image">
        <img src="img/views1.jpg">
      </div>
      <div class="info">
          <h2>We are the new kids on the block</h2>
          <div class="paragraphs">
              <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain</p>
              <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain</p>
          </div>
          <a href="#" class="about-link">
            <span>Learn more about our new location.</span>
            <div class="circle-right">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
          </a>
          

        </div>
    </section>
   @include("includes.food-categories-slider")
@endsection
