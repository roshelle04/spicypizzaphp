<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Products';
    $product_page = 'active';
    require_once('../include/head.php');
?>
<body>
    <?php
        require_once('../include/header.admin.php')
    ?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <?php
                    require_once('../include/sidepanel.php')
                ?>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <h2 class="h3 brand-color pt-3 pb-2">Products</h2>
                    <div class="table-responsive overflow-hidden">
                        <div class="row g-2 mb-2 m-0">
                            <div id="MyButtons" class="d-flex mb-md-2 mb-lg-0 col-12 col-md-auto"></div>
                            <div class="form-group col-12 col-sm-auto flex-sm-grow-1 flex-lg-grow-0 ms-lg-auto">
                                <select name="food-category" id="food-category" class="form-select me-md-2">
                                    <option value="">All Category</option>
                                    <option value="Pizza">Pizza</option>
                                    <option value="Beverage">Beverage</option>
                                </select>
                            </div>
                            <div class="form-group col-12 col-sm-auto flex-sm-grow-1 flex-lg-grow-0">
                                <select name="food-availability" id="food-availability" class="form-select me-md-2">
                                    <option value="">All Availability</option>
                                    <option value="In Stock">In Stock</option>
                                    <option value="Out of Stock">Out of Stock</option>
                                </select>
                            </div>
                            <div class="search-keyword col-12 flex-lg-grow-0 d-flex">
                                <div class="input-group">
                                    <input type="text" name="keyword" id="keyword" placeholder="Search Product" class="form-control">
                                    <button class="btn btn-outline-secondary brand-bg-color" type="button"><i class="fa fa-search color-white" aria-hidden="true"></i></button>
                                </div>
                                <button class="btn btn-outline-secondary btn-add" type="button" data-bs-toggle="modal" data-bs-target="#addProductModal"><i class="fa fa-plus brand-color" aria-hidden="true"></i></button>
                            </div>
                        </div>
                        <div id="table-container">
                        <table id="product" class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Pizza Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Availability</th>
                                    <th scope="col" width="5%">Action</th>
                                </tr>
                            </thead>

                            <tbody id="productTableBody">
                            </tbody>
                        </table>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </main>
        <!-- Modal -->
        <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="">
                        <div class="mb-2">
                            <label for="pizzaname" class="form-label">Pizza Name</label>
                            <input type="text" class="form-control" id="pizzaname" name="pizzaname" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="category" class="form-label">Category</label>
                            <select name="category" id="category" class="form-select">
                                <option value="">Select Category</option>
                                <option value="Pizza">Pizza</option>
                                <option value="Beverage">Beverage</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="availability" class="form-label">Availability</label>
                            <select name="availability" id="availability" class="form-select">
                                <option value="">Select Availability</option>
                                <option value="In Stock">In Stock</option>
                                <option value="Out of Stock">Out of Stock</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2 brand-bg-color" id="addProductButton">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        require_once('../include/js.php')
    ?>
    <script src="../js/products copy.js"></script>
</body>
</html>