@include('includes.header')

<div id="fh5co-testimonial">
  <div class="container">
      <div class="row">
          <div class="row animate-box">
              <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                  <span>Congratulations!</span>
                  <h2>You are already in the event!</h2>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12 animate-box">
                  <div class="wrap-testimony">
                      <div class="table-responsive">
                          <table class="table table-bordered">
                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Submitted at</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach($users as $user)
                                      <tr>
                                          <td>{{ $user->name }}</td>
                                          <td>{{ $user->email }}</td>
                                          <td>{{ $user->created_at->format('F j, Y g:ia') }}</td>
                                      </tr>
                                  @endforeach
                              </tbody>
                          </table>
                      </div>

                      <!-- Center-align the following content -->
                      <div class="text-center">
                          <p>Total number of participants: {{ $totalParticipants }}</p>

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