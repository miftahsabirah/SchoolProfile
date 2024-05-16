@extends('master')

@section('title')
List Akreditasi
@endsection

@section('content')


<div class="px-4 py-8 mx-auto max-w-screen-xl">
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 border rounded-xl">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        AKREDITASI DIPEROLEH
                    </th>
                    <th scope="col" class="px-6 py-3">
                        TAHUN
                    </th>
                    <th scope="col" class="px-6 py-3">
                        DETAIL
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap">
                        A
                    </th>
                    <td class="px-6 py-4 font-bold text-gray-900">
                        2023
                    </td>
                    <td class="px-6 py-4">
                        <button type="button" class="text-white bg-gradient-to-r from-orange-500 via-orange-600 to-orange-800 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Lihat Detail
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </button>
                    </td>
                </tr>

                
                
            </tbody>
        </table>
    </div>
</div>

@endsection