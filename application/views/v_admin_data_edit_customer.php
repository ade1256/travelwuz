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
              <?php foreach ($tb_customer as $c) {
               
              ?>
              <!-- form start -->
            <form  action=<?php echo base_url("crud/update_customer"); ?> method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Name</label>
                    <input type="hidden" class="form-control" name="id" value=<?php echo $c->id;?>  />
                  <input type="text" class="form-control" name="name" value=<?php echo $c->name;?> />
                </div>
                 <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" name="address"  value=<?php echo $c->address;?> />
                </div>
                  <div class="form-group">
                  <label >Phone</label>
                  <input type="text" class="form-control" name="phone" value=<?php echo $c->phone;?> />
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <select class="form-control" name="gender">
                    <option <?php if($c->gender==='male'){echo "selected";} ?> value="male">Male</option>
                    <option  <?php if($c->gender==='female'){echo "selected";} ?> value="female">Female</option>
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