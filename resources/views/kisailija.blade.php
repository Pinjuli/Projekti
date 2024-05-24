

<!DOCTYPE html>
<html lang="fin">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kirjaudu sisään</title>
</head>
<style>
body {   
    background-image: url(images/testitausta.jpg);  
    -webkit-background-size: cover;  
    -moz-background-size: cover;  
    -o-background-size: cover;  
    background-size: cover;  
    background-repeat: no-repeat;  
    background-attachment: fixed;
} 

</style>   
<body>
        
    <form action="kisailijasivu">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      
  
        Sähköposti: <input type="email" name="email">
        <br><br>
        Salasana: <input type="password" name="password">
        <br><br>
        <button type="submit">Kirjaudu</button>
    
    </form>
       
    
</body>
</html>