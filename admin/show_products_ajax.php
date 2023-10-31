<?php
require_once '../classes/products.class.php';
require_once '../tools/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $products = new Products();

    // Fetch staff data (you should modify this to retrieve data from your database)
    $productsArray = $products->show();
    $counter = 1;
?>
<table id="products" class="table table-striped table-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Products Name</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Availability</th>
            <th scope="col" width="5%">Action</th>
        </tr>
    </thead>
    <tbody id="productsTableBody">
<?php
    if ($productsArray) {
        foreach ($staffArray as $item) {
?>
            <tr>
                <td><?= $counter ?></td>
                <td><?= $item['product'] ?></td>
                <td><?= $item['category'] ?></td>
                <td><?= $item['price'] ?></td>
                <td><?= $item['availability'] ?></td>
                <td class="text-center"><a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
            </tr>
<?php
            $counter++;
        }
    }
}
?>
    </tbody>
</table>
