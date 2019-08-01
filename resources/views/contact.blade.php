@include('nav')
    <!-- Contact Section-->
    <div class="mapSection"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.5887857313774!2d31.322283514441114!3d29.962504629395156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDU3JzQ1LjAiTiAzMcKwMTknMjguMSJF!5e0!3m2!1sen!2seg!4v1560210508875!5m2!1sen!2seg" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
    <div class="col-sm-12">
      <div class="formSection">
        <div class="container">
          <div class="fc-box">
            <div class="row">
              <div class="col-lg-6">
                <div class="formbox">
                  <h3 class="mb-5 ml-lg-1 ">We want to hear from you!</h3>
                  <form action="{{url('/contact/applay')}}" method="post" >
                    @csrf
                    <div class="form-group">
                      <div class="row"><!--  ['name','email', 'phone','subject','message' ] -->
                        <input class="form-control ml-lg-4 col-lg-5 mb-4 py-3 ml-sm-1 col-sm-11" type="text" placeholder="Name" required name="name">
                        <input class="form-control ml-lg-4 col-lg-5 mb-4 py-3 ml-sm-1 col-sm-11" type="email" placeholder="Email" required name="email">
                        <input class="form-control ml-lg-4 col-lg-5 mb-4 py-3 ml-sm-1 col-sm-11" type="text" placeholder="Phone" required name="phone">
                        <input class="form-control ml-lg-4 col-lg-5 mb-4 py-3 ml-sm-1 col-sm-11" type="text" placeholder="Subject" required name="subject">
                        <textarea class="form-control col-md-11 ml-lg-3 mb-4 py-3 ml-sm-1 col-sm-11" rows="6" placeholder="Enter your message here" required name="message"></textarea>
                        <input class="submit btn btn-primary col-lg-4 ml-lg-3 py-2 ml-sm-1 col-sm-11" type="submit" value="SUBMIT">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="contact-infobox">
                  <h3 class="font-weight-bold mb-5">Contact Information!</h3>
                  <div class="info">
                    <div class="det address"><i class="fa fa-map-marker"></i><span>1377 kornish Elnil st. midelle area - agakan <br> 3th floor <br> Elsahel, Egypt</span></div>
                    <div class="det phone"><i class="fa fa-mobile"></i><span>(877) 836-9530</span></div>
                    <div class="det mail"><i class="fa fa-envelope"></i><span>info@altawheed.com.eg</span></div>
                  </div>
                  <div class="social offset-lg-1"><a class="hvr-float-shadow" href="#"><i class="fa fa-facebook"></i></a><a class="hvr-float-shadow" href="#"><i class="fa fa-whatsapp"></i></a><a class="hvr-float-shadow" href="#"><i class="fa fa-twitter"></i></a><a class="hvr-float-shadow" href="#"><i class="fa fa-instagram"></i></a><a class="hvr-float-shadow" href="#"><i class="fa fa-linkedin"></i></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Section-->
@include('footer')