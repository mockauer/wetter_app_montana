<?php

//wetter
$monate = array(1=>"Januar",
                2=>"Februar",
                3=>"M&auml;rz",
                4=>"April",
                5=>"Mai",
                6=>"Juni",
                7=>"Juli",
                8=>"August",
                9=>"September",
                10=>"Oktober",
                11=>"November",
                12=>"Dezember");


$monat = date("n");





//Temperaturdif am Tag
$temptag=rand(0,28)/10;
$plus = array("+","-");
$zufall = rand(0,1);
$dif = $plus[$zufall];
$dif .=$temptag;



for ($i=1;$i<sizeof($monate);$i++){

if($monate[$monat]==$monate[$i])
	$temp = array(1=>"23.9",
                2=>"25",
                3=>"25.4",
                4=>"26.1",
                5=>"26.4",
                6=>"26.9",
                7=>"27.5",
                8=>"28.8",
                9=>"27.4",
                10=>"26.5",
                11=>"25.7",
                12=>"24");
			
			
		
			
			}
			
			$tags = $dif+$temp[$monat];

		$tempabend=$temp[$monat]-7;
		$tempabend=$tempabend-$dif;


$wetter=rand(1,6);

$time=time();
$datum = date("Y-m-d",$time);






   $handle = sqlite_open("wetter.sqt");

      /* Tabelle mit Primärschlüssel erzeugen */
   //sqlite_query($handle, "create table wetter (id integer primary key,tag VARCHAR (10), nacht VARCHAR (10), datum DATE, wetter INTEGER );");
 
   
  $sqlstr = "insert into wetter (tag, nacht, datum, wetter) values ";
   sqlite_query($handle, $sqlstr . "('".$tags."', '".$tempabend."', '".$datum."', '".$wetter."')");
	echo "Wetter vom $datum hinzugefügt.";
/*
$sqlstr = "delete from wetter where id=3 ";
   sqlite_query($handle, $sqlstr);
   echo "Datensatz gelöscht";*/


   
   sqlite_close($handle);

   
     

   


   
?>