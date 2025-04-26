<div class="grid grid-cols-2 bg-gray-100 rounded-lg mb-4">
    <div>
        <img class="w-full object-cover rounded-l-lg" src="images/alberta-beef-steak.webp" alt="Food Item">
    </div>
    <div class="flex flex-col p-4 md:p-6 md:text-left flex-1">
        <h2 class="text-lg font-semibold text-gray-800 mb-1">{{ $name }}</h2>
        <p class="text-sm text-gray-500 mb-4">Protein foods</p>
        <div class="flex items-center justify-between mt-auto">
            <div class="flex items-center">
                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 24 24">
                <path d="M12 .587l3.668 7.568L24 9.75l-6 5.849L19.335 24 12 20.01 4.665 24 6 15.599 0 9.75l8.332-1.595z"/>
                </svg>
                <span class="ml-1 text-gray-700 text-sm">4.7</span>
            </div>
            @include('components.link-favourite')
        </div>
    </div>
</div>
