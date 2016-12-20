<!DOCTYPE html>
<html>
<body>

<p style="text-align: center; font-size: xx-large; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;">
            <strong><em>Welcome to Tiffany Lee Currency Converter</em></strong>    
        </p>
<form action="index.php" method="get">
    <input type="text1" name="amount_input">
  <select name="currency1">
    <option value="usd">US Dollar</option>
    <option value="euro">Euro</option>
    <option value="jpy">Japanese Yen</option>
    <option value="germ">German Mark</option>
  </select>
    <input type="submit" name="submit" value="Convert=>"/>
    <input type="text2" name="amount_output"/>
   <select name="currency2">
    <option value="usdollar">US Dollar</option>
    <option value="euro">Euro</option>
    <option value="japaneseyen">Japanese Yen</option>
    <option value="germanmark">German Mark</option>
  </select>
</form>
<?php
     if(isset($_GET['submit']))
     {
         
        $amount_input = filter_input(INPUT_POST, 'amount_input');
        $currency1 = filter_input(INPUT_POST, 'currency1');
        $currency2 = filter_input(INPUT_POST, 'currency2');
     
        if($currency1 == 'usd' AND $currency2 == 'euro');
        {
            $amount_output = $amount_input*0.96;
            echo $amount_output."Dollar";
        }
    }
    
?>

</body>
</html>