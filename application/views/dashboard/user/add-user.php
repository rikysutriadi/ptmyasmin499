<?php
$this->load->view('/includes/head');
$this->load->view('/includes/topbar');
$this->load->view('/includes/sidebar');
?>

   <section class="content">
  <!-- Horizontal Form -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">User</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
              <label for="nama" class="col-sm-1 control-label">Name</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="nama" placeholder="Nama">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-1 control-label">Email</label>
              <div class="col-sm-4">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-sm-1 control-label">Password</label>
              <div class="col-sm-4">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <label for="privillege" class="col-sm-1 control-label">Privilege</label>
              <div class="col-sm-4">
                <select class="form-control" id="privillege">
                  <option value="superAdmin">Super Admin</option>    
                  <option value="admin" selected>Admin</option> 
                </select>         
              </div>
            </div>
            <div class="form-group">
              <label for="privillege" class="col-sm-1 control-label"></label>
              <div class="col-sm-4">
                <button type="submit" class=" btn btn-info pull-right">Save</button>
              </div>
            </div>
          </div><!-- /.box-body -->
          <!-- <div class="box-footer">
            <button type="submit" class="btn btn-default">Reset</button>
            <button type="submit" class="btn btn-info pull-right">Save</button>
          </div><!-- /.box-footer -->
        </form>
      </div><!-- /.box -->
    </section>
<?php
    $this->load->view('/includes/js');
    $this->load->view('/includes/foot');
?>

