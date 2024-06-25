@extends('admin.master')

@section('title')
    Form Edit Galeri
@endsection

@section('content')
    <div class="flex items-center justify-center px-12">
        <div class="w-full shadow-xl rounded-lg">
            <h2 class="text-sm font-medium px-6 py-3">Settings Galeri</h2>
            <div class="bg-white p-6 rounded-br-lg rounded-bl-lg shadow-lg w-full">
                <form id="galeriForm" enctype="multipart/form-data">
                    @csrf
                    <!-- Hidden input field for method -->
                    <input type="hidden" name="_method" id="method" value="PUT">
                    <input type="hidden" name="id" id="id">

                    <div class="mb-5">
                        <label for="judul"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                        <input type="text" id="judul" name="judul"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>

                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="gambar">Upload
                            Gambar</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="gambar" name="gambar" type="file">
                        <!-- Placeholder for current image display if needed -->
                        <img id="currentImage" src="" alt="Current Image" class="mt-2 max-w-full h-auto">
                    </div>

                    <div class="mb-5">
                        <label for="kategori"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <select id="kategori" name="kategori"
                            class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="Kegiatan">Kegiatan</option>
                            <option value="Pojok Sekolah">Pojok Sekolah</option>
                            <option value="Prestasi">Prestasi</option>
                        </select>
                    </div>

                    <div>
                        <button onclick="window.location.href='{{ route('admingaleri') }}'"type="submit"
                            class="w-full bg-blue-700 text-white p-1.5 rounded-lg hover:bg-blue-800 mb-5">Save
                            changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mendapatkan ID dari parameter URL
            const urlParams = new URLSearchParams(window.location.search);
            var currentUrl = window.location.href;
            var id = currentUrl.substring(currentUrl.lastIndexOf('/') + 1);

            console.log(currentUrl);
            // Periksa apakah ID tersedia
            if (!id) {
                console.log("ID tidak ditemukan di URL");
                return;
            }

            $.ajax({
                url: "http://127.0.0.1:8000/api/getdetailgaleri/" + id,
                type: "GET",
                dataType: "json",
                success: function(response) {
                    if (response) {
                        populateForm(response);
                        // Set form action untuk update
                        $('#galeriForm').attr('action', 'http://127.0.0.1:8000/api/updategaleri/' + id);
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
                $('#judul').val(data.judul);
                $('#kategori').val(data.kategori);

                // Tambahkan logika untuk menampilkan gambar saat ini (jika ada)
                if (data.gambar) {
                    // Contoh menampilkan gambar dalam elemen img dengan id currentImage
                    $('#currentImage').attr('src', 'http://localhost:8000/storage/post_img/' + data.gambar);
                }
            }

            // Handle form submission
            $('#galeriForm').on('submit', function(event) {
                event.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST', // POST method with _method set to PUT
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function(response) {
                        console.log(response.message);
                        // Optionally redirect or show success message
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                        // Handle errors
                    }
                });
            });
        });
    </script>
@endsection
