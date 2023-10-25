<main>
    <div>
        <?php if (isset($success)) { ?>
            <p class="success"><?= $success ?></p>
        <?php } ?>
    </div>
    <form action="" method="post">
        <label for="content">Commentaire</label>
        <textarea name="content" id="content" placeholder="Super" rows="10"></textarea>
        <?php if (isset($formErrors['content'])) { ?>
            <p class="error"><?= $formErrors['content'] ?></p>
        <?php } ?>
        <input type="submit" value="Envoyer">
    </form>
</main>