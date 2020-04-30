<!DOCTYPE html>

<html>

<head>

    <title>Responsive image gallery</title>

    <style type="text/css">

        *{

            box-sizing: border-box;

        }


        .gallery{

            border:1px solid #ccc;

        }


        .gallery img{

            width: 100%;

            height: auto;

        }


        .des{

            padding: 15px;

            text-align: center;

        }

        .responsive{

            padding: 0 6px;

            float: left;

            width: 25%;

        }


        @media only screen and (max-width: 700px){

            .responsive{

                width: 50%;

                margin:6px 0;

            }

        }


        @media only screen and (max-width: 500px){

            .responsive{

                width: 100%;

                
            }

        }

    </style>

</head>

<body>

    <h1>Responsive image gallery</h1>

    <div class="responsive">

        <div class="gallery">

            <a href="image/mysql.jpg" target="_blank"><img src="image/mysql.jpg" width="300" height="200"></a>

            <div class="des">Add a Description of the image here</div>

        </div>

    </div>


    <div class="responsive">

        <div class="gallery">

            <a href="image/kingofzion.jpg" target="_blank"><img src="image/kingofzion.jpg" width="300" height="200"></a>

            <div class="des">Add a Description of the image here</div>

        </div>

    </div>


    <div class="responsive">

        <div class="gallery">

            <a href="img/3.jpg" target="_blank"><img src="img/3.jpg" width="300" height="200"></a>

            <div class="des">Add a Description of the image here</div>

        </div>

    </div>


    <div class="responsive">

        <div class="gallery">

            <a href="img/1.jpg" target="_blank"><img src="img/1.jpg" width="300" height="200"></a>

            <div class="des">Add a Description of the image here</div>

        </div>

    </div>

</body>

</html>