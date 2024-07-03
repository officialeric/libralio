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
               <h3 class="mb-0">Loans</h3>
         </div>
         <div class="col-sm-6">
               <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                     Loans
                  </li>
               </ol>
         </div>
      </div> <!--end::Row-->
      </div> <!--end::Container-->
   </div> <!--end::App Content Header-->

   <div class="app-content">
      <div class="container-fluid"> 
       <div class="my-1">
         <a href="addLoan.php">
         <button class='btn btn-primary'>
            Add Loan
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
                        <th>Member</th>
                        <th>Book</th>
                        <th>Issued By</th>
                        <th>Date Issued</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th style="">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; foreach($loans as $loan) {
                      $member_id = $loan['member_id'];
                      $book_id = $loan['book_id'];
                      $staff_id = $loan['issued_by'];

                      $a = "SELECT * FROM `members` WHERE id=$member_id";
                      $members = mysqli_query($conn,$a);

                      $b = "SELECT * FROM `books` WHERE id=$book_id";
                      $books = mysqli_query($conn,$b);

                      $c = "SELECT * FROM `staffs` WHERE id=$staff_id";
                      $staffs = mysqli_query($conn,$c);
                      
                      $member = mysqli_fetch_assoc($members);
                      $book = mysqli_fetch_assoc($books);
                      $staff = mysqli_fetch_assoc($staffs);

                  ?>
                     <tr class="align-middle">
                        <td><?=$i++?></td>
                  
                        <td><?=$member['name']?></td>
                        <td><?=$book['name']?></td>
                        <td><?=$staff['username']?></td>
                        <td><?=$loan['issued_date']?></td>
                        <td><?=$loan['due_date']?></td>
                        <td><?=($loan['status'] == 'checked' ? '<i class="bi bi-check2-all"></i>' : '<i class="bi bi-x"></i>')?></td>
                        <td>
                           <!-- <button class='text-white btn btn-success'><i class="bi bi-pencil-square"></i></button> -->
                           <a href="../../../logic/deletion.php?id=<?=$loan['id']?>&table=loans">
                              <button class='text-white btn btn-danger'><i class="bi bi-trash3"></i></button>
                           </a>
                           <?php if($loan['status'] == 'unchecked') {?>
                              <a href="../../../logic/issue.php?id=<?=$loan['id']?>">
                                <button class='text-white btn btn-primary'>check</button>
                              </a>
                           <?php } ?>
                           
                        </td>
                     </tr>
                     
                     <?php } ?>
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