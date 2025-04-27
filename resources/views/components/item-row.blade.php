<div class="grid grid-cols-2 bg-gray-100 rounded-lg mb-4">
    <div class="">
        <img class="object-cover rounded-l-lg" src="images/{{ $image }}" alt="Food Item">
    </div>
    <div class="col-span-1 flex flex-col p-4 md:p-6 md:text-left grow">
        <h2 class="text-lg font-semibold text-gray-800 mb-1">{{ $name }}</h2>
        <p class="text-sm text-gray-500 mb-4">{{ $category }}</p>
        <div class="flex items-center justify-between mt-auto">
            @include('components.link-rating',['rating'=>$rating])
            @include('components.link-favourite')
        </div>
    </div>
</div>
