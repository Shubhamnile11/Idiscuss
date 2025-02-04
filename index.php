<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>I-Forum</title>
    <style>
       #ques{
            min-height:233px
        }
    </style>
</head>

<body>
<?php include'partials/_db.conect.php';  ?>
    <?php include'partials/_header.php';  ?>




    <!-- slider  -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/Yellow.png" height="500px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/Image C.png" height="500px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/my portfolio.png" height="500px" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- category container start  -->
    <div class="container my-3" id="ques">
        <h2 class="text-center">iDiscuss - Category </h2>
        <div class="row">
            <!-- fetch all categories And use for loop to iterate to category  --> 

            <?php 
          $sql =  "SELECT * FROM category";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_assoc($result)){
            // echo $row['category_id'];
            // echo $row['category_name'];
            $id = $row['category_id'];
            $cat = $row['category_name'];
            $desc = $row['category_desc'];

            echo '
         
            <div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                     <img class="card-img-top" src="assets/Yellow.png" style="height: 250px; object-fit: cover;" alt="Card image cap">
                       <div class="card-body">
                        <h5 class="card-title"> <a  class="text-dark"  href="threadList.php?catid='. $id. '">'. $cat. '<a/></h5>
                        <p> '.substr($desc,0,50).'...</p>
                        <a href="threadList.php?catid='. $id. '" class="btn btn-success">View Threads</a>
                    </div>
                </div>
            </div>
';


          }
           ?>

        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <?php require'partials/_footer.php'; ?>

</body>

</html>