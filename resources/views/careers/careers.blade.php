

@include('careers.header')
<!-- End Navbar Section-->
    <div class="header">
      <div class="bd-example">
        <div class="carousel slide carousel-fade" id="carouselExampleCaptions" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active"> 
              <div class="internal-header-img">
                <div class="overlay"></div><img class="d-block w-100 internal-header-img-1" src="{{url('/')}}/design/assets/imgs/terms.jpg" alt="Slide-1">
              </div>
              <div class="carousel-caption d-md-block">
                <nav aria-label="breadcrumb"><span class="text-uppercase">join our team</span>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a class="breadcrumb-item active" aria-current="page">careers</a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- start section who we are-->
    <!-- 'name','category','place','Comments','About','Duties1' -->
    <div class="careers">
      <div class="container">
        <h4 class="text-center font-weight-bold">we are hiring, Explore New Career Opportunities. </h4>
        @foreach ($careerItems as $careerItems)
        <div class="job-box">
          <div class="row">
            <div class="col-lg-10 col-sm-8">
              <h5 class="job-name font-weight-bold">{{$careerItems->name}}</h5>
              <p class="department">{{$careerItems->category}}</p>
              <p class="location">{{$careerItems->place}}</p>
              {!! $careerItems->Comments !!}
            </div>
            <div class="col-lg-2 col-sm-4"><a class="hire text-center" href="{{url('/careers/'.$careerItems->id)}}">
                 <i class="fa fa-paper-plane" aria-hidden="true"></i>hiring now</a></div>
          </div>
      </div>
      @endforeach  
    </div>

  
@include('careers.footer')
