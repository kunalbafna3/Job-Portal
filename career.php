<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <style>
            .borderr{
                border: 1px solid black;
                margin: 25px;
                padding: 5px;
            }
        </style>
    <title>Career</title>
</head>

<body>
    <div style="background-color:#333; color:#fff;">
        <div style="padding-top:10px; padding-bottom:10px; padding-left:20px;">
            <h1>Job Portal</h1>
            <p>Best jobs available matching your skills.</p>
        </div>
    </div>
    </div>

    <div class="row">
    <?php

$sql="SELECT `cname`, `position`, `Jdesc`,`skills`,`CTC` FROM `jobs`";
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0){
    // output data of each row
    while($rows=$result->fetch_assoc()){ 
       echo '
       <div class="col-md-4 borderr">
       <div class="jobs">
       <h3 style="text-align:center;">'.$rows['position'].'</h3>
       <h4 style="text-align:center;">'.$rows['cname'].'</h4>
       <p style="color:black; text-align:justify;">'.$rows['Jdesc'].'</p>
       <p style="color:black;"><b>skills required: </b>'.$rows['skills'].'</p>
       <p style="color:black;"><b>CTC: </b>'.$rows['CTC'].'</p>
       <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModal" role="button" aria-expanded="false"
       aria-controls="collapseExample">
       Apply Now
        </a>
            </div>
        </div>';
}}
?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply for Jobs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For:</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification:</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year Passout:</label>
            <input type="text" class="form-control" name="year">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="applyFor" class="btn btn-primary">Apply</button>
      </div>
      </form>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>