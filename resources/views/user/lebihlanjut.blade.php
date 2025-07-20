@extends('layoutuser.index')

@section('title', 'Pelajari Lebih Lanjut Tentang BMI')

@section('content')
<div class="bg-gradient-to-b from-blue-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- Bagian Hero -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Memahami Indeks Massa Tubuh (BMI)</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Pelajari cara menghitung BMI, artinya untuk kesehatan Anda, dan cara menginterpretasikan hasilnya.</p>
        </div>

        <!-- Bagian Pengertian BMI -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden mb-16">
            <div class="md:flex">
                <div class="md:w-1/2 p-8 md:p-12 lg:p-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Apa itu BMI?</h2>
                    <p class="text-gray-600 mb-6">Indeks Massa Tubuh (BMI) adalah nilai numerik yang dihitung dari berat dan tinggi badan Anda. Ini memberikan indikator yang dapat diandalkan untuk menilai berat badan pada kebanyakan orang dan digunakan untuk mengkategorikan risiko kesehatan terkait berat badan.</p>
                    <div class="bg-blue-50 p-6 rounded-lg">
                        <h3 class="text-xl font-semibold text-blue-800 mb-3">Rumus BMI</h3>
                        <p class="text-gray-700 font-mono text-lg">BMI = berat (kg) / (tinggi (m))²</p>
                    </div>
                </div>
                <div class="md:w-1/2 bg-blue-100 flex items-center justify-center p-8">
                    <img src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Gaya hidup sehat" class="rounded-lg shadow-md w-full h-auto max-h-96 object-cover">
                </div>
            </div>
        </div>

        <!-- Bagian Kategori BMI -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Kategori BMI</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Kartu Kurus -->
                <div class="bg-yellow-50 rounded-xl p-6 border-l-4 border-yellow-400">
                    <div class="flex items-center mb-4">
                        <div class="bg-yellow-100 p-3 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-yellow-800">Kurus</h3>
                    </div>
                    <p class="text-gray-700 mb-2"><span class="font-semibold">Rentang BMI:</span> Di bawah 18.5</p>
                    <p class="text-gray-600">Mungkin mengindikasikan kekurangan gizi atau masalah kesehatan lainnya. Disarankan berkonsultasi dengan tenaga kesehatan.</p>
                </div>

                <!-- Kartu Normal -->
                <div class="bg-green-50 rounded-xl p-6 border-l-4 border-green-400">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-green-800">Normal</h3>
                    </div>
                    <p class="text-gray-700 mb-2"><span class="font-semibold">Rentang BMI:</span> 18.5 - 24.9</p>
                    <p class="text-gray-600">Dianggap sebagai rentang berat badan sehat. Pertahankan gaya hidup dengan nutrisi seimbang dan olahraga teratur.</p>
                </div>

                <!-- Kartu Gemuk -->
                <div class="bg-orange-50 rounded-xl p-6 border-l-4 border-orange-400">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-100 p-3 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-orange-800">Gemuk</h3>
                    </div>
                    <p class="text-gray-700 mb-2"><span class="font-semibold">Rentang BMI:</span> 25 - 29.9</p>
                    <p class="text-gray-600">Berisiko lebih tinggi terhadap kondisi kesehatan tertentu. Pertimbangkan perubahan gaya hidup untuk mencapai berat badan lebih sehat.</p>
                </div>

                <!-- Kartu Obesitas -->
                <div class="bg-red-50 rounded-xl p-6 border-l-4 border-red-400">
                    <div class="flex items-center mb-4">
                        <div class="bg-red-100 p-3 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-red-800">Obesitas</h3>
                    </div>
                    <p class="text-gray-700 mb-2"><span class="font-semibold">Rentang BMI:</span> 30 ke atas</p>
                    <p class="text-gray-600">Berhubungan dengan risiko lebih tinggi terhadap kondisi kesehatan serius. Disarankan berkonsultasi dengan tenaga kesehatan.</p>
                </div>
            </div>
        </div>

        <!-- Bagian Keterbatasan -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden mb-16">
            <div class="md:flex flex-row-reverse">
                <div class="md:w-1/2 p-8 md:p-12 lg:p-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Keterbatasan BMI</h2>
                    <p class="text-gray-600 mb-4">Meskipun BMI merupakan alat skrining yang berguna, ada beberapa keterbatasan:</p>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-gray-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                            </svg>
                            <span>Tidak mengukur lemak tubuh secara langsung atau membedakan antara lemak dan otot</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-gray-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                            </svg>
                            <span>Mungkin kurang akurat untuk atlet dengan massa otot tinggi</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-gray-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                            </svg>
                            <span>Tidak memperhitungkan distribusi lemak tubuh</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-gray-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                            </svg>
                            <span>Mungkin tidak sesuai untuk beberapa kelompok etnis</span>
                        </li>
                    </ul>
                </div>
                <div class="md:w-1/2 bg-gray-100 flex items-center justify-center p-8">
                    <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Konsultasi dokter" class="rounded-lg shadow-md w-full h-auto max-h-96 object-cover">
                </div>
            </div>
        </div>

        <!-- Bagian Tips Kesehatan -->
        <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12 lg:p-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Tips untuk BMI Sehat</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="flex flex-col items-center text-center">
                    <div class="bg-blue-100 p-4 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Aktivitas Fisik</h3>
                    <p class="text-gray-600">Lakukan setidaknya 150 menit aktivitas fisik sedang per minggu atau 75 menit aktivitas berat</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="bg-green-100 p-4 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Pola Makan Seimbang</h3>
                    <p class="text-gray-600">Konsumsi lebih banyak sayuran, buah-buahan, biji-bijian, dan protein tanpa lemak</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="bg-purple-100 p-4 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Istirahat Cukup</h3>
                    <p class="text-gray-600">Tidur 7-9 jam per malam membantu mengatur metabolisme dan nafsu makan</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection