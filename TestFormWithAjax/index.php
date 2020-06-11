<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css"
          rel="stylesheet" type="text/css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <script src="ajax.js"></script>
    <title>Связаться с нами</title>


</head>
<body>

<div style="display: none" id="hideButton"><button id="opener">Форма для связи</button></div>
<script>
        var x = document.getElementById("hideButton");
        x.style.display = "block";
</script>

<div id="dialog" class="container" title="Форма для связи">
    <form action="" id="my_form_email" method="post">
        <div class="comment">Оставьте Ваши данные и мы перезвоним Вам!</div>
        <div class="form-group">
            <label for="name">Введдите Ваше имя</label>
            <br/>
            <input type="text" name="name" class="form-control" id="name" placeholder="Как Вас зовут?" required>
        </div>
        <div class="form-group">
            <label for="tel">Телефон для связи</label>
            <br/>
            <input type="tel" name="tel" class="form-control" id="tel" placeholder="Введите номер телефона" pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$" required>
        </div>
        <div class="form-group">
            <label for="email">Адрес электронной почты для связи</label>
            <br/>
            <input type="email" name="email" class="form-control" id="email" placeholder="Введите e-mail" required>
        </div>
        <div class="form-group">
            <label for="message">Сообщение</label>
            <br/>
            <textarea rows="5" type="text" name="message" class="form-control" id="message" placeholder="Сообщение" required></textarea>
        </div>
        <button type="submit" class="formBox" id="btn"> Свяжитесь со мной</button> <br>
    </form>
</div>
<br>

<div id="result_form"></div>
<script>
    $( "#dialog" ).dialog({ autoOpen: false, width:800, height:700});
    $( "#opener" ).click(function() {
        $( "#dialog" ).dialog( "open" );
    });
</script>

<div id="my_message_email"></div>

<script>
    $('#my_form_email').submit(function(){
        $.post(
            'post-email.php',
            $("#my_form_email").serialize(),

            function(msg) {
                $('#my_form_email').hide('slow');
                $('#my_message_email').html(msg);
            }
        );

        return false;
    });
</script>


</body>
</html>
