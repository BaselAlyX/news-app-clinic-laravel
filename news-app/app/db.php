<?php

$conn=mysqli_connect("localhost","root","","news_app");



function dbinsert($table,$data){
    global $conn;
    $keys=array_keys($data);
    $keys="`".implode("`,`",$keys)."`"; 
    $values=array_values($data);
    $values="'".implode("','",$values)."'";   
    $sql="INSERT INTO `$table` ($keys) VALUES ($values) ";
   try{ $result = mysqli_query($conn,$sql);}
   catch(mysqli_sql_exception $e){
    die("insert error:".$e->getMessage());
}
}

   function dbget($table){
    global $conn;
    $sql="SELECT * FROM `$table`";
    try{ $result=mysqli_query($conn,$sql);
        $data=[];
        while($row=mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        return $data;
    }catch(mysqli_sql_exception $e){
        die("insert error:".$e->getMessage());
    }
}

function dbrow($table,$field,$value){
    global $conn;
    $sql="SELECT * FROM `$table` WHERE $field=$value ";
    try{ $result=mysqli_query($conn,$sql);
        
       $data= mysqli_fetch_assoc($result);
       if($data){return $data;}else{return false;}
    }catch(mysqli_sql_exception $e){
        die("insert error:".$e->getMessage());
    }
}
   

function dbupdate($table,$data,$id){
    global $conn;
    $string="";
    foreach($data as $key=>$value){
        $string.="`".$key."`='".$value."',";
    }
    $string=rtrim($string,",");
    $sql="UPDATE `$table` SET $string Where `id`='$id' ";
   try{  mysqli_query($conn,$sql);
}
   catch(mysqli_sql_exception $e){
    die("insert error:".$e->getMessage());
}
}

function dbdelete($table,$id){
    global $conn;
    
    try{ 
    $sql="DELETE FROM `$table` Where `id`='$id' ";
  mysqli_query($conn,$sql);
}
   catch(mysqli_sql_exception $e){
    die("insert error:".$e->getMessage());
}
}
