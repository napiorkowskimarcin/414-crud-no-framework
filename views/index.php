<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Aurora</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="articles.php">View</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Add</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt5">
                <h2 class="text-center"> ARTICLES HOMEWORK</h2>
            </div>
        </div>
        <div class="row">
            <?php 
        include '../model/model.php';
        $model = new Model();
        $create = $model->create();
            ?>
            <form action="" method="post" autocomplete="off">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control mb-3">
                </div>
                <div class="form-group">
                    <label for="descr">Description</label>
                    <input type="text" name="descr" class="form-control mb-3">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control mb-3">
                        <option value="1">to publish</option>
                        <option value="0">editor only</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary"> ADD</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

</body>

</html>