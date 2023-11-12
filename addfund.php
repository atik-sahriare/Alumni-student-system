<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="./includes/addmoney.php" method="post">
            <label for="">Amount: </label><input name="amount">
            <br>
            <label>BankName: </label><input name="bankname">
            <br>
            <label>paymrtype: </label><input name="paytype">
            <br>
            <label>cardnum: </label><input name="cardnum">
            <br>
            <label>cvv: </label> <input name="cvv">
            <br>
            <label>Payment Date</label> <input name="paydate" type="date">
            <br>
            <label>Remarks: </label> <input name="remarks">
            <br>
            <input type="submit">
        </form>
    </body>
</html>