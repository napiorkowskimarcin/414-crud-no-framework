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

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">DB id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Descr</th>
                        <th scope="col">Status</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include '../model/model.php';
                    $model = new Model();
                    $rows = $model->fetch();
                    $i =1;
                    if(!empty($rows)){
                        foreach($rows as $row){
                    
            ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['title'] ?></td>
                        <td><?php echo $row['descr'] ?></td>
                        <td><?php if ($row['status']) {echo 'published';}else {echo 'editor version';} ?></td>
                        <td>
                            <a href="../read.php?id=<?php echo $row['id']; ?>" class="badge bg-info text-dark">show</a>
                            <a href="../update.php?id=<?php echo $row['id']; ?>" class="badge bg-success">edit</a>
                            <a href="../model/delete.php?id=<?php echo $row['id']; ?>"
                                class="badge bg-danger">delete</a>
                        </td>
                    </tr>
                    <?php }} ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

</body>

</html>