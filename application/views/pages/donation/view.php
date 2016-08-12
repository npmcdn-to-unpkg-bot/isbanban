<div class="container">
	<div class="page-header">
		<div class="h1">Donator List</div>
	</div>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama</th>
				<th>Donation</th>
				<th>Date</th>
				<!-- <th>Message</th> -->
			</tr>
		</thead>

		<tbody id="contentHtml">
		</tbody>
	</table>

	<button class="btn btn-primary btn-raised" onclick="window.print();">
		<i class="fa fa-file-pdf-o"></i>
		Download PDF
	</button>
</div>


<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
$(document).ready(function(){
	showData();
});

function showData() {
	$.ajax({
		url: '<?php echo base_url() ?>donate/get/confirmed',
		type: 'get',
		dataType: 'json',
		success: function(data) {
			var elements = $();
			// console.log(data);
			for(var i =0; i < data.length; i++) {
				elements = elements.add("<tr><td>"+i+"</td><td>"+data[i].nama+"</td><td>"+data[i].donasi_banyak+"</td><td>"+data[i].created_at+"</td></tr>");
			}

			$("#contentHtml").html(elements)
		}
	});
}
setInterval(function() {
	showData();
}, 1000 * 60 * 0.5);
</script>