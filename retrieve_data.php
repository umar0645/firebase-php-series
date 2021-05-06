<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <title>Bootstrap 4 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" href="" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Link to your CSS file -->
    <link rel="stylesheet" href="">
</head>

<body>

    <!-- Start coding here -->
    <div class="row">
        <div class="col-md-3" style="border-right:2px solid blue;">
            <ul class="nav nav-pills flex-column">
       <a class="nav-link " href="home.php">Push Data</a>
       <a class="nav-link " href="setData.php">Set Data</a>
       <a class="nav-link active" href="retrieve_data.php">Retrieve Data</a>
       <a class="nav-link disabled" href="#">Disabled</a>
   </ul>            
        </div>
        <div class="col-md-9">
            <table class="table table-bordered">
       <thead>
           <tr>
               <th scope="col">#</th>
               <th scope="col">Name</th>
               <th scope="col">Email</th>
               <th scope="col">Message</th>
               <th scope="col">Action</th>
           </tr>
       </thead>
       <tbody>
          <?php
           include("includes/db.php");
           $ref = "contact_form_data";
           $data = $database->getReference($ref)->getValue();
           $i = 0;
           foreach($data as $key => $data1){
               $i++;
           ?>
           <tr>
               <th scope="row"><?php echo $i; ?></th>
               <td><?php echo $data1['name']; ?></td>
               <td><?php echo $data1['email']; ?></td>
               <td><?php echo $data1['message']; ?></td>
               <td>
               <a type="button" class="btn btn-danger" href="update_data.php?key=<?php echo $key; ?>">Delete</a>
               <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal">Update Data</button>
               <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form action="update_data.php" method="post" enctype="multipart/form-data">
       <div class="form-group">
           <label for="exampleFormControlInput1">Name</label>
           <input type="text" class="form-control" name="name" value="<?php echo $data1['name']; ?>">
       </div>
       <div class="form-group">
           <label for="exampleInputEmail1">Email address</label>
           <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="<?php echo $data1['email']; ?>">
       </div>
       <div class="form-group">
           <label for="exampleFormControlTextarea1">Message</label>
           <textarea class="form-control" name="message" rows="3" value="<?php echo $data1['message']; ?>"></textarea>
       </div>
       <input type="hidden" name="ref" value="contact_form_data/<?php echo $key; ?>">
       <button type="submit" name="update" class="btn btn-primary">Submit</button>
   </form>
            </div>
         </div>
      </div>
   </div>
              
               </td>
           </tr>
           <?php 
           }
           ?>
       </tbody>
   </table>

        </div>
    </div>
    <?php
    include("includes/db.php");
    ?>
    <center><h2>
        <?php
        echo $database->getReference("contact_form_data")->getSnapshot()->numChildren();
        ?>
    </h2></center>
    

    <!-- Coding End -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>