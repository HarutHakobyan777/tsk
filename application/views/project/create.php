
<h2 class="text-center mt-5 mb-3"><?php echo $title; ?></h2>
<div class="card">
    <div class="card-header">
        <a class="btn btn-outline-info float-right" href="<?php echo base_url('project');?>"> 
            Դիտել բոլորի տվյալները
        </a>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('errors')) {?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('errors'); ?>
            </div>
        <?php } ?>
        <form action="<?php echo base_url('project/store');?>" method="POST">
            <div class="form-group">
                <label for="school_name">Դպրոց</label>
                <input type="text" class="form-control" id="school_name" name="school_name">
            </div>
            <div class="form-group">
                <label for="student_name">Աշակերտի Անուն</label>
                <input type="text" class="form-control" name="student_name" id="student_name"></input>
            </div>
            <div class="form-group">
                <label for="classroom">Դասարան</label>
                <input type="text" class="form-control" name="classroom" id="classroom"></input>
            </div>
            <div class="form-group">
                <label for="firstYearNumber">Առաջին կիսամյակի գնահատական</label>
                <input type="text" class="form-control" name="firstYearNumber" id="firstYearNumber"></input>
            </div>
            <div class="form-group">
                <label for="secondYearNumber">Երկրորդ կիսամյակի գնահատական</label>
                <input type="text" class="form-control" name="secondYearNumber" id="secondYearNumber"></input>
            </div>
            <div class="form-group">
                <label for="yearNumber">Տարեկան գնահատական</label>
                <input type="text" class="form-control" name="yearNumber" id="yearNumber"></input>
            </div>
          
            <button type="submit" class="btn btn-outline-primary">Ավելացնել Աշակերտին</button>
        </form>
       
    </div>
</div>