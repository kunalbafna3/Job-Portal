<?php include 'header.php'?>

<!-- Page content -->
<div class="content">
    <br><br><br>
    <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
            aria-controls="collapseExample">
            Post Job
        </a>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <form>
                <div class="mb-3">
                    <label for="Company Name" class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="">
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