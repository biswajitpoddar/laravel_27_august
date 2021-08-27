<div>

    <?php echo $__env->make('livewire.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('livewire.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(session()->has('message')): ?>

        <div class="alert alert-success" style="margin-top:30px;">x

          <?php echo e(session('message')); ?>


        </div>

    <?php endif; ?>

    <table class="table table-bordered mt-5">

        <thead>

            <tr>

                <th>No.</th>

                <th>Name</th>

                <th>Email</th>

                <th>Action</th>

            </tr>

        </thead>

        <tbody>

            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>

                <td><?php echo e($value->id); ?></td>

                <td><?php echo e($value->name); ?></td>

                <td><?php echo e($value->email); ?></td>

                <td>

                <button data-toggle="modal" data-target="#updateModal" wire:click="edit(<?php echo e($value->id); ?>)" class="btn btn-primary btn-sm">Edit</button>

                <button wire:click="delete(<?php echo e($value->id); ?>)" class="btn btn-danger btn-sm">Delete</button>

                </td>

            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>

    </table>

</div>
<?php /**PATH E:\Laravel_Projects Git\Laravel_LiveWire_Modal27-Aug\blog\resources\views/livewire/users.blade.php ENDPATH**/ ?>