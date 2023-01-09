

<?php include 'inc/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>  
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<?php
$sql = 'SELECT * FROM kunden';
$result = mysqli_query($conn, $sql);
$kunden = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>


<div class="container pt-5">
        <div class="jumbotron bg-dark jumbotron-fluid border border-dark">
            <div class="container">
                    <h1 class="display-4 text-light text-center"><u>Bookings</u></h1>
                    <p class="lead text-center"><u></u></p>
            </div>
        </div>

    <hr>

    <h2>Past Bookings</h2>

    <?php if (empty($kunden)): ?>
        <p class ="lead mt-3"> There are no bookings</p>
    <?php endif; ?>
    
    <?php foreach ($kunden as $item): ?>
    <div class="list-group pt-2">
        <div class="mb-2 list-group-item bg-secondary list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
            </div>
            <p class="mb-1 text-light">Age:</p>
        </div>
    </div>
</div>

<?php endforeach; ?>
</body>
</html>

<?php include 'inc/footer.php'; ?>