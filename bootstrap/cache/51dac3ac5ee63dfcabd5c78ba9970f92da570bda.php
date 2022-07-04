<h1>Admin dashboard</h1>
<form action="/ecommerce/admin" method="post" enctype="multipart/form-data">
    <input type="text" name="product" value="testing">
    <input type="file" name="image">
    <input type="submit" value="Go" name="submit">
</form>

<?php echo e(\App\Classes\Request::all()); ?><?php /**PATH C:\walexbizhost\htdocs\ecommerce\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>