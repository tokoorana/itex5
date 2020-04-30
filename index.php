<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regina's document №5</title>
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap/min.css">
    
</head>
<body style = "background-color: rgba(235, 197, 225, 0.788);">


<?php include 'connection.php'; ?>


    <! -- Форма полученный доход с проката по состоянию на выбранную дату -->
    <form action="rent_by_date.php">
    <h1 style = "color: rgb(30, 25, 102);">Получение информации</h1>
    <?php include 'selected/cost.php'; ?>
    <h2><i>1. Полученный доход с проката по состоянию на выбранную дату:</h2></i>
        <input type="date" name="selected_date_rent">
        <p><input type="submit" value="Выбрать"></p>
    </form>


    <! -- Форма автомобили выбранного производителя -->
    <form action="auto_by_vendors.php" name="value">
        <?php include 'selected/vendors_name.php'; ?>
        <h2><i>2. Автомобили по выбранному производителю:</i></h2>
        <select name="vendor" id="">

            <?php
                foreach ($outputVendors as $vendor) {
                    echo "<option value=\"$vendor\">$vendor</option>";
                }
            ?>
        </select>
        <p><input type="submit" value="Выбрать"></p>
    </form>


    <! -- Форма свободные автомобили на выбранную дату -->
    <form action="free_auto_by_dates.php">
    <h2><i>3. Свободные автомобили на выбранную дату:</h2></i>
        <input type="date" name="selected_date">
        <p><input type="submit" value="Выбрать"></p>
    </form>

    <! -- Форма возможность добавления в БД информации об аренде для выбранного автомобиля на указанные даты -->
    <form action="add_rent_info.php">
    <h1 style = "color: rgb(30, 25, 102);">Добавление информации</h1> 
    <h2><i>Об аренде в БД:</h2></i>
        <table>
            <tr>
                <th>FID_Car</th>
                <th>Date_start</th>
                <th>Time_start</th>
                <th>Date_end</th>
                <th>Time_end</th>
                <th>Cost</th>
            </tr>
            <tr>
                <td>
                    <select name="fid_car" id="fid_car">
                        <?php
                        foreach ($output_cost as $cars) {
                            echo "<option value=\"$cars\">$cars</option>";
                        }
                        ?>
                    </select>
                </td>
                <td><input type="date" name="date_start" required="required"></td>
                <td><input type="text" name="time_start" required="required"></td>
                <td><input type="date" name="date_end" required="required"></td>
                <td><input type="text" name="time_end" required="required"></td>
                <td><input type="text" name="cost" required="required"></td>
            </tr>
        </table>
        <p><input type="submit" value="Добавить"></p>
    </form>


    <! -- Форма возможность изменения данных о пробеге для выбранного автомобиля -->
    <form action="race_change.php">
    <h1 style = "color: rgb(30, 25, 102);">Изменение информации</h1> 
    <?php include 'selected/cars_name.php'; ?>
        <p><h2><i><b>Выберите автомобиль и измените данные о пробеге:</b></i></h2></p>
        <table>
            <tr>
                <th>Name</th>
                <th>Race</th>
            </tr>
            <tr>
                <td>
                    <select name="car_name" id="car_name">
                        <?php
                        foreach ($output_cars as $name) {
                            echo "<option value=\"$name\">$name</option>";
                        }
                        ?>
                    </select>
                </td>
                <td><input type="number" name="race" required="required"></td>
            </tr>
        </table>
        <p><input type="submit" value="Добавить"></p>
    </form>
</body>
</html>