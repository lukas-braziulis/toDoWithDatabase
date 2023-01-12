<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create New Task</title>
    {*    CSS'o uzloadininmas*}
    {block name="css"}
        <link rel="stylesheet" href="./src/assets/css/main.css" media="all" />
    {/block}

    {*    JS uzloadinimas*}
    {block name="js"}
        <script src="./src/assets/js/main.js"></script>
    {/block}
</head>
<body>
<header>
    <div class="topnav">
        <a href="/toDoWithDataBase">Home</a>
        <a class="active" href="/toDoWithDataBase/new">Create</a>
    </div>
</header>
<main>
<form method="post" action="/toDoWithDataBase/create">
<fieldset>
    <legend><h3>Create New Task</h3></legend>
    <div class="display-flex">
        <div>
            <label>Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Description:</label>
            <textarea type="text" name="description"></textarea>
        </div>
        <input class="submit-button" type="submit" value="Create">
    </div>
</fieldset>

</form>
</main>
</body>
</html>