<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter name">
            </div>
            
            <div class="form-group">
                <label>LastName</label>
                <input type="text" class="form-control" placeholder="Enter lastname">
            </div>
            
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter email">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input">
                    <label class="custom-file-label">Choose file</label>
                </div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Save Data</button>
        </form>
    </div>
</body>
</html>