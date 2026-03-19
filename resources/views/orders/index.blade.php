@extends('layout')
@section('content')


    <div class="container">
        <br>
        <h2 style="text-align:center">Total Order List</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <br>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->customer_name }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->product_name }}</td>
                        <td>{{ $order->product_price }}</td>
                        <td>
                            <form action="/order/destroy/{{ $order->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            <a href="/order/edit/{{ $order->id }}" class="btn btn-warning">Edit</a>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection