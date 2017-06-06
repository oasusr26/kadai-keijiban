<?php require 'common/header.php';?>
<?php require 'common/navbar.php';?>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <?php require 'common/sidebar.php';?>
        </div>
        <div class="col-sm-9">
            <main>
                <h1>新規投稿作成</h1>
                <form action="index.php" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label for="user" class="control-label col-md-3">ハンドルネーム(必須)</label>
                        <div class="col-md-6">
                            <input type="text" name="user" id="user" class="form-control" maxlength="100" autofocus required aria-reqiured>
                        </div>
                    </div>
                    
                    <div class="form-group">
                            <label for="content" class="control-label col-md-3">本文(必須)</label>
                        <div class="col-md-6">
                            <textarea name="content" id="content" class="form-control" cols="60" rows="6" placepolder="４００文字以内でご記入ください" maxlength="400" reqiured aria-reqiured></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                            <label for="password" class="control-label col-md-3">パスワード(必須)</label>
                        <div class="col-md-6">
                            <input type="password" name="password" id="password" class="form-control" maxlength="255" rerquired aria-reqiured>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary col-xs-3 col-xs-offset-6">投稿</button>
                    </div>
                </form>
            </main>
        </div>
    </div>
</div>

        
<?php require 'common/footer.php';?>