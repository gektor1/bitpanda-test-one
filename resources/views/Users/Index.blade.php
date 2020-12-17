@extends('Layouts.App')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users</h2>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
@if ($message = Session::get('error'))
<div class="alert alert-danger">
    <p>{{ $message }}</p>
</div>
@endif

<a class="btn btn-primary" href="{{ route('users.index', ['country' => 'Austria']) }}">Active users with Austrian citizenship</a>
<a class="btn btn-primary" href="{{ route('users.index') }}">All users</a>

<div class="row">
    <div class="col-lg-12">
        <table class="table table-bordered table-responsive-lg">
            <tr>
                <th>No</th>
                <th>Email</th>
                <th>Active</th>
                <th>Citizenship</th>
                <th>Date Created</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->active }}</td>
                <td>
                    @foreach ($user->details as $detail)
                    <p>
                        <a href="{{ route('details.edit', $detail->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>
                            {{ $detail->country->name }}
                        </a>
                    </p>
                    @endforeach
                </td>
                <td>{{ date_format($user->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {!! $users->links() !!}
    </div>
</div>
@endsection