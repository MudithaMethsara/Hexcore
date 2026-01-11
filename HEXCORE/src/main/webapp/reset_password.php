<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>HEXCORE - Reset Password</title>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Noto+Sans:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#FF1E1E",
                        "primary-dark": "#B11226",
                        "background-light": "#1a1a1a", // Not really used but needed for config
                        "background-dark": "#0B0B0B",
                        "surface-dark": "#121212",
                    },
                    fontFamily: {
                        "display": ["Space Grotesk", "sans-serif"],
                        "body": ["Noto Sans", "sans-serif"],
                    },
                    backgroundImage: {
                        'cyber-grid': "linear-gradient(rgba(255, 30, 30, 0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 30, 30, 0.03) 1px, transparent 1px)",
                    }
                },
            },
        }
    </script>
<style>
        .cyber-glow {
            box-shadow: 0 0 20px rgba(255, 30, 30, 0.15);
        }
        .cyber-input:focus-within {
            box-shadow: 0 0 15px rgba(255, 30, 30, 0.3);
            border-color: #FF1E1E;
        }
        .glitch-effect::before {
            content: attr(data-text);
            position: absolute;
            left: -2px;
            text-shadow: 1px 0 #FF1E1E;
            top: 0;
            color: white;
            background: #0B0B0B;
            overflow: hidden;
            clip: rect(0, 900px, 0, 0);
            animation: noise-anim-2 3s infinite linear alternate-reverse;
        }
    </style>
</head>
<body class="font-display bg-background-light dark:bg-background-dark text-white min-h-screen flex flex-col relative overflow-hidden">
<!-- Background Elements -->
<div class="absolute inset-0 z-0 bg-cyber-grid bg-[length:40px_40px] pointer-events-none opacity-50"></div>
<div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-primary to-transparent opacity-75"></div>
<div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-primary/5 rounded-full blur-[100px] pointer-events-none"></div>
<!-- Main Content -->
<main class="relative z-10 flex-1 flex items-center justify-center p-4 sm:p-6 lg:p-8">
<div class="w-full max-w-md">
<!-- Brand Logo Area -->
<div class="flex justify-center mb-8">
<div class="flex items-center gap-2 group cursor-default">
<span class="material-symbols-outlined text-primary text-4xl animate-pulse">hexagon</span>
<h1 class="text-3xl font-bold tracking-widest text-white">HEX<span class="text-primary">CORE</span></h1>
</div>
</div>
<!-- Card Container -->
<div class="bg-[#121212]/90 backdrop-blur-sm border border-[#2a2a2a] rounded-xl shadow-2xl overflow-hidden relative group/card">
<!-- Decorative accent line -->
<div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-primary via-primary-dark to-transparent opacity-0 group-hover/card:opacity-100 transition-opacity duration-500"></div>
<div class="p-8 flex flex-col gap-6">
<!-- Header -->
<div class="text-center">
<h2 class="text-2xl font-bold tracking-wider text-white mb-2 uppercase">Reset Credentials</h2>
<p class="text-gray-400 text-sm font-normal">Enter a new secure key for your account.</p>
</div>
<!-- Form -->
<form class="flex flex-col gap-5" onsubmit="event.preventDefault();">
<!-- New Password Field -->
<div class="space-y-2">
<label class="block text-xs font-semibold uppercase tracking-wider text-gray-500 ml-1" for="new-password">New Secure Key</label>
<div class="cyber-input flex items-center w-full bg-[#1e1e1e] border border-[#333] rounded-lg transition-all duration-300 group-focus-within:border-primary">
<span class="material-symbols-outlined text-gray-500 pl-4">lock</span>
<input class="w-full bg-transparent border-none text-white placeholder-gray-600 focus:ring-0 px-4 py-3.5 text-sm font-medium" id="new-password" placeholder="Enter new password" type="password"/>
<button class="pr-4 text-gray-500 hover:text-white transition-colors focus:outline-none" type="button">
<span class="material-symbols-outlined text-xl">visibility</span>
</button>
</div>
</div>
<!-- Password Strength -->
<div class="space-y-2">
<div class="flex justify-between items-center px-1">
<span class="text-xs text-gray-500 font-medium">SECURITY LEVEL</span>
<span class="text-xs text-primary font-bold">MODERATE</span>
</div>
<div class="h-1.5 w-full bg-[#2a2a2a] rounded-full overflow-hidden flex gap-0.5">
<div class="h-full w-1/4 bg-primary rounded-full shadow-[0_0_10px_rgba(255,30,30,0.8)]"></div>
<div class="h-full w-1/4 bg-primary rounded-full shadow-[0_0_10px_rgba(255,30,30,0.8)]"></div>
<div class="h-full w-1/4 bg-[#333] rounded-full"></div>
<div class="h-full w-1/4 bg-[#333] rounded-full"></div>
</div>
<p class="text-[11px] text-gray-500 px-1 mt-1">Use 8+ characters with a mix of letters, numbers &amp; symbols.</p>
</div>
<!-- Confirm Password Field -->
<div class="space-y-2">
<label class="block text-xs font-semibold uppercase tracking-wider text-gray-500 ml-1" for="confirm-password">Confirm Key</label>
<div class="cyber-input flex items-center w-full bg-[#1e1e1e] border border-[#333] rounded-lg transition-all duration-300">
<span class="material-symbols-outlined text-gray-500 pl-4">lock_reset</span>
<input class="w-full bg-transparent border-none text-white placeholder-gray-600 focus:ring-0 px-4 py-3.5 text-sm font-medium" id="confirm-password" placeholder="Re-enter password" type="password"/>
<button class="pr-4 text-gray-500 hover:text-white transition-colors focus:outline-none" type="button">
<span class="material-symbols-outlined text-xl">visibility_off</span>
</button>
</div>
</div>
<!-- Submit Button -->
<button class="relative w-full group mt-2 overflow-hidden rounded-lg bg-primary hover:bg-[#ff3333] transition-all duration-300 h-12 shadow-[0_0_15px_rgba(255,30,30,0.3)] hover:shadow-[0_0_25px_rgba(255,30,30,0.6)]">
<div class="absolute inset-0 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10"></div>
<div class="relative flex items-center justify-center gap-2">
<span class="font-bold tracking-[0.1em] text-white">INITIALIZE RESET</span>
<span class="material-symbols-outlined text-white text-lg group-hover:translate-x-1 transition-transform">chevron_right</span>
</div>
</button>
</form>
</div>
<!-- Card Footer -->
<div class="bg-[#0e0e0e] px-8 py-4 border-t border-[#2a2a2a] flex justify-center">
<a class="text-xs text-gray-500 hover:text-primary transition-colors flex items-center gap-1 group/link" href="#">
<span class="material-symbols-outlined text-sm group-hover/link:-translate-x-1 transition-transform">arrow_back</span>
                        ABORT AND RETURN TO LOGIN
                    </a>
</div>
</div>
<!-- Bottom decorative text -->
<div class="mt-8 text-center opacity-30">
<p class="text-[10px] uppercase tracking-[0.2em] font-mono">System ID: HEX-9021-X</p>
</div>
</div>
</main>
</body></html>