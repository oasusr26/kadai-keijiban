<?php require 'common/header.php';?>
<?php require 'common/navbar.php';?>
<?php
function h($str) {
    return htmlspecialchars($str);
}

// check.phpよりpostで受け取る
$user = h($_POST['user'], ENT_QUOTES, 'utf-8');
$content = h($_POST['content'], ENT_QUOTES, 'utf-8');
$password = h($_POST['password'], ENT_QUOTES, 'utf-8');

try {
    
$pdo = new PDO('mysql:host=localhost;dbname=keijiban;charset=utf8', 'root', 'testes77');

// postではなく、getだったら、投稿を作らない設定
if ($user && $content && $password) {
    // DBへデータを保存
    $sql = $pdo->prepare('insert into keijiban (user, content, password) values (?, ?, ?)');
    $sql->execute();
    $sql = null;
}

// DBよりデータを抽出
$sql = $pdo->prepare('select * from keijiban where 1');
$sql->execute();

} catch (Exception $e) {
    echo '<div class="text-center">';
    echo '<p>ただいま障害により、大変ご迷惑をお掛けいたしております。</p>';
    echo '<p>復旧まで今しばらくお待ちください。</p>';
    echo '</div>';
}

?>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <?php require 'common/sidebar.php';?>
        </div>
        <div class="col-sm-9">
            <main>
                <h1>投稿一覧ページ</h1>
                <?php
                // 投稿の書込み一覧
                foreach ($sql->fetchAll() as $row) {
                    echo '<ul class="list-unstyled">';
                    echo    '<li>書き込み番号:', $row['id'], '</li>';
                    echo    '<li>日時:', $row['created_at'], '</li>';
                    echo    '<li>ハンドルネーム:', $row['user'], '</li>';
                    echo    '<li>本文:', $row['content'], '</li>';
                    echo '</ul>';
                }
                
                ?>
            </main>
        </div>
    </div>
</div>

        
<?php require 'common/footer.php';?>