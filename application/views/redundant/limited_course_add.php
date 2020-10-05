<?php
  //if user session equal to empty or 0, redirect to login page
  if($this->session->userdata('user_id') == ""){
    redirect(base_url() . "admin/Login", "refresh");
  }else{
    //run the progress
?>

        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
                 
    <div class="x_title">
                    <h2>Limeted Course > Add New</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                     <button type="button" class="btn btn-success"> <a style="color: white" href="<?= site_url(); ?>admin/Limited_Course_List/" >Back</a></button>
                    </ul>
                    <div class="clearfix"></div>
           </div>
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Course Title <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="title" name="title" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Image<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="file" id="image" name="image" required="required" class="form-control">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Ori Price<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="image" name="text" required="required" class="form-control">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Off Price<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="image" name="text" required="required" class="form-control">
                      </div>
                    </div>
                     <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Date<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="image" name="text" required="required" class="form-control">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">PDF Details</label>
                      <div class="col-md-6 col-sm-6 ">
                        <input id="details" class="form-control" type="file" name="details"accept="application/pdf">
                      </div>
                    </div>
                  
                   
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                      <div class="col-md-6 col-sm-6 offset-md-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>
                  </form>


        </div>
        
  <?php
}
?>