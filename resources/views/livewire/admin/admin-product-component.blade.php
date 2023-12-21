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
                        <div class="col-md-6">All Products</div>
                        <div class="col-md-6"><a href="{{route('adminAddProduct')}}" class="btn btn-success pull-right">Add New Product</a></div>
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
                                <th> Price</th>
                                <th> Category</th>
                                <th> Date</th>
                                <th> Image</th>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr> 
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->created_at}}</td>
                                <td><img src="{{asset('assets/images/products')}}/{{$product->image}}" width="60"/></td>
                                
                                <td>
                                    <a href="{{route('adminEditProduct',['product_id'=>$product->id])}}"><i class="fa fa-edit fa-2x"></i></a>
                                    <a href="#" wire:click.prevent="deleteProduct({{$product->id}})"><i class="fa fa-times fa-2x text-danger"></i></a>
                                </td>
                            
                            </tr>
                            @endforeach
                        </tbody>

                       </table>
                       {{$products->links()}}
                   </div>
               </div>
          </div>

       </div>

    </div>

  
</div>
