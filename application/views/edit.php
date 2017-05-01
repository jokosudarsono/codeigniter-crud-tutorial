<!DOCTYPE html>
<html>
    <head>
        <title>Program CRUD - Edit Data</title>
    </head>
    <body>
        <h2>Edit Lagu</h2>
        <hr />
        <form method="post" action="<?php echo site_url('lagu/update'); ?>">
            <input type="hidden" name="id" value="<?=$lagu->id?>" />
            <p>
                <label>Judul</label>
                <input type="text" name="judul" value="<?=$lagu->judul?>" />
            </p>
            <p>
                <label>Album</label>
                <input type="text" name="album" value="<?=$lagu->album?>" />
            </p>
            <p>
                <label>Group Band</label>
                <input type="text" name="band" value="<?=$lagu->band?>" />
            </p>
            <p>
                <button type="submit">Update</button>
            </p>
        </form>
    </body>
</html>
