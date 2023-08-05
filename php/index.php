<?php 
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/home.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    include "nav.php";
    ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../img/img1.jpg" alt="First slide">
                <div class="carousel-caption d-md-block">
                    <h1 class="headerbg">Welcome to CANDLE</h1>
                    <p class="parabg">Explore a captivating collection of handcrafted candles and accessories, designed
                        to
                        <br>infuse
                        warmth, elegance, and tranquility into any space.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../img/img2.jpg" alt="Second slide">
                <div class="carousel-caption d-md-block">
                    <h1 class="headerbg">Welcome to CANDLE</h1>
                    <p class="parabg">Explore a captivating collection of handcrafted candles and accessories, designed
                        to
                        <br>infuse
                        warmth, elegance, and tranquility into any space.
                    </p>
                </div>
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


    <br><br>

    <!-- form -->
    <div class="container" id="addproduct">
        <form action="formprocess.php" method="POST">
            <div class="row">
                <div class="col-3">
                    <label for="cname">Candle Name :</label>
                </div>
                <div class="col-9">
                    <input type="text" id="cname" name="cname" placeholder="Enter Candle Name ..." Required>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="details">Details :</label>
                </div>
                <div class="col-9">
                    <input type="text" id="details" name="details" placeholder="More details ..." Required>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="price">Price :</label>
                </div>
                <div class="col-9">
                    <input type="text" id="price" name="price" placeholder="Candle Price ..." Required>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="canimg">Candle Image :</label>
                </div>
                <div class="col-9">
                    <input type="text" id="canimg" name="canimg" placeholder="Enter Image Link ..."
                        value="https://cdn.shopify.com/s/files/1/0343/4964/5869/products/MuseImage1444x1506_3_2000x2000_crop_center.jpg?v=1620396412">
                </div>

            </div>
            <br>
            <div class=" row">
                <button type="submit" class="addbtn">Add to Products</button>
            </div>
        </form>
    </div>

    <br><br><br>
    <div class="container">
        <table class="table">


            <thead>
                <tr>
                    <th scope=" col">Name</th>
                    <th scope="col">Details</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>



            <tbody>
                <?php
        
    if (isset($_SESSION["product_info"]) ) {
        foreach ($_SESSION["product_info"] as $product) {
    ?>
                <tr>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['details']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td><img src=" <?php echo $product['image']; ?>" alt=""></td>
                </tr>
                <?php
        }
    } 
    
    
    // else {
    //     echo "<tr><td colspan='4'>No product information found.</td></tr>";
    //     print_r ($_SESSION);
    // }
    ?>
            </tbody>


        </table>
        <form action="destroy.php" class="row">
            <button type="submit" class="addbtn">Clear Products</button>
        </form>


    </div>

    <br><br>
    <!-- footer -->
    <?php
    include "footer.php";
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>