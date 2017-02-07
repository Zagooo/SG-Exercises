<!DOCTYPE HTML>
<html>
<head>
<title>Second exercise</title>
</head>
<body>
    <table>
        <tr>
        <td colspan="3" align="center">Check</td>
        </tr>
        <tr>
          <td>Product</td>
          <td>Quantity</td>
          <td align="center">Price</td>
        </tr>
        <?php
            $humburger = 4.95;
            $milkshake = 1.95;
            $cola = 0.85;
            $total = 2*$humburger + $milkshake + $cola;
            $pre_tax = $total * 0.075;
            $post_tax = $total + $pre_tax;
            $tip = $total * 0.16;
            $total_cost = $post_tax + $tip;
        ?>
        <tr>
          <td>Hamburger</td>
          <td align="center">2</td>
          <td align="center"><?php echo $humburger . " $" ?></td>
        </tr>
        <tr>
          <td>Chocolate milkshake</td>
          <td align="center">1</td>
          <td align="center"><?php echo $milkshake . " $" ?></td>
        </tr>
        <tr>
          <td>Cola</td>
          <td align="center">1</td>
          <td align="center"><?php echo $cola . " $" ?></td>
        </tr>
        <tr>
          <td colspan="2">Total cost</td>
          <td align="center"><?php echo $total . " $" ?></td>
        </tr>
        <tr>
          <td colspan="2">Pre-tax</td>
          <td align="center"><?php echo round($pre_tax,2) . " $" ?></td>
        </tr>
        <tr>
          <td colspan="2">Post-tax</td>
          <td align="center"><?php echo round($post_tax,2) . " $" ?></td>
        </tr>
        <tr>
          <td colspan="2">Tax and tip total</td>
          <td align="center"><?php echo round($total_cost,2) . " $" ?></td>
        </tr>
      </table>
</body>
</html>