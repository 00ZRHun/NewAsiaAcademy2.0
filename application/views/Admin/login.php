<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>	
	<title></title>
	<style>
body {
  background-image: url('https://i.ibb.co/LNxTNKr/dexus-office-space.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>
<div class="container" style="padding-top: 11%;">
	
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
	<form style="padding:10px 10px 10px 10px;border-style: outset;background-color: white;opacity: 0.8" method="POST" action="<?= site_url(); ?>admin/Login/login_process">
		<div class="form-group" style=" display: block;margin-left:auto;margin-right: auto;width: 60%">
		<img src="https://i.ibb.co/d54DtCB/107823026-1404330279761794-6138132449381261152-o.png" alt="107823026-1404330279761794-6138132449381261152-o" width="180" height="180" >
	   </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">User ID</label>
	    <input type="text" name="user_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password:</label>
	    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
	  </div>
	  <button type="submit" class="btn btn-primary" style="width: 100%;background-color: #0D47A1">Login</button>
	</form>
	</div>
	</div>
	<div class="col-md-4"></div>
 </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<?php
		if($this->session->flashdata('error') != NULL){
?>
<script>alert('<?php echo $this->session->flashdata('error'); ?>');</script>
<?php
		}
	?>
</body>

</html>