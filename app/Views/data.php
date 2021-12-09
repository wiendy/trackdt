<html>
<!--
/**
 * Library for Datatables
 * Created by   : Wiendy Kusuma
 * Link         : https://github.com/wiendy/trackdt
 *
 * Library Name : TrackDT
 * Created Date : Dec 8, 2021
 * Email        : wiendy@opsi.biz
 * Tested       : Datatable 1.11.3
 *              : Codigniter 4.1.5
 *              : PHP 7.3.33
 *
 * If you feel happy with this Library you can donate via paypal wiendy@opsi.biz, thank you
 */
-->
	<head>
		<title>Data</title>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
	</head>
	<body>
		<table id="data">
			<thead>
				<tr>
					<th>ID</th>
					<th>Number</th>
					<th>Name</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</body>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#data').DataTable({
				processing	: true,
				serverSide	: true,
				ajax: { 
					url: "<?= site_url('/data/ajax'); ?>",
					type : "POST"
				},
				columns		: [
					{	"data"		: "id" },
					{	"data"		: "number" },
					{	"data"		: "name"  },
				]
			});
		} );
	</script>

<!--
/**
 * End of file data.php
 * Location: app/Views/data.php
 * https://github.com/wiendy/trackdt
 */
-->

</html>
