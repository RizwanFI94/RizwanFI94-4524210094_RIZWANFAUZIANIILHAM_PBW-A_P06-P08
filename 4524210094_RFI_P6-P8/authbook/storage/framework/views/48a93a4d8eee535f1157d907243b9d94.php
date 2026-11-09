<div
    <?php echo e($attributes
            ->merge([
                'id' => $getId(),
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)); ?>

>
    <?php echo e($getChildComponentContainer()); ?>

</div>
<?php /**PATH C:\xampp\htdocs\4524210094_RFI_P6_Tugas2\authbook\vendor\filament\forms\resources\views/components/group.blade.php ENDPATH**/ ?>