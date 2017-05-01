<!DOCTYPE html>
<html>
    <head>
        <title>Program CRUD</title>
    </head>
    <body>
        <h2>List Lagu</h2>
        <a href="<?php echo site_url('lagu/create'); ?>">Tambah</a>
        <table>
            <tr>
                <td>No</td>
                <td>Judul</td>
                <td>Album</td>
                <td>Band</td>
                <td>action</td>
            </tr>
            <?php
                if (!empty($list_lagu)) {
                    $no = 0;
                    foreach ($list_lagu as $lagu) {
            ?>

                <tr>
                    <td><?=++$no?></td>
                    <td><?=$lagu->judul?></td>
                    <td><?=$lagu->album?></td>
                    <td><?=$lagu->band?></td>
                    <td>
                        <a href="<?php echo site_url('lagu/edit/') . $lagu->id; ?>">Edit</a>
                        <a href="<?php echo site_url('lagu/delete/') . $lagu->id; ?>">hapus</a>
                    </td>
                </tr>

            <?php
                    }
                }
            ?>
        </table>
    </body>
</html>
