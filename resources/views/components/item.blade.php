<div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition-all flex flex-col">
    <img class="w-full object-cover" src="images/{{ $image }}" alt="Bison Burger">
    <div class="p-4 flex flex-col flex-grow">
        <h2 class="text-lg font-semibold text-gray-800 mb-1">{{ $name }}</h2>
        <p class="text-sm text-gray-500 mb-4">{{ $category }}</p>
        <div class="flex items-center justify-between mt-auto">
            @include('components.link-rating',['rating'=>$rating])
            @include('components.link-favourite',['active'=>true])
        </div>
    </div>
</div>