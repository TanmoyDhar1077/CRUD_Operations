<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Student Data</h1>
    
    <div class="container">
    <div class="d-flex justify-content-end my-5">
        <a href="insert.php" class="btn btn-primary">Add Data</a>
    </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-dark">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Created Time</th>
                            <th scope="col">Updated Time</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                       <?php foreach($showData as $key => $value): ?>
                       <tr>
                           <td scope="col"><?= $key + 1 ?></td>
                           <td scope="col"><?= $value['name']?></td>
                           <td scope="col"><?= $value['email']?></td>
                           <td scope="col"><?= $value['status'] == 1 ? "Active" : "Inactive" ?></td>
                           <td scope="col"><?= date('d M, Y h:i:s A', strtotime($value['created_at']))?></td>
                           <td scope="col"><?= $value['updated_at'] ? date('d M, Y h:i:s A', strtotime($value['updated_at'])) :'NULL' ?></td>  
                           <td scope="col">
                           <a href="status.php?id=<?= $value['id']?>" class="btn <?= $value['status'] == 1 ? "btn-warning" : "btn-success" ?>"><?= $value['status'] == 1 ? "Inactive" : "Active" ?></a>
                            <a href="edit.php?id=<?= $value['id']?>" class="btn btn-primary">Edit</a>
                            <a href="delete.php?id=<?= $value['id']?>" class="btn btn-danger">Delete</a>
                           </td>                                 
                       </tr>
                       <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>