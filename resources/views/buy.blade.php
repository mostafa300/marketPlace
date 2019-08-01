@include('nav')
 <div class="header">
      <div class="bd-example">
        <div class="carousel slide carousel-fade" id="carouselExampleCaptions" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active"> 
              <div class="internal-header-img">
                <div class="overlay"></div><img class="d-block w-100 internal-header-img-1" src="{{url('/')}}/design/assets/imgs/terms.jpg" alt="Slide-1">
              </div>
              <div class="carousel-caption d-md-block">
                <nav aria-label="breadcrumb"><span class="text-uppercase">how to buy</span>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a class="breadcrumb-item active" aria-current="page">how to buy</a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- start section who we are-->
    <div class="how_buy">
      <div class="container">
        <h4 class="text-center font-weight-bold text-uppercase">you can buy our product from any this places.</h4>
        <div class="buy-box jumia">
          <div class="row">
            <div class="col-lg-2 col-sm-3"><img src="{{url('/')}}/design/assets/imgs/jumia.png" alt=""></div>
            <div class="col-lg-10 col-sm-9">
              <div class="text">
                <h5>Jumia Store</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><a class="text-center jumia" href="#">
                  go to buy<i class="fa fa-cart-plus" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="buy-box souq">
          <div class="row">
            <div class="col-lg-2 col-sm-3"><img src="{{url('/')}}/design/assets/imgs/souq.png" alt=""></div>
            <div class="col-lg-10 col-sm-9">
              <div class="text">
                <h5>souq Store</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><a class="text-center souq" href="#">
                  go to buy<i class="fa fa-cart-plus" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="buy-box noon">
          <div class="row">
            <div class="col-lg-2 col-sm-3"><img src="{{url('/')}}/design/assets/imgs/noon.png" alt=""></div>
            <div class="col-lg-10 col-sm-9">
              <div class="text">
                <h5>noon Store</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><a class="text-center noon" href="#">
                  go to buy<i class="fa fa-cart-plus" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="buy-box facebook">
          <div class="row">
            <div class="col-lg-2 col-sm-3"><img src="{{url('/')}}/design/assets/imgs/facebook.png" alt=""></div>
            <div class="col-lg-10 col-sm-9">
              <div class="text">
                <h5>facebook page</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><a class="text-center facebook" href="#">
                  go to buy<i class="fa fa-cart-plus" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="buy-box office">
          <div class="row">
            <div class="col-lg-2 col-sm-3"><img src="{{url('/')}}/design/assets/imgs/office.png" alt=""></div>
            <div class="col-lg-10 col-sm-9">
              <div class="text">
                <h5>main office </h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><a class="text-center office" href="#">
                  go to buy<i class="fa fa-cart-plus" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@include('footer')