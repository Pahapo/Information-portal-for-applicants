        <?php require('require/head.php'); ?>
        <?php require('require/loading.php'); ?>

        
        <header class="header">
            <div class="header_title">
                <img src="img/sport.png">
                <h1>Виды спорта</h1>
            </div>
        </header>

        <div class="container">
            <section>
                <h1>Выбор направления</h1>
                <div class="sport-block">
                    <?php $sports = get_sports();
                    foreach ($sports as $sport): ?>

                    <div class="block-sport">
                        <div class="block-12">
                            <h2><?php echo $sport["name"]; ?></h2>    
                        </div>
                        <div class="block_sport_img">
                            <img src="img/medal1.png">
                            <img src="img/medal2.png">
                            <img src="img/medal3.png">
                        </div>
                    </div>

                    <?php endforeach; ?>

					<div class="block-sport">
                        <div class="block-12">
                            <h2>Спорт зал</h2>    
                        </div>
                        <div class="block_sport_img">
                            <img src="img/medal1.png">
                            <img src="img/medal2.png">
                            <img src="img/medal3.png">
                        </div>
                    </div>

                </div>
                <h3 style="color: #707070; margin: 15px 0;">
                    Студенты всех учебных отделений, выполнившие учебную программу, в 1-6 семестрах сдают зачет. Условием допуска к зачетным упражнениям является регулярность посещения учебных занятий, обеспечивающая физиологически и методически оправданное повышение функциональной и двигательной подготовленности.<br>
                </h3>
            </section>
        </div>

        <?php require('require/endpage.php'); ?>