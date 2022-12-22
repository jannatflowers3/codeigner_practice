<?php
    echo view('includes/header',);
    echo view('includes/navbar');
?>

    <div class="container ">
    <h1>Edit Student List</h1>
    <form method="post" action ="/student/update/<?=  $student['id']?>">
        <?=  csrf_field();?>
    <div class="mb-3">
    <label for="name" class="form-label">Name </label>
    <input type="text" class="form-control" id="name" value = "<?= $student['name']?>" name="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="password" class="form-control" value = "<?= $student['phone']?>"id="phone" name="phone">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" value = "<?= $student['email']?>" name="email" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
   <div class="mb-3">
     <label for="address" class="form-label">Send Message</label>
     <textarea class="form-control" name="address" id="" rows="3"><?= $student['address']?></textarea>
   </div>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    
    </div>


    <?php
 echo view('includes/footer');
?>