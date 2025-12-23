@extends('layouts.main')

@section('title', 'Proyek React - Kevin Naufal Fernanda')

@section('content')
<div class="relative py-32 overflow-hidden">
    <!-- Gradient Background -->
    <div class="absolute top-0 right-1/4 w-[600px] h-[600px] bg-blue-600/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-xs text-blue-400 font-bold tracking-[0.2em] uppercase mb-4">Kategori</h2>
            <p class="text-4xl sm:text-6xl font-black text-white tracking-tight mb-6">Proyek React</p>
            <p class="max-w-2xl text-xl text-slate-400 mx-auto font-light leading-relaxed">Aplikasi interaktif dan dinamis dengan arsitektur komponen modern.</p>
        </div>

        <!-- Category Navigation -->
        <div class="flex flex-wrap justify-center gap-4 mb-16">
            <a href="{{ url('/projects') }}" class="px-6 py-2 rounded-full border border-slate-700 text-slate-400 hover:text-white hover:border-slate-500 transition-all font-medium">Semua</a>
            <a href="{{ url('/projects/figma') }}" class="px-6 py-2 rounded-full border border-slate-700 text-slate-400 hover:text-violet-400 hover:border-violet-500 transition-all font-medium">Figma</a>
            <a href="{{ url('/projects/laravel') }}" class="px-6 py-2 rounded-full border border-slate-700 text-slate-400 hover:text-rose-400 hover:border-rose-500 transition-all font-medium">Laravel</a>
            <a href="{{ url('/projects/tailwind') }}" class="px-6 py-2 rounded-full border border-slate-700 text-slate-400 hover:text-cyan-400 hover:border-cyan-500 transition-all font-medium">Tailwind</a>
            <a href="{{ url('/projects/react') }}" class="px-6 py-2 rounded-full bg-blue-600 text-white font-bold shadow-[0_0_20px_rgba(37,99,235,0.3)]">React</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
             <!-- Placeholder Project for React -->
            <div class="group bg-slate-900/50 rounded-3xl overflow-hidden shadow-lg hover:shadow-[0_0_50px_rgba(96,165,250,0.15)] transition-all duration-500 border border-slate-800 hover:border-blue-500/50 flex flex-col backdrop-blur-sm">
                <div class="h-64 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1633356122544-f134324a6cee?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="React App" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 opacity-80 group-hover:opacity-100">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent"></div>
                </div>
                <div class="p-8 flex-1 flex flex-col relative">
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-3 py-1 bg-blue-500/10 border border-blue-500/20 text-blue-400 text-xs font-bold uppercase tracking-wider rounded-full">React</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-blue-400 transition-colors">Task Management App</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6 flex-1">Aplikasi manajemen tugas produktif dengan fitur drag-and-drop dan sinkronisasi real-time.</p>
                    <a href="#" class="inline-flex items-center text-sm font-bold text-white group-hover:text-blue-400 transition-colors uppercase tracking-wider">
                        Lihat App <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
            
             <!-- Placeholder Project for React 2 -->
            <div class="group bg-slate-900/50 rounded-3xl overflow-hidden shadow-lg hover:shadow-[0_0_50px_rgba(96,165,250,0.15)] transition-all duration-500 border border-slate-800 hover:border-blue-500/50 flex flex-col backdrop-blur-sm">
                <div class="h-64 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1516259762381-22954d7d3ad2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Code Editor" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 opacity-80 group-hover:opacity-100">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent"></div>
                </div>
                <div class="p-8 flex-1 flex flex-col relative">
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-3 py-1 bg-blue-500/10 border border-blue-500/20 text-blue-400 text-xs font-bold uppercase tracking-wider rounded-full">React</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-blue-400 transition-colors">Movie Discovery</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6 flex-1">Aplikasi pencarian film menggunakan TMDB API dengan fitur infinite scroll dan favorites.</p>
                    <a href="#" class="inline-flex items-center text-sm font-bold text-white group-hover:text-blue-400 transition-colors uppercase tracking-wider">
                        Lihat Demo <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
