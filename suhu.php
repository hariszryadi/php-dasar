<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Suhu</title>
</head>
<body>
    <h3>Konversi Satuan Suhu</h3>
    <form method="POST">
        <table>
            <tr>
                <td>
                    <label>Konversi</label>
                </td>
                <td></td>
                <td>
                    <select name="konversi" style="width: 100%; ">
                        <option value="Reamur">Reamur</option>
                        <option value="Fahrenheit">Fahrenheit</option>
                        <option value="Kelvin">Kelvin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Suhu</label>
                </td>
                <td></td>
                <td>
                    <input type="number" name="suhu">
                </td>
            </tr>
        </table>
        <br>
        <button type="submit">Hitung</button>
    </form>

    <br>

    <?php
        function konversiSuhu($konversi, $celcius) {
            if ($konversi == 'Fahrenheit') {
                return ($celcius * 9/5) + 32;
            } else if ($konversi == 'Reamur') {
                return $celcius * 4/5;
            } else if ($konversi == 'Kelvin') {
                return $celcius + 273;
            } else {
                return $celcius;
            }
        }

        if (isset($_REQUEST['konversi']) && isset($_REQUEST['suhu'])) {
            echo "Hasil konversi ke " . $_REQUEST['konversi'] . " adalah " . konversiSuhu($_REQUEST['konversi'], $_REQUEST['suhu']);
        }
    ?>
</body>
</html>