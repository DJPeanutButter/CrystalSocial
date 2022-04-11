<!DocType HTML>
<html>
  <head>
    <title>Register</title>
    <link rel="stylesheet" src="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <from action="createAccount.php" onchange="validate(this)">
      <label for="user">Username</label>
      <input type="text" name="user" id="user">
      <br>
      <label for="email">Email</label>
      <input type="email" name="email" id="email">
      <br>
      <label for="pass">Password</label>
      <input type="password" name="pass" id="pass">
      <br>
      <label for="conf">Confirm</label>
      <input type="password" name="conf" id="conf">
      <br>
      <input type="submit" id="submit" value="Submit">
    </from>
  </body>
</html>