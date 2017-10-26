<?php
   
// this will build new array
$building= BuildArray(10);
Printing(10);
// this wil set the lifts
$lifts= SetLifts(4);
Printing(10);
//this will call the nearest lift to the user
$neararray=array();
$user= 7;
$near=100;
CallLift();
SendLift($neararray,$user);


function BuildArray($numFloor)
{
    $arr=array();
    
    for($x=0;$x < $numFloor;$x++)
    {
        
        $arr[$x]=0;
               
    }
    return $arr;
}

    
function SetLifts($numLift)
{
    
   for($x=0;$x < $numLift;$x++) 
   {
       global $building;
       $building[$x]=1;
   }
    
   shuffle($building);
   
}       
        
function Printing($numFloor)
{
   
   for($x=0;$x < $numFloor;$x++) 
   {
       global $building;
       echo "$x". " ==> ".$building[$x];
       echo "<br>";
             
   }
    
   echo "<hr>";
   
}         
        
function CallLift()
{
    global $building;
    global $neararray;
    $y=0;
    
    for($x=0;$x <count($building);$x++)
    {
        if($building[$x] == 1)
        {
            echo "there is a lift in floor ".$x. "<br>";
            $neararray[$y]= $x;
            $y++;
        }
        
    }
           
} 

function SendLift($neararray,$user)
{
    global $neararray;
    global $near;
    $dif=0;
    $Hello=0;
    
    
    for($x=0;$x <count($neararray);$x++)
    {
       
        $dif= $user - $neararray[$x];
                       
        if(abs($dif) < $near )
        {
            $near=$dif;
            $Hello=$neararray[$x];            
        }
    }
   echo "The nearest lift is in floor ".$Hello;
}
?>