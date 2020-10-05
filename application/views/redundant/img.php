<form action="../update" method="post" enctype="multipart/form-duata">
    <legend class="text-semibold">Personal data</legend>
        <img src=" <?php echo base_url( 'uploads/'. $da['file']);?>" height="205" width="205">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="display-block">image:<span class="text-danger">*</span></label>
                    <input name="file" type="file" id="image_id" class="file-styled ">
                    <span class="help-block"></span>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <label>Email address: <span class="text-danger">*</span></label>
                    <input type="email" name="s_em" class="form-control required" value="<?php echo $da['s_em'];?>">
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Student name: <span class="text-danger">*</span></label>
                    <input type="text" name="s_na" class="form-control required" value="<?php echo $da['s_na'];?>" id="n1">
                </div>
            </div>
            
            <button type="submit">Update<i class="icon-check position-right"></i></button>
            <input type="hidden" name="id" vale="<?php echo $da['id'] ;?>">
        </div>                             
</form>