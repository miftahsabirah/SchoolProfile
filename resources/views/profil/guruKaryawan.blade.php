@extends('master')

@section('title')
Guru Karyawan
@endsection

@section('page_title')
    Guru Karyawan
@endsection

@section('content')
@include('header')

<div class="flex text-sm font-medium text-center text-gray-500 border-b border-gray-200 justify-center m-4">
    <ul class="flex flex-wrap -mb-px">
        <li class="me-2">
            <a href="#" data-filter="" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 filter-link">Semua</a>
        </li>
        <li class="me-2">
            <a href="#" data-filter="guru" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 filter-link">Guru</a>
        </li>
        <li class="me-2">
            <a href="#" data-filter="Kepala Sekolah" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 filter-link">Kepala Sekolah</a>
        </li>
        <li class="me-2">
            <a href="#" data-filter="karyawan" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 filter-link">Staf</a>
        </li>
    </ul>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 m-4" id="cf-data-container">

</div>



@endsection
@section('addScript')
    

<script>
    function fetchData(filter = '') {
        $.ajax({
            url: "{!! route('getguru') !!}",
            type: "GET",
            dataType: "json",
            success: function (response) {
                if (Array.isArray(response)) {
                    var html = '';
                    response.forEach(function(item) {
                        if (!filter || item.jabatan.nama_jabatan.toLowerCase() === filter.toLowerCase()) {
                            html += '<div class="relative">';
                            html += '<img class="h-auto w-full" src="{{ asset('img/guru.png') }}" alt="office feature image">';
                            html += '<div class="absolute bottom-0 left-0 right-0 text-center text-white px-4 py-2 bg-blue-950 bg-opacity-75">';
                            html += '<p class="font-bold text-2xl">' + item.nama_guru + '</p>';
                            html += '<p class="text-xl font-normal">' + item.jabatan.nama_jabatan + '</p>';
                            html += '</div>';
                            html += '</div>';
                        }
                    });
                    $('#cf-data-container').html(html);
                } else {
                    console.log("Invalid data format. Expected an array.");
                }
            },
            error: function (xhr, status, error) {
                console.log(error);
            }
        });
    }

    $(document).ready(function() {
        // Initial data fetch
        fetchData();

        // Set up click event handlers for the filter links
        $('.filter-link').click(function(e) {
            e.preventDefault();
            var filter = $(this).data('filter');
            fetchData(filter);

            // Update active state
            $('.filter-link').removeClass('text-blue-600 border-blue-600 dark:text-blue-500 dark:border-blue-500');
            $(this).addClass('text-blue-600 border-blue-600 dark:text-blue-500 dark:border-blue-500');
        });
    });
</script>


@endsection

