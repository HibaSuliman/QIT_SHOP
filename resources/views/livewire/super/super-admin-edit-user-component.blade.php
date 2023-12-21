<div>
    <style>
        nav svg{
            height:20px;
        }
        nav .hidde{
            display:block !important;
        }
    </style>
    <div class="container" style="padding:30px 0;">
       <div class="row">
          <div class="col-md-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-md-6">
                                Update User
                           </div>
                           <div class="col-md-6">
                           <a href="{{route('superadminUser')}}" class="btn btn-success">All Users</a>
                           </div>
                       </div>
                   </div>
                   <div class="panel-body">
                        @if(Session::has('metion'))
                          <div class="alert alert-success" role="alert">{{Session::get('metion')}}</div>
                        @endif
                       <form class="form-horizontal" wire:submit.prevent="updateUser">
                          <div class="form-group">
                            <label class="col-md-4 control-label">User Name</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="User Name" class="from-control input-md" wire:model="name"/>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-4">
                               <input type="text" placeholder="User Email" class="from-control input-md" wire:model="email"/>
                               
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-md-4 control-label">User Password</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="User Password " class="from-control input-md" wire:model="password"/>
                            </div>
                          </div>


                          <div class="form-group">
                            <label class="col-md-4 control-label">Role</label>
                            <div class="col-md-4">
                                <select class="form-control" wire:model="role">
                                    <option>Select role</option>
                                    @foreach($roles as $role)
                                      <option value="{{$role->name}}">{{$role->name}}</option>
                                    @endforeach

                                </select>
                               
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                               <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                          </div>
                       </form>
                   </div>
               </div>
          </div>

       </div>

    </div>


</div>

