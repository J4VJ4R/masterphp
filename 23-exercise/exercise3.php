<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator JARA</title>
    <!-- css bootsatrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row align-items-center">
        <div class="col-12 text-center mt-5">
            <h1>Enter your numbers here</h1>
        </div>

        <form action="calculator.php" class="col-12">
            <div class="d-flex justify-content-center">

                <label for="number1">Number 1</label>
                <input type="number" name="number1" required>
                <label for="number1">Number 2</label>
                <input type="number" name="number2" required>
            </div>
            <br>
        <div class="col-12 text-center">

            <button type="submit" class="btn btn-primary" name="sum">Sum</button>
            <button type="submit" class="btn btn-primary" name="sum">Sub</button>
            <button type="submit" class="btn btn-primary" name="sum">Mul</button>
            <button type="submit" class="btn btn-primary" name="sum">Div</button>
        </div>

        </form>
</div>


<!-- Bootstrap js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>