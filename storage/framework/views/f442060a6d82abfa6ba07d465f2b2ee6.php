


<?php $__env->startSection('title', 'Add New Course'); ?>

<?php $__env->startSection('content'); ?>

<h2 class="mb-4">Add New Course</h2>

<form action="<?php echo e(route('courses.store')); ?>" method="POST">

    <?php echo csrf_field(); ?>

    <div class="mb-3">
        <label class="form-label">Course Title</label>
        <input type="text" name="title" class="form-control"
               value="<?php echo e(old('title')); ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control"
                  rows="3"><?php echo e(old('description')); ?></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" name="price" class="form-control"
               step="0.01" min="0" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Duration</label>
        <input type="number" name="duration" class="form-control"
               min="1" required>
    </div>

    <button type="submit" class="btn btn-primary">
        Save Course
    </button>

    <a href="<?php echo e(route('courses.index')); ?>" class="btn btn-secondary">
        Cancel
    </a>

</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Mo_3tef_php\Assignments\Assignment\resources\views/courses/create.blade.php ENDPATH**/ ?>