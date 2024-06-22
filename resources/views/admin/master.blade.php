<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    
</head>

<body class="font-poppins bg-gray-100">

    <div class="flex overflow-hidden bg-gray-100">
        <aside id="sidebar" class="flex flex-col flex-shrink-0 min-h-screen bg-blue-900 border-r border-gray-200">
            <div class="flex flex-col flex-1 min-h-0">
                <div class="flex flex-col flex-1 pt-5 pb-4">
                    <div class="flex-1 px-2 space-y-1 divide-y divide-gray-200">
                        <ul class="pb-1 space-y-1">
                            <li>
                                <a href="./index.html" class="flex items-center p-2 text-base font-normal text-white rounded-lg">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                    </svg>
                                    <span class="ml-3 font-bold text-lg" sidebar-toggle-item>SD N 1 Ciren</span>
                                </a>
                            </li>
                            <li>
                                <form action="#" method="GET" class="lg:hidden">
                                    <label for="mobile-search" class="sr-only">Search</label>
                                    <div class="relative">
                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input type="text" name="email" id="mobile-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5" placeholder="Search">
                                    </div>
                                </form>
                            </li>
                            <li>
                                <a href="./index.html" class="flex items-center p-2 text-sm font-normal text-white rounded-lg hover:text-gray-900 group transition duration-75 group hover:bg-gray-100">
                                    <svg class="w-5 h-5 text-white transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                    </svg>
                                    <span class="ml-3" sidebar-toggle-item>Landing Page</span>
                                </a>
                            </li>
                            <li>
                                <button type="button" class="flex items-center p-2 w-full text-sm font-normal text-white rounded-lg hover:text-gray-900 transition duration-75 group hover:bg-gray-100" aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                                    <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd"></path></svg>
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Pages</span>
                                    <svg sidebar-toggle-item class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                                <ul id="dropdown-pages" class="hidden py-2 space-y-2">
                                    <li>
                                        <a href="#" class="flex items-center p-2 pl-11 text-sm font-normal text-white rounded-lg hover:text-gray-900 transition duration-75 group hover:bg-gray-100">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center p-2 pl-11 text-sm font-normal text-white rounded-lg hover:text-gray-900 transition duration-75 group hover:bg-gray-100">Maintenance</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center p-2 pl-11 text-sm font-normal text-white rounded-lg hover:text-gray-900 transition duration-75 group hover:bg-gray-100">404 not found</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center p-2 pl-11 text-sm font-normal text-white rounded-lg hover:text-gray-900 transition duration-75 group hover:bg-gray-100">500 server error</a>
                                    </li>
                                </ul>
                                </li>
                            <li>
                                <a href="./index.html" class="flex items-center p-2 text-sm font-normal text-white rounded-lg hover:text-gray-900 group transition duration-75 group hover:bg-gray-100">
                                    <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                                <span class="flex-1 ml-3 whitespace-nowrap" sidebar-toggle-item>Organisasi</span>
                            </a>
                            </li>
                            <li>
                            <a href="./mailing/inbox.html" class="flex items-center p-2 text-sm font-normal text-white rounded-lg hover:text-gray-900 hover:bg-gray-100 group">
                                <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                                <span class="flex-1 ml-3 whitespace-nowrap" sidebar-toggle-item>Akademik</span>
                            </a>
                            </li>
                            <li>
                            <a href="./mailing/inbox.html" class="flex items-center p-2 text-sm font-normal text-white rounded-lg hover:bg-gray-100 group">
                                <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                                <span class="flex-1 ml-3 whitespace-nowrap" sidebar-toggle-item>Sarana & Prasarana</span>
                            </a>
                            </li>
                            <li>
                            <a href="./mailing/inbox.html" class="flex items-center p-2 text-sm font-normal text-white rounded-lg hover:bg-gray-100 group">
                                <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                                <span class="flex-1 ml-3 whitespace-nowrap" sidebar-toggle-item>Informasi</span>
                            </a>
                            </li>
                            <li>
                            <a href="./mailing/inbox.html" class="flex items-center p-2 text-sm font-normal text-white rounded-lg hover:bg-gray-100 group">
                                <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                                <span class="flex-1 ml-3 whitespace-nowrap" sidebar-toggle-item>Galeri</span>
                            </a>
                            </li>
                        </ul>
                
                        <div class="pt-2 space-y-2">
                            <a href="https://flowbite.com/docs/components/alerts/" target="_blank" class="flex items-center p-2 text-sm font-normal text-white rounded-lg transition duration-75 hover:bg-gray-100 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                            <span class="ml-3" sidebar-toggle-item>Appereance</span>
                            </a>
                            <a href="https://github.com/themesberg/flowbite/issues" target="_blank" class="flex items-center p-2 text-sm font-normal text-white rounded-lg transition duration-75 hover:bg-gray-100 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path></svg>
                            <span class="ml-3" sidebar-toggle-item>Pengaturan</span>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- <div class="hidden absolute bottom-0 left-0 justify-center p-4 space-x-4 w-full lg:flex" sidebar-bottom-menu></div> --}}
            </div>
        </aside>

        <div id="main-content" class="flex-1 flex flex-col bg-gray-100">
            <nav class="fixed z-30 w-full bg-white border-b border-gray-200 dark:bg-gray-800">
                <div class="py-3 px-3 lg:px-5 lg:pl-3">
                    <div class="flex justify-between items-center w-4/5">
                        <div class="flex items-center">
                            <button id="toggleSidebar" aria-expanded="true" aria-controls="sidebar"
                                class="hidden p-2 mr-3 text-gray-600 rounded cursor-pointer lg:inline hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar"
                                class="p-2 mr-2 text-gray-600 rounded cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <svg id="toggleSidebarMobileClose" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    
                        <div class="hidden lg:flex-grow lg:flex lg:items-center">
                            <form action="#" method="GET" class="w-4/5 mr-4 lg:mr-0">
                                <label for="topbar-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-white dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input type="text" name="search" id="topbar-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search">
                                </div>
                            </form>
                        </div>
                    
                        <div class="flex items-center lg:hidden">
                            <button id="toggleSidebarMobileSearch" type="button"
                                class="p-2 text-white rounded-lg lg:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Search</span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    
                        {{-- logout button --}}
                        {{-- <div class="ml-auto flex items-center">
                            <button class="flex items-center text-white hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M22.763,10.232l-4.95-4.95L16.4,6.7,20.7,11H6.617v2H20.7l-4.3,4.3,1.414,1.414,4.95-4.95a2.5,2.5,0,0,0,0-3.536Z"/>
                                    <path d="M10.476,21a1,1,0,0,1-1,1H3a1,1,0,0,1-1-1V3A1,1,0,0,1,3,2H9.476a1,1,0,0,1,1,1V8.333h2V3a3,3,0,0,0-3-3H3A3,3,0,0,0,0,3V21a3,3,0,0,0,3,3H9.476a3,3,0,0,0,3-3V15.667h-2Z"/>
                                </svg>
                            </button>
                        </div> --}}
                    </div>
                    
                </div>
                
            </nav>

            <main>
                <div class="my-24 bg-gray-100">
                    @yield('content')
                </div>
                
            </main>
            
        </div>
    </div>





    <script>
        const isSidebarExpanded = toggleSidebarEl => {
            return toggleSidebarEl.getAttribute('aria-expanded') === 'true' ? true : false;
        }
    
        const toggleSidebar = (sidebarEl, expand, setExpanded = false) => {
            // const bottomMenuEl = document.querySelector('[sidebar-bottom-menu]'); // Removed
            const mainContentEl = document.getElementById('main-content');
            if (expand) {
                sidebarEl.classList.add('lg:w-52');
                sidebarEl.classList.remove('lg:w-16');
                mainContentEl.classList.remove('lg:ml-16');
    
                document.querySelectorAll('#' + sidebarEl.getAttribute('id') + ' [sidebar-toggle-item]').forEach(sidebarToggleEl => {
                    sidebarToggleEl.classList.remove('lg:hidden');
                    sidebarToggleEl.classList.remove('lg:absolute');
                });
    
                document.querySelectorAll('#' + sidebar.getAttribute('id') + ' ul > li > ul > li > a').forEach(e => {
                    e.classList.add('pl-11');
                    e.classList.remove('px-4');
                    e.childNodes[0].classList.remove('hidden');
                    e.childNodes[1].classList.add('hidden');
                });
    
                // Removed operations on bottomMenuEl
                // bottomMenuEl.classList.remove('flex-col', 'space-y-4', 'p-2');
                // bottomMenuEl.classList.add('space-x-4', 'p-4');
                setExpanded ? toggleSidebarEl.setAttribute('aria-expanded', 'true') : null;
            } else {
                sidebarEl.classList.remove('lg:w-52');
                sidebarEl.classList.add('lg:w-16');
                mainContentEl.classList.remove('lg:ml-64');
    
                document.querySelectorAll('#' + sidebarEl.getAttribute('id') + ' [sidebar-toggle-item]').forEach(sidebarToggleEl => {
                    sidebarToggleEl.classList.add('lg:hidden');
                    sidebarToggleEl.classList.add('lg:absolute');
                });
    
                document.querySelectorAll('#' + sidebar.getAttribute('id') + ' ul > li > ul > li > a').forEach(e => {
                    e.classList.remove('pl-11');
                    e.classList.add('px-4');
                    e.childNodes[0].classList.add('hidden');
                    e.childNodes[1].classList.remove('hidden');
                });
    
                // Removed operations on bottomMenuEl
                // bottomMenuEl.classList.add('flex-col', 'space-y-4', 'p-2');
                // bottomMenuEl.classList.remove('space-x-4', 'p-4');
                setExpanded ? toggleSidebarEl.setAttribute('aria-expanded', 'false') : null;
            }
        }
    
        const toggleSidebarEl = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');
    
        document.querySelectorAll('#' + sidebar.getAttribute('id') + ' ul > li > ul > li > a').forEach(e => {
            var fullText = e.textContent;
            var firstLetter = fullText.substring(0, 1);
    
            var fullTextEl = document.createElement('span');
            var firstLetterEl = document.createElement('span');
            firstLetterEl.classList.add('hidden');
            fullTextEl.textContent = fullText;
            firstLetterEl.textContent = firstLetter;
    
            e.textContent = '';
            e.appendChild(fullTextEl);
            e.appendChild(firstLetterEl);
        });
    
        if (localStorage.getItem('sidebarExpanded') !== null) {
            if (localStorage.getItem('sidebarExpanded') === 'true') {
                toggleSidebar(sidebar, true, false);
            } else {
                toggleSidebar(sidebar, false, true);
            }
        }
    
        toggleSidebarEl.addEventListener('click', () => {
            localStorage.setItem('sidebarExpanded', !isSidebarExpanded(toggleSidebarEl));
            toggleSidebar(sidebar, !isSidebarExpanded(toggleSidebarEl), true);
        });
    
        sidebar.addEventListener('mouseenter', () => {
            if (!isSidebarExpanded(toggleSidebarEl)) {
                toggleSidebar(sidebar, true);
            }
        });
    
        sidebar.addEventListener('mouseleave', () => {
            if (!isSidebarExpanded(toggleSidebarEl)) {
                toggleSidebar(sidebar, false);
            }
        });
    
        const toggleSidebarMobile = (sidebar, sidebarBackdrop, toggleSidebarMobileHamburger, toggleSidebarMobileClose) => {
            sidebar.classList.toggle('hidden');
            sidebarBackdrop.classList.toggle('hidden');
            toggleSidebarMobileHamburger.classList.toggle('hidden');
            toggleSidebarMobileClose.classList.toggle('hidden');
        }
    
        const toggleSidebarMobileEl = document.getElementById('toggleSidebarMobile');
        const sidebarBackdrop = document.getElementById('sidebarBackdrop');
        const toggleSidebarMobileHamburger = document.getElementById('toggleSidebarMobileHamburger');
        const toggleSidebarMobileClose = document.getElementById('toggleSidebarMobileClose');
        const toggleSidebarMobileSearch = document.getElementById('toggleSidebarMobileSearch');
    
        toggleSidebarMobileSearch.addEventListener('click', () => {
            toggleSidebarMobile(sidebar, sidebarBackdrop, toggleSidebarMobileHamburger, toggleSidebarMobileClose);
        });
    
        toggleSidebarMobileEl.addEventListener('click', () => {
            toggleSidebarMobile(sidebar, sidebarBackdrop, toggleSidebarMobileHamburger, toggleSidebarMobileClose);
        });
    
        sidebarBackdrop.addEventListener('click', () => {
            toggleSidebarMobile(sidebar, sidebarBackdrop, toggleSidebarMobileHamburger, toggleSidebarMobileClose);
        });
    </script>

    
    
</body>

</html>