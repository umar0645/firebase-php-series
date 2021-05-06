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
       <a class="nav-link active" href="setData.php">Set Data</a>
       <a class="nav-link" href="#">Link</a>
       <a class="nav-link disabled" href="#">Disabled</a>
   </ul>            
        </div>
        <div class="col-md-9">
            <form action="storing_data.php" method="post" enctype="multipart/form-data">
       <div class="form-group">
           <label for="exampleFormControlInput1">Name</label>
           <input type="text" class="form-control" name="name" placeholder="John Doe">
       </div>
       <div class="form-group">
           <label for="exampleInputEmail1">Email address</label>
           <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
       </div>
       <div class="form-group">
           <label for="exampleFormControlTextarea1">Message</label>
           <textarea class="form-control" name="message" rows="3"></textarea>
       </div>
       <button type="submit" name="set" class="btn btn-primary">Submit</button>
   </form>

        </div>
    </div>

    <!-- Coding End -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>