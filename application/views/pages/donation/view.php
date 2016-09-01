<div class="container">
	<div class="alert alert-info">
		The list is based on today: <b><?php echo date('d-m-Y'); ?></b>
	</div>

	<div class="page-header">
		<div class="h1">Donator List</div>
	</div>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama</th>
				<th>Cash</th>
				<th>Donation at</th>
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



<style>
body {
	padding-top: 220px;
	padding-bottom: 50px;
}
#header {
	top: 0px;
	z-index: 2;
}
#content {
	position: static;
}
#footer {
	display:  none;
}
</style>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/autoNumeric/autoNumeric.js"></script>
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
				elements = elements.add("<tr><td>"+(i+1)+"</td><td>"+data[i].nama+"</td><td>Rp. <span class=moneyFormat>"+data[i].donasi_banyak+"</span></td><td>"+data[i].confirmed_at+"</td></tr>");
			}

			$("#contentHtml").html(elements);
			$(".moneyFormat").autoNumeric('init',{
			    aSep: '.',
			    dGroup: '3',
			    aDec: " ",
			    aPad: false,
			    vMin:'0' 
			});
		}
	});
}

setInterval(function() {
	showData();
}, 1000 * 60 * 0.5);
</script>