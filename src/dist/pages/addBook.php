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
               <h3 class="mb-0">New Book</h3>
         </div>
         <div class="col-sm-6">
               <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                     Books / new
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
                <label for="inputEmail4" class="form-label">Book Name</label>
                <input type="text" class="form-control" id="inputEmail4" name='name' required>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Author</label>
                <input type="text" class="form-control" id="inputPassword4" name='author' required>
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Publisher</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="" name='publisher' required>
            </div>
           
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Year Published</label>
                <input type="number" class="form-control" id="inputCity" name='year' required>
            </div>

            <div class="col-md-2">
                <label for="inputZip" class="form-label">Copy Available</label>
                <input type="number" class="form-control" id="inputZip" name='copy' required>
            </div>
            
            <div class="col-12">
                <button type="submit" name='addBook' class="btn btn-primary">Add Book</button>
            </div>
        </form>
      </div>
   </div>
</main>

<!--end::App Main--> 
       

<!-- footer -->
<?php include 'footer.php' ?>