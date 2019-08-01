@include('nav')

        <!-- Products Section        -->
    <div class="products">
      <div class="container">
        <div class="search-products">
          <form method="post" action="{{url('/findproduct')}}">
            <input type="text" placeholder="Search products" name="Search">
            <button> <img src="{{url('/')}}/design/assets/imgs/search.svg" alt=""></button>
          </form>
        </div>
        <div class="shuffle-btns-content">
          <ul class="nav nav-pills nav-fill shuffle">
            <div class="row">
              <div class="col-md-2">
                <li class="selected filter nav-item text-uppercase" data-filter="all">All</li>
              </div>
              @foreach ($Category as $Category)
              <div class="col-md-2"> 
                <li class="filter nav-item text-uppercase" data-filter=".{{$Category->name}}">{{$Category->name}} </li>
              </div>
              @endforeach 
             
              
            </div>
          </ul>
        </div>
        <div class="row" id="Container">
          @php
          $i=0;
          @endphp
          @foreach ($products as $products)
          <div class="col-lg-4 col-md-6 col-sm-12 mix {{$products->prand_id}}">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="{{ Voyager::image($products->photot1) }}" alt="product image"></div>
              <div class="product-details-overlay">
                <div class="product-name">
                  <h5>{{$products->name}}</h5>
                  <p>{{$products->short_description}}</p>
                </div>
                <div class="product-details">
                  <!-- Modal for details-->
                  <div class="product-details-btn"><span>
                    <a href="#" data-toggle="modal" data-target="#largeModal{{ $i}}"><img src=""/> show details </a>
                    <i class="fa fa-long-arrow-right">  </i></span></div>

       <div class="modal fade" id="largeModal{{ $i }}" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <!-- <h4 class="modal-title" id="myModalLabel"></h4> -->
      </div>
      <div class="modal-body">
        <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="product-img">
                  <div class="carousel slide" id="carouselExampleControls" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active"><img class="d-block w-100" src="{{ Voyager::image($products->photot1) }}" alt="First slide"></div>
                      <div class="carousel-item"><img class="d-block w-100" src="{{ Voyager::image($products->photot1) }}" alt="Second slide"></div>
                      <div class="carousel-item"><img class="d-block w-100" src="{{ Voyager::image($products->photot2) }}" alt="Third slide"></div>
                      <div class="carousel-item"><img class="d-block w-100" src="{{ Voyager::image($products->photot3) }}" alt="Third slide"></div>
                      
                    </div><a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="product-info">
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">Type <span>{{$products->category_id}}</span></li>

                                     @php
                                      $sel_prand= \App\Prands::where ('name','=',$products->prand_id)->first();
                                      @endphp

                    <li class="list-group-item d-flex justify-content-between align-items-center">Brand <span><img src="{{ Voyager::image($sel_prand->photo) }}" alt="aaa"></span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">Colors <span class="color gold">Gold</span><span class="color purple">Purple</span><span class="color red">Red</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">SKU <span class="sku">{{$products->SKU}}</span></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-12">
                <div class="product-desc">
                  <h6>Description</h6>
                  <p>{{$products->long_description}}</p>
                </div>
              </div>
            </div>
          </div>
      </div>

@include('footer')