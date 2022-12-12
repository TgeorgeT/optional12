<?php
    $useragents = array ( 
        'Blazer' ,
        'Palm' ,
        'Handspring' ,
        'Nokia' ,
        'Kyocera',
        'Samsung' ,
        'Motorola' ,
        'Smartphone', 
        'Windows CE' ,
        'Blackberry' ,
        'WAP' ,
        'SonyEricsson',
        'PlayStation Portable', 
        'LG', 
        'MMP',
        'OPWV',
        'Symbian',
        'EPOC',
        ); 
    
    function check(){
    
           $user_ag = $_SERVER['HTTP_USER_AGENT'];
           if(preg_match('/(Mobile|Android|Tablet|GoBrowser|[0-9]x[0-9]*|uZardWeb\/|Mini|Doris\/|Skyfire\/|iPhone|Fennec\/|Maemo|Iris\/|CLDC\-|Mobi\/)/uis',$user_ag)){
            echo '<script type="text/javascript">
            alert("Mobil");
            </script>';
            foreach ( $useragents as $useragents ) { 
            
               if ( $ismobile == 1 ) {
               echo "<p>mobile device</p>";
               echo $_SERVER['HTTP_USER_AGENT'];
               };}
            if($first=strstr($_SERVER['HTTP_USER_AGENT'], 'Android')){
                
                $a= strtok($first, ';)');
                echo '<script>alert("'.$a.'");</script>';
                
        
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
