<nav class="bg-gray-800">
    <div class="max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <a href="#" class="flex-shrink-0">
                    <img class="h-8 w-8 rounded-full" src="" alt="Logo MAG">
                </a>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href=""
                            class="hover:bg-gray-700 text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out">Home</a>
                        <a href=""
                            class="hover:bg-gray-700 text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out">Clientes</a>
                        <a href="{{ route('tags.index')}}"
                            class="hover:bg-gray-700 text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out">Categorias</a>
                        <a href="{{ route('products.index')}}"
                            class="hover:bg-gray-700 text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out">Produtos</a>
                        <a href=""
                            class="hover:bg-gray-700 text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out">Pedidos</a>
                        <a href="{{ route('login')}}"
                            class="hover:bg-gray-700 text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out"
                            target="_blank">Acesso</a>
                        <a href="{{ route('register')}}"
                            class="hover:bg-gray-700 text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out"
                            target="_blank">Cadastro</a>
                    </div>
                </div>
            </div>
            <div class="-mr-2 md:hidden text-white">
                <button id="btnMenu" type="button"
                    class="inline-flex items-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-300 ease-in-out"
                    aria-label="Menu" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div id="menu" class="hidden md:hidden">
        <div class="px-2 pt-2 pd-3 sm:px-3">
            <a href="#" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium transition duration-300 ease-in-out">Home</a>
            <a href="#" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium transition duration-300 ease-in-out">Clientes</a>
            <a href="{{ route('tags.index')}}" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium transition duration-300 ease-in-out">Categorias</a>
            <a href="{{ route('products.index')}}" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium transition duration-300 ease-in-out">Produtos</a>
            <a href="#" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium transition duration-300 ease-in-out">Pedidos</a>
            <a href="{{ route('login')}}" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium transition duration-300 ease-in-out">Acesso</a>
            <a href="{{ route('register')}}" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium transition duration-300 ease-in-out">Cadastro</a>
            <a href="#" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium transition duration-300 ease-in-out">Home</a>
        </div>
    </div>
</nav>
<script>
    const btn = document.getElementById('btnMenu')
    const menu = document.getElementById('menu')
    btn.addEventListener("click", () => {
        //alert("okok")
        menu.classList.toggle("hidden")
    })
</script>
