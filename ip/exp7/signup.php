<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $regex = '/[a-z0-9]+@[a-z0-9]+\.[a-z]{2,4}/i';

  if (empty($name) || empty($password) || !preg_match($regex, $email)) {
    echo '<script>alert("Invalid credentials");</script>';
  } else {
    header('Location: home.php');
    exit;
  }
}
?>
<html>

<body>
  <form id="form" action="" method="POST">
    name: <input type="text" name="name" />
    <br />
    email: <input type="text" name="email" />
    <br />
    Password: <input type="password" name="password" />
    <br />
    Already have an account <a href="login.php">Login</a><br />
    <button type="submit">Submit</button>
  </form>
</body>

</html>