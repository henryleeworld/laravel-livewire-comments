<x-app-layout>
    <x-slot name="header">
        {{ __('Edit post: ') . $post->title }}
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white p-6 shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('posts.update', $post) }}">
                    @method('PUT')
                    @csrf
                    <div>
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input type="text"
                                 id="title"
                                 name="title"
                                 class="block w-full"
                                 value="{{ old('title', $post->title) }}"
                                 required />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="title" :value="__('Post text')" />
                        <textarea name="post_text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">{{ $post->post_text }}</textarea>
                        <x-input-error :messages="$errors->get('post_text')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="title" :value="__('Category')" />
                        <select name="category_id" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    @selected($category->id == $post->category_id)>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-4">
                        <x-primary-button>
                            {{ __('Save') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
