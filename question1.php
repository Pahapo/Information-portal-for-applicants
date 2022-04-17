<?php require('require/head.php'); ?>
        <?php require('require/loading.php'); ?>

        <header class="header" style="padding: 15px 0;">
            <div class="header_title">
                <img src="img/conversation.png">
                <h1>Задать вопрос ответственному секретарю приёмной комиссии</h1>
            </div>
        </header>

        <div class="container">
            <section>
                <h1 style="color: #707070;">Обращение</h1>

                <div class="job-choice">
                    <div>
                        <input type="radio" id="fiz" name="choice" value="fiz" checked>
                        <label class="individual individual-active" for="fiz">Физическое лицо</label>
                    </div>
                    <div>
                        <input type="radio" id="yr" name="choice" value="yr">
                        <label class="entity" for="yr">Юридическое лицо</label>
                    </div>
                </div>

                <div class="individual-choice">
                    <form name="test" method="post">

                <!-- Start hidden input -->
                    <input type="hidden" name="project_name" value="Информационный портал для абитуриентов">
                    <input type="hidden" name="admin_email" value="abit@bsut.by">  
                    <input type="hidden" name="form_subject" value="Вопрос ответственному секретарю приёмной комиссии от Физического лица">
                    <input type="hidden" name="form_subject_text" value="Вопрос ответственному секретарю приёмной комиссии от <span style='color: #9c92fb;'>Физического лица</span>">
                <!-- End hidden input -->

                        <div id="mainForm">
                            <h1>Фамилия, имя, отчество:</h1>
                            <input type="text" name="Фамилия, имя, отчество" required><br><br>
        
                            <h1>Адрес места жительства (места пребывания):</h1>
                            <input type="text" name="Адрес места жительства" required><br><br>
        
                            <h1>Email:</h1>
                            <input type="email" name="Email" required><br><br>
        
                            <h1>Изложение сути обращения:</h1>
                            <textarea name="Изложение сути обращения" placeholder="Подскажите, как..." required></textarea>
                        </div>

                        <div class="input__wrapper">
                            <input type="file" name="file" id="input__file" class="input input__file" accept=".jpg, .jpeg, .png, .pdf, .doc, .docx" multiple>
                            <label for="input__file" class="input__file-button">
                                <span class="input__file-icon-wrapper"><img class="input__file-icon" src="img/download.png" alt="Выбрать файл" width="25"></span>
                                <span class="input__file-button-text">Выберите файл</span>
                            </label>
                        </div>
                        <input type="submit" name="submit" class="submit form__btn" value="Отправить">                        
                    </form>
                </div>

                <div class="entity-choice hidden_question" method="post">
                <form name="test" method="post">

                <!-- Start hidden input -->
                    <input type="hidden" name="project_name" value="Информационный портал для абитуриентов">
                    <input type="hidden" name="admin_email" value="abit@bsut.by"> 
                    <input type="hidden" name="form_subject" value="Вопрос ответственному секретарю приёмной комиссии от Юридического лица">
                    <input type="hidden" name="form_subject_text" value="Вопрос ответственному секретарю приёмной комиссии от <span style='color: #9c92fb;'>Юридического лица</span>">
                <!-- End hidden input -->

                    <div id="mainForm">
                            <h1>Полное наименование юридического лица:</h1>
                            <input type="text" name="Полное наименование юридического лица" required><br><br>
            
                            <h1>Местонахождение юридического лица:</h1>
                            <input type="text" name="Местонахождение юридического лица" required><br><br>

                            <h1>Фамилия, имя, отчество лица, уполномоченного подписывать обращения:</h1>
                            <input type="text" name="Фамилия, имя, отчество лица, уполномоченного подписывать обращения" required><br><br>
            
                            <h1>Email:</h1>
                            <input name="Email" type="email" required><br><br>
            
                            <h1>Изложение сути обращения:</h1>
                            <textarea name="Изложение сути обращения" placeholder="Подскажите, как..." required></textarea>
                        </div>

                        <div class="input__wrapper">
                            <input type="file" name="file" id="input__file" class="input input__file" accept=".jpg, .jpeg, .png, .pdf, .doc, .docx" multiple>
                            <label for="input__file" class="input__file-button">
                                <span class="input__file-icon-wrapper"><img class="input__file-icon" src="img/download.png" alt="Выбрать файл" width="25"></span>
                                <span class="input__file-button-text">Выберите файл</span>
                            </label>
                        </div>
                        <input type="submit" name="submit" class="submit form__btn" value="Отправить">                        
                    </form>
                </div>
            </section>
        </div>

        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="../js/jquery.fancybox.min.js"></script>
        <script src="../js/form.js"></script>
        <script src="../js/loading.js"></script>
        <script src="../js/main.js"></script>
    </body>
</html>