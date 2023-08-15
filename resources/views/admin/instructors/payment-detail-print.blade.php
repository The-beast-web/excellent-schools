<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Student Invoice Print | LMS | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=3.1.2') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=3.1.2') }}">
</head>

<body class="bg-white" onload="printPromot()">
    <div class="nk-block">
        <div class="invoice invoice-print">
            <div class="invoice-wrap">
                <div class="invoice-brand text-center">
                    <img src="{{ asset('images/logo-dark.png') }}" srcset="./images/logo-dark2x.png 2x" alt="">
                </div>
                <div class="invoice-head">
                    <div class="invoice-contact">
                        <span class="overline-title">Invoice To</span>
                        <div class="invoice-contact-info">
                            <h4 class="title">Gregory Ander son</h4>
                            <ul class="list-plain">
                                <li><em class="icon ni ni-home-fill"></em><span>Eco Bank</span></li>
                                <li><em class="icon ni ni-tranx-fill"></em><span>7778896016</span></li>
                                <li><em class="icon ni ni-user-fill-c"></em><span>Jon Snow</span></li>
                                <li><em class="icon ni ni-mail-fill"></em><span>example@example.com</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="invoice-desc">
                        <h3 class="title">Invoice</h3>
                        <ul class="list-plain">
                            <li class="invoice-id"><span>Invoice ID</span>:<span>66K5W3</span></li>
                            <li class="invoice-date"><span>Date</span>:<span>26 Jan, 2020</span></li>
                            <li class="invoice-date"><span>Status</span>:<span>Pending</span></li>
                        </ul>
                    </div>
                </div><!-- .invoice-head -->
                <div class="invoice-bills">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Item ID</th>
                                    <th>Course</th>
                                    <th>Price</th>
                                    <th>Enrolled</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>24108054</td>
                                    <td>Dashlite - Conceptual App Dashboard - Regular License</td>
                                    <td>$40.00</td>
                                    <td>5</td>
                                    <td>$200.00</td>
                                </tr>
                                <tr>
                                    <td>24108054</td>
                                    <td>6 months premium support</td>
                                    <td>$25.00</td>
                                    <td>1</td>
                                    <td>$25.00</td>
                                </tr>
                                <tr>
                                    <td>23604094</td>
                                    <td>Invest Management Dashboard - Regular License</td>
                                    <td>$131.25</td>
                                    <td>1</td>
                                    <td>$131.25</td>
                                </tr>
                                <tr>
                                    <td>23604094</td>
                                    <td>6 months premium support</td>
                                    <td>$78.75</td>
                                    <td>1</td>
                                    <td>$78.75</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">Subtotal</td>
                                    <td>$435.00</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">Commission</td>
                                    <td>$10.00</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">Grand Total</td>
                                    <td>$478.50</td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="nk-notes ff-italic fs-12px text-soft"> Invoice was created on a computer and is
                            valid without the signature and seals. </div>
                    </div>
                </div><!-- .invoice-bills -->
            </div><!-- .invoice-wrap -->
        </div><!-- .invoice -->
    </div><!-- .nk-block -->
    <script>
        function printPromot() {
            window.print();
        }
    </script>
</body>

</html>
