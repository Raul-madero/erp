 <!-- Formulario de búsqueda -->
<form method="GET" action="{{ $url }}" class="mb-4">
    @csrf
    <div class="flex items-center">
        <input
            id="searchInput"
            type="text"
            name="search"
            class="form-input bg-gray-200 border border-gray-300 rounded-lg px-4 py-2 w-full dark:bg-gray-700 dark:border-gray-600 dark:text-white"
            placeholder="{{ $placeholder }}"
            aria-label="Buscar usuarios"
        >
        <button
            type="submit"
            class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-lg"
            aria-label="Buscar"
        >
            Buscar
        </button>
    </div>
</form>
