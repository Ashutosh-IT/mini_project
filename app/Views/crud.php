<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD IN CI</title>
    <link rel="stylesheet" href="http://localhost/crud_in_ci/public/css/bootstrap.min.css">
</head>
<body>
    <div class="container bg-warning mt-5 pt-3 pb-3" >
       <h1 style="text-align:center">CRUD OPERATIONS IN CODEIGNITER</h1>
    </div>

    <div class="container mt-5">
        <div class="clear-fix">
            <h3 style="float:left">All Students</h3>
            <a class="btn btn-primary" style="float:right" href="http://localhost/crud_in_ci/public/create">Add New Student</a>
        </div>

        
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Student URN</th>
                        <th>Student Name</th>
                        <th>Student Branch</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($students) : ?>
                    <?php foreach($students as $row) : ?>
                    <tr>
                        <td><?php echo $row['urn']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['branch']; ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                        <td><?php echo $row['updated_at'] ? $row['updated_at'] : 'NULL'; ?></td>
                        <td>
                            <a class="btn btn-success" href="<?= site_url('Crud/edit/'.$row['urn']) ?>">Edit</a>
                            <a class="btn btn-danger" href="<?= site_url('Crud/delete/'.$row['urn'])?>">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            
        
    </div>
    
</body>
</html>