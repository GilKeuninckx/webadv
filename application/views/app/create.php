<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <form method="post" action="<?= base_url("app/store") ?>">
                <div class="form-group">
                    <label for="first_name">First name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name">
                </div>
                <div class="form-group">
                    <label for="first_name">Salary</label>
                    <input type="number" class="form-control" id="salary" name="salary" placeholder="Enter salary" step="0.01">
                </div>
                <div class="form-group">
                    <label for="hire_date">Hire date</label>
                    <input type="date" class="form-control" id="hire_date" name="hire_date" placeholder="Enter first name">
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" class="form-control" id="department" name="department" placeholder="Enter department">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>