<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>HEXCORE - Premium Custom PCs</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link
            href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap"
            rel="stylesheet"/>
    <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet"/>
    <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet"/>
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Tailwind Config -->
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
                        "text-muted": "#888888",
                    },
                    fontFamily: {
                        "display": ["Space Grotesk", "sans-serif"],
                        "body": ["Noto Sans", "sans-serif"],
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                    backgroundImage: {
                        'cyber-grid': "linear-gradient(rgba(255, 31, 31, 0.05) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 31, 31, 0.05) 1px, transparent 1px)",
                    }
                },
            },
        }
    </script>
    <style>
        /* Custom Utilities for Cyberpunk Feel */
        .cyber-clip {
            clip-path: polygon(10px 0, 100% 0, 100% calc(100% - 10px), calc(100% - 10px) 100%, 0 100%, 0 10px);
        }

        .cyber-clip-btn {
            clip-path: polygon(8px 0, 100% 0, 100% calc(100% - 8px), calc(100% - 8px) 100%, 0 100%, 0 8px);
        }

        .text-glow {
            text-shadow: 0 0 20px rgba(255, 31, 31, 0.5);
        }

        .btn-glow:hover {
            box-shadow: 0 0 25px rgba(255, 31, 31, 0.4);
        }
    </style>

    <script src="js/header.js"></script>
    <script src="js/footer.js"></script>

</head>

<body
        class="bg-background-light dark:bg-background-dark font-display text-gray-900 dark:text-white antialiased selection:bg-primary selection:text-white">
