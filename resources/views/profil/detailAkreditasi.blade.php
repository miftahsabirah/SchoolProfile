@extends('master')

@section('title')
    Detail Akreditasi
@endsection

@section('content')
    <div class="flex flex-col px-4 py-8 mx-auto max-w-screen-xl">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full border-2 border-neutral-200 text-center text-sm font-light text-surface">
                        <tbody id="detailAkreditasiBody">
                            <!-- Dynamic Content -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-12">
            <button type="button"
                class="text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-orange-300 font-semibold rounded-lg text-sm px-7 py-3 text-center inline-flex items-center">
                Lihat Sertifikat
            </button>
        </div>
    </div>
@endsection

@section('addScript')
    <script>
        $(document).ready(function() {
            // Get the ID from the URL
            var urlParams = new URLSearchParams(window.location.search);
            var id = urlParams.get('id');

            if (id) {
                $.ajax({
                    url: "/getdetailakreditasi/" + id, // Ensure this matches your route
                    type: "GET",
                    dataType: "json",
                    success: function(response) {
                        if (response) {
                            var html = '';
                            html += '<tr class="border-b border-neutral-200 dark:border-white/10">';
                            html +=
                                '<td class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 font-medium dark:border-white/10 text-left">Naungan</td>';
                            html +=
                                '<td class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 dark:border-white/10 text-left">Kementerian Pendidikan dan Kebudayaan</td>';
                            html += '</tr>';

                            html += '<tr class="border-b border-neutral-200 dark:border-white/10">';
                            html +=
                                '<td class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 font-medium dark:border-white/10 text-left">No. SK. Pendirian</td>';
                            html +=
                                '<td class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 dark:border-white/10 text-left">' +
                                response.no_sk_pendirian + '</td>';
                            html += '</tr>';

                            html += '<tr class="border-b border-neutral-200 dark:border-white/10">';
                            html +=
                                '<td class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 font-medium dark:border-white/10 text-left">Tanggal. SK. Pendirian</td>';
                            html +=
                                '<td class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 dark:border-white/10 text-left">' +
                                response.tanggal_sk_pendirian + '</td>';
                            html += '</tr>';

                            html += '<tr class="border-b border-neutral-200 dark:border-white/10">';
                            html +=
                                '<td class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 font-medium dark:border-white/10 text-left">Tanggal SK. Operasional</td>';
                            html +=
                                '<td class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 dark:border-white/10 text-left">' +
                                response.tanggal_sk_operasional + '</td>';
                            html += '</tr>';

                            html += '<tr class="border-b border-neutral-200 dark:border-white/10">';
                            html +=
                                '<td class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 font-medium dark:border-white/10 text-left">Akreditasi</td>';
                            html +=
                                '<td class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 dark:border-white/10 text-left">' +
                                response.akreditasi + '</td>';
                            html += '</tr>';

                            html += '<tr class="border-b border-neutral-200 dark:border-white/10">';
                            html +=
                                '<td class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 font-medium dark:border-white/10 text-left">No. SK. Akreditasi</td>';
                            html +=
                                '<td class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 dark:border-white/10 text-left">' +
                                response.no_sk_akreditasi + '</td>';
                            html += '</tr>';

                            html += '<tr class="border-b border-neutral-200 dark:border-white/10">';
                            html +=
                                '<td class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 font-medium dark:border-white/10 text-left">Tanggal SK. Akreditasi</td>';
                            html +=
                                '<td class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 dark:border-white/10 text-left">' +
                                response.tanggal_sk_akreditasi + '</td>';
                            html += '</tr>';

                            html += '<tr class="border-b border-neutral-200 dark:border-white/10">';
                            html +=
                                '<td class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 font-medium dark:border-white/10 text-left">No. Sertifikasi ISO</td>';
                            html +=
                                '<td class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 dark:border-white/10 text-left">' +
                                response.no_sertifikasi_iso + '</td>';
                            html += '</tr>';

                            $('#detailAkreditasiBody').html(html);
                        } else {
                            console.log("No data found for the given ID.");
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            } else {
                console.log("No ID parameter found in the URL.");
            }
        });
    </script>
@endsection
