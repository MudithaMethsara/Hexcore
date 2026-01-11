<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>HEXCORE - High Performance Systems</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Noto+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#af1225",
                        "primary-hover": "#d9182d",
                        "accent": "#FF1E1E",
                        "background-light": "#f8f6f6",
                        "background-dark": "#0B0B0B",
                        "surface-dark": "#161616",
                        "surface-highlight": "#1E1E1E",
                        "border-dark": "#38292b",
                        "text-dim": "#b89da1",
                    },
                    fontFamily: {
                        "display": ["Space Grotesk", "sans-serif"],
                        "body": ["Noto Sans", "sans-serif"],
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        /* Custom scrollbar for cyber aesthetic */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #0B0B0B;
        }

        ::-webkit-scrollbar-thumb {
            background: #38292b;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #af1225;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen flex flex-col font-display text-white selection:bg-primary selection:text-white">
    <!-- Navbar -->

    <?php include "addons/header.php"?>

    <!-- Main Content -->
    <main class="flex-1 w-full max-w-[1440px] mx-auto px-4 md:px-8 py-6">

        <div class="hidden md:flex flex-col min-w-40 !h-10 w-96">
            <div class="flex w-full flex-1 items-stretch rounded-lg h-full group/search focus-within:ring-1 focus-within:ring-primary transition-all">
                <div class="text-text-dim flex border-none bg-surface-highlight items-center justify-center pl-4 rounded-l-lg border-r-0">
                    <span class="material-symbols-outlined text-[20px]">search</span>
                </div>
                <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-0 border-none bg-surface-highlight focus:border-none h-full placeholder:text-text-dim px-4 rounded-l-none border-l-0 pl-2 text-sm font-normal leading-normal" placeholder="Search components..." value="" />
            </div>
        </div>

        <br><br>

        <div class="flex flex-col lg:flex-row gap-8">

            <!-- Sidebar Filters -->
            <aside class="w-full lg:w-64 flex-shrink-0 space-y-8">

                <!-- Filter Group: Series -->
                <div>
                    <h3 class="text-white font-bold text-sm tracking-wider uppercase mb-4 flex items-center gap-2">
                        <span class="w-1 h-4 bg-primary rounded-sm"></span> Series
                    </h3>
                    <div class="space-y-3">
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input checked="" class="form-checkbox bg-surface-highlight border-border-dark text-primary focus:ring-0 rounded-sm w-5 h-5 transition-colors group-hover:border-primary" type="checkbox" />
                            <span class="text-text-dim group-hover:text-white transition-colors">RTX 40 Series</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input class="form-checkbox bg-surface-highlight border-border-dark text-primary focus:ring-0 rounded-sm w-5 h-5 transition-colors group-hover:border-primary" type="checkbox" />
                            <span class="text-text-dim group-hover:text-white transition-colors">RTX 30 Series</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input class="form-checkbox bg-surface-highlight border-border-dark text-primary focus:ring-0 rounded-sm w-5 h-5 transition-colors group-hover:border-primary" type="checkbox" />
                            <span class="text-text-dim group-hover:text-white transition-colors">Radeon RX 7000</span>
                        </label>
                    </div>
                </div>
                <!-- Filter Group: Brand -->
                <div>
                    <h3 class="text-white font-bold text-sm tracking-wider uppercase mb-4 flex items-center gap-2">
                        <span class="w-1 h-4 bg-primary rounded-sm"></span> Brand
                    </h3>
                    <div class="space-y-3">
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input checked="" class="form-checkbox bg-surface-highlight border-border-dark text-primary focus:ring-0 rounded-sm w-5 h-5 transition-colors group-hover:border-primary" type="checkbox" />
                            <span class="text-text-dim group-hover:text-white transition-colors">ASUS ROG</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input class="form-checkbox bg-surface-highlight border-border-dark text-primary focus:ring-0 rounded-sm w-5 h-5 transition-colors group-hover:border-primary" type="checkbox" />
                            <span class="text-text-dim group-hover:text-white transition-colors">MSI Gaming</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input class="form-checkbox bg-surface-highlight border-border-dark text-primary focus:ring-0 rounded-sm w-5 h-5 transition-colors group-hover:border-primary" type="checkbox" />
                            <span class="text-text-dim group-hover:text-white transition-colors">Gigabyte AORUS</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input class="form-checkbox bg-surface-highlight border-border-dark text-primary focus:ring-0 rounded-sm w-5 h-5 transition-colors group-hover:border-primary" type="checkbox" />
                            <span class="text-text-dim group-hover:text-white transition-colors">NVIDIA Founders</span>
                        </label>
                    </div>
                </div>
                <!-- Filter Group: Price -->
                <div>
                    <h3 class="text-white font-bold text-sm tracking-wider uppercase mb-4 flex items-center gap-2">
                        <span class="w-1 h-4 bg-primary rounded-sm"></span> Price Range
                    </h3>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="bg-surface-highlight rounded px-3 py-2 text-sm text-white w-full text-center">$500</div>
                        <span class="text-text-dim">-</span>
                        <div class="bg-surface-highlight rounded px-3 py-2 text-sm text-white w-full text-center">$2500</div>
                    </div>
                    <input class="w-full h-1 bg-surface-highlight rounded-lg appearance-none cursor-pointer accent-primary" type="range" />
                </div>
            </aside>
            <!-- Product Grid Area -->
            <div class="flex-1">
                <!-- Sort Bar -->
                <div class="flex flex-wrap items-center justify-between gap-4 mb-6 bg-surface-highlight/30 p-4 rounded-lg border border-border-dark">
                    <p class="text-text-dim text-sm font-medium"><span class="text-white font-bold">12</span> Products Found</p>
                    <div class="flex items-center gap-4">
                        <div class="flex items-center gap-2">
                            <span class="text-text-dim text-sm whitespace-nowrap">Sort by:</span>
                            <div class="relative min-w-[160px]">
                                <select class="appearance-none w-full bg-surface-dark border border-border-dark text-white text-sm rounded px-3 py-2 pr-8 focus:outline-none focus:border-primary cursor-pointer">
                                    <option>Featured</option>
                                    <option>Price: Low to High</option>
                                    <option>Price: High to Low</option>
                                    <option>Newest Arrivals</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-text-dim">
                                    <span class="material-symbols-outlined text-sm">expand_more</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex bg-surface-dark rounded border border-border-dark p-0.5">
                            <button class="p-1.5 rounded bg-surface-highlight text-white hover:text-primary transition-colors">
                                <span class="material-symbols-outlined text-[20px]">grid_view</span>
                            </button>
                            <button class="p-1.5 rounded text-text-dim hover:text-white transition-colors">
                                <span class="material-symbols-outlined text-[20px]">view_list</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                    <!-- Product Card 1 -->
                    <div class="group relative bg-surface-dark rounded-xl border border-border-dark overflow-hidden transition-all duration-300 hover:border-primary/50 hover:shadow-[0_0_20px_rgba(175,18,37,0.15)] hover:-translate-y-1">
                        <!-- Badges -->
                        <div class="absolute top-3 left-3 z-10 flex gap-2">
                            <span class="bg-primary text-white text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded-sm shadow-sm">Hot</span>
                        </div>
                        <!-- Image Container -->
                        <div class="relative h-64 w-full bg-[#121212] flex items-center justify-center p-6 group-hover:bg-[#0f0f0f] transition-colors">
                            <img alt="GPU" class="object-contain h-full w-full drop-shadow-2xl grayscale-[20%] group-hover:grayscale-0 transition-all duration-500 group-hover:scale-105" data-alt="NVIDIA RTX 4090 Graphics Card floating in dark void with RGB lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9kXifDBgWw1YX8vsti2vww9o3aj37tvMgceH14MLTTFbu6xbbfeJwlcBpXJTIXQYN_WjxKq_5VWYb5OM8vnHWG0gxmOlWwX-JmNWpCXAH0csHPOoOcJH5r5IhjBwoaQ2Hmx-knOgWv1Zm4qq15Rm-Jjwq288jO5ZwfjGsJHJYKV7i_uMA-v2-syId2cv4df254UfEr2UVqm3qjVMqDmVQdaRUVgxzdaNUKMP77gJmY2kIU3W2xy_0ZXnEzRtvDzUi1mevsCpxl8I" />
                        </div>
                        <!-- Content -->
                        <div class="p-5 flex flex-col gap-3">
                            <div>
                                <h3 class="text-white font-bold text-lg leading-tight group-hover:text-primary transition-colors">GeForce RTX™ 4090 OC</h3>
                                <p class="text-text-dim text-xs mt-1">24GB GDDR6X • DLSS 3.0</p>
                            </div>
                            <!-- Specs Icons -->
                            <div class="flex gap-4 py-2 border-t border-b border-white/5">
                                <div class="flex items-center gap-1.5" title="VRAM">
                                    <span class="material-symbols-outlined text-text-dim text-sm">memory</span>
                                    <span class="text-xs text-white">24GB</span>
                                </div>
                                <div class="flex items-center gap-1.5" title="Clock Speed">
                                    <span class="material-symbols-outlined text-text-dim text-sm">speed</span>
                                    <span class="text-xs text-white">2520 MHz</span>
                                </div>
                                <div class="flex items-center gap-1.5" title="Fans">
                                    <span class="material-symbols-outlined text-text-dim text-sm">mode_fan</span>
                                    <span class="text-xs text-white">3 Fan</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-1">
                                <div class="flex flex-col">
                                    <span class="text-text-dim text-xs line-through decoration-primary decoration-1 opacity-70">$1,799.00</span>
                                    <span class="text-white text-xl font-bold">$1,599.00</span>
                                </div>
                                <button class="h-10 w-10 rounded-lg bg-white/5 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all duration-300 group-active:scale-95">
                                    <span class="material-symbols-outlined">add_shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Product Card 2 -->
                    <div class="group relative bg-surface-dark rounded-xl border border-border-dark overflow-hidden transition-all duration-300 hover:border-primary/50 hover:shadow-[0_0_20px_rgba(175,18,37,0.15)] hover:-translate-y-1">
                        <!-- Badges -->
                        <div class="absolute top-3 left-3 z-10 flex gap-2">
                            <span class="bg-blue-600 text-white text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded-sm shadow-sm">New</span>
                        </div>
                        <div class="relative h-64 w-full bg-[#121212] flex items-center justify-center p-6 group-hover:bg-[#0f0f0f] transition-colors">
                            <img alt="GPU" class="object-contain h-full w-full drop-shadow-2xl grayscale-[20%] group-hover:grayscale-0 transition-all duration-500 group-hover:scale-105" data-alt="AMD Radeon RX 7900 XTX graphics card with aggressive angular design" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAwUcxwC6bWMULb0iebeTW_vYq6gJuHXijCB5LefZnTUJ3XtWqRfCrjoEsgnvjP4zy-_mzIudhlj604WGIZB6SOKipsEllZhaZrlK_UOnWMo9TWQuYQupa7W2zfqpP2mwWGR4EDHKFMrNmSuzH0mqLZyrvdDnNp4eeFc7wShUZ8q1yVRggHxTmoeNcuW983U3jUUcXK6BUObrkDPik15GyNDzBp3AfFIuPaeTJb7JyvJSDF4-Epu_NVZuFPQgPKHHs34GVjv1xA8zM" />
                        </div>
                        <div class="p-5 flex flex-col gap-3">
                            <div>
                                <h3 class="text-white font-bold text-lg leading-tight group-hover:text-primary transition-colors">Radeon™ RX 7900 XTX</h3>
                                <p class="text-text-dim text-xs mt-1">24GB GDDR6 • RDNA 3</p>
                            </div>
                            <div class="flex gap-4 py-2 border-t border-b border-white/5">
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-text-dim text-sm">memory</span>
                                    <span class="text-xs text-white">24GB</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-text-dim text-sm">speed</span>
                                    <span class="text-xs text-white">2300 MHz</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-text-dim text-sm">mode_fan</span>
                                    <span class="text-xs text-white">3 Fan</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-1">
                                <div class="flex flex-col">
                                    <span class="text-white text-xl font-bold">$999.00</span>
                                </div>
                                <button class="h-10 w-10 rounded-lg bg-white/5 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all duration-300 group-active:scale-95">
                                    <span class="material-symbols-outlined">add_shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Product Card 3 -->
                    <div class="group relative bg-surface-dark rounded-xl border border-border-dark overflow-hidden transition-all duration-300 hover:border-primary/50 hover:shadow-[0_0_20px_rgba(175,18,37,0.15)] hover:-translate-y-1">
                        <div class="relative h-64 w-full bg-[#121212] flex items-center justify-center p-6 group-hover:bg-[#0f0f0f] transition-colors">
                            <img alt="GPU" class="object-contain h-full w-full drop-shadow-2xl grayscale-[20%] group-hover:grayscale-0 transition-all duration-500 group-hover:scale-105" data-alt="White RTX 3080 graphics card minimalist design" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxcK7h1MxIqJCcJXV0orY3lBjcDzHBj8-f9_RNmp5zP5TTMkanSa74YvgzNnvN2D35IE9x6zhVoZKU_AFd49M-yGflROijtFdYhWQhQ_m4ckxKRM44-hiuITdl6MLjDa5OX3sGNULfvq9mk1t5RTE2exsORKGHIa6ck3v5vz3ODQba2hxfZiaHCgC0P5OfTM_Xxb8WZf0YBbQ_wliiKnxX6hKZ3WE7GjrBiGLcWJ0eZdN0nVFBrOmlRhyfp_n2jDRGBLQEYikk_HI" />
                        </div>
                        <div class="p-5 flex flex-col gap-3">
                            <div>
                                <h3 class="text-white font-bold text-lg leading-tight group-hover:text-primary transition-colors">ROG Strix RTX 3080</h3>
                                <p class="text-text-dim text-xs mt-1">10GB GDDR6X • White Edition</p>
                            </div>
                            <div class="flex gap-4 py-2 border-t border-b border-white/5">
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-text-dim text-sm">memory</span>
                                    <span class="text-xs text-white">10GB</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-text-dim text-sm">speed</span>
                                    <span class="text-xs text-white">1935 MHz</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-text-dim text-sm">mode_fan</span>
                                    <span class="text-xs text-white">3 Fan</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-1">
                                <div class="flex flex-col">
                                    <span class="text-white text-xl font-bold">$749.00</span>
                                </div>
                                <button class="h-10 w-10 rounded-lg bg-white/5 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all duration-300 group-active:scale-95">
                                    <span class="material-symbols-outlined">add_shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Product Card 4 -->
                    <div class="group relative bg-surface-dark rounded-xl border border-border-dark overflow-hidden transition-all duration-300 hover:border-primary/50 hover:shadow-[0_0_20px_rgba(175,18,37,0.15)] hover:-translate-y-1">
                        <div class="relative h-64 w-full bg-[#121212] flex items-center justify-center p-6 group-hover:bg-[#0f0f0f] transition-colors">
                            <img alt="GPU" class="object-contain h-full w-full drop-shadow-2xl grayscale-[20%] group-hover:grayscale-0 transition-all duration-500 group-hover:scale-105" data-alt="NVIDIA RTX 4080 Founder's edition graphics card" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0PesN5LLxbLnZx3EaT70IZVYUNSn0y5-d-nv1QggforjUfjXc6k3WqrhJs1QPyJMH9AhcfvLf9fa6TX9wY31RIsZnZ_4MLWOdGkomijV-b6EXHyw3eeLEB6BCpVLk4g_6BW4NTYzHL3CZG2d20ciErrVWaGa61eMxCaZovlOlmAT6B_ib_lgrPooSU0QvFHypEOnUOcbtypYZhaICoMB7C6is2JIVUuR8yJ_Xr_gQ7xR6i6nrwJhsAg6IPWXTBEMUO-lJEdEggUI" />
                        </div>
                        <div class="p-5 flex flex-col gap-3">
                            <div>
                                <h3 class="text-white font-bold text-lg leading-tight group-hover:text-primary transition-colors">GeForce RTX™ 4080</h3>
                                <p class="text-text-dim text-xs mt-1">16GB GDDR6X • Ada Lovelace</p>
                            </div>
                            <div class="flex gap-4 py-2 border-t border-b border-white/5">
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-text-dim text-sm">memory</span>
                                    <span class="text-xs text-white">16GB</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-text-dim text-sm">speed</span>
                                    <span class="text-xs text-white">2505 MHz</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-text-dim text-sm">mode_fan</span>
                                    <span class="text-xs text-white">2 Fan</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-1">
                                <div class="flex flex-col">
                                    <span class="text-white text-xl font-bold">$1,199.00</span>
                                </div>
                                <button class="h-10 w-10 rounded-lg bg-white/5 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all duration-300 group-active:scale-95">
                                    <span class="material-symbols-outlined">add_shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Product Card 5 -->
                    <div class="group relative bg-surface-dark rounded-xl border border-border-dark overflow-hidden transition-all duration-300 hover:border-primary/50 hover:shadow-[0_0_20px_rgba(175,18,37,0.15)] hover:-translate-y-1">
                        <!-- Badges -->
                        <div class="absolute top-3 left-3 z-10 flex gap-2">
                            <span class="bg-surface-highlight border border-white/10 text-white text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded-sm shadow-sm">Pre-Order</span>
                        </div>
                        <div class="relative h-64 w-full bg-[#121212] flex items-center justify-center p-6 group-hover:bg-[#0f0f0f] transition-colors">
                            <img alt="GPU" class="object-contain h-full w-full drop-shadow-2xl grayscale-[20%] group-hover:grayscale-0 transition-all duration-500 group-hover:scale-105" data-alt="Generic black graphics card with dual fans illuminated" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAHTeRgInl3gkGe2GTRzXnImjF3tbIB20xmC6bIjWHLHjiHNmV7nzHivylRuCcrmVAvklCFQEvso4cItRzodHP5FodvmyxTZfFqzzTRpbGTzRanP0gN8AF3FyAwmQGkCvbHMj22AE1CrGoDD2xldYmmP74Hpuz0w6N4NSWqb63VZU8Ozs_AfhvTttC1R_QMJGtZifXpL-776fjQ0jLF6BQXwCp9ZacOIcW47puNuiVsDuZlKWPIo1tpPbzOnpVLItrazLLd-e5KlY" />
                        </div>
                        <div class="p-5 flex flex-col gap-3">
                            <div>
                                <h3 class="text-white font-bold text-lg leading-tight group-hover:text-primary transition-colors">TUF Gaming RX 7800</h3>
                                <p class="text-text-dim text-xs mt-1">16GB GDDR6 • Military Grade</p>
                            </div>
                            <div class="flex gap-4 py-2 border-t border-b border-white/5">
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-text-dim text-sm">memory</span>
                                    <span class="text-xs text-white">16GB</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-text-dim text-sm">speed</span>
                                    <span class="text-xs text-white">2124 MHz</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-text-dim text-sm">mode_fan</span>
                                    <span class="text-xs text-white">3 Fan</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-1">
                                <div class="flex flex-col">
                                    <span class="text-white text-xl font-bold">$549.00</span>
                                </div>
                                <button class="h-10 w-10 rounded-lg bg-white/5 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all duration-300 group-active:scale-95">
                                    <span class="material-symbols-outlined">add_shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Product Card 6 -->
                    <div class="group relative bg-surface-dark rounded-xl border border-border-dark overflow-hidden transition-all duration-300 hover:border-primary/50 hover:shadow-[0_0_20px_rgba(175,18,37,0.15)] hover:-translate-y-1">
                        <!-- Badges -->
                        <div class="absolute top-3 left-3 z-10 flex gap-2">
                            <span class="bg-red-600 text-white text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded-sm shadow-sm">-15%</span>
                        </div>
                        <div class="relative h-64 w-full bg-[#121212] flex items-center justify-center p-6 group-hover:bg-[#0f0f0f] transition-colors">
                            <img alt="GPU" class="object-contain h-full w-full drop-shadow-2xl grayscale-[20%] group-hover:grayscale-0 transition-all duration-500 group-hover:scale-105" data-alt="NVIDIA RTX 3070 graphics card on dark background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBPkGcVuHTvn4e6JFzgdLA4eMsLxTO8Astd1_txOAHLtwiy5w7Jf75LqoxwllvRJoVFlsbKy3oX655cQyPli3Iu_rfOmAdWPr8V6zv7GEfBktLF5SkwNJJIq45Ux4dISrrPAI7fxn76TVzyFxRghmF9AaNe9pWLnuiDgKlL71Hl61kp4XlpeB6c216-FZJLCWtGwHKp5yoZiheczokdM6x-ij5XijODGwepmYdKlxrg5ddonfmiAaSP5yYgoG8_wvmMEnCEwRi0koM" />
                        </div>
                        <div class="p-5 flex flex-col gap-3">
                            <div>
                                <h3 class="text-white font-bold text-lg leading-tight group-hover:text-primary transition-colors">MSI Ventus 3X</h3>
                                <p class="text-text-dim text-xs mt-1">12GB GDDR6X • OC Edition</p>
                            </div>
                            <div class="flex gap-4 py-2 border-t border-b border-white/5">
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-text-dim text-sm">memory</span>
                                    <span class="text-xs text-white">12GB</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-text-dim text-sm">speed</span>
                                    <span class="text-xs text-white">1800 MHz</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-text-dim text-sm">mode_fan</span>
                                    <span class="text-xs text-white">3 Fan</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-1">
                                <div class="flex flex-col">
                                    <span class="text-text-dim text-xs line-through decoration-primary decoration-1 opacity-70">$699.00</span>
                                    <span class="text-white text-xl font-bold">$594.15</span>
                                </div>
                                <button class="h-10 w-10 rounded-lg bg-white/5 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all duration-300 group-active:scale-95">
                                    <span class="material-symbols-outlined">add_shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="flex justify-center mt-12 mb-6">
                    <div class="flex items-center gap-2">
                        <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-border-dark text-white hover:border-primary hover:text-primary transition-all">
                            <span class="material-symbols-outlined text-sm">arrow_back_ios_new</span>
                        </button>
                        <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary text-white font-bold">1</button>
                        <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-border-dark text-white hover:border-primary hover:text-primary transition-all">2</button>
                        <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-border-dark text-white hover:border-primary hover:text-primary transition-all">3</button>
                        <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-border-dark text-white hover:border-primary hover:text-primary transition-all">
                            <span class="material-symbols-outlined text-sm">arrow_forward_ios</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="border-t border-border-dark bg-[#080808] pt-12 pb-6 px-4 md:px-10">
        <div class="max-w-[1440px] mx-auto flex flex-col md:flex-row justify-between gap-10">
            <div class="flex flex-col gap-4 max-w-sm">
                <div class="flex items-center gap-2 text-white">
                    <div class="size-6 text-primary">
                        <span class="material-symbols-outlined text-3xl">hexagon</span>
                    </div>
                    <h2 class="text-white text-xl font-bold tracking-[-0.015em]">HEXCORE</h2>
                </div>
                <p class="text-text-dim text-sm">Premium gaming hardware for the enthusiasts who demand performance. Built for the future.</p>
                <div class="flex gap-4 mt-2">
                    <a class="text-white hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">public</span></a>
                    <a class="text-white hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">alternate_email</span></a>
                    <a class="text-white hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">rss_feed</span></a>
                </div>
            </div>
            <div class="flex flex-wrap gap-12">
                <div class="flex flex-col gap-3">
                    <h4 class="text-white font-bold uppercase text-sm tracking-wider">Shop</h4>
                    <a class="text-text-dim hover:text-primary text-sm transition-colors" href="#">GPUs</a>
                    <a class="text-text-dim hover:text-primary text-sm transition-colors" href="#">Processors</a>
                    <a class="text-text-dim hover:text-primary text-sm transition-colors" href="#">Motherboards</a>
                    <a class="text-text-dim hover:text-primary text-sm transition-colors" href="#">Memory</a>
                </div>
                <div class="flex flex-col gap-3">
                    <h4 class="text-white font-bold uppercase text-sm tracking-wider">Support</h4>
                    <a class="text-text-dim hover:text-primary text-sm transition-colors" href="#">Order Status</a>
                    <a class="text-text-dim hover:text-primary text-sm transition-colors" href="#">Warranty</a>
                    <a class="text-text-dim hover:text-primary text-sm transition-colors" href="#">Returns</a>
                    <a class="text-text-dim hover:text-primary text-sm transition-colors" href="#">Contact Us</a>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <h4 class="text-white font-bold uppercase text-sm tracking-wider">Stay Updated</h4>
                <div class="flex">
                    <input class="bg-surface-highlight border-none rounded-l-lg text-white placeholder:text-text-dim focus:ring-1 focus:ring-primary h-10 px-4 text-sm w-full md:w-64" placeholder="Enter your email" type="email" />
                    <button class="bg-primary hover:bg-primary-hover text-white px-4 h-10 rounded-r-lg font-bold text-sm transition-colors">JOIN</button>
                </div>
            </div>
        </div>
        <div class="border-t border-white/5 mt-12 pt-6 text-center">
            <p class="text-text-dim text-xs">© 2024 HEXCORE Systems. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>