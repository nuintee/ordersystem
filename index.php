<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注文ごっこ</title>
</head>
<body>

    <main>
        <h2><ruby><rb>注文<rb><rt>ちゅうもん</rt>ごっこ</ruby></h2>

        <div class ="nav-container">
            <a href ="clerk.php" class = "nav" id ="clerk-btn">店員さんになる</a>
            <a href ="customer.php"  class ="nav" id ="customer-btn">お客さんになる</a>
        </div>
        
        <p class ="version-txt">Version 1.0</p>
    </main>

    <style>

        html{
            width:100%;
            height:100%;
            font-family:Arial,Meiryo,sans-serif;
        }

        body{
            margin:0;
            text-align:center;
            width:100%;
            height:100%;
        }


        .nav{
            padding:32px;
            border-radius:50px;
            border:none;
            outline:none;
            cursor:pointer;
            width:800px;
            margin:8px 0;
            color:#FFF;
            text-decoration:none;
        }

        #clerk-btn{
            background:linear-gradient(to right,#5CCDFF , #2B73FF);
        }

        #customer-btn{
            background:linear-gradient(to right,#FFB833 , #FF7F00);
        }

        .nav-container{
            display:flex;
            justify-content:space-between;
            flex-wrap:wrap;
            padding:0 16px;
        }

    </style>
</body>
</html>