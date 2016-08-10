
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Tambah Gambar
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
            <form name="form"  action="<?php echo base_url() ?>surat/tambah"  method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                <label for="name">Nama Surat</label>
                <input name="name" type="text" class="form-control" id="name">
                </div>

               <div class="form-group">
               <label for="thumb_img">Pilih foto scan surat kecil (untuk icon)</label>
               <input  type="file" name="thumb_img" class="form-control"  required id="thumb_img" >
               </div>
               <div id="image-holder">
    
                                
               <div class="form-group">
               <label for="full_img">Pilih foto scan surat besar (HD)</label>
               <input  type="file" name="full_img" class="form-control" required id="full_img" >
               </div>

            <input name="id" type="hidden" id="id" value="1">
            </div>
              <div class="form-group">
              <label for="ket">Keterangan</label>
              <input name="ket" type="text" class="form-control" id="ket">
              </div> 

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                <button type="reset"  name="submit" id="submit" class="btn btn-primary">Reset</button>
              </div>
            </form>
          </div>