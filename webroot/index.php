<?php
require_once dirname ( __FILE__ ) . '/../UnnaturalJapaneseGenerator/UnnaturalJapaneseGenerator.php';

use UnnaturalJapaneseGenerator\UnnaturalJapaneseGenerator;

$post_text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$post_text = str_replace(')', '', str_replace('(', '', $post_text));

/*
todo
・ログ実装
・文字数制限（カウント付き）
・ツイートボタン
・見た目を整える
*/

?>
<!DOCTYPE>
<html lang="ja">
    <head>
        <title>不自然な日本語ジェネレーター</title>
        <meta charset=utf-8>
        <meta http-equiv=X-UA-Compatible content="IE=edge">
        <meta name=viewport content="width=device-width,initial-scale=1">
        <meta name=description content="">
        <meta name=keywords content="誤翻訳">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link  rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css?<?=time()?>>">
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <h1>不自然な日本語ジェネレーター</h1>
        <main>
            <form id="submit_area" action = "index.php" method = "post">
                <p>変換したいテキストを入力してください。<p>
                <textarea name="text" class="form-control" rows="3"><?= $post_text ?></textarea>
                <button type="submit" class="btn btn-default">変換</button>
            </form>
            <div>
                <?= new UnnaturalJapaneseGenerator($post_text) ?>
            </div>
        </main>
    </body>
</html>
