<html>
	<head>
		<title>Home Page/</title>
	</head>
	<body>
	    <h1>Welcome to ABCBank</h1>
	    <h2>Candidate Information Form</h2>
	    <ul>
		<?php
  		    $json = file_get_contents('10.96.87.180');
  		    $obj = json_decode($json);
		    $products = $obj->products;
		    foreach ($products as $product) {
			echo "<li>$product</li>";
		    }
    		?>
	    </ul>
	</body>
 </html>
