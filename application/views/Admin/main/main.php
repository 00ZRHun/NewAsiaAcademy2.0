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
         
        </div>
  <?php
}
?>