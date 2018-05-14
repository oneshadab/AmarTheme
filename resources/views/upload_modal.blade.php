@php
    $filters = array(
        array("name" => "Category", "options" => array("E-Commerce", "Event", "WordPress")),
    );
@endphp

<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('upload')}}" method='post' enctype="multipart/form-data">

                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="description" >Description</label>
                        <textarea class="form-control" type="text" name="description"id="description"></textarea>
                    </div>
                    @foreach($filters as $f)
                        <div class="form-group">
                            <label for="{{$f['name']}}">{{$f['name']}}</label>
                            <select class="form-control" id="{{$f['name']}}" name='category'>
                                @foreach($f['options'] as $op)
                                    <option>{{$op}}</option>
                                @endforeach
                            </select>
                        </div>
                    @endforeach
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input class="form-control" type="text" name="price" id="price">
                    </div>
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
