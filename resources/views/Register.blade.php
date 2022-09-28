<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Research System</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>


                <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-dark bg-light">
 
  <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white bg-dark  text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a> 
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li> <a class="nav-link" href="{{ url('/') }}">Home</a></li>
        <li> <a class="nav-link" href="{{ url('/about_us') }}" >About</a></li>
        <li> <a class="nav-link" href="{{ url('/user_page') }}" >Users</a></li>
        <li> <a class="nav-link" href="{{ url('/projects_done') }}" >Projects</a></li>
        <li> <a class="nav-link" href="{{ url('/login_page') }}" >Login</a></li>
        <li> <a class="nav-link" href="{{ url('/register_here') }}" >Register</a></li>
                </div>

                

                
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5 my-lg-5 py-lg-5">

<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">
</div>

                <div class="col-md-9 col-lg-6 col-xl-6 offset-xl-1 my-lg-5 py-lg-5">

                  <p class="text-center h2 fw-bold mb-5 mt-4">Register</p>

                  <form>

                  <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" class="form-control"id="name" placeholder="Enter Full Name">
                      <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68.8px;"></div><div class="form-notch-trailing"></div></div></div>
                    </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" class="form-control"id="Reg No" placeholder="Enter Reg No">
                      <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68.8px;"></div><div class="form-notch-trailing"></div></div></div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="email" id="form3Example3c" class="form-control"id="email" placeholder="Enter Email">
                      <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68.8px;"></div><div class="form-notch-trailing"></div></div></div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" class="form-control"id="pwd" placeholder="Enter Password">
                      <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 64.8px;"></div><div class="form-notch-trailing"></div></div></div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" class="form-control"id="rpt pwd" placeholder="Confirm Password">
                      <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 134.4px;"></div><div class="form-notch-trailing"></div></div></div>
                    </div>

                    <div class="form-check d-flex justify-content-center mb-5">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c">
                      <label class="form-check-label" for="form2Example3">
                        I agree all statements in <a href="#!">Terms of service</a>
                      </label>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-sm-4">
                    <button type="button" class="btn btn-primary btn-sm" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                    
                    </div>
                    <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account <a class="link-danger" href="{{ url('/login_page') }}" >Login</a></p>

                  </form>

                
</div>
              
</div>
              </div>
           
            </div>
            
          </div>
          
        </div> 
             
    </body>
</html>
