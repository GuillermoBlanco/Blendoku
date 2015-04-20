<?php
try{
 $clienteSOAP = new SoapClient('http://localhost/Blendoku/Servicio/game.wsdl');
 
 $array_to_compare=[ "dfad", "dafdfa" , "fadsfa" ];
 $get_game = $clienteSOAP->getGame(1);
 $check_game = $clienteSOAP->checkGame(1,$array_to_compare)? "verdadero" : "falso";
 $levels = $clienteSOAP->getLevels();
 
 echo "Get game es: <br/>";
 print_r($get_game);
 echo "<br/>Check game es: <br/>".$check_game."<br/>";
 print_r($array_to_compare);
 echo "<br/>Levels: <br/>".$levels."<br/>";
 
  
} catch(SoapFault $e){
 var_dump($e);
}
?>