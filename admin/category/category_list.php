<?php

$sql = "SELECT * from category";
$result = mysqli_query($conn, $sql);

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="?module=category&action=category_form" class="btn btn-sm btn-outline-primary">Add category</a>

            </div>

        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if (mysqli_num_rows($result)) { ?>

                <?php
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td>
                            <a href="" class="m-3 text-success">edit</a> 
                            <a href="" class="m-3 text-danger">delete</a>
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