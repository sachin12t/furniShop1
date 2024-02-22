<?php include 'layout/header.php' ?>
<div class="hero-cart">
    <div class="container">
        <div class="row">
            <h2 class="text-white fs-1">Cart</h2>
        </div>
    </div>
</div>
<div class="hero-table">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 product-table">
                <table>
                    <thead>
                        <tr>
                            <th class="product-imagae">Image</th>
                            <th class="product-imagae">Product</th>
                            <th class="product-imagae">Price</th>
                            <th class="product-imagae">Quantity</th>
                            <th class="product-imagae">Total</th>
                            <th class="product-imagae">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="product-imagae">
                                <img src="images/product-1.png" alt="">
                            </td>
                            <td>
                                <h5>Product 1</h5>
                            </td>
                            <td>$49.00</td>
                            <td>-1+</td>
                            <td>$49.00</td>
                            <td>
                                <a href="#" class="btn btn-black">X</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="product-imagae">
                                <img src="images/product-1.png" alt="">
                            </td>
                            <td>
                                <h5>Product 2</h5>
                            </td>
                            <td>$49.00</td>
                            <td>-1+</td>
                            <td>$49.00</td>
                            <td>
                                <a href="#" class="btn btn-black">X</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-dark rounded-pill px-4">Update Cart</button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-dark rounded-pill px-4">Continue Shoping</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-2 mt-5">
                        <h3 class="fs-3">Coupon</h3>
                        <p>Enter your coupon code if you have one</p>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control p-2" placeholder="Couopn code">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-dark rounded-pill px-4 py-2">Apply Coupon Code</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="row justify-content-end">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col"><h3>CART TOTALS</h3></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6"><span>Subtotal</span></div>
                            <div class="col-md-6"><strong>$230</strong></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6"><span>Subtotal</span></div>
                            <div class="col-md-6"><strong>$230</strong></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-dark rounded-pill px-4 py-2 my-4">Proceed To Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'layout/footer.php' ?>