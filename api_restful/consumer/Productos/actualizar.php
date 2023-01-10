<?php
include_once('modiProductos.php'); 


if ($_SERVER["REQUEST_METHOD"]=="POST")
	 {
        $nom=$_POST['nom'];
        $pu=$_POST['pu'];
        $cantidad=$_POST['cantidad'];
        $cat_id=$_POST['cat_id'];
        $id=$_POST['id'];
    
        $in = json_encode(array("nom"=>$nom, "pu"=>$pu, "cantidad"=>$cantidad, "cat_id"=>$cat_id, "id"=>$id));


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://127.0.0.1/SOA/parcial2/api_restful/controllers/productos.php?op=update',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'PUT',
  CURLOPT_POSTFIELDS => $in,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

   
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
<?php
    
    if ($response) {
       echo "<script>
                    alert('Registro actualizado');
                   location.href='administrarProductos.php';
                </script>";
     } else {
       echo "<script>
                   alert('Error, Intente de Nuevo');
                    location.href='modiProducto.php';
            </script>";
    }
  
    }
    ?>
</body>
</html>