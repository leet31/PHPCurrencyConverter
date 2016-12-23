<!DOCTYPE html>
<html>
 <head>
<meta charset="utf-8">
<title>Home page</title>
<style>
    body{
        background-color:white;
    }
    .center{
        text-align:center;
    }
</style>
</head>
<body>
<p style="text-align: center; font-size: xx-large; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;">
            <strong><em>Welcome to Tiffany Lee Currency Converter</em></strong>    
        </p>
       
<form class="center" action="index.php" method="get">
    <input type="text" name="input">
  <select name="dropdown1">
    <option value="usd">US Dollar</option>
    <option value="euro">Euro</option>
    <option value="jpy">Japanese Yen</option>
    <option value="germ">German Mark</option>
  </select>
     <input type="text" name ="output" value ="<?php if (isset($output))echo $output ?>">
    <input type="submit" name="sbmt" value="Convert=>"/>
   <select name="dropdown2">
    <option value="usd">US Dollar</option>
    <option value="euro">Euro</option>
    <option value="jpy">Japanese Yen</option>
    <option value="germ">German Mark</option>
   </select>
     
</form>
        <?php
     if(isset($_GET['sbmt']))
     {
         
        $cc_input = $_GET['input'];
        $cc_dropdown1 =$_GET['dropdown1'];
        $cc_dropdown2 = $_GET['dropdown2'];
        $output = $_GET['output'];
        
        if($cc_dropdown1 == 'usd' AND $cc_dropdown2 == 'usd')
        {
            $output = $cc_input*1;
              
        
        }else if($cc_dropdown1 == 'usd' AND $cc_dropdown2 == 'euro'){
            $output = $cc_input*0.96;
            echo $output; 
            
        }else if($cc_dropdown1 == 'usd' AND $cc_dropdown2 == 'jpy'){
            $output = $cc_input*117.92;
            echo $output;  
            
        }else if($cc_dropdown1 == 'usd' AND $cc_dropdown2 == 'germ'){
            $output = $cc_input*1.876;
            echo $output; 
            
        }else if($cc_dropdown1 == 'euro' AND $cc_dropdown2 == 'usd'){
            $output = $cc_input*0;
            echo $output;
            
            
        }else if($cc_dropdown1 = 'euro' AND $cc_dropdown2 == 'euro'){
            $output = $cc_input*1;
            echo $output;
            
        }else if($cc_dropdown1 == 'euro' AND $cc_dropdown2 == 'jpy'){
            $output = $cc_input*122.83;
            echo $output;
        
        }else if($cc_dropdown1 = 'euro' AND $cc_dropdown2 == 'germ'){
            $output = $cc_input*1.954;
            echo $output;
            
        }else if($cc_dropdown1 = 'jpy' AND $cc_dropdown2 == 'usd'){
            $output = $cc_input*0;
            echo $output;
            
        }else if($cc_dropdown1 = 'jpy' AND $cc_dropdown2 == 'euro'){
            $output = $cc_input*0;
            echo $output;
            
        }else if($cc_dropdown1 = 'jpy' AND $cc_dropdown2 == 'jpy'){
            $output = $cc_input*1;
            echo $output;
            
        }else if($cc_dropdown1 = 'jpy' AND $cc_dropdown2 == 'germ'){
            $output = $cc_input*62.857;
            echo $output;
            
        }else if($cc_dropdown1 = 'germ' AND $cc_dropdown2 == 'usd'){
            $output = $cc_input*0;
            echo $output;
            
        }else if($cc_dropdown1 = 'germ' AND $cc_dropdown2 == 'euro'){
            $output = $cc_input*0;
            echo $output;
            
        }else if($cc_dropdown1 = 'germ' AND $cc_dropdown2 == 'jpy'){
            $output = $cc_input*0;
            echo $output;
            
            }else if($cc_dropdown1 = 'germ' AND $cc_dropdown2 == 'germ'){
            $output = $cc_input*1;
            echo $output;
            }
     }
?>
</body>
</html>
