<?php
    // echo "...radios:L2: tip_percent = $tip_percent; tip_percent_custom = $tip_percent_custom <br>";


	for($percent = 10 ; $percent <= 20; $percent += 5) {
			$checked = "";
    		if($percent == $tip_percent) $checked = 'checked'; // == otherwise false (number vs strings)
			echo "
					<label> 
						<input type='radio' 
		                        name='tip_percent' 
		                        value='" . $percent . "'
		                        " . $checked . "  
                        > " . $percent . "%
					</label>
				";
		// }
	// echo "<br>in checked:" . var_dump($checked) . "";

	}

	// echo "<br>out checked:" . var_dump($checked) . "";
	

?>
