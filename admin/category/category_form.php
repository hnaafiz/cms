<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="?module=category&action=category_list" class="btn btn-sm btn-outline-primary">Back to  categories</a>

            </div>

        </div>
    </div>

    <div class="table-responsive">
        <form method="post">



            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input required type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="sports">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>

        <?php
            if(isset($_POST['name'])){
                $name = $_POST['name'];


                $sql = "INSERT INTO category (name)
                VALUES ('".$name."')";
                $result = $conn->query($sql);
                header("Location: ".$base_url."/admin?module=category&action=category_list");
            }
        ?>

    </div>
</main>