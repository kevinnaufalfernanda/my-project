@extends('layouts.main')

@section('title', 'Keahlian - Kevin Naufal Fernanda')

@section('content')
<div class="relative py-32 overflow-hidden">
    <!-- Glow -->
    <div class="absolute bottom-0 left-1/4 w-[500px] h-[500px] bg-cyan-600/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20">
            <h2 class="text-xs text-cyan-400 font-bold tracking-[0.2em] uppercase mb-4">Spesialisasi Teknis</h2>
            <p class="text-4xl sm:text-6xl font-black text-white tracking-tight">Keahlian Profesional</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Category 1 -->
            <div class="bg-slate-900/50 p-10 rounded-3xl border border-slate-800 hover:border-violet-500/50 hover:shadow-[0_0_30px_rgba(139,92,246,0.15)] transition-all duration-300 group backdrop-blur-sm">
                <div class="w-16 h-16 bg-slate-800 rounded-2xl flex items-center justify-center mb-8 shadow-inner group-hover:scale-110 transition-all text-violet-400 border border-slate-700">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-6">Desain UI/UX</h3>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-slate-800 text-slate-300 border border-slate-700 rounded-xl text-sm font-medium hover:text-white hover:border-violet-500/50 transition-colors">Figma</span>
                    <span class="px-4 py-2 bg-slate-800 text-slate-300 border border-slate-700 rounded-xl text-sm font-medium hover:text-white hover:border-violet-500/50 transition-colors">Adobe XD</span>
                    <span class="px-4 py-2 bg-slate-800 text-slate-300 border border-slate-700 rounded-xl text-sm font-medium hover:text-white hover:border-violet-500/50 transition-colors">Wireframing</span>
                    <span class="px-4 py-2 bg-slate-800 text-slate-300 border border-slate-700 rounded-xl text-sm font-medium hover:text-white hover:border-violet-500/50 transition-colors">Prototyping</span>
                    <span class="px-4 py-2 bg-slate-800 text-slate-300 border border-slate-700 rounded-xl text-sm font-medium hover:text-white hover:border-violet-500/50 transition-colors">User Research</span>
                </div>
            </div>

            <!-- Category 2 -->
            <div class="bg-slate-900/50 p-10 rounded-3xl border border-slate-800 hover:border-cyan-500/50 hover:shadow-[0_0_30px_rgba(34,211,238,0.15)] transition-all duration-300 group backdrop-blur-sm">
                <div class="w-16 h-16 bg-slate-800 rounded-2xl flex items-center justify-center mb-8 shadow-inner group-hover:scale-110 transition-all text-cyan-400 border border-slate-700">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-6">Frontend Dev</h3>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-slate-800 text-slate-300 border border-slate-700 rounded-xl text-sm font-medium hover:text-white hover:border-cyan-500/50 transition-colors">Tailwind CSS</span>
                    <span class="px-4 py-2 bg-slate-800 text-slate-300 border border-slate-700 rounded-xl text-sm font-medium hover:text-white hover:border-cyan-500/50 transition-colors">React.js</span>
                    <span class="px-4 py-2 bg-slate-800 text-slate-300 border border-slate-700 rounded-xl text-sm font-medium hover:text-white hover:border-cyan-500/50 transition-colors">Vue.js</span>
                    <span class="px-4 py-2 bg-slate-800 text-slate-300 border border-slate-700 rounded-xl text-sm font-medium hover:text-white hover:border-cyan-500/50 transition-colors">HTML5/CSS3</span>
                    <span class="px-4 py-2 bg-slate-800 text-slate-300 border border-slate-700 rounded-xl text-sm font-medium hover:text-white hover:border-cyan-500/50 transition-colors">JavaScript</span>
                </div>
            </div>

            <!-- Category 3 -->
            <div class="bg-slate-900/50 p-10 rounded-3xl border border-slate-800 hover:border-emerald-500/50 hover:shadow-[0_0_30px_rgba(16,185,129,0.15)] transition-all duration-300 group backdrop-blur-sm">
                <div class="w-16 h-16 bg-slate-800 rounded-2xl flex items-center justify-center mb-8 shadow-inner group-hover:scale-110 transition-all text-emerald-400 border border-slate-700">
                     <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-6">Backend & Tools</h3>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-slate-800 text-slate-300 border border-slate-700 rounded-xl text-sm font-medium hover:text-white hover:border-emerald-500/50 transition-colors">Laravel 11</span>
                    <span class="px-4 py-2 bg-slate-800 text-slate-300 border border-slate-700 rounded-xl text-sm font-medium hover:text-white hover:border-emerald-500/50 transition-colors">PHP</span>
                    <span class="px-4 py-2 bg-slate-800 text-slate-300 border border-slate-700 rounded-xl text-sm font-medium hover:text-white hover:border-emerald-500/50 transition-colors">MySQL</span>
                    <span class="px-4 py-2 bg-slate-800 text-slate-300 border border-slate-700 rounded-xl text-sm font-medium hover:text-white hover:border-emerald-500/50 transition-colors">Git</span>
                    <span class="px-4 py-2 bg-slate-800 text-slate-300 border border-slate-700 rounded-xl text-sm font-medium hover:text-white hover:border-emerald-500/50 transition-colors">VS Code</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
