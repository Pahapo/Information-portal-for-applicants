            <?php require('require/head.php'); ?>
            <?php require('require/loading.php'); ?>

            <header class="header">
                <div class="header_title">
                    <h1 class="padding_none">Электротехнический факультет</h1>
                </div>
            </header>
            
            
            <div class="container">
                <!--LiveInternet counter-->
                <div class="combination__hidden">
                    <img id="licntEA9A" width="88" height="31" class="combination__active" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAIBTAA7">
                    <script>(function(d,s){d.getElementById("licntEA9A").src="https://counter.yadro.ru/hit?t14.6;r"+escape(d.referrer)+((typeof(s)=="undefined")?"":";s"+s.width+"*"+s.height+"*"+(s.colorDepth?s.colorDepth:s.pixelDepth))+";u"+escape(d.URL)+";h"+escape(d.title.substring(0,150))+";"+Math.random()})(document,screen)</script>
                </div>
                
                <section class="max-img">
                    <h1 class="main-title hidden">Главное</h1>
                    <h1 class="main-text-1 hidden">Выбор специализации</h1>

                    <?php require('require/specialization_etf.php'); ?> <!-- only for etf -->
                    
                    <?php require('require/mini_block_1.php'); ?>
                            
                    <?php require('require/first_part_mini_blocks_etf.php'); ?> <!-- only for etf -->

                    <?php require('require/mini_block_2.php'); ?>

                </section>
            </div>

        <?php require('require/endpage.php'); ?>