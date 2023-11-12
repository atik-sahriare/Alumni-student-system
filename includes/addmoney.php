<?php
    include("./config/confid.php");
    $amount=$_POST['amount'];
    $cardnum =$_POST['cardnum'];
    $cvv =$_POST['cvv'];
    $remarks=$_POST['remarks'];
    $bankname =$_POST['bankname'];
    $paytype =$_POST['paytype'];
    $paydate=$_POST['paydate'];

    $query = "insert into tblfund(fundid, amount, cardno, cvv, remarks, bankname, paytype, paiddate) values(NULL, '$amount', '$cardnum', '$cvv', '$remarks', '$bankname', '$paytype','$paydate')";
    $con->exec($query);
    ?>
    <script>
        location.assign('../index.php')
               
    </script>
                <?php
?>