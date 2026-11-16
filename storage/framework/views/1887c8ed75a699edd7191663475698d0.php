


<?php $__env->startSection('title', 'Add New Student'); ?>

<?php $__env->startSection('content'); ?>

<h2 class="mb-4">Add New Student</h2>

<form action="<?php echo e(route('students.store')); ?>" method="POST">

    <?php echo csrf_field(); ?>

    <div class="mb-3">
        <label class="form-label">Student Name</label>
        <input type="text" name="name" class="form-control"
               value="<?php echo e(old('name')); ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control"
               value="<?php echo e(old('email')); ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control"
               value="<?php echo e(old('phone')); ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Select Course</label>

        <select name="course_id" class="form-select" required>
            <option value="">Choose a course</option>

            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($course->id); ?>">
                    <?php echo e($course->title); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </select>
    </div>

    <button type="submit" class="btn btn-primary">
        Save Student
    </button>

    <a href="<?php echo e(route('students.index')); ?>" class="btn btn-secondary">
        Cancel
    </a>

</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Mo_3tef_php\Assignments\Assignment\resources\views/students/create.blade.php ENDPATH**/ ?>