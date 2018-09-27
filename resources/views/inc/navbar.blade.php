<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
      <a class="navbar-brand" href="#">{{config('app.name')}}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li>
            <a class="nav-link" href="/lsapp/public/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/lsapp/public/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/lsapp/public/services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/lsapp/public/post">Blog</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/lsapp/public/post/create">Create Post</a></li>
        </ul>

      </div>
    </nav>