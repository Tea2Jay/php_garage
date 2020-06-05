<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Documnet</title>
</head>

<body>
    <ul>
        <li>
            <strong>Name:</strong> <?= $task['title'] ?>
        </li>
        <li>
            <strong>Due date:</strong> <?= $task['due'] ?>
        </li>
        <li>
            <strong>Person responsible:</strong> <?= $task['assigned_to'] ?>
        </li>
        <li>
            <strong>Status:</strong>
            <?php if ($task['completed']) : ?>
                <span>&#9989;</span>
            <?php else : ?>
                <span>&#10060;</span>
            <?php endif ?>
        </li>

    </ul>


</body>

</html>