<h1>Admin dashboard</h1>
<?php echo \App\classes\CSRFToken::_token(); ?>

<br/>
<?php echo \App\classes\Session::get('token'); ?>

<?php echo \App\classes\Redirect::back(); ?>

<?php echo $_SERVER['REQUEST_URI']; ?><?php /**PATH C:\walexbizhost\htdocs\ecommerce\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>