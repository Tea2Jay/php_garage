<?php require('partials/header.php') ?>


<?php foreach ($tasks as $task) : ?>
    <li><?= $task->description ."\t" . $task->completed ?></li>
<?php endforeach ?>

<h1>Enter your Task</h1>
<form method="POST" action="/task">
    <input name="description">
    <input name="completed">
    <button type="submit">Submit</button>


</form>

<?php require('partials/footer.php') ?>