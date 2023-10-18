<!DOCTYPE html>
     <html>
     <head>
         <title>My_framework</title>
     </head>
     <body>
         <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
             <label for="login">Login:</label>
             <input type="text" id="login" name="login"><br>
             <label for="password">Password:</label>
             <input type="password" id="password" name="password"><br>
             <input type="submit" value="Submit">
         </form>
    
     <pre> 
        <?php
        echo "contenu de \$_POST:\n";
        print_r($_POST);
     

        echo "contenu de \$_GET:\n";
         print_r($_GET);
    

         echo "contenu de \$_SERVER:\n";
         print_r($_SERVER);
        ?>
    </pre>
     

     </body>
     </html>
