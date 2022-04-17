<?php require('require/head.php'); ?>
        <?php require('require/loading.php'); ?>
        
        <header class="header" style="padding: 5px 0;">
            <div class="header_title">
                <img src="img/conversation.png">
                <h1>Задать вопрос о подготовке к поступлению</h1>
            </div>
        </header>

        <div class="container">
            <section>
                <h1 style="color: #707070;">Обращение</h1>
                <form name="test" method="post">

                <!-- Start hidden input -->
                    <input type="hidden" name="project_name" value="Информационный портал для абитуриентов">
                    <input type="hidden" name="admin_email" value="proforg@bsut.by">  
                    <input type="hidden" name="form_subject" value="Вопрос о подготовке к поступлению">
                    <input type="hidden" name="form_subject_text" value="Вопрос о подготовке к поступлению">
                <!-- End hidden input -->

                    <div id="mainForm">
                        <div class="secretary">
                            <h1>Фамилия:</h1>
                            <input type="text" required><br><br>

                            <h1>Имя:</h1>
                            <input type="text" required><br><br>

                            <h1>Отчество:</h1>
                            <input type="text"><br><br>

                            <h1>Email:</h1>
                            <input required type="email"><br><br>

                            <h1>Контактный телефон:</h1>
                            <input type="text" value="+375"><br><br>
                    
                            <h1>Изложение сути обращения:</h1>
                            <textarea name="comment" placeholder="Подскажите, как..." required ></textarea>
                        </div>

                        <div class="input__wrapper">
                            <input type="file" name="file" id="input__file" class="input input__file" accept=".jpg, .jpeg, .png, .pdf, .doc, .docx" multiple>
                            <label for="input__file" class="input__file-button">
                                <span class="input__file-icon-wrapper"><img class="input__file-icon" src="img/download.png" alt="Выбрать файл" width="25"></span>
                                <span class="input__file-button-text">Выберите файл</span>
                            </label>
                        </div>
                        <input type="submit" name="submit" class="submit form__btn" value="Отправить">
                    </div>
                </form>
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