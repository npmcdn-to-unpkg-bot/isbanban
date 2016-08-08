<div class="leftpanel sticky-leftpanel">
  <a href="<?php echo base_url() ?>admin/dashboard">
  <div class="logopanel" style="background: url('<?php echo base_url() ?>template/assets/image/typetext-black.png') no-repeat center center; background-size: 100px; background-color: white;  height: 50px;">
	  <!-- <h1><span>[</span> Isbanban <span>]</span></h1> -->
  </div><!-- logopanel -->
  </a>
	  
  <div class="leftpanelinner">      
	<h5 class="sidebartitle">Navigation</h5>
	<ul class="nav nav-pills nav-stacked nav-bracket">
	  <li <?php if($role == "dashboard") { echo "class=active"; } ?>>
		<a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a>
	  </li>

	  <li <?php if($role == "blog") { echo "class=active"; } ?>>
		<a href="<?php echo base_url() ?>admin/blog"><i class="fa fa-pencil"></i> <span>Blog</span></a>
	  </li>

	  <li <?php if($role == "event") { echo "class=active"; } ?>>
		<a href="<?php echo base_url() ?>admin/event"><i class="fa fa-calendar-o"></i> <span>Event</span></a>
	  </li>

	  <li <?php if($role == "volunteer") { echo "class=active"; } ?>>
		<a href="<?php echo base_url() ?>admin/volunteer"><i class="fa fa-users"></i> <span>Volunteer</span></a>
	  </li>

	  <li <?php if($role == "oprec") { echo "class=active"; } ?>>
		<a href="<?php echo base_url() ?>admin/volunteer/recruitment"><i class="fa fa-user"></i> <span>Recruitment 2016</span></a>
	  </li>

	  <li <?php if($role == "village") { echo "class=active"; } ?>>
		<a href="<?php echo base_url() ?>admin/village"><i class="fa fa-map-marker"></i> <span>Village</span></a>
	  </li>

	  <li <?php if($role == "feedback") { echo "class=active"; } ?>>
		<a href="<?php echo base_url() ?>admin/feedback"><i class="fa fa-comments"></i> <span>Feedback</span></a>
	  </li>

	  <li <?php if($role == "donation") { echo "class=active"; } ?>>
		<a href="<?php echo base_url() ?>admin/donation"><i class="fa fa-heart-o"></i> <span>Donation</span></a>
	  </li>

	  <li <?php if($role == "partners") { echo "class=active"; } ?>>
		<a href="<?php echo base_url() ?>admin/partners"><i class="fa fa-male"></i> <span>Partners</span></a>
	  </li>

	  <li>
		<a href="<?php echo base_url() ?>" target="_blank"><i class="fa fa-crosshairs"></i> <span>Preview Website</span></a>
	  </li>

	  <li>
		<a href="<?php echo base_url() ?>logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a>
	  </li>
	</ul>      
  </div><!-- leftpanelinner -->
</div><!-- leftpanel -->