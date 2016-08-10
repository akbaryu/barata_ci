
        <section class="content">
          <div class="row">
            <div class="col-md-12">
               <!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Config : INSERT</h3>
            </div><!-- /.box-header -->
           
             <button class="btn btn-default"><?php echo anchor('config','Cancel'); ?></button>  
                        <form method="post" action="<?php echo base_url() . "config/insert_act"?>">
            <form role="form">
            <div class="box-body">
              <div class="input-group">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-danger">ID</button>
                    </div><!-- /btn-group -->
                      <input name="id_config" type="text" class="form-control">
              </div><!-- /input-group -->
               <p class="margin"></p>
              <div class="input-group">

                     <label><button type="button" class="btn btn-danger">Config Type</button></label>
                    <textarea name='config_type' class="textarea" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
                <br>

                    <label><button type="button" class="btn btn-danger">Config Value</button> </label>
                    <textarea name='config_value' class="textarea" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>


              <div class="box-footer">
                <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
               
              </div>
            </div><!-- /.box-body -->          
      </section><!-- /.content -->
