@extends('layout.front.master')
@section('content')
<div class="main shop">
    <section class="section section-shop-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>SHOP</h2>
          </div>
        </div>
        <div class="row mt-60px">
          <div class="col-md-3">
            <div class="shop-filter-wrapper">
              <div class="shop-filter">
                <div class="form-group">
                  <label for="category">Category</label>
                  <select class="form-control" name="category" id="category">
                    <option value="1">Product</option>
                    <option value="2">Service</option>
                  </select>
                </div>
              </div>
              <div class="shop-filter">
                <div class="form-group">
                  <label for="sort">Sort by</label>
                  <select class="form-control" name="sort" id="sort">
                    <option value="1">Price</option>
                    <option value="2">Rating</option>
                    <option value="3">Date added</option>
                  </select>
                </div>
              </div> 
            </div>
          </div>
          <div class="col-md-9">
            <div class="section-shop__grid d-flex flex-wrap">
              <div class="section-shop__grid-item position-relative mr-30px mb-30px">
                <img class="img-fluid" src="http://127.0.0.1:8000/images/shop-feat/pr-1.jpg" alt="">
                <div class="section-shop__grid-item-info d-flex align-items-center justify-content-center flex-column">
                  <h5>Lorem Ipsum</h5>
                  <div class="section-shop__grid-item-controls">
                    <button class="btn--custom2 mr-5px open-modal-view open-modal-view">
                      <i class="material-icons">visibility</i>
                    </button>
                    <button class="btn--custom2">
                      <i class="material-icons">shopping_cart</i>
                    </button>
                  </div>
                  <div class="section-shop__grid-item-price">
                    <p>₱ 300.00 <span class="section-shop__grid-item-price-discount txt-line-through font-italic text-muted">₱ 550.00</span></p>
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
              <div class="section-shop__grid-item position-relative mr-30px mb-30px">
                <img class="img-fluid" src="http://127.0.0.1:8000/images/shop-feat/pr-2.jpg" alt="">
                <div class="section-shop__grid-item-info d-flex align-items-center justify-content-center flex-column">
                  <h5>Lorem Ipsum</h5>
                  <div class="section-shop__grid-item-controls">
                    <button class="btn--custom2 mr-5px open-modal-view">
                      <i class="material-icons">visibility</i>
                    </button>
                    <button class="btn--custom2">
                      <i class="material-icons">shopping_cart</i>
                    </button>
                  </div>
                  <div class="section-shop__grid-item-price">
                    <p>₱ 300.00 <span class="section-shop__grid-item-price-discount txt-line-through font-italic text-muted">₱ 550.00</span></p>
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
              <div class="section-shop__grid-item position-relative mr-30px mb-30px">
                <img class="img-fluid" src="http://127.0.0.1:8000/images/shop-feat/pr-3.jpg" alt="">
                <div class="section-shop__grid-item-info d-flex align-items-center justify-content-center flex-column">
                  <h5>Lorem Ipsum</h5>
                  <div class="section-shop__grid-item-controls">
                    <button class="btn--custom2 mr-5px open-modal-view">
                      <i class="material-icons">visibility</i>
                    </button>
                    <button class="btn--custom2">
                      <i class="material-icons">shopping_cart</i>
                    </button>
                  </div>
                  <div class="section-shop__grid-item-price">
                    <p>₱ 215.00 <span class="section-shop__grid-item-price-discount txt-line-through font-italic text-muted">₱ 680.00</span></p>
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
              <div class="section-shop__grid-item position-relative mr-30px mb-30px">
                <img class="img-fluid" src="http://127.0.0.1:8000/images/shop-feat/pr-4.jpg" alt="">
                <div class="section-shop__grid-item-info d-flex align-items-center justify-content-center flex-column">
                  <h5>Lorem Ipsum</h5>
                  <div class="section-shop__grid-item-controls">
                    <button class="btn--custom2 mr-5px open-modal-view">
                      <i class="material-icons">visibility</i>
                    </button>
                    <button class="btn--custom2">
                      <i class="material-icons">shopping_cart</i>
                    </button>
                  </div>
                  <div class="section-shop__grid-item-price">
                    <p>₱ 69.00 <span class="section-shop__grid-item-price-discount txt-line-through font-italic text-muted">₱ 450.00</span></p>
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
              <div class="section-shop__grid-item position-relative mr-30px mb-30px">
                <img class="img-fluid" src="http://127.0.0.1:8000/images/shop-feat/pr-5.jpg" alt="">
                <div class="section-shop__grid-item-info d-flex align-items-center justify-content-center flex-column">
                  <h5>Lorem Ipsum</h5>
                  <div class="section-shop__grid-item-controls">
                    <button class="btn--custom2 mr-5px open-modal-view">
                      <i class="material-icons">visibility</i>
                    </button>
                    <button class="btn--custom2">
                      <i class="material-icons">shopping_cart</i>
                    </button>
                  </div>
                  <div class="section-shop__grid-item-price">
                    <p>₱ 910.00 <span class="section-shop__grid-item-price-discount txt-line-through font-italic text-muted">₱ 2500.00</span></p>
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
        <div class="row pagination--wrapper">
          <div class="col-12">
            <a href="/">1</a>
            <a href="/">2</a>
            <a href="/">3</a>
            <a href="/">4</a>
            <a href="/">5</a>
            <a href="/">6</a>
            <a href="/">7</a>
          </div>
        </div>
        <div class="shop-item__modal shadowed">
          <div class="close-btn"></div>
          <div class="row align-items-center">
            <div class="col-md-6">
              <img class="img-fluid" src="http://127.0.0.1:8000/images/shop-feat/pr-1.jpg">
            </div>
            <div class="col-md-6">
              <h4 class="shop-item__title">Lorem Ipsum</h4>
              <div class="shop-item__price">
                <p>₱ 300.00 <span class="section-shop__grid-item-price-discount txt-line-through font-italic text-muted">₱ 550.00</span></p>
              </div>
              <div class="shop-item__add-to-cart">
                <button class="btn--custom2">
                  <i class="material-icons">shopping_cart</i>
                </button>
              </div>
              <p class="shop-item__desc">Curabitur sit amet finibus mi. Proin auctor rutrum dui. Curabitur pretium molestie bibendum. Integer rhoncus semper nisi vitae varius. Ut auctor risus et convallis fringilla</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="section section-contact d-flex align-items-center">
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
              <div class="section-contact__info d-flex align-items-center"><i class="material-icons mr-10px">email</i><span>eatify@hello.ph</span></div>
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
          <div class="col-md-6 mt-md-30">
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
            <p>&copy; 2018 Eatify</p>
          </div>
        </div>
      </div>
    </section>
</div>
@stop