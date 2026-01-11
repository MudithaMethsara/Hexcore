<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>HEXCORE // SHOPPING TERMINAL</title>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#ff1f1f",
                        "background-light": "#f8f5f5",
                        "background-dark": "#0B0B0B",
                        "surface-dark": "#141414",
                        "surface-highlight": "#1a1a1a",
                        "accent-red": "#ff1f1f",
                        "accent-dark-red": "#B11226",
                    },
                    fontFamily: {
                        "display": ["Space Grotesk", "sans-serif"],
                        "body": ["Space Grotesk", "sans-serif"]
                    },
                    backgroundImage: {
                        'grid-pattern': "linear-gradient(to right, #1f1f1f 1px, transparent 1px), linear-gradient(to bottom, #1f1f1f 1px, transparent 1px)",
                    }
                },
            },
        }
    </script>
    <style>
        body {
            font-family: "Space Grotesk", sans-serif;
        }

        .cyber-border {
            position: relative;
            background: #141414;
            clip-path: polygon(0 0,
                    100% 0,
                    100% calc(100% - 10px),
                    calc(100% - 10px) 100%,
                    0 100%);
        }

        .cyber-border::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 95%, #ff1f1f 100%);
            opacity: 0.1;
            pointer-events: none;
        }

        .glitch-text:hover {
            text-shadow: 2px 0 #ff1f1f, -2px 0 #00ffff;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-black dark:text-white min-h-screen flex flex-col font-display selection:bg-primary selection:text-white">
    <!-- Top Navigation -->

    <?php include "addons/header.php"?>

    <!-- Main Content Area -->
    <main class="flex-grow w-full max-w-[1400px] mx-auto px-4 py-8 md:px-6 lg:py-12 relative overflow-hidden">
        <!-- Background Grid Effect -->
        <div class="absolute inset-0 z-0 opacity-[0.03] pointer-events-none" style="background-size: 40px 40px; background-image: linear-gradient(to right, #ffffff 1px, transparent 1px), linear-gradient(to bottom, #ffffff 1px, transparent 1px);"></div>
        <div class="relative z-10 flex flex-col lg:flex-row gap-8 lg:gap-12">
            <!-- Left Column: Cart Items -->
            <section class="flex-1 flex flex-col gap-6">
                <!-- Page Heading -->
                <div class="flex flex-col gap-2 pb-4 border-b border-[#3a2727]">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary text-4xl">terminal</span>
                        <h1 class="text-3xl md:text-5xl font-black uppercase tracking-tighter text-white">
                            SYSTEM // <span class="text-primary">CART_STATUS: ACTIVE</span>
                        </h1>
                    </div>
                    <p class="text-[#bc9a9a] font-mono text-sm tracking-wider pl-1">&gt;&gt; 2 ITEMS LOADED IN BUFFER MEMORY</p>
                </div>
                <!-- Product List -->
                <div class="flex flex-col gap-4">
                    <!-- Item 1 -->
                    <div class="cyber-border group relative flex flex-col sm:flex-row gap-6 p-6 border border-[#3a2727] hover:border-primary/40 transition-colors duration-300">
                        <div class="relative shrink-0 overflow-hidden rounded bg-black/50 border border-[#3a2727]">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <img alt="High-end graphics card with triple fans and LED lighting" class="h-32 w-32 object-cover object-center group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8T4VvUi7UD_anLHecLH22gzle3PufIjXiVPwZYTVD-qrOp2EhXN3SB3LiG7eD8OVNKA08tUC7jqmVW9JXNfYCiDQoZdyHKgIMSFrxh5Q87vqtfIohxw6HXz_Dfu-FWUZaSHGgvOabaoUPkbiJCHHiAdW1l6gRYDfGPaTpILybMkOshxv4-URhq7H87wJnwvKje6dqPXV4Rn-ICJPRp8hzB4kFAP70jHQ9kxky6ZgyskAwkQ7CO8XBOvA0DAqObUDuhNyXC6V41Jc" />
                        </div>
                        <div class="flex flex-1 flex-col justify-between gap-4">
                            <div>
                                <div class="flex justify-between items-start">
                                    <h3 class="text-white text-lg font-bold tracking-wide uppercase group-hover:text-primary transition-colors">RTX 4090 OC EDITION [HYPER-THREADED]</h3>
                                    <button class="text-[#bc9a9a] hover:text-white transition-colors">
                                        <span class="material-symbols-outlined text-xl">close</span>
                                    </button>
                                </div>
                                <p class="text-[#888] text-xs font-mono mt-1">VRAM: 24GB // CLOCK: 2520MHz // STOCK: LOW</p>
                            </div>
                            <div class="flex flex-wrap items-end justify-between gap-4">
                                <p class="text-xl font-bold text-white">$1,599.00</p>
                                <div class="flex items-center border border-[#3a2727] bg-black/40 rounded overflow-hidden">
                                    <button class="w-10 h-10 flex items-center justify-center text-white hover:bg-[#3a2727] hover:text-primary transition-colors">
                                        <span class="material-symbols-outlined text-sm">remove</span>
                                    </button>
                                    <input class="w-12 h-10 bg-transparent text-center text-white border-none focus:ring-0 p-0 font-mono text-sm" readonly="" type="number" value="1" />
                                    <button class="w-10 h-10 flex items-center justify-center text-white hover:bg-[#3a2727] hover:text-primary transition-colors">
                                        <span class="material-symbols-outlined text-sm">add</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="cyber-border group relative flex flex-col sm:flex-row gap-6 p-6 border border-[#3a2727] hover:border-primary/40 transition-colors duration-300">
                        <div class="relative shrink-0 overflow-hidden rounded bg-black/50 border border-[#3a2727]">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <img alt="Mechanical keyboard with RGB lighting and sleek keycaps" class="h-32 w-32 object-cover object-center group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDFFSZMuvCUlAGrvB4RbCqKRE5Fv2Rf0ay6y6Hbzxeb3qFiMu2D0b6zL43Ic7stxPzz5_f70Xa_Skmfq1b8CFblFimkc6O5gP-S76nIk95L6LBszdQPl3qdER2ERoUyUYJErpow4gtgNbTsB8QF7YZmitWqJuimsidizsa1ZYyy9ChXmM_31KsEF89oRCyb_0oBpvANpcKar43OJh2U-pMNhDRTUtSb4eOtkV4RuVuxozUPozMcF-VkmjpZ5rpLPNCY6JlpNMquJcc" />
                        </div>
                        <div class="flex flex-1 flex-col justify-between gap-4">
                            <div>
                                <div class="flex justify-between items-start">
                                    <h3 class="text-white text-lg font-bold tracking-wide uppercase group-hover:text-primary transition-colors">MECH-KEY PRO // RED SWITCH</h3>
                                    <button class="text-[#bc9a9a] hover:text-white transition-colors">
                                        <span class="material-symbols-outlined text-xl">close</span>
                                    </button>
                                </div>
                                <p class="text-[#888] text-xs font-mono mt-1">LAYOUT: 65% // RGB: SYNCED // CONNECT: TYPE-C</p>
                            </div>
                            <div class="flex flex-wrap items-end justify-between gap-4">
                                <p class="text-xl font-bold text-white">$129.00</p>
                                <div class="flex items-center border border-[#3a2727] bg-black/40 rounded overflow-hidden">
                                    <button class="w-10 h-10 flex items-center justify-center text-white hover:bg-[#3a2727] hover:text-primary transition-colors">
                                        <span class="material-symbols-outlined text-sm">remove</span>
                                    </button>
                                    <input class="w-12 h-10 bg-transparent text-center text-white border-none focus:ring-0 p-0 font-mono text-sm" readonly="" type="number" value="1" />
                                    <button class="w-10 h-10 flex items-center justify-center text-white hover:bg-[#3a2727] hover:text-primary transition-colors">
                                        <span class="material-symbols-outlined text-sm">add</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Continue Shopping Link -->
                <a class="inline-flex items-center gap-2 text-[#bc9a9a] hover:text-primary transition-colors mt-4 self-start group" href="#">
                    <span class="material-symbols-outlined text-lg group-hover:-translate-x-1 transition-transform">arrow_back</span>
                    <span class="font-bold text-sm tracking-widest">RETURN TO CATALOG</span>
                </a>
            </section>
            <!-- Right Column: Order Summary -->
            <aside class="w-full lg:w-[420px] shrink-0">
                <div class="sticky top-28 flex flex-col gap-6">
                    <!-- Summary Card -->
                    <div class="bg-surface-dark border border-[#3a2727] p-8 flex flex-col gap-6 rounded-lg relative overflow-hidden">
                        <!-- Decorative top bar -->
                        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-primary via-red-900 to-transparent"></div>
                        <h2 class="text-2xl font-black text-white uppercase tracking-tighter">Command Summary</h2>
                        <div class="flex flex-col gap-4 border-b border-[#3a2727] pb-6">
                            <div class="flex justify-between text-[#bc9a9a]">
                                <span class="font-mono text-sm">SUBTOTAL_CALC</span>
                                <span class="text-white font-medium">$1,728.00</span>
                            </div>
                            <div class="flex justify-between text-[#bc9a9a]">
                                <span class="font-mono text-sm">SHIPPING_MODULE</span>
                                <span class="text-white font-medium">CALCULATED NEXT</span>
                            </div>
                            <div class="flex justify-between text-[#bc9a9a]">
                                <span class="font-mono text-sm">TAX_ESTIMATE</span>
                                <span class="text-white font-medium">$138.24</span>
                            </div>
                        </div>
                        <!-- Promo Input -->
                        <div class="flex flex-col gap-2">
                            <label class="text-xs font-bold text-[#bc9a9a] tracking-widest uppercase mb-1">Promo_Code_Input</label>
                            <div class="flex">
                                <input class="w-full bg-[#0B0B0B] border border-[#3a2727] border-r-0 rounded-l text-white text-sm placeholder:text-[#555] focus:ring-1 focus:ring-primary focus:border-primary p-3 font-mono uppercase" placeholder="ENTER HEX CODE" />
                                <button class="bg-[#3a2727] hover:bg-white hover:text-black text-white px-4 py-2 text-sm font-bold uppercase tracking-wider transition-all duration-300 border border-[#3a2727] rounded-r">
                                    APPLY
                                </button>
                            </div>
                        </div>
                        <!-- Total -->
                        <div class="flex justify-between items-center pt-2">
                            <span class="text-lg font-bold text-white uppercase tracking-widest">Total_Output</span>
                            <span class="text-3xl font-black text-primary">$1,866.24</span>
                        </div>
                        <!-- Checkout Button -->
                        <button class="w-full relative group overflow-hidden bg-primary hover:bg-[#ff4444] text-white py-4 px-6 font-black uppercase tracking-[0.15em] transition-all duration-300 clip-path-polygon mt-2 rounded">
                            <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:animate-[shimmer_1s_infinite]"></div>
                            <span class="relative flex items-center justify-center gap-3">
                                INITIATE CHECKOUT
                                <span class="material-symbols-outlined text-xl group-hover:translate-x-1 transition-transform">bolt</span>
                            </span>
                        </button>
                        <div class="flex justify-center gap-4 mt-2">
                            <span class="material-symbols-outlined text-[#3a2727] text-2xl" title="Secure Payment">lock</span>
                            <span class="material-symbols-outlined text-[#3a2727] text-2xl" title="Verified">verified_user</span>
                            <span class="material-symbols-outlined text-[#3a2727] text-2xl" title="Fast Shipping">local_shipping</span>
                        </div>
                    </div>
                    <!-- Help Box -->
                    <div class="border border-[#3a2727] bg-[#1a1a1a]/50 p-4 rounded text-center">
                        <p class="text-[#bc9a9a] text-xs font-mono">NEED SUPPORT? TERMINAL OPERATORS ARE ONLINE.</p>
                        <a class="text-white text-xs font-bold underline hover:text-primary mt-1 inline-block" href="#">OPEN COMMS CHANNEL</a>
                    </div>
                </div>
            </aside>
        </div>
    </main>
</body>

</html>