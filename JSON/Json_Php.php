<?php
   $mydata = new stdClass(); // "stdClass" is the empty class in PHP which is used to cast other types to object.
   $mydata->name = "Ram";
   $mydata->age = 24;
   $mydata->city = "Rajkot";

   $myJson = json_encode($mydata);

   echo $myJson;


?>