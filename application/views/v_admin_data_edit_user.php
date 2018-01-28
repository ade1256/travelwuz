<?php  $this->load->view('layout_admin/header');?>
<?php  $this->load->view('layout_admin/menu_samping');?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Data Tables
          <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Tables</a></li>
          <li class="active">Data tables</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">

          <div class="box">
              <div class="box-header">
                <h3 class="box-title">Edit data</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
              <?php foreach ($tb_user as $u) {
               
              ?>
              <!-- form start -->
            <form  action=<?php echo base_url("crud/update"); ?> method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Fullname</label>
                    <input type="hidden" class="form-control" name="id" value=<?php echo $u->id;?>  />
                  <input type="text" class="form-control" name="fullname" value=<?php echo $u->fullname;?> />
                </div>
                 <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username"  value=<?php echo $u->username;?> />
                </div>
                  <div class="form-group">
                  <label >Password</label>
                  <input type="text" class="form-control" name="password" value=<?php echo base64_decode($u->password);?> />
                </div>
                <div class="form-group">
                  <label>Level</label>
                  <select class="form-control" name="level">
                    <option value="-">-- SELECT LEVEL --</option>
                    <option <?php if($u->level==='admin'){echo "selected";} ?> value="admin">Admin</option>
                    <option  <?php if($u->level==='user'){echo "selected";} ?> value="user">User</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="submit" value="submit" class="btn btn-primary"/>
              </div>
            </form>
             </div>
             <!-- /.box-body -->
             <?php  } ?>
          </div>
           <!-- /.box -->
         </div>
         <!-- /.col -->
       </div>
       <!-- /.row -->
     </section>
     <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->
  <?php  $this->load->view('layout_admin/footer');?>