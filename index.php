<?php
  $php = phpversion();

  $db = new PDO('mysql:dbname=movie_mayhem;host=localhost', 'root', 'root');
  $mysql = $db->getAttribute(PDO::ATTR_SERVER_VERSION);
  
  // Create a name variable
 
  
  // Create a class variable 
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>System Report</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-4 my-5">System Report</h1>
      </div>
    </div>
    <div class="row mb-4">
      <div class="col">
        <div class="card">
          <div class="card-header">
            Name
          </div>
          <div class="card-body">
            <div class="card-title"><!-- Output your name here --></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-header">
            Section
          </div>
          <div class="card-body">
            <div class="card-title"><!-- Output the section here --></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            PHP Version
          </div>
          <div class="card-body">
            <div class="card-title"><!-- Output the PHP version here --></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-header">
            MySQL Version
          </div>
          <div class="card-body">
            <div class="card-title"><!-- Output the MySQL versino here --></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>