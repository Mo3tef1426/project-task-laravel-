
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $__env->yieldContent('title'); ?> - Laravel Assignment</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('courses.index')); ?>">
                Course Management System
            </a>

            <div>
                <a href="<?php echo e(route('courses.index')); ?>" class="btn btn-outline-light">
                    Courses
                </a>

                <a href="<?php echo e(route('students.index')); ?>" class="btn btn-outline-light">
                    Students
                </a>
            </div>
        </div>
    </nav>

    <main class="container mt-4">

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Mo_3tef_php\Assignments\Assignment\resources\views/layouts/app.blade.php ENDPATH**/ ?>