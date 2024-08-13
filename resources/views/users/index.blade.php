@extends('layouts.app')

@section('content')
<div class="row">
   
</div>

@session('success')
    <div class="alert alert-success" role="alert"> 
        {{ $value }}
    </div>
@endsession

{{-- <table class="table table-bordered">
   <tr>
       <th>No</th>
       <th>Name</th>
       <th>Email</th>
       <th>Roles</th>
       <th width="280px">Action</th>
   </tr>
   @foreach ($data as $key => $user)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
          @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
               <label class="badge bg-success">{{ $v }}</label>
            @endforeach
          @endif
        </td>
        <td>
             <a class="btn btn-info btn-sm" href="{{ route('users.show',$user->id) }}"><i class="fa-solid fa-list"></i> Show</a>
             <a class="btn btn-primary btn-sm" href="{{ route('users.edit',$user->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
              <form method="POST" action="{{ route('users.destroy', $user->id) }}" style="display:inline">
                  @csrf
                  @method('DELETE')

                  <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
              </form>
        </td>
    </tr>
 @endforeach
</table> --}}

<main>
    <div class="pagetitle">
        <h1>Users Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Use</li>
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
                            <h5 class="card-title">users Table</h5>

                            <!-- "Create user" button -->
                            <div class="mb-3">
                                <a href="{{ route('users.create') }}" class="btn btn-success">
                                    <i class="fa-solid fa-plus"></i> Create user
                                </a>
                            </div>

                            <!-- Table with stripped rows -->
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">user Details</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $user)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->detail }}</td>
                                                
                                                <td>
                                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                        <a class="btn btn-info btn-sm" href="{{ route('users.show', $user->id) }}"><i class="fa-solid fa-list"></i> Show</a>
                                                        <a class="btn btn-primary btn-sm" href="{{ route('users.edit', $user->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
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
                                {{-- {!! $users->links() !!} --}}
                            </div>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
{{-- {!! $data->links('pagination::bootstrap-5') !!} --}}


@endsection
