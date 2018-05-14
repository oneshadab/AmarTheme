@php
    $filters = array(
        array("name" => "Category", "options" => array("E-Commerce", "Event", "WordPress")),
    );
@endphp

<div class="modal fade text-left" id="uploadImageModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('upload')}}" method='post' enctype="multipart/form-data">

                <div class="modal-body">

                    <div class="form-group">
                        <label for="image">File</label>
                        <input class="form-control" type="file" id="image" name="zip">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-upload"> </i> Upload
                    </button>

                </div>
                {{ csrf_field() }}
            </form>

        </div>
    </div>
</div>
