<?php
    require_once "./src/config/koneksi.php";
   
    $gpa_details_student = new GpaDetailsStudent();
    $hasil = $gpa_details_student->tampilData();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPA Details Student</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 80%;
            margin-top: 50px;
        }
        .table-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 20px;
        }
        h1 {
            color: #007bff;
            margin-bottom: 30px;
        }
        .table th {
            background-color: #007bff;
            color: white;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0,123,255,0.05);
        }
    </style>
</head>
<body>
    <?php require_once "./src/partials/navbar.php"; ?>
    
    <div class="container">
        <h1 class="text-center">GPA Details Student</h1>
        <div class="table-container">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID GPA</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Semester GPA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach($hasil as $row) {
                    ?>
                    <tr>
                        <td><?=$no++ ?></td>
                        <td><?=$row['id_gpa'] ?></td>
                        <td><?=$row['semester'] ?></td>
                        <td><?=$row['semester_gpa'] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php require_once './src/partials/footer.php'; ?>

    