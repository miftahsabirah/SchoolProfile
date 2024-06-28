@extends('admin.master')

@section('title')
    Galeri
@endsection

@section('content')
    <div class="bg-gray-100 flex justify-center h-auto">
        <div class="w-full mx-12 shadow-xl rounded-lg flex flex-col">
            <h2 class="text-sm font-medium px-6 py-3">Setting Galeri</h2>
            <div class="bg-white rounded-br-lg rounded-bl-lg shadow-lg flex-1 overflow-y-auto">
                <button onclick="window.location.href='{{ route('adminformgaleri') }}'"
                    class="bg-blue-600 text-white text-xs px-4 py-2 rounded-lg m-4 flex items-center" id="button-clikgaleri">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Tambah Foto
                </button>

                <table class="min-w-full divide-y divide-gray-200" id="table_galeri">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID
                            </th>
                            <th
                                class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-2/12">
                                Foto</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Kategori</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aktif
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi
                            </th>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        let data = [];
        let currentPage = 1;
        let rowsPerPage = 5;

        function fetchData() {
            $.ajax({
                url: 'http://127.0.0.1:8000/api/getgaleri',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    console.log("Response data:", response); // Log response data
                    if (Array.isArray(response)) {
                        data = response;
                        renderTable();
                    } else {
                        console.error("Invalid data format. Expected an array.");
                    }
                },
                error: function(xhr, status, error) {
                    console.error("AJAX error:", error);
                }
            });
        }

        function renderTable() {
            const tableBody = $('#table-body');
            tableBody.empty();
            const start = (currentPage - 1) * rowsPerPage;
            const end = start + rowsPerPage;
            const pageData = data.slice(start, end);

            pageData.forEach(row => {
                const tr = `
                    <tr>
                        <td class="px-4 py-4 whitespace-normal">${row.id}</td>
                        <td class="px-4 py-4 whitespace-normal">
                            <img src="http://localhost:8000/storage/post_img/${row.gambar}" alt="Foto" class="h-20 w-20 object-cover">
                        </td>
                        <td class="px-4 py-4 whitespace-normal">${row.judul}</td>
                        <td class="px-4 py-4 whitespace-normal">${row.kategori}</td>
                        <td class="px-4 py-4 whitespace-normal">
                            <label class="flex cursor-pointer">
                                <input type="checkbox" ${row.aktif ? 'checked' : ''} class="sr-only peer">
                                <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            </label>
                        </td>
                        <td class="px-4 py-4 whitespace-normal">
                            <div class="flex items-center">
                                <button class="bg-green-700 text-white px-2 py-1.5 rounded flex items-center edit-btn" id="button-clikeditgaleri" data-id="${row.id}">
                                    <svg class="w-4 h-4 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd"/>
                                        <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd"/>
                                    </svg>
                                    Edit
                                </button>
                                
                                <button class="bg-red-700 text-white px-2 py-1.5 rounded ml-2 flex items-center delete-btn" data-id="${row.id}">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16" viewBox="0,0,256,256">
                                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <g transform="scale(16,16)">
                                                <path d="M6.49609,1c-0.82031,0 -1.49609,0.67578 -1.49609,1.49609v0.50391h-3v1h1v8.5c0,0.82813 0.67188,1.5 1.5,1.5h6c0.82813,0 1.5,-0.67187 1.5,-1.5v-8.5h1v-1h-3v-0.50391c0,-0.82031 -0.67578,-1.49609 -1.49609,-1.49609zM6.49609,2h2.00781c0.28125,0 0.49609,0.21484 0.49609,0.49609v0.50391h-3v-0.50391c0,-0.28125 0.21484,-0.49609 0.49609,-0.49609zM5,5h1v7h-1zM7,5h1v7h-1zM9,5h1v7h-1z"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    Delete
                                </button>
                            </div>
                        </td>
                    </tr>
                `;
                tableBody.append(tr);
            });

            $('.edit-btn').click(function() {
                const id = $(this).attr('data-id');
                window.location.href = `{{ url('/adminformeditgaleri') }}/${id}`;
            });

            $('.delete-btn').click(function() {
                const id = $(this).attr('data-id');
                deleteGalleryItem(id);
            });

            // Update info "5 dari 15"
            const infoElement = document.getElementById('dataInfo');
            const currentPageStart = (currentPage - 1) * rowsPerPage + 1;
            const currentPageEnd = Math.min(currentPage * rowsPerPage, data.length);
            infoElement.textContent = `${currentPageStart} - ${currentPageEnd} dari ${data.length}`;

            renderPagination();
        }

        function deleteGalleryItem(id) {
            // Remove the confirm dialog
            $.ajax({
                url: `http://127.0.0.1:8000/api/deletegaleri/${id}`,
                type: 'DELETE',
                success: function(response) {
                    console.log("Item deleted successfully");
                    fetchData(); // Assuming this function updates your UI after deletion
                },
                error: function(xhr, status, error) {
                    console.error("Error deleting item:", error);
                    alert('Failed to delete the item.');
                }
            });
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

        $(document).ready(function() {
            $('#rowsPerPage').on('change', (event) => {
                rowsPerPage = parseInt(event.target.value, 10);
                renderTable();
            });

            fetchData();
        });
    </script>
@endsection
