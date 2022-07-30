@extends('utama.main.main')
@section('container')
    <style>
        .payment-info {
            background: blue;
            padding: 10px;
            border-radius: 6px;
            color: #fff;
            font-weight: bold;
        }

        .product-details {
            padding: 10px;
        }

        body {
            background: #eee;
        }

        .cart {
            background: #fff;
        }

        .p-about {
            font-size: 12px;
        }

        .table-shadow {
            -webkit-box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.42);
            box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.42);
        }

        .type {
            font-weight: 400;
            font-size: 10px;
        }

        label.radio {
            cursor: pointer;
        }

        label.radio input {
            position: absolute;
            top: 0;
            left: 0;
            visibility: hidden;
            pointer-events: none;
        }

        label.radio span {
            padding: 1px 12px;
            border: 2px solid #ada9a9;
            display: inline-block;
            color: #8f37aa;
            border-radius: 3px;
            text-transform: uppercase;
            font-size: 11px;
            font-weight: 300;
        }

        label.radio input:checked+span {
            border-color: #fff;
            background-color: blue;
            color: #fff;
        }

        .credit-inputs {
            background: rgb(102, 102, 221);
            color: #fff !important;
            border-color: rgb(102, 102, 221);
        }

        .credit-inputs::placeholder {
            color: #fff;
            font-size: 13px;
        }

        .credit-card-label {
            font-size: 9px;
            font-weight: 300;
        }

        .form-control.credit-inputs:focus {
            background: rgb(102, 102, 221);
            border: rgb(102, 102, 221);
        }

        .line {
            border-bottom: 1px solid rgb(102, 102, 221);
        }

        .information span {
            font-size: 12px;
            font-weight: 500;
        }

        .information {
            margin-bottom: 5px;
        }

        .items {
            -webkit-box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.25);
            box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.08);
        }

        .spec {
            font-size: 11px;
        }
    </style>
    <div class="site-section">
        <div class="container mt-5 p-3 rounded cart">
            <div class="row no-gutters">
                <div class="col-md-8">
                    <div class="product-details mr-2">
                        <div class="d-flex flex-row align-items-center"><i class="fa fa-long-arrow-left"></i><span
                                class="ml-2">Continue Shopping</span></div>
                        <hr>
                        <h6 class="mb-0">Shopping cart</h6>
                        <div class="d-flex justify-content-between"><span>You have 4 items in your cart</span>
                            <div class="d-flex flex-row align-items-center"><span class="text-black-50">Sort by:</span>
                                <div class="price ml-2"><span class="mr-1">price</span><i class="fa fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                            <div class="d-flex flex-row"><img class="rounded"
                                    src="https://cf.shopee.co.id/file/5ae291f27102c3413c8d28cc41129a67" width="100px">
                                <div class="ml-2"><span class="font-weight-bold d-block">Baju Batik Pria</span><span
                                        class="spec">Biru Hitam, XL</span></div>
                            </div>
                            <div class="d-flex flex-row align-items-center"><span class="d-block">2</span><span
                                    class="d-block ml-5 font-weight-bold">340.000</span><i
                                    class="fa fa-trash-o ml-3 text-black-50"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                            <div class="d-flex flex-row"><img class="rounded"
                                    src="https://cf.shopee.co.id/file/a49427948b4094dad9126828bc5380c3" width="100px">
                                <div class="ml-2"><span class="font-weight-bold d-block">Sweater Biru</span><span
                                        class="spec">
                                        Biru, XXL</span></div>
                            </div>
                            <div class="d-flex flex-row align-items-center"><span class="d-block">1</span><span
                                    class="d-block ml-5 font-weight-bold">120.000</span><i
                                    class="fa fa-trash-o ml-3 text-black-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="payment-info">
                        <div class="d-flex justify-content-between align-items-center"><span>Card details</span></div><span
                            class="type d-block mt-3 mb-1">Card type</span><label class="radio"> <input type="radio"
                                name="card" value="payment" checked> <span><img width="30"
                                    src="https://img.icons8.com/color/48/000000/mastercard.png" /></span> </label>

                        <label class="radio"> <input type="radio" name="card" value="payment"> <span><img
                                    width="30" src="https://img.icons8.com/officel/48/000000/visa.png" /></span>
                        </label>

                        <label class="radio"> <input type="radio" name="card" value="payment"> <span><img
                                    width="30" src="https://img.icons8.com/ultraviolet/48/000000/amex.png" /></span>
                        </label>


                        <label class="radio"> <input type="radio" name="card" value="payment"> <span><img
                                    width="30" src="https://img.icons8.com/officel/48/000000/paypal.png" /></span>
                        </label>
                        <div><label class="credit-card-label">Name on card</label><input type="text"
                                class="form-control credit-inputs" placeholder="Name"></div>
                        <div><label class="credit-card-label">Card number</label><input type="text"
                                class="form-control credit-inputs" placeholder="0000 0000 0000 0000"></div>
                        <div class="row">
                            <div class="col-md-6"><label class="credit-card-label">Date</label><input type="text"
                                    class="form-control credit-inputs" placeholder="12/24"></div>
                            <div class="col-md-6"><label class="credit-card-label">CVV</label><input type="text"
                                    class="form-control credit-inputs" placeholder="342"></div>
                        </div>
                        <hr class="line">
                        <div class="d-flex justify-content-between information"><span>Subtotal</span><span>Rp.
                                460.000</span>
                        </div>
                        <div class="d-flex justify-content-between information"><span>Shipping</span><span>Rp. 27.000</span>
                        </div>
                        <div class="d-flex justify-content-between information"><span>Total(Incl.
                                taxes)</span><span>Rp. 487.000</span></div><button
                            class="btn btn-primary btn-block d-flex justify-content-between mt-3" type="button"
                            style="
                            width: 100%;
                            border-radius: 5px !important;
                            padding: 0;
                            height: 50px;
                            display: flex !important;
                            align-items: center;
                            justify-content: center !important;
                        "><span>Checkout<i
                                    class="fa fa-long-arrow-right ml-1"></i></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
