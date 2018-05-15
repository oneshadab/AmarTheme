@php
    $filters = array(
        array("name" => "Category", "options" => array("E-Commerce", "Event", "WordPress")),
    );
@endphp

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('edit', $product['id'])}}" method='post' enctype="multipart/form-data">

                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name" value="{{$product['name']}}">
                    </div>
                    <div class="form-group">
                        <label for="description" >Description</label>
                        <textarea class="form-control" type="text" name="description"id="description" volue="{{$product['details']}}"></textarea>
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
                        <input class="form-control" type="text" name="price" id="price" value="{{$product['price']}}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-check"> </i> Save
                    </button>

                </div>
                {{ csrf_field() }}
            </form>

        </div>
    </div>
</div>
