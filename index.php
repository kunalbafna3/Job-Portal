<?php include 'config.php'?>
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
            <form method="POST">
                <div class="mb-3">
                    <label for="Company Name" class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="" name="cname">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPosition" class="form-label">Position</label>
                    <input type="text" class="form-control" id="exampleInputPosition" name="pos">
                </div>
                <div class="mb-3">
                    <label for="JobDesc" class="form-label">Job Description</label>
                    <input type="text" class="form-control" id="JobDesc" name="Jdesc">
                </div>
                <div class="mb-3">
                    <label for="Skills" class="form-label">Skills Required</label>
                    <input type="text" class="form-control" id="skills" name="skills">
                </div>
                <div class="mb-3">
                    <label for="CTC" class="form-label">CTC</label>
                    <input type="text" class="form-control" id="CTC" name="CTC">
                </div>
                <button type="submit" class="btn btn-primary" name="job">Submit</button>
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
        
            <?php

                $sql="SELECT `cname`, `position`,`CTC` FROM 'jobs'";
                $result = mysqli_query($conn,$sql);
                $i=0;
                if($result->num_rows>0){
                    // output data of each row
                    while($rows=$result->fetch_assoc()){ 
                        echo "
                        <tbody>
                        <tr>
                        <td>".++$i."</td>
                        <td>".$rows['cname']."</td>
                        <td>".$rows['position']."</td>
                        <td>".$rows['CTC']."</td>
                        </tr>";
                }} else{
                    echo "";
                }
            ?>
        </tbody>
    </table>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>
</body>

</html>