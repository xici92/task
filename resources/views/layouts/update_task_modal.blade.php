<div class="modal" tabindex="-1" id="updateModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="text-center modal-title">Edit Task</h3>
            </div>
            <form  method="POST" action="">
                {{ csrf_field() }}
                {{method_field('PATCH')}}
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" id="name"  class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Task description:</label>
                        <textarea  cols="30" id="description" name="description" rows="3" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Status:</label>
                        <select class="form-control" name="status" required>
                            <option value="0">Assigned</option>
                            <option value="1">In Progress</option>
                            <option value="2">Completed</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Assign to:</label>
                        <select name="assign" class="form-control" required>
                            @foreach($users  as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="form-group">
                        <ul class="">
                            @foreach ($errors->all() as $error)
                                <li style="color:red;list-style-type: none;">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <div class="modal-footer">
                    <button type="submit" class="btn btn-success pull-right" >
                        Save
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>



