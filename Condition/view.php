<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <strong>Name: </strong>
        <strong><?= $student_feature["name"]?></strong><br>
        <strong>Assignment: </strong>
        <strong><?= $student_feature["assignment"]?></strong><br>
        <strong>Status: </strong>
        <strong><?php if($student_feature["status"]) {
            echo "Finished";
        } else {
            echo"Incompleted" ;
        } ?></strong><br>
    
    </body>
</html>