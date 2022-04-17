        <?php require('require/head.php'); ?>
        <?php require('require/loading.php'); ?>
        
        <header class="header">
            <div class="header_title">
                <img src="img/ask.png">
                <h1>Задать вопрос</h1>
            </div>
        </header>

        <div class="container">
            <section>
                <h1 style="color: #707070;">Вступительная кампания <?php echo date('Y'); ?></h1>
                <a href="question1.php">
                    <div class="block-mini-2 hidden">
                        <div class="block-111 block-111-margin">
                            <img src="img/conversation.png">
                            <h2>Задать вопрос ответственному секретарю приёмной комиссии</h2>                         
                        </div>
                    </div>
                </a>
                <a href="question2.php">
                    <div class="block-mini-2 hidden">
                        <div class="block-111 block-111-margin">
                            <img src="img/conversation.png">
                            <h2>Задать вопрос о подготовке к поступлению</h2>                         
                        </div>
                    </div>
                </a>
        
                <h1 style="line-height: 20px; margin: 30px 0 15px 0; color: #707070;">Ответы на часто задаваемые вопросы</h1>
                
                <div class="search">
                    <input type="text" name="search" id="block_questions" placeholder="Введите для поиска ...">
                </div>
                <br>

                <?php $questions = get_etf_questions();
                foreach ($questions as $question): ?>

                <div class="block_questions">
                    <div class="block-1">
                        <h2><?php echo $question["question"]; ?></h2>  
                        <div class="block_questions_line"></div>
                        <h3>
                            <?php echo $question["answer"]; ?>
                        </h3>                       
                    </div>
                </div>

                <?php endforeach; ?>

            </section>
        </div>

        <?php require('require/endpage.php'); ?>