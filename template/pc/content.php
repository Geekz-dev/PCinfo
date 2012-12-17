<article id="main">

    <header id="main_header">
        <div id="header_nav">
            <h1><img src="./images/logo.png" id="header_logo" alt="PCinfo"></h1>
            <p>現在使用しているPCやネットワークの情報を表示・共有するサービス<br>共有する短縮URLは24時間で無効になります。</p>
        </div>
        <div id="share_menu">
            <button id="accordion_title">この情報を共有する</button>
            <input type="text" id="show_url" onclick="this.select()" />
            <img src="./images/loading.gif" id="loading" alt="loading" />
        </div>
    </header>

    <section id="access">

        <table border="1">
            <tbody>
                <tr><th>IPアドレス</th><td><?= $ip; ?></td></tr>
                <tr><th>ホスト情報</th><td><?=$remote_addr; ?></td></tr>
                <tr><th>ユーザーエージェント</th><td><?= $user; ?></td></tr>
                <tr><th>ブラウザ</th><td><?= $agent[0]; ?></td></tr>
                <tr><th>ブラウザバージョン</th><td><?= $agent[1]; ?></td></tr>
                <tr><th>解像度</th><td>
                    <script type="text/javascript">
                        document.write(screen.width+"×"+screen.height+"<br/>");
                    </script></td></tr>
                <tr><th>OS</th><td><?= $vars[0]; ?></td></tr>
                <?php if(!empty($vars[1])){ ?>
                    <tr><th>OSバージョン</th><td><?= $vars[1]; ?></td></tr>
                <?php } ?>
                <tr><th>エンコーディング</th><td><?= $charset; ?></td></tr>
                <tr><th>対応言語</th><td><?= $language; ?></td></tr>
                <tr><th>HTTP_ACCEPT</th><td><?= $accept; ?></td></tr>
                <tr><th>HTTP_ACCEPT_ENCODING</th><td><?= $encoding; ?></td></tr>
                <tr><th>HTTP_CONNECTION</th><td><?= $connection; ?></td></tr>
                <tr><th>リファラ</th><td><?= $ref; ?></td></tr>
                <tr><th>取得時間</th><td><?php echo $week;echo $time; ?></td></tr>
            </tbody>
        </table>
    </section>

    <footer id="powerd_geekz">
        <img src="./images/geekz.png" > 
    </div>

</article>
