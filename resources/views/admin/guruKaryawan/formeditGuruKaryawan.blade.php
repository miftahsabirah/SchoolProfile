@extends('admin/master')

@section('title')
Form Guru dan Karyawan
@endsection

@section('content')

<div class="flex-grow py-6 px-12">

    <div class="flex space-x-6">
        <div class="w-full shadow-xl rounded-lg">
            <h2 class="text-sm font-medium px-6 py-3">Settings Mata Pelajaran</h2>
            <div class="bg-white p-6 rounded-br-lg rounded-bl-lg shadow-lg w-full">
                <form id="mapelForm" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-10">
                        <label for="nama_matapelajaran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mata Pelajaran</label>
                        <input type="text" id="nama_matapelajaran" name="nama_matapelajaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nama mata pelajaran" required />
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-blue-700 text-white p-1.5 rounded-lg hover:bg-blue-800">Save Menu</button>
                    </div>
                </form>
            </div>        
        </div>
    </div>

    <div class="flex space-x-6 mt-8">
        <div class="w-full shadow-xl rounded-lg">
            <h2 class="text-sm font-medium px-6 py-3">Settings Jabatan</h2>
            <div class="bg-white p-6 rounded-br-lg rounded-bl-lg shadow-lg w-full">
                <form id="jabatanForm" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-5">
                        <label for="nama_jabatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
                        <input type="text" id="nama_jabatan" name="nama_jabatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nama jabatan" required />
                    </div>
                    <div class="mb-10">
                        <label for="deskripsi"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Jabatan</label>
                        <textarea id="deskripsi" name="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan deskripsi disini..."></textarea>
                        <div class="text-xs text-gray-500 mt-1">A note for extra info</div>
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-blue-700 text-white p-1.5 rounded-lg hover:bg-blue-800">Save Menu</button>
                    </div>
                </form>
            </div>        
        </div>
    </div>

    <div class="flex items-center justify-center mt-8">
        <div class="w-full shadow-xl rounded-lg">
            <h2 class="text-sm font-medium px-6 py-3">Settings Guru dan Karyawan</h2>
            <div class="bg-white p-6 rounded-br-lg rounded-bl-lg shadow-lg w-full">
                <form id="guruKaryawanForm" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="nama_guru" class="block mb-2 text-sm font-medium text-gray-900">Nama Guru</label>
                            <input type="text" id="nama_guru" name="nama_guru" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nama guru" required />
                        </div>
                        <div>
                            <label for="nomor_telepon" class="block mb-2 text-sm font-medium text-gray-900">Phone Number</label>
                            <input type="text" id="nomor_telepon" name="nomor_telepon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. +(12)3456 789" required />
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="hello@gmail.com" required />
                        </div>  
                        <div>
                            <label for="nama_matapelajaran" class="block mb-2 text-sm font-medium text-gray-900">Mata Pelajaran</label>
                            <select id="nama_matapelajaran_guru" name="nama_matapelajaran" class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <!-- Opsi Mata Pelajaran akan ditambahkan secara dinamis -->
                            </select>
                        </div>
                        <div>
                            <label for="nip" class="block mb-2 text-sm font-medium text-gray-900">NIP</label>
                            <input type="text" id="nip" name="nip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. 123456" required />
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="foto">Foto Profil</label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="foto" name="foto" type="file">
                        </div>
                        <div>
                            <label for="jenis_guru" class="block mb-2 text-sm font-medium text-gray-900">Golongan</label>
                            <input type="text" id="jenis_guru" name="jenis_guru" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan golongan" required />
                        </div>
                        <div>
                            <label for="nama_jabatan" class="block mb-2 text-sm font-medium text-gray-900">Jabatan</label>
                            <select id="jabatan_guru" name="nama_jabatan" class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <!-- Opsi Jabatan akan ditambahkan secara dinamis -->
                            </select>
                        </div>
                    </div>  

                    <div class="mb-5">
                        <button type="submit" class="w-full bg-blue-700 text-white p-1.5 rounded-lg hover:bg-blue-800">Save Menu</button>
                    </div>
                </form>
            </div>        
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        function populateMataPelajaran() {
            $.ajax({
                url: 'http://127.0.0.1:8000/api/getmatapelajaran',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    var dropdown = $('#nama_matapelajaran_guru');
                    dropdown.empty();
                    dropdown.append('<option value="">Pilih Mata Pelajaran</option>');
                    $.each(response, function(key, matapelajaran) {
                        dropdown.append($('<option></option>').attr('value', matapelajaran.id).text(matapelajaran.nama_matapelajaran));
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Terjadi kesalahan dalam mengambil data mata pelajaran:', error);
                    $('#nama_matapelajaran_guru').append('<option value="">Data tidak tersedia</option>');
                }
            });
        }

        function populateJabatan() {
            $.ajax({
                url: 'http://127.0.0.1:8000/api/getjabatan',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    var dropdown = $('#jabatan_guru');
                    dropdown.empty();
                    dropdown.append('<option value="">Pilih Jabatan</option>');
                    $.each(response, function(key, jabatan) {
                        dropdown.append($('<option></option>').attr('value', jabatan.id).text(jabatan.nama_jabatan));
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Terjadi kesalahan dalam mengambil data jabatan:', error);
                    $('#jabatan_guru').append('<option value="">Data tidak tersedia</option>');
                }
            });
        }

        // Initial population of Mata Pelajaran and Jabatan dropdowns
        populateMataPelajaran();
        populateJabatan();

        // Handle Mata Pelajaran form submission
        $('#mapelForm').on('submit', function(event) {
            event.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url: "http://127.0.0.1:8000/api/postmatapelajaran",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function(response) {
                    alert('Data berhasil disimpan');
                    populateMataPelajaran(); // Update Mata Pelajaran dropdown
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText); // Log the response text for debugging
                }
            });
        });

        $('#jabatanForm').on('submit', function(event) {
            event.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url: "http://127.0.0.1:8000/api/postjabatan",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function(response) {
                    alert('Data berhasil disimpan');
                    populateJabatan(); // Update Jabatan dropdown
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText); // Log the response text for debugging
                }
            });
        });


        // Handle Guru dan Karyawan form submission
        $('#guruKaryawanForm').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            // Ambil nilai jabatan_id dari dropdown
            var jabatanId = $('#jabatan_guru').val();

            // Tambahkan jabatan_id ke formData
            formData.append('jabatan_id', jabatanId);

            $.ajax({
                url: 'http://127.0.0.1:8000/api/postguru',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(response) {
                    alert('Data berhasil disimpan');
                    populateJabatan(); 
                    window.location.href = '{{ route('admingurukaryawan') }}'; 
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText); 
                }
            });
        });

    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection
