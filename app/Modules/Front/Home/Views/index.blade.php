@extends('layout.front.master')
@section('content')
  <main class="main">
    <section id="home" class="section section-home d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <h2><span class="txt-strong">HOME</span><span class="txt-light">Ipsum</span></h2>
            <h4>Sed ut ultrices purus, sed gravida quam. Vestibulum ornare sed metus eget pharetra. Integer sagittis ligula scelerisque, luctus arcu eget, consectetur turpis.</h4>
          </div>
        </div>
      </div>
    </section>
    <section id="about" class="section section-about d-flex align-items-center">
      <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <h2><span class="txt-strong">ABOUT</span><span class="txt-light">Us</span></h2>
              <p>Mauris vitae neque quis lacus sodales ultricies eget sed risus. Aliquam id justo ultrices, sagittis mi non, scelerisque diam. Suspendisse quis orci blandit, suscipit neque eu, varius nulla. Aenean a lorem eget augue efficitur tincidunt eget id quam. Donec libero dui, efficitur non ex eget, sollicitudin convallis tortor. </p>
              <p>Nulla sollicitudin eget ante et euismod. Duis sollicitudin hendrerit mauris, non mollis diam semper at. Nulla aliquam velit quis purus tincidunt, non porttitor quam varius. In ullamcorper pulvinar rutrum. Integer dignissim elit ac nisl interdum pulvinar.</p>
              <p>Vestibulum efficitur posuere luctus. Aenean pulvinar scelerisque sem, quis interdum libero pulvinar in. Phasellus ac augue in nibh sollicitudin laoreet. Sed in blandit augue, ac cursus ante. Etiam odio purus, accumsan nec mauris ut, viverra volutpat augue.</p>
            </div>
            <div class="col-lg-6">
              <img class="img-fluid shadowed" src="{{ URL::asset('/images/about.jpg') }}" alt="">
            </div>
          </div>
        </div>
    </section>
    <section id="prod" class="section section-shop d-flex align-items-center">
      <div class="container">
        <div class="row align-items-center position-relative">
          <div class="col-lg-5">
            <h2><span class="txt-strong">PRODUCTS</span></h2>
            <p>Cras dictum, tellus eget maximus sollicitudin, nisl quam facilisis tortor, at viverra odio quam eu purus. Aliquam posuere condimentum nulla, eget feugiat diam posuere et. Curabitur pretium sit amet est pellentesque posuere. Integer dui mauris, varius sit amet metus tincidunt, maximus dictum elit. Duis at cursus mauris, ut sodales nisi. Quisque et urna nec tortor eleifend pulvinar. Suspendisse varius nisl vel risus elementum, sit amet dignissim mi cursus.</p>
          </div>
          <div class="col-lg-7 position-relative ov-x-scroll">
            <div class="section-shop__grid d-flex">
              <div class="section-shop__grid-item position-relative">
                <img class="img-fluid" src="{{ URL::asset('/images/shop-feat/pr-1.jpg') }}" alt="">
                <div class="section-shop__grid-item-info d-flex align-items-center justify-content-center flex-column">
                  <h5><a href="/">Lorem Ipsum</a></h5>
                  <div class="section-shop__grid-item-controls">
                    <button class="btn--custom2 mr-5px">
                      <i class="material-icons">visibility</i>
                    </button>
                    <button class="btn--custom2">
                      <i class="material-icons">shopping_cart</i>
                    </button>
                  </div>
                  <div class="section-shop__grid-item-price">
                    <p>&#8369; 300.00 <span class="section-shop__grid-item-price-discount text-muted">&#8369; 550.00</span></p>
                  </div>
                  <div class="section-shop__grid-item-rating">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star_border</i>
                    <i class="material-icons">star_border</i>
                    <i class="material-icons">star_border</i>
                  </div>
                </div>
              </div>
              <div class="section-shop__grid-item position-relative">
                <img class="img-fluid" src="{{ URL::asset('/images/shop-feat/pr-2.jpg') }}" alt="">
                <div class="section-shop__grid-item-info d-flex align-items-center justify-content-center flex-column">
                  <h5><a href="/">Lorem Ipsum</a></h5>
                  <div class="section-shop__grid-item-controls">
                    <button class="btn--custom2 mr-5px">
                      <i class="material-icons">visibility</i>
                    </button>
                    <button class="btn--custom2">
                      <i class="material-icons">shopping_cart</i>
                    </button>
                  </div>
                  <div class="section-shop__grid-item-price">
                    <p>&#8369; 300.00 <span class="section-shop__grid-item-price-discount text-muted">&#8369; 550.00</span></p>
                  </div>
                  <div class="section-shop__grid-item-rating">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star_border</i>
                    <i class="material-icons">star_border</i>
                    <i class="material-icons">star_border</i>
                  </div>
                </div>
              </div>
              <div class="section-shop__grid-item position-relative">
                <img class="img-fluid" src="{{ URL::asset('/images/shop-feat/pr-3.jpg') }}" alt="">
                <div class="section-shop__grid-item-info d-flex align-items-center justify-content-center flex-column">
                  <h5><a href="/">Lorem Ipsum</a></h5>
                  <div class="section-shop__grid-item-controls">
                    <button class="btn--custom2 mr-5px">
                      <i class="material-icons">visibility</i>
                    </button>
                    <button class="btn--custom2">
                      <i class="material-icons">shopping_cart</i>
                    </button>
                  </div>
                  <div class="section-shop__grid-item-price">
                    <p>&#8369; 215.00 <span class="section-shop__grid-item-price-discount text-muted">&#8369; 680.00</span></p>
                  </div>
                  <div class="section-shop__grid-item-rating">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star_border</i>
                    <i class="material-icons">star_border</i>
                  </div>
                </div>
              </div>
              <div class="section-shop__grid-item position-relative">
                <img class="img-fluid" src="{{ URL::asset('/images/shop-feat/pr-4.jpg') }}" alt="">
                <div class="section-shop__grid-item-info d-flex align-items-center justify-content-center flex-column">
                  <h5><a href="/">Lorem Ipsum</a></h5>
                  <div class="section-shop__grid-item-controls">
                    <button class="btn--custom2 mr-5px">
                      <i class="material-icons">visibility</i>
                    </button>
                    <button class="btn--custom2">
                      <i class="material-icons">shopping_cart</i>
                    </button>
                  </div>
                  <div class="section-shop__grid-item-price">
                    <p>&#8369; 69.00 <span class="section-shop__grid-item-price-discount text-muted">&#8369; 450.00</span></p>
                  </div>
                  <div class="section-shop__grid-item-rating">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star_border</i>
                  </div>
                </div>
              </div>
              <div class="section-shop__grid-item position-relative">
                <img class="img-fluid" src="{{ URL::asset('/images/shop-feat/pr-5.jpg') }}" alt="">
                <div class="section-shop__grid-item-info d-flex align-items-center justify-content-center flex-column">
                  <h5><a href="/">Lorem Ipsum</a></h5>
                  <div class="section-shop__grid-item-controls">
                    <button class="btn--custom2 mr-5pxpx">
                      <i class="material-icons">visibility</i>
                    </button>
                    <button class="btn--custom2">
                      <i class="material-icons">shopping_cart</i>
                    </button>
                  </div>
                  <div class="section-shop__grid-item-price">
                    <p>&#8369; 910.00 <span class="section-shop__grid-item-price-discount text-muted">&#8369; 2500.00</span></p>
                  </div>
                  <div class="section-shop__grid-item-rating">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="srvcs" class="section section-srvcs">
      <div class="container">
        <div class="row align-items-center position-relative">
          <div class="col-lg-5">
            <h2><span class="txt-strong">SERVICES</span></h2>
            <p>Cras dictum, tellus eget maximus sollicitudin, nisl quam facilisis tortor, at viverra odio quam eu purus. Aliquam posuere condimentum nulla, eget feugiat diam posuere et. Curabitur pretium sit amet est pellentesque posuere. Integer dui mauris, varius sit amet metus tincidunt, maximus dictum elit. Duis at cursus mauris, ut sodales nisi. Quisque et urna nec tortor eleifend pulvinar. Suspendisse varius nisl vel risus elementum, sit amet dignissim mi cursus.</p>
          </div>
          <div class="col-lg-7 position-relative ov-x-scroll">
            <div class="section-shop__grid d-flex">
              <div class="section-shop__grid-item position-relative">
                <img class="img-fluid" src="{{ URL::asset('/images/shop-feat/sr-1.jpg') }}" alt="">
                <div class="section-shop__grid-item-info d-flex align-items-center justify-content-center flex-column">
                  <h5><a href="/">Lorem Ipsum</a></h5>
                  <div class="section-shop__grid-item-controls">
                    <button class="btn--custom2 mr-5px">
                      <i class="material-icons">visibility</i>
                    </button>
                    <button class="btn--custom2">
                      <i class="material-icons">shopping_cart</i>
                    </button>
                  </div>
                  <div class="section-shop__grid-item-price">
                    <p>&#8369; 300.00 <span class="section-shop__grid-item-price-discount text-muted">&#8369; 550.00</span></p>
                  </div>
                  <div class="section-shop__grid-item-rating">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star_border</i>
                    <i class="material-icons">star_border</i>
                    <i class="material-icons">star_border</i>
                  </div>
                </div>
              </div>
              <div class="section-shop__grid-item position-relative">
                <img class="img-fluid" src="{{ URL::asset('/images/shop-feat/sr-2.jpg') }}" alt="">
                <div class="section-shop__grid-item-info d-flex align-items-center justify-content-center flex-column">
                  <h5><a href="/">Lorem Ipsum</a></h5>
                  <div class="section-shop__grid-item-controls">
                    <button class="btn--custom2 mr-5px">
                      <i class="material-icons">visibility</i>
                    </button>
                    <button class="btn--custom2">
                      <i class="material-icons">shopping_cart</i>
                    </button>
                  </div>
                  <div class="section-shop__grid-item-price">
                    <p>&#8369; 300.00 <span class="section-shop__grid-item-price-discount text-muted">&#8369; 550.00</span></p>
                  </div>
                  <div class="section-shop__grid-item-rating">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star_border</i>
                    <i class="material-icons">star_border</i>
                    <i class="material-icons">star_border</i>
                  </div>
                </div>
              </div>
              <div class="section-shop__grid-item position-relative">
                <img class="img-fluid" src="{{ URL::asset('/images/shop-feat/sr-3.jpg') }}" alt="">
                <div class="section-shop__grid-item-info d-flex align-items-center justify-content-center flex-column">
                  <h5><a href="/">Lorem Ipsum</a></h5>
                  <div class="section-shop__grid-item-controls">
                    <button class="btn--custom2 mr-5px">
                      <i class="material-icons">visibility</i>
                    </button>
                    <button class="btn--custom2">
                      <i class="material-icons">shopping_cart</i>
                    </button>
                  </div>
                  <div class="section-shop__grid-item-price">
                    <p>&#8369; 215.00 <span class="section-shop__grid-item-price-discount text-muted">&#8369; 680.00</span></p>
                  </div>
                  <div class="section-shop__grid-item-rating">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star_border</i>
                    <i class="material-icons">star_border</i>
                  </div>
                </div>
              </div>
              <div class="section-shop__grid-item position-relative">
                <img class="img-fluid" src="{{ URL::asset('/images/shop-feat/sr-4.jpg') }}" alt="">
                <div class="section-shop__grid-item-info d-flex align-items-center justify-content-center flex-column">
                  <h5><a href="/">Lorem Ipsum</a></h5>
                  <div class="section-shop__grid-item-controls">
                    <button class="btn--custom2 mr-5px">
                      <i class="material-icons">visibility</i>
                    </button>
                    <button class="btn--custom2">
                      <i class="material-icons">shopping_cart</i>
                    </button>
                  </div>
                  <div class="section-shop__grid-item-price">
                    <p>&#8369; 69.00 <span class="section-shop__grid-item-price-discount text-muted">&#8369; 450.00</span></p>
                  </div>
                  <div class="section-shop__grid-item-rating">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star_border</i>
                  </div>
                </div>
              </div>
              <div class="section-shop__grid-item position-relative">
                <img class="img-fluid" src="{{ URL::asset('/images/shop-feat/sr-5.jpg') }}" alt="">
                <div class="section-shop__grid-item-info d-flex align-items-center justify-content-center flex-column">
                  <h5><a href="/">Lorem Ipsum</a></h5>
                  <div class="section-shop__grid-item-controls">
                    <button class="btn--custom2 mr-5pxpx">
                      <i class="material-icons">visibility</i>
                    </button>
                    <button class="btn--custom2">
                      <i class="material-icons">shopping_cart</i>
                    </button>
                  </div>
                  <div class="section-shop__grid-item-price">
                    <p>&#8369; 910.00 <span class="section-shop__grid-item-price-discount text-muted">&#8369; 2500.00</span></p>
                  </div>
                  <div class="section-shop__grid-item-rating">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="section section-contact">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2><span class="txt-strong">Contact</span><span class="txt-light">Us</span></h2>
            <p class="mw-800">Sed ut ultrices purus, sed gravida quam. Vestibulum ornare sed metus eget pharetra. Integer sagittis ligula scelerisque, luctus arcu eget, consectetur turpis.</p>
          </div>
        </div>
        <div class="row mt-60px">
          <div class="col-md-6">
            <div class="section-contact__info-wrapper mb-30">
              <h5>CONTACT INFORMATION</h5>
              <div class="section-contact__info d-flex align-items-center"><i class="material-icons mr-10px">email</i><span>hackdog@hello.ph</span></div>
              <div class="section-contact__info d-flex align-items-center"><i class="material-icons mr-10px">phone</i><span>+63 912 623 7886</span></div>
              <div class="section-contact__info d-flex align-items-center"><i class="material-icons mr-10px">place</i><span>903 Meadow Ln, Russellville, KY, 42276</span></div>
            </div>
            <div class="section-contact__info-wrapper mb-30">
              <h5>SOCIAL MEDIA</h5>
              <a href="/"><i class="fa-facebook fa mr-10px"></i></a>
              <a href="/"><i class="fa-twitter fa mr-10px"></i></a>
              <a href="/"><i class="fa-instagram fa mr-10px"></i></a>
            </div>
          </div>
          <div class="col-md-6">
            <h5>SAY HELLO</h5>
            <form action="">
              <div class="form-group">
                <input type="text" placeholder="Your name">
              </div>
              <div class="form-group">
                <input type="email" placeholder="Your email">
              </div>
              <div class="form-group">
                <textarea name="message" placeholder="Your message" rows="10"></textarea>
              </div>
            </form>
          </div>
        </div>
        <div class="row mt-60px copyright">
          <div class="col-12">
            <p>&copy; 2018 HACKDog</p>
          </div>
        </div>
      </div>
    </section>
  </main>
@stop