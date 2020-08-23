<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注文ごっこ</title>
</head>

<header>
    <nav class ="nav-header">
        <a href="index.php"></a>
        <?php echo "<p class ='mode-txt'>".$mode."さんモード"."</p>";
        echo $edit; ?>
    </nav>
</header>

<style>

    * {
        font-family:Arial,Meiryo,sans-serif;
        touch-action:manipulation;
    }

    body{
        margin:0;
    }
    
    a{
        width:56px;
        text-align:center;
        background-image:url("images/home.png");
        background-position:center;
        background-repeat:no-repeat;
        background-size:40%;
    }

    .nav-header{
        display:flex;
        padding:0 16px;
        justify-content:space-between;
    }

    .mode-txt{
        color:#FFF;
    }

    .edit-btn{
        width:56px;
        background-color:transparent;
        background-image:url("images/edit.png");
        background-position:center;
        background-repeat:no-repeat;
        background-size:30%;
        border:none;
        outline:none;
        cursor:pointer;
    }

    .dis{
        visibility:hidden;
    }

</style>