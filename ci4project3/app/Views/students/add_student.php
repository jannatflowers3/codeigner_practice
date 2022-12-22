<?php
    echo view('includes/header',);
    echo view('includes/navbar');
?>

    <div class="container ">
    <h1>Student List</h1>
    <form method="post" action ="/student/create">
        <?=  csrf_field();?>
    <div class="mb-3">
    <label for="name" class="form-label">Name </label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="password" class="form-control" id="phone" name="phone">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
   <div class="mb-3">
     <label for="message" class="form-label">Send Message</label>
     <textarea class="form-control" name="address" id="" rows="3"></textarea>
   </div>
  </div>

  <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
   Female
  </label>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    
    </div>


    <?php
 echo view('includes/footer');
?>