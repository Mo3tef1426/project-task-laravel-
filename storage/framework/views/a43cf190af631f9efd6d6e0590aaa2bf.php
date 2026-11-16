


<?php $__env->startSection('title', 'Edit Course'); ?>

<?php $__env->startSection('content'); ?>

<h2 class="mb-4">Edit Course</h2>

<form action="<?php echo e(route('courses.update', $course->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <div class="mb-3">
        <label class="form-label">Course Title</label>
        <input type="text" name="title"
            class="form-control"
            value="<?php echo e(old('title', $course->title)); ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description"
            class="form-control"><?php echo e(old('description', $course->description)); ?></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" name="price"
            class="form-control"
            step="0.01" min="0"
            value="<?php echo e(old('price', $course->price)); ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Duration</label>
        <input type="number" name="duration"
            class="form-control"
            min="1"
            value="<?php echo e(old('duration', $course->duration)); ?>" required>
    </div>

    <button type="submit" class="btn btn-primary">
        Update Course
    </button>

    <a href="<?php echo e(route('courses.index')); ?>" class="btn btn-secondary">
        Cancel
    </a>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Mo_3tef_php\Assignments\Assignment\resources\views/courses/edit.blade.php ENDPATH**/ ?>