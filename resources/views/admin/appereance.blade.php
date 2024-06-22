@extends('admin/master')

@section('title')
Appereance
@endsection

@section('content')

<div class="flex-grow py-6 px-12">

    <div class="flex space-x-6">
        {{-- test --}}
        <!-- Settings Navbar Form -->
        <div class="bg-white p-6 rounded-lg shadow-lg w-2/3">
            <h2 class="text-sm font-medium mb-6">Settings Navbar</h2>
            <form>
                <div class="mb-5">
                    <label for="namaMenu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Menu</label>
                    <input type="text" id="namaMenu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nama menu" required />
                </div>
                <div class="mb-5">
                    <form class="max-w-sm mx-auto">
                        <label for="posisiMenu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Posisi Menu</label>
                        <select id="posisiMenu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>United States</option>
                            <option>Canada</option>
                            <option>France</option>
                            <option>Germany</option>
                        </select>
                    </form>
                </div>
                <label class="inline-flex items-center mb-5 cursor-pointer">
                    <input type="checkbox" value="" class="sr-only peer">
                    <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Icon</span>
                </label>
                <div class="mb-5">
                    <input type="text" id="urlIcon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan url icon" required />
                  </div>
                <div class="mb-16">
                    <form class="mx-auto">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="logo">Tambah logo</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="logo" id="logo" type="file">
                    </form>
                </div>

                <div>
                    <button type="submit" class="w-full bg-blue-700 text-white p-1.5 rounded-lg hover:bg-blue-800">Save Menu</button>
                </div>
            </form>
        </div>

        <!-- Menu Items List -->
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
            <h2 class="text-xl font-bold mb-6">Menu Items</h2>
            <ul>
                <li class="flex items-center justify-between mb-4 p-2 border border-gray-300 rounded">
                    <span>Menu 2</span>
                    <button class="material-icons">edit</button>
                </li>
                <li class="flex items-center justify-between mb-4 p-2 border border-gray-300 rounded">
                    <span>Sub Menu 2</span>
                    <button class="material-icons">edit</button>
                </li>
                <li class="flex items-center justify-between mb-4 p-2 border border-gray-300 rounded">
                    <span>Sub Menu 2</span>
                    <button class="material-icons">edit</button>
                </li>
                <li class="flex items-center justify-between mb-4 p-2 border border-gray-300 rounded">
                    <span>Menu 2</span>
                    <button class="material-icons">edit</button>
                </li>
                <li class="flex items-center justify-between mb-4 p-2 border border-gray-300 rounded">
                    <span>Menu 3</span>
                    <button class="material-icons">edit</button>
                </li>
                <li class="flex items-center justify-between mb-4 p-2 border border-gray-300 rounded">
                    <span>Menu 4</span>
                    <button class="material-icons">edit</button>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection