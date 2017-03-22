<div class="content-wrapper">
  <div class="container">
    <section class="content-header">
      <h1>
        Searches about John Doe...
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">List of Student</h3>
                <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 250px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search Student">

                  <div class="input-group-btn">
                    <a href="<?php echo site_url('subadmin/Dashboard/search_student');?>" class="btn btn-default"><i class="fa fa-search"></i></a>
                  </div>
                </div>
              </div>
              </div>
              <div class="box-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Student ID No.</th>
                      <th>Full Name</th>
                      <th>Course/Year/Section</th>
                      <th>Contact Number</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>2014101988</td>
                      <td>John Doe</td>
                      <td>BSIT 3-R2</td>
                      <td>09165209766</td>
                      <td><span class="label label-success">Enrolled</span></td>
                      <td>
                        <button type="submit" class="btn btn-primary btn-xs btn-block" data-toggle="modal" data-target="#viewModal"><span class="fa fa-eye"></span></button>
                      </td>
                    </tr>
                    <tr>
                      <td>3788914443</td>
                      <td>Tiffany S. McAvoy</td>
                      <td>BSIT 3-R2</td>
                      <td>+44(636)-3444501</td>
                      <td><span class="label label-danger">Not Enrolled</span></td>
                      <td>
                        <button type="submit" class="btn btn-primary btn-xs btn-block" data-toggle="modal" data-target="#viewModal"><span class="fa fa-eye"></span></button>
                      </td>
                    </tr>
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
    </section>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Studen Name Here</h4>
      </div>
      <div class="modal-body">
        <dl class="dl-horizontal">
          <dt>Student ID No.:</dt>
            <dd>sample</dd>
          <dt>Full Name:</dt>
            <dd>sample</dd>
          <dt>Course/Year/Section:</dt>
            <dd>sample</dd>
          <dt>Gender:</dt>
            <dd>sample</dd>
          <dt>Birthdate:</dt>
            <dd>sample</dd>
          <dt>Address:</dt>
            <dd>sample</dd>
          <dt>Student Email Address:</dt>
            <dd>sample</dd>
          <dt>Student Contact Number:</dt>
            <dd>sample</dd>
          <dt>Mother's Name:</dt>
            <dd>sample</dd>
          <dt>Mother's Contact Number:</dt>
            <dd>sample</dd>
          <dt>Father's Name</dt>
            <dd>sample</dd>
          <dt>Father's Contact Number:</dt>
            <dd>sample</dd>
          <dt>School Status:</dt>
            <dd>sample</dd>
          <dt>Date Added:</dt>
            <dd>sample</dd>
        </dl>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>