<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="?module=post&action=post_list" class="btn btn-sm btn-outline-primary">Back to posts</a>

            </div>

        </div>
    </div>

    <div class="table-responsive">
        <form method="post">



            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input required type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="title">
            </div>


            <div class="form-floating">
                <textarea class="form-control" placeholder="body" name="body" id="body"></textarea>
                <label for="body"> Body</label>
            </div>

           


            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">type</label>
                <select required name="type" class="form-control"  id="exampleFormControlInput1">
                    <option>type 1</option>
                    <option>type 2</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>

        <?php
        if (isset($_POST['name'])) {

            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $role = $_POST['role'];
            $name = $_POST['name'];

            $sql = "INSERT INTO users (email, password, role,name)
                VALUES ('" . $email . "', '" . $password . "',  '" . $role . "', '" . $name . "')";
            $result = $conn->query($sql);
            header("Location: " . $base_url . "/admin?module=users&action=users_list");
        }
        ?>

    </div>
</main>