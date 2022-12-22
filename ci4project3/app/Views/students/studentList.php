<?php
    echo view('includes/header',);
    echo view('includes/navbar');
?>
<div class ="container" >
<div class="row">
  <div class="col-lg-6">
     
 <h1 class="text-center text-success mt-5">All Student List</h1>

<table border="1" class = "table table-striped" >
   <thead>
       <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Phone</th>
           <th>Email</th>
           <th>Address</th>
           <th>Address</th>
           
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
       <td> 
        <a href="/student/edit/<?= $student['id'] ?>"> Edit</a>
        <a href="/student/delete/<?= $student['id'] ?>"> Delete</a>
      </td>

       <tr>
     <?php }?>
</tbody>
</table>
<a href="/student/new" class="btn btn-primary"> New Student</a>
  </div>
</div>
</div>
    <?php
 echo view('includes/footer');
?>