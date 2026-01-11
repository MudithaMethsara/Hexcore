<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>HEXCORE Order History</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Theme Config -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#0B0B0B",
                        "secondary": "#B11226",
                        "accent": "#FF1E1E",
                        "surface": "#141414",
                        "surface-highlight": "#1E1E1E",
                        "text-main": "#FFFFFF",
                        "text-dim": "#A1A1AA",
                        "border-color": "#333333"
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
                    boxShadow: {
                        'neon-red': '0 0 10px rgba(177, 18, 38, 0.5)',
                        'neon-red-strong': '0 0 20px rgba(255, 30, 30, 0.6)',
                    }
                },
            },
        }
    </script>
    <style>
        /* Custom scrollbar for webkit */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #0B0B0B;
        }

        ::-webkit-scrollbar-thumb {
            background: #333;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #B11226;
        }
    </style>
</head>

<body class="bg-primary text-text-main font-display antialiased overflow-x-hidden min-h-screen flex flex-col">
    <!-- Header -->

    <?php include "addons/header.php"?>

    <!-- Main Content -->
    <main class="flex-1 px-6 lg:px-12 py-8 w-full max-w-7xl mx-auto flex flex-col gap-8">
        <!-- Page Heading & Stats -->
        <section class="flex flex-col gap-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 border-l-4 border-accent pl-6 py-2">
                <div>
                    <h2 class="text-3xl md:text-5xl font-black uppercase tracking-tighter text-white">Command Center <span class="text-accent">//</span> Order Log</h2>
                    <p class="mt-2 text-text-dim font-body text-sm md:text-base">Secure tracking for your high-performance hardware acquisitions.</p>
                </div>
                <button class="hidden md:flex items-center gap-2 px-6 py-3 bg-secondary hover:bg-accent text-white font-bold uppercase tracking-wider text-sm rounded transition-all shadow-neon-red hover:shadow-neon-red-strong">
                    <span class="material-symbols-outlined text-lg">download</span> Export Data
                </button>
            </div>
            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="group relative overflow-hidden rounded-xl border border-border-color bg-surface p-6 hover:border-accent/50 transition-colors">
                    <div class="absolute top-0 right-0 p-4 opacity-20 group-hover:opacity-40 transition-opacity">
                        <span class="material-symbols-outlined text-5xl text-accent">payments</span>
                    </div>
                    <p class="text-sm font-bold text-text-dim uppercase tracking-wider mb-2">Total Deployed</p>
                    <p class="text-3xl font-bold text-white tracking-tight group-hover:text-accent transition-colors">$4,290.00</p>
                    <div class="h-1 w-12 bg-accent mt-4 rounded-full shadow-neon-red"></div>
                </div>
                <div class="group relative overflow-hidden rounded-xl border border-border-color bg-surface p-6 hover:border-accent/50 transition-colors">
                    <div class="absolute top-0 right-0 p-4 opacity-20 group-hover:opacity-40 transition-opacity">
                        <span class="material-symbols-outlined text-5xl text-accent">package_2</span>
                    </div>
                    <p class="text-sm font-bold text-text-dim uppercase tracking-wider mb-2">Active Shipments</p>
                    <p class="text-3xl font-bold text-white tracking-tight group-hover:text-accent transition-colors">2</p>
                    <div class="h-1 w-12 bg-white mt-4 rounded-full group-hover:bg-accent group-hover:shadow-neon-red transition-all"></div>
                </div>
                <div class="group relative overflow-hidden rounded-xl border border-border-color bg-surface p-6 hover:border-accent/50 transition-colors">
                    <div class="absolute top-0 right-0 p-4 opacity-20 group-hover:opacity-40 transition-opacity">
                        <span class="material-symbols-outlined text-5xl text-accent">verified</span>
                    </div>
                    <p class="text-sm font-bold text-text-dim uppercase tracking-wider mb-2">Hex XP Points</p>
                    <p class="text-3xl font-bold text-white tracking-tight group-hover:text-accent transition-colors">1,500</p>
                    <div class="h-1 w-full bg-gray-800 mt-4 rounded-full overflow-hidden">
                        <div class="h-full w-[70%] bg-gradient-to-r from-secondary to-accent"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Filters & Table -->
        <section class="flex flex-col gap-6">
            <!-- Filter Bar -->
            <div class="flex flex-wrap items-end gap-4 bg-surface p-4 rounded-xl border border-border-color">
                <div class="flex flex-col gap-2 min-w-[200px] flex-1">
                    <label class="text-xs font-bold text-text-dim uppercase tracking-wider">Search Order ID</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-text-dim text-lg">search</span>
                        <input class="w-full bg-primary border border-border-color rounded h-10 pl-10 pr-4 text-white text-sm focus:border-accent focus:ring-1 focus:ring-accent outline-none placeholder:text-gray-700 font-display" placeholder="HEX-XXXX" type="text" />
                    </div>
                </div>
                <div class="flex flex-col gap-2 min-w-[160px]">
                    <label class="text-xs font-bold text-text-dim uppercase tracking-wider">Time Range</label>
                    <select class="w-full bg-primary border border-border-color rounded h-10 px-3 text-white text-sm focus:border-accent focus:ring-1 focus:ring-accent outline-none font-display appearance-none">
                        <option>Last 30 Days</option>
                        <option>Last 3 Months</option>
                        <option>2023</option>
                        <option>All Time</option>
                    </select>
                </div>
                <div class="flex flex-col gap-2 min-w-[160px]">
                    <label class="text-xs font-bold text-text-dim uppercase tracking-wider">Status</label>
                    <select class="w-full bg-primary border border-border-color rounded h-10 px-3 text-white text-sm focus:border-accent focus:ring-1 focus:ring-accent outline-none font-display appearance-none">
                        <option>All Statuses</option>
                        <option>Processing</option>
                        <option>Shipped</option>
                        <option>Delivered</option>
                    </select>
                </div>
                <div class="ml-auto">
                    <button class="flex items-center justify-center gap-2 h-10 px-4 rounded border border-border-color bg-primary hover:bg-surface-highlight text-text-dim hover:text-white transition-colors text-sm font-medium uppercase">
                        <span class="material-symbols-outlined text-lg">filter_list</span> More Filters
                    </button>
                </div>
            </div>
            <!-- Data Table -->
            <div class="w-full overflow-x-auto rounded-xl border border-border-color bg-surface shadow-2xl">
                <table class="w-full min-w-[900px] border-collapse text-left">
                    <thead>
                        <tr class="bg-surface-highlight/50 border-b border-border-color text-xs uppercase tracking-wider text-text-dim font-bold">
                            <th class="px-6 py-4">Order ID</th>
                            <th class="px-6 py-4">Date Logged</th>
                            <th class="px-6 py-4 w-1/3">Configuration</th>
                            <th class="px-6 py-4">Total</th>
                            <th class="px-6 py-4">Status</th>
                            <th class="px-6 py-4 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-border-color">
                        <!-- Row 1: Processing -->
                        <tr class="group hover:bg-white/5 transition-colors">
                            <td class="px-6 py-4 text-white font-medium group-hover:text-accent transition-colors">#HEX-9921</td>
                            <td class="px-6 py-4 text-text-dim text-sm font-body">Oct 24, 2023</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="size-10 rounded bg-gray-800 bg-cover bg-center border border-border-color shrink-0" data-alt="Computer graphics card close up" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAmmlEOt9gNO9Pciw4LEVmn9Wumbg6HfYEnydH7JZe9VnNI2eXl6a36rTQ2CrZppuE8HkOUiZdFxv8mon9Xe3H3B34wDOntqWlYr126XRJYF0oUfo2O-gimufQRhOELakq3rigGkhiizhOhfIh6pKlzwbtoquHXnEXz0vXIcAd25Cavnva1NwG5l_a3f-HLNltbbMd2kBWotbIfvB2aJ7p6XPOVUmV6TV5EA7QpjOfq8Ff9NEpEfF91qBfDefno4sUagTXEDcQ-Wxw");'></div>
                                    <span class="text-text-dim text-sm font-body line-clamp-1">GeForce RTX 4090, Liquid Cooler...</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-white font-bold font-display">$2,100.00</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded text-xs font-bold bg-yellow-500/10 text-yellow-500 border border-yellow-500/20">
                                    <span class="size-1.5 rounded-full bg-yellow-500 animate-pulse"></span> PROCESSING
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-text-dim hover:text-white transition-colors text-xs font-bold uppercase tracking-wide group-hover:underline decoration-accent underline-offset-4">
                                    View Details
                                </button>
                            </td>
                        </tr>
                        <!-- Row 2: Shipped -->
                        <tr class="group hover:bg-white/5 transition-colors">
                            <td class="px-6 py-4 text-white font-medium group-hover:text-accent transition-colors">#HEX-8812</td>
                            <td class="px-6 py-4 text-text-dim text-sm font-body">Sep 10, 2023</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="size-10 rounded bg-gray-800 bg-cover bg-center border border-border-color shrink-0" data-alt="Mechanical keyboard with RGB lighting" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA0koj_Tqf9XBvNhsDHUik3TpO6zYpxdih8mjzxMLUYIjrwJDQ5lfzzpEW3dkuSNaZvRlFi5G8Syz-Xu8z2lnDmfjlrljecAHfML2bFNLgJYBAbkZ9ZApqABwUNrL_kvmTSHCOawcEoNx3Zz4MkyQMaAfDqwZKZSOj3YdENO0hQeEljNp7zpiFpYT3-X1bWnfGTN513bY3XWZnwgFfuvSF4eQXsqs_eq0ztQRyW9k0ti_WsuhDPV622pHK6WMsqMzzjXX-sJy6CWA8");'></div>
                                    <span class="text-text-dim text-sm font-body line-clamp-1">Mechanical Keyboard, 4k Monitor</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-white font-bold font-display">$850.00</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded text-xs font-bold bg-blue-500/10 text-blue-500 border border-blue-500/20">
                                    <span class="size-1.5 rounded-full bg-blue-500"></span> SHIPPED
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-text-dim hover:text-white transition-colors text-xs font-bold uppercase tracking-wide group-hover:underline decoration-accent underline-offset-4">
                                    Track Order
                                </button>
                            </td>
                        </tr>
                        <!-- Row 3: Delivered (Expanded Style) -->
                        <tr class="bg-surface-highlight/30 border-l-2 border-l-accent">
                            <td class="px-6 py-4 text-white font-medium">#HEX-7705</td>
                            <td class="px-6 py-4 text-text-dim text-sm font-body">Aug 02, 2023</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="size-10 rounded bg-gray-800 bg-cover bg-center border border-border-color shrink-0" data-alt="Computer CPU processor" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAB0NOv1P9yNfbFyot_fdx5lCcIEX03nEKb67jj7VTz46PLsqUaz_P5JNmiEgWxciad77gpdxTjc_vrNhH3yVjwm75VqGZHHhOUqMpYZ_e1cPOgZtnLGyDS_fsKFQmAbn24TGBe8I6EaSkdNp3B0yQk0wV86-N9tc31UtExbDc9-IrPz_p-4tf-a8WNKZEZ_N3pnnC8hqOjdDwj8cstAbVFN7dsqzZbLconCYS47jriJPPs5QW13AjU8xVm4oV722zW_eoV1BhdKdo");'></div>
                                    <span class="text-text-dim text-sm font-body line-clamp-1">Ryzen 9 7950X, 64GB DDR5 RAM</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-white font-bold font-display">$1,240.00</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded text-xs font-bold bg-green-500/10 text-green-500 border border-green-500/20">
                                    <span class="material-symbols-outlined text-[14px]">check_circle</span> DELIVERED
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-accent hover:text-white transition-colors text-xs font-bold uppercase tracking-wide flex items-center justify-end gap-1 ml-auto">
                                    Close <span class="material-symbols-outlined text-sm rotate-180">expand_more</span>
                                </button>
                            </td>
                        </tr>
                        <!-- Expanded Details Panel -->
                        <tr class="bg-surface-highlight/30 border-l-2 border-l-accent">
                            <td class="px-6 pb-6 pt-0" colspan="6">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 rounded bg-primary/50 p-6 border border-border-color">
                                    <!-- Shipping Info -->
                                    <div class="space-y-3">
                                        <h4 class="text-xs font-bold text-text-dim uppercase tracking-wider mb-2 border-b border-border-color pb-2">Delivery Address</h4>
                                        <div class="text-sm font-body text-white space-y-1">
                                            <p class="font-bold">Alex Chen</p>
                                            <p class="text-gray-400">1024 Silicon Valley Blvd, Apt 404</p>
                                            <p class="text-gray-400">San Francisco, CA 94107</p>
                                            <p class="text-gray-400">United States</p>
                                        </div>
                                    </div>
                                    <!-- Item List -->
                                    <div class="space-y-3 md:col-span-2">
                                        <h4 class="text-xs font-bold text-text-dim uppercase tracking-wider mb-2 border-b border-border-color pb-2">Items</h4>
                                        <div class="space-y-3">
                                            <div class="flex justify-between items-center text-sm font-body">
                                                <div class="flex items-center gap-3">
                                                    <span class="text-accent font-mono">1x</span>
                                                    <span class="text-gray-300">AMD Ryzen 9 7950X - 16-Core</span>
                                                </div>
                                                <span class="text-white font-mono">$699.00</span>
                                            </div>
                                            <div class="flex justify-between items-center text-sm font-body">
                                                <div class="flex items-center gap-3">
                                                    <span class="text-accent font-mono">2x</span>
                                                    <span class="text-gray-300">G.SKILL Trident Z5 RGB 32GB</span>
                                                </div>
                                                <span class="text-white font-mono">$541.00</span>
                                            </div>
                                        </div>
                                        <div class="mt-4 pt-4 border-t border-border-color flex justify-end gap-4">
                                            <button class="text-xs font-bold uppercase text-text-dim hover:text-white flex items-center gap-1">
                                                <span class="material-symbols-outlined text-sm">receipt_long</span> Invoice
                                            </button>
                                            <button class="text-xs font-bold uppercase text-accent hover:text-secondary flex items-center gap-1">
                                                <span class="material-symbols-outlined text-sm">replay</span> Buy Again
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 4 -->
                        <tr class="group hover:bg-white/5 transition-colors">
                            <td class="px-6 py-4 text-white font-medium group-hover:text-accent transition-colors">#HEX-6654</td>
                            <td class="px-6 py-4 text-text-dim text-sm font-body">Jul 15, 2023</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="size-10 rounded bg-gray-800 bg-cover bg-center border border-border-color shrink-0" data-alt="Computer gaming mouse" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAtvvIbSUfjcgSKhSdCoJ3NmsOUT0-pVmlkXLeVdE7sC7WU-k8EFETCaOLaFKZnNhbjxh50x97iPjQGOUWmh99C9J8p5tNORJXfuJ1rcMA3Ua2PX4KTmsVCKdhKHih4qyjEFbh9s_e1rsFZGfWXAQjN3b7chB5-ItB0vcTP7MVrZhoPx4HI6SPDxffFnZMEZBeiXZkES6PPCNpaEn3ro60n242xEVHERUTZNpIFdZp8XWg0kv7YPnffi1OeR8L3SIhmOvK6_2mpxHs");'></div>
                                    <span class="text-text-dim text-sm font-body line-clamp-1">Gaming Mouse, XXL Mousepad</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-white font-bold font-display">$150.00</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded text-xs font-bold bg-green-500/10 text-green-500 border border-green-500/20">
                                    <span class="material-symbols-outlined text-[14px]">check_circle</span> DELIVERED
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-text-dim hover:text-white transition-colors text-xs font-bold uppercase tracking-wide group-hover:underline decoration-accent underline-offset-4">
                                    Invoice
                                </button>
                            </td>
                        </tr>
                        <!-- Row 5 -->
                        <tr class="group hover:bg-white/5 transition-colors">
                            <td class="px-6 py-4 text-white font-medium group-hover:text-accent transition-colors">#HEX-5532</td>
                            <td class="px-6 py-4 text-text-dim text-sm font-body">Jun 20, 2023</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="size-10 rounded bg-gray-800 bg-cover bg-center border border-border-color shrink-0" data-alt="Computer power supply unit" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAec2YLp6a7IgNb2j_SxsIDE8GE_fp6Cc3BwsbjQFkIK8Zv4NIm1sMi4cwQPZCy7qzt8ZktNbWZV-DgBTcOmLXujjvQ-c7VZBdFNpn81DQqnwagI2MEPGgS5qGfo4Gsi6fhxiMuMc3N8_h_UB3YXojPWNB3cjfnJd6CXa3SvgpZOmIPPqiiezRcundwogOIFgasj4ME-2oVOeTYWTpHvNvPdP6fvtKsFa-OZPpWPYpdluJ3p0EspfDF5NQirYnfl447j4QZz328EVM");'></div>
                                    <span class="text-text-dim text-sm font-body line-clamp-1">1000W PSU, Modular Cables</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-white font-bold font-display">$210.00</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded text-xs font-bold bg-green-500/10 text-green-500 border border-green-500/20">
                                    <span class="material-symbols-outlined text-[14px]">check_circle</span> DELIVERED
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-text-dim hover:text-white transition-colors text-xs font-bold uppercase tracking-wide group-hover:underline decoration-accent underline-offset-4">
                                    Invoice
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class="flex items-center justify-between border-t border-border-color pt-6">
                <p class="text-sm text-text-dim font-body">Showing <span class="text-white font-bold">1-5</span> of <span class="text-white font-bold">24</span> orders</p>
                <div class="flex gap-2">
                    <button class="size-9 flex items-center justify-center rounded border border-border-color bg-surface hover:bg-surface-highlight hover:border-accent text-text-dim hover:text-white transition-all disabled:opacity-50" disabled="">
                        <span class="material-symbols-outlined text-sm">chevron_left</span>
                    </button>
                    <button class="size-9 flex items-center justify-center rounded border border-accent bg-accent/10 text-accent font-bold text-sm transition-all shadow-neon-red">1</button>
                    <button class="size-9 flex items-center justify-center rounded border border-border-color bg-surface hover:bg-surface-highlight hover:border-accent text-text-dim hover:text-white transition-all">2</button>
                    <button class="size-9 flex items-center justify-center rounded border border-border-color bg-surface hover:bg-surface-highlight hover:border-accent text-text-dim hover:text-white transition-all">3</button>
                    <span class="flex items-center justify-center text-text-dim">...</span>
                    <button class="size-9 flex items-center justify-center rounded border border-border-color bg-surface hover:bg-surface-highlight hover:border-accent text-text-dim hover:text-white transition-all">
                        <span class="material-symbols-outlined text-sm">chevron_right</span>
                    </button>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer Simple -->
    <footer class="mt-auto border-t border-border-color py-8 bg-surface">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-text-dim text-sm">© 2024 HEXCORE SYSTEMS. All rights reserved.</p>
            <div class="flex gap-6">
                <a class="text-text-dim hover:text-accent text-sm transition-colors" href="#">Privacy Policy</a>
                <a class="text-text-dim hover:text-accent text-sm transition-colors" href="#">Terms of Service</a>
            </div>
        </div>
    </footer>
</body>

</html>