<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<script>
  $(document).ready(function(){
    $('#search').keyup(function(){
      var yyy = $('#search').val();
      $.ajax({
        url: 'search.php',
        data: {xxx:yyy},
        type: 'POST',
        success: function(data){
          if(!data.error){
            $('#result').html(data);
          }
        }
      });
    });
  });
</script>

<div id="container" class=" col-xs-6 col-xs-offset-3 text-center">
  <div class="row">
    <h2>Search Our Database</h2>
    <input class="form-control" type="text" name="search" id="search" placeholder="Search our inventory">
    <br>
    <br>
    <h2 class="bg-success" id="result"></h2>
  </div>
  <div class="row">
    <form action="" method="">
      <div class="form-group">
        <input class="form-control" type="text" name="car_name">
      </div>
      <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Add Car">
      </div>
    </form>
  </div>
</div>

</body>
</html>
