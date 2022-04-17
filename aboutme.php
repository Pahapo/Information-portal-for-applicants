        <?php require('require/head.php'); ?>
        <?php require('require/loading.php'); ?>

        <header class="header">
        <div class="header_title">
                <img src="img/light-bulb.png">
                <h1>Автор идеи</h1>
            </div>
        </header>
        <div class="container">
            <div class="author_me">
                <img src="img/young-man.png">
                <h2>Попов Павел Сергеевич</h2>
                <h3>Frontend / UX / UI</h3>
            </div>
            <section class="max-img">
                <h3 style="margin: 40px 0 10px 0;">Меня зовут</h3>
                <h2>Попов Павел Сергеевич</h2>
                <h3>Контакты</h3>
                <div class="tab">
                    <img src="img/calling.png">
                    <a href="tel:+375299536916">
                        <h2>+375 (29) 953-69-16</h2>
                    </a>
                </div>
                <div class="tab">
                    <img src="img/email.png">
                    <a href="mailto:pashapopov4055@gmail.com">
                        <h2>pashapopov4055@gmail.com</h2>
                    </a>
                </div>

                <h3>Обо мне</h3>
                <h2>Меня зовут Павел, мне <?php echo date('Y') - 2002; ?> лет и я студент 3 курса ведущего транспортного вуза Беларуси: Белорусский государственный университет транспорта (БелГУТ). Являюсь создателем сайта "Информационный портал для абитуриентов", который Вы сейчас просматриваете.</h2><br>
                <h2>Владею знаниями HTML, используя методологию БЭМ, CSS, препроцессором LESS. При работе пользуюсь псевдоэлементами и псевдоклассами. Пользуюсь знаниями JS при работе с плагинами.</h2><br>
                <h2>Использую Photoshop и Figma для работы с макетами.</h2><br>
                <h2>С энтузиазмом отношусь к людям, знающим больше меня, и способным научить чему-то новому.</h2>
                
                <h3>Портфолио</h3>
                <div class="tab">
                    <img src="img/github.png">
                    <h2><a class="a" href="https://github.com/Pahapo">https://github.com/Pahapo</a></h2>
                </div>
                <h3>Образование</h3>

                <table class="table-history tab">
                    <tr>
                        <td>
                            <p>2019</p>
                        </td>
                        <td>
                            <h2>Гомельский Городской Лицей</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>2023</p>
                        </td> 
                        <td>
                            <h2>Белоруский Государственный Университет Транспорта</h2>
                        </td>
                    </tr>
                </table> 
            </section>
        </div>

        <?php require('require/endpage.php'); ?>