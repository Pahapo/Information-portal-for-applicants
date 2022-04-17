        <?php require('require/head.php'); ?>
        <?php require('require/loading.php'); ?>
        
        <header class="header">
            <div class="header_title">
                <img src="img/score.png">
                <h1>Проходные баллы</h1>
            </div>
        </header>

        <div class="container">
            <section class="max-img">

                <?php $info = get_etf_info();
                foreach ($info as $infosy): ?>

                <div class="block_scores" style="box-shadow: none;">
                    <div class="block-1">
                        <h2><?php echo $infosy["name"]; ?></h2>

                        <table class="block-code tab">
                            <tr>
                                <td>
                                    <p><?php echo $infosy["admission_plan"]; ?></p>
                                </td>
                                <td>
                                    <h3>План приёма (<?php echo $infosy["admission_plan_year"]; ?>г.)</h3>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><?php echo $infosy["score"]; ?></p>
                                </td> 
                                <td>
                                    <h3>Проходной балл (<?php echo $infosy["score_year"]; ?>г.)</h3>
                                </td>
                            </tr>
                        </table> 

                        <div class="years">
                            <h4><?php echo $infosy["period"]; ?></h4>
                        </div>
                    </div>
                    <div class="block-2">
                        <img src="img/desk.png">
                    </div>
                </div>

                <?php endforeach; ?>

            </section>
        </div>

        <?php require('require/endpage.php'); ?>