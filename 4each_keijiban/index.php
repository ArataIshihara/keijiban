<!DOCTYPE html>
<html lang="ja">
    
    <head>
        <meta charset="UTF-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
<body>
    
    <?php
    
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    $stmt = $pdo->query("select*from 4each_keijiban");
    
    ?>
    
    
    <div class="logo">
       <div class="logo_pic">
           <img src="4eachblog_logo.jpg">
       </div>
    </div>
    <header>
    <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
    </ul>
    </header>
    
    <main>
        <div class="main-container">
            <div class="left">
                <h1>プログラミングに役立つ掲示板</h1>
                <form action="insert.php" method="post">
                <h2>入力フォーム</h2>
                <div>
                    <label>ハンドルネーム</label>
                    <br>
                    <input type="text" class="text" size="35" name="handlename">
                   </div>
            
                <div>
                    <label>タイトル</label>
                    <br>
                    <input type="text" class="text" size="35" name="title">
                </div>
                <div>
                    <label>コメント</label>
                    <br>
                    <textarea cols="35" rows="7" name="comments"></textarea>
                </div>
                <div>
                    <input type="submit" class="submit" value="投稿する"/>
                </div>
                </form>
                
                <form>
                    <?php
                    
                    while ($row= $stmt->fetch()){
                       
                        echo"<form>";
                        echo"<div class='kiji'>";
                        echo"<h4>".$row['title']."</h4>";
                        echo"<div class='comments'>";
                        echo $row['comments'];
                        echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                        echo "</div>";
                        echo "</div>";
                        echo"</form>";
                    }
                    
                    ?>
                </form>

            </div>
            
            <div class="right">
                <h3>人気の記事</h3>
                <div class="list">
                     <p>PHPオススメ本</p>
                     <p>PHP MyAdminの使い方</p>
                     <p>今人気のエディタ Top5</p>
                     <p>HTMLの基礎</p>
                </div>
                <h3>オススメリンク</h3>
                <div class="list"> 
                     <p> インターノウス株式会社</p>
                     <p> XAMPPのダウンロード</p>
                     <p> Eclipseのダウンロード</p>
                     <p> Bracketsのダウンロード</p>
                </div>
                <h3>カテゴリ</h3>
                <div class="list">
                     <p> HTML</p>
                     <p> PHP</p>
                     <p> MySQL</p>
                     <p> JavaScript</p>
                </div>
            </div>
        </div>
    </main>
    
    <footer>
        <p>copyright ©︎ internous | 4each blog the which provides A to Z about programming.</p>
    </footer>
        
</body>
</html>
