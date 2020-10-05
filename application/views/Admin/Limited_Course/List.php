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
                <h2>Limited Course List</h2>
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
                  <button type="button" class="btn btn-success"> <a style="color: white" href="<?= site_url(); ?>admin/limited_course/add" >Add New</a></button>
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
                            <th>Ori. Price</th>
                            <th>Off. Price</th>
                            <th>Date</th>
                            <th>Details</th>
                            <th>Action</th>       
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($limited_course_list as $row_limited_course){ ?>
                            <tr id="<?php echo $row_limited_course->ID;?>"> 
                              <td><?php echo $row_limited_course->ID; ?></td>
                              <td><?php echo $row_limited_course->title;?></td>
                              <td>
                                <img id="myImg" onclick="onClick(this)" style="max-width: 100px;max-width: 56.25px;" src="../images/<?php echo $row_limited_course->image;?>" >
                              </td>
                              <td><?php echo $row_limited_course->ori_price;?></td>
                              <td><?php echo $row_limited_course->off_price;?></td>
                              <td><?php echo $row_limited_course->date;?></td>
                              <td>
                                <!-- <a href="../images/<?php echo $row_limited_course->details;?>"> -->
                                <!-- <button type="button" class="btn btn-success" style="font-size: 10px" data-toggle="modal" onclick="open_modal(<?php echo $row_limited_course->ID; ?>)">VIEW</button> -->
                                <button type="button" class="btn btn-success" style="font-size: 10px" data-toggle="modal" onclick="open_modal('<?php echo $row_limited_course->details; ?>')">VIEW</button>
                              <!-- </a> -->
                              </td>
                              <td>
                                <a href="<?php echo base_url('admin/Limited_Course/edit/'.$row_limited_course->ID) ?>">
                                  <button class="delbtn"><i class="fa fa-edit"></i></button> 
                                </a>

                                <button class="remove delbtn"><i class="fa fa-trash"></i></button> 
                              </td>
                            </tr> 
                          <?php } ?>
                          <!-- <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td><button type="button" class="btn btn-warning" style="font-size:10PX">EDIT</button>
                                <button type="button" class="btn btn-danger" style="font-size:10PX">DELETE</button></td>
                          </tr> --> 
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="viewModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Details</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <iframe class="embed-responsive-item" id="modalFrame" src="" allowfullscreen style="width: 100%;height:400px"></iframe>
                <a id="downloadModal" href="" download="">download</a>
              </div>
            </div>
          </div>
        </div>

  <?php
    }
  ?>

<script>
  /* function open_modal(id){
    $('#viewModal').modal('show');

    $.ajax({
      url: address + "Limited_Course/display_modal",
      method: "POST",
      data: {id:id},
      dataType: "json",
      success: function(res){
        document.getElementById("modalFrame").src = "<?= site_url(); ?>" + "images/" + res.details;
        $('#downloadModal').attr("href","<?= site_url(); ?>" + "images/" + res.details);
    }});
  } */
  function open_modal(details){
    // alert(x);
    $('#viewModal').modal('show');
    document.getElementById("modalFrame").src = "<?= site_url(); ?>" + "images/" + details;
    $('#downloadModal').attr("href","<?= site_url(); ?>" + "images/" + details);
  }

  // Get the modal
  var modal = document.getElementById('myModal');

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById('myImg');
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");

  function onClick(element) {
    modal.style.display = "block";
    modalImg.src = element.src;
    captionText.innerHTML = element.alt;
  }

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() { 
    modal.style.display = "none";
  }
</script>

<script src="<?= site_url(); ?>ip.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
  $(".remove").click(function(){
    var id = $(this).parents("tr").attr("id");

    if(confirm('Are you sure to remove this record ? '+id))
    {
      $.ajax({
        url: '<?php echo site_url("admin/Limited_Course/delete/");?>',
        type: 'POST',
        data:({id:id}),
                      
        error: function() {
            alert('Something is wrong');
        },

        success: function(data) {
              $("#"+id).remove();
              alert("Record removed successfully");  
        }
      });
    }
  });
</script>