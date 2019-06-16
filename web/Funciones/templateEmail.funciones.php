<?php

	function EmailTemplate($nombres,$email,$mensaje){

		$HTML='<html>
				<body style="background: #FFFFFF; font-family: Verdana; font-size: 14px; color:#1c1b1b;">
					<div>
						<h2>Cliente:  '.$nombres.'</h2>
						<h2>Email:  '.$email.'</h2>
						<p style="padding: 15px; background-color: #ECF8FF;">
							'.$mensaje.'
						</p>
						<p style="font-size: 9px;">&copy;'.date('Y',time()).' RLC Electric Systems SRL</p>
					</div>
				</body>
				</html>';

		return $HTML;
	}

?>