<!-- Product Type Modal -->
<div class="modal fade" id="addtype" tabindex="-1" role="dialog" aria-labelledby="addtypeLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <form method="POST" action="create.php" class="form-horizontal" enctype="multipart/form-data" >
        <div class="modal-body">
          <fieldset>
            <legend>Product Type</legend>
            <div id="dynamic_field">
              <div class="form-row">
                <div class="form-group col-12">
                  <input type="text" name="producttype" required placeholder="Enter Product Type" class="form-control"/>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Submit</a>
          <input type="hidden" name="action" value="addtype">
        </div>
      </form>
    </div>
  </div>
</div>