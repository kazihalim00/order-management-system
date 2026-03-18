<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Orders</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/zephyr/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <br>
        <h2 style="text-align:center">Total Order List</h2>
        <br>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
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
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>