
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Image Gallary using Seeders(Models)</title>


    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/album/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>

  <body>
  @foreach($users as $user)
     
        
   
     @endforeach

                                                                    
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg"src="{{asset('/images/watermarks').'/'.$user->image_path}}" width="40" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Album</strong>
          </a>

        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Img Gallery</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>

        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
<a target="_blank" href="{{asset('/images/watermarks').'/'.$user->image_path}}">
            <img src="{{asset('/images/watermarks').'/'.$user->image_path}}" width="40" height="50">
</a>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
<a target="_blank" href="{{asset('/images/watermarks').'/'.$user->image_path}}">
            <img src="{{asset('/images/watermarks').'/'.$user->image_path}}" width="40" height="50">
</a>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">

            
            <a target="_blank" href="{{asset('/images/watermarks').'/'.$user->image_path}}">
              <img src="{{asset('/images/watermarks').'/'.$user->image_path}}" width="40" height="50">
</a>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">

                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
<a target="_blank" href="{{asset('/images/watermarks').'/'.$user->image_path}}">
            <img src="{{asset('/images/watermarks').'/'.$user->image_path}}" width="40" height="50">
</a>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
<a target="_blank" href="{{asset('/images/watermarks').'/'.$user->image_path}}">
            <img src="{{asset('/images/watermarks').'/'.$user->image_path}}" width="40" height="50">
</a>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
<a target="_blank" href="{{asset('/images/watermarks').'/'.$user->image_path}}">
            <img src="{{asset('/images/watermarks').'/'.$user->image_path}}" width="40" height="50">
</a>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">

                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
<a target="_blank" href="{{asset('/images/watermarks').'/'.$user->image_path}}">
            <img src="{{asset('/images/watermarks').'/'.$user->image_path}}" width="40" height="50">
</a>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
<a target="_blank" href="{{asset('/images/watermarks').'/'.$user->image_path}}">
            <img src="{{asset('/images/watermarks').'/'.$user->image_path}}" width="40" height="50">
</a>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
<a target="_blank" href="{{asset('/images/watermarks').'/'.$user->image_path}}">
            <img src="{{asset('/images/watermarks').'/'.$user->image_path}}" width="40" height="50">
</a>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>
    
    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
