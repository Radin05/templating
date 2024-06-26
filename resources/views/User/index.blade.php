@extends('layouts.backend')
@section('content')
    <div class="col-xl-6 mt-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">List Admin</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div>
                    <a href="{{ route('user.create') }}" type="button" class="mb-3 btn btn-success">create</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">is_admin</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $user as $item )
                                <tr>
                                    <th scope="row">{{ $loop->index+1 }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->is_admin? 'Admin' : 'User' }}</td>
                                    <td>
                                        <a href="{{ route('user.show', $item->id ) }}" type="button" class="btn btn-primary">show</a>
                                        <a href="{{ route('user.edit', $item->id ) }}" type="button" class="btn btn-warning">edit</a>
                                        <a class="btn ripple btn-danger" href="" onclick="event.preventDefault();
                                            document.getElementById('destroy-form').submit();">
                                            hapus
                                        </a>

                                        <form id="destroy-form" action="{{ route('user.destroy', $item->id) }}" method="POST" class="d-none">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
