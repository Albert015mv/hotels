<div>
    <footer class="text-gray-600 body-font bg-gray-50 border-t border-gray-200">
        <div class="container px-5 py-16 mx-auto flex md:flex-row flex-col flex-wrap items-start">
            <!-- Sección principal -->
            <div class="w-full md:w-1/4 text-center md:text-left mb-10 md:mb-0">
                <a class="flex title-font font-medium items-center justify-center md:justify-start text-gray-900">
                    <img src="{{ asset('img/logoTeapa.png') }}" class="w-47 h-20 rounded-full p-2" alt="Logo Teapa Tabasco">
                    <span class="ml-3 text-xl font-semibold">Teapa Tabasco</span>
                </a>
                <p class="mt-3 text-sm text-gray-500">Conoce más sobre el pueblo mágico</p>
            </div>

            <!-- Categorías -->
            <div class="w-full md:w-2/4 mb-10 md:mb-0 px-4">
                <h2 class="title-font font-medium text-gray-800 tracking-widest text-sm mb-5">CATEGORÍAS</h2>
                <nav class="list-none space-y-3">
                    <li>
                        <a href="catalogoHoteles" class="flex items-center text-gray-600 hover:text-gray-800">
                            <svg class="w-5 h-5 mr-2 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 2a6 6 0 00-6 6v5h12V8a6 6 0 00-6-6zM5 16v2a3 3 0 006 0v-2H5z"></path>
                            </svg> Hoteles
                        </a>
                    </li>
                    <li>
                        <a href="balnearios/index" class="flex items-center text-gray-600 hover:text-gray-800">
                            <svg class="w-5 h-5 mr-2 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 9a2 2 0 100-4 2 2 0 000 4zM2 10a6 6 0 016-6v4H6a2 2 0 00-2 2v1h4v-1a2 2 0 00-2-2H2z"></path>
                            </svg> Balnearios
                        </a>
                    </li>
                    <li>
                        <a href="restaurants/index" class="flex items-center text-gray-600 hover:text-gray-800">
                            <svg class="w-5 h-5 mr-2 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M6 3a3 3 0 00-3 3v7h14V6a3 3 0 00-3-3H6zM4 16v2a2 2 0 004 0v-2H4z"></path>
                            </svg> Restaurantes
                        </a>
                    </li>
                    <li>
                        <a href="tour/index" class="flex items-center text-gray-600 hover:text-gray-800">
                            <svg class="w-5 h-5 mr-2 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 2a7 7 0 100 14 7 7 0 000-14z"></path>
                            </svg> Zonas Turísticas
                        </a>
                    </li>
                </nav>
            </div>

            <!-- Creadores -->
            <div class="w-full md:w-1/4">
                <h2 class="title-font font-medium text-gray-800 tracking-widest text-sm mb-5">CREADORES</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-6">
                    <div class="text-center">
                        <img src="{{ asset('img/isabel.jfif') }}" class="w-16 h-16 rounded-full mx-auto shadow-md" alt="Isabel">
                        <p class="text-sm text-gray-500 mt-2">Isabel</p>
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('img/jose.jfif') }}" class="w-16 h-16 rounded-full mx-auto shadow-md" alt="José">
                        <p class="text-sm text-gray-500 mt-2">José</p>
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('img/enrique.jfif') }}" class="w-16 h-16 rounded-full mx-auto shadow-md" alt="Enrique">
                        <p class="text-sm text-gray-500 mt-2">Enrique</p>
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('img/miguel.jfif') }}" class="w-16 h-16 rounded-full mx-auto shadow-md" alt="Miguel">
                        <p class="text-sm text-gray-500 mt-2">Miguel</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-200">
            <div class="container mx-auto py-4 flex flex-col sm:flex-row items-center justify-between">
                <p class="text-gray-500 text-sm text-center sm:text-left">© Teapa Tabasco — 
                    <a href="#" class="text-gray-600 ml-1" target="_blank">@albertomart420</a>
                </p>
                <div class="inline-flex mt-2 sm:mt-0">
                    <a href="#" class="text-gray-500 mr-3">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 2H2v20h20V2zM11 18H5v-1h6v1zm0-4H5v-1h6v1zm0-4H5V9h6v1zm8 8h-6v-1h6v1zm0-4h-6v-1h6v1zm0-4h-6V9h6v1z"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2a10 10 0 1010 10A10 10 0 0012 2zm0 18.2A8.2 8.2 0 1120.2 12 8.21 8.21 0 0112 20.2zm0-15.5A7.2 7.2 0 104.8 12 7.22 7.22 0 0012 4.8zm-3.2 7.5a1.5 1.5 0 112.2-2.2 1.5 1.5 0 01-2.2 2.2zm6.5 6.5a4.8 4.8 0 01-5.3-2.9.74.74 0 01.2-.8A3 3 0 0012 16a3 3 0 004.6 0 .74.74 0 01.2.8 4.81 4.81 0 01-2.5 2.9z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</div>
