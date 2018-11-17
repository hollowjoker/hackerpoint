@extends('layout.front.master')
@section('content')
  <main class="main">
    <section id="home" class="section section-home d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <h1><span class="txt-strong">HOME</span><span class="txt-light">Ipsum</span></h1>
            <h4>Sed ut ultrices purus, sed gravida quam. Vestibulum ornare sed metus eget pharetra. Integer sagittis ligula scelerisque, luctus arcu eget, consectetur turpis.</h4>
          </div>
        </div>
      </div>
    </section>
    <section id="about" class="section section-about d-flex align-items-center">
      <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <h1><span class="txt-strong">ABOUT</span><span class="txt-light">Us</span></h1>
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
    <section id="shop" class="section section-shop d-flex align-items-center">
      <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-lg-4">
              <h1><span class="txt-strong">SHOP</span></h1>
              <p>Cras dictum, tellus eget maximus sollicitudin, nisl quam facilisis tortor, at viverra odio quam eu purus. Aliquam posuere condimentum nulla, eget feugiat diam posuere et. Curabitur pretium sit amet est pellentesque posuere. Integer dui mauris, varius sit amet metus tincidunt, maximus dictum elit. Duis at cursus mauris, ut sodales nisi. Quisque et urna nec tortor eleifend pulvinar. Suspendisse varius nisl vel risus elementum, sit amet dignissim mi cursus.</p>
            </div>
          <div class="col-lg-8 position-relative ov-x-scroll">
              <div class="section-shop__grid d-flex">
                <div class="section-shop__grid-item position-relative">
                  <img class="img-fluid" src="{{ URL::asset('/images/shop-feat/pr-1.jpg') }}" alt="">
                  <div class="section-shop__grid-item-info d-flex align-items-center justify-content-center flex-column">
                    <h5>Lorem Ipsum</h5>
                    <div class="section-shop__grid-item-controls">
                      <button class="btn--custom2 mr-5px">
                        <i class="material-icons">visibility</i>
                      </button>
                      <button class="btn--custom2">
                        <i class="material-icons">shopping_cart</i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="section-shop__grid-item position-relative">
                  <img class="img-fluid" src="{{ URL::asset('/images/shop-feat/pr-2.jpg') }}" alt="">
                  <div class="section-shop__grid-item-info d-flex align-items-center justify-content-center flex-column">
                    <h5>Lorem Ipsum</h5>
                    <div class="section-shop__grid-item-controls">
                      <button class="btn--custom2 mr-5px">
                        <i class="material-icons">visibility</i>
                      </button>
                      <button class="btn--custom2">
                        <i class="material-icons">shopping_cart</i>
                      </button>
                    </div>
                    <div class="section-shop__grid-item-price">
                      <p>&#8369; 300.00 <span class="section-shop__grid-item-price"></span></p>
                    </div>
                  </div>
                </div>
                <div class="section-shop__grid-item position-relative">
                  <img class="img-fluid" src="{{ URL::asset('/images/shop-feat/pr-3.jpg') }}" alt="">
                  <div class="section-shop__grid-item-info d-flex align-items-center justify-content-center flex-column">
                    <h5>Lorem Ipsum</h5>
                    <div class="section-shop__grid-item-controls">
                      <button class="btn--custom2 mr-5px">
                        <i class="material-icons">visibility</i>
                      </button>
                      <button class="btn--custom2">
                        <i class="material-icons">shopping_cart</i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="section-shop__grid-item position-relative">
                  <img class="img-fluid" src="{{ URL::asset('/images/shop-feat/pr-4.jpg') }}" alt="">
                  <div class="section-shop__grid-item-info d-flex align-items-center justify-content-center flex-column">
                    <h5>Lorem Ipsum</h5>
                    <div class="section-shop__grid-item-controls">
                      <button class="btn--custom2 mr-5px">
                        <i class="material-icons">visibility</i>
                      </button>
                      <button class="btn--custom2">
                        <i class="material-icons">shopping_cart</i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="section-shop__grid-item position-relative">
                  <img class="img-fluid" src="{{ URL::asset('/images/shop-feat/pr-5.jpg') }}" alt="">
                  <div class="section-shop__grid-item-info d-flex align-items-center justify-content-center flex-column">
                    <h5>Lorem Ipsum</h5>
                    <div class="section-shop__grid-item-controls">
                      <button class="btn--custom2 mr-5pxpx">
                        <i class="material-icons">visibility</i>
                      </button>
                      <button class="btn--custom2">
                        <i class="material-icons">shopping_cart</i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
          
        </div>
      </div>
    </section>
    <section id="reviews" class="section section-reviews">reviews</section>
    <section id="contact" class="section section-contact">contact</section>
  </main>
@stop