

  <!-- Begin Page Content -->
  <div class="container-fluid">
	<div style="margin-top:50px;margin-bottom:70px;" class="">
		<h1 style="font-weight:600">MITRA</h1>
	</div>
		<div class="row">
			<?php 
				$data=$this->m_dah->get_data('mitra')->result();
				foreach($data as $dt){
			?>
			<div class="col-lg-3 col-md-4 col-12">
				 <div style="border:1px solid #000; padding:10px 15px">
					<span style="text-align:center"> <h5><?php echo $dt->nama?></h5></span> <br>
					<span>Alamat :<?php echo $dt->alamat?></span><br>
					<span>No Hp/Telp :<?php echo $dt->no_hp?></span>
				 </div>
			</div>
			

			<?php } ?>
		</div>
	

		<div style="margin-top:50px;margin-bottom:70px;" class="">
			<h1 style="font-weight:600">Site Map</h1>
			<div class="mapouter"><div class="gmap_canvas"><iframe width="1080" height="521" id="gmap_canvas" src="https://maps.google.com/maps?q=Indah%20Logistik%20Cargo%20Binjai&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/">divi discount</a><br><style>.mapouter{position:relative;text-align:right;height:521px;width:1080px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:521px;width:1080px;}</style></div></div>
		</div>
  </div>
  <!-- /.container-fluid -->
