
<?php
    include("./includes/config/confid.php");
    $id = $_GET['id'];
    $query = "delete from tblfund where fundid='$id'";
    $con->exec($query);
 ?>
  <script>
        location.assign('index.php')
               
    </script>