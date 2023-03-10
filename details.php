<?php
  require_once 'db.php';

  if (isset($_POST['submit'])) {
    $countryName = $_POST['search'];

    $sql = 'SELECT * FROM people WHERE name = :searchedName';
    $stmt = $connection->prepare($sql);
    $stmt->execute(['searchedName' => $countryName]);
    $row = $stmt->fetch();
  } else {
    header('location: .');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-5 mx-auto">
        <div class="card shadow text-center">
          <div class="card-header">
            <h1><?= $row['name'] ?></h1>
          </div>
          <div class="card-body">
            <h4><b>email :</b> <?= $row['email'] ?></h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
// $(document).ready(function(){
//   $('h1').click(function(){
//     $('h4').hide();
//   });
// });
$(document).ready(function(){
  $("h1").click(function(){

    $('h4').hide();
    
  }
  );
});
</script>
</body>
</html>