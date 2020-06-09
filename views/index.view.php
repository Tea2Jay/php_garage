<?php require('partials/header.php') ?>

<h1>Enter your Task</h1>
<form method="POST" action="/task">
    <input name="descrption">
    <input name="completed">
    <button type="submit">Submit</button>


</form>

<?php require('partials/footer.php') ?>