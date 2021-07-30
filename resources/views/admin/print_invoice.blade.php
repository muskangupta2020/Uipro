<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <style type="text/css">.card {
    margin-bottom: 1.5rem
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #c8ced3;
    border-radius: .25rem
}

.card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0
}

.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: #f0f3f5;
    border-bottom: 1px solid #c8ced3
}</style>
</head>
<body>
<div class="container-fluid">
    <div id="ui-view" data-select2-id="ui-view">
        <div>
            <div class="card">
                
                 
                   
                <div class="card-header">Invoice
                    <strong></strong>
                    <a class="btn btn-sm btn-secondary float-right mr-1 d-print-none" href="#" onclick="javascript:window.print();" data-abc="true">
                        <i class="fa fa-print"></i> Print</a>
                    <a class="btn btn-sm btn-info float-right mr-1 d-print-none" href="#" data-abc="true">
                        <i class="fa fa-save"></i> Save</a>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-sm-4">
                            <h6 class="mb-3">From:</h6>
                            <div>
                                <strong>Uipro</strong>
                            </div>
                            <div>42, Awesome Enclave</div>
                            <div>New York City, New york, 10394</div>
                            <div>Email: admin@bbbootstrap.com</div>
                            <div>Phone: +48 123 456 789</div>
                        </div>
                        <div class="col-sm-4">
                            <h6 class="mb-3">To:</h6>
                            <div>
                                <strong>{{$q->user_id}}</strong>
                            </div>
                            <div>{{$q->street_address}}</div>
                            <div>{{$q->city}}</div>
                            <div>Email: {{$q->email}}</div>
                            <div>Phone: +91{{$q->phone_no}}</div>
                        </div>
                        <div class="col-sm-4">
                            <h6 class="mb-3">Details:</h6>
                            <div>Invoice
                                <strong>{{$q->invoice_id}}</strong>
                            </div>
                            <div>{{$q->invoice_date}}</div>
                            <div></div>
                            <div>Account Name: </div>
                            <div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th>Item</th>
                                    <th class="center">Quantity</th>
                                    <th class="right">Discount</th>
                                    <th class="right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach($product as $pro)
                                <tr>
                                    <td class="center">{{$loop->iteration}}</td>
                                    <td class="left">{{$pro->product_name}}</td>
                                    <td class="center">{{$pro->p_Quantity}}</td>
                                    <td class="right"><?php echo $dis=$pro->p_price - $pro->p_total_cost; ?></td>
                                    <td class="right">{{$pro->p_total_cost}}</td>
                                   
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
                        <div class="col-lg-4 col-sm-5 ml-auto">
                            <table class="table table-clear">
                                <tbody>
                                    <tr>
                                        <td class="left">
                                            <strong>Total</strong>
                                        </td>
                                        <td class="right">
                                            <strong>{{$q->total}} Rs</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                  
               
                   
            </div>
        </div>
    </div>
</div>
</body>
</html>