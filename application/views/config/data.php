        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Config</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <button class="btn btn-default"><?php echo anchor('config/insert','Insert'); ?></button>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Config Type</th>
                        <th>Config Value</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      foreach ($record as $r){
                        echo "<tr>
                              <td width='10'>$r->id_config</td>
                              <td width='100'>$r->config_type</td>
                              <td width='100'>$r->config_value</td>
                              <td width='10'>".anchor("config/update/".$r->id_config,"<span class='glyphicon glyphicon-tags' aria-hidden='true'></span>",array('title'=>'edit data'))."</td>
                              <td width='10'>".anchor('config/delet/'.$r->id_config,"<span class='glyphicon glyphicon-trash' aria-hidden='true'></span>",array('title'=>'delete data'))."</td>
                                                    
                              </tr>";
                                
                          }
                       ?>
                      
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     

   