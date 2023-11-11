<?php
include("./includes/config/confid.php");
?>

 
<div class="container">
	<div class="page">
   <h3>View Funds</h3>
  <div class="bs-example" data-example-id="contextual-table" style="border: 1px solid #eee">
    <table class="table" id="dataTables-example">
	<thead>
  <tr>
    <th>#</th>
    <th>User ID</th>
	<th>Payment Date</th>
    <th>Payment Type</th>
    <th>Bank Name</th>  
	<th>Remarks</th>
    <th>Paid Amount</th>
    <th>Action</th>
  </tr>
</thead>
<tfoot>
            <tr>
                <th colspan="7" style="text-align:right"></th>
            </tr>
        </tfoot>
 <tbody>

  <?php
  $query = "SELECT * FROM tblfund";
  $returnobj = $con->query($query);
  $table = $returnobj->fetchAll();
  ?>
  <tbody>
    <?php
  foreach($table as $row) { 
    ?>
    <tr>
        <td><?php echo $row['fundid'] ?></td>
        <td><?php echo $row['userid'] ?></td>
        <td><?php echo $row['paiddate'] ?></td>
        <td><?php echo $row['paytype'] ?></td>
        <td><?php echo $row['bankname'] ?></td>
        <td><?php echo $row['remarks'] ?></td>
        <td><?php echo $row['amount'] ?></td>
        <td><a href="edit.php?id=<?php echo $row['fundid']?>">edit</a></td>
        <td><a href="deletehandler.php?id=<?php echo $row['fundid']?>">delete</a></td>
    </tr>
    <?php
  }
  ?>
  </tbody>
  <a href="addfund.php">Add fund</a>