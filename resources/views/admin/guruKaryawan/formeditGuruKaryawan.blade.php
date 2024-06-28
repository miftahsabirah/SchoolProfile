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
                        <!-- Hidden input field for method -->
                        <input type="hidden" name="_method" id="method" value="PUT">
                        <input type="hidden" name="id" id="id">

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
                        <!-- Hidden input field for method -->
                        <input type="hidden" name="_method" id="method" value="PUT">
                        <input type="hidden" name="id" id="id">

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
                        <!-- Hidden input field for method -->
                        <input type="hidden" name="_method" id="method" value="PUT">
                        <input type="hidden" name="id" id="id">
                        
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
                            <label for="jenis_guru" class="block mb-2 text-sm font-medium text-gray-900">Golongan</label>
                            <input type="text" id="jenis_guru" name="jenis_guru" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan golongan" required />
                        </div>
                        <div>
                            <label for="nama_jabatan" class="block mb-2 text-sm font-medium text-gray-900">Jabatan</label>
                            <select id="jabatan_guru" name="nama_jabatan" class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <!-- Opsi Jabatan akan ditambahkan secara dinamis -->
                            </select>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="foto">Foto Profil</label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="foto" name="foto" type="file">
                            <img id="currentImage" src="" alt="Current Image" class="mt-2 max-w-full h-auto">
                        </div>
                    </div>  

                    <div>
                        <button onclick="window.location.href='{{ route('admingurukaryawan') }}'"type="submit"
                            class="w-full bg-blue-700 text-white p-1.5 rounded-lg hover:bg-blue-800 mb-5">Save
                            changes</button>
                    </div>
                </form>
            </div>        
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        const urlParams = new URLSearchParams(window.location.search);
        var currentUrl = window.location.href;
        var id = currentUrl.substring(currentUrl.lastIndexOf('/') + 1);

        console.log(currentUrl);
        if (!id) {
            console.log("ID tidak ditemukan di URL");
            return;
        }

        $.ajax({
            url: "http://127.0.0.1:8000/api/getdetailguru/" + id,
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response) {
                    populateForm(response);
                    // Set form action untuk update
                    $('#guruKaryawanForm').attr('action', 'http://127.0.0.1:8000/api/updateguru/' + id);
                } else {
                    console.log("Data not found.");
                }
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });

        // Function untuk mengisi formulir dengan data
        function populateForm(data) {
            $('#id').val(data.id);
            $('#jabatan_id').val(data.jabatan_id);
            $('#nama_guru').val(data.nama_guru);
            $('#nip').val(data.nip);
            $('#nomor_telepon').val(data.nomor_telepon);
            $('#jenis_guru').val(data.jenis_guru);

            if (data.foto) {
                $('#currentImage').attr('src', 'http://localhost:8000/storage/post_guru_karyawan/' + data.foto);
            }
        }

        // Handle form submission
        $('#guruKaryawanForm').on('submit', function(event) {
            event.preventDefault();
            var formData = new FormData(this);

            formData.append('_method', 'PUT');

            // Tambahkan CSRF token
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            formData.append('_token', csrfToken);

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST', 
                data: formData,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function(response) {
                    console.log(response.message);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- <script>
    $(document).ready(function() {
        // Menangani peristiwa ketika dokumen selesai dimuat
        document.addEventListener('DOMContentLoaded', function() {
            // Mendapatkan ID dari parameter URL
            const urlParams = new URLSearchParams(window.location.search);
            var currentUrl = window.location.href;
            var id = currentUrl.substring(currentUrl.lastIndexOf('/') + 1);

            // Periksa apakah ID tersedia
            if (!id) {
                console.log("ID tidak ditemukan di URL");
                return;
            }

            // AJAX request untuk mendapatkan data detail dari API Mata Pelajaran
            $.ajax({
                url: "http://127.0.0.1:8000/api/getdetailmatapelajaran/" + id,
                type: "GET",
                dataType: "json",
                success: function(response) {
                    if (response) {
                        // Panggil fungsi untuk mengisi formulir dengan data Mata Pelajaran
                        populateForm(response);
                    } else {
                        console.log("Data tidak ditemukan.");
                    }
                },
                error: function(xhr, status, error) {
                    console.log("Terjadi kesalahan:", error);
                }
            });
        });

        // Function untuk mengisi formulir dengan data Mata Pelajaran
        function populateForm(data) {
            $('#nama_matapelajaran').val(data.nama_matapelajaran);
        }
    });
</script> --}}

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
        $(document).ready(function() {
        // Menangani peristiwa ketika dokumen selesai dimuat
        document.addEventListener('DOMContentLoaded', function() {
            // Mendapatkan ID dari parameter URL
            const urlParams = new URLSearchParams(window.location.search);
            var currentUrl = window.location.href;
            var id = currentUrl.substring(currentUrl.lastIndexOf('/') + 1);

            // Periksa apakah ID tersedia
            if (!id) {
                console.log("ID tidak ditemukan di URL");
                return;
            }

            // AJAX request untuk mendapatkan data detail dari API Mata Pelajaran
            $.ajax({
                url: "http://127.0.0.1:8000/api/getdetailmatapelajaran/" + id,
                type: "GET",
                dataType: "json",
                success: function(response) {
                    if (response) {
                        // Panggil fungsi untuk mengisi formulir dengan data Mata Pelajaran
                        populateForm(response);
                    } else {
                        console.log("Data tidak ditemukan.");
                    }
                },
                error: function(xhr, status, error) {
                    console.log("Terjadi kesalahan:", error);
                }
            });
        });

        // Function untuk mengisi formulir dengan data Mata Pelajaran
        function populateForm(data) {
            $('#nama_matapelajaran').val(data.nama_matapelajaran);
        }
    });

    });
</script>

@endsection
