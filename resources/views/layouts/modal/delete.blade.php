<div class="modal fade" id="modal-delete">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Delete food</h3>
                </div>
                <div class="card card-body">
                    <p>Are you remove this item?</p>
                </div>
                <form id="form-delete" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="DELETE">

                    <div class="card-footer">
                        <div class="float-right">
                            <button type="submit" class="btn btn-md btn-outline-danger">YES</button>
                            <button type="button" class="btn btn-md btn-outline-dark" data-dismiss="modal">NO</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
