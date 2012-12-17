<section data-role="page">
    <header data-role="header">
        <h1>PCinfo</h1>
    </header>

    <div data-role="content" id="content"> 

        <dl>
            <dt id="top">IPアドレス</dt>
            <dd class="access_dd"><?= e($_GET["ip"]); ?></dd>
            <dt class="access_dt">ホスト情報</dt>
            <dd class="access_dd"><?= e($_GET["remote_addr"]); ?><</dd>
            <dt class="access_dt">ユーザーエージェント</dt>
            <dd class="access_dd"><?= e($_GET["user"]); ?></dd>
            <dt class="access_dt">ブラウザ</dt>
            <dd class="access_dd"><?= e($_GET["browser"]); ?></dd>
            <dt class="access_dt">ブラウザバージョン</dt>
            <dd class="access_dd"><?= e($_GET["version"]); ?></dd>
            <dt class="access_dt">OS</dt>
            <dd class="access_dd"><?= e($_GET["os"]); ?></dd>
            <dt class="access_dt">OSバージョン</dt>
            <dd class="access_dd"><?= e($_GET["osver"]); ?></dd>
            <dt class="access_dt">エンコーディング</dt>
            <dd class="access_dd"><?= e($_GET["charset"]); ?></dd>
            <dt class="access_dt">対応言語</dt>
            <dd class="access_dd"><?= e($_GET["language"]); ?></dd>
            <dt class="access_dt">HTTP_ACCEPT</dt>
            <dd class="access_dd"><?= e($_GET["accept"]); ?></dd>
            <dt class="access_dt">HTTP_ACCEPT_ENCODING</dt>
            <dd class="access_dd"><?= e($_GET["encoding"]); ?></dd>
            <dt class="access_dt">HTTP_CONNECTION</dt>
            <dd class="access_dd"><?= e($_GET["connection"]); ?></dd>
            <dt class="access_dt">リファラ</dt>
            <dd class="access_dd"><?= e($_GET["ref"]); ?></dd>
            <dt class="access_dt">取得時間</dt>
            <dd id="last"><?php echo e($_GET["week"]);echo e($_GET["time"]); ?></dd>
        </dl>
        <br>
        <br>
        <a href="#dialog" data-role="button" data-rel="dialog" data-transition="pop" id="accordion_title">このPCの情報を人に教える。</a>
    </div>
    <footer data-role="footer">
        <h1><a href="http://www.geekz-dev.net/" >Powerd by Geekz</a></h1>
    </footer>

</section>
