@extends('admin/master')

@section('title')
Landing Page
@endsection

@section('content')

<div class="flex items-center justify-center">
    <div class="w-full px-12 shadow-xl rounded-lg">
        <h2 class="text-sm font-medium px-6 py-3">Settings Landing Page</h2>
        <div class="bg-white p-6 rounded-br-lg rounded-bl-lg shadow-lg w-full">
            <form id="landingForm" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-5">
                    <label for="nama_sekolah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Sekolah</label>
                    <input type="text" id="nama_sekolah" name="nama_sekolah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Masukkan nama sekolah">
                </div>

                <div class="mb-5">
                    <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Sekolah</label>
                    <textarea id="alamat" name="alamat" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan alamat"></textarea>
                </div>

                <div class="mb-5">
                    <label for="nomor_telepon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kontak Sekolah</label>
                    <input type="text" id="nomor_telepon" name="nomor_telepon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Masukkan kontak telepon">
                </div>

                <div class="mb-5">
                    <label for="kode_pos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Pos</label>
                    <input type="text" id="kode_pos" name="kode_pos" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Masukkan kode pos">
                </div>
                
                <div class="mb-20">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="logo_sekolah">Logo Sekolah</label>
                    <input class="block w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="logo_sekolah" id="logo_sekolah" name="logo_sekolah" type="file">
                    <img id="currentImage" src="" alt="Current Image" class="mt-2 max-w-full h-auto">
                </div>

    
                <div>
                    <button type="submit" class="w-full bg-blue-700 text-white p-1.5 rounded-lg hover:bg-blue-800 mb-5">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        function fetchData() {
            $.ajax({
                url: 'http://127.0.0.1:8000/api/profile',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    var data = response[0]; 
                    
                    $('#nama_sekolah').val(data.nama_sekolah);
                    $('#alamat').val(data.alamat);
                    $('#nomor_telepon').val(data.nomor_telepon);
                    $('#kode_pos').val(data.kode_pos);
                    
                    if (data.logo_sekolah) {
                        var imageUrl = 'http://localhost:8000/storage/logo_school/' + data.logo_sekolah;
                        $('#currentImage').attr('src', imageUrl);
                    } else {
                        $('#currentImage').attr('src', ''); // Handle jika tidak ada gambar
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('AJAX Error:', textStatus, errorThrown);
                }
            });
        }

        // Call fetch data function when document is ready
        fetchData();

        // Handle form submission
        $('#landingForm').submit(function(e) {
            e.preventDefault(); // Prevent default form submission
            
            var formData = new FormData(this);

            $.ajax({
                url: 'http://127.0.0.1:8000/api/profile/updateprofileschool',
                type: 'POST',
                data: formData,
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log('Update berhasil:', response);
                    alert('Data berhasil diperbarui!');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('AJAX Error:', textStatus, errorThrown);
                    alert('Terjadi kesalahan saat memperbarui data.');
                }
            });
        });
    });
</script>

@endsection
