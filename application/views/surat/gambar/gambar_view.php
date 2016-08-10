<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<div class="content-wrapper">
               
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">

            <div class="box-header with-border">

               <a href=" <?php echo   site_url('surat/tambah');?>"  ><h3 class="box-title">
              <td><button type="submit" class="btn btn-block btn-primary"> <span class="glyphicon glyphicon-plus"></span>
              Tambah Surat</button></td></a></div>
                              
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                      <th>NAMA</th>
                      <th>IMAGE</th>
                      <th>KETERANGAN</th>
                      <th>EDIT</th>
                       <th>DELETE</th>
                    </tr>
                  </thead>
                 <tbody>
               <?php foreach($gambar as $list) { ?>
                <tr>
                <td><?php echo $list['name']; ?></a></td>
                <td><img src="<?php echo $list['thumb_img']; ?>" width="100"/> </td>
                
                <td><?php echo $list['ket']; ?></td>
                <td><a href="<?php echo base_url() ?>surat/edit/<?php echo $list['id'] ?>"><button type="button" class="btn btn-block btn-primary">Edit</button></a></td>
                <td><a href="<?php echo base_url() ?>surat/delete/<?php echo $list['id'] ?>"><button type="button" class="btn btn-block btn-primary">Delete</button></a></td>
                </tr>
                <?php } ?>
                </tbody>
              </table>

                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
