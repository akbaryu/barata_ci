<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<div class="content-wrapper">
               
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">

            <div class="box-header with-border">

              </div>
                              
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                      <th>NAMA</th>
                      <th>IMAGE</th>
                      <th>KETERANGAN</th>

                    </tr>
                  </thead>
                 <tbody>
               <?php foreach($gambar as $list) { ?>
                <tr>
                <td><?php echo $list['name']; ?></a></td>
                <td><img src="<?php echo $list['thumb_img']; ?>" width="100"/> </td>
                
                <td><?php echo $list['ket']; ?></td>
               
                
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
