<?php
//include_once('encabezado.php');
include_once('administrarCategoria.php'); 
$entrar="";
   $cat_id=$_REQUEST['cat_id'];

   $payload = json_encode(array("cat_id" => $cat_id));


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://127.0.0.1/SOA/parcial2/api_restful/controllers/categoria.php?op=delete',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'DELETE',
  CURLOPT_POSTFIELDS => $payload,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

if ($response) {
   echo "<script>
               alert('Registro eliminado');
               location.href='administrarCategoria.php';
           </script>";
} else {
   echo "<script>
               alert('Error, Intente de Nuevo');
               location.href='administrarCategoria.php';
       </script>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


</body>
</html>