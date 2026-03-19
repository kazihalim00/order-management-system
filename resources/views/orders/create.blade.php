<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Order</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/zephyr/bootstrap.min.css">
</head>

<body>
    <h2 style="text-align:center;">Customer Order Form</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form method="POST" action="/order/store">
        @csrf
        <div class="container">
            <div class="mb-3">
                <label for="exampleCustomerName" class="form-label">Customer Name</label>
                <input type="text" class="form-control" id="customer_name" aria-describedby="customerHelp"
                    name="customer_name">
                @error('customer_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="examplePhone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="examplePhone" name="phone">
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleProductName" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="exampleProductName" name="product_name">
                @error('product_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleProductPrice" class="form-label">Price</label>
                <input type="number" class="form-control" id="exampleProductPrice" name="product_price">
                @error('product_price')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</body>

</html>