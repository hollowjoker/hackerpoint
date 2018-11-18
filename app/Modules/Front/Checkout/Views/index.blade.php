@extends('layout.front.master')
@section('content')
<div class="main checkout">
  <section class="section section-order-summary">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="order-summary-wrapper">
            <h2 class="text-center"><span class="txt-strong">ORDER</span><span class="txt-light">Summary</span></h2>
            <div class="row">
              <div class="col-12">
                <div class="order-summary-item">
                  <table class="cart__table">
                    <tbody>
                      <tr>
                        <td class="no-border text-left">Store</td>
                        <td class="no-border text-right cart__table--total">Store name</td>
                      </tr>
                      <tr>
                        <td class="no-border text-left text-muted">Items</td>
                      </tr>
                      <tr>
                        <td class="no-border text-left">Item1</td>
                        <td class="no-border text-right cart__table--total">&#8369; 500.00</td>
                      </tr>
                      <tr>
                        <td class="no-border text-left">Item2</td>
                        <td class="no-border text-right cart__table--total">&#8369; 500.00</td>
                      </tr>
                      <tr>
                        <td class="no-border text-left">Subtotal</td>
                        <td class="no-border text-right cart__table--total">&#8369; 1000.00</td>
                      </tr>
                      <tr>
                        <td class="no-border text-left">Discounts</td>
                        <td class="no-border text-right cart__table--total">&#8369; 50.00 (5% discount, 600 credits)</td>
                      </tr>
                      <tr>
                        <td class="no-border text-left">Total</td>
                        <td class="no-border text-right cart__table--total">&#8369; 950.00</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="row mt-30px">
                    <div class="col-md-12 col-lg-6">
                      <button class="btn--primary-bordered place-order-btn">Place order</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
          <p>&copy; 2018 HACKDog</p>
        </div>
      </div>
    </div>
  </section>
</div>
@stop
