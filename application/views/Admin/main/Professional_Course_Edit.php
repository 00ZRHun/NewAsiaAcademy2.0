<div class="right_col" role="main">            
    <div class="x_title">
      <h2>Professional Course > Add Edit</h2>
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
        <button type="button" class="btn btn-success"> <a style="color: white" href="<?= site_url(); ?>admin/Professional_Course/" >Back</a></button>
      </ul>
      <div class="clearfix"></div>
    </div>
     
    <form method="POST" id="professional_course_edit" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
      <?php 
        foreach($professional_course_data as $row_professional_course_data){ 
          $title=$row_professional_course_data->title;
          $image=$row_professional_course_data->image;
          $details=$row_professional_course_data->details;
        } 
      ?>
        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">
            Course Title <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input type="text" id="title" name="title" required="required" class="form-control " value="<?php echo $title ?>">
          </div>
        </div>

        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
            Image <span class="required text-danger" >*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input type="file" id="image" name="image" class="form-control" accept=".png,.jpeg,.jpg">
            <img style="max-width: 100px" src="<?= site_url(); ?>images/<?php echo $image ?>">
            <input type="hidden"  id="oldImage"  name="oldImage"  value="<?php echo $image ?>">
          </div>
        </div>

        <div class="item form-group">
          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">
            PDF Details
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input id="details" class="form-control" type="file" name="details" accept="application/pdf" value="<?= site_url(); ?>details/<?php echo $details ?>">
            <a target="_blank" href="../../../images/<?php echo  $details;?>"><?= $details; ?></a>
            <input type="hidden" id="oldDetails" name="oldDetails" value="<?php echo $details ?>">
          </div>
        </div>

        <input type="hidden" name="id" value="<?php echo $this->uri->segment(4); ?>"> 
        <div class="ln_solid"></div>
        <div class="item form-group">
          <div class="col-md-6 col-sm-6 offset-md-3">
            <button name="submit" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div> 
    </form>
  </div>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script>
    $('#professional_course_edit').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: '<?= site_url(); ?>admin/Professional_Course/update',
            type: 'POST',
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(data) {
                alert('Add Successfully !');
                window.location.href = '<?php echo base_url() . "admin/professional_course"; ?>';
            },
            error: function(data) {
                alert('Something Error !');
            },
        });
    });
</script>