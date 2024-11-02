<?php include $this->resolve("partials/_header.php"); ?>

<main>
    <div class="contactsBox">
        <div class="contactsContainer">
            <p class="contactsFormTitle">Here you can leave your suggestion</p>
            <form class="contactsForm" method="POST">
                <?php include $this->resolve("partials/_csrf.php") ?>
                <label class="contactsNameContainer">
                    <p class="contactsName labelTitle">Name</p>
                    <input value="<?php echo e($oldFormData['name'] ?? ''); ?>" class="contactsNameInput labelInput" name="name" type="text" autofocus placeholder="Nikita"/>
                    <?php if (array_key_exists('name', $errors)) : ?>
                        <div class="errorValueContainer">
                            <p class="errorValue">
                                <?php echo e($errors['name'][0]); ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </label>
                <label class="contactsSurnameContainer">
                    <p class="contactsSurname labelTitle">Surname</p>
                    <input value="<?php echo e($oldFormData['surname'] ?? ''); ?>" class="contactsSurnameInput labelInput" name="surname" type="text" placeholder="Smirnov"/>
                    <?php if (array_key_exists('surname', $errors)) : ?>
                        <div class="errorValueContainer">
                            <p class="errorValue">
                                <?php echo e($errors['surname'][0]); ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </label>
                <label class="contactsEmailContainer">
                    <p class="contactsEmail labelTitle">Email</p>
                    <input value="<?php echo e($oldFormData['email'] ?? ''); ?>" class="contactsEmailInput labelInput" name="email" type="email" placeholder="Example@gmail.com"/>
                    <?php if (array_key_exists('email', $errors)) : ?>
                        <div class="errorValueContainer">
                            <p class="errorValue">
                                <?php echo e($errors['email'][0]); ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </label>
                <label class="contactsMessageContainer">
                    <p class="contactsMessage labelTitle">Message</p>
                    <textarea rows="4" cols="23" wrap="hard" class="contactsMessageTextarea labelInput" name="message" placeholder="Dear windView..."><?php echo e($oldFormData['message'] ?? ''); ?></textarea>
                    <?php if (array_key_exists('message', $errors)) : ?>
                        <div class="errorValueContainer">
                            <p class="errorValue">
                                <?php echo e($errors['message'][0]); ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </label>
                <button class="btnSend" type="submit">Send</button>
            </form>
        </div>
    </div>
</main>

<?php include $this->resolve("partials/_footer.php"); ?>