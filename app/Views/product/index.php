<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
    <h1>Product List</h1>

    <div class="clearfix"></div>

    <?php
    if (count($products) > 0) { ?>
        <table class="table table-sm table-bordered table-hover">
            <thead>
                <th>SKU</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Description</th>
                <th>Actions</th>
            </thead>

            <tbody>
                <?php foreach ($products as $product) { ?>
                    <tr>
                        <td>
                            <?= $product['sku'] ?>
                        </td>
                        <td>
                            <?= $product['name'] ?>
                        </td>
                        <td>
                            <?= $product['price'] ?>
                        </td>
                        <td>
                            <img width="100" class="img-thumbnail" src="<?= base_url('products/'.$product['img']) ?>" alt="">
                        </td>
                        <td>
                            <?= $product['description'] ?>
                        </td>
                        <td>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="<?= site_url('product/'.$product['id'].'/edit') ?>" class="btn btn-sm btn-primary">
                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <form action="<?= site_url('product/'.$product['id']) ?>" method="delete">
                                        <?= csrf_field() ?>

                                        <button class="btn btn-sm btn-danger" type="submit">
                                            Delete
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <div class="alert alert-danger" role="alert">
            No product found
        </div>
    <?php } ?>

<?= $this->endSection() ?>