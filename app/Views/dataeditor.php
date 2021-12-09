<html>
<!--
/**
 * Library for Editor Datatables
 * Created by   : Wiendy Kusuma
 * Link         : https://github.com/wiendy/trackdt
 *
 * Library Name : TrackDT
 * Created Date : Dec 1, 2021
 * Email        : wiendy@opsi.biz
 * Tested       : Editor Datatable 1.9.4, 1.9.6
 *              : Codigniter 4.1.5
 *              : PHP 7.3.33
 *
 * If you feel happy with this Library you can donate via paypal wiendy@opsi.biz, thank you
 */


 -->
	<head>
		<title>Data</title>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.1/css/dataTables.dateTime.min.css">
		<link rel="stylesheet" href="<?= '/libraries/editor/css/editor.dataTables.min.css'; ?>">
	</head>

	<body>
		<h1>Editor Datatable</h1>

		<table id="example" class="display" style="width:100%">
			<thead>
				<tr>
					<th>ID</th>
					<th>Number</th>
					<th>Name</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>ID</th>
					<th>Number</th>
					<th>Name</th>
				</tr>
			</tfoot>
		</table>

		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
		<script src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>
		<script src="<?= '/libraries/editor/js/dataTables.editor.min.js'; ?>"></script

		<script src="https://cdn.datatables.net/colreorder/1.5.4/js/dataTables.colReorder.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>



		<script>


		var editor; // use a global for the submit and return data rendering in the examples

		$(document).ready(function() {

			/**
			 * This Section handle form create and edit
			 */
			editor = new $.fn.dataTable.Editor( {
				ajax: { 
					url: "<?= site_url('/dataeditor/ajax'); ?>",
					type : "POST"
				},
				table: "#example",
				fields: [
					{
						label: "Number:",
						name: "number"
					},
					{
						label: "Name:",
						name: "name"
					}
				]
			} );

			//Activate an inline edit on click of a table cell
			$('#example').on( 'click', 'tbody td:not(:first-child)', function (e) {
				editor.inline( this );
			} );

			/**
			 * This Section handle table view 
			 */
			// Handle table view
			$('#example').DataTable( {
				dom: "Bfrtip",
				ajax: { 
					url: "<?= site_url('/dataeditor/ajax'); ?>",
					type : "POST"
				},
				serverSide: true,
				select: {
					style:    'os',
					selector: 'td:first-child'
				},
				order: [[ 1, 'asc' ]],

				columns: [
					{ 
						data: null,
						defaultContent: '',
						className: 'select-checkbox',
						orderable: false,
						searchable: false
					},
					{ data: "number" },
					{ data: "name" }
				],
				select: true,
				buttons: [
					{ extend: "create", editor: editor },
					{ extend: "edit",   editor: editor },
					{ extend: "remove", editor: editor },
					{
						extend: 'collection',
						text: 'Export',
						buttons: [
							'copy',
							'excel',
							'csv',
							'pdf',
							'print'
						]
					}
				]
			} );	// End datatable
		} );	// End document.(ready)

		</script>

	</body>

<!--
/**
 * End of file dataeditor.php
 * Location: app/Views/dataeditor.php
 * https://github.com/wiendy/trackdt
 */
-->

</html>

