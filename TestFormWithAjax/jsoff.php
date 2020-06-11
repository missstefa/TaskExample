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
    <script type="text/javascript">
        $(".formBox :submit")
    </script>
    <title>Связаться с нами</title>

</head>

<body>

<noscript>
    <div class="container">
        <form action="action.php" method="post">
            <div class="comment">Оставьте Ваши данные и мы перезвоним Вам!</div>
            <div class="form-group">
                <label for="name">Введдите Ваше имя</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Как Вас зовут?" required>
            </div>
            <div class="form-group">
                <label for="tel">Телефон для связи</label>
                <input type="tel" name="tel" class="form-control" id="tel" placeholder="Введите номер телефона" pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$" required>
            </div>
            <div class="form-group">
                <label for="email">Адрес электронной почты для связи</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Введите e-mail" required>
            </div>
            <div class="form-group">
                <label for="message">Сообщение</label>
                <br/>
                <textarea rows="5" type="text" name="message" class="form-control" id="message" placeholder="Сообщение" required></textarea>
            </div>
            <button type="submit" class="formBox"> Свяжитесь со мной</button> <br>
        </form>
    </div>
</noscript>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
