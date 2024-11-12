<?php include $this->resolve("partials/_header.php"); ?>

<main>
    <div class="loginBox">
        <div class="loginContainer">
            <form class="loginForm" method="POST">
                <?php include $this->resolve("partials/_csrf.php") ?>
                <label class="loginNameContainer">
                    <p class="loginName lng-login1">Name</p>
                    <input value="<?php echo e($oldFormData['name'] ?? ''); ?>" class="loginNameInput" name="name" type="text" autofocus placeholder="Nikita"/>
                    <?php if (array_key_exists('name', $errors)) : ?>
                        <div class="errorValueContainer">
                            <p class="errorValue">
                                <?php echo e($errors['name'][0]); ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </label>
                <label class="loginPasswordContainer">
                    <p class="loginPassword lng-login2">Password</p>
                    <input class="loginPasswordInput" name="password" type="password"/>
                    <?php if (array_key_exists('password', $errors)) : ?>
                        <div class="errorValueContainer">
                            <p class="errorValue">
                                <?php echo e($errors['password'][0]); ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </label>
                <button class="btnLogin lng-login3" type="submit">Log in</button>
                <a href="/register" class="switchToRegister lng-login4">Register</a>
            </form>
        </div>
    </div>
</main>

<?php include $this->resolve("partials/_footer.php"); ?>