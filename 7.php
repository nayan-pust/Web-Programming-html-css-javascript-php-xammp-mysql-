
<!DOCTYPE html>

<head>
	<title>Calculate Electricity Bill</title>
    <style type="text/css">
        #page-wrap
        {
        text-align: center;
        font-size: 30px;
        }
        input
        {
            font-size: 30px;
        }
        #field
        {
            background-color: aqua;
            color: blue;
        }
    </style>

    
</head>

<?php
    $result_str = $result = '';
    if ( isset( $_POST['unit-submit'] ) ) {
        $units = $_POST['units'];
        if ( !empty( $units ) ) {
            $result     = calculate_bill( $units );
            $result_str = 'Total amount of ' . $units . '   units = ' . $result . '   Taka';
        }
    }
    function calculate_bill( $units )
    {
        $unit_cost_first  = 3.50;
        $unit_cost_second = 4.00;
        $unit_cost_third  = 5.20;
        $unit_cost_fourth = 6.50;

        if ( $units <= 50 ) {
            $bill = $units * $unit_cost_first;
        } else if ( $units > 50 && $units <= 100 ) {
            $temp            = 50 * $unit_cost_first;
            $remaining_units = $units - 50;
            $bill            = $temp + ( $remaining_units * $unit_cost_second );
        } else if ( $units > 100 && $units <= 200 ) {
            $temp            = ( 50 * 3.5 ) + ( 100 * $unit_cost_second );
            $remaining_units = $units - 150;
            $bill            = $temp + ( $remaining_units * $unit_cost_third );
        } else {
            $temp            = ( 50 * 3.5 ) + ( 100 * $unit_cost_second ) + ( 100 * $unit_cost_third );
            $remaining_units = $units - 250;
            $bill            = $temp + ( $remaining_units * $unit_cost_fourth );
        }
        return number_format( (float) $bill, 2, '.', '' );
    }

?>

<body>
	<div id="page-wrap">
		<h1> Calculate Electricity Bill</h1>

		<form action="" method="post">
            	<input type="number" min="0" name="units" id="field"  placeholder="Please enter no. of Units" />
            	<input type="submit" name="unit-submit" value="Submit" />
		</form>

		<div>
		    <?php echo '<br />' . $result_str; ?>
		</div>
	</div>
</body>
</html>