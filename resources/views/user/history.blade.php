@extends('layoutuser.index')

@section('content')

@if(session('success'))
    <script>
        Swal.fire({
            title: "Deleted!",
            text: "{{ session('success') }}",
            icon: "success"
        });
    </script>
@endif

<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.22.2/dist/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-3">Riwayat BMI Anda</h1>
            <p class="text-lg text-gray-600">Catatan perkembangan indeks massa tubuh Anda</p>
        </div>

        @if(count($histories))
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
                @foreach($histories as $h)
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <span class="text-xs font-medium px-2.5 py-0.5 rounded-full 
                                    @if($h->kategori == 'Kurus') bg-yellow-100 text-yellow-800
                                    @elseif($h->kategori == 'Normal') bg-green-100 text-green-800
                                    @elseif($h->kategori == 'Gemuk') bg-orange-100 text-orange-800
                                    @else bg-red-100 text-red-800 @endif">
                                    {{ $h->kategori }}
                                </span>
                                <span class="text-xs text-gray-500">{{ $h->created_at->format('d M Y, H:i') }}</span>
                            </div>

                            <div class="mb-6 text-center">
                                <span class="text-5xl font-bold text-indigo-600">{{ number_format($h->bmi, 1) }}</span>
                                <span class="text-gray-500">BMI</span>
                            </div>

                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span class="text-gray-500">Berat</span>
                                    <span class="font-medium">{{ $h->berat }} kg</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-500">Tinggi</span>
                                    <span class="font-medium">{{ $h->tinggi_cm }} cm</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-500">Jenis Kelamin</span>
                                    <span class="font-medium">{{ $h->jenis_kelamin }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-500">Usia</span>
                                    <span class="font-medium">{{ $h->usia }} tahun</span>
                                </div>
                            </div>
                        </div>

                        <div class="px-6 py-3 bg-gray-50 border-t border-gray-100 flex justify-end">
                            <form action="{{ route('bmi.history.destroy', $h->id) }}" method="POST" class="form-hapus">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-sm text-red-600 hover:text-red-800 font-medium flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-20">
                <div class="mx-auto w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-gray-900 mb-2">Belum ada riwayat BMI</h3>
                <p class="text-gray-500 max-w-md mx-auto">Mulai hitung BMI Anda untuk melihat riwayat perkembangan di sini.</p>
            </div>
        @endif
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.22.2/dist/sweetalert2.all.min.js"></script>
@endsection
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.form-hapus').forEach(function(form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            Swal.fire({
                title: "Apakah kamu yakin?",
                text: "Kamu tidak akan bisa mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
});
</script>