<!DOCTYPE html>
<html lang="en">
  <?php include 'config.php'?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
  integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <style>
    /* .banner{
      background:url('background.jpg.jpg');
      background-size: cover;
    } */
    .navbar {
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;

  }
  h1,
  p {
    color: #fff;
  }
  .jobs{
    border: 1px solid black;
    box-shadow: 5px 5px 4px 5px grey;
    margin: 10px;
    padding: 10px;
  }
  </style>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

  <title>career</title>
</head>


  <body style = "margin: 0; padding: 0;">
    <div class= "row mr-0">
      <div class = "col-12 container-fluid">
        <div class = "jumbotron jumbotron-fluid" style = "background-image: url('pop-zebra-2QE5yMcWrD4-unsplash.jpg'); background-size:cover;">
          <div class = "container">
            <h1 class = "display-4">Job Portal</h1>
            <p class = "lead">Best Jobs Available Matching Your Skills</p>
          </div>
        </div>
      </div> 
    </div>
    <div class = "row m-0">
      <?php
      $sql = "SELECT cname,position,Jdesc,CTC,skills from jobs";
      $result = mysqli_query($conn,$sql);
      if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
          echo'
          <div class= "col-md-4">
            <div class = "jobs">
            <h3 style= "text-align: center;">'.$rows['position'].'</h3>
            <h4 style= "text-align: center;">'.$rows['cname'].'</h4>
            <p style = "color: black; text-align:justify;">'.$rows['Jdesc'].'</p>
            <p style = "color: black;"><b>Skills Required:<b>'.$rows['skills'].'</p>
            <p style = "color: black;"><b>CTC:<b>'.$rows['CTC'].'</p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">  
              Apply Now
            </button>
            </div>
        </div>';
        }
      }
      else{
        echo "";
      }
      ?>
      <div class= "modal fade" id = "exampleModal" tabindex= "-1" aria-labelledby= "exampleModelLabel" aria-hidden= "true">
  <div class = "modal dialog">
    <div class = "modal content">
      <div class = "modal-header">
        <h5 class = "modal-title" id= "exampleModalLabel">Apply for Jobs</h5>
        <button type = "button" class= "btn-close" data-bs-dismiss= "modal" aria-label= "close">x</button>
      </div>
      <div class = "modal-body">
        <form method = "POST">
          <div class = "mb-3">
            <label for="recipient-name" class = "col-form-label">Name</label>
            <input type="text" name="form-control" name="name"> 
          </div>
          <div class = "mb-3">
            <label for="message-text" class = "col-form-label">Applying For</label>
            <input type="text" name="form-control" name="apply"> 
          </div>
          <div class = "mb-3">
            <label for="recipient-name" class = "col-form-label">Qualification</label>
            <input type="text" name="form-control" name="qual">  
          </div>
          <div class = "mb-3">
            <label for="recipient-name" class = "col-form-label">Year Passout</label>
            <input type="text" name="form-control" name="year">
          </div>
          <div class = "modal-footer">
            <button type="button" class = "btn btn-secondary" data-bs-dismiss = "modal">Close</button>
            <button type="submit" name = "submit" class= "btn btn-primary">Apply  </button>
          <!-- </div> -->  
            </form>
          </div>
        </div>
      </div>
    </div>
 </div>

<!-- <div class = "container-fluid">
  
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="  position: fixed;">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                  <a class="nav-link" href="#">Features</a>
                  <a class="nav-link" href="#">Pricing</a>
                  <a class="nav-link disabled">Disabled</a>
                </div>
              </div>  
            </div>
          </nav>
          <div>
            <img src="background.jpg.jpg" alt="" class="img-fluid" width="1900">
            
          </div>
</div> -->




<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>