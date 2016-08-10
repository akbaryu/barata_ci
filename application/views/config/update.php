
        <section class="content">
          <div class="row">
            <div class="col-md-12">
               <!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Config : UPDATE</h3>
            </div><!-- /.box-header -->
           <button class="btn btn-default"><?php echo anchor('config','Cancel'); ?></button>
           <br><br>
            <?php echo form_open('config/update/'.$hasil->id_config); ?>
             
            
            <table>
                <div class="box-body pad">

                    <label><button type="button" class="btn btn-danger">Config Type</button></label>
                    <textarea name='config_type' class="textarea" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $hasil->config_type;?></textarea>
                
                <br>

                    <label><button type="button" class="btn btn-danger">Config Value</button>  </label>
                    <textarea name='config_value' class="textarea" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $hasil->config_value;?></textarea>
                </div>
                <br>
              <br>
                <td> <?php echo form_submit('submit', 'Submit'); ?> </td>

            </tr>
            </table>
            <?php echo form_close(); ?>

      </section><!-- /.content -->
