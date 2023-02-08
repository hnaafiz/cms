<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="?module=users&action=users_list" class="btn btn-sm btn-outline-primary">Back to  Users</a>

            </div>

        </div>
    </div>

    <div class="table-responsive">
        <form method="post">



            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                <input required type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Adam Waheed">
            </div>


            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input required type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input required type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="...ihate!@#!@#Cat">
            </div>



            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Role</label>
                <select required name="role" class="form-control" id="exampleFormControlInput1" >
                    <option>Admin</option>
                    <option>Writer</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>

        <?php
            if(isset($_POST['name'])){

                $email = $_POST['email'];
                $password = md5($_POST['password']);
                $role = $_POST['role'];
                $name = $_POST['name'];

                $sql = "INSERT INTO users (email, password, role,name)
                VALUES ('".$email."', '".$password."',  '".$role."', '".$name."')";
                $result = $conn->query($sql);
                header("Location: ".$base_url."/admin?module=users&action=users_list");
            }
        ?>

    </div>
</main>