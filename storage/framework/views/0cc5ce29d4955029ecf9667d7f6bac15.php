


<?php $__env->startSection('title', 'All Courses'); ?>

<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>All Courses</h2>

    <a href="<?php echo e(route('courses.create')); ?>" class="btn btn-primary">
        + Add New Course
    </a>
</div>


<?php if(session('error')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>

<?php if($courses->count() > 0): ?>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Duration</th>
            <th>Students</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($course->id); ?></td>
                <td><?php echo e($course->title); ?></td>
                <td><?php echo e($course->description); ?></td>
                <td><?php echo e(number_format($course->price, 2)); ?></td>
                <td><?php echo e($course->duration); ?></td>
                <td><?php echo e($course->students_count); ?></td>

                <td>
                    <a href="<?php echo e(route('courses.show', $course->id)); ?>"
                       class="btn btn-info btn-sm">
                        View
                    </a>

                    <a href="<?php echo e(route('courses.edit', $course->id)); ?>"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="<?php echo e(route('courses.destroy', $course->id)); ?>"
                          method="POST"
                          style="display:inline;">

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this course?')">
                            Delete
                        </button>

                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php else: ?>

    <div class="alert alert-info">
        No courses found.
    </div>

<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Mo_3tef_php\Assignments\Assignment\resources\views/courses/index.blade.php ENDPATH**/ ?>