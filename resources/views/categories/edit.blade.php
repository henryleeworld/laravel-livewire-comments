<x-app-layout>
    <x-slot name="header">
        {{ __('Edit category: ') . $category->name }}
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white p-6 shadow-xl sm:rounded-lg">

                <form action="{{ route('categories.update', $category) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input type="text"
                                     id="name"
                                     name="name"
                                     class="block w-full"
                                     value="{{ old('name', $category->name) }}"
                                     required />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-primary-button>
                            {{ __('Submit') }}
                        </x-primary-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
