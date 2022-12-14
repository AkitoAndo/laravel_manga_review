<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manga review</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/index"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ランキング</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">検索</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <h2>CreateManga</h2>
      <form action="/create" method="post">
        @csrf
        <div>
          <label for="name"> Manga name </label>
          <input
            type="text"
            name="name"
            id="name"
            placeholder="name"
            required=""
          />
        </div>
        <div>
          <label for="author"> Author name </label>
          <input
            type="text"
            name="author"
            id="author"
            placeholder="author"
            required=""
          />
        </div>
        <div>
          <label for="publisher"> Publisher name </label>
          <input
            type="text"
            name="publisher"
            id="publisher"
            placeholder="publisher"
            required=""
          />
        </div>
        <div>
          <label for="description"> description </label>
          <input
            type="text"
            name="description"
            id="description"
            placeholder="description"
            required=""
          />
        </div>
        <div class="button-form">
          <button class="btn btn-outline-dark" type="submit">Submit</button>
        </div>
      </form>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
