<!DOCTYPE html> <!--nhan dau ! +tab-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
</head>
<style>
body {
    background-color:deeppink;
    width: 100%;
}
</style>
<body>

<h1>
<?php
spl_autoload_register(function($class){
    include_once'system/libs/'.$class.'.php';

});

include_once'app/config/config.php';
$main =new Main();

// include'system/libs/main.php';//goi forder dau tien
// include'system/libs/DController.php';
// include'system/libs/Database.php';
// include'system/libs/DModel.php';
// include'system/libs/load.php';

//$main =new sanpham();//goi class sanpham ?chu y dau tien lay ra class sao do phuong thuc sao do id
// $url =isset($_GET['url']) ? $_GET['url'] :NULL;// no da co

    

//     if($url!=NULL){//day la pha huy dau /
//         $url =rtrim($url,'/');
//         $url =explode('/',filter_var($url,FILTER_SANITIZE_URL));

//     }else{
//         unset($url);
//     }


//     if(isset($url[0])){
//         include_once('app/controllers/'.$url[0].'.php');
//         $ctlr = new $url[0]();
//         if(isset($url[2])){
//             $ctlr->{$url[1]}{$url[2]};

//         }else{
//             if(isset($url[1])){
//                 $ctlr->{$url[1]}();
//             }
//             else{

//             }

//         }


//     }else{
//         include('app/controllers/index.php');
//         $index =new index();
//         $index->homepage();

//     }

?>



    
    

</body>
</html>
