@props(['class' => ''])
<div class="flex flex-cols justify-center items-center my-12 flex-col">
    
    <div class="{{$class}} w-10/12 md:w-8/12 lg:w-5/12 xl:w-4/12 min-h-[20%]">
        <div class="p-3 w-full flex flex-col justify-center items-center bg-white border border-gray-300 rounded">
            {{$slot}}
        </div>
        <div class="my-4">
            {{$footer ?? null}}
        </div>
    </div>
</div>