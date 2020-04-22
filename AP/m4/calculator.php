<!doctype html>
<br lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>MAK</title>

</head>

<body>


    <div class="container">

        <div class="row">

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                <legend>Calculator</legend>
                <hr>
                <div class="form-group">
                    <label for="n1">Number One : </label>
                    <input type="text" class="form-control" id="n1" placeholder="Input number one">
                    <label for="n2">Number Two : </label>
                    <input type="text" class="form-control" id="n2" placeholder="Input number two">
                </div>
                <button type="button" value='sds' class="btn btn-info">+</button>
                <button type="button" class="btn btn-primary">-</button>
                <button type="button" class="btn btn-success">/</button>
                <button type="button" class="btn btn-warning">*</button>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ">
                <label for="">Result :</label>
                <hr>
                <div id="result"></div>
            </div>

        </div>

    </div>
    <script>
        const el = {
            btn: document.querySelectorAll('button'),
            inp: document.querySelectorAll('input'),
            result: document.querySelector('#result')
        }
        const {
            btn,
            inp: numbers,
            result
        } = el;
        btn.forEach(item => {
            // console.log(item.textContent);
            item.onclick = () => {
                const xhr = new XMLHttpRequest();
                xhr.onreadystatechange = () => {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        result.innerHTML = xhr.responseText;
                    }
                }

                // GET
                // xhr.open('GET',`print.php?req=${item.textContent}&n1=${numbers[0].value}&n2=${numbers[1].value}`,true);
                // xhr.send()

                xhr.open('POST', `print.php`, true);// True => Async
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                /*
                    اگر form بود
                    
                */

                // POST
                xhr.send(`req=${item.textContent}&n1=${numbers[0].value}&n2=${numbers[1].value}`)
                /*
                    sending be sorate Post baraye backend na query
                */

            }
        });
    </script>

</body>

</html>