<!DOCTYPE html>

<html>

<head>

    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <?php echo \Livewire\Livewire::styles(); ?>


</head>

<body>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card">

                    <div class="card-header">

                        <h2>Laravel Livewire Crud</h2>

                    </div>

                    <div class="card-body">

                        <?php if(session()->has('message')): ?>

                            <div class="alert alert-success">

                                <?php echo e(session('message')); ?>


                            </div>

                        <?php endif; ?>

                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('users')->html();
} elseif ($_instance->childHasBeenRendered('kdZboYq')) {
    $componentId = $_instance->getRenderedChildComponentId('kdZboYq');
    $componentTag = $_instance->getRenderedChildComponentTagName('kdZboYq');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('kdZboYq');
} else {
    $response = \Livewire\Livewire::mount('users');
    $html = $response->html();
    $_instance->logRenderedChild('kdZboYq', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <?php echo \Livewire\Livewire::scripts(); ?>


    <script type="text/javascript">

        window.livewire.on('userStore', () => {

            $('#exampleModal').modal('hide');

        });

    </script>

</body>

</html>
<?php /**PATH E:\Laravel_Projects Git\Laravel_LiveWire_Modal27-Aug\blog\resources\views/livewire/home.blade.php ENDPATH**/ ?>