<?php include 'header.php'?>

<!-- Page content -->
<div class="content">
  <p>
    <p>
      <!-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Link with href
      </a> -->
      <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Post Jobs
      </button>
    </p>
    <div class="collapse" id="collapseExample">
      <div class="card card-body">
        <form action = ""method="POST">
          <div class="mb-3">
            <label for="company Name" class="form-label">company Name</label>
            <input type="text" class="form-control" id=""name = "name" >
           
          </div>
          <div class="mb-3">
            <label for="exampleInputPosition" class="form-label">position</label>
            <input type="text" class="form-control" id="exampleInputPosition" name = "pos">
            <div class="mb-3">
            <label for="JobDesc" class="form-label">Job Description</label>
            <<textarea name="" id= "" cols="30" rows = "10" class="form-control" name="jdesc"></textarea>>
          </div>
            <div class="mb-3">
            <label for="skills" class="form-label">skills Required</label>
            <input type="text" class="form-control" id="skills" name = "skills">
          </div>
          <div class="mb-3">
            <label for="CTC" class="form-label">CTC</label>
            <input type="text" class="form-control" id="CTC" name = "CTC">
          </div>
          <button type="submit" class="btn btn-primary" name = "job">Submit</button>
        </form>
      </div>
    </div>
  </p>  
</div>

<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>TCS</td>
      <td>Software Developer</td>
      <td>8LPA</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Google</td>
      <td>Digital Marketing</td>
      <td>12LPA</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Amazon</td>
      <td>Marketing</td>
      <td>8LPA</td>
    </tr>
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>