@extends('layouts.main')

@section('title', 'Beranda - Kevin Naufal Fernanda')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="relative py-32 overflow-hidden">
        <!-- Decoration -->
        <div class="absolute top-20 right-0 w-[500px] h-[500px] bg-cyan-500/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Text Content -->
                <div class="w-full lg:w-1/2 text-center lg:text-left">
                    <span class="inline-block py-1.5 px-4 rounded-full bg-slate-800/80 border border-slate-700 text-cyan-400 text-xs font-bold tracking-widest uppercase mb-8 shadow-lg backdrop-blur-sm">Fullstack Developer & UI Designer</span>
                    <h1 class="text-5xl sm:text-6xl lg:text-8xl font-black text-white tracking-tight mb-8 leading-tight">
                        Futuristic <br class="hidden lg:block" />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 animate-gradient-x">Digital Craft.</span>
                    </h1>
                    <p class="mt-6 text-xl text-slate-400 mb-10 leading-relaxed font-light max-w-2xl mx-auto lg:mx-0">
                        Saya <strong class="text-white font-semibold">Kevin Naufal Fernanda</strong>. Menggabungkan kode yang presisi dengan visual yang memukau untuk membangun pengalaman web modern.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-5">
                        <a href="{{ url('/projects') }}" class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-base font-bold rounded-full text-slate-950 bg-cyan-400 hover:bg-cyan-300 transition-all duration-300 hover:shadow-[0_0_30px_rgba(34,211,238,0.4)] hover:-translate-y-1">
                            Lihat Karya Saya
                        </a>
                        <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center px-8 py-4 border border-slate-700 hover:border-slate-500 text-base font-bold rounded-full text-white bg-slate-900/50 hover:bg-slate-800 transition-all duration-300 backdrop-blur-sm hover:-translate-y-1">
                            Mulai Diskusi
                        </a>
                    </div>
                </div>
                
                <!-- Hero Visual/Image -->
                <div class="w-full lg:w-1/2 relative group perspective-1000">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-slate-700/50 bg-slate-800/30 backdrop-blur-sm transform transition-all duration-700 hover:scale-[1.02] hover:shadow-[0_20px_60px_-15px_rgba(6,182,212,0.15)]">
                        <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Futuristic Setup" class="w-full h-auto object-cover opacity-80 mix-blend-overlay hover:opacity-100 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 p-6 bg-slate-900/80 backdrop-blur-lg rounded-2xl border border-white/10 shadow-lg">
                            <div class="flex items-center space-x-4">
                                <span class="flex h-3 w-3 relative">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-3 w-3 bg-cyan-500"></span>
                                </span>
                                <div>
                                    <p class="text-sm font-bold text-white">Status: Available</p>
                                    <p class="text-xs text-slate-400">Siap untuk proyek baru.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Glow effect behind -->
                    <div class="absolute -inset-10 bg-gradient-to-r from-cyan-500 to-purple-600 rounded-full blur-3xl opacity-20 -z-10 animate-pulse"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section class="py-16 bg-slate-900/30 border-y border-slate-800/50 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-xs font-bold text-slate-500 tracking-[0.2em] uppercase mb-12">Arsenal Teknologi</p>
            <div class="flex flex-wrap justify-center gap-10 md:gap-20 items-center">
                <span class="text-3xl font-bold text-slate-600 hover:text-white hover:drop-shadow-[0_0_10px_rgba(255,255,255,0.5)] transition-all duration-300 cursor-default">Figma</span>
                <span class="text-3xl font-bold text-slate-600 hover:text-[#FF2D20] hover:drop-shadow-[0_0_15px_rgba(255,45,32,0.5)] transition-all duration-300 cursor-default">Laravel</span>
                <span class="text-3xl font-bold text-slate-600 hover:text-[#38B2AC] hover:drop-shadow-[0_0_15px_rgba(56,178,172,0.5)] transition-all duration-300 cursor-default">Tailwind</span>
                <span class="text-3xl font-bold text-slate-600 hover:text-[#61DAFB] hover:drop-shadow-[0_0_15px_rgba(97,218,251,0.5)] transition-all duration-300 cursor-default">React</span>
                <span class="text-3xl font-bold text-slate-600 hover:text-[#C76494] hover:drop-shadow-[0_0_15px_rgba(199,100,148,0.5)] transition-all duration-300 cursor-default">Adobe XD</span>
            </div>
        </div>
    </section>

    <!-- Featured Projects Preview -->
    <section class="py-32 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div>
                    <h2 class="text-3xl sm:text-5xl font-bold text-white tracking-tight">Karya Terpilih <span class="text-cyan-400">.</span></h2>
                    <p class="mt-4 text-lg text-slate-400 font-light max-w-2xl">Studi kasus mendalam dengan eksekusi pixel-perfect.</p>
                </div>
                <a href="{{ url('/projects') }}" class="group inline-flex items-center text-white font-semibold border-b border-cyan-500 pb-1 hover:text-cyan-400 transition-all">
                    Lihat Semua <span class="ml-2 transform group-hover:translate-x-1 transition-transform">&rarr;</span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="group relative bg-slate-900/50 rounded-3xl overflow-hidden border border-slate-800 hover:border-cyan-500/50 transition-all duration-500 hover:shadow-[0_0_40px_rgba(34,211,238,0.1)]">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1523206489230-c012c64b2b48?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="UI Design" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 opacity-80 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-8 relative">
                        <div class="mb-4">
                            <span class="inline-block px-3 py-1 bg-violet-500/10 border border-violet-500/20 text-violet-400 text-xs font-bold uppercase tracking-wider rounded-full">UI/UX Design</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Redesign E-Commerce</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6">Merancang ulang alur pengguna aplikasi fashion retail untuk meningkatkan konversi penjualan hingga 40%.</p>
                        <span class="text-sm font-bold text-cyan-400 uppercase tracking-wider group-hover:text-cyan-300">Lihat Case Study</span>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="group relative bg-slate-900/50 rounded-3xl overflow-hidden border border-slate-800 hover:border-cyan-500/50 transition-all duration-500 hover:shadow-[0_0_40px_rgba(34,211,238,0.1)]">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Web App" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 opacity-80 group-hover:opacity-100">
                         <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-8 relative">
                         <div class="mb-4">
                            <span class="inline-block px-3 py-1 bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 text-xs font-bold uppercase tracking-wider rounded-full">Web Dev</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Dashboard SaaS</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6">Dashboard analitik komprehensif dengan Laravel dan Vue.js untuk memantau metrik startup secara real-time.</p>
                        <span class="text-sm font-bold text-cyan-400 uppercase tracking-wider group-hover:text-cyan-300">Lihat Detail</span>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="group relative bg-slate-900/50 rounded-3xl overflow-hidden border border-slate-800 hover:border-cyan-500/50 transition-all duration-500 hover:shadow-[0_0_40px_rgba(34,211,238,0.1)]">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1545235617-9465d2a55698?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Landing Page" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 opacity-80 group-hover:opacity-100">
                         <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-8 relative">
                         <div class="mb-4">
                            <span class="inline-block px-3 py-1 bg-fuchsia-500/10 border border-fuchsia-500/20 text-fuchsia-400 text-xs font-bold uppercase tracking-wider rounded-full">Frontend</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Company Profile Agency</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6">Landing page performa tinggi dan SEO-friendly untuk agensi kreatif menggunakan Tailwind CSS.</p>
                        <span class="text-sm font-bold text-cyan-400 uppercase tracking-wider group-hover:text-cyan-300">Kunjungi Situs</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-32 relative overflow-hidden">
        <div class="max-w-5xl mx-auto px-4 relative z-10 text-center">
            <h2 class="text-5xl sm:text-7xl font-black text-white mb-8 tracking-tighter">Siap membuat dampak?</h2>
            <p class="text-slate-400 text-xl mb-12 max-w-2xl mx-auto font-light leading-relaxed">Saya terbuka untuk kolaborasi proyek UI/UX dan Web Development. Mari ciptakan sesuatu yang luar biasa.</p>
            <a href="{{ url('/contact') }}" class="inline-block px-12 py-5 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold text-lg rounded-full shadow-[0_0_40px_rgba(6,182,212,0.4)] hover:shadow-[0_0_60px_rgba(6,182,212,0.6)] hover:scale-105 transition-all duration-300">
                Hubungi Saya Sekarang
            </a>
        </div>
         <!-- Glows -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-blue-600/20 rounded-full blur-[120px] -z-10"></div>
    </section>
@endsection
