<?php include 'layout/header.php';
include 'dashboard.php';
?>
<div class="addproduct">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <h3 class="text-center pt-3">Order</h3>
                <form>
                    <div class="form-group">
                        <label for="productName">Product Name:</label>
                        <input type="text" class="form-control" id="productName" placeholder="Enter product name"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity:</label>
                        <input type="number" class="form-control" id="quantity" placeholder="Enter quantity" required>
                    </div>
                    <div class="form-group">
                        <label for="quantity">TotalPrice:</label>
                        <input type="number" class="form-control" id="quantity" placeholder="Total Price" required>
                    </div>
                    <div class="form-group">
                        <label for="customerName">Customer Name:</label>
                        <input type="text" class="form-control" id="customerName" placeholder="Enter customer name"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <textarea class="form-control" id="address" rows="3" placeholder="Enter address"
                            required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Order</button>
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>
<?php include 'layout/footer.php' ?>