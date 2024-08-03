<h2 class="text-center mt-5 mb-3"><?php echo $title; ?></h2>
<div class="card">
    <div class="card-header">
        <a class="btn btn-outline-primary" href="<?php echo base_url('project/create/'); ?>">
            Ավելացնել նոր աշակերտ </a>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php } ?>

        <table class="table table-bordered">
            <tr>
                <th>Դպրոց</th>
                <th>Անուն</th>
                <th>Դասրան</th>
                <th>Առաջին կիսամյակի գնահատական </th>
                <th>Երկրորդ կիսամյակի գնահատական</th>
                <th>Տարեկան գնահատական</th>
                <th width="240px">Action</th>
            </tr>

            <?php foreach ($projects as $project) { ?>
                <tr>
                    <td><?php echo $project->school_name; ?></td>
                    <td><?php echo $project->student_name; ?></td>
                    <td><?php echo $project->classroom; ?></td>
                    <td><?php echo $project->firstYearNumber; ?></td>
                    <td><?php echo $project->secondYearNumber; ?></td>
                    <td><?php echo $project->yearNumber; ?></td>
                    <td>
                        <a class="btn btn-outline-info" href="<?php echo base_url('project/show/' . $project->id) ?>">
                            Դիտել
                        </a>
                        <a class="btn btn-outline-success" href="<?php echo base_url('project/edit/' . $project->id) ?>">
                            Փոփոխել
                        </a>
                        <a class="btn btn-outline-danger" href="<?php echo base_url('project/delete/' . $project->id) ?>">
                            Ջնջել
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <p><?php echo $links; ?></p>
    </div>
</div>