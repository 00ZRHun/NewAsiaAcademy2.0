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
                 <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Limeted Course List</h2>
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
                     <button type="button" class="btn btn-success"> <a style="color: white" href="<?= site_url(); ?>admin/Limited_Course_Add/" >Add New</a></button>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">                   
                    </p>
                    <table id="datatable-fixed-header" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Course Title</th>
                          <th>Image</th>
                          <th>Details</th>
                          <th>Ori Price</th>
                          <th>Off Price</th>
                          <th>Date</th>
                          <th>Action</th>       
                        </tr>
                      </thead>
                       <tbody>
                        <tr>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td><button type="button" class="btn btn-warning" style="font-size:10PX">EDIT</button>
                              <button type="button" class="btn btn-danger" style="font-size:10PX">DELETE</button></td>
                       
                        </tr> 

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>


        </div>

  <?php
}
?>