<div class="relative min-h-screen flex flex-col overflow-x-hidden">
    <!-- Top Navigation -->

    <header>
        <header-content>
        </header-content>
    </header>

    <!-- Hero Section -->
    <section
            class="relative flex min-h-[85vh] w-full items-center justify-center overflow-hidden border-b border-white/5 bg-background-dark">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <div
                    class="absolute inset-0 bg-gradient-to-t from-background-dark via-background-dark/80 to-transparent z-10">
            </div>
            <div
                    class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-primary/10 via-transparent to-transparent z-10 opacity-40">
            </div>
            <div class="h-full w-full bg-cover bg-center object-cover opacity-60"
                 data-alt="Futuristic gaming setup with red neon lighting"
                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBT1QeTXyiwka5UIjGWo3uO4IEagxZiK-bUmtXJANXRdMDZjI8I4VrIwZg8OizVWe7QlRKZjEtpTNqsGLgFPTOr3Hc23y8i5jaCO5fYE3XOu6IdsnW2RXVuYQBcXB-l5T8w9V3ree4jIR_0c8vmP8fSf4lnxPxdPzbjSFVwqv7evJAo5MeEo4B6lr4oVCjhVpGzSeSG82oAk3eqLHzhbvlLnxwJfRErKWG-4jeI1yQJJxWxHVWIwbU9Z4rV5NF3yPDQqj2EQm4aXiM');">
            </div>
        </div>
        <!-- Content -->
        <div class="relative z-20 container mx-auto px-4 text-center sm:px-6 lg:px-8">
            <div class="mx-auto max-w-4xl flex flex-col items-center gap-6">
                <div
                        class="inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-3 py-1 backdrop-blur-sm">
                        <span class="relative flex h-2 w-2">
                            <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                        </span>
                    <span class="text-xs font-medium text-primary tracking-wider uppercase">Next Gen Systems
                            Live</span>
                </div>
                <h1
                        class="font-display text-5xl font-bold uppercase leading-tight tracking-tighter text-white sm:text-7xl lg:text-8xl text-glow">
                    Dominance <br/> <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-500">Redefined</span>
                </h1>
                <p class="mx-auto max-w-2xl text-lg text-gray-300 sm:text-xl">
                    Precision-engineered liquid-cooled rigs for the elite. Experience unthrottled performance with
                    HEXCORE's signature aggressive aesthetics.
                </p>
                <div class="mt-8 flex flex-col gap-4 sm:flex-row w-full justify-center">
                    <button
                            class="cyber-clip-btn group relative flex h-14 w-full min-w-[200px] items-center justify-center bg-primary px-8 text-base font-bold text-white transition-all hover:bg-primary/90 btn-glow sm:w-auto">
                        <span>SHOP PRE-BUILTS</span>
                        <span
                                class="material-symbols-outlined ml-2 transition-transform group-hover:translate-x-1">arrow_forward</span>
                    </button>
                    <button
                            class="cyber-clip-btn group relative flex h-14 w-full min-w-[200px] items-center justify-center border border-white/20 bg-white/5 px-8 text-base font-bold text-white backdrop-blur-sm transition-all hover:bg-white/10 hover:border-primary/50 sm:w-auto">
                        <span>CUSTOM BUILDER</span>
                        <span class="material-symbols-outlined ml-2">build</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Decorative Elements -->
        <div
                class="absolute bottom-0 left-0 h-px w-full bg-gradient-to-r from-transparent via-primary/50 to-transparent">
        </div>
        <div class="absolute bottom-0 left-1/4 h-32 w-px bg-gradient-to-t from-primary/30 to-transparent"></div>
        <div class="absolute bottom-0 right-1/4 h-20 w-px bg-gradient-to-t from-primary/30 to-transparent"></div>
    </section>
    <!-- Brand Strip -->
    <div class="w-full border-b border-white/5 bg-surface-dark py-8">
        <div class="container mx-auto px-4">
            <p class="text-center text-xs font-medium uppercase tracking-widest text-gray-500 mb-6">Powered by
                industry leaders</p>
            <div
                    class="flex flex-wrap justify-center items-center gap-12 opacity-50 grayscale transition-all hover:grayscale-0 hover:opacity-100">
                <!-- Simple text representations for brands to avoid external SVGs that might break, simulating logos -->
                <span class="text-xl font-bold tracking-tighter text-white">NVIDIA</span>
                <span class="text-xl font-bold tracking-tighter text-white">INTEL</span>
                <span class="text-xl font-bold tracking-tighter text-white">AMD</span>
                <span class="text-xl font-bold tracking-tighter text-white">ASUS ROG</span>
                <span class="text-xl font-bold tracking-tighter text-white">CORSAIR</span>
            </div>
        </div>
    </div>
    <!-- Features Grid -->
    <section class="py-24 bg-background-dark relative">
        <div class="absolute inset-0 bg-[size:40px_40px] bg-cyber-grid opacity-20 pointer-events-none"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="mb-16 md:text-center max-w-3xl mx-auto">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">ENGINEERED PERFECTION</h2>
                <p class="mt-4 text-lg text-text-muted">Every HEXCORE machine is hand-assembled, stress-tested, and
                    optimized for maximum framerates out of the box.</p>
            </div>
            <div class="grid gap-8 md:grid-cols-3">
                <!-- Feature 1 -->
                <div
                        class="group relative rounded-xl border border-white/10 bg-surface-dark p-8 transition-all hover:border-primary/50 hover:bg-surface-highlight">
                    <div
                            class="mb-4 inline-flex rounded-lg bg-primary/10 p-3 text-primary ring-1 ring-inset ring-primary/20 group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-3xl">ac_unit</span>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-white">Cryo-Cooled Architecture</h3>
                    <p class="text-text-muted">Advanced airflow dynamics and custom AIO liquid solutions keep your
                        components frosty under heavy loads.</p>
                </div>
                <!-- Feature 2 -->
                <div
                        class="group relative rounded-xl border border-white/10 bg-surface-dark p-8 transition-all hover:border-primary/50 hover:bg-surface-highlight">
                    <div
                            class="mb-4 inline-flex rounded-lg bg-primary/10 p-3 text-primary ring-1 ring-inset ring-primary/20 group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-3xl">cable</span>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-white">Cable Zero Aesthetic</h3>
                    <p class="text-text-muted">Obsessive cable management ensures unobstructed airflow and a
                        showroom-ready look through tempered glass.</p>
                </div>
                <!-- Feature 3 -->
                <div
                        class="group relative rounded-xl border border-white/10 bg-surface-dark p-8 transition-all hover:border-primary/50 hover:bg-surface-highlight">
                    <div
                            class="mb-4 inline-flex rounded-lg bg-primary/10 p-3 text-primary ring-1 ring-inset ring-primary/20 group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-3xl">speed</span>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-white">Factory Overclocked</h3>
                    <p class="text-text-muted">Professionally tuned BIOS profiles on CPU and GPU to squeeze every
                        last drop of performance safely.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Showcase (Pricing Cards) -->
    <section class="py-24 bg-surface-dark border-y border-white/5">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                <div>
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl mb-2">ELITE SERIES</h2>
                    <p class="text-text-muted">Choose your weapon. All systems ship within 48 hours.</p>
                </div>
                <a class="text-primary font-bold hover:text-white transition-colors flex items-center gap-1 group"
                   href="#">
                    View All Systems <span
                            class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward_ios</span>
                </a>
            </div>
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <!-- Product 1: Phantom -->
                <div
                        class="cyber-clip flex flex-col bg-background-dark border border-white/10 hover:border-primary/50 transition-all duration-300 group">
                    <div class="relative h-64 w-full overflow-hidden bg-gray-800">
                        <div
                                class="absolute top-4 right-4 z-10 bg-primary px-3 py-1 text-xs font-bold text-white cyber-clip-btn">
                            BEST SELLER
                        </div>
                        <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                             data-alt="Phantom series PC case with subtle blue lighting"
                             style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCz66lVMu3pE96SNY52vfxziClnJj503y8ObhJ5yNk_DQZc34gFjDfP8Xbsn-ZWijGVLwQ6T-vbaexsETcZQ7gK1T7Ji8a6kVW9vuLQ76Upet6d8BlmkAkTyn-4XUajNqHaItVW_ql509OrsHPErR1IiHHeTg3lJIIiP-AE1PiHd4YuYD-jG2XDkAKnAMmwPHGsAdVpRfv_ia9GrAE98dlQBmyV-kXAbliGz6AZnJjGxM0qX0O3_Ewh8BfcZocFlKpih8kXTwNgMz4');">
                        </div>
                    </div>
                    <div class="flex flex-1 flex-col p-6">
                        <h3 class="text-2xl font-bold text-white">PHANTOM</h3>
                        <p class="text-sm text-text-muted mb-4">Entry level dominance. 1080p Ultra gaming.</p>
                        <div class="mb-6 space-y-3">
                            <div class="flex items-center gap-3 text-sm text-gray-300">
                                <span class="material-symbols-outlined text-primary text-lg">memory</span>
                                <span>Intel Core i5-13600K</span>
                            </div>
                            <div class="flex items-center gap-3 text-sm text-gray-300">
                                <span class="material-symbols-outlined text-primary text-lg">videogame_asset</span>
                                <span>NVIDIA RTX 4060 Ti</span>
                            </div>
                            <div class="flex items-center gap-3 text-sm text-gray-300">
                                <span class="material-symbols-outlined text-primary text-lg">hard_drive</span>
                                <span>1TB NVMe Gen4 SSD</span>
                            </div>
                        </div>
                        <div class="mt-auto pt-6 border-t border-white/10 flex items-center justify-between">
                            <span class="text-2xl font-bold text-white">$1,499</span>
                            <button
                                    class="rounded bg-white/10 p-2 text-white hover:bg-primary hover:text-white transition-colors">
                                <span class="material-symbols-outlined">add_shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product 2: Spectre -->
                <div
                        class="cyber-clip flex flex-col bg-background-dark border border-white/10 hover:border-primary/50 transition-all duration-300 group relative">
                    <!-- Glow effect behind active card -->
                    <div
                            class="absolute -inset-0.5 bg-gradient-to-b from-primary to-transparent opacity-0 group-hover:opacity-20 transition duration-500 blur-lg">
                    </div>
                    <div class="relative h-64 w-full overflow-hidden bg-gray-800 z-10">
                        <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                             data-alt="Spectre series PC case with aggressive red lighting"
                             style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA6wLysHglO4PIPFnxZzBevCFm3iZvliYocFSjKYtYl3_G7mLROmhvS2dubDEM7_5cE_ZlWNBA5QTJo83DwQ5-_lgPQJuEelzUbMnYF9DR0aGMzlq4TUlQ5uTonyQ-kBMNVGH3YBEcTpftUI-Dqjj4z4LEcaDDgE7CxHrhxNUVwLW9yHGQ_XQyB8eNmvcW7cwFookmq4wLrD5nxvht5c7n1DDvw7MzS59xeD35bdBijy7JVBzWv4gbukn6M77oAY8IaPo72GQWI8H8');">
                        </div>
                    </div>
                    <div class="flex flex-1 flex-col p-6 z-10 bg-background-dark">
                        <h3 class="text-2xl font-bold text-white">SPECTRE</h3>
                        <p class="text-sm text-text-muted mb-4">The sweet spot. 1440p High Refresh Rate.</p>
                        <div class="mb-6 space-y-3">
                            <div class="flex items-center gap-3 text-sm text-gray-300">
                                <span class="material-symbols-outlined text-primary text-lg">memory</span>
                                <span>AMD Ryzen 7 7800X3D</span>
                            </div>
                            <div class="flex items-center gap-3 text-sm text-gray-300">
                                <span class="material-symbols-outlined text-primary text-lg">videogame_asset</span>
                                <span>NVIDIA RTX 4070 Ti Super</span>
                            </div>
                            <div class="flex items-center gap-3 text-sm text-gray-300">
                                <span class="material-symbols-outlined text-primary text-lg">water_drop</span>
                                <span>240mm AIO Liquid Cooler</span>
                            </div>
                        </div>
                        <div class="mt-auto pt-6 border-t border-white/10 flex items-center justify-between">
                            <span class="text-2xl font-bold text-white">$2,499</span>
                            <button
                                    class="rounded bg-primary p-2 text-white hover:bg-red-700 transition-colors shadow-[0_0_15px_rgba(255,31,31,0.4)]">
                                <span class="material-symbols-outlined">add_shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product 3: Demon -->
                <div
                        class="cyber-clip flex flex-col bg-background-dark border border-white/10 hover:border-primary/50 transition-all duration-300 group">
                    <div class="relative h-64 w-full overflow-hidden bg-gray-800">
                        <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                             data-alt="Demon series PC case with custom hard-line water cooling"
                             style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBhFB-Qn4KpoYeV5FuGsE5zzKXjoDktt2jJZ9zUP7v1XKtSNeeBEWj5R5Efbf57xfsC1IeoGY6MJsUsa3TWzpTWuFVdTd0UBMtu6XXXpNUMG57h57n8sqJeb5nOpLB8DJJtX5qXh0o24Re5AcDuxu9khH90onPV3nwzY69Rva0pec-JrJD4lklYeDZjDwp8kYM-SYLiG016j_vzuFxTqiwSDUEQV7XaQC4tYXbtaikaaToOKPczt8GJOf0Ym-90qjnKSC-fotBSm8I');">
                        </div>
                    </div>
                    <div class="flex flex-1 flex-col p-6">
                        <h3 class="text-2xl font-bold text-white">DEMON</h3>
                        <p class="text-sm text-text-muted mb-4">Unapologetic power. 4K Ray Tracing Monster.</p>
                        <div class="mb-6 space-y-3">
                            <div class="flex items-center gap-3 text-sm text-gray-300">
                                <span class="material-symbols-outlined text-primary text-lg">memory</span>
                                <span>Intel Core i9-14900KS</span>
                            </div>
                            <div class="flex items-center gap-3 text-sm text-gray-300">
                                <span class="material-symbols-outlined text-primary text-lg">videogame_asset</span>
                                <span>NVIDIA RTX 4090</span>
                            </div>
                            <div class="flex items-center gap-3 text-sm text-gray-300">
                                <span class="material-symbols-outlined text-primary text-lg">water</span>
                                <span>Custom Hydro Loop</span>
                            </div>
                        </div>
                        <div class="mt-auto pt-6 border-t border-white/10 flex items-center justify-between">
                            <span class="text-2xl font-bold text-white">$4,999</span>
                            <button
                                    class="rounded bg-white/10 p-2 text-white hover:bg-primary hover:text-white transition-colors">
                                <span class="material-symbols-outlined">add_shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Image Grid Section -->
    <section class="py-24 bg-background-dark">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 h-[600px] md:h-[500px]">
                <!-- Large Feature Image -->
                <div class="relative col-span-1 md:col-span-2 row-span-2 rounded-xl overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent z-10"></div>
                    <div class="absolute bottom-6 left-6 z-20">
                        <h3 class="text-2xl font-bold text-white mb-1">Custom Fabrication</h3>
                        <p class="text-gray-300 text-sm">We cut, bend, and shape metal to your will.</p>
                    </div>
                    <div class="h-full w-full bg-cover bg-center transition-transform duration-700 group-hover:scale-105"
                         data-alt="Close up of internal PC components with RGB lighting"
                         style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBz-D8l19zbkBaabPelYgzd3tWBp9AtFsiCoEC1gDw50eAip4BMflo79fXm7nOXFtLNV6nhblSmeTwf6n5OmZijS-vKeQY8Yif-ZRJII0GEp9JUuAVEFx8uIAFgJDxpBQ_v80kpGt-PZ2Mvv3g-UtrDvLrn6Npxjow7xiZtg54oG6Dw5teXvsQhy6BmDRSzISlJ63yuLQ1xDhhT5kShw7dkiSVKgCRh--vzQ-jBdJV1kcryWBjU3LEr-xLVDzaDCcgpilVsGQQcDSc');">
                    </div>
                </div>
                <!-- Small Image 1 -->
                <div class="relative rounded-xl overflow-hidden group">
                    <div
                            class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity z-10">
                    </div>
                    <div class="h-full w-full bg-cover bg-center" data-alt="Gamer typing on mechanical RGB keyboard"
                         style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCaRgAGmscEIF7iBXZ9jebrBIJbDbwccvXUHTeFxWGR4VmO_d7Dw3z1EoKGvZdQ0p6rET9DglF33OH1yMJ5c8Qm4OIgGOMaCWZFSOtPlLfO0iaSWsmHbcOv-34z74ql2CJRFSwdDIL6xCB4PsYHTQ7U53TdnB2E6olx5SStOFUEEfaeChGh5oa0ignDh9UQJdLrPtkF-Y71f6zjh4VGxSV9yWGKzRKztILMIAaG1BcK3iSH-Z7hzmcwmiOtFKa2MkY39blKFTFYxa0');">
                    </div>
                </div>
                <!-- Small Image 2 -->
                <div class="relative rounded-xl overflow-hidden group">
                    <div
                            class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity z-10">
                    </div>
                    <div class="h-full w-full bg-cover bg-center"
                         data-alt="Internal view of water cooling tubes and fittings"
                         style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA21j9I4p14LSbZu4hOqDIENJzf8AMQ9-gzWPw_gM3c7SpHE9cOindXBEzxcyApdXDnNDkPGmISpxZWe78IlNZX-30Gh6yh78ojHUxx8AebPtHwc-HT5X3073lso41HUGLruodOLdBsJJjAKLHDyNm8S7reVHc3d5AGEel9CaS8oswWwNDPFJQezHKQBdMHqi3FysGfkMN65y5rFmiy6QhIigf_K0oZ2-S3UazoCTZpfm5bVuVE7u3CkGO1JmSUaQy7zWhYxs3-SCU');">
                    </div>
                </div>
                <!-- Medium Wide Image -->
                <div class="relative col-span-1 md:col-span-2 rounded-xl overflow-hidden group">
                    <div
                            class="absolute inset-0 flex items-center justify-center z-20 opacity-0 group-hover:opacity-100 transition-opacity">
                        <a class="bg-white text-black px-6 py-2 rounded-full font-bold transform translate-y-4 group-hover:translate-y-0 transition-transform"
                           href="#">Follow @HEXCORE</a>
                    </div>
                    <div
                            class="absolute inset-0 bg-black/50 z-10 opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div class="h-full w-full bg-cover bg-center"
                         data-alt="Esports arena setup with multiple gaming stations"
                         style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuByA6BTI8_TYbcXS255k9FDnC6f-BUeNjvsR6wDpnNdYWJuM_DqJB8cNQe9pEscq19eo88DpdXZfxg-3oux909Utnwx3w2jiWVkVx-SVic4HKuhJBb-_VyxIVKOUL-1Kranwh8RTEG1B9UTUmzDihFQfWoDlxp74lRdshygrHFqmZR1AYytx40Oeu92VMEjNnqwFv8TWdjKw9mlJb2yzQVtphah3XJ6urHO8l4cVmoax9d_O0RoL9_8cukXIcNkRbOn3d0x-cOd1eY');">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter / CTA -->
    <!-- Footer -->

    <footer>
        <footer-content>
        </footer-content>
    </footer>

</div>
</body>

</html>