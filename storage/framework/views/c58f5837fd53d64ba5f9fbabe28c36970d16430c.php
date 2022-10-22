<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Register Page</title>
    <meta name="description" content="<?php echo $__env->yieldContent('page_description', $page_description ?? ''); ?>"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('images/favicon.png')); ?>">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Registrasi Peminjam Buku</h4>
                                    <?php if(session('success')): ?>
                                    <div class="alert alert-success">
                                        <b>Yeah!</b> <?php echo e(session('success')); ?>

                                    </div>
                                    <?php endif; ?>
                                    <?php if(session('error')): ?>
                                    <div class="alert alert-danger">
                                        <b>Opps!</b> <?php echo e(session('error')); ?>

                                    </div>
                                    <?php endif; ?>
                                    <form action="<?php echo e(url('/action-register')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Name</strong></label>
                                            <input type="text" class="form-control" placeholder="masukkan nama" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="masukkan email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="masukkan password" name="password" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Konfirmasi Password</strong></label>
                                            <input type="password" class="form-control" placeholder="masukkan password" name="confirm_password" required>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Sudah Punya Akun? <a class="text-primary" href="/login">Login</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html><?php /**PATH C:\myFile\Semester 5\Praktek\Framework\tokobuku\resources\views/register.blade.php ENDPATH**/ ?>