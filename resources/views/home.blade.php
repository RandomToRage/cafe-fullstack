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
                  <div class="slide">
                      <div class="background"></div>
                      <div class="content">
                          <div class="food-title">
                              Espresso
                            </div>
                            <p class="food-description">
                                But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.
                              </p>
                              <div class="food-image">
                                <img src="https://i.ya-webdesign.com/images/cup-transparent-espresso-4.webp">
                              </div>
                      </div>
                      
                    </div>
                    <div class="slide">
                        <div class="background"></div>
                        <div class="content">
                            <div class="food-title">
                                Espresso
                              </div>
                              <p class="food-description">
                                  But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.
                                </p>
                                <div class="food-image">
                                  <img src="https://i.ya-webdesign.com/images/cup-transparent-espresso-4.webp">
                                </div>
                        </div>
                        
                      </div>
                      <div class="slide">
                          <div class="background"></div>
                          <div class="content">
                              <div class="food-title">
                                  Espresso
                                </div>
                                <p class="food-description">
                                    But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.
                                  </p>
                                  <div class="food-image">
                                    <img src="https://i.ya-webdesign.com/images/cup-transparent-espresso-4.webp">
                                  </div>
                          </div>
                          
                        </div>
                    <div class="slide">
                        <div class="background"></div>
                        <div class="content">
                            <div class="food-title">
                                Coffee
                              </div>
                              <p class="food-description">
                                  But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.
                                </p>
                                <div class="food-image">
                                  <img src="https://www.jing.fm/clipimg/full/36-361034_black-clipart-coffee-transparent-background-coffee-cup-png.png">
                                </div>
                        </div>
                        
                        
                      </div>
                      <div class="slide">
                          <div class="background"></div>
                          <div class="content">
                              <div class="food-title">
                                  Beans
                                </div>
                                <p class="food-description">
                                    But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.
                                  </p>
                                  <div class="food-image">
                                    <img src="https://hayescanteen.com/wp-content/uploads/2017/06/coffee_bags.png">
                                  </div>
                          </div>
                          
                        </div>
                      <div class="slide">
                          <div class="background"></div>
                          <div class="content">
                              <div class="food-title">
                                  The Tea
                                </div>
                                <p class="food-description">
                                    But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.
                                  </p>
                                  <div class="food-image">
                                    <img src="https://pngriver.com/wp-content/uploads/2018/04/Download-Iced-Tea-PNG-Transparent.png">
                                  </div>
                          </div>
                          
                        </div>
                        <div class="slide">
                            <div class="background"></div>
                            <div class="content">
                                <div class="food-title">
                                   Good Eats
                                  </div>
                                  <p class="food-description">
                                      But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.
                                    </p>
                                    <div class="food-image">
                                      <img src="https://pngimg.com/uploads/burger_sandwich/burger_sandwich_PNG4150.png">
                                    </div>
                            </div>
                            
                          </div>
              </div>
              
                    
            </div>
      </div>
      
    </section>
@endsection
