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
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{url('/careers')}}" aria-current="page">careers</a></li>
                    <li class="breadcrumb-item"><a class="breadcrumb-item active" aria-current="page">{{$careerItem['name']}}</a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <!-- 'name','category','place','Comments','About','Duties1' Requirement -->
<div class="careers">
      <div class="container">
        <div class="job-box">
          <h5 class="job-name font-weight-bold">{{$careerItem['name']}}</h5>
          <p class="department">{{$careerItem['category']}}</p>
          <p class="location">{{$careerItem['place']}}</p>
          <p class="comments">{{$careerItem['comments']}}</p>
        </div>
        <div class="job-det-box">
          <div class="details">
            <div class="det">
              <h5>About the Job</h5>
              <p>{!! $careerItem['About'] !!}</p>
            </div>
            <div class="det">
              <h5>Job Duties:</h5>
              {!! $careerItem['Duties'] !!}
            </div>
            <div class="det">
              <h5>Job Requirements</h5>
              {!! $careerItem['Requirement'] !!}
            </div>
          </div>
          <div class="form">
            <h4>fill this form to apply the job</h4>
            <form action="{{url('/careers/applay')}}" method="post" enctype="multipart/form-data">
            	@csrf
              <div class="form-group">
                <input class="form-control" id="exampleInputPassword1" name="name" type="text" placeholder="Enter Name *" required>
              </div>
              <div class="form-group">
                <input class="form-control" id="exampleInputPassword1" name="job_name" type="hidden" value="{{$careerItem['name']}}" >
              </div>
              <div class="form-group">
                <input class="form-control" id="exampleInputEmail1" name="email"  type="email" aria-describedby="emailHelp" placeholder="Enter email *" required><small class="form-text text-muted" id="emailHelp">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <input class="form-control" id="exampleInputPassword1" type="text" name="phone" placeholder="Enter phone *" required>
              </div>
              <div class="form-group">
                <label for="inputState">Gender</label>
                <select class="form-control custom-select" id="inputState" name="Gender" required>
                  <option selected value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>
              <div class="custom-file">
                <input class="untouched pristine" id="resume" id="upload_file" type="file" name="cv" title="Upload Resume/CV *" autocomplete="off" aria-required="true" aria-invalid="true" required>
                <label class="upload-btn" for="resume" title="Upload Resume/CV *"><i class="fa fa-cloud-upload" aria-hidden="true"></i><span>Upload Resume/CV *</span></label><span class="file-chosen" id="custom-Text"></span><small class="form-text text-muted" id="emailHelp">upload file of type pdf, docx only.</small>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" id="customCheck1" type="checkbox" required>
                <label class="custom-control-label" for="customCheck1"> Accept Terms & conditions</label>
              </div>
              <button class="btn btn-primary text-uppercase" type="submit">Submit application</button>
            </form>
          </div>
        </div>
      </div>
    </div>

   



@include('careers.footer')