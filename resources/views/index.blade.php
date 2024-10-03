<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Product Management</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/assets/css/styles.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


    </head>
    <body>

       <section class="container">
        <div>
            <p class="fs-1 fw-bold">Product Management</p>
            <form id="productForm" action="{{url('/')}}">
                <div class="mb-3">
                    <label for="productName" class="form-label fs-5 fw-medium">Product Name</label>
                    <input type="text" class="form-control" id="productName" name="productName" required>
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label fs-5 fw-medium">Quantity in Stock</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label fs-5 fw-medium">Price per Item</label>
                    <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div id="listProducts">
            {{-- @dd($products) --}}
            <div class="mt-5 border">
                
                <div id="productList" class=" row">
                    <div class="row m-0 border-bottom">
                        <span class="col p-0">
                            <p class="fs-5">Product name</p>
                        </span>
                        <span class="col p-0">
                            <p class="fs-5">Quantity</p>
                        </span>
                        <span class="col p-0">
                            <p class="fs-5">Price</p>
                        </span>
                        <span class="col p-0">
                            <p class="fs-5">Date submitted</p>
                        </span>
                        <span class="col p-0">
                            <p class="fs-5">Total</p>
                        </span>
                        <span class="col p-0">
                            <p class="fs-5">Actions</p>
                        </span>
                    </div>
                    @if (Count($products) > 0)
                    @foreach ($products as $prd)
                        <div class="row m-0 border-bottom">
                         <span class="col p-0">
                             <p class="fs-5">{{$prd["name"]}}</p>
                         </span>
                         <span class="col p-0">
                             <p class="fs-5">{{$prd["quantity"]}}</p>
                         </span>
                         <span class="col p-0">
                             <p class="fs-5">{{$prd["price"]}}</p>
                         </span>
                         <span class="col p-0">
                             <p class="fs-5">{{$prd["created_at"]}}</p>
                         </span>
                         <span class="col p-0">
                             <p class="fs-5">{{$prd["total"]}}</p>
                         </span>
                         <span class="col p-0">
                             <p class="fs-5">Actions</p>
                         </span>
                     </div>
                    @endforeach
                    
                @else
                    <div class="text-center">
                        <p class="text-[2.5rem] font-medium capitalize">we don't have any products</p>
                    </div>
                @endif
                </div>
           
            </div>
        </div>
       </section>
      
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('/assets/js/script.js') }}"></script>
    </body>
</html>
