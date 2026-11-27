<?php require  'partials/header.php' ?>
<?php require 'partials/nav.php'; ?>

<section class="mx-auto max-w-3xl px-6 py-12 sm:py-16">
    <div class="mb-8">
        <p class="mb-2 text-sm font-semibold uppercase tracking-[0.18em] text-indigo-600">Your notebook</p>
        <h1 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl"><?= htmlspecialchars($heading ?? 'Create a note') ?></h1>
        <p class="mt-3 text-base leading-7 text-slate-600">Capture an idea, reminder, or anything you want to come back to.</p>
    </div>

    <form method="POST" class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
        <div>
            <label for="body" class="mb-2 block text-sm font-semibold text-slate-800">Note</label>
            <textarea id="body" name="body" rows="8" placeholder="Start writing your note..." class="block w-full resize-y rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 text-base leading-7 text-slate-900 shadow-inner outline-none transition placeholder:text-slate-400 focus:border-indigo-500 focus:bg-white focus:ring-4 focus:ring-indigo-100"></textarea>
            <p class="mt-2 text-sm text-slate-500">Keep it simple. You can always add more later.</p>
            <p class="mt-2 text-sm text-red-500 font-semibold">
                <?php if(isset($errors['body'])) : ?>
                    <?= $errors['body'] ?>
                <?php endif; ?>
            </p>
        </div>

        <div class="mt-6 flex flex-col-reverse gap-3 border-t border-slate-100 pt-6 sm:flex-row sm:items-center sm:justify-between">
            <a href="/notes" class="inline-flex items-center justify-center rounded-lg px-4 py-2.5 text-sm font-semibold text-slate-600 transition hover:bg-slate-100 hover:text-slate-900">Cancel</a>
            <button type="submit" class="inline-flex items-center justify-center rounded-lg bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-700 focus:outline-none focus:ring-4 focus:ring-indigo-200">
                Create note
            </button>
        </div>
    </form>
</section>

<?php require  'partials/footer.php' ?>
