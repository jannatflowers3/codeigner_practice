<?php
    echo view('includes/header',);
    echo view('includes/navbar');
?>
<div class ="container" >
<div class="row">
  <div class="col-lg-6">
     
 <h1 class="text-center text-success mt-5">All Student List</h1>

<table border="1">
   <thead>
       <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Phone</th>
           <th>Email</th>
           <th>Address</th>
           <th>Gender</th>
       </tr>

   </thead>
   <tbody>
       <?php foreach($students as $student) {?>
       <tr>
       <td> <?php echo $student['id']?></td>    
       <td> <?php echo $student['name']?></td>    
       <td> <?php echo $student['phone']?></td>    
       <td> <?php echo $student['email']?></td>    
       <td> <?php echo $student['address']?></td>    
       <td> <?php echo $student['gender']?></td>    
       <tr>
     <?php }?>
</tbody>
</table>
  </div>
</div>
</div>
    <?php
 echo view('includes/footer');
?>