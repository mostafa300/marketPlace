<!DOCTYPE html>
<html>
  <head>
    <title>El Tawheed Compnay</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('/')}}/design/assets/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,900&amp;display=swap">
    <link rel="shortcut icon" href="{{url('/')}}/design/assets/imgs/logo.png">
  </head>
  <body>
    <!-- Start Navbar Section-->
    <div class="navbar fixed-top navbar-expand-lg navbar-light">
      <div class="container"><a class="navbar-brand" href="index.html"><img src="{{url('/')}}/design/assets/imgs/logo.png" width="50" height="50" alt="Eltawheed logo"><span class="company-name"><span class="brand">El</span>tawheed</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item text-uppercase"><a class="nav-link" href="index.html" data-text="Home">Home</a></li>
            <li class="nav-item text-uppercase"><a class="nav-link" href="about.html" data-text="About Us">About Us</a></li>
            <li class="nav-item text-uppercase"><a class="nav-link" href="products.html" data-text="Products">Products</a></li>
            <li class="nav-item text-uppercase"><a class="nav-link" href="contact.html" data-text="Conatct Us">Conatct Us</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Navbar Section-->
    <div class="header">
      <div class="bd-example">
        <div class="carousel slide carousel-fade" id="carouselExampleCaptions" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active"> 
              <div class="internal-header-img">
                <div class="overlay"></div><img class="d-block w-100 internal-header-img-1" src="{{url('/')}}/design/assets/imgs/preview_002.jpg" alt="Slide-1">
              </div>
              <div class="carousel-caption d-md-block">
                <nav aria-label="breadcrumb"><span class="text-uppercase">Products</span>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a class="breadcrumb-item active" aria-current="page">Products</a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Products Section        -->
    <div class="products">
      <div class="container">
        <div class="search-products">
          <form>
            <input type="text" placeholder="Search products">
            <button> <img src="{{url('/')}}/design/assets/imgs/search.svg" alt=""></button>
          </form>
        </div>
        <form method="post" action="/products">
          @csrf
        <div class="shuffle-btns-content">
          <ul class="nav nav-pills nav-fill shuffle">
            <div class="row">
             <button class="filter nav-item text-uppercase" type="submit" name="all" value="all">all</button>
              
              @foreach ($Prands as $Prands)
              <div class="col-md-2"> 
                
                <button class="filter nav-item text-uppercase" type="submit" name="button" id="button" value="{{$Prands->name}}">{{$Prands->name}}</button>
                
              </div>
              @endforeach

            </div>
          </ul>
        </div>
        </form>
        @foreach ($products as $products)
        <div class="row" id="Container">
          <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="" alt="product image"></div>
              <div class="product-details-overlay">
                <div class="product-name">
                  <h5>{{$products->name}}</h5>
                  <p>{{$products->short_description}}</p>
                </div>
                <div class="product-details">
                  <!-- Modal for details-->
                  <div class="product-details-btn"><span><a class="text-uppercase" href="/" data-toggle="modal" data-target=".bd-example-modal-lg">See Details</a><i class="fa fa-long-arrow-right">  </i></span></div>
                  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> 
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Belkin Lightning Audio&Charge for iPhone7</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="product-img">
                                  <div class="carousel slide" id="carouselExampleControls" data-ride="carousel">
                                    <div class="carousel-inner">
                                      <div class="carousel-item active"><img class="d-block w-100" src="assets/imgs/category-1.jpg" alt="First slide"></div>
                                      <div class="carousel-item"><img class="d-block w-100" src="assets/imgs/category-2.jpg" alt="Second slide"></div>
                                      <div class="carousel-item"><img class="d-block w-100" src="assets/imgs/category-3.jpg" alt="Third slide"></div>
                                      <div class="carousel-item"><img class="d-block w-100" src="assets/imgs/category-4.jpg" alt="Third slide"></div>
                                      <div class="carousel-item"><img class="d-block w-100" src="assets/imgs/category-5.jpg" alt="Third slide"></div>
                                    </div><a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="product-info">
                                  <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">Type <span>Charger</span></li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">Brand <span><img src="assets/imgs/samsung.png" alt="aaa"></span></li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">Colors <span class="color gold">Gold</span><span class="color purple">Purple</span><span class="color red">Red</span></li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">SKU <span class="sku">BG950CB</span></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="product-desc">
                                  <h6>Description</h6>
                                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
       
         
         
        
        
      </div>
    </div>
    <!-- Footer Section-->
    <div class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg">
            <div class="footer-about-content">
              <p class="navbar-brand" href="index.html"><img src="{{url('/')}}/design/assets/imgs/logo.png" width="50" height="50" alt="Eltawheed logo"><span class="company-name"><span class="brand">El</span>tawheed</span></p>
              <div class="desc">
                <p>Lorem ipsum, dolor sit amet elit. Officia, a, illum quo officiis voluptate illo consectetur nisi expedita.</p>
              </div>
              <div class="footer-about-btn"><span><a href="about.html">Read More</a><i class="fa fa-long-arrow-right"></i></span></div>
            </div>
          </div>
          <div class="col-lg">
            <div class="footer-sevices-content">
              <div class="title">
                <h5>Customer Services</h5>
              </div>
              <div class="desc">
                <ul class="list-group">
                  <li class="list-group-item"><span><a href="Terms_of_use.html">Terms of use</a><i class="fa fa-long-arrow-right"></i></span></li>
                  <li class="list-group-item"><span><a href="how_to_buy.html">How to buy</a><i class="fa fa-long-arrow-right"></i></span></li>
                  <li class="list-group-item"><span><a href="b2b_orders.html">B2B Orders</a><i class="fa fa-long-arrow-right"></i></span></li>
                  <li class="list-group-item"><span><a href="careers.html">Careers</a><i class="fa fa-long-arrow-right"></i></span></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg">
            <div class="opening-hours-content">
              <div class="title">
                <h5>Opening Hours</h5>
              </div>
              <div class="desc">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Sunday to Thursday <i class="fa fa-arrow-right"></i> 9:00 AM - 6:00 PM</li>
                  <li class="list-group-item">friday and saturday <i class="fa fa-arrow-right"></i> Colsed</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg">
            <div class="contact-content">
              <div class="title">
                <h5>Contact Us</h5>
              </div>
              <div class="contact-info">
                <div class="place"><span><i class="fa fa-map-marker"></i><span>Levo Road Near Red Fort, U.S</span></span></div>
                <div class="phone"><span><i class="fa fa-phone"></i><span>012-12345678</span></span></div>
                <div class="email"><span><i class="fa fa-envelope"></i><span>example@eeltawheed.com</span></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Copyright-->
    <div class="copyrights text-center">
      <div class="container">
        <div class="row">
          <div class="col-md"><span>Copyright &copy; 2019, El Tawheed.</span></div>
        </div>
      </div>
    </div>
  </body>
  <script src="{{url('/')}}/design/src/js/vendors/jquery-3.2.1.js"></script>
  <script src="{{url('/')}}/design/assets/js/main.js"></script>
  <script src="{{url('/')}}/design/src/js/vendors/bootstrap.min.js"></script>
  <script src="{{url('/')}}/design/src/js/vendors/popper.min.js"></script>
  <script src="{{url('/')}}/design/src/js/vendors/jquery.min.js"></script>
  <script src="{{url('/')}}/design/src/js/vendors/jquery.bxslider.min.js"></script>
  <script src="{{url('/')}}/design/src/js/vendors/jquery.mixitup.js"></script>
</html>