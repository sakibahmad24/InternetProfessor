<div class="row">

	<div class="col-md-3">

	</div>

	<div class="col-md-6" height>

		<div class="container">
				<h1>
                   <?php if($this->session->flashdata('conf'))
                   {
                   	 echo $this->session->flashdata('conf');
				   }
				   else{ ?>
					 <p> &nbsp;</p>
					<?php } ?>
			<?php //var_dump($courses); die; ?>
		</div>
	</div>

	<div class="col-md-3">

	</div>
</div>
<div class="row">

	

	<div class="col-md-12">
		
                   <?php if($this->session->flashdata('conf'))
                   {?>
                   	
                   	
                   	
                   	<div class="alert alert-success">
						  <strong><?php  echo $this -> session -> flashdata('conf'); ?></strong>
						</div>
                   	
				<?php   }
						else{
 ?>
					 <p> &nbsp;</p>
					<?php } ?>
		<div class="panel panel-default">

			<div class="panel-heading">
				<h4><i class="fa fa-fw fa-gift"></i> Add new course</h4>
			</div>
			<div class="panel-body">
				<?php if($_SESSION['user_type']==1){?>
				
				<form method="POST" action="<?php echo site_url('courses/addCourseByTeacher')?>">
					<input type="text" placeholder="Course Code (e.g CSE115)" class="form-control" name="courseName" />
					<br />
					<input type="text" placeholder="Course Title (e.g Programming Language I)" class="form-control" name="courseTitle" />
					<br />
					<input type="text" placeholder="Course Description" class="form-control" name="courseDescription" />
					<br />
					<input type="submit"  name="submit" value=" ADD " class="btn btn-success" />

				</form>
				<?php }else{ ?>
				<form method="POST" action="<?php echo site_url('student/addCourseByStudent')?>">
					<input type="text" placeholder="Course activation code (e.g xxxxxx)" class="form-control" name="courseCode" />
					<br />
					<input type="submit"  name="submit" value=" ADD " class="btn btn-success" />

				</form>
				<?php } ?>
			</div>
		</div>
	</div>

	<div class="col-md-3">

	</div>
</div>

<div class="row">


	<div class="col-lg-1">
	</div>
	<div class="col-lg-10">
	
			<div class="col-lg-12">
				<h2 class="page-header">Courses:</h2>
			</div>
			
			
			
			
			<?php 
			
			if($courses != null){
					foreach ($courses as $key => $value) {?>
						
					
				
							<div class="col-md-3 col-sm-6">
								<div class="panel panel-default text-center">
									<div class="panel-heading">
										<span class="fa-stack fa-4x"> <i class="fa fa-circle fa-stack-2x text-primary"></i> <i class="fa fa-book fa-stack-1x fa-inverse"></i> </span>
									</div>
									<div class="panel-body">
										<h4><?php echo $value->course_name?></h4>
										<h5><b><?php echo $value->course_title?></b></h5>
										
										<h5><b><?php if($_SESSION['user_type'] == 1 ) echo"Activation Code : ". $value->activation_code?></b></h5>
										
										
										
										<p>
											<?php echo $value->description?>
										</p>
										<a href="<?php echo site_url('Thread/course_thread/'.$value->id.'/'.urlencode($value->course_name))?>" class="btn btn-primary">Enter</a>
									</div>
								</div>
							</div>
					<?php }} else{ ?>
						
						<div class="alert alert-warning">
						  <strong>Oops!</strong> No Courses are instructed by you!!
						</div>
						
						
		<?php			} ?>
				</div>
			</div>
	
	<div class="col-lg-1">
	</div>
