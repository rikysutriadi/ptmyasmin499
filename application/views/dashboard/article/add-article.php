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
                <input type="text" class="form-control" id="inputName" placeholder="title">
              </div>
            </div>
            <div class="form-group">
              <label for="tags" class="col-sm-1 control-label">Tags</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" id="tags" placeholder="tags">
              </div>
            </div>
            <div class="form-group">
              <label for="tag" class="col-sm-1 control-label"> Categories </label>
              <div class="col-sm-5">
                <select class="form-control" id="category">
                  <option value="">kategori 1</option>    
                  <option value="">kategori 2</option> 
                </select>         
              </div>
            </div>
            <div class="form-group">
              <label for="inputExperience" class="col-sm-1 control-label">Content</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="content" placeholder="content" rows="15" cols=" 80"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputFile" class="col-sm-1 control-label" >File input</label>
              <div class="col-sm-5">
                <input type="file" id="exampleInputFile">
              </div>
            </div>
            <div class="form-group">
              <label for="inputSkills" class="col-sm-1 control-label">Author</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="author" placeholder="Author">
              </div>
            </div>
           <!--  <div class="form-group">
              <div class="col-sm-offset-1 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                  </label>
                </div>
              </div>
            </div> -->
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
