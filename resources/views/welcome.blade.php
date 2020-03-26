<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <section id="welcome">
      <div class="welcome-menu">
        <div class="logo">
            <img src="https://dlp2gfjvaz867.cloudfront.net/product_photos/61526322/file_d56099cedf_original.png">
        </div>
        <div class="menu">
          <div class="menu-title">
            Menu
          </div>
          <ul class="links">
            <li>
              <a href="#">Menu</a>
            </li>
            <li>
                <a href="#">Waitlist</a>
              </li>
              <li>
                  <a href="#">Giftcards</a>
                </li>
                <li>
                    <a href="#">Offers</a>
                  </li>
          </ul>
        </div>
        <div class="social-icons">
          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
        <div class="location">
          <div class="address">
              3121 hansell st,<br>
              Fort Worth, Texas 76117
          </div>
          <div class="phone-number">
            <a href="tel:(817)949-3636">(817) 949-3636</a>
          </div>
        </div>
      </div>
      <div class="welcome-jumbo">
        <div class="status">New</div>
        <h1>Noir Blend</h1>
        <img src="https://www.pngkey.com/png/full/800-8004133_kahla-cold-brew-black-russian.png" class="coffee-jumbo">
      </div>
    </section>
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
    </body>
</html>
