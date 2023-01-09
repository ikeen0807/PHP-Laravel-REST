<?php
$name = $age = '';
$nameErr = $ageErr = '';

if(isset($_POST['submit'])) {
    if (empty ($_POST['name'])) {
        $nameErr = 'Name is required';
    } else {
        $name = filter_input (
            INPUT_POST,

            'name',
            FILTER_SANITIZE_FULL_SPECIAL_CHARS
        );
    }
}

?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="mt-4 w-75">
  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" class="form-control" <?php echo !$nameErr ?: 'is-invalid'; ?> id="name" placeholder="Name" value="<?php echo $name; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="Age">Age</label>
      <input type="number" class="form-control" <?php echo !$ageErr ?: 'is-invalid'; ?> id="age" placeholder="Age" value ="<?php echo $name; ?>">
    </div>
  </div>
  <button type="submit" name="submit" value="Send" class="btn btn-dark w-100">Sign in</button>
</form>