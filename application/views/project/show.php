
<h2 class="text-center mt-5 mb-3"><?php echo $title;?></h2>
<div class="card">
    <div class="card-header">
        <a class="btn btn-outline-info float-right" href="<?php echo base_url('project/');?>"> 
        Դիտել բոլորի տվյալները        </a>
    </div>
    <div class="card-body">
       <b class="text-muted">Դպրոց:</b>
       <p><?php echo $project->school_name;?></p>
       <b class="text-muted">Աշակերտի անուն:</b>
       <p><?php echo $project->student_name;?></p>
       <b class="text-muted">Դասարան։</b>
       <p><?php echo $project->classroom;?></p>
       <b class="text-muted">Առաջին կիսամյակի գնահատական:</b>
       <p><?php echo $project->firstYearNumber;?></p>
       <b class="text-muted">Երկրորդ կիսամյակի գնահատական:</b>
       <p><?php echo $project->secondYearNumber;?></p>
       <b class="text-muted">Տարեկան գնահատական:</b>
       <p><?php echo $project->yearNumber;?></p>
    </div>
</div>