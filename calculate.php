<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
</head>

<body>
<?php
//var_dump($_GET);
$result = '';
if (isset($_GET['calculate']))
{
    //step 1: Get data from you form
    // $a =isset($_GET['a']) ? (float)trim($_GET['a']) : '';
    // $a =isset($_GET['b']) ? (float)trim($_GET['b']) : '';
    $a = $_GET['a'];
    $b = $_GET['b'];
    $op = $_GET['operation'];

    // Step 2: Validate info
    if($a == ''){
        $result = 'You did not enter the first number';
    }
    else if ($b == ''){
        $result = 'You did not enter second number';
    }
    else{
        if($op=="sum"){
            $result = $a.'+'.$b.'='.($a + $b);
        }
    }
}
else{
    $result = 'Nothing';
}
?>
<div class="container mt-3 mb-3">
    <h2>Simple Basic Operation</h2>
    <form class="form-gruop" method="get">
        <div class="mb-3">
        <select class= "form-select" name="operation">
            <option value ="sum">Sum</option>
            <option value ="sub">Subtract</option>
            <option value ="Mul">Multiply</option>
            <option value ="Div">Divide</option>
</select>
</div>
<div class="form-floatting mb-3">
    <input type="number" class="form-control" id="a" name="a" value="">
    <label for="floatingInput"> First Number</label>
</div>
<div class="form-floatting">
<input type="number" class="form-control" id="b" name="b" value="">
<label for="floatingInput"> Sencond Number</label>
</div>
<br>
<h4>
    <span class="badge bg-success"><?php echo $result; ?></span>
</h4>
<button type="submit" class="btn btn-primary btn-md" name="calculate">calculate</button>
</from>
</div>
</body>