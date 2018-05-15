<header>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <style>
  .navbar-custom {
      background-color: #ff5500;
  }
  /* change the brand and text color */
  .navbar-custom .navbar-brand,
  .navbar-custom .navbar-text {
      color: rgba(255,255,255,.8);
  }
  /* change the link color */
  .navbar-custom .navbar-nav .nav-link {
      color: rgba(255,255,255,.5);
  }
  /* change the color of active or hovered links */
  .navbar-custom .nav-item.active .nav-link,
  .navbar-custom .nav-item:hover .nav-link {
      color: #ffffff;
  }

  </style>

</header>
<body style="background-color: #FBEBAE">
  <br>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">College of Engineering Scholarship Database | Spring 2018</h5>


        <nav class="navbar navbar-expand-sm bg-dark navbar-dark rounded">
          <ul class="navbar-nav">
            <!-- <a class="navbar-brand" href="#">LSU</a> -->
            <li class="nav-item">
              <a class="nav-link" href="/nav.php">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Scholarship Records</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Awarding Process</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Reports</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Resopurces</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Maintain</a>
            </li>
          </ul>
        </nav>
        <br>
        <h6>Scholarship Records</h6>
        <hr>
        <div class="row">
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="">Scholarship Overview</a></li>
                <li class="list-group-item"><a href="">Recipient Info</a></li>
                <li class="list-group-item"><a href="">Donor Info</a></li>
                <li class="list-group-item"><a href="">Financial Data</a></li>
                <li class="list-group-item"><a href="/purple.php">Purple NavBar</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-8">
            <form class="" action="index.html" method="post">
              <table class="table table-bordered table-stripped">
                <tbody>
                  <tr>
                    <td><strong>Narrow Selections by Name:</strong></td>
                    <td><input type="text"></td>
                  </tr>
                  <tr>
                    <td><strong>Narrow Selections by TRX:</strong></td>
                    <td><input type="text"></td>
                  </tr>
                  <tr>
                    <td><strong>Active:</strong></td>
                    <td><select name="" id="">
                      <option value="">dsaa</option>
                      <option value=""></option>
                      <option value=""></option>
                    </select></td>
                  </tr>
                  <tr>
                    <td><strong>Select Scholarship:</strong></td>
                    <td><select name="" id="">
                      <option value="">dsaa</option>
                      <option value=""></option>
                      <option value=""></option>
                    </select></td>
                  </tr>
                  <tr></tr>
                </tbody>
              </table>
            </form>
            <p>Please select a scholarship from the list above to begin</p>


          </div>
        </div>
      </div>
    </div>
      </div>

</body>
