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
        <h2>Limited Course > Add New</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li>
            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Settings 1</a>
                <a class="dropdown-item" href="#">Settings 2</a>
              </div>
          </li>
          <button type="button" class="btn btn-success"> <a style="color: white" href="<?= site_url(); ?>admin/Limited_Course/" >Back</a></button>
        </ul>
        <div class="clearfix"></div>
      </div>
                
      <form method="POST" id="limited_course_add" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">
            Course Title <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input type="text" id="title" name="title" required="required" class="form-control ">
          </div>
        </div>

        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
            Image<span class="required" >*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input type="file" id="image" name="image" class="form-control" accept=".png,.jpeg,.jpg">
          </div>
        </div>

        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="ori_price">
            Ori. Price <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input type="number" step="any" id="ori_price" name="ori_price" required="required" class="form-control ">
          </div>
        </div>

        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="off_price">
            Off. Price <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input type="number" step="any" id="off_price" name="off_price" required="required" class="form-control ">
          </div>
        </div>
        
        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="date">
            Date <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input type="date" min="2020-10-05" value="2020-10-28" id="date" name="date" required="required" class="form-control ">
          </div>
        </div>

        <div class="item form-group">
          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">
            PDF Details
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input id="details" class="form-control" type="file" name="details"accept="application/pdf">
          </div>
        </div>
        
        <div class="ln_solid"></div>

        <div class="item form-group">
          <div class="col-md-6 col-sm-6 offset-md-3">
            <button name="submit" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script>
      $('#limited_course_add').submit(function(e) {
          e.preventDefault();

          $.ajax({
              url: '<?= site_url(); ?>admin/limited_course/add_course',
              type: 'POST',
              data: new FormData(this),
              processData: false,
              contentType: false,
              success: function(data) {
                  alert('Add Successfully !');
                  window.location.href = '<?php echo base_url() . "admin/limited_course"; ?>';
              },
              error: function(data) {
                  alert('Something Error !');
              },
          });
      });
    </script>


       <!-- <script type="text/javascript">
    $(function () {
      $('#contactForm').submit(function(e) {
          const Toast = Swal.mixin({
              toast: true,
              position: 'center',
              showConfirmButton: false,
              timer: 4000,
              timerProgressBar: true,
            })

            Toast.fire({
              icon: 'success',
              title: 'Thanks you for contacting us. We will get back to you soon.'
            })

          e.preventDefault();

          $.ajax({
            type: 'POST',
            url: 'post.php',
            data: $('#contactForm').serialize(),
            success: function (data) {
             // alert("Thanks you for contacting us. We will get back to you soon.");
             $("#contactForm")[0].reset();
            }
          });
        });
    }); 
  </script>-->


  <?php
}
?>