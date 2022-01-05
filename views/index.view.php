<?php require('partials/head.php'); ?>
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


        <h2>Submit your name</h2>
        <form method="POST" action="/names">
            <input name = "name"></input>
            <button type="submit">Submit</button>
        </form>
<?php foreach ($users as $user)  : ?>
    <li><?=$user ->name; ?></li>
<?php endforeach; ?>
<?php require('partials/footer.php'); ?>
