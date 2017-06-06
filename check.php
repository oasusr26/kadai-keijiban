<?php require 'common/header.php';?>
<?php require 'common/navbar.php';?>
<?php
function h($str) {
    return htmlspecialchars($str);
}

$user = h($_POST['user']);
$content = h($_POST['content']);
$password = h($_POST['password']);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">ご投稿内容確認</h3>
                </div>
                <div class="panel-body" style="color: #75A3B9; font-weight: bold;">
                    <?php
                        echo '<P>ユーザーネーム:', $user, '</P>';
                        echo '<P>本文:', $content, '</P>';
                        echo '<P>パスワード:', $password, '</P>';
                    ?>
                </div>
            </div>
            <div class="center-block">
                <form>
                    <button type="button" onclick="history.back()" class="btn btn-warning col-sm-3 col-sm-offset-1">戻る</button>
                </form>
                <form action="list.php" method="post">
                    <input type="hidden" name="user" value="<?= $user;?>">
                    <input type="hidden" name="content" value="<?= $content;?>">
                    <input type="hidden" name="password" value="<?= $password;?>">
                    <button type="submit" class="btn btn-success col-sm-6 col-sm-offset-1">投稿</button> 
                </form>
            </div>
        </div>
    </div>
</div>
<?php require 'common/footer.php';?>