<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<?php if(!($_REQUEST['Name'] == "") &&  !($_REQUEST['Section'] == "not") && !($_REQUEST['CardNum'] == "")) { ?>
				<h1>Thanks, sucker!</h1>

				<p>
					Your information has been recorded.
				</p>
				
				<hr />
				
				<form action="sucker.php" method="post">
					<dl>
						<dt>Name</dt>
						<dd>
							<?= $_REQUEST['Name'] ?>
						</dd>
						
						<dt>Section</dt>
						<dd>
							<?= $_REQUEST['Section'] ?>
						</dd>
						
						<dt>Credit Card</dt>
						<dd>
							<?= $_REQUEST['CardNum'] ?> ( <?= $_REQUEST['Card'] ?> )
						</dd>
					</dl>
					
					<p>Here are all the suckers who have submitted here:</p>
					<?php
						$string = $_REQUEST['Name'] . ";" . $_REQUEST['Section'] . ";" . $_REQUEST['CardNum'] . ";" . $_REQUEST['Card'] . "</br>";
						file_put_contents("sucker.txt", $string, FILE_APPEND); ?>
					<?=file_get_contents("sucker.txt");?>
				</form>			
		<?php } else { ?>
			<h1>Sorry!</h1>
			<p>You didn't fill out the form completely! <a href="buyagrade.html">Try again!</a></p> 
		<?php } ?>
	</body>
</html>