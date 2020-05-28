<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <title>Page de test</title>
    <style>
        .container-fluid {
            background-color: cyan;
        }

        .col-6 {
            background-color: green;
        }
    </style>
</head>
<body>
    <?php include('menu.php') ?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
            One of three columns
            </div>
            <div class="col-6">
            One of three columns
            </div>
            <div class="col-3">
            One of three columns
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>        