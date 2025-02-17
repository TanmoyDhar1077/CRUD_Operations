<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- Create a form for add name, email, status -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Add Student Data</h1>
                <div class="d-flex justify-content-end my-5">
                    <a href="index.php" class="btn btn-primary">Back</a>
                </div>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Name:</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Roll:</label>
                        <input type="number" class="form-control" name="roll" placeholder="Enter Roll" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Registation Number:</label>
                        <input type="number" class="form-control" name="registration" placeholder="Enter Registation Number" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Student">
                    </div>
                       
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>