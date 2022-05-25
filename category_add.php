<?php require_once  "core/auth.php" ?>
<?php include "template/header.php"; ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">category add</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-8">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="feather-plus-circle text-primary"></i> Category Manager
                    </h4>
                    <a href="<?php echo $url; ?>/item_list.php" class="btn btn-outline-primary">
                        <i class="feather-list"></i>
                    </a>
                </div>
                <hr>

                <?php

                    if(isset($_POST['addCat'])){
                        categoryAdd();
                    }

                ?>

                <form action="#" method="post">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <input type="text" name="title" class="form-control">
                            <button class="btn btn-primary" name="addCat">Add</button>
                        </div>
                    </div>
                </form>

                <?php include 'category_list.php'; ?>

            </div>
        </div>
    </div>
</div>

<?php include "template/footer.php"; ?>