<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404</title>
{*    CSS'o uzloadininmas*}

{*    {block name="css"}*}
{*        <link rel="stylesheet" href="./src/assets/css/main.css" media="all" />*}
{*    {/block}*}
   <style>{include file="../assets/css/main.css" hide_sign=true}</style>

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
    <div class="not-found-block">
        <h2>Page is not found :(</h2>
        <br>
        <div>
            <img src="https://i.kym-cdn.com/entries/icons/mobile/000/026/489/crying.jpg" height="300">
        </div>
    </div>
</main>
</body>
</html>