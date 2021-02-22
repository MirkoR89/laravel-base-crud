<header>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-info mb-5">
        <a class="navbar-brand" href="{{ route('home') }}">The BLOG</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('blog') }}">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=" {{route('posts.index')}} ">Post</a>
            </li>
          </ul>
        </div>
      </nav>
  </div>
</header>
<main>
