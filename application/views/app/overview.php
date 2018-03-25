<div class="container mt-4">
    <a class="btn btn-primary mb-3" href="<?= base_url("app/create"); ?>">Create new employee</a>


    <div class="card">
        <div class="card-body">
            <pre><?php echo serialize($employees) ?></pre>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Hire date</th>
                    <th scope="col">Department</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($employees as $employee): ?>
                    <tr>
                        <th scope="row"><?= $employee->id ?></th>
                        <td><?= $employee->first_name ?></td>
                        <td><?= $employee->last_name ?></td>
                        <td><?= $employee->salary ?></td>
                        <td><?= $employee->hire_date ?></td>
                        <td><?= $employee->department ?></td>
                        <td><a href="<?= base_url("app/delete/$employee->id") ?>"><i class="fas fa-trash"></i></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

