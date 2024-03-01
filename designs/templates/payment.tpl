{literal}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Credit Card Payment Form Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="payment/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="payment/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="payment/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="payment/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
</div>

<!-- Credit Card Payment Form - START -->

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <h3 class="text-center">Payment Details</h3>
                        <img class="img-responsive cc-img" src="payment/creditcardicons.png">
                    </div>
                </div>
                <div class="panel-body">
                    <form method="post" action="" >
                        <input type="hidden" name="hide" value="h">

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>CARD NUMBER</label>
                                    <div class="input-group">

                                        <input type="tel" class="form-control" placeholder="Valid Card Number" name="cnumber"/>
                                        <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input type="tel" class="form-control" placeholder="MM / YY" name="edate"  />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label>CV CODE</label>
                                    <input type="tel" class="form-control" placeholder="CVC" name="cvv" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>CARD OWNER</label>
                                    <input type="text" class="form-control" placeholder="Card Owner Names" name="cowner"/>
                                </div>
                            </div>
                        </div>
                   
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-12">
                            <tr><td></td><td> <input type="Submit" value="submit"></td></tr>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

<style>
    .cc-img {
        margin: 0 auto;
    }
</style>
<!-- Credit Card Payment Form - END -->

</div>

</body>
</html>{/literal}