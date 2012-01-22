<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
	<head>

	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="grid.js" /></script>

	</head>

	<body>
		<h2>Table</h2>

		<table>
			<tr>
				<th>Step</th>
				<th>Mix</th>
				<th>Pfx</th>
				<th>Mux</th>
				<th>Dip</th>
				<th>Flux P</th>
			</tr>

			<?php for (i=0; i<6; i++) { ?>


			<tr>
				<td><input class='flat' name='foo' value='<?php echo rand(); ?>'></td>
				<td><input class='flat' name='bar' value='<?php echo rand(); ?>'></td>
				<td><input class='flat' name='baz' value='<?php echo rand(); ?>'></td>
				<td><input class='flat' name='bin' value='<?php echo rand(); ?>'></td>
				<td><input class='flat' name='bom' value='<?php echo rand(); ?>'></td>
				<td><input class='flat' name='bam' value='<?php echo rand(); ?>'></td>
			</tr>
			
			<?php } ?>

		</table>



	</body>
</html>



