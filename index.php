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
  <select name="currency1">
    <option value="usd">US Dollar</option>
    <option value="euro">Euro</option>
    <option value="jpy">Japanese Yen</option>
    <option value="germ">German Mark</option>
  </select>
    <input type="submit" name="sbmt" value="Convert=>"/>
    <input type="text" name="amount_output"/>
   <select name="currency2">
    <option value="usdollar">US Dollar</option>
    <option value="euro">Euro</option>
    <option value="japaneseyen">Japanese Yen</option>
    <option value="germanmark">German Mark</option>
   </select>
     
</form>

</body>
</html>
<?php
     if(isset($_GET['sbmt']))
     {
         
        $input = $_GET['input'];
        $currency1 =$_GET['currency1'];
        $currency2 = $_GET['currency2'];
        $amount_output = $_GET['amount_output'];
        
        if($currency1 == 'usdollars')
        {
            if($currency2 == 'euro'){
                
            }
            $amount_output = $cc_input*0.96;
            echo $amount_output . " Dollar" ;
        }
        
        else if($currency1 == 'usdollars' AND $currency2 == 'japaneseyen')
        {
            $output = $cc_input*117.92;
            echo $amount_output . " Dollar";
        }
        else if($currency1 == 'usdollars' AND $currency2 == 'germanmark')
        {
            $amount_output = $cc_input*1.876;
            echo $amount_output . " Dollar" ;
        }
        else if($currency1 == 'euro' AND $currency2 == 'usdollars')
        {
            $amount_output = $cc_input*0;
            echo $amount_output . " Dollar" ;
        }
        
    }
    
?>