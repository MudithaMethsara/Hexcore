<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>HEXCORE User Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet" />
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
                        "secondary": "#B11226",
                        "background-light": "#f8f5f5",
                        "background-dark": "#0B0B0B",
                        /* Updated to match user request */
                        "surface-dark": "#151515",
                        "surface-border": "#2A2A2A",
                    },
                    fontFamily: {
                        "display": ["Space Grotesk", "sans-serif"],
                        "body": ["Noto Sans", "sans-serif"]
                    },
                    boxShadow: {
                        'glow': '0 0 15px rgba(255, 31, 31, 0.3)',
                    }
                },
            },
        }
    </script>
    <style>
        /* Custom scrollbar for webkit */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #0B0B0B;
        }

        ::-webkit-scrollbar-thumb {
            background: #333;
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #ff1f1f;
        }

        .hex-clip {
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
        }
    </style>
</head>

<body class="bg-background-dark text-white font-display overflow-hidden selection:bg-primary selection:text-white">
    <div class="flex h-screen w-full">
        <!-- Sidebar Navigation -->
        <aside class="w-20 lg:w-64 flex flex-col border-r border-surface-border bg-[#0f0f0f] flex-shrink-0 transition-all duration-300">
            <!-- Logo Area -->
            <div class="h-16 flex items-center justify-center lg:justify-start lg:px-6 border-b border-surface-border">
                <div class="size-8 bg-primary rounded-sm flex items-center justify-center shadow-glow">
                    <span class="material-symbols-outlined text-white text-xl">hexagon</span>
                </div>
                <div class="hidden lg:flex flex-col ml-3">
                    <h1 class="text-white text-lg font-bold leading-none tracking-widest">HEXCORE</h1>
                    <span class="text-xs text-primary font-mono tracking-widest">SYSTEMS</span>
                </div>
            </div>
            <!-- Nav Items -->

            <?php include "addons/leftbar.php" ?>

            <!-- User Mini Profile Bottom -->
            <div class="p-4 border-t border-surface-border">
                <div class="flex items-center gap-3">
                    <div class="size-8 rounded bg-gray-700 bg-cover bg-center" data-alt="Small user avatar thumbnail" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB1-oFYRiyY1EfJKInkOpOF_SQP_QJ0FRIQjHTFwtOw6LfucMxE-HUmh3OSu3XjtMzlzBoIVz3Uus1KIt3bWSADpim6ZGCBVz1o8GSwsK71KMo8jcIe8Fh7SP8wRO4BHx4bgotOOpnMy5iP1FX4JScf_cqRpmHZAzaiJvsrY3np9AdLKb5kwfi-RUga1XSCDQlbgQzKULmquhhQTwALY6EFuqFpr6wF1bfzaUO8zMx_i3VQtRzs2iM_GY_VUJC2qQs0Rkwq4i5tPbE');"></div>
                    <div class="hidden lg:flex flex-col overflow-hidden">
                        <span class="text-sm font-bold truncate">NEXUS_OP</span>
                        <span class="text-xs text-green-500 flex items-center gap-1"><span class="block size-1.5 rounded-full bg-green-500 animate-pulse"></span> ONLINE</span>
                    </div>
                    <button class="hidden lg:block ml-auto text-gray-400 hover:text-white">
                        <span class="material-symbols-outlined text-lg">logout</span>
                    </button>
                </div>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 flex flex-col h-full relative overflow-hidden bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]">
            <div class="absolute inset-0 bg-background-dark/95 z-0 pointer-events-none"></div>
            <!-- Top HUD Header -->
            <header class="relative z-10 h-16 border-b border-surface-border flex items-center justify-between px-6 bg-[#0f0f0f]/80 backdrop-blur-md">
                <div class="flex items-center gap-4">
                    <span class="text-gray-500 material-symbols-outlined">terminal</span>
                    <div class="flex flex-col">
                        <h2 class="text-sm font-bold tracking-widest text-white">TERMINAL // <span class="text-primary">USER_CONFIG</span></h2>
                        <span class="text-[10px] font-mono text-gray-500">V.4.0.2 // SECURE CONNECTION</span>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <button class="relative p-2 text-gray-400 hover:text-white transition-colors">
                        <span class="material-symbols-outlined">notifications</span>
                        <span class="absolute top-2 right-2 size-2 bg-primary rounded-full animate-pulse"></span>
                    </button>
                    <!-- <button class="p-2 text-gray-400 hover:text-white transition-colors">
                        <span class="material-symbols-outlined">settings</span>
                    </button> -->
                </div>
            </header>
            <!-- Scrollable Page Content -->
            <div class="relative z-10 flex-1 overflow-y-auto p-4 lg:p-8">
                <div class="max-w-7xl mx-auto flex flex-col gap-6">
                    <!-- Page Heading -->
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 border-b border-white/5 pb-4">
                        <div>
                            <h1 class="text-3xl md:text-4xl font-bold tracking-tight text-white mb-2">PROFILE</h1>
                            <p class="text-gray-400 text-sm md:text-base max-w-2xl">Manage your digital identity, global shipping preferences, and security protocols.</p>
                        </div>
                        <div class="flex gap-2">
                            <span class="px-3 py-1 rounded bg-green-500/10 text-green-500 border border-green-500/20 text-xs font-mono font-bold">STATUS: ACTIVE</span>
                            <span class="px-3 py-1 rounded bg-primary/10 text-primary border border-primary/20 text-xs font-mono font-bold">LEVEL: ELITE</span>
                        </div>
                    </div>
                    <!-- Layout Grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                        <!-- Left Column: Identity Card -->
                        <div class="lg:col-span-4 flex flex-col gap-6">
                            <!-- Identity Module -->
                            <div class="bg-surface-dark border border-surface-border rounded-lg p-6 relative overflow-hidden group">
                                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-primary to-transparent opacity-50"></div>
                                <div class="flex flex-col items-center text-center">
                                    <div class="relative mb-4">
                                        <div class="size-32 hex-clip bg-cover bg-center border-4 border-surface-dark relative z-10" data-alt="User profile picture in hexagon shape" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDQ8Z4f7Cozo8cOUm4vRnXMWY6sebl8lH30IE1R_K98MpCaoAAsDJXCTiJd40b9VAlQnIDQv_wMw-jJMACnMrI0d6U3K8RYupqmCD3PntDskSXrbKkrIyJGX-NjSOEjDXRT4P2koqcCRK5kthxNQbS-Ca_iYvkrkRlfNxJi7rSWalg3CzmCUAU5NYtFBShzV7EI22nEXIzoq7BqJrEW2dHNi1BGw7tpavr_tidJ07NPinmb7aN-8GXYMQPvBCu2VfDn1w16kE2_Km4');"></div>
                                        <div class="absolute -inset-1 bg-primary/30 hex-clip blur-sm z-0"></div>
                                    </div>
                                    <h3 class="text-xl font-bold text-white tracking-wide">NEXUS_OPERATOR</h3>
                                    <p class="text-gray-500 text-sm mb-4">ID: 894-X-ALPHA</p>
                                    <div class="w-full flex justify-between text-xs text-gray-400 mb-1 font-mono">
                                        <span>XP SYNC</span>
                                        <span>78%</span>
                                    </div>
                                    <div class="w-full h-2 bg-gray-800 rounded-full overflow-hidden mb-2">
                                        <div class="h-full bg-primary w-[78%] shadow-[0_0_10px_rgba(255,31,31,0.5)]"></div>
                                    </div>
                                    <p class="text-[10px] text-gray-500 self-start">NEXT REWARD: GPU BRACKET</p>
                                </div>
                                <div class="mt-6 pt-6 border-t border-surface-border grid grid-cols-2 gap-4">
                                    <div class="text-center">
                                        <span class="block text-2xl font-bold text-white">24</span>
                                        <span class="text-xs text-gray-500 font-mono">ORDERS</span>
                                    </div>
                                    <div class="text-center border-l border-surface-border">
                                        <span class="block text-2xl font-bold text-white">3</span>
                                        <span class="text-xs text-gray-500 font-mono">ACTIVE RIGS</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Quick Stats / Badges -->
                            <div class="bg-surface-dark border border-surface-border rounded-lg p-6">
                                <h4 class="text-sm font-bold text-gray-400 mb-4 tracking-widest uppercase">Achievements</h4>
                                <div class="flex flex-wrap gap-2">
                                    <div class="size-10 rounded bg-[#2a2a2a] flex items-center justify-center border border-white/5 tooltip cursor-help" title="Early Adopter">
                                        <span class="material-symbols-outlined text-yellow-500 text-lg">star</span>
                                    </div>
                                    <div class="size-10 rounded bg-[#2a2a2a] flex items-center justify-center border border-white/5 cursor-help" title="Hardware Guru">
                                        <span class="material-symbols-outlined text-blue-500 text-lg">memory</span>
                                    </div>
                                    <div class="size-10 rounded bg-[#2a2a2a] flex items-center justify-center border border-white/5 cursor-help" title="Security Verified">
                                        <span class="material-symbols-outlined text-green-500 text-lg">verified_user</span>
                                    </div>
                                    <div class="size-10 rounded bg-[#2a2a2a] flex items-center justify-center border border-white/5 opacity-50 cursor-help" title="Locked">
                                        <span class="material-symbols-outlined text-gray-600 text-lg">lock</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right Column: Settings Forms -->
                        <div class="lg:col-span-8 flex flex-col gap-6">
                            <!-- Tabs -->
                            <div class="flex gap-1 border-b border-surface-border">
                                <button class="px-6 py-3 text-sm font-bold text-white border-b-2 border-primary bg-white/5">
                                    GENERAL
                                </button>
                            </div>
                            <!-- Form Section -->
                            <div class="bg-surface-dark border border-surface-border rounded-lg p-6 lg:p-8">
                                <h3 class="text-lg font-bold text-white mb-1">PERSONAL DETAILS</h3>
                                <p class="text-gray-500 text-sm mb-6">Update your public profile and private contact information.</p>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="space-y-2">
                                        <label class="text-xs font-mono text-primary uppercase tracking-wider">Display Name</label>
                                        <div class="relative">
                                            <input class="w-full bg-[#0B0B0B] border border-surface-border text-white px-4 py-3 rounded focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all font-display text-sm placeholder-gray-600" type="text" value="NEXUS_OPERATOR" />
                                            <span class="material-symbols-outlined absolute right-3 top-3 text-gray-600 text-lg">badge</span>
                                        </div>
                                    </div>
                                    <div class="space-y-2">
                                        <label class="text-xs font-mono text-gray-400 uppercase tracking-wider">Email Address</label>
                                        <div class="relative">
                                            <input class="w-full bg-[#0B0B0B] border border-surface-border text-white px-4 py-3 rounded focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all font-display text-sm placeholder-gray-600" type="email" value="operator@hexcore.sys" />
                                            <span class="material-symbols-outlined absolute right-3 top-3 text-gray-600 text-lg">mail</span>
                                        </div>
                                    </div>
                                    <div class="space-y-2">
                                        <label class="text-xs font-mono text-gray-400 uppercase tracking-wider">Full Name</label>
                                        <div class="relative">
                                            <input class="w-full bg-[#0B0B0B] border border-surface-border text-white px-4 py-3 rounded focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all font-display text-sm placeholder-gray-600" type="text" value="Alex Chen" />
                                            <span class="material-symbols-outlined absolute right-3 top-3 text-gray-600 text-lg">person</span>
                                        </div>
                                    </div>
                                    <div class="space-y-2">
                                        <label class="text-xs font-mono text-gray-400 uppercase tracking-wider">Phone Number</label>
                                        <div class="relative">
                                            <input class="w-full bg-[#0B0B0B] border border-surface-border text-white px-4 py-3 rounded focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all font-display text-sm placeholder-gray-600" type="tel" value="+1 (555) 000-894X" />
                                            <span class="material-symbols-outlined absolute right-3 top-3 text-gray-600 text-lg">call</span>
                                        </div>
                                    </div>

                                    <div class="space-y-2">
                                        <label class="text-xs font-mono text-gray-400 uppercase tracking-wider">Address Line One</label>
                                        <div class="relative">
                                            <input class="w-full bg-[#0B0B0B] border border-surface-border text-white px-4 py-3 rounded focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all font-display text-sm placeholder-gray-600" type="text" value="Alex Chen" />
                                            <!-- <span class="material-symbols-outlined absolute right-3 top-3 text-gray-600 text-lg">person</span> -->
                                        </div>
                                    </div>

                                    <div class="space-y-2">
                                        <label class="text-xs font-mono text-gray-400 uppercase tracking-wider">Address Line Two</label>
                                        <div class="relative">
                                            <input class="w-full bg-[#0B0B0B] border border-surface-border text-white px-4 py-3 rounded focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all font-display text-sm placeholder-gray-600" type="text" value="Alex Chen" />
                                            <!-- <span class="material-symbols-outlined absolute right-3 top-3 text-gray-600 text-lg">person</span> -->
                                        </div>
                                    </div>

                                    <div class="space-y-2">
                                        <label class="text-xs font-mono text-gray-400 uppercase tracking-wider">City</label>
                                        <div class="relative">
                                            <select class="w-full appearance-none bg-[#0B0B0B] border border-surface-border text-white px-4 py-3 rounded focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all font-display text-sm cursor-pointer">
                                                <option value="" disabled selected>Select a city</option>
                                                <option value="ny">New York</option>
                                                <option value="lon">London</option>
                                                <option value="tok">Tokyo</option>
                                                <option value="col">Colombo</option>
                                            </select>

                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-400">
                                                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-span-1 md:col-span-2 space-y-2">
                                        <label class="text-xs font-mono text-gray-400 uppercase tracking-wider">Bio / Signature</label>
                                        <textarea class="w-full bg-[#0B0B0B] border border-surface-border text-white px-4 py-3 rounded focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all font-display text-sm placeholder-gray-600 h-24 resize-none">System architect and hardware enthusiast. Building the future one core at a time.</textarea>
                                    </div>
                                </div>
                                <div class="mt-8 flex justify-end">
                                    <button class="bg-primary hover:bg-red-600 text-white font-bold py-2.5 px-6 rounded text-sm tracking-wide shadow-glow transition-all flex items-center gap-2">
                                        <span class="material-symbols-outlined text-lg">save</span>
                                        SAVE CHANGES
                                    </button>
                                </div>
                            </div>
                            <!-- Security Section -->
                            <div class="bg-surface-dark border border-surface-border rounded-lg p-6 lg:p-8">
                                <div class="flex items-center gap-2 mb-1 text-primary">
                                    <span class="material-symbols-outlined">security</span>
                                    <h3 class="text-lg font-bold text-white">SECURITY PROTOCOLS</h3>
                                </div>
                                <p class="text-gray-500 text-sm mb-6">Manage login methods and device access.</p>
                                <div class="flex flex-col gap-4">
                                    <!-- 2FA Toggle -->
                                    <!-- <div class="flex items-center justify-between p-4 border border-surface-border rounded bg-[#0B0B0B]">
                                        <div>
                                            <h4 class="text-white font-bold text-sm">Two-Factor Authentication</h4>
                                            <p class="text-xs text-gray-500 mt-1">Secure your account with HexGuard™ 2FA.</p>
                                        </div>
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input checked="" class="sr-only peer" type="checkbox" value="" />
                                            <div class="w-11 h-6 bg-gray-700 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                                        </label>
                                    </div> -->
                                    <!-- Change Password -->
                                    <div class="flex items-center justify-between p-4 border border-surface-border rounded bg-[#0B0B0B]">
                                        <div>
                                            <h4 class="text-white font-bold text-sm">Password</h4>
                                            <p class="text-xs text-gray-500 mt-1">Last changed: 30 days ago</p>
                                        </div>
                                        <button onclick="window.location='fogot_password.php'" class="text-xs font-bold text-primary border border-primary/30 px-3 py-2 rounded hover:bg-primary/10 transition-colors">
                                            UPDATE KEY
                                        </button>
                                    </div>
                                    <!-- Recent Devices -->
                                    <!-- <div class="mt-4">
                                        <h4 class="text-xs font-mono text-gray-400 uppercase tracking-wider mb-3">Active Sessions</h4>
                                        <div class="space-y-2">
                                            <div class="flex items-center justify-between text-sm text-gray-300 p-2 hover:bg-white/5 rounded">
                                                <div class="flex items-center gap-3">
                                                    <span class="material-symbols-outlined text-gray-500">laptop_windows</span>
                                                    <div class="flex flex-col">
                                                        <span>Windows 11 PC - Chrome</span>
                                                        <span class="text-[10px] text-gray-500 font-mono">192.168.1.1 • Current Session</span>
                                                    </div>
                                                </div>
                                                <span class="text-xs text-green-500">Active</span>
                                            </div>
                                            <div class="flex items-center justify-between text-sm text-gray-300 p-2 hover:bg-white/5 rounded">
                                                <div class="flex items-center gap-3">
                                                    <span class="material-symbols-outlined text-gray-500">smartphone</span>
                                                    <div class="flex flex-col">
                                                        <span>iPhone 14 - Safari</span>
                                                        <span class="text-[10px] text-gray-500 font-mono">10.0.0.5 • 2 hrs ago</span>
                                                    </div>
                                                </div>
                                                <button class="text-xs text-red-400 hover:text-red-300">Revoke</button>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <footer class="mt-12 mb-4 border-t border-surface-border pt-6 flex flex-col md:flex-row justify-between items-center text-xs text-gray-600">
                    <p>© 2024 HEXCORE SYSTEMS. All rights reserved.</p>
                    <div class="flex gap-4 mt-2 md:mt-0 font-mono">
                        <a class="hover:text-primary" href="#">PRIVACY_PROTOCOL</a>
                        <a class="hover:text-primary" href="#">TERMS_OF_SERVICE</a>
                        <a class="hover:text-primary" href="#">STATUS_PAGE</a>
                    </div>
                </footer>
            </div>
        </main>
    </div>
    <!-- Decorative Corner Elements -->
    <div class="fixed bottom-4 right-4 z-50 pointer-events-none hidden lg:block">
        <div class="flex gap-1">
            <div class="w-2 h-8 bg-primary/20"></div>
            <div class="w-2 h-6 bg-primary/40"></div>
            <div class="w-2 h-4 bg-primary/60"></div>
            <div class="w-2 h-2 bg-primary"></div>
        </div>
    </div>
</body>

</html>