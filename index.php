<?php
    function check(){
    
           $user_ag = $_SERVER['HTTP_USER_AGENT'];
           if(preg_match('/(Mobile|Android|Tablet|GoBrowser|[0-9]x[0-9]*|uZardWeb\/|Mini|Doris\/|Skyfire\/|iPhone|Fennec\/|Maemo|Iris\/|CLDC\-|Mobi\/)/uis',$user_ag)){
            echo '<script type="text/javascript">
            alert("Mobil");
            </script>';
            if(strstr($_SERVER['HTTP_USER_AGENT'], 'Android')){
		
                preg_match('/Android (\d+)\.(\d+)/', $_SERVER['HTTP_USER_AGENT'], $matches);
        
                echo '<script> alert("Android'.strstr($_SERVER['HTTP_USER_AGENT'], 'Android').'")</script>';
        
            };
           }
           else {
           echo ' <script type="text/javascript">
            alert("Desktop");
            </script>';
           };
        };
       
    
    
?>

<!DOCTYPE html>
<html>
<body style="text-align:center;">
     

    <?php
        if(array_key_exists('button1', $_POST)) {
            check();
        }

    ?>
 
    <form method="post">
        <input type="submit" name="button1"
                class="button" value="Afiseaza tipul" />
        
    </form>
</body>
 
</html>
