<?php
   header("Content-Type: application/json");
   $arquivo = "../assets/json/pedidos.json";
   if (file_exists($arquivo)) {
        $json = file_get_contents('../assets/json/pedidos.json');
        $data = json_decode($json);

        if ($data->status == "Pronto"){
            $str = "Pedido pronto!";
        }else{
            $str = "Erro";
        }
        return json_encode($str);
   }else{
       return json_encode("Erro");
   }
?>