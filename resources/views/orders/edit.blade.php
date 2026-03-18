<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Order List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/zephyr/bootstrap.min.css">
</head>

<body>
    <h2 style="text-align:center;">Update Customer Order Form</h2>
    <form method="POST" action="/order/update/{{ $order->id }}">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="mb-3">
                <label for="exampleCustomerName" class="form-label">Customer Name</label>
                <input type="text" class="form-control" id="customer_name" aria-describedby="customerHelp"
                    name="customer_name" value="{{ $order->customer_name }}">

            </div>
            <div class="mb-3">
                <label for="examplePhone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="examplePhone" name="phone" value="{{ $order->phone }}">
            </div>
            <div class="mb-3">
                <label for="exampleProductName" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="exampleProductName" name="product_name"
                    value="{{ $order->product_name }}">
            </div>

            <div class="mb-3">
                <label for="exampleProductPrice" class="form-label">Price</label>
                <input type="number" class="form-control" id="exampleProductPrice" name="product_price"
                    value="{{ $order->product_price }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</body>

</html>