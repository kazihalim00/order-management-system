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
    <form>
        <div class="container">
            <div class="mb-3">
                <label for="exampleCustomerName" class="form-label" name="customer_name">Customer Name</label>
                <input type="text" class="form-control" id="customer_name" aria-describedby="customerHelp">

            </div>
            <div class="mb-3">
                <label for="exampleProductName" class="form-label" name="product_name">Product Name</label>
                <input type="text" class="form-control" id="exampleProductName">
            </div>
            <div class="mb-3">
                <label for="examplePhone" class="form-label" name="phone">Phone</label>
                <input type="text" class="form-control" id="examplePhone">
            </div>
            <div class="mb-3">
                <label for="exampleProductPrice" class="form-label" name="product_price">Price</label>
                <input type="number" class="form-control" id="exampleProductPrice">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</body>

</html>