<div class="modal" tabindex="-1" id="addModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button style="font-size: 35px" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2 class="modal-title" style="padding-top: 20px; margin-left:150px">Add a new task</h2>

            </div>
            <div class="modal-body">
                <form id="addModal" class="form-horizontal" method="POST" action="{{route('addTask')}}">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="name" style="margin-left: 40px; margin-bottom: 3px;" class="control-label">Name</label>
                        <div class="col-md-11">
                            <input style="margin-left: 25px" id="name" value="{{old('name')}}"  class="form-control" name="name"  autofocus required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" style="margin-left: 40px; margin-bottom: 3px;" class="control-label">Description</label>
                        <div class="col-md-11">
                            <textarea name="description" style="margin-left: 24px;" class="form-control"  rows="3" required>{{old('description')}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label style="margin-left: 40px;margin-bottom: 3px;" for="sel1">Assign to:</label>
                        <div class="col-md-11">
                        <select class="form-control" name="assign" style="margin-left: 25px">
                            @foreach($users  as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="form-group">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li style="color:red;list-style-type: none;">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <hr>
                    <div class="form-group">
                        <div class="col-md-11">
                            <button style="margin-left: 25px"  class="btn btn-success pull-left" type="submit">
                                Add Task
                            </button>

                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>

