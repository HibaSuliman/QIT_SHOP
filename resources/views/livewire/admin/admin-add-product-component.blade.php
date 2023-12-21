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
                                Add New Product
                           </div>
                           <div class="col-md-6">
                           <a href="{{route('adminProduct')}}" class="btn btn-success">All Products</a>
                           </div>
                       </div>
                   </div>
                   <div class="panel-body">
                        @if(Session::has('metion'))
                          <div class="alert alert-success" role="alert">{{Session::get('metion')}}</div>
                        @endif
                       <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="storeProduct">
                          <div class="form-group">
                            <label class="col-md-4 control-label">Product Name</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Product Name" class="from-control input-md" wire:model="name"/>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-md-4 control-label">Description</label>
                            <div class="col-md-4">
                                <textarea placeholder="Description" class="from-control" wire:model="description"></textarea>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-md-4 control-label">Price</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Price" class="from-control input-md" wire:model="price"/>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-md-4 control-label">Image</label>
                            <div class="col-md-4">
                                <input type="file" class="input-file"  wire:model="image"/>
                                @if($image)
                                  <img src="{{$image->temporaryUrl()}}" width="120"/>
                                @endif
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-md-4 control-label">Category</label>
                            <div class="col-md-4">
                                <select class="form-control" wire:model="category_id">
                                    <option>Select Category</option>
                                    @foreach($categories as $category)
                                      <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach

                                </select>
                               
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

