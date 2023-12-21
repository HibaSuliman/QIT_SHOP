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
                        <div class="col-md-6">All Users</div>
                        <div class="col-md-6"><a href="{{route('superadminAddUser')}}" class="btn btn-success pull-right">Add New User</a></div>
                     </div>
                   </div>
                   <div class="panel-body">
                      @if(Session::has('metion'))
                          <div class="alert alert-success" role="alert">{{Session::get('metion')}}</div>
                      @endif
                       <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th> Name</th>
                                <th> Email</th>
                                <th> Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr> 
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                  @if($user->hasrole('SuperAdmin'))
                                     SuperAdmin
                                  @elseif($user->hasrole('Admin'))
                                     Admin
                                  @else
                                     user
                                  @endif      
                                </td>
                                <td>
                                    <a href="{{route('superadminEditUser',['user_id'=>$user->id])}}"><i class="fa fa-edit fa-2x"></i></a>
                                    <a href="#" wire:click.prevent="deleteUser({{$user->id}})"><i class="fa fa-times fa-2x text-danger"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                       </table>
                       {{$users->links()}}
                   </div>
               </div>
          </div>

       </div>

    </div>

  
</div>
