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
                                Add New Category
                           </div>
                           <div class="col-md-6">
                           <a href="{{route('adminCategory')}}" class="btn btn-success">All Categories</a>
                           </div>
                       </div>
                   </div>
                   <div class="panel-body">
                        @if(Session::has('metion'))
                          <div class="alert alert-success" role="alert">{{Session::get('metion')}}</div>
                        @endif
                       <form class="form-horizontal" wire:submit.prevent="storeCategory">
                          <div class="form-group">
                            <label class="col-md-4 control-label">Category Name</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Category Name" class="from-control input-md" wire:model="name"/>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-md-4 control-label">Category Image</label>
                            <div class="col-md-4">
                                <input type="file" class="input-file"  wire:model="image"/>
                                @if($image)
                                  <img src="{{$image->temporaryUrl()}}" width="120"/>
                                @endif
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                               <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                          </div>
                       </form>
                   </div>
               </div>
          </div>

       </div>

    </div>


</div>

