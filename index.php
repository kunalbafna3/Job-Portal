<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="css\style.css">

    <title>Dashboard</title>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- The sidebar -->
        <div class="sidebar">
            <a class="active" href="#home">Jobs</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
        </div>

        <!-- Page content -->
        <div class="content">
            <br><br><br>
            <p>
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    Post Job
                </a>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <form>
                        <div class="mb-3">
                            <label for="Company Name" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id=""
                                >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPosition" class="form-label">Position</label>
                            <input type="text" class="form-control" id="exampleInputPosition">
                        </div>
                        <div class="mb-3">
                            <label for="JobDesc" class="form-label">Job Description</label>
                            <input type="text" class="form-control" id="JobDesc">
                        </div>
                        <div class="mb-3">
                            <label for="CTC" class="form-label">CTC</label>
                            <input type="text" class="form-control" id="CTC">
                        </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Comapny Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>TCS</td>
      <td>Software Engineer</td>
      <td>3.5 LPA</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Google</td>
      <td>Digital Marketing</td>
      <td>12 LPA</td>
    </tr>
  </tbody>
</table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>