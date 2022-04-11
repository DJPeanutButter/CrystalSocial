<!DocType HTML>
<html>
  <head>
    <title>Register</title>
    <link rel="stylesheet" src="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <from action="createAccount.php" onchange="validate(this)">
      <input type="text" name="user" id="user">
      <label for="user">Username</label>
      <input type="email" name="email" id="email">
      <label for="email">Email</label>
      <input type="password" name="pass" id="pass">
      <label for="pass">Password</label>
      <input type="password" name="conf" id="conf">
      <label for="conf">Confirm</label>
    </from>
  </body>
</html>