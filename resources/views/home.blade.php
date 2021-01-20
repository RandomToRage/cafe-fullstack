@extends('layouts.landing-page')

@section('title')
{{$settings["general"]->site_title}} Get your Coffee Fix
@endsection

@section('description')
8-bit-coffee  The best coffee near you.
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
          <a href="/contact" class="about-link">
            <span>Learn more about our new location.</span>
            <div class="circle-right">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
          </a>
          

        </div>
    </section>
    <section id="food-preview">
      <h2>We have all the caffine you need!</h2>
      <a href="/menu">
      <div class="button-rounded">View Our Menu</div>
      </a>
      <div class="container">
          <div class="left-btn">
              <i class="fa fa-chevron-left" aria-hidden="true"></i>

          </div>
        <div class="right-btn">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>

        </div>
          <div class="food-slider">
              <div class="sliding-system">
              @foreach ($categories as $category)
              <a href="/menu/{{$category->title}}" class="slide">
                      <div class="background"></div>
                      <div class="content">
                          <div class="food-title">
                              {{$category->title}}
                            </div>
                            <p class="food-description">
                                {{$category->description}}
                              </p>
                              <div class="food-image">
                                <img src="{{$category->image_url}}">
                              </div>
                      </div>
                      
                    </a>
                    @endforeach
                        
              </div>        
            </div>
      </div>
      
    </section>
@endsection

<script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
