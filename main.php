<?php
    // include('authentication.php');
    // include('connection.php');
    $svar = 'KUBE{pr377y_funny_y35?}';
                    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

        $svarinput = $_POST['flag'];

        if(!empty($svar))
        {
            if($svarinput == $svar)
            {
                echo "<script>alert('Bra jobba!');</script>";
                
                
            } else {
                echo "<script>alert('Feil svar!');</script>";
            }
        } 
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <a href=""></a>
   <link rel="stylesheet" href="style.css"> 
</head>
<body>
<button class="logout" type="button" onclick="location.href ='index.html'">Trykk her for å logge ut</button>
    <h1>Velkommen til denne ctf</h1>
    <h2>Trykk her for å gå til FAQ</h2>
    <button type="button" onclick="location.href ='faq.html'">FAQ</button>
    <h2>Nedenfor er knappene for å velge oppgaver</h2>
    <button type="button" onclick="location.href ='good_luck.html'">good_luck</button>
    
    <br>
    <br>
    <br>

    <form method="post">
    <input type="text" placeholder="Skriv flagget her" name="flag"></input>  
    <input type="submit" value="Submit"></input>
    </form>

<style>
.logout{
    position: relative;
    float: right;

}
</style>


</body>
</html>

