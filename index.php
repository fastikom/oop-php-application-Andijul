<html>
    <head>
        <title>Membuat konversi suhu menggunakan PHP</title>
    </head>
    <body>
       
        <?php require_once 'hitungsuhu.php';?>
        <form action="" method="post">
			<p><b>Program Konversi Suhu</b></p>
            Pilihan konversi : <br/>
            <label><input type="checkbox" name="konversi[]" value="celsius" <?php if(isset($_POST['konversi']) && in_array("celsius", $_POST['konversi'])) echo 'checked="checked"';?> /> Ke Celcius</label><br/>
            <label><input type="checkbox" name="konversi[]" value="fahrenheit" <?php if(isset($_POST['konversi']) && in_array("fahrenheit", $_POST['konversi'])) echo 'checked="checked"';?> /> Ke Fahrenheit</label><br/>
            <label><input type="checkbox" name="konversi[]" value="rheamur" <?php if(isset($_POST['konversi']) && in_array("rheamur", $_POST['konversi'])) echo 'checked="checked"';?> /> Ke Rheamur</label><br/>
            <label><input type="checkbox" name="konversi[]" value="kelvin" <?php if(isset($_POST['konversi']) && in_array("kelvin", $_POST['konversi'])) echo 'checked="checked"';?> /> Ke Kelvin</label><br/>
            <label><input type="checkbox" name="konversi[]" value="rankine" <?php if(isset($_POST['konversi']) && in_array("rankine", $_POST['konversi'])) echo 'checked="checked"';?> /> Ke Rankine</label><br/>
            Nilai yang mau dikonversi : <input type="text" name="nilai" <?php if(isset($_POST['nilai'])) echo 'value="'.$_POST['nilai'].'"';?> ><br/><br/>
            <input type="submit" value="Hitung" name="hitung"/>
        </form>
    </body>
</html>