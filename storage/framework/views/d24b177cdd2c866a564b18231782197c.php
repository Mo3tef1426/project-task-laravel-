


<?php $__env->startSection('title', 'All Students'); ?>

<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>All Students</h2>

    <a href="<?php echo e(route('students.create')); ?>" class="btn btn-primary">
        + Add New Student
    </a>
</div>

<?php if($students->count() > 0): ?>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Course</th>
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($student->id); ?></td>
            <td><?php echo e($student->name); ?></td>
            <td><?php echo e($student->email); ?></td>
            <td><?php echo e($student->phone); ?></td>
            <td><?php echo e($student->course->title); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php else: ?>

<div class="alert alert-info">
    No students found.
</div>

<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Mo_3tef_php\Assignments\Assignment\resources\views/students/index.blade.php ENDPATH**/ ?>