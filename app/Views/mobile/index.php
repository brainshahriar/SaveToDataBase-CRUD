<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>




<div class="container mt-4">
     <div class="row justify-content-center">
 
         <div class="col-md-12">
             <div class="card shadow w-50" >
                 <div class="card-header">
                     <h5>Trainer Profile</h5>
 
<form method="POST" action="<?= site_url('employee/store') ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Full Name" required >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Enter Email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="number" class="form-control" name="phone" placeholder="Enter Number" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Course Name</label>
    <input type="text" class="form-control" name="course" placeholder="Enter Course Name" required>
  </div>
  <div class="mb-3">
  <label>CV</label>
  <input name="cv" class="form-control"  type="file" required>
</div>
 <br>
  <button type="submit" class="btn btn-primary">SignUp</button>
  
  </form>
</div>
      


                                    

                                   

                 
   
               
                 </div>
             </div>
         </div>
     </div>
 </div>
 <?= $this->endSection() ?>