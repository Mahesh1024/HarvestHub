@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-12 col-lg-12 col-xxl-9 d-flex">
        <div class="card flex-fill">
            <div class="card-header">

                <h5 class="card-title mb-0">Order Details</h5>
            </div>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th class="d-none d-xl-table-cell">Email Id</th>
                        <th class="d-none d-xl-table-cell">Order Date</th>
                        <th>Total Amount</th>
                        <!-- <th class="d-none d-md-table-cell">Delete</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order->order_id}}</td>
                        <td class="d-none d-xl-table-cell">{{$order->email_id}}</td>
                        <td class="d-none d-xl-table-cell">{{$order->order_date}}</td>
                        <td class="d-none d-xl-table-cell">{{$order->total_amount}}</td>
                        <!-- <td class="d-none d-md-table-cell"> <a href="" class="btn btn-danger">Delete</a> -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection