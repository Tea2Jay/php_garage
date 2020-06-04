<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Documnet</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <h1><?="hello ". htmlspecialchars($_GET['key']); 
            
            ?>
        </h1>
    </header>
</body>

</html>