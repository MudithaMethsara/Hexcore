<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>HEXCORE // Verification</title>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f22c2c",
                        "background-light": "#f8f5f5",
                        "background-dark": "#0B0B0B",
                        "surface-dark": "#161616",
                        "border-cyber": "#331E1E"
                    },
                    fontFamily: {
                        "display": ["Space Grotesk", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                    backgroundImage: {
                        'cyber-grid': "linear-gradient(rgba(242, 44, 44, 0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(242, 44, 44, 0.03) 1px, transparent 1px)",
                    }
                },
            },
        }
    </script>
<style>
        .cyber-glitch-text {
            text-shadow: 2px 0 rgba(242, 44, 44, 0.5), -2px 0 rgba(0, 255, 255, 0.3);
        }
        .scanline {
            background: linear-gradient(to bottom, rgba(255,255,255,0), rgba(255,255,255,0) 50%, rgba(0,0,0,0.2) 50%, rgba(0,0,0,0.2));
            background-size: 100% 4px;
            pointer-events: none;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display min-h-screen flex flex-col relative overflow-hidden">
<!-- Background Grid Effect -->
<div class="absolute inset-0 bg-cyber-grid bg-[length:40px_40px] pointer-events-none opacity-20"></div>
<!-- Top Navigation -->
<header class="flex items-center justify-between border-b border-primary/20 bg-surface-dark/80 backdrop-blur-md px-6 py-4 relative z-10">
<div class="flex items-center gap-3 text-white">
<div class="flex items-center justify-center size-8 bg-primary/10 border border-primary/40 rounded">
<span class="material-symbols-outlined text-primary">hexagon</span>
</div>
<h2 class="text-white text-xl font-bold tracking-[0.1em] cyber-glitch-text">HEXCORE</h2>
</div>
<div class="flex items-center gap-4 text-xs font-mono text-gray-400">
<span class="hidden sm:block">STATUS: <span class="text-primary animate-pulse">SECURE</span></span>
<span class="material-symbols-outlined text-gray-500">wifi</span>
</div>
</header>
<!-- Main Content Area -->
<main class="flex-1 flex items-center justify-center p-4 relative z-10">
<!-- Center Card -->
<div class="w-full max-w-lg bg-surface-dark border border-primary/30 shadow-[0_0_30px_-5px_rgba(242,44,44,0.15)] rounded-lg relative overflow-hidden">
<!-- Decorative Top Bar -->
<div class="h-1 w-full bg-gradient-to-r from-transparent via-primary to-transparent"></div>
<div class="p-8 md:p-12 flex flex-col items-center">
<!-- Icon -->
<div class="mb-8 relative">
<div class="absolute inset-0 bg-primary/20 blur-xl rounded-full"></div>
<div class="relative bg-background-dark border border-primary/50 size-20 rounded-full flex items-center justify-center shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-primary text-4xl">mark_email_read</span>
</div>
</div>
<!-- Headline -->
<h1 class="text-white tracking-widest text-2xl md:text-3xl font-bold leading-tight text-center mb-4 uppercase">
                    System Lock // Verify Identity
                </h1>
<!-- Body Text -->
<p class="text-gray-400 text-center text-sm md:text-base mb-8 max-w-sm leading-relaxed">
                    A secure access signal has been transmitted to <span class="text-white font-medium">user@hexcore.net</span>. <br/>Engage the link in your inbox to unlock the mainframe.
                </p>
<!-- 6-Digit Code Placeholder (Visual Only as per context) -->
<div class="w-full bg-black/50 border border-primary/20 rounded p-4 mb-8 flex flex-col items-center gap-3">
<div class="flex w-full justify-between items-center px-2">
<span class="text-[10px] text-primary tracking-widest uppercase">Encryption Key</span>
<span class="text-[10px] text-gray-500 font-mono">256-BIT</span>
</div>
<div class="flex gap-2 sm:gap-4 text-2xl sm:text-3xl font-mono text-white tracking-widest">
<div class="bg-surface-dark border border-gray-700 w-10 h-12 flex items-center justify-center rounded text-gray-500">-</div>
<div class="bg-surface-dark border border-gray-700 w-10 h-12 flex items-center justify-center rounded text-gray-500">-</div>
<div class="bg-surface-dark border border-gray-700 w-10 h-12 flex items-center justify-center rounded text-gray-500">-</div>
<div class="text-gray-600 flex items-center">-</div>
<div class="bg-surface-dark border border-gray-700 w-10 h-12 flex items-center justify-center rounded text-gray-500">-</div>
<div class="bg-surface-dark border border-gray-700 w-10 h-12 flex items-center justify-center rounded text-gray-500">-</div>
<div class="bg-surface-dark border border-gray-700 w-10 h-12 flex items-center justify-center rounded text-gray-500">-</div>
</div>
</div>
<!-- Progress Bar / Status -->
<div class="w-full flex flex-col gap-2 mb-8">
<div class="flex justify-between items-end">
<span class="text-primary text-xs font-bold tracking-widest">ESTABLISHING CONNECTION...</span>
<span class="text-white text-xs font-mono">35%</span>
</div>
<div class="h-1 w-full bg-gray-800 rounded-full overflow-hidden">
<div class="h-full bg-primary w-[35%] shadow-[0_0_10px_rgba(242,44,44,0.8)]"></div>
</div>
</div>
<!-- Actions -->
<div class="flex flex-col w-full gap-4">
<button class="w-full bg-primary hover:bg-red-600 text-white font-bold py-3 px-6 rounded transition-all duration-300 transform hover:scale-[1.01] uppercase tracking-wide text-sm flex items-center justify-center gap-2 shadow-[0_4px_14px_0_rgba(242,44,44,0.39)]">
<span class="material-symbols-outlined text-lg">open_in_new</span>
                        Open Email Client
                    </button>
<button class="w-full bg-transparent border border-gray-700 hover:border-primary/50 text-gray-400 hover:text-white font-medium py-3 px-6 rounded transition-colors duration-300 uppercase tracking-wide text-xs flex items-center justify-center gap-2 group">
<span class="material-symbols-outlined text-lg group-hover:rotate-180 transition-transform duration-500">refresh</span>
                        Resend Transmision
                    </button>
</div>
<!-- Footer Link -->
<div class="mt-6 pt-6 border-t border-dashed border-gray-800 w-full text-center">
<a class="text-xs text-gray-500 hover:text-primary transition-colors flex items-center justify-center gap-1" href="#">
<span class="material-symbols-outlined text-sm">arrow_back</span>
                        Return to Login // Modify Identity
                    </a>
</div>
</div>
<!-- Corner Accents -->
<div class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-primary/40 rounded-tl-lg"></div>
<div class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-primary/40 rounded-br-lg"></div>
</div>
</main>
<!-- Footer Status Bar -->
<footer class="border-t border-primary/10 bg-surface-dark/50 backdrop-blur-sm px-6 py-2 relative z-10">
<div class="flex justify-between items-center text-[10px] text-gray-600 font-mono uppercase tracking-widest">
<div>SYS.VER: 4.0.2</div>
<div class="flex items-center gap-2">
<div class="size-1.5 rounded-full bg-green-500 animate-pulse"></div>
                SERVER: ONLINE
            </div>
<div>HEXCORE © 2024</div>
</div>
</footer>
<!-- Scanline Overlay -->
<div class="fixed inset-0 pointer-events-none scanline opacity-20 z-50"></div>
</body></html>