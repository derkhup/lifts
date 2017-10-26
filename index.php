<?php
   // Lift


// this the first mission
$building= BuildArray(10);
// this the second mission
$lifts= SetLifts(4);
Printing(10);

$user= 7;


function BuildArray($numFloor)
{
    $arr=array();
    
    for($x=0;$x < $numFloor;$x++)
    {
        
        $arr[$x]=0;
        echo "$arr[$x]";
        echo "<br>";
        
    }
    return $arr;
}

        
function SetLifts($numLift)
{
    
   for($x=0;$x < $numLift;$x++) 
   {
       $building[$x]=1;
   }
    
   shuffle($building);
   
}       
        
function Printing($numFloor)
{
    
   for($x=0;$x < $numFloor;$x++) 
   {
       echo $building[$x];
   }
    
   
   
}         
        
        
        
 ?>
   