@extends('layouts.main')

@section('title', 'Kontak - Kevin Naufal Fernanda')

@section('content')
<div class="relative py-32 overflow-hidden">
     <!-- Gradient -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-cyan-600/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-xs text-cyan-400 font-bold tracking-[0.2em] uppercase mb-4">Hubungi Saya</h2>
            <p class="text-4xl sm:text-6xl font-black text-white tracking-tight">Mari Mulai Kolaborasi</p>
            <p class="mt-6 text-xl text-slate-400 font-light leading-relaxed">
                Punya ide proyek menarik atau ingin berdiskusi? Jangan ragu untuk mengirimkan pesan.
            </p>
        </div>

        <div class="bg-slate-900/50 rounded-3xl p-10 shadow-2xl border border-slate-700/50 backdrop-blur-md">
            @if(session('success'))
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Berhasil!',
                        text: "{{ session('success') }}",
                        icon: 'success',
                        background: '#0f172a',
                        color: '#fff',
                        confirmButtonColor: '#22d3ee'
                    });
                });
            </script>
            @endif

            <form action="{{ route('contact.send') }}" method="POST" class="space-y-8" novalidate id="contactForm">
                @csrf
                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-semibold text-slate-300 mb-2">Nama Lengkap</label>
                    <div class="mt-1 relative">
                        <input type="text" name="name" id="name" class="py-4 px-5 block w-full shadow-sm text-white bg-slate-800/50 border border-slate-700 focus:border-cyan-500 focus:bg-slate-800 focus:ring-0 rounded-xl transition-all duration-300 placeholder-slate-500" placeholder="Masukkan nama Anda">
                        <p class="text-rose-400 text-xs mt-1 hidden" id="nameError">Nama wajib diisi.</p>
                        @error('name')
                            <p class="text-rose-400 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-slate-300 mb-2">Alamat Email</label>
                    <div class="mt-1 relative">
                        <input type="email" name="email" id="email" class="py-4 px-5 block w-full shadow-sm text-white bg-slate-800/50 border border-slate-700 focus:border-cyan-500 focus:bg-slate-800 focus:ring-0 rounded-xl transition-all duration-300 placeholder-slate-500" placeholder="nama@email.com">
                        <p class="text-rose-400 text-xs mt-1 hidden" id="emailError">Email wajib diisi dengan format yang benar.</p>
                        @error('email')
                            <p class="text-rose-400 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Message -->
                <div>
                    <label for="message" class="block text-sm font-semibold text-slate-300 mb-2">Pesan</label>
                    <div class="mt-1 relative">
                        <textarea id="message" name="message" rows="5" class="py-4 px-5 block w-full shadow-sm text-white bg-slate-800/50 border border-slate-700 focus:border-cyan-500 focus:bg-slate-800 focus:ring-0 rounded-xl transition-all duration-300 placeholder-slate-500 resize-none" placeholder="Ceritakan detail proyek atau pertanyaan Anda..."></textarea>
                         <p class="text-rose-400 text-xs mt-1 hidden" id="messageError">Pesan wajib diisi.</p>
                        @error('message')
                            <p class="text-rose-400 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" class="w-full flex justify-center py-4 px-6 border border-transparent rounded-xl shadow-[0_0_20px_rgba(34,211,238,0.3)] text-base font-bold text-slate-950 bg-cyan-400 hover:bg-cyan-300 transition-all duration-300 hover:shadow-[0_0_30px_rgba(34,211,238,0.5)] hover:-translate-y-1">
                        Kirim Pesan
                    </button>
                </div>
            </form>

            <script>
                document.getElementById('contactForm').addEventListener('submit', function(e) {
                    let isValid = true;
                    
                    // Name Validation
                    const name = document.getElementById('name');
                    const nameError = document.getElementById('nameError');
                    if (!name.value.trim()) {
                        nameError.classList.remove('hidden');
                        name.classList.add('border-rose-500', 'focus:border-rose-500');
                        name.classList.remove('border-slate-700', 'focus:border-cyan-500');
                        isValid = false;
                    } else {
                        nameError.classList.add('hidden');
                        name.classList.remove('border-rose-500', 'focus:border-rose-500');
                        name.classList.add('border-slate-700', 'focus:border-cyan-500');
                    }

                    // Email Validation
                    const email = document.getElementById('email');
                    const emailError = document.getElementById('emailError');
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!email.value.trim() || !emailRegex.test(email.value)) {
                        emailError.classList.remove('hidden');
                        email.classList.add('border-rose-500', 'focus:border-rose-500');
                        email.classList.remove('border-slate-700', 'focus:border-cyan-500');
                        isValid = false;
                    } else {
                        emailError.classList.add('hidden');
                        email.classList.remove('border-rose-500', 'focus:border-rose-500');
                        email.classList.add('border-slate-700', 'focus:border-cyan-500');
                    }

                    // Message Validation
                    const message = document.getElementById('message');
                    const messageError = document.getElementById('messageError');
                    if (!message.value.trim()) {
                        messageError.classList.remove('hidden');
                        message.classList.add('border-rose-500', 'focus:border-rose-500');
                        message.classList.remove('border-slate-700', 'focus:border-cyan-500');
                        isValid = false;
                    } else {
                        messageError.classList.add('hidden');
                        message.classList.remove('border-rose-500', 'focus:border-rose-500');
                        message.classList.add('border-slate-700', 'focus:border-cyan-500');
                    }

                    if (!isValid) {
                        e.preventDefault();
                    }
                });
                
                // Real-time validation removal on input
                ['name', 'email', 'message'].forEach(id => {
                    document.getElementById(id).addEventListener('input', function() {
                        const error = document.getElementById(id + 'Error');
                        if (!error.classList.contains('hidden')) {
                            error.classList.add('hidden');
                            this.classList.remove('border-rose-500', 'focus:border-rose-500');
                            this.classList.add('border-slate-700', 'focus:border-cyan-500');
                        }
                    });
                });
            </script>
        </div>
    </div>
</div>
@endsection
