<!DocType HTML>
<html>
  <head>
    <title>Register</title>
    <link rel="stylesheet" src="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <from action="createAccount.php" onchange="validate(this)">
      <table>
        <tr>
          <td><label for="user">Username</label></td>
          <td><input type="text" name="user" id="user"></td>
          <td><span id="feedback-user">User name is already taken.</span></td>
        </tr>
        <tr>
          <td><label for="email">Email</label></td>
          <td><input type="email" name="email" id="email"></td>
          <td><span id="feedback-email">eMail has previously been used.</span></td>
        </tr>
        <tr>
          <td><label for="pass">Password</label></td>
          <td><input type="password" name="pass" id="pass"></td>
        </tr>
        <tr>
          <td><label for="conf">Confirm</label></td>
          <td><input type="password" name="conf" id="conf"></td>
          <td><span id="feedback-pass">Passwords do not match.</span></td>
        </tr>
        <tr>
          <td><input type="submit" id="submit" value="Submit"></td>
        </tr>
      </table>
    </from>
  </body>
</html>