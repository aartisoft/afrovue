<?php $this->load->view('templates/citiesdirectory/header');?>

<?php 
	if($edit_mode){
		$data['mode'] = $edit_mode;
		//echo " >>>here " . $edit_mode;
		$this->load->view('templates/citiesdirectory/nav',$data);
	} else {
		$this->load->view('templates/citiesdirectory/nav');
	}

?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar teamps-sidebar-open">
			<?php
				if($sidebar){
					$this->load->view('templates/citiesdirectory/sidebar');
				}
			?>
		</div>
		<div class="col-sm-9 col-sm-offset-3 col-md-offset-2 main teamps-sidebar-push col-md-10">
		
		<?php echo $content["content"];?>
		
		</div>
	</div>
</div>

<?php $this->load->view('templates/citiesdirectory/footer');?>