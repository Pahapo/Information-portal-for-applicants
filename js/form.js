$(document).ready(function () {

    //E-mail Ajax Send
    $("form").submit(function () { //Change
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "mail.php", 
            data: th.serialize()
        }).done(function () {
            alert("Спасибо за проявленный интерес! Ваш вопрос отправлен!");
            setTimeout(function () {
                // Done Functions
                th.trigger("reset");
            }, 1000);
        });
        return false;
    });

});
