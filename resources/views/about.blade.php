@extends('layouts.main')

@section('title', 'Tentang Saya - Kevin Naufal Fernanda')

@section('content')
<div class="relative py-32 overflow-hidden">
    <!-- Animated Decorator -->
    <div class="absolute top-0 left-0 w-[400px] h-[400px] bg-indigo-600/10 rounded-full blur-[100px] animate-pulse pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-[300px] h-[300px] bg-cyan-600/10 rounded-full blur-[100px] animate-pulse animation-delay-2000 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="lg:text-center mb-16">
            <h2 class="text-xs text-cyan-400 font-bold tracking-[0.2em] uppercase mb-4">Profil</h2>
            <p class="mt-2 text-3xl leading-8 font-black tracking-tight text-white sm:text-4xl animate-gradient-x">
                Tentang Kreator
            </p>
        </div>

        <div class="flex flex-col md:flex-row items-center md:items-start gap-12">
            <!-- Profile Image Area -->
            <div class="w-full md:w-1/3 flex justify-center group perspective-1000">
                <div class="relative w-72 h-72 rounded-full overflow-hidden shadow-[0_0_40px_rgba(34,211,238,0.2)] border-2 border-slate-800 hover:border-cyan-500/50 transition-all duration-700 hover:shadow-[0_0_60px_rgba(6,182,212,0.4)] hover:scale-105">
                     <img src="{{ asset('img/profile.jpg') }}" alt="Kevin Naufal Fernanda" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 object-top">
                     <div class="absolute inset-0 bg-violet-600/10 mix-blend-overlay opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                </div>
            </div>

            <!-- Content Area -->
            <div class="w-full md:w-2/3">
                <div class="prose prose-lg prose-invert text-slate-400 mb-8">
                    <p class="mb-6 hover:text-slate-300 transition-colors duration-300">
                        Halo! Saya <strong class="text-white relative inline-block group-hover:text-cyan-400 transition-colors duration-300">Kevin Naufal Fernanda<span class="absolute bottom-0 left-0 w-0 h-0.5 bg-cyan-400 transition-all duration-300 group-hover:w-full"></span></strong>. Mahasiswa D3 Teknologi Informasi yang kreatif dengan fokus kuat pada <strong class="text-cyan-400">Desain UI/UX</strong> dan <strong class="text-cyan-400">Pengembangan Web</strong>.
                    </p>
                    <p class="hover:text-slate-300 transition-colors duration-300">
                        Saya percaya bahwa perangkat lunak yang hebat bukan hanya tentang kode, tetapi tentang pengalaman yang diberikannya. Perjalanan saya menjembatani kesenjangan antara desain dan teknik, memungkinkan saya membuat prototipe antarmuka yang memukau di Figma dan menghidupkannya dengan Laravel dan Tailwind CSS.
                    </p>
                </div>

                <!-- Education & Interests Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Education Card -->
                    <div class="bg-slate-900/50 p-6 rounded-2xl border border-slate-800 hover:border-cyan-500/30 transition-all duration-300 hover:shadow-[0_0_30px_rgba(6,182,212,0.1)] hover:-translate-y-1 group">
                        <h3 class="text-xl font-bold text-white mb-3 flex items-center gap-2">
                             <svg class="w-5 h-5 text-cyan-400 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"/></svg>
                             Pendidikan
                        </h3>
                        <ul class="space-y-3">
                            <li class="relative pl-4 border-l-2 border-cyan-500/30 hover:border-cyan-500 transition-colors">
                                <strong class="text-slate-200 block">D3 Teknologi Informasi</strong>
                                <span class="text-slate-500 text-sm">Universitas Brawijaya (2024 - 2027)</span>
                                <p class="text-slate-400 text-xs mt-1">Spesialisasi: Rekayasa Frontend, Desain UI/UX.</p>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Interests Card -->
                    <div class="bg-slate-900/50 p-6 rounded-2xl border border-slate-800 hover:border-violet-500/30 transition-all duration-300 hover:shadow-[0_0_30px_rgba(139,92,246,0.1)] hover:-translate-y-1 group">
                         <h3 class="text-xl font-bold text-white mb-3 flex items-center gap-2">
                             <svg class="w-5 h-5 text-violet-400 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                             Minat
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            Menganalisis UX aplikasi, berkontribusi pada <span class="text-violet-400">Open Source</span>, dan mengeksplorasi tren <span class="text-violet-400">Web Animation</span>.
                        </p>
                    </div>
                </div>

                <!-- Certificates Card (New Section) -->
                <div class="mt-6 bg-slate-900/50 p-6 rounded-2xl border border-slate-800 hover:border-emerald-500/30 transition-all duration-300 hover:shadow-[0_0_30px_rgba(16,185,129,0.1)] hover:-translate-y-1 group">
                    <h3 class="text-xl font-bold text-white mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-emerald-400 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Sertifikasi & Penghargaan
                    </h3>
                    <div class="space-y-4">
                        <!-- Certificate Item 1 -->
                        <div class="flex items-start gap-4 p-3 rounded-lg hover:bg-slate-800/50 transition-colors">
                            <div class="flex-shrink-0 w-10 h-10 bg-emerald-500/10 rounded-full flex items-center justify-center border border-emerald-500/20 text-emerald-400">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-slate-200 font-bold text-sm">Recon For Bug Bounty, Penetration Testers & Ethical Hackers</h4>
                                <p class="text-slate-500 text-xs mt-1">Udemy - Issued Jan 15, 2025</p>
                                <p class="text-slate-400 text-xs mt-1 leading-relaxed">Instruktur: Vivek Pandit. Durasi: 9 Jam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
