    <div id="book-form">
        <div class="left-form">
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="book-title">
                <h1>Modifier Manga</h1>
            </div>
            <div>
                <?php if (isset($success)) { ?>
                    <p class="success"><?= $success ?></p>
                <?php } ?>
            </div>

            <label for="name">Titre</label>
            <input type="text" name="name" id="name" placeholder="One Piece" value="<?= $bookInfos->name ?>">
            <?php if (isset($formErrors['name'])) { ?>
                <p class="errorText"><?= $formErrors['name'] ?></p>
            <?php } ?>

            <label for="year">Année</label>
            <input type="text" name="year" id="year" placeholder="1998" value="<?= $bookInfos->year ?>">
            <?php if (isset($formErrors['year'])) { ?>
                <p class="errorText"><?= $formErrors['year'] ?></p>
            <?php } ?>

            <label for="summary">Sommaire</label>
            <textarea name="summary" id="summary" placeholder="..."><?= @$_POST['summary'] ?><?= $bookInfos->summary ?></textarea>
            <?php if (isset($formErrors['summary'])) { ?>
                <p class="errorText"><?= $formErrors['summary'] ?></p>
            <?php } ?>
            <input type="submit" value="Publier" name="update" class="custom-btn">
        </form>
        <button id="open-modal-btn" class="custom-btn">Supprimer le livre</button>
        <div id="modal-container" class="modal-container">
            <div class="modal">
                <div class="modal-header">
                    <span class="close-btn">&times;</span>
                </div>
                <div class="modal-content">
                    <p id="supp">Êtes-vous sûr ?</p>
                </div>
                <div class="modal-footer">
                    <form action="#" method="POST">
                        <input type="submit" value="Confirmer" name="deleteBooks" class="valider">
                    </form>
                    <span class="close-btn">Annuler</span>
                </div>
            </div>
        </div>
        </div>
        <form action="" method="post" enctype="multipart/form-data" class="right-form">
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
            <?php if (isset($formErrors['image'])) { ?>
                <p class="errorText"><?= $formErrors['image'] ?></p>
            <?php } ?>

            <input type="submit" value="Publier" name="updateImage" class="custom-btn">
            <img src="../assets/img/<?= $bookInfos->image ?>" class="custom-image">
        </form>
    </div>
    </div>