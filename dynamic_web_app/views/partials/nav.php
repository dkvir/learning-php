<header class="border-b border-slate-200 bg-white shadow-sm">
    <nav class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4" aria-label="Main navigation">
        <span class="text-lg font-bold tracking-tight text-indigo-700">Dynamic Web App</span>
        <ul class="flex items-center gap-2 sm:gap-4">
            <li><a href="/" class="<?= urlIs('/') ? 'bg-slate-100 font-bold text-black' : 'font-medium' ?> inline-flex rounded-lg px-3 py-2 text-sm text-slate-600 transition-colors hover:bg-slate-100 hover:text-slate-900">Home</a></li>
            <li><a href="/about" class="<?= urlIs('/about') ? 'bg-slate-100 font-bold text-black' : 'font-medium' ?> inline-flex rounded-lg px-3 py-2 text-sm font-medium text-slate-600 transition-colors hover:bg-slate-100 hover:text-slate-900">About</a></li>
            <li><a href="/notes" class="<?= urlIs('/notes') ? 'bg-slate-100 font-bold text-black' : 'font-medium' ?> inline-flex rounded-lg px-3 py-2 text-sm font-medium text-slate-600 transition-colors hover:bg-slate-100 hover:text-slate-900">Notes</a></li>
            <li><a href="/contact" class="<?= urlIs('/contact') ? 'bg-slate-100 font-bold text-black' : 'font-medium' ?> inline-flex rounded-lg px-3 py-2 text-sm font-medium text-slate-600 transition-colors hover:bg-slate-100 hover:text-slate-900">Contact</a></li>
        </ul>
    </nav>
</header>
