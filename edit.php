<?php
include("./includes/config/confid.php");
?>

  <?php
  $id = $_GET["id"];
  $query = "SELECT * FROM tblfund where fundid=$id";
  $returnobj = $con->query($query);
  $table = $returnobj->fetchAll();
  $row =$table[0];
  ?>
  <form action="./includes/edithandler.php" method="post">
            <label for="">id: </label><input name="id" value=<?php echo $row['fundid']?> readonly>
            <br>
            <label for="">Amount: </label><input name="amount" value=<?php echo $row['amount']?>>
            <br>
            <label>BankName: </label><input name="bankname" value=<?php echo $row['bankname']?>>
            <br>
            <label>paymrtype: </label><input name="paytype" value=<?php echo $row['paytype']?>>
            <br>
            <label>cardnum: </label><input name="cardnum" value=<?php echo $row['cardno']?>>
            <br>
            <label>cvv: </label> <input name="cvv" value=<?php echo $row['cvv']?>>
            <br>
            <label>Payment Date</label> <input name="paydate" type="date" value=<?php echo $row['paiddate']?>>
            <br>
            <label>Remarks: </label> <input name="remarks" value=<?php echo $row['remarks']?>>
            <br>
            <input type="submit">
</form>