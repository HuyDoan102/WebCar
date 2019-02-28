<div class="modal fade" id="modal-delete">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Delete Item</b></h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h4>Are you remove this item?</h4>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <form id="form-delete" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <div class="text-center">
                            <button type="submit" class="btn btn-md btn-danger">YES</button>
                            <button type="button" class="btn btn-md btn-dark" data-dismiss="modal">NO</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
