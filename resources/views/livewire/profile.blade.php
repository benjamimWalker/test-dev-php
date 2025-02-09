<div class="flex items-center justify-end">
    <div class="bg-dark-primary w-2/3 mt-10 rounded-lg">
        <div class="flex items-center justify-center pt-10 flex-col">
            <h1 class="text-gray-400">
                <a href="{{ route('candidate', ['candidate' => auth()->user()->id]) }}">
                    {{ auth()->user()->name }}
                </a>
            </h1>
            <a href="{{ route('logout') }}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Sair</a>
        </div>
    </div>
</div>
