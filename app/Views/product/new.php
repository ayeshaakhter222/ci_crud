<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
    <h1>Add Product</h1>

    <div class="clearfix"></div>

    <form action="<?= site_url('product') ?>" method="post">

        <?= csrf_field(); ?>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name">
            </div>
            <div class="form-group col-md-6">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="price">
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="" for="file">Product Image</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="file" name="file">
                    <label class="custom-file-label" for="file">Product Image</label>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="description">Description</label>
                <textarea cols="30" rows="5" class="form-control" id="description" name="description" placeholder="description"></textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <button class="btn btn-success btn-sm" type="submit">Add Product</button>
            </div>
        </div>


    </form>

<?= $this->endSection() ?>