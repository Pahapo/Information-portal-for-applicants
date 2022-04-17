        <?php require('require/head.php'); ?>
        <?php require('require/loading.php'); ?>

        <?php $specializations_by_id = get_etf_specializations_by_id($_GET['id']); ?>
        
        <header class="header">
            <div class="header_title">
                <h1 class="padding_none"><?php echo $specializations_by_id["name"]; ?></h1>
            </div>
        </header>

        <div class="container">
            <section class="max-img">
                <h3 style="margin: 40px 0 10px 0;;">Новое название</h3>
                <div class="tab">
                    <img src="img/new_name.png">
                    <h2><?php echo $specializations_by_id["new_name"]; ?></h2>
                </div>
                <h3 style="margin: 15px 0 10px 0;">Код специализации</h3>
                <div class="tab">
                    <img src="img/cubes.png">
                    <h2><?php echo $specializations_by_id["code"]; ?></h2>
                </div>
                <h3 style="margin: 15px 0 10px 0;">Вступительные испытания</h3>
                <div class="tab">
                    <img src="img/exam.png">
                    <h2><?php echo $specializations_by_id["exam_1"]; ?></h2>
                </div>
                <div class="tab">
                    <img src="img/exam.png">
                    <h2><?php echo $specializations_by_id["exam_2"]; ?></h2>
                </div>
                <div class="tab">
                    <img src="img/exam.png">
                    <h2><?php echo $specializations_by_id["exam_3"]; ?></h2>
                </div>
                <h3 style="margin: 15px 0 10px 0;">Про специализацию</h3>
                <h2 style="margin: 0;"><?php echo $specializations_by_id["text"]; ?></h2>

                <h3 style="margin: 15px 0 10px 0;">Профессиональная квалификация</h3>
                <div class="tab">
                    <img src="img/graduate.png">
                    <h2><?php echo $specializations_by_id["qualification"]; ?></h2>
                </div>
                <h3 style="margin: 15px 0 10px 0;">Сфера профессиональной деятельности</h3>
                <div class="tab">
                    <img src="img/portfolio.png">
                    <h2><?php echo $specializations_by_id["field_activity_1"]; ?></h2>
                </div>
                <div class="tab">
                    <img src="img/portfolio.png">
                    <h2><?php echo $specializations_by_id["field_activity_2"]; ?></h2>
                </div>

                <div class="tab">
                    <img src="img/portfolio.png">
                    <h2><?php echo $specializations_by_id["field_activity_3"]; ?></h2>
                </div>
                
                <!-- delete later -->
                <h3 style="margin: 15px 0 10px 0;">Анкета абитуриента</h3>
                <h2>В настоящее время заполнение анкеты абитуриента осуществляется онлайн <a href="https://www.bsut.by/applicants/podgotovitelnye-kursy-k-tst/pdp/pdp-pr/survey" target="_blank">по ссылке</a></h2>

                <a href="<?php echo $specializations_by_id["video"]; ?>" target="_blank">
                    <div class="block-mini-2 hidden" style="margin-top: 15px; top: 0;">
                        <div class="block-111 block-111-margin-right">
                            <img class="animation-img" src="img/youtube.png">
                            <h2>Смотреть видео</h2>                         
                        </div>
                    </div>
                </a>

            </section>
        </div>

        <?php require('require/endpage.php'); ?>