<?php
	// echo "radios.php L10: current tip_percent is $tip_percent";

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

	}

?>
