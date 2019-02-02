<?php 
require_once __DIR__.'/core/Auth.php';

if((new Auth)->isGuest()){
	header('Location:login_form.php');
	return;
}

require_once __DIR__.'/views/common/header.php';
 
?>
<div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">A Bootstrap 4 Starter Template</h1>
        <p class="lead">Complete with pre-defined file paths and responsive navigation!</p>
        <ul class="list-unstyled">
          <li>Bootstrap 4.2.1</li>
          <li>jQuery 3.3.1</li>
        </ul>
      </div>
    </div>

    

<?php require_once __DIR__.'/views/common/footer.php'; ?>