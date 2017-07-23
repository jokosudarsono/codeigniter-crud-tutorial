<!DOCTYPE html>
<html>
    <head>
        <title>Program CRUD</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
    </head>
    <body>
        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('lagu'); ?>">List Lagu</a></li>
                <li><a href="<?php echo site_url('lagu/create'); ?>">Tambah Lagu</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <section class="container">
          <div class="panel panel-primary">
            <div class="panel-heading">
              List Lagu
            </div>
            <div class="panel-body">
              <table class="table table-striped">
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
                              <a class="btn btn-primary" href="<?php echo site_url('lagu/edit/') . $lagu->id; ?>">Edit</a>
                              <a class="btn btn-danger" href="<?php echo site_url('lagu/delete/') . $lagu->id; ?>">hapus</a>
                          </td>
                      </tr>

                  <?php
                          }
                      }
                  ?>
              </table>
            </div>
          </div>
        </section>

        <script src="<?php echo base_url('assets/js/jquery-3.1.1.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    </body>
</html>
