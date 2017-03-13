<div class="content-wrapper">
  <div class="container">
    <section class="content-header">
      <h1>
        Admins Registered
      </h1>
      <div class="box-body">
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-check"></i> Alert!</h4>
          Successfully created user.
        </div>
      </div>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="box box-primary">
              <div class="box-header with-border">
                <a href="<?php echo site_url('superadmin/Admin/create_admin'); ?>" class="btn btn-default btn-sm"><span class="fa fa-plus-square"></a>
                <div class="box-tools">
                  <div class="input-group input-group-sm" style="width: 250px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search Admin">
                    <div class="input-group-btn">
                      <a href="<?php echo site_url('superadmin/Admin/search_admin'); ?>" class="btn btn-default"><i class="fa fa-search"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Username</th>
                      <th>Full Name</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
					<?php foreach($data as $users){ ?>
                    <tr>
                      <td><?php echo $users['adminfname']?></td>
					  <td><?php echo $users['adminlname']?></td>
                      <td><?php echo $users['username']?></td>
                      <td><?php echo $users['gender']?></td>
					  <td><?php echo $users['adminaddress']?></td>
					  <td><?php echo $users['birthdate']?></td>
					  <td><?php echo $users['adminemail']?></td>
					  <td><?php echo $users['password']?></td>
                      <td style="width: 150px;">
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#viewModal"><span class="fa fa-eye"></span></button>
                        <button type="submit" class="btn btn-success"><span class="fa fa-unlock"></span></button>
                      </td>
                    </tr>
					<?php } ?>	
                  </tbody>
                </table>
              </div>
              <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
          </div>
        </div>
      </div>
      </div>
    </section>
  </div>
</div>
<!--view modal-->
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Student Name Here</h4>
      </div>
      <div class="modal-body">
        <dl class="dl-horizontal">
          <dt>Username:</dt>
            <dd>sample</dd>
          <dt>Full Name:</dt>
            <dd>sample</dd>
          <dt>Email Address:</dt>
            <dd>sample</dd>
          <dt>Gender:</dt>
            <dd>sample</dd>
          <dt>Address:</dt>
            <dd>sample</dd>
          <dt>Status</dt>
            <dd>Active</dd>
          <dt>Created On:</dt>
            <dd>sample</dd>
        </dl>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--delete modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h1>Do you really want to delete this event?</h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary " data-dismiss="modal">Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>