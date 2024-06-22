@extends('admin/master')

@section('title')
Guru dan Karyawan
@endsection

@section('content')
<div class="bg-gray-100 flex justify-center h-auto">
    <div class="w-full mx-12 shadow-xl rounded-lg flex flex-col">
        <h2 class="text-sm font-medium px-6 py-3">Setting Guru dan Karyawan</h2>
        <div class="bg-white rounded-br-lg rounded-bl-lg shadow-lg flex-1 overflow-y-auto">
            <button class="bg-blue-600 text-white text-xs px-4 py-2 rounded-lg m-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>                  
                Tambah Guru dan Karyawan
            </button>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-2/12">Foto</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Guru</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIP</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jabatan</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No. Telp</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mapel</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aftif</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody id="table-body" class="bg-white divide-y divide-gray-200 text-xs font-medium">
                    <!-- Table rows will be inserted here dynamically -->
                </tbody>
            </table>

            <div class="flex justify-between items-center p-6">
                <div class="flex items-center space-x-2 text-xs">
                    <span>Rows per page:</span>
                    <select id="rowsPerPage" class="border-gray-300 rounded-md px-3 py-1 text-xs">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                    </select>
                    <span id="dataInfo">5 dari 15</span>
                </div>
                <div id="pagination" class="flex items-center">
                    <!-- Pagination buttons will be inserted here dynamically -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const data = [
        { id: 1, foto: 'img/guru.png', namaGuru: 'Miftah Sabirah', email: 'miftahsabirah@gmail.com', nip: '12345678', jabatan: 'Guru', noTelp: '0895123456', mapel: 'matematika', aktif: true },
        { id: 1, foto: 'img/guru.png', namaGuru: 'Ananda Putri', email: 'ana@gmail.com', nip: '12345678', jabatan: 'Guru', noTelp: '0895123456', mapel: 'matematika', aktif: true },
        { id: 1, foto: 'img/guru.png', namaGuru: 'Muflih', email: 'muflih@gmail.com', nip: '12345678', jabatan: 'Guru', noTelp: '0895123456', mapel: 'matematika', aktif: true },
        
    ];

    let currentPage = 1;
    let rowsPerPage = 5;
 
    function renderTable() {
        const tableBody = document.getElementById('table-body');
        tableBody.innerHTML = '';
        const start = (currentPage - 1) * rowsPerPage;
        const end = start + rowsPerPage;
        const pageData = data.slice(start, end);

        for (const row of pageData) {
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td class="px-4 py-4 whitespace-normal">${row.id}</td>
                <td class="px-4 py-4 whitespace-normal">
                    <img src="${row.foto}" alt="Foto" class="h-20 w-20 object-cover">
                </td>
                <td class="px-4 py-4 whitespace-normal">${row.namaGuru}</td>
                <td class="px-4 py-4 whitespace-normal">${row.email}</td>
                <td class="px-4 py-4 whitespace-normal">${row.nip}</td>
                <td class="px-4 py-4 whitespace-normal">${row.jabatan}</td>
                <td class="px-4 py-4 whitespace-normal">${row.noTelp}</td>
                <td class="px-4 py-4 whitespace-normal">${row.mapel}</td>
                <td class="px-4 py-4 whitespace-normal">
                    <label class="flex cursor-pointer">
                        <input type="checkbox" ${row.aktif ? 'checked' : ''} class="sr-only peer">
                        <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    </label>
                </td>
                <td class="px-4 py-4 whitespace-normal">
                    <div class="flex items-center">
                        <button class="bg-green-700 text-white px-2 py-1.5 rounded flex items-center">
                            <svg class="w-4 h-4 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd"/>
                                <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd"/>
                            </svg>
                            Edit
                        </button>
                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="bg-red-700 text-white px-2 py-1.5 rounded ml-2 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16" viewBox="0,0,256,256">
                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(16,16)"><path d="M6.49609,1c-0.82031,0 -1.49609,0.67578 -1.49609,1.49609v0.50391h-3v1h1v8.5c0,0.82813 0.67188,1.5 1.5,1.5h6c0.82813,0 1.5,-0.67187 1.5,-1.5v-8.5h1v-1h-3v-0.50391c0,-0.82031 -0.67578,-1.49609 -1.49609,-1.49609zM6.49609,2h2.00781c0.28125,0 0.49609,0.21484 0.49609,0.49609v0.50391h-3v-0.50391c0,-0.28125 0.21484,-0.49609 0.49609,-0.49609zM5,5h1v7h-1zM7,5h1v7h-1zM9,5h1v7h-1z"></path></g></g>
                            </svg>
                            Delete
                        </button>
                        <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="p-4 md:p-5 text-center">
                                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                        </svg>
                                        <h3 class="mb-5 text-sm font-normal text-gray-500 dark:text-gray-400">Apakah kamu ingin menghapus konten ini</h3>
                                        <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                            Ya
                                        </button>
                                        <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tidak</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>    
                </td>
            `;


            tableBody.appendChild(tr);
        }

        // Update info "5 dari 15"
        const infoElement = document.getElementById('dataInfo');
        const currentPageStart = (currentPage - 1) * rowsPerPage + 1;
        const currentPageEnd = Math.min(currentPage * rowsPerPage, data.length);
        infoElement.textContent = `${currentPageStart} - ${currentPageEnd} dari ${data.length}`;

        renderPagination();
    }

    function renderPagination() {
        const pagination = document.getElementById('pagination');
        pagination.innerHTML = '';

        const totalPages = Math.ceil(data.length / rowsPerPage);
        const maxVisiblePages = 5;

        const createPageButton = (label, page, isCurrent) => {
            const button = document.createElement('button');
            button.classList.add('px-3', 'py-1', 'border', 'border-gray-300', 'text-xs');
            if (isCurrent) {
                button.classList.add('bg-blue-100', 'text-blue-700');
            }
            button.textContent = label;
            button.addEventListener('click', () => {
                currentPage = page;
                renderTable();
            });
            return button;
        };

        // First and Previous buttons
        pagination.appendChild(createPageButton('❮❮', 1, false));
        pagination.appendChild(createPageButton('❮', Math.max(1, currentPage - 1), false));

        let startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
        let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);

        if (endPage - startPage < maxVisiblePages - 1) {
            startPage = Math.max(1, endPage - maxVisiblePages + 1);
        }

        for (let i = startPage; i <= endPage; i++) {
            pagination.appendChild(createPageButton(i, i, i === currentPage));
        }

        // Next and Last buttons
        pagination.appendChild(createPageButton('❯', Math.min(totalPages, currentPage + 1), false));
        pagination.appendChild(createPageButton('❯❯', totalPages, false));
    }

    document.getElementById('rowsPerPage').addEventListener('change', function() {
        rowsPerPage = parseInt(this.value);
        currentPage = 1;
        renderTable();
    });

    renderTable();
</script>
@endsection
