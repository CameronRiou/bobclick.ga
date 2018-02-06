<?php
  /* Log out process, unsets and destroys session variables */
  session_start();
  session_unset();
  session_destroy(); 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Error</title>
  </head>

  <!> <!> <!>

  <body>
      <div class="form">
          <p><?= 'You have been logged out!'; ?></p>
          <a href="https://bobclick.ga">
              <button class="button button-block">
                  Home
              </button>
          </a>
      </div>
    </body>
</html>
