<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>HEXCORE // Sign In</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#ff1f1f",
                        "primary-dark": "#b11226",
                        "background-light": "#f8f5f5",
                        "background-dark": "#0B0B0B", // Deep void black
                        "surface-dark": "#141414",
                        "border-dark": "#3a2727",
                    },
                    fontFamily: {
                        "display": ["Space Grotesk", "sans-serif"],
                        "body": ["Space Grotesk", "sans-serif"],
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    boxShadow: {
                        'glow': '0 0 15px rgba(255, 31, 31, 0.3)',
                        'glow-hover': '0 0 25px rgba(255, 31, 31, 0.6)',
                    }
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Space Grotesk', sans-serif;
        }

        .cyber-grid {
            background-size: 40px 40px;
            background-image: linear-gradient(to right, rgba(50, 20, 20, 0.1) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(50, 20, 20, 0.1) 1px, transparent 1px);
            mask-image: radial-gradient(circle at center, black 40%, transparent 100%);
        }

        .clip-corner-br {
            clip-path: polygon(100% 0, 100% calc(100% - 10px), calc(100% - 10px) 100%, 0 100%, 0 0);
        }

        .input-focus-ring:focus-within {
            box-shadow: 0 0 0 1px #ff1f1f, 0 0 8px rgba(255, 31, 31, 0.4);
        }
    </style>
</head>

<body class="bg-background-dark text-white min-h-screen flex flex-col overflow-hidden relative selection:bg-primary selection:text-white">
    <!-- Background Effects -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute inset-0 cyber-grid opacity-50"></div>
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-3xl h-64 bg-primary/10 blur-[100px] rounded-full opacity-30"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-primary-dark/5 blur-[80px] rounded-full"></div>
    </div>
    <!-- Navigation (Minimal) -->
   
    <?php include "addons/header.php"?>

    <!-- Main Content -->
    <main class="flex-1 flex items-center justify-center relative z-10 px-4 py-12">
        <div class="w-full max-w-[460px] relative group/card">
            <!-- Decorative Border Accents -->
            <div class="absolute -top-2 -left-2 w-6 h-6 border-t-2 border-l-2 border-primary/50 group-hover/card:border-primary transition-colors duration-500"></div>
            <div class="absolute -bottom-2 -right-2 w-6 h-6 border-b-2 border-r-2 border-primary/50 group-hover/card:border-primary transition-colors duration-500"></div>
            <div class="absolute -top-2 -right-2 w-2 h-2 bg-primary/30"></div>
            <div class="absolute -bottom-2 -left-2 w-2 h-2 bg-primary/30"></div>
            <!-- Card Container -->
            <div class="bg-surface-dark border border-border-dark p-8 md:p-10 shadow-2xl backdrop-blur-sm relative overflow-hidden clip-corner-br">
                <!-- Status Bar -->
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-primary/50 to-transparent opacity-50"></div>
                <!-- Header -->
                <div class="text-center mb-10">
                    <h1 class="text-3xl font-bold tracking-tighter text-white mb-2">FOGOT PASSWORD</h1>
                    <div class="flex items-center justify-center gap-2">
                        <span class="w-1.5 h-1.5 bg-primary rounded-full animate-pulse"></span>
                        <p class="text-gray-400 text-sm tracking-widest uppercase">Enter Your Email</p>
                        <span class="w-1.5 h-1.5 bg-primary rounded-full animate-pulse"></span>
                    </div>
                </div>
                <!-- Form -->
                <form class="flex flex-col gap-6">
                    <!-- Username Field -->
                    <div class="space-y-2 group/input">
                        <label class="text-xs font-bold text-gray-500 tracking-wider ml-1 group-focus-within/input:text-primary transition-colors">EMAIL</label>
                        <div class="relative flex items-center input-focus-ring transition-all duration-300 bg-[#0f0f0f] border border-[#2a2a2a] rounded overflow-hidden">
                            <span class="pl-4 text-gray-500 material-symbols-outlined text-[20px]">person</span>
                            <input class="w-full bg-transparent border-none text-white placeholder-gray-600 focus:ring-0 h-12 px-3 text-sm font-medium tracking-wide" placeholder="Email" type="text" />
                            <div class="absolute right-0 top-0 h-full w-1 bg-primary scale-y-0 group-focus-within/input:scale-y-100 transition-transform origin-bottom duration-300"></div>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <button class="relative w-full h-12 mt-4 bg-primary text-white font-bold tracking-[0.15em] text-sm uppercase overflow-hidden group/btn hover:shadow-glow hover:-translate-y-0.5 transition-all duration-300 rounded clip-corner-br">
                        <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover/btn:animate-[shimmer_1s_infinite]"></div>
                        <span class="relative z-10 flex items-center justify-center gap-2">
                            Send Mail
                            <span class="material-symbols-outlined text-lg group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
                        </span>
                    </button>
                </form>
                <!-- Divider -->
                <div class="relative my-8 h-px bg-[#2a2a2a]">
                    <div class="absolute left-1/2 -translate-x-1/2 -top-2.5 bg-surface-dark px-3 text-[10px] text-gray-600 font-bold uppercase tracking-widest border border-[#2a2a2a] rounded">
                        Or Connect Via
                    </div>
                </div>
                <!-- Social Login -->
                <div class="grid grid-cols-3 gap-3">
                    <button class="h-10 border border-[#2a2a2a] bg-[#0f0f0f] rounded hover:border-primary/50 hover:bg-[#1a1a1a] transition-all flex items-center justify-center group">
                        <span class="material-symbols-outlined text-gray-500 group-hover:text-white text-xl">stadia_controller</span>
                    </button>
                    <button class="h-10 border border-[#2a2a2a] bg-[#0f0f0f] rounded hover:border-primary/50 hover:bg-[#1a1a1a] transition-all flex items-center justify-center group">
                        <span class="material-symbols-outlined text-gray-500 group-hover:text-white text-xl">rocket_launch</span>
                    </button>
                    <button class="h-10 border border-[#2a2a2a] bg-[#0f0f0f] rounded hover:border-primary/50 hover:bg-[#1a1a1a] transition-all flex items-center justify-center group">
                        <span class="material-symbols-outlined text-gray-500 group-hover:text-white text-xl">terminal</span>
                    </button>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer Status -->
    <footer class="relative z-10 w-full py-4 text-center border-t border-[#1a1a1a] bg-black/40 backdrop-blur-md">
        <div class="flex items-center justify-center gap-6 text-[10px] uppercase tracking-widest text-gray-600 font-medium">
            <span class="flex items-center gap-1.5"><span class="size-1.5 rounded-full bg-emerald-500 shadow-[0_0_5px_rgba(16,185,129,0.5)]"></span> Server Online</span>
            <span class="hidden sm:inline">v.4.0.2 // Build 2024</span>
            <span class="flex items-center gap-1.5"><span class="material-symbols-outlined text-[12px]">shield</span> Secure Connection</span>
        </div>
    </footer>
</body>

</html>