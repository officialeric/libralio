<!--begin::Header--> 
<?php include 'header.php' ?>
 <!--end::Header--> 
 
 <!--begin::Sidebar-->
 <?php include 'sidebar.php' ?>
<!--end::Sidebar--> 

<!--begin::App Main-->

<main class="app-main">
<div class="app-content-header"> <!--begin::Container-->
   <div class="container-fluid"> <!--begin::Row-->
      <div class="row">
         <div class="col-sm-6">
               <h3 class="mb-0">New Loan</h3>
         </div>
         <div class="col-sm-6">
               <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                     Loans / new
                  </li>
               </ol>
         </div>
      </div> <!--end::Row-->
      </div> <!--end::Container-->
   </div> <!--end::App Content Header-->

   <div class="app-content">
      <div class="container-fluid"> 
      <form class="row g-3" action='../../../logic/insertion.php' method='post'>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Member</label>
                <select class="form-select" aria-label="Default select example" id='inputEmail4' name='member'>
                    <option selected>select member</option>
                    
                    <?php foreach($members as $member) : ?>

                      <option value="<?=$member['id']?>"><?=$member['name']?></option>

                    <?php endforeach ?>

                </select>            
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Book</label>
                <select class="form-select" aria-label="Default select example" id='inputEmail4' name='book'>
                    <option selected>select book</option>
                    <?php foreach($books as $book) : ?>

                        <option value="<?=$book['id']?>"><?=$book['name']?></option>

                    <?php endforeach ?>
                </select>            
            </div>
        
            <div class="col-6">
                <label for="inputAddress" class="form-label">Date issued</label>
                <input type="date" class="form-control" id="inputAddress" placeholder="" name='dateIssued'>
            </div>
           
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Due Date</label>
                <input type="date" class="form-control" id="inputCity" name='dueDate'>
            </div>
<!-- 
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Copy Available</label>
                <input type="number" class="form-control" id="inputZip" name='available'>
            </div> -->
            
            <div class="col-12">
                <button type="submit" name='addLoan' class="btn btn-primary">Add Loan</button>
            </div>
        </form>
      </div>
   </div>
</main>

<!--end::App Main--> 
       

<!-- footer -->
<?php include 'footer.php' ?>