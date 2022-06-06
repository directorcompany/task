<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Style-->    
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1 style = "text-align: center;">Бронирование комнаты</h1>
    <div class="container">
     <?php
    echo $result;
    ?>
        <form action="/model/model.php" method="POST">
            <div class="name">
                <label for="name">Имя: </label>
            <input type="text" name = "name" class="form-control" placeholder = "Введите" required>
        </div>
        
        <div class="form-group">
            <label for="phone">Телефон номер: </label>
            <input type="number" name="phone" class="form-control" placeholder = "Введите" required>
        </div>
        <div class="form-group">
            <label for="room">Выберите Комнату:</label>
            <select name="room" required class="form-control" required>
                <option value="">Выберите комнату</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="from-group">
            <label for="email">E-mail: </label>
        <input type="email" name="email" id="" placeholder="Введите">
        </div>
        <div class="form-group">
            <label for="date-start">Начало даты:</label>
            <input type="date" name="datestart" class="form-control" required>
        </div>
        <div class="for-group">
            <label for="date-end">Конца даты:</label> 
            <input type="date" name="datend" class="form-control" required>
        </div>
            <input type="submit" name="submit" class="form-control">
    </form>
    </div>
</body>
</html>