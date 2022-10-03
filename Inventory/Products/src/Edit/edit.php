<div class="window edit-window">
    <div class="card">
        <div class="content card-body">
            <form action="../sql/edit.php" class="form d-flex flex-column justify-content-between" method="POST" style="height: 100%;">
                <input id="id" type="hidden" name="id" />
                <div>
                    <div class="row">
                        <div class="col my-3">
                            <label class="form-label">Product name</label>
                            <input id="edit-product" type="text" name="product_name" class="form-control" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col my-3">
                            <label class="form-label">Category</label>
                            <input id="edit-category" type="text" name="category" class="form-control" />
                        </div>
                        <div class="col my-3">
                            <label class="form-label">Units</label>
                            <input id="edit-units" type="text" name="units" class="form-control" />
                        </div>
                    </div>
                    <div class="my-3">
                        <label class="form-label">Precio del producto</label>
                        <input id="edit-unit-price" type="number" name="unit_price" class="form-control" />
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <a id="btn-edit-cancel" class="btn btn-danger">Exit</a>
                    <input type="submit" value="Save" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>
</div>