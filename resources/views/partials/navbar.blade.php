<nav class="navbar navbar-expand-lg bg-body-secondary">
  <div class="container">
  <a class="navbar-brand" href="/home">Putra Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{($title === "Home") ? 'active' : ''}}" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($title === "About") ? 'active' : ''}}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($title === "Post") ? 'active' : ''}}" href="/post">Blog</a>
        </li>
    </div>
  </div>
</nav>