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
                    All Permisions
                   </div>
                   <div class="panel-body">
                       <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Categories</th>
                                <th>Products</th>
                                @role('SuperAdmin')
                                <th>Users</th>
                                @endrole
                            </tr>
                        </thead>
                        <tbody>
                           
                            <tr> 
                                <td><a href="{{route('adminCategory')}}">Categories Page</a></td>
                                <td><a href="{{route('adminProduct')}}">Products Page</a></td>
                                @role('SuperAdmin')
                                <td><a href="{{route('superadminUser')}}">Users Page</a></td>
                                @endrole
                            
                            </tr>
                           
                        </tbody>

                       </table>
                   </div>
               </div>
          </div>

       </div>

    </div>


</div>

