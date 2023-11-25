@extends('admin.layouts.main')

@section('content')
<div class="row">
    <div class="col-12 col-lg-12 col-xxl-9 d-flex">
        <div class="card flex-fill">
            <div class="card-header">

                <h5 class="card-title mb-0">User Details</h5>
            </div>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>Full name</th>
                        <th class="d-none d-xl-table-cell">Email Id</th>
                        <th class="d-none d-xl-table-cell">Mobile Number</th>
                        <th>Address</th>
                        <th class="d-none d-md-table-cell">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user_details as $user)
                    <tr>
                        <td>{{$user->full_name}}</td>
                        <td class="d-none d-xl-table-cell">{{$user->email_id}}</td>
                        <td class="d-none d-xl-table-cell">{{$user->mobile_number}}</td>
                        <td class="d-none d-xl-table-cell">{{$user->address}}</td>
                        <td class="d-none d-md-table-cell"> <a href="/deleteuser/{{$user->full_name}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection