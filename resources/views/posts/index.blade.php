<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex mb-4">
                    <x-link-button href="{{ route('posts.create') }}">
                        {{ __('Add new post') }}
                    </x-link-button>
                </div>

                <div class="min-w-full align-middle">
                    <table class="min-w-full divide-y divide-gray-200 border rounded">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left">{{ __('Title') }}</th>
                                <th class="px-6 py-3 bg-gray-50 text-left">{{ __('Category') }}</th>
                                <th class="px-6 py-3 bg-gray-50 text-left w-52"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                        @foreach($posts as $post)
                            <tr class="bg-white">
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900"><x-nav-link :href="route('posts.show', $post)">{{ $post->title }}</x-nav-link></td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">{{ $post->category->name }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                    <x-link-button href="{{ route('posts.edit', $post) }}">
                                        {{ __('Edit') }}
                                    </x-link-button>
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('{{ __('Are you sure?') }}')" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <x-danger-button type="submit">
                                            {{ __('Delete') }}
                                        </x-danger-button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
