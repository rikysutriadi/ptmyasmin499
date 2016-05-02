<?php
$this->load->view('/includes/head');
$this->load->view('/includes/topbar');
$this->load->view('/includes/sidebar');
?>

   <section class="content">
  <!-- Horizontal Form -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Horizontal Form</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
              </div>
            </div>
          </div><!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-info pull-right">Sign in</button>
          </div><!-- /.box-footer -->
        </form>
      </div><!-- /.box -->
    </section>
<?php
    $this->load->view('/includes/js');
    $this->load->view('/includes/foot');
?>

