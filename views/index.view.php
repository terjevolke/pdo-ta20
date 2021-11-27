<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Title</title>
</head>
<body>
<h1>Todo list</h1>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <strike><?= $task->description; ?></strike>
                    <?php else: ?>
                        <?= $task->description; ?>
                        <?= $task->assigned_to; ?>
                        <?php   switch ($task->importance) {
         case '1':
           echo "&#10032;";
           break;
         case '2':
           echo "&#10032;&#10032;";
           break;
         case '3':
           echo "&#10032;.&#10032;.&#10032;";
           break;
           default:
             echo "&#10032;&#10032;&#10032;&#10032;";
       } ?>
                    <?php endif; ?>
                </li>
        <?php endforeach; ?>
   </body>
</html>
