<?php
   // echo "<select id='lstRegions'>";
    $i = 0;
    foreach($lesRegions as $region)
    {
        //if ($i === 0)
        {
            echo "<option selected value='".$region->idRegion."'>".$region->nomRegion."</option>";
        }
       // else
       // {
         //   echo "<option value='".$region->idRegion."'>".$region->nomRegion."</option>";
        //}
        //$i++;
    }
  //  echo "</select>";
?>

 