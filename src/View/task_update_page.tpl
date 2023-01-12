<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Task</title>
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
        <a href="/toDoWithDataBase/new">Create</a>
    </div>
</header>
<main>
<form method="post" action="/toDoWithDataBase/update">
<fieldset>
    <legend><h3>Update Task</h3></legend>
    <input type="hidden" name="task_id" value="{$data.id}">
    <div class="display-flex">
        <div>
            <label>Name:</label>
            <input type="text" name="name" required value="{$data.name}">
        </div>
        <div>
            <label>Description:</label>
            <textarea type="text" name="description">{$data.description}</textarea>
        </div>
      <input class="submit-button" type="submit" value="Create"> {*  <<< su situ reikia i6siusti _POST kad UPDATE'intu *}
    </div>
</fieldset>

</form>
</main>
</body>
</html>