<!DocType HTML>
<html>
  <head>
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
    <script>
      let arrUsers  = <?/*
                         * TODO: query DB for usernames and return as json array
                         * https://github.com/DJPeanutButter/CrystalSocial/issues/1
                         */?>["Jonny", "JawKnee"]; // for debugging
      let arrEmails = <?/*
                         * TODO: query DB for emails and return as json array
                         * https://github.com/DJPeanutButter/CrystalSocial/issues/1
                         */?>["abc@def.com","asd@fgh.jkl"]; // for debugging
    </script>
  </head>
  <body>
    <form action="createAccount.php" onchange="validate(this)">
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
          <td><label for="emailAlerts">Send me email notifications</label></td>
          <td><input type="checkbox" id="emailAlerts" name="emailAlerts" checked></td>
          <td><span id="feedback-email-alerts">Get notified of messages, tags, hot posts and more</span></td>
        </tr>
        <tr>
          <td><label for="coder">Make me a coder!</label></td>
          <td><input type="chekcbox" id="coder" name="coder"></td>
          <td><span id="feedback-coder">Get set up to contribute to our CrystalSocial repo</span></td>
        </tr>
        <tr>
          <td><label for="designer">Make me a designer!</label></td>
          <td><input type="checkbox" id="designer" name="designer"></td>
          <td><span id="feedback-designer">Help us with the UX aspects of the CrystalSocial project</span></td>
        </tr>
        <tr>
          <td><label for="contentCreator">Make me a content creator!</label></td>
          <td><input type="checkbox" id="contentCreator" name="contentCreator"></td>
          <td><span id="feedback-content-creator">Content Creators add posts to keep the community enganged</span></td>
        </tr>
        <tr>
          <td><label for="wikiCreator">Make me a CrystalWiki creator!</label></td>
          <td><input type="checkbox" id="wikiCreator" name="wikiCreator"></td>
          <td><span id="feedback-wiki-creator">Contribute to the ever-expanding knowledge</span></td>
        </tr>
        <tr>
          <td><input type="submit" id="submit" value="Submit"></td>
        </tr>
      </table>
    </form>
  </body>
</html>