<?php $this->load->view('includes/header'); ?>

        <div class="container mt-5">
            <div class="row">
                <div class="card">
                <div class="card-header text-center">
                    Employee List
                </div>
                <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Employee ID</th>
                            <th>Employee Name</th>
                            <th>Employee Age</th>
                            <th>Employee Date Hired</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($tbl_employee_data as $row){ ?>
                        <tr>
                            <td> <?=$row['employee_id']?></td>
                            <td> <?=$row['employee_name']?></td>
                            <td> <?=$row['employee_age']?></td>
                            <td> <?=$row['employee_datehired']?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
                </div>
                <div class="card-footer text-muted">
                    notification here
                </div>
            </div>
            </div>
        </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>