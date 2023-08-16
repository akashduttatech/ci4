<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> :: CI4</title>
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container p-5">
        <div class="card text-dark bg-light mb-3">
            <div class="card-header">Add user</div>
            <div class="card-body">
                <form action="<?php echo base_url(); ?>add" method="post" accept-charset="utf-8">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name') ?>"
                            placeholder="your name">
                        <label for="floatingInput">Name</label>
                        <?php if (isset($validation) && $validation->hasError('name')) { ?>
                        <small class="text-danger"><?= $validation->getError('name'); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email"
                            value="<?= set_value('email') ?>" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                        <?php if (isset($validation) && $validation->hasError('email')) { ?>
                        <small class="text-danger"><?= $validation->getError('email'); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="age" name="age" value="<?= set_value('age') ?>"
                            placeholder="35" min="0" max="99">
                        <label for="floatingInput">Age</label>
                        <?php if (isset($validation) && $validation->hasError('age')) { ?>
                        <small class="text-danger"><?= $validation->getError('age'); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="number" name="number"
                            value="<?= set_value('number') ?>" placeholder="9998887776" pattern="[0-9]{10}">
                        <label for="floatingInput">Number</label>
                        <?php if (isset($validation) && $validation->hasError('number')) { ?>
                        <small class="text-danger"><?= $validation->getError('number'); ?></small>
                        <?php } ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>

    <!-- bootstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>