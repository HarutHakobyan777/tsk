<h2 class="text-center mt-5 mb-3"><?php echo $title;?></h2>
<div class="card">
    <div class="card-header">
        <a class="btn btn-outline-info float-right" href="<?php echo base_url('project/');?>"> 
        Դիտել բոլորի տվյալները        </a>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('errors')) {?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('errors'); ?>
            </div>
        <?php } ?>
 
        <form action="<?php echo base_url('project/update/' . $project->id);?>" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="school_name">Դպրոց</label>
                <input
                    type="text"
                    class="form-control"
                    id="school_name"
                    name="school_name"
                    value="<?php echo $project->school_name;?>">
            </div>
            <div class="form-group">
                <label for="student_name">Աշակերտի անուն </label>
                <input
                    class="form-control"
                    id="student_name"
                    name="student_name"
                    value="<?php echo $project->student_name;?>">
            </div>
            <div class="form-group">
                <label for="classroom">Դասարան</label>
                <input
                    type="text"
                    class="form-control"
                    id="classroom"
                    name="classroom"
                    value="<?php echo $project->classroom;?>">
            </div>
            <div class="form-group">
                <label for="firstYearNumber">Առաջին կիսամյակի գնահաական</label>
                <input
                    class="form-control"
                    id="firstYearNumber"
                    name="firstYearNumber"
                    value="<?php echo $project->firstYearNumber;?>">
            </div>
            <div class="form-group">
                <label for="secondYearNumber">Երկրորդ կիսամյակի գնահաական</label>
                <input
                    type="text"
                    class="form-control"
                    id="secondYearNumber"
                    name="secondYearNumber"
                    value="<?php echo $project->secondYearNumber;?>">
            </div>
            <div class="form-group">
                <label for="yearNumber">Տարեկան գնահատական</label>
                <input
                    class="form-control"
                    id="yearNumber"
                    name="yearNumber"
                    value="<?php echo $project->yearNumber;?>">
            </div>
          
            <button type="submit" class="btn btn-outline-primary">Փոփոխել</button>
        </form>
       
    </div>
</div>