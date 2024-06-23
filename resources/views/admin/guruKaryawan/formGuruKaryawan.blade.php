@extends('admin/master')

@section('title')
Form Guru dan Karyawan
@endsection

@section('content')

<div class="flex-grow py-6 px-12">

    <div class="flex space-x-6">
        <div class="w-1/2 shadow-xl rounded-lg">
            <h2 class="text-sm font-medium px-6 py-3">Settings Mata Pelajaran</h2>
            <div class="bg-white p-6 rounded-br-lg rounded-bl-lg shadow-lg w-full">
                <form>
                    <div class="mb-10">
                        <label for="mataPelajaran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mata Pelajaran</label>
                        <input type="text" id="mataPelajaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nama mata pelajaran" required />
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-blue-700 text-white p-1.5 rounded-lg hover:bg-blue-800">Save Menu</button>
                    </div>
                </form>
            </div>        
        </div>
    
        <div class="w-1/2 shadow-xl rounded-lg">
            <h2 class="text-sm font-medium px-6 py-3">Settings Jurusan</h2>
            <div class="bg-white p-6 rounded-br-lg rounded-bl-lg shadow-lg w-full">
                <form>
                    <div class="mb-10">
                        <label for="jurusan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">j</label>
                        <input type="text" id="jurusan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nama jurusan" required />
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
                
                <form>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="namaGuru" class="block mb-2 text-sm font-medium text-gray-900">Nama Guru</label>
                            <input type="text" id="namaGuru" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nama guru" required />
                        </div>
                        <div>
                            <label for="kontak" class="block mb-2 text-sm font-medium text-gray-900">Phone Number</label>
                            <input type="text" id="kontak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. +(12)3456 789" required />
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="hello@gmail.com" required />
                        </div>  
                        <div>
                            <form class="max-w-sm mx-auto">
                            <label for="mapel" class="block mb-2 text-sm font-medium text-gray-900">Mata Pelajaran</label>
                            <select id="mapel" class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option>Matematika</option>
                                <option>Fisika</option>
                                <option>Kimia</option>
                                <option>Biologi</option>
                            </select>
                            </form>  
                        </div>
                        <div>
                            {{-- testing commit --}}
                            <label for="nip" class="block mb-2 text-sm font-medium text-gray-900">NIP</label>
                            <input type="text" id="nip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. 123456" required />
                        </div>
                        <div>
                            <form class="max-w-lg mx-auto">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="foto">Foto Profil</label>
                                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="foto" type="file">
                            </form>
                        </div>
                        <div>
                            <label for="golongan" class="block mb-2 text-sm font-medium text-gray-900">Golongan</label>
                            <input type="text" id="golongan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan golongan" required />
                        </div>
                        <div>
                            <form class="max-w-sm mx-auto">
                            <label for="jabatan" class="block mb-2 text-sm font-medium text-gray-900">Jabatan</label>
                            <select id="jabatan" class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option>Kepala Sekolah</option>
                                <option>Wakil Kepala Sekolah</option>
                                <option>Guru</option>
                                <option>Karyawan</option>
                            </select>
                            </form>  
                        </div>
                    </div>
                    <div class="mb-12">
                        <label for="deskripsiTentang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Tentang Sekolah</label>
                        <textarea id="deskripsiTentang" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan deskripsi disini..."></textarea>
                        <div class="text-xs text-gray-500 mt-1">A note for extra info</div>
                    </div>
                    
                    <button type="submit" class="w-full bg-blue-700 text-white p-1.5 rounded-lg hover:bg-blue-800 mb-5">Save changes</button>
                </form>

            </div>
        </div>
    </div>
</div> 

@endsection