<?php include $this->resolve("partials/_header.php"); ?>

<main>
    <div class="registerBox">
        <div class="registerContainer">
            <form class="registerForm" method="POST">
                <?php include $this->resolve("partials/_csrf.php") ?>
                <label class="registerNameContainer">
                    <p class="registerName">Name</p>
                    <input value="<?php echo e($oldFormData['name'] ?? ''); ?>" class="registerNameInput" name="name" type="text" autofocus placeholder="Nikita"/>
                    <?php if (array_key_exists('name', $errors)) : ?>
                        <div class="errorValueContainer">
                            <p class="errorValue">
                                <?php echo e($errors['name'][0]); ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </label>
                <label class="registerPasswordContainer">
                    <p class="registerPassword">Password</p>
                    <input class="registerPasswordInput" name="password" type="password"/>
                    <?php if (array_key_exists('password', $errors)) : ?>
                        <div class="errorValueContainer">
                            <p class="errorValue">
                                <?php echo e($errors['password'][0]); ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </label>
                <label class="registerConfirmPasswordContainer">
                    <p class="registerPassword">Confirm Password</p>
                    <input class="registerPasswordInput" name="confirmPassword" type="password"/>
                    <?php if (array_key_exists('confirmPassword', $errors)) : ?>
                        <div class="errorValueContainer">
                            <p class="errorValue">
                                <?php echo e($errors['confirmPassword'][0]); ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </label>
                <div class="registerTosContainer">
                    <input <?php echo $oldFormData['tos'] ?? false ? 'checked' : ''; ?> class="registerTosInput" name="tos" type="checkbox"/>
                    <a href="#" class="registerTos">I accept the terms of service.</a>
                    <?php if (array_key_exists('tos', $errors)) : ?>
                        <div class="errorValueContainer">
                            <p class="errorValue">
                                <?php echo e($errors['tos'][0]); ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </div>
                <button class="btnRegister" type="submit">Register</button>
                <a href="/login" class="switchToLogin">Login</a>
            </form>
        </div>
    </div>
</main>

<?php include $this->resolve("partials/_footer.php"); ?>