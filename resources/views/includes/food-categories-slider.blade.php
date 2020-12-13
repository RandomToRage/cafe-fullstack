<section id="food-preview">
      <h2>We have all the caffine you need!</h2>
      <div class="button-rounded">View Our Menu</div>
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

    <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>

    <script>
        let slides = $'sliding-system a.slide').length;
        let maxSlides;
        let moveTotal;
        let currentSlide = 0;

        $(window).resize(function(){
            currentSlide = 0;
            $('.sliding-system').css('transform', 'translate3d(-0%, 0, 0')
        })
        function desktopSlider(){
            if(a.matches){
                
            }
        }
    </script>