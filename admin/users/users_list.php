<?php

$sql = "SELECT * from users";
$result = mysqli_query($conn, $sql);

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="?module=users&action=users_form" class="btn btn-sm btn-outline-primary">Create Users</a>

            </div>

        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if (mysqli_num_rows($result)) { ?>

                <?php
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['userID']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['role']; ?></td>
                        <td>
                            <a href="?module=users&action=users_update"  class="m-3 text-success">edit</a> 
                            <a  href="?module=users&action=user_delete" class="m-3 text-danger">delete</a>
                        </td>
                      

                    </tr>

                <?php
                } ?>

            <?php
            } ?>
            </tbody>
        </table>
    </div>
</main>