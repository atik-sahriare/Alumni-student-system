<?php
    include("./config/confid.php");
    $id=$_POST['id'];
    $amount=$_POST['amount'];
    $cardnum =$_POST['cardnum'];
    $cvv =$_POST['cvv'];
    $remarks=$_POST['remarks'];
    $bankname =$_POST['bankname'];
    $paytype =$_POST['paytype'];
    $paydate=$_POST['paydate'];

    $query = "update tblfund set amount='$amount', cardno='$cardnum', cvv=' $cvv', remarks='$remarks', bankname='$bankname', paytype='$paytype', paiddate='$paydate' where fundid='$id'";
    $con->exec($query);
    ?>
    <script>
        location.assign('../index.php')
               
    </script>
                <?php
?>