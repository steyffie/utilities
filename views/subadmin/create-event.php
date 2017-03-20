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
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                successfully added! <a href="<?php echo site_url('subadmin/Event'); ?>">click here to go back to home.</a>
              </div>
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
                    <label for="eventtitle">Name</label>
                    <input type="text" class="form-control" name="eventtitle" id="eventtitle" placeholder="name" value = "<?php echo set_value('eventtitle');?>" required>
                  </div>
                  <div class="form-group">
                    <label for="eventdesc">Description</label>
                    <textarea class="form-control" name="eventdesc" id="eventdesc" placeholder="Description" value = "<?php echo set_value('eventdesc');?>" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="eventvenue">Venue</label>
                    <input type="text" class="form-control" name="eventvenue" id="eventvenue" placeholder="Venue">
                  </div>
                  <div class="form-group">
                    <label>Date</label>
                    <input type="text" class="form-control" name="birthdate" placeholder="MM/DD/YYYY" required>
                  </div>
                  <div class="form-group">
                    <label for="eventtime">Time</label>
                    <input type="text" class="form-control" name="eventtime" id="eventtime" placeholder="1:30 AM" value = "<?php echo set_value('eventtime');?>" required>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label>Send to:</label>
                    <select class="form-control" name="send">
                      <option values="SITE">SITE</option>
                      <option values="4th Year">4th Year</option>
                      <option values="3rd Year">3rd Year</option>
                      <option values="2nd Year">2nd Year</option>
                      <option values="1st Year">1st Year</option>
                      <option values="Do not send">send later</option>
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




