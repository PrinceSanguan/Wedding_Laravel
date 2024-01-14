@include('includes.header')

<div id="fh5co-testimonial">
  <div class="container">
      <div class="row">
          <div class="row animate-box">
              <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                  <span>ERROR!! The email address you use is already taken!</span>
                  <h2>Please use different email address</h2>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12 animate-box">
                  <div class="wrap-testimony">
                      <div class="text-center">
                          <!-- Add a button to go back to the homepage -->
                          <a href="{{ route('welcome') }}" class="btn btn-primary">Go Back to Homepage</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@include('includes.footer')