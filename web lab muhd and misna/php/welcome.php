<html>
    <body>
    <h2>Welcome
        
        <?php 
        session_start();
        echo $_SESSION['name'];
        echo " From ";
        echo  $_SESSION['college'];
        
        
        ?>
        
        </h2>
        
    </body>
    
</html>