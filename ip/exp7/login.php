<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $regex = '/[a-z0-9]+@[a-z0-9]+\.[a-z]{2,4}/i';

  if (empty($password) || !preg_match($regex, $email)) {
    echo "<script>alert('Invalid credentials');</script>";
  } else {
    header("Location: home.php");
    exit;
  }
}
?>
<html>

<body>
  <form id="form" action="" method="POST">
    Email: <input type="text" name="email" />
    <br />
    Password: <input type="password" name="password" />
    <br />
    Don't have an Account? <a href="signup.php">Signup</a> <br />
    <button type="submit" name="submit">Submit</button>
  </form>
</body>

</html>