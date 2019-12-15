<?php
const PWD = '135';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
 $pwd = $_GET['pwd'];
 $check = 0;
 if ($pwd != PWD) {
    redirect('index.html');
  }
} else {
  redirect('index.html');
}

function redirect($location) {
  header("Location: $location");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Secret Page</title>
</head>
<body>
  <main>
    <h6>If you see this than either you've got a password or we were hacked.</h6>
  </main>
</body>
</html>