<!-- <div class="jumbotron bigger" style="background: url(<?php echo base_url() ?>template/assets/image/bg-people.jpg) no-repeat center center;"> -->
<div class="jumbotron bigger" style="background: url(http://unsplash.it/1280/800?random&blur) no-repeat center center;">
	<div class="container">
		<h1>People</h1>
		<p class="lead">You can participate with us as young volunteer to share your spirit.</p>
		<hr>
	</div>
</div>

<div class="search-box search-people">
	<div class="container">
		<div class="form-group label-floating">
		  <label class="control-label" for="focusedInput1">Quick find people</label>
		  <input class="form-control twitter-typeahead" id="focusedInput1" type="text">
		</div>
	</div>
</div>

<div class="post">
	<div class="container">
		<div class="row infinite-container">
			<?php
			foreach($getAll as $row) { ?>
				<?php $this->load->view('pages/volunteer/posts', array('row' => $row)); ?>
			<?php } ?>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<?php echo $this->pagination->create_links(); ?>
			</div>
		</div>
	</div>
</div>

<div id="modal_target"></div>


<script src="<?php echo base_url() ?>template/assets/vendor/typeahead.js/dist/typeahead.bundle.min.js"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/waypoints/lib/shortcuts/infinite.min.js"></script>
<script>
var infinite = new Waypoint.Infinite({
    element: $('.infinite-container')[0],
    items: '.infinite-item',
    more: '.sparator a',
})

function throwModal(slug) {
    $.ajax({
        type    : 'POST', 
        url     : '<?php echo base_url(); ?>people/detail/'+slug,
        success : function(data){ 
           if(data) {
                $('#modal_target').html(data);
                $("#peopleModal").modal();
           }
        },
        error: function(r) {
        	console.log(r);
        }
    });
}

	

// Instantiate the Bloodhound suggestion engine
var knowledge = new Bloodhound({
    datumTokenizer: function (datum) {
        return Bloodhound.tokenizers.whitespace(datum.value);
    },
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    remote: {
        url: '<?php echo base_url() ?>api/people/%QUERY',
        wildcard: '%QUERY',
    },
});

// Initialize the Bloodhound suggestion engine
knowledge.initialize();


// Instantiate the Typeahead UI
$(".twitter-typeahead").typeahead(null, {
    source: knowledge.ttAdapter(),
    displayKey: function(data) {
        return data.nama
    },
   templates: {
        suggestion: function(data) {
            return "<div class=tt-data><a  onclick=throwModal('"+data.slug+"') class='text-left' href='javascript:void(0);'><div class='tt-row'>"+data.nama+"</div></a><";
        },
        empty: [
          '<div class="empty-message">',
          'Tidak ada hasil dari pencarian...',
          '</div>'
        ].join('\n'),
    }
})
.on('typeahead:asyncrequest', function() {
	$(".tt-menu").addClass("tt-people");
 	$(".tt-menu").addClass("tt-prog").show()
 	.css({"background":"white"})
 	.find(".tt-dataset")
 	.append('<p class="text-muted text-center lead"><i class="fa fa-spinner fa-spin"></i> Sedang mencari data...</p>');
})
.on('typeahead:asyncreceive', function() {
	$(".tt-menu").removeClass("tt-prog");
});
</script>