
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Surat
        <small>Preview</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form name="form" method="post" action="<?php echo base_url() ?>surat/edit" class="myform" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                 <label for="name">Nama Surat</label>
                 <input name="name" type="text" class="form-control" id="name" value="<?php echo $detail['name'] ?>">
                </div>

               <div class="form-group">
                <label for="thumb_img">URL Gambar Kecil</label>
                <input name="thumb_img" type="file" class="form-control" id="thumb_img" value="<?php echo $detail['thumb_img'] ?>">
                </div>

                <div class="form-group">
                <label for="full_img">URL Gambar Besar</label>
                <input name="full_img" type="file" class="form-control" id="full_img" value="<?php echo $detail['full_img'] ?>" >                </div>

               <input name="id" type="hidden" id="id" value="<?php echo $detail['id'] ?>">
               </div>
                <div class="form-group">
                <label for="ket">Keterangan</label>
                <input name="ket" type="text" class="form-control" id="ket" value="<?php echo $detail['ket'] ?>">
                </div>
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
              </div>
            </form>
          </div>
          <!-- /.box -->