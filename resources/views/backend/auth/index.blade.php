@extends('backend.login-layout')

@section('more-style')
    <style>
      .card .card-body {
      padding-top: 20px;
      padding-bottom: 20px;
      height: 380px;
      }
      .card .card-header {
      border-bottom-color: #f9f9f9;
      line-height: 30px;
      -ms-grid-row-align: center;
      align-self: center;
      width: 100%;
      min-height: 70px;
      padding: 15px 25px;
      display: flex;
      align-items: center;
      height: 90px;
      }
    </style>
@endsection

@section('content')
    <div class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-3 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
             <div class="login-brand">
              <img src="/images/logo.png" alt="logo" width="100" class="shadow-light">
            </div>
            
            
            
            <div class="card card-primary">
              <div class="card-header"><h3>Login</h3></div>
              <div class="card-body">
                    @if(\Session::has('wrong'))
                    <div class="alert alert-danger">
                    <strong>{{ \Session::get('wrong') }}</strong>
                    </div>
                    @endif

                    @if(\Session::has('success'))
                    <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                    </div>
                    @endif
                    
                <form method="POST" action="{{url()->current()}}" class="needs-validation" novalidate=""> 
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="users_id">
                    <div class="form-group">
                        <label for="email">Username</label>
                        <input id="email" type="text" class="form-control" name="email" tabindex="1" required autofocus>
                        <div class="invalid-feedback">
                        Please fill in your username
                        </div>
                    </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      {{-- <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
                        </a>
                      </div> --}}
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="auth-register.html">Create One</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@section('more-script')
    <script>
    </script>
@endsection