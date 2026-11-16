


<?php $__env->startSection('title', 'Course Details'); ?>

<?php $__env->startSection('content'); ?>

<h2 class="mb-4">Course Details</h2>

<div class="card">
    <div class="card-body">
        <h3><?php echo e($course->title); ?></h3>

        <p><strong>Description:</strong>
            <?php echo e($course->description ?? 'No description'); ?>

        </p>

        <p><strong>Price:</strong>
            <?php echo e($course->price); ?>

        </p>

        <p><strong>Duration:</strong>
            <?php echo e($course->duration); ?>

        </p>

        <p><strong>Registered Students:</strong>
            <?php echo e($course->students->count()); ?>

        </p>

        <a href="<?php echo e(route('courses.edit', $course->id)); ?>"
           class="btn btn-warning">Edit Course</a>

        <a href="<?php echo e(route('courses.index')); ?>"
           class="btn btn-secondary">Back</a>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Mo_3tef_php\Assignments\Assignment\resources\views/courses/show.blade.php ENDPATH**/ ?>