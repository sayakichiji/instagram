{"filter":false,"title":"booklist.php","tooltip":"/booklist.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":69,"column":0},"end":{"row":69,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"d0344bd1b92faf1efb699214d91d3163a9ab84b6","undoManager":{"mark":20,"position":20,"stack":[[{"start":{"row":0,"column":0},"end":{"row":21,"column":0},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <li>はじめてのWebアプリケーション</li>","            <li>かんたん！PHPプログラミング</li>","            <li>PHP+MySQLで作るWebアプリケーション</li>","        </ul>","    </body>","</html>",""],"id":1}],[{"start":{"row":21,"column":0},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":22,"column":0},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <li>はじめてのWebアプリケーション</li>","            <li>かんたん！PHPプログラミング</li>","            <li>PHP+MySQLで作るWebアプリケーション</li>","        </ul>","    </body>","</html>","",""],"id":3}],[{"start":{"row":0,"column":0},"end":{"row":27,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード（本番では削除）","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>"],"id":4}],[{"start":{"row":0,"column":0},"end":{"row":27,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード（本番では削除）","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>"],"id":5}],[{"start":{"row":0,"column":0},"end":{"row":20,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>"],"id":6}],[{"start":{"row":0,"column":0},"end":{"row":20,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>"],"id":7}],[{"start":{"row":0,"column":0},"end":{"row":20,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>"],"id":8}],[{"start":{"row":0,"column":0},"end":{"row":20,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>"],"id":9}],[{"start":{"row":0,"column":0},"end":{"row":110,"column":7},"action":"insert","lines":["","Lesson7","PHP+MySQL","1. Lesson Objectives","In this lesson, we’ll learn to use PHP and MySQL together to make a web application that can save data. Using the two together, we can save form data like we couldn’t before. Things are finally starting to come together.","","Using a program and a database together is an powerful tool in making not only a web application, but a smartphone app, a Windows app, a Mac app, or any of a wide variety of types of application. Most applications deal with user data. This requires interaction between a program and a database.","","Now, let’s explore how to make a program and a database work together.","","2. Start with HTML","The core of application development is a series of short cycles of building and checking. Don’t try to build a whole application at once. Start smaller, especially when using technology you aren’t familiar with, and frequently run it to check how it behaves.","","Let’s start with a static web page in HTML. This time we’ll be making a web application called booklist.php.","","booklist.php","","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <li>はじめてのWebアプリケーション</li>","            <li>かんたん！PHPプログラミング</li>","            <li>PHP+MySQLで作るWebアプリケーション</li>","        </ul>","    </body>","</html>","We have an input form and a list, about the simplest web application imaginable.","","The form element’s action=\"booklist.php\" specifies that the form will be sent to itself (booklist.php). The input element has a placeholder attribute (placeholder=\"書籍タイトルを入力\") that explains what kind of data a user should enter in the text field. It will display with somewhat grayed-out characters familiar to users of the web. The required attribute means that the form cannot be sent with this field empty.","","First, create booklist.php as above, then start your web server and see how it looks. You can start your web server in Cloud9 with the “Run Project” option in the upper right of the screen. Then add /booklist.php to the end of the URL and access that to view the page.","","Right now, we don’t have a PHP program to do anything with the form data, so it just gets discarded when you submit the form.","","3. Rewrite the dynamic portions of your HTML to PHP","Now that we’ve displayed the page, let’s rewrite the parts of the HTML that we want to make dynamic in PHP. In this case, that will be the li elements in the list of books","","booklist.php","","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォ���ム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>","We’ll add a loop to generate the list after getting our data from MySQL, so we don’t know yet what kind of loop will be appropriate. For now, we’ve added placeholder <?php // comment ?> comments to remind us roughly what we mean to do here. We’ll loop over the book titles saved in the database and dynamically generate an HTML li tag for each one.","","At this point, we know what portion of the code will become dynamic php (the li elements) and what data we need (a list of book title strings).","","Adding code to test","Development involves making a lot of small checks, such as “is this form being sent properly?” You can add code to check these things easily and make sure your program behaves properly.","","This time, we want to make sure our form data is always being sent properly, so we’ll add a little code to confirm that.","","booklist.php","","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード（本番では削除）","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>"],"id":10}],[{"start":{"row":0,"column":0},"end":{"row":110,"column":7},"action":"remove","lines":["","Lesson7","PHP+MySQL","1. Lesson Objectives","In this lesson, we’ll learn to use PHP and MySQL together to make a web application that can save data. Using the two together, we can save form data like we couldn’t before. Things are finally starting to come together.","","Using a program and a database together is an powerful tool in making not only a web application, but a smartphone app, a Windows app, a Mac app, or any of a wide variety of types of application. Most applications deal with user data. This requires interaction between a program and a database.","","Now, let’s explore how to make a program and a database work together.","","2. Start with HTML","The core of application development is a series of short cycles of building and checking. Don’t try to build a whole application at once. Start smaller, especially when using technology you aren’t familiar with, and frequently run it to check how it behaves.","","Let’s start with a static web page in HTML. This time we’ll be making a web application called booklist.php.","","booklist.php","","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <li>はじめてのWebアプリケーション</li>","            <li>かんたん！PHPプログラミング</li>","            <li>PHP+MySQLで作るWebアプリケーション</li>","        </ul>","    </body>","</html>","We have an input form and a list, about the simplest web application imaginable.","","The form element’s action=\"booklist.php\" specifies that the form will be sent to itself (booklist.php). The input element has a placeholder attribute (placeholder=\"書籍タイトルを入力\") that explains what kind of data a user should enter in the text field. It will display with somewhat grayed-out characters familiar to users of the web. The required attribute means that the form cannot be sent with this field empty.","","First, create booklist.php as above, then start your web server and see how it looks. You can start your web server in Cloud9 with the “Run Project” option in the upper right of the screen. Then add /booklist.php to the end of the URL and access that to view the page.","","Right now, we don’t have a PHP program to do anything with the form data, so it just gets discarded when you submit the form.","","3. Rewrite the dynamic portions of your HTML to PHP","Now that we’ve displayed the page, let’s rewrite the parts of the HTML that we want to make dynamic in PHP. In this case, that will be the li elements in the list of books","","booklist.php","","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>","We’ll add a loop to generate the list after getting our data from MySQL, so we don’t know yet what kind of loop will be appropriate. For now, we’ve added placeholder <?php // comment ?> comments to remind us roughly what we mean to do here. We’ll loop over the book titles saved in the database and dynamically generate an HTML li tag for each one.","","At this point, we know what portion of the code will become dynamic php (the li elements) and what data we need (a list of book title strings).","","Adding code to test","Development involves making a lot of small checks, such as “is this form being sent properly?” You can add code to check these things easily and make sure your program behaves properly.","","This time, we want to make sure our form data is always being sent properly, so we’ll add a little code to confirm that.","","booklist.php","","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","<?php","    // フォ��ムデータ送受信確認用コード（本番では削除）","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>"],"id":11}],[{"start":{"row":0,"column":0},"end":{"row":28,"column":0},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード（本番では削除）","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>",""],"id":12}],[{"start":{"row":0,"column":0},"end":{"row":28,"column":0},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード（本番では削除）","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"���録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ル���プ 終了 ?>","        </ul>","    </body>","</html>",""],"id":13}],[{"start":{"row":0,"column":0},"end":{"row":27,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード（本番では削除）","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>"],"id":14}],[{"start":{"row":0,"column":0},"end":{"row":27,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード（本番では削除）","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>"],"id":15}],[{"start":{"row":0,"column":0},"end":{"row":27,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード（本番では削除）","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>"],"id":16}],[{"start":{"row":27,"column":7},"end":{"row":28,"column":0},"action":"insert","lines":["",""],"id":17}],[{"start":{"row":0,"column":0},"end":{"row":27,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード（本番では削除）","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>"],"id":18}],[{"start":{"row":0,"column":0},"end":{"row":68,"column":7},"action":"insert","lines":["<?php","    // MySQLサーバ接続に必要な値を変数に代入","    $username = 'root';","    $password = '';","","    // PDO のインスタンスを生成して、MySQLサーバに接続","    $database = new PDO('mysql:host=localhost;dbname=booklist;charset=UTF8;', $username, $password);","","    // フォームから書籍タイトルが送信されていればデータベースに保存する","    if ($_POST['book_title']) {","        // 実行するSQLを作成","        $sql = 'INSERT INTO books (book_title) VALUES(:book_title)';","        // ユーザ��力に依存するSQLを実行するので、セキュリティ対策をする","        $statement = $database->prepare($sql);","        // ユーザ入力データ($_POST['book_title'])をVALUES(?)の?の部分に代入する","        $statement->bindParam(':book_title', $_POST['book_title']);","        // SQL文を実行する","        $statement->execute();","        // ステートメントを破棄する","        $statement = null;","    }","","    // 実行するSQLを作成","    $sql = 'SELECT * FROM books ORDER BY created_at DESC';","    // SQL を実行する直前のステートメントを取得する","    $statement = $database->query($sql);","    // ステートメントから SQL を実行し、レコードを取得する","    $records = $statement->fetchAll();","","    // ステートメントを破棄する","    $statement = null;","    // MySQLを使った処理が終わると、接続は不要なので切断する","    $database = null;","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>","        <h1><a href=\"booklist.php\">Booklist</a></h1>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"post\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","<?php","            if ($records) {","                foreach ($records as $record) {","                    $book_title = $record['book_title'];","?>","                    <li><?php print htmlspecialchars($book_title, ENT_QUOTES, 'UTF-8'); ?></li>","<?php","                }","            }","?>","        </ul>","    </body>","</html>"],"id":19}],[{"start":{"row":0,"column":0},"end":{"row":69,"column":0},"action":"remove","lines":["<?php","    // MySQLサーバ接続に必要な値を変数に代入","    $username = 'root';","    $password = '';","","    // PDO のインスタンスを生成して、MySQLサーバに接続","    $database = new PDO('mysql:host=localhost;dbname=booklist;charset=UTF8;', $username, $password);","","    // フォームから書籍タイトルが送信されていればデータベースに保存する","    if ($_POST['book_title']) {","        // 実行するSQLを作成","        $sql = 'INSERT INTO books (book_title) VALUES(:book_title)';","        // ユーザ入力に依存するSQLを実行するので、セキュリティ対策をする","        $statement = $database->prepare($sql);","        // ユーザ入力データ($_POST['book_title'])をVALUES(?)の?の部分に代入する","        $statement->bindParam(':book_title', $_POST['book_title']);","        // SQL文を実行する","        $statement->execute();","        // ステートメントを破棄する","        $statement = null;","    }","","    // 実行するSQLを作成","    $sql = 'SELECT * FROM books ORDER BY created_at DESC';","    // SQL を実行する直前のステートメントを取得する","    $statement = $database->query($sql);","    // ステートメントから SQL を実行し、レコードを取得する","    $records = $statement->fetchAll();","","    // ステートメントを破棄する","    $statement = null;","    // MySQLを使った処理が終わると、接続は不要なので切断する","    $database = null;","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>","        <h1><a href=\"booklist.php\">Booklist</a></h1>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"post\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","<?php","            if ($records) {","                foreach ($records as $record) {","                    $book_title = $record['book_title'];","?>","                    <li><?php print htmlspecialchars($book_title, ENT_QUOTES, 'UTF-8'); ?></li>","<?php","                }","            }","?>","        </ul>","    </body>","</html>",""],"id":20}],[{"start":{"row":0,"column":0},"end":{"row":69,"column":0},"action":"insert","lines":["<?php","    // MySQLサーバ接続に必要な値を変数に代入","    $username = 'root';","    $password = '';","","    // PDO のインスタンスを生成して、MySQLサーバに接続","    $database = new PDO('mysql:host=localhost;dbname=booklist;charset=UTF8;', $username, $password);","","    // フォームから書籍タイトルが送信されていればデータベースに保存する","    if ($_POST['book_title']) {","        // 実行するSQLを作成","        $sql = 'INSERT INTO books (book_title) VALUES(:book_title)';","        // ユーザ入力に依存するSQLを実行するので、セキュリティ対策をする","        $statement = $database->prepare($sql);","        // ユーザ入力データ($_POST['book_title'])をVALUES(?)の?の部分に代入する","        $statement->bindParam(':book_title', $_POST['book_title']);","        // SQL文を実行する","        $statement->execute();","        // ステートメントを破棄する","        $statement = null;","    }","","    // 実行するSQLを作成","    $sql = 'SELECT * FROM books ORDER BY created_at DESC';","    // SQL を実行する直前のステートメントを取得する","    $statement = $database->query($sql);","    // ステートメントから SQL を実行し、レコードを取得する","    $records = $statement->fetchAll();","","    // ステートメントを破棄する","    $statement = null;","    // MySQLを使った処理が終わると、接続は不要なので切断する","    $database = null;","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>","        <h1><a href=\"booklist.php\">Booklist</a></h1>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"post\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","<?php","            if ($records) {","                foreach ($records as $record) {","                    $book_title = $record['book_title'];","?>","                    <li><?php print htmlspecialchars($book_title, ENT_QUOTES, 'UTF-8'); ?></li>","<?php","                }","            }","?>","        </ul>","    </body>","</html>",""],"id":21}]]},"timestamp":1526625162028}