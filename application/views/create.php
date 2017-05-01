<!DOCTYPE html>
<html>
    <head>
        <title>Program CRUD - Tambah Data</title>
    </head>
    <body>
        <h2>Tambah Lagu</h2>
        <hr />
        <form method="post" action="<?php echo site_url('lagu/store'); ?>">
            <p>
                <label>Judul</label>
                <input type="text" name="judul" />
            </p>
            <p>
                <label>Album</label>
                <input type="text" name="album" />
            </p>
            <p>
                <label>Group Band</label>
                <input type="text" name="band" />
            </p>
            <p>
                <button type="submit">Tambah</button>
            </p>
        </form>
    </body>
</html>
