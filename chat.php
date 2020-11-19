<?php
include("conexao.php");
$sql = $pdo->query("SELECT * FROM pessoa");
$ain = $pdo->query("SELECT * FROM respostas where id =15");
$cont = 0;
$usu;
foreach ($sql->fetchAll() as $key) {
	echo "<h3>".$key['mensagem']."</h3>";
        $cont ++;
 
        switch ($cont){

            case 1:
        $con = $pdo->query("SELECT * FROM respostas where id =5");
        $zon = $pdo->query("SELECT * FROM respostas where id =6");        
        $mon = $pdo->query("SELECT * FROM respostas where id =11");
if($key['mensagem']=="Oi" or $key['mensagem']=="Olá" or $key['mensagem']=="Ola" or $key['mensagem']=="Ola" or $key['mensagem']=="oi"){
           foreach ($con->fetchAll() as $res) {
	echo "<h4>".$res['resp']."</h4>";    
}
foreach ($zon->fetchAll() as $ron) {
	echo "<h4>".$ron['resp']."</h4>";    
}

foreach ($mon->fetchAll() as $won) {
	echo "<h4>".$won['resp']."</h4>";    
}

 }
 else{
      $son = $pdo->query("SELECT * FROM respostas where id =2");
     foreach ($son->fetchAll() as $fes) {
	echo "<h4>".$fes['resp']."</h4>";
        $cont --;
 }
 }

 break;
 



 case 2:
    if ($key['mensagem']=="2"){
    $don = $pdo->query("SELECT * FROM respostas where id =12");
   foreach ($don->fetchAll() as $din) {
	echo "<h4>".$din['resp']."</h4>";

       }
  
  
 }
 
 else if ($key['mensagem']=="1"){
 $cont --;
      $don = $pdo->query("SELECT * FROM respostas where id =3");
   foreach ($don->fetchAll() as $din) {
	echo "<h4>".$din['resp']."</h4>";

       }
 for($i=1;$i<17;$i++){
       $fon = $pdo->query("SELECT * FROM hotel where id ='$i'");
       foreach ($fon->fetchAll() as $fin) {
	echo "<h4>".$fin['id']."   ".$fin['lugar']."</h4>";
        
       }
       
       
   }
 
  
 }
 if($key['mensagem']=="16"){
       $fon = $pdo->query("SELECT * FROM hotel where id =16");
       foreach ($fon->fetchAll() as $fin) {
	echo "<h4>".$fin['link']."</h4>";
        
       }
   }
 
 
 break;




 case 3:
 if($key['mensagem']=="150"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =1");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }
 
 else if($key['mensagem']=="1000"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =16");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }
 
 
 else if($key['mensagem']=="2000"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =15");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }
 
 
else if($key['mensagem']=="600"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =6");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 } 
 
 
 
 
 else if($key['mensagem']=="500"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =10");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }
 
 
 else if($key['mensagem']=="200"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =2");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }
 
 
else if($key['mensagem']=="300"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =5");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }
 
 
 else if($key['mensagem']=="400"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =4");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }
 
 
 
 else if($key['mensagem']=="1500"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =12");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }

 
 
 
 else if($key['mensagem']=="700"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =11");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }


else if($key['mensagem']=="1100"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =12");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }
 
 else if($key['mensagem']=="1800"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =15");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }


else if($key['mensagem']=="1200"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =12");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }


else if($key['mensagem']=="120"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =1");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }
  
  
  
else if($key['mensagem']=="250"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =3");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 } 
 
 
 
 else if($key['mensagem']=="450"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =10");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }
 
 
 else if($key['mensagem']=="350"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =9");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }
 
 else if($key['mensagem']=="2"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =3");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }
 
 else if($key['mensagem']=="5"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =13");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }
 
 
 else if($key['mensagem']=="4"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =4");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }
 
 else if($key['mensagem']=="3"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =7");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }
 
 else if($key['mensagem']=="1000 5"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =12");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }
 
 else if($key['mensagem']=="150 2"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =3");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }
 
 else if($key['mensagem']=="300 4"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =4");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }
 
  
 else if($key['mensagem']=="2000 5"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =16");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }

else if($key['mensagem']=="500 5"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =10");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 } 
  
  
else if($key['mensagem']=="500 3"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =5");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }  
  
  
else if($key['mensagem']=="150 3"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =7");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }
  
  
 else if($key['mensagem']=="700 5"){
     $fin = $pdo->query("SELECT * FROM respostas where id =14");
     $don = $pdo->query("SELECT * FROM hotel where id =12");
     
     foreach ($fin->fetchAll() as $zin) {
     echo "<h4>".$zin['resp']."</h4>"; 
     
     }
     foreach ($don->fetchAll() as $din) {
        echo "<h4>".$din['link']."</h4>"; 
	
        
       }
       foreach ($ain->fetchAll() as $uin) {
	echo "<h4>".$uin['resp']."</h4>";    
}
 }

else if($key['mensagem']!="700 5" or $key['mensagem']!="150 3" or $key['mensagem']!="500 3" or $key['mensagem']!="500 5" or $key['mensagem']!="2000 5" or $key['mensagem']!="300 4" or $key['mensagem']!="150 2" or $key['mensagem']!="1000 5" or $key['mensagem']!="350" or $key['mensagem']!="450" or $key['mensagem']!="250" or $key['mensagem']!="120" or $key['mensagem']!="1200" or $key['mensagem']!="1800" or $key['mensagem']!="1100" or $key['mensagem']!="700" or $key['mensagem']!="1500" or $key['mensagem']!="400" or $key['mensagem']!="300" or $key['mensagem']!="200" or $key['mensagem']!="500" or $key['mensagem']!="600" or $key['mensagem']!="2000" or $key['mensagem']!="1000" or $key['mensagem']!="150") {
   $son = $pdo->query("SELECT * FROM respostas where id =2");
     foreach ($son->fetchAll() as $fes) {
	echo "<h4>".$fes['resp']."</h4>";
        $cont --; 
}
} 
    
 break;
 
            case 4:
                $ton = $pdo->query("DELETE FROM pessoa");
                $ton -> execute();
                break;
 
 
        }
}

 
      /*
 else {
     $son = $pdo->query("SELECT * FROM respostas where id =2");
     foreach ($son->fetchAll() as $fes) {
	echo "<h4>".$fes['resp']."</h4>";
        
}
 }
  * 
  */
  

?>