<?php
include ('header.php');
?>



<!-- Main Content -->
<div class="adminx-content">
    <div class="adminx-main-content">
        <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb adminx-page-breadcrumb">
                    <li class="breadcrumb-item"><a href="../admin">Home</a></li>
                    <li class="breadcrumb-item"><a href="front_header_add">Front Header</a></li>
                </ol>
            </nav>

            <div class="pb-3">
                <h2>Add Front Header</h2>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-grid">

                        <div class="card-body collapse show" id="card1">
                            <form action="front_insert.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                        <label class="form-label" for="address">Address</label>
                        <input type="address"  name="address"  class="form-control"  placeholder="Enter address">
                      </div>
                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" name="email" class="form-control" aria-describedby="email"
                                        placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="contactno">Contact Number</label>
                                    <input type="number" name="contactno" class="form-control"
                                        aria-describedby="contactno" placeholder="Enter contact number">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="contactinfo">Another Contact</label>
                                    <input type="number" name="contactinfo" class="form-control"
                                        aria-describedby="contactinfo" placeholder="Enter another contact number">
                                </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- // Main Content -->
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<script src="../dist/js/vendor.js"></script>
<script src="../dist/js/adminx.js"></script>

<script>
(function() {
    'use strict';
    window.addEventListener('load', function() {
        var form = document.getElementById('needs-validation');
        if (form !== null) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        }
    }, false);
})();
</script>
</body>

</html>