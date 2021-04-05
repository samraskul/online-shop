@extends('index.layouts.app')
@section('content')

<div class="container-row">
    <div class="cart-container">

        <!-- breadcrumb start -->
        <div class="breadcrumb">
            <a href="">Home</a>
            <i class="fa fa-greater-than"></i>
            <a href="">Shopping cart</a>
        </div>
        <!-- breadcrumb end -->

        <div>
            <div>
                <div>Cart</div>
                <div><a href="">Continue Shopping</a></div>
            </div>
            <div>
                <div>
                    If you are already registered, please login here
                </div>
                <div>
                    <form action="">
                        <input type="text" name="username">
                        <input type="text" name="password">
                        <input type="submit" value="Login">
                        <span>Remember me</span>
                        <input type="checkbox" name="remember_me">
                    </form>
                </div>
            </div>
        </div>

        <hr>

        <div>
            <div>
                <div> Billing details</div>
                <div><a href="">Add / Edit Billing details</a></div>
            </div>
            <div>
                <div> Shipping details</div>
                <div>
                    <div>
                        <span>Same as Billing</span>
                        <span><input type="checkbox" name="" id="same-as-billing-checkbox"></span>
                    </div>
                    <div><a href="">Add/Edit Shipping details</a></div>
                </div>
            </div>
        </div>

        <hr>

        <style>
            .cart-container-table {
                width: 100%;

            }

            .cart-container-table th {
                text-align: left;
                border: 1px solid var(--border-color);

            }

            .cart-container-table td {
                border: 1px solid var(--border-color);
            }
        </style>

        <div>
            <table class="cart-container-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>SKU </th>
                        <th>Price </th>
                        <th>Quantity </th>
                        <th>Discount </th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dima pola mire</td>
                        <td>D00011</td>
                        <td>59.76 $</td>
                        <td>2</td>
                        <td>-51.12 $</td>
                        <td>131.48 $</td>
                    </tr>
                    <tr>
                        <td colspan="4">Product prices result</td>
                        <td>-51.12 $</td>
                        <td>131.48 $</td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div>Selected shipment</div>
                            <div>USA First Class (3-14 days)Delivery time estimated from 3-14 days. Cras placerat. (0,00 €)</div>
                            <div><a href="">Change Shipment</a></div>
                        </td>

                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div>Selected payment</div>
                            <div>VM - Payment StandardVM - Payment Standard</div>
                            <div><a href="">Change Payment</a></div>
                        </td>

                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="4">Total:</td>
                        <td>-51.12 $</td>
                        <td>131.48 $</td>
                    </tr>
                    <tr>
                        <td colspan="6">Tax includes::</td>
                    </tr>
                    <tr>
                        <td colspan="4">VAT 10%</td>
                        <td>-51.12 $</td>
                        <td></td>
                    </tr>
                </tbody>

            </table>
        </div>

        <div>
            <form action="" method="POST">
                <div>
                    <label for="">Notes and special requests</label>
                    <br>
                    <input type="text">
                </div>
                <div>
                    <label for=""><a href="">Terms of Service</a></label>
                    <input type="checkbox" name="" id="">
                </div>
                <hr>
                <div>
                    <input type="submit" value="Check Out Now">
                </div>
            </form>
        </div>


    </div>
</div>

@endsection