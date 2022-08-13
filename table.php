<?php
include("developers.php");
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>Registered People</th>
         <th> Firstname </th>
         <th> Lastname </th>
         <th> Gender </th>
         <th> Email </th>
		 <th> ID </th>
         
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['firstname']??''; ?></td>
      <td><?php echo $data['lastname']??''; ?></td>
      <td><?php echo $data['gender']??''; ?></td>
      <td><?php echo $data['email']??''; ?></td>
       <td><?php echo $data['id']??''; ?></td>
      
     
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
    <div class="KOL">
      <p><a href="login.php?logout='1'" style="color: black;">Logout<a></p>
</body>

</html>