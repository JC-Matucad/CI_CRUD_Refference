<?php $this->load->view('includes/header'); ?>

        <div class="container mt-5">
            <div class="row">
                <div class="card">
                <div class="card-header text-center">
                    Add Employee
                </div>
                <div class="card-body">
                    <form method="post" action="<?=base_url()?>user/add">
                        <div class="mb-3">
                            <label for="EmployeeName" class="form-label te">Employee Name</label>
                            <input type="text" class="form-control" id="inputname" name="inputname">
                        </div>

                        <div class="mb-3">
                            <label for="Age" class="form-label">Age</label>
                            <input type="number" class="form-control" id="inputage" name="inputage" >
                        </div>
                        
                        <div class="mb-3">
                            <label for="Datehired" class="form-label">Date hired</label>
                            <input type="date" class="form-control" id="inputDatehired" name="inputDatehired">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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