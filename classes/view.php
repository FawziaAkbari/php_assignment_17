<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
</head>
<body>
    <ul>
        <?php foreach($students as $student): ?>

            <li>
                    <?php  if($student->isAttendence()): ?>

                            <strike><?=  $student->present; ?></strike>
                            
                            <?php else: ?>
                                <?= $student->present; ?>
                
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>