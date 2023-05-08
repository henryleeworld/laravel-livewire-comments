<x-app-layout>
    <x-slot name="header">
        {{ $post->title }}
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white p-6 shadow-xl sm:rounded-lg">
                <form>
                    <div>
                        <x-label for="title" :value="__('Title')" />
                        <x-input type="text"
                                 id="title"
                                 name="title"
                                 class="block w-full text-gray-500"
                                 value="{{ old('title', $post->title) }}"
                                 disabled />
                    </div>
                    <div class="mt-4">
                        <x-label for="title" :value="__('Post text')" />
                        <textarea name="post_text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full text-gray-500" disabled>{{ $post->post_text }}</textarea>
                    </div>
                    <div class="mt-4">
                        <x-label for="title" :value="__('Category')" />
                        <select name="category_id" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-gray-500" disabled>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    @selected($category->id == $post->category_id)>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
                <div class="mt-4">
					<livewire:comments :model="$post"/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
