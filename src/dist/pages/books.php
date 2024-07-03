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
               <h3 class="mb-0">Books</h3>
         </div>
         <div class="col-sm-6">
               <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                     Books
                  </li>
               </ol>
         </div>
      </div> <!--end::Row-->
      </div> <!--end::Container-->
   </div> <!--end::App Content Header-->

   <div class="app-content">
      <div class="container-fluid"> 
       <div class="my-1">
         <a href="addBook.php">
         <button class='btn btn-primary'>
            Add book
         </button>
         </a>
       </div>

       <div class="card my-4">
         <!-- <div class="card-header">
            <h3 class="card-title">Striped Full Width Table</h3>
         </div> -->
         <div class="card-body p-0">
            <table class="table table-striped">
                  <thead>
                     <tr>
                        <th style="">#</th>
                        <th>Name</th>
                        <th>Author</th>
                        <th>Publisher</th>
                        <th>Year</th>
                        <th>Available</th>
                        <th style="">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $i=1; foreach($books as $book) :?>
                     <tr class="align-middle">
                        <td><?=$i++?></td>
                  
                        <td><?=$book['name']?></td>
                        <td><?=$book['author']?></td>
                        <td><?=$book['publisher']?></td>
                        <td><?=$book['year']?></td>
                        <td><?=$book['copy']?></td>
                        <td>
                           <!-- <button class='text-white btn btn-secondary'><i class="bi bi-eye"></i></button>  -->

                           <a href="editBook.php?id=<?=$book['id']?>&table=books">
                              <button class='text-white btn btn-success'><i class="bi bi-pencil-square"></i></button>
                            </a>

                           <a href="../../../logic/deletion.php?id=<?=$book['id']?>&table=books">
                              <button class='text-white btn btn-danger'><i class="bi bi-trash3"></i></button>
                           </a>
                        </td>
                     </tr>
                     <?php endforeach ?>
                  </tbody>
            </table>
         </div> <!-- /.card-body -->
      </div> 
      </div>
   </div>
</main>

<!--end::App Main--> 
       

<!-- footer -->
<?php include 'footer.php' ?>