<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
  </head>

  <body>
    
    <h1>Log in</h1>
    
    <form action="authenticate.php" method="post">
      <label for="usernameField">Username</label>
      <input type="text" id="usernameField" name="usernameField" placeholder="Username..">
      
      <label for="passwordField">Password</label>
      <input type="text" id="passwordField" name="passwordField" placeholder="Password..">
      
      <input type="reset" value="Reset">
      <input type="submit" value="Submit">
    </form>  

  </body>
</html>