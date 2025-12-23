@extends('layouts.main')

@section('title', 'Proyek Laravel - Kevin Naufal Fernanda')

@section('content')
<div class="relative py-32 overflow-hidden">
    <!-- Gradient Background -->
    <div class="absolute top-0 right-1/4 w-[600px] h-[600px] bg-rose-600/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-xs text-rose-400 font-bold tracking-[0.2em] uppercase mb-4">Kategori</h2>
            <p class="text-4xl sm:text-6xl font-black text-white tracking-tight mb-6">Proyek Laravel</p>
            <p class="max-w-2xl text-xl text-slate-400 mx-auto font-light leading-relaxed">Aplikasi web handal dengan performa tinggi dan skalabilitas.</p>
        </div>

        <!-- Category Navigation -->
        <div class="flex flex-wrap justify-center gap-4 mb-16">
            <a href="{{ url('/projects') }}" class="px-6 py-2 rounded-full border border-slate-700 text-slate-400 hover:text-white hover:border-slate-500 transition-all font-medium">Semua</a>
            <a href="{{ url('/projects/figma') }}" class="px-6 py-2 rounded-full border border-slate-700 text-slate-400 hover:text-violet-400 hover:border-violet-500 transition-all font-medium">Figma</a>
            <a href="{{ url('/projects/laravel') }}" class="px-6 py-2 rounded-full bg-rose-600 text-white font-bold shadow-[0_0_20px_rgba(225,29,72,0.3)]">Laravel</a>
            <a href="{{ url('/projects/tailwind') }}" class="px-6 py-2 rounded-full border border-slate-700 text-slate-400 hover:text-cyan-400 hover:border-cyan-500 transition-all font-medium">Tailwind</a>
            <a href="{{ url('/projects/react') }}" class="px-6 py-2 rounded-full border border-slate-700 text-slate-400 hover:text-blue-400 hover:border-blue-500 transition-all font-medium">React</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Project 2: Web App -->
            <div class="group bg-slate-900/50 rounded-3xl overflow-hidden shadow-lg hover:shadow-[0_0_50px_rgba(225,29,72,0.15)] transition-all duration-500 border border-slate-800 hover:border-rose-500/50 flex flex-col backdrop-blur-sm">
                <div class="h-64 overflow-hidden relative">
                     <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Web App" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 opacity-80 group-hover:opacity-100">
                     <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent"></div>
                </div>
                <div class="p-8 flex-1 flex flex-col relative">
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-3 py-1 bg-rose-500/10 border border-rose-500/20 text-rose-400 text-xs font-bold uppercase tracking-wider rounded-full">Laravel</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-rose-400 transition-colors">Dashboard Analitik SaaS</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6 flex-1">Platform visualisasi data real-time dengan mode gelap dan fitur ekspor laporan otomatis.</p>
                    <a href="#" class="inline-flex items-center text-sm font-bold text-white group-hover:text-rose-400 transition-colors uppercase tracking-wider">
                        Lihat Detail <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
            
            <!-- Placeholder Project for Laravel -->
            <div class="group bg-slate-900/50 rounded-3xl overflow-hidden shadow-lg hover:shadow-[0_0_50px_rgba(225,29,72,0.15)] transition-all duration-500 border border-slate-800 hover:border-rose-500/50 flex flex-col backdrop-blur-sm">
                <div class="h-64 overflow-hidden relative">
                     <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="E-Learning" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 opacity-80 group-hover:opacity-100">
                     <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent"></div>
                </div>
                <div class="p-8 flex-1 flex flex-col relative">
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-3 py-1 bg-rose-500/10 border border-rose-500/20 text-rose-400 text-xs font-bold uppercase tracking-wider rounded-full">Laravel</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-rose-400 transition-colors">Learning Management System</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6 flex-1">Sistem manajemen pembelajaran online lengkap dengan fitur kuis, sertifikat, dan progress tracking.</p>
                    <a href="#" class="inline-flex items-center text-sm font-bold text-white group-hover:text-rose-400 transition-colors uppercase tracking-wider">
                        Lihat Detail <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
