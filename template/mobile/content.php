<section data-role="page">
    <header data-role="header">
        <h1>PCinfo</h1>
    </header>

    <div data-role="content" id="content"> 

        <dl>
            <dt id="top">IPアドレス</dt>
            <dd class="access_dd"><?= $ip; ?></dd>
            <dt class="access_dt">ホスト情報</dt>
            <dd class="access_dd"><?=$remote_addr; ?></dd>
            <dt class="access_dt">ユーザーエージェント</dt>
            <dd class="access_dd"><?= $user; ?></dd>
            <dt class="access_dt">ブラウザ</dt>
            <dd class="access_dd"><?= $agent[0]; ?></dd>
            <dt class="access_dt">ブラウザバージョン</dt>
            <dd class="access_dd"><?= $agent[1]; ?></dd>
            <dt class="access_dt">解像度</dt>
            <dd class="access_dd">
                <script type="text/javascript">
                    document.write(screen.width+"×"+screen.height+"<br/>");
                </script>
            </dd>
            <dt class="access_dt">OS</dt>
            <dd class="access_dd"><?= $vars[0]; ?></dd>
            <dt class="access_dt">OSバージョン</dt>
            <dd class="access_dd"><?= $vars[1]; ?></dd>
            <dt class="access_dt">エンコーディング</dt>
            <dd class="access_dd"><?= $charset; ?></dd>
            <dt class="access_dt">対応言語</dt>
            <dd class="access_dd"><?= $language; ?></dd>
            <dt class="access_dt">HTTP_ACCEPT</dt>
            <dd class="access_dd"><?= $accept; ?></dd>
            <dt class="access_dt">HTTP_ACCEPT_ENCODING</dt>
            <dd class="access_dd"><?= $encoding; ?></dd>
            <dt class="access_dt">HTTP_CONNECTION</dt>
            <dd class="access_dd"><?= $connection; ?></dd>
            <dt class="access_dt">リファラ</dt>
            <dd class="access_dd"><?= $ref; ?></dd>
            <dt class="access_dt">取得時間</dt>
            <dd id="last"><?php echo $week;echo $time; ?></dd>
        </dl>
        <br>
        <br>
        <a href="#dialog" data-role="button" data-rel="dialog" data-transition="pop" id="accordion_title">このPCの情報を人に教える。</a>
    </div>
    <footer data-role="footer">
        <h1><a href="http://www.geekz-dev.net/" >Powerd by Geekz</a></h1>
    </footer>

</section>
