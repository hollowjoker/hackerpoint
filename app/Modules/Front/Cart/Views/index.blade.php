@extends('layout.front.master')
@section('content')
<div class="main cart">
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>CART</h2>
          <table class="cart__table mt-60px">
            <thead>
              <td>Remove</td>
              <td>Image</td>
              <td>Name</td>
              <td>Unit Price</td>
              <td>Quantity</td>
              <td>Total</td>
            </thead>
            <tbody>
              <tr>
                <td>
                  <i class="material-icons">close</i>
                </td>
                <td>
                  <img class="cart__table--img" src="https://dummyimage.com/100x100/000/fff" alt="">
                </td>
                <td>
                  <p class="cart__table--name">Lorem Ipsum</p>
                </td>
                <td>
                  <p class="cart__table--price">&#8369; 300.00</p>
                </td>
                <td>
                  <input type="number" class="cart__table--qty" value="1">
                </td>
                <td>
                  <p class="cart__table--total">&#8369; 300.00</p>
                </td>
              </tr>
              <tr>
                <td>
                  <i class="material-icons">close</i>
                </td>
                <td>
                  <img class="cart__table--img" src="https://dummyimage.com/100x100/6efa23/000" alt="">
                </td>
                <td>
                  <p class="cart__table--name">Lorem Ipsum</p>
                </td>
                <td>
                  <p class="cart__table--price">&#8369; 200.00</p>
                </td>
                <td>
                  <input type="number" class="cart__table--qty" value="2">
                </td>
                <td>
                  <p class="cart__table--total">&#8369; 400.00</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row mt-30px justify-content-end">
        <div class="col-md-12 col-lg-6 text-right">
          <button class="btn--primary-bordered">Update Cart</button>
        </div>
      </div>
      <div class="row mt-30px justify-content-end">
        <div class="col-md-12 col-lg-6">
          <table class="cart__table">
            <tbody>
              <tr>
                <td class="no-border text-left">Subtotals</td>
                <td class="no-border text-right cart__table--total">&#8369; 500.00</td>
              </tr>
              <tr>
                <td class="no-border text-left">Total</td>
                <td class="no-border text-right cart__table--total">&#8369; 500.00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row mt-30px justify-content-end">
        <div class="col-md-12 col-lg-6">
          <input type="checkbox" name="credit-box" id="credit-box">
          <label for="credit-box"><span>Redeem your credits</span></label>
          <div class="credit-err txt-err d-flex align-items-center">
            <i class="material-icons">error</i>
            <span>You don't have enought credits. Credits are earned by purchasing products or services.</span>
          </div>
          <div class="credit-valid">
            <select name="creadit-choice" id="">
              <option value="1">600 credits (5% discount)</option>
              <option value="2">1000 credits (10% discount)</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row mt-30px justify-content-end">
        <div class="col-md-12 col-lg-6">
          <a href="/checkout" class="btn--primary-bordered">Proceed to Checkout</a>
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
