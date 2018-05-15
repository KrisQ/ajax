<header>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        .navbar-custom {
              background-color: #4F197E;
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
          .btn-purple{
            background-color: #a45ae4;
            color: rgba(255,255,255,.8);
          }
    </style>
</header>

<body style="background-color: #FBEBAE">
    <br>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">College of Engineering Scholarship Database | Spring 2018</h5>
                <nav class="navbar navbar-expand-sm navbar-custom rounded">
                    <ul class="navbar-nav">
                        <!-- <a class="navbar-brand" href="#">LSU</a> -->
                        <li class="nav-item">
                            <a class="nav-link" href="/nav.php">Home</a>
                        </li>
                        <!-- <li class="nav-item "><a class="nav-link" href="#">Scholarship Records</a></li> -->
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Scholarship Records
              </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="">Scholarship Overview</a>
                                <a class="dropdown-item" href="">Recipient Info</a>
                                <a class="dropdown-item" href="">Donor Info</a>
                                <a class="dropdown-item" href="">Financial Data</a>
                                <a class="dropdown-item" href="/purple.php">Purple NavBar</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Awarding Process
              </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/ea.php">Eligible Applicants</a>
                                <a class="dropdown-item" href="">Student Records</a>
                                <a class="dropdown-item" href="">Nominating Committee Forms</a>
                                <a class="dropdown-item" href="">Edit Reviewers</a>
                                <a class="dropdown-item" href="/purple.php">Financial Code Table</a>
                                <a class="dropdown-item" href="/purple.php">Send Award Emails</a>

                            </div>
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
                    <div class="col-md-12">
                        <form class="" action="index.html" method="post">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td class="text-right" width="30%">
                                            <label for="name">
																<strong>Narrow Selections by Name:</strong>
															</label>
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" name="name" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right" width="30%">
                                            <label for="narow">
																	<strong>Narrow Selections by TRX:</strong>
																</label>
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" name="narrow" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            <label for="name">
																		<strong>Active:</strong>
																	</label>
                                        </td>
                                        <td>
                                            <select class="form-control">
																		<option>Default select</option>
																	</select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <input type="submit" class="btn btn-block btn-purple" name="" value="Limit Scholarship Selection">
                            <br>
                            <p class="text-center">- or -</p>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <td class="text-center" width="33%">
                                        <label for="name">
																			<strong>Select Scholarship:</strong>
																		</label>
                                    </td>
                                    <td width="33%">
                                        <select class="form-control">
																			<option>Default select</option>
																		</select>
                                    </td>
                                    <td width="33%">
                                        <input type="submit" class="btn btn-block btn-purple" name="" value="Submit">
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <p>Please select a scholarship from the list above to begin</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</body>
