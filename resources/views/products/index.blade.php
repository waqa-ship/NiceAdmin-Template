@extends('layouts.app')
@section('content')
    {{-- <div class="card mt-5">
  <h2 class="card-header">Product Details</h2>
  <div class="card-body">
          
        @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
        @endsession
  
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('products.create') }}"> <i class="fa fa-plus"></i> Create New Product</a>
        </div>
  
        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>
  
            <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->detail }}</td>
                    <td>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
             
                            <a class="btn btn-info btn-sm" href="{{ route('products.show',$product->id) }}"><i class="fa-solid fa-list"></i> Show</a>
              
                            <a class="btn btn-primary btn-sm" href="{{ route('products.edit',$product->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
             
                            @csrf
                            @method('DELETE')
                
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">There are no data.</td>
                </tr>
            @endforelse
            </tbody>
  
        </table>
        
        {!! $products->links() !!}
  
  </div>
</div>   --}}
<main>
    <div class="pagetitle">
        <h1>General Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">General</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12"> <!-- Adjust the column size as needed -->

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Products Table</h5>

                            <!-- "Create Product" button -->
                            <div class="mb-3">
                                <a href="{{ route('products.create') }}" class="btn btn-success">
                                    <i class="fa-solid fa-plus"></i> Create Product
                                </a>
                            </div>

                            <!-- Table with stripped rows -->
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Product Details</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($products as $product)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->detail }}</td>
                                                <td>
                                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                        <a class="btn btn-info btn-sm" href="{{ route('products.show', $product->id) }}"><i class="fa-solid fa-list"></i> Show</a>
                                                        <a class="btn btn-primary btn-sm" href="{{ route('products.edit', $product->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4">There are no data.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                {!! $products->links() !!}
                            </div>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

@endsection
