<!doctype html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Personel Ekle</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/style.css");?>">
        <script src="<?php echo base_url("assets/custom.js"); ?>"></script>
    <body>
        <h3>Personel Ekleme</h3>
        <form action="<?php echo base_url();?>personel/kaydet" method="post">
            <div style="text-align: center; margin-bottom: 10px;">
                <img src="<?php echo base_url("assets/kablosuz_kedi.png"); ?>" alt="" style="height: 50px;"></img>
            </div>
            <div>
                <label for="personel_adi"> Personel Adi</label>
                <input type="text" name="personel_adi" id="personel_adi">
            </div>
            <br>
            <div>
                <label for="email">E-posta adresi</label>
                <input type="text" name="email" id="email">
            </div>
            <br>
            <div>
                <label for="departman"> Departman adi</label>
                <select name="departman" id="departman">
                    <option value="bilgi">Bilgi İşlem</option>
                    <option value="yazilim">Yazılım</option>
                    <option value="donanim">Donanım</option>
                </select>
            </div>
            <br>
            <div>
                <button type="submit">Kaydet</button>
            </div>
        </form>
    </body>
    </head>
</html>

