<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>form</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            color: inherit;
        }

        body,
        html {
            width: 100%;
            height: 100%;
            background-color: #064275;
            color: white;
        }

        .fullwidth {
            width: 100%;
            height: 100%;
        }

        .flexCenter {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .mak {
            padding: 20px 40px;
            border: 1px solid #000;
            background-color: #f89f2e;
            border-radius: 14px;
        }

        .color_blabk {
            color: #000;
        }
    </style>
</head>

<body>


    <div class="container" >

        <div class="row">
            <div class="col-xs-12">


        <?php

                if (isset($_GET['empty'])) {
                    echo "<h3 style='color: red;'>" . strtolower($_GET['empty']) . "</h3>";
                    // echo 'sdsd';
                }

                if (isset($_GET['wrong'])) {
                    echo "<h3 style='color: red;'>" . strtoupper($_GET['wrong']) . "</h3>";
                    // echo 'sdsd';
                }
        ?>



                <form action="check.php" method="POST" role="form" >
                    <legend>Form title</legend>

                    <div class="form-group">
                        <label for="uname">Username : </label>
                        <input type="text" name='uname' class="form-control" id="uname" placeholder="Input username">
                        <br><br>
                        <label for="">Password :</label>
                        <input type="password" name='password' class="form-control" id="Password" placeholder="Input password">
                    </div>
                    <button type="submit" name='submit' class="btn btn-primary">Submit</button>
                </form>


            </div>
        </div>

    </div>


</body>

</html>