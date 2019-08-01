@include('nav')
    <!-- Start Header Section-->
    <div class="header">
      <div class="bd-example">
        <div class="carousel slide carousel-fade" id="carouselExampleCaptions" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active"> 
              <div class="overlay"></div><img class="d-block w-100" src="{{url('/')}}/design/assets/imgs/preview_006.jpg" alt="Slide-1">
              <div class="carousel-caption d-md-block">
                <h1 class="text-uppercase">First slide label </h1>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="overlay"></div><img class="d-block w-100" src="{{url('/')}}/design/assets/imgs/preview_004.jpg" alt="Slide-1">
              <div class="carousel-caption d-md-block">
                <h1 class="text-uppercase">second slide label</h1>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
            </div>
            <div class="carousel-item"><img class="d-block w-100" src="{{url('/')}}/design/assets/imgs/p4.jpg" alt="Slide-1"></div>
          </div><a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev"><i class="fa fa-long-arrow-left" aria-hidden="true"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next"><i class="fa fa-long-arrow-right" aria-hidden="true"></i><span class="sr-only">Next</span></a>
        </div>
      </div>
    </div>
    <!-- End Header Section-->
    <!-- START ABOUT US SECTION-->
    <div class="about-us">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="about-image"><img src="{{url('/')}}/design/assets/imgs/about-us.jpg" alt="About" dragable="false"></div>
          </div>
          <div class="col-lg-6">
            <div class="about-info container">
              <div class="about-heading">
                <div class="about-title">
                  <h2 class="text-uppercase">About Us</h2>
                </div>
                <div class="about-desc">
                  <p class="text-muted">who we are? </p>
                </div>
              </div>
              <!-- Slider content-->
              <div class="slider">
                <div class="slider-item">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet voluptate necessitatibus voluptatum consequuntur. Ipsa nesciunt harum molestiae, at distinctio voluptates accusamus culpa dolorum quasi vero ipsam odio fugiat natus aspernatur!</p>
                </div>
                <div class="slider-item">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet voluptate necessitatibus voluptatum consequuntur. Ipsa nesciunt harum molestiae, at distinctio voluptates accusamus culpa dolorum quasi vero ipsam odio fugiat natus aspernatur!</p>
                </div>
                <div class="slider-item">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet voluptate necessitatibus voluptatum consequuntur. Ipsa nesciunt harum molestiae, at distinctio voluptates accusamus culpa dolorum quasi vero ipsam odio fugiat natus aspernatur!</p>
                </div>
              </div>
              <div class="about-btn"><span><a class="text-uppercase" href="about.html">Read more</a><i class="fa fa-long-arrow-right"></i></span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END ABOUT US SECTION-->
    <!-- START OUR PRODUCTS SECTION-->
    <div class="our-products">
      <div class="container">
        <div class="our-products-heading text-center">
          <div class="our-products-title">
            <h2 class="text-uppercase">Products</h2>
          </div>
          <div class="our-products-desc">
            <p class="text-muted">Here're our most recent products </p>
          </div>
        </div>
       
        <div class="row">
           @foreach ($products as $products)
          <div class="col-lg-4">
            <div class="product-content">
<!--              {{url('/storage/'.$products->photot )}}  -->
              <div class="product-image"><img class="img-fluid" 
                src="{{ Voyager::image($products->photot1) }}" alt="product image"></div>
              <div class="box-shadow">
                <div class="product-brand"><span class="text-uppercase">{{$products->prand_id}}.</span></div>
                <div class="product-heading">
                  <h5> {{$products->short_description}}</h5>
                </div>
                <div class="product-desc">
                  <p class="text-muted">{{$products->long_description}}.</p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          </div>
        

        
        <div class="all-products-btn"><span><a class="text-uppercase" href="{{url('/products')}}">See all products</a><i class="fa fa-long-arrow-right"></i></span></div>
      </div>
    </div>
    <!-- END OUR PRODUCTS SECTION-->
    <!-- START CATEGORIES SECTION-->
    <div class="our-categories">
      <div class="container">
        <div class="our-categories-heading text-center">
          <div class="our-categories-title">
            <h2 class="text-uppercase">Categories</h2>
          </div>
          <div class="our-categories-desc">
            <p class="text-muted">Here're our most recent products </p>
          </div>
        </div>
        <div class="row">
          @foreach($categories as $categories)
          <div class="col-lg-4 col-md-6">
            <div class="our-categories-content">
              <div class="our-categories-image"><img class="img-fluid" src="{{ Voyager::image($categories->photo) }}" alt="our-categories image">
                <h3 class="text-center">{{$categories->name}}</h3><span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>
        <div class="all-our-categories-btn"><span><a class="text-uppercase" href="{{url('/categories')}}">Show all categories</a><i class="fa fa-long-arrow-right"></i></span></div>
      </div>
    </div>
    <!-- END CATEGORIES SECTION-->
    <!-- START TESTIMONIALS SECTION-->
    <div class="testimonials">
      <div class="testimonials-heading text-center">
        <div class="testimonials-title">
          <h2 class="text-uppercase">Feedbacks</h2>
        </div>
        <div class="testimonials-desc">
          <p class="text-muted">Here're some thoughts from cutomers</p>
        </div>
      </div>
      <div class="testim-content">
        <div class="carousel slide" id="testimonials" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="carousel-caption"><img src="{{ url('/storage/'. $Feedbacks[0]->photo) }}" alt="Person 1">
                <h5>{{$Feedbacks[0]->name}}</h5>
                <p>{{ $Feedbacks[0]->description}} </p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-caption"><img src="{{ url('/storage/'. $Feedbacks[1]->photo) }}" alt="Person 1">
                <h5>{{$Feedbacks[1]->name}}</h5>
                <p>{{$Feedbacks[1]->description}}</p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-caption"><img src="{{ url('/storage/'. $Feedbacks[2]->photo) }}" alt="Person 1">
                <h5>{{$Feedbacks[2]->name}}</h5>
                <p>{{$Feedbacks[2]->description}}</p>
              </div>
            </div>
          </div><a class="carousel-control-prev" href="#testimonials" role="button" data-slide="prev"><i class="fa fa-long-arrow-left" aria-hidden="true"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#testimonials" role="button" data-slide="next"><i class="fa fa-long-arrow-right" aria-hidden="true"></i><span class="sr-only">Next</span></a>
        </div>
      </div>
    </div>
    <!-- END TESTIMONIALS SECTION-->
    <!-- Loading screen-->
    <div class="loading-overlay">
      <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>
@include('footer')