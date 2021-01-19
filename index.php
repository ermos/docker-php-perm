<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
          <?php
            echo exec('whoami');
            touch('people.txt');
        ?>
    </body>
</html>
