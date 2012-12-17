<article id="main">

    <header id="main_header">
        <h1><img src="./images/logo.png" id="header_logo" alt="PCinfo"></h1>
        <div id="share_menu">
            <button id="accordion_title">共有確認中</button>
        </div>
    </header>

    <section id="access">

        <table border="1">
            <tbody>
                <tr><th>IPアドレス</th><td><?= e($_GET["ip"]); ?></td></tr>
                <tr><th>ホスト情報</th><td><?= e($_GET["remote_addr"]); ?></td></tr>
                <tr><th>ユーザーエージェント</th><td><?= e($_GET["user"]); ?></td></tr>
                <tr><th>ブラウザ</th><td><?= e($_GET["browser"]); ?></td></tr>
                <tr><th>ブラウザバージョン</th><td><?= e($_GET["version"]); ?></td></tr>
                <tr><th>OS</th><td><?= e($_GET["os"]); ?></td></tr>
                <?php if(!empty($_GET["osver"])){ ?>
                    <tr><th>OSバージョン</th><td><?= e($_GET["osver"]); ?></td></tr>
                <?php } ?>
                <tr><th>エンコーディング</th><td><?= e($_GET["charset"]); ?></td></tr>
                <tr><th>対応言語</th><td><?= e($_GET["language"]); ?></td></tr>
                <tr><th>HTTP_ACCEPT</th><td><?= e($_GET["accept"]); ?></td></tr>
                <tr><th>HTTP_ACCEPT_ENCODING</th><td><?= e($_GET["encoding"]); ?></td></tr>
                <tr><th>HTTP_CONNECTION</th><td><?= e($_GET["connection"]); ?></td></tr>
                <tr><th>リファラ</th><td><?= e($_GET["ref"]); ?></td></tr>
                <tr><th>取得時間</th><td><?php echo e($_GET["week"]);echo e($_GET["time"]); ?></td></tr>
            </tbody>
        </table>
    </section>

    <footer id="powerd_geekz">
        <img src="./images/geekz.png" > 
    </div>

</article>
