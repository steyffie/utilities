<div class="content-wrapper">
  <div class="container">
    <section class="content-header">
      <h1>
        Searches for CIIT gathering...
      </h1>
      <div class="box-body">
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-ban"></i> Alert!</h4>
          Event Not Created/updated!
        </div>
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-check"></i> Alert!</h4>
          Successfully created/updated an event: Title.
        </div>
      </div>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="box box-primary">
              <div class="box-header with-border">
                <a href="<?php echo site_url('subadmin/Event/create_event'); ?>" class="btn btn-default btn-sm"><span class="fa fa-plus-square"></span>&nbsp;Create Event</a></button>
                <div class="box-tools">
                  <div class="input-group input-group-sm" style="width: 250px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search Event">
                    <div class="input-group-btn">
                      <a href="<?php echo site_url('subadmin/Event/search_event'); ?>" class="btn btn-default"><i class="fa fa-search"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Venue</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>CIIT Gathering</td>
                      <td style="width: 450px;"> 
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      </td>
                      <td>School Grounds</td>
                      <td>00-00-0000</td>
                      <td>1:30 AM</td>
                      <td style="width: 150px;">
                        <a href="<?php echo base_url('subadmin/Event/edit_event'); ?>" class="btn btn-success"><span class="fa fa-edit"></span></a>
                        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"><span class="fa fa-trash"></span></button>
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
        <h4 class="modal-title" id="myModalLabel">Studen Name Here</h4>
      </div>
      <div class="modal-body">
        <dl class="dl-horizontal">
          <dt>Event No.:</dt>
            <dd>sample</dd>
          <dt>Event Title:</dt>
            <dd>sample</dd>
          <dt>Description:</dt>
            <dd>sample</dd>
          <dt>Held On:</dt>
            <dd>sample</dd>
          <dt>Posted By:</dt>
            <dd>sample</dd>
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