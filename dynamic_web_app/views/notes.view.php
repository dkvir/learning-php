<?php require  'partials/header.php' ?>
<?php require 'partials/nav.php'; ?>

<section class="p-10">
    <h1 class="text-lg font-semibold"><?= "$heading" ?></h1>

    <ul class="mt-5">
        <?php foreach($notes as $note) : ?>
            <li>
                <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                    <?= htmlspecialchars($note['body']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <a href="/notes/create" class="text-blue-500 hover:underline mt-5 block">Create a Note...</a>
</section>

<?php require  'partials/footer.php' ?>