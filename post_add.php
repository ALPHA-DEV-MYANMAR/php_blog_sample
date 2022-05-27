<?php require_once "core/auth.php"; ?>
<?php include "template/header.php"; ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Post</li>
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
                        <i class="feather-plus-circle text-primary"></i> Add Post
                    </h4>
                    <a href="<?php echo $url; ?>/post_list.php" class="btn btn-outline-primary">
                        <i class="feather-list"></i>
                    </a>
                </div>
                <hr>
                <?php
                    if(isset($_POST['addPost'])){
                        postAdd();
                    }
                ?>
                <form method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="title" placeholder="title" required>
                    </div>
                    <div class="input-group mt-3">
                        <textarea name="description" id="" cols="30" rows="5"  class="form-control" placeholder="description" required></textarea>
                    </div>
                    <div class="input-group mt-3">
                        <select name="category_id" id="" class="form-control">
                            <?php foreach (categories() as $c){ ?>
                                <option value="<?php echo $c['id'] ?>"><?php echo $c['title'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="input-group mt-3">
                        <button class="btn btn-primary" name='addPost'>submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "template/footer.php"; ?>