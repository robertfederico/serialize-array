<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card mt-5">
                    <div class="card-body">
                        <form id="form">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="enter email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="firstName" placeholder="enter name">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">

            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#form').on('submit', function(e) {
            e.preventDefault();

            var data = JSON.stringify($(this).serializeArray());

            $.ajax({
                url: "functions.php",
                method: "POST",
                data: {
                    'data': data,
                },
                success: function(msg) {
                    console.log(msg);
                }
            })
        })
    })
    </script>

</body>

</html>