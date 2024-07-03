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
               <h3 class="mb-0">Edit Member</h3>
         </div>
         <div class="col-sm-6">
               <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                     Members / Edit
                  </li>
               </ol>
         </div>
      </div> <!--end::Row-->
      </div> <!--end::Container-->
   </div> <!--end::App Content Header-->

   <div class="app-content">
      <div class="container-fluid"> 
      <form class="row g-3" action='../../../logic/edition.php' method='post'>
           <input type="hidden" name="id" value='<?=$entity['id']?>'>

            <div class="col-md-6">
                <label for="inputEmail4" class="form-label"> Name</label>
                <input type="text" class="form-control" id="inputEmail4" name='name' required value='<?=$entity['name']?>'>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Phone number</label>
                <input type="number" class="form-control" id="inputPassword4" name='phone' required value='<?=$entity['phone']?>'>
            </div>
            
            
            <div class="col-12">
                <button type="submit" name='editMember' class="btn btn-primary">Update Member</button>
            </div>
        </form>
      </div>
   </div>
</main>

<!--end::App Main--> 
       

<!-- footer -->
<?php include 'footer.php' ?>