<?php
include("date.php");
 $handle = sqlite_open("wetter.sqt");
$res = sqlite_query($handle, "SELECT * FROM wetter WHERE datum=date('now')");

   while($dsatz = sqlite_fetch_array($res, SQLITE_ASSOC))
   {
      echo "<table border='0'>
 <tr>
  <td><img src='img/".$dsatz["wetter"].".jpg' /><br /></td>
  <td><b>Wetter in Kush am ". date_german($dsatz["datum"]) ."</b><br/>
  Tag: " .$dsatz["tag"] . "°C<br/>
  Nacht: ".$dsatz["nacht"] . "°C
  </td>
 </tr>
 
</table>";
		 
	 
   }


   sqlite_close($handle);




?>