<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="login.php">
        <!-- <div>
            <label for="">Email</label>
            <input type="text" name="email">
        </div>
        <br>
        <div>
            <label for="">Password</label>
            <input type="password" name="password">
        </div> -->
        <div>
            <label for="">Konversi</label>
            <select name="konversi" id="">
                <option value="Reamur">Reamur</option>
                <option value="Reamur">Fahrenheit</option>
                <option value="Reamur">Kelvin</option>
            </select>
        </div>
        <div>
            <label for="">Suhu</label>
            <input type="number">
        </div>
        <br>
        <button>Hitung</button>
    </form>
</body>
</html>