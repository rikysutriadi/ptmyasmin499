<?php
$this->load->view('/includes/head');
$this->load->view('/includes/topbar');
$this->load->view('/includes/sidebar');
?>

     <section class="content">
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Article</h3>
    </div><!-- /.box-header -->
      <form class="form-horizontal">
        <div class="box-body">
          <!-- <center> -->
            <div class="form-group">
              <label for="title" class="col-sm-1 control-label">Title</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" id="inputName" placeholder="Title">
              </div>
            </div>
            <div class="form-group">
              <label for="image" class="col-sm-1 control-label" >Image</label>
              <div class="col-sm-5">
                <input type="file" id="image">
              </div>
            </div>
            <div class="form-group">
              <label for="quotes" class="col-sm-1 control-label">Quotes</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="quotes" placeholder="content" rows="15" cols=" 80"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="author" class="col-sm-1 control-label">Author</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="author" placeholder="Skills">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-1 col-sm-10">
                <button type="submit" class="btn btn-danger">Simpan</button>
              </div>
            </div>
          <!-- </center>   -->
        </div>    
       </form>
    </div>
  </section>
<?php
    $this->load->view('/includes/js');
    $this->load->view('/includes/foot');
?>

