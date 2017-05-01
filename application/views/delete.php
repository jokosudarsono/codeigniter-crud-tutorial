<!DOCTYPE html>
<html>
    <head>
        <title>Program CRUD - Delete Data</title>
    </head>
    <body>
        <h2>Delete Lagu</h2>
        <hr />
        <form method="post" action="<?php echo site_url('lagu/destroy'); ?>">
            <input type="hidden" name="id" value="<?=$lagu->id?>" />
            <table cellspacing="0" cellpadding="0" style="border: none">
                <tr>
                    <td>Judul :</td>
                    <td><?=$lagu->judul?></td>
                </tr>
                <tr>
                    <td>Album :</td>
                    <td><?=$lagu->album?></td>
                </tr>
                <tr>
                    <td>Group Band :</td>
                    <td><?=$lagu->band?></td>
                </tr>
                <tr>
                    <td colspan="2"><strong>Ingin menghapus lagu ini..?</strong></td>
                </tr>
            </table>
            <p>
                <button type="submit">Hapus</button>
            </p>
        </form>
    </body>
</html>
