

	
   
        <?php if($_POST["ADI"]=="b201210081@sakarya.edu.tr" && $_POST["PAROLA"]=="b201210081")
			{
        echo"Hoşgeldiniz ".$_POST["ADI"];
        echo"<br>Girişiniz onaylandı.";
            }
             else{
        echo "Girdiğiniz kullanıcı adı veya şifre hatalı.";
        header("refresh:3; login.html");
                 }    
        ?>
      
