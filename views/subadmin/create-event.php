<div class="content-wrapper">
  <div class="container">
    <section class="content-header">
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-hidden col-sm-hidden col-md-3 col-lg-3">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <section class="content-header">
            <div class="box-body">
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <?php echo validation_errors(); ?>
              </div>
            </div>
          </section>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3>Create CIIT Event</h3>
            </div>
            <div class="box-body">
              <?php echo form_open('subadmin/Event/create_event')?>
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label>Event title</label>
                    <input type="text" class="form-control"  placeholder="Enter Event Title">
                  </div>
                  <div class="form-group">
                    <label>Event Description</label>
                    <textarea class="form-control" placeholder="Enter Description"></textarea>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" placeholder="Event Date" data-mask>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                      </div>
                      <input type="text" class="form-control" placeholder="h : m A">
                    </div>
                  </div>
                  <div class="form-group ">
                    <label>Send to:</label>
                    <select class="form-control">
                      <option>SITE</option>
                      <option>4th Year</option>
                      <option>3rd Year</option>
                      <option>2nd Year</option>
                      <option>1st Year</option>
                      <option>do not send</option>
                    </select>
                  </div>
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-default">Cancel</button>
                  <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>




