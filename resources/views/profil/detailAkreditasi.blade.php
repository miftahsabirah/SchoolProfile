@extends('master')

@section('title')
Detail Akreditasi
@endsection

@section('content')

<div class="flex flex-col px-4 py-8 mx-auto max-w-screen-xl">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table
            class="min-w-full border-2 border-neutral-200 text-center text-sm font-light text-surface">

            <tbody>
              <tr class="border-b border-neutral-200 dark:border-white/10">
                <td
                  class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 font-medium dark:border-white/10 text-left">
                  Naungan
                </td>
                <td
                  class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 dark:border-white/10 text-left">
                  Kementerian Pendidikan dan Kebudayaan
                </td>
              </tr>

              <tr class="border-b border-neutral-200 dark:border-white/10">
                <td
                  class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 font-medium dark:border-white/10 text-left">
                  No. SK. Pendirian
                </td>
                <td
                  class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 dark:border-white/10 text-left">
                  640/DP/1353/XI/2010
                </td>
              </tr>

              <tr class="border-b border-neutral-200 dark:border-white/10">
                <td
                  class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 font-medium dark:border-white/10 text-left">
                  Tanggal. SK. Pendirian
                </td>
                <td
                  class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 dark:border-white/10 text-left">
                  2010-11-08
                </td>
              </tr>

              <tr class="border-b border-neutral-200 dark:border-white/10">
                <td
                  class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 font-medium dark:border-white/10 text-left">
                  Tanggal SK. Operasional
                </td>
                <td
                  class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 dark:border-white/10 text-left">
                  2007-12-15
                </td>
              </tr>

              <tr class="border-b border-neutral-200 dark:border-white/10">
                <td
                  class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 font-medium dark:border-white/10 text-left">
                  Akreditasi
                </td>
                <td
                  class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 dark:border-white/10 text-left">
                  A
                </td>
              </tr>

              <tr class="border-b border-neutral-200 dark:border-white/10">
                <td
                  class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 font-medium dark:border-white/10 text-left">
                  No. SK. Akreditasi
                </td>
                <td
                  class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 dark:border-white/10 text-left">
                  10.01/BAP-SM/TU/XI/2017
                </td>
              </tr>

              <tr class="border-b border-neutral-200 dark:border-white/10">
                <td
                  class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 font-medium dark:border-white/10 text-left">
                  Tanggal SK. Akreditasi
                </td>
                <td
                  class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 dark:border-white/10 text-left">
                  10-11-2017
                </td>
              </tr>

              <tr class="border-b border-neutral-200 dark:border-white/10">
                <td
                  class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 font-medium dark:border-white/10 text-left">
                  No. Sertifikasi ISO
                </td>
                <td
                  class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 dark:border-white/10 text-left">
                  Belum Bersertifikat
                </td>
              </tr>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="flex justify-center mt-12">
        <button type="button" class="text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-orange-300 font-semibold rounded-lg text-sm px-7 py-3 text-center inline-flex items-center">
            Lihat Sertifikat
        </button>
    </div>

  </div>



@endsection