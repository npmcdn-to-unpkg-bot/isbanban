<!-- <div class="jumbotron bigger" style="background: url(<?php echo base_url() ?>template/assets/image/bg-people.jpg) no-repeat center center;"> -->
<div class="jumbotron bigger" style="background: url(http://unsplash.it/1280/800?random&blur) no-repeat center center;">
	<div class="container">
		<h1>People</h1>
		<p class="lead">You can participate with us as young volunteer to share your spirit.</p>
		<hr>
	</div>
</div>


<div class="search-box people">
	<div class="container">
		<div class="row">
			<div class="form-group label-floating">
			  <label class="control-label" for="focusedInput1">Quick find your people</label>
			  <input class="form-control twitter-typeahead" id="focusedInput1" type="text">
			</div>
		</div>
	</div>
</div>

<div class="post">
	<div class="container">
		<div class="row infinite-container">
			<?php
			foreach($getAll as $row) { ?>
			<a class="infinite-item" href="javascript:void(0);" onclick="throwModal('<?php echo $row->slug; ?>');">
			<div class="col-sm-3">
				<div class="people">
					<?php if($row->path_foto) { ?>
						<img class="img-responsive" src="<?php echo base_url() ?><?php echo $row->path_foto; ?>">
					<?php } else { ?>
						<img class="img-responsive" src="<?php echo base_url() ?>/template/assets/image/placeholder.png">
					<?php } ?>

					<div class="caption">
						<h4 class="name"><?php echo $row->nama; ?></h4>
					</div>
				</div>
			</div>
			</a>
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


<style>
.twitter-typeahead {
	width:100%; border-radius: 80px
}
.tt-menu {
	width:100%;
	background-color:white;
}
.tt-row {
	padding:10px;
	border-bottom:1px solid #ccc;
}
.Typeahead-spinner {
	position: absolute;
	top: 9px;
	right: 24px;
	display: none;
	width: 28px;
	height: 28px;
}
</style>

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
            return "<div class=tt-data tt-people><a  onclick=throwModal('"+data.slug+"') class='text-left' href='javascript:void(0);'><div class='tt-row'>"+data.nama+"</div></a><";
        },
        empty: [
          '<div class="empty-message">',
          'Tidak ada hasil dari pencarian...',
          '</div>'
        ].join('\n'),
    }
})
.on('typeahead:asyncrequest', function() {
	
})
.on('typeahead:asynccancel typeahead:asyncreceive', function() {
	// $(".tt-menu").addClass('tt-custom').show();
	// $(".tt-custom").text("Sedang Mencari...");
});
</script>