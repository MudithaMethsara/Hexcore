class HeaderContent extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
        <header style="position: fixed;" class="sticky top-0 z-50 w-full border-b border-gray-200 dark:border-white/10 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            
            <div class="flex items-center gap-2 group cursor-pointer">
                <div class="text-primary group-hover:animate-pulse">
                    <span class="material-symbols-outlined !text-[32px]">hexagon</span>
                </div>
                <span class="text-xl font-bold tracking-tight">HEXCORE</span>
            </div>

            <nav class="hidden md:flex items-center gap-8">
                <a class="text-sm font-medium hover:text-primary transition-colors" href="product.php">Products</a>
                <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Custom Loop</a>
                <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Workstations</a>
                <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Support</a>
            </nav>

            <div class="flex items-center gap-4">

                <a href="cart.php"><span class="material-symbols-outlined">shopping_cart</span></a>

                <a href="user_profile.php"><span>RedWolf</span></a>
                
                <a class="hidden sm:inline-flex cyber-clip-btn h-9 items-center justify-center bg-primary px-4 text-sm font-bold text-white transition-all hover:brightness-110 btn-glow"
                    href="signin.php">
                    LOG IN
                </a>

                <button id="mobile-menu-btn" class="md:hidden text-gray-500 hover:text-primary transition-colors dark:text-gray-400">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden absolute top-16 left-0 w-full bg-white/95 dark:bg-black/95 border-b border-gray-200 dark:border-white/10 backdrop-blur-md transition-all duration-300 ease-in-out">
        <div class="flex flex-col p-4 space-y-4">
            <a class="text-base font-medium hover:text-primary transition-colors px-2 py-1" href="product.php">Products</a>
            <a class="text-base font-medium hover:text-primary transition-colors px-2 py-1" href="#">Custom Loop</a>
            <a class="text-base font-medium hover:text-primary transition-colors px-2 py-1" href="#">Workstations</a>
            <a class="text-base font-medium hover:text-primary transition-colors px-2 py-1" href="#">Support</a>
            
            <hr class="border-gray-200 dark:border-white/10">
            
            <a class="flex items-center gap-2 text-base font-bold text-primary px-2 py-1" href="signin.php">
                <span class="material-symbols-outlined text-sm">login</span>
                LOG IN
            </a>
        </div>
    </div>
</header>

<script>
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        
        // Optional: Toggle icon between 'menu' and 'close'
        const iconSpan = btn.querySelector('span');
        if (menu.classList.contains('hidden')) {
            iconSpan.textContent = 'menu';
        } else {
            iconSpan.textContent = 'close';
        }
    });
</script>
        `
    }
}

customElements.define("header-content", HeaderContent);