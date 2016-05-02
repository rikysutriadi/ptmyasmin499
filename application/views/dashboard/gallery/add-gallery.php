<?php
$this->load->view('/dashboard/template/head');
$this->load->view('/dashboard/template/topbar');
$this->load->view('/dashboard/template/sidebar');
?>

   <section class="content">
  <!-- Horizontal Form -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Gallery</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
              <label for="title" class="col-sm-1 control-label">Title</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Title">
              </div>
            </div>
            <div class="form-group">
              <label for="description" class="col-sm-1 control-label">description</label>
              <div class="col-sm-5">
                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputFile" class="col-sm-1 control-label" >File input</label>
              <div class="col-sm-5">
                <input type="file" id="exampleInputFile">
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
    $this->load->view('/dashboard/template/js');
    $this->load->view('/dashboard/template/foot');
?>
