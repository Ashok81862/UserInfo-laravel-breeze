<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Section') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  {{-- USers --}}
                  <div class="flex flex-col w-auto px-4">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="flex justify-between my-4 px-4">
                          <h1 class="text-2xl font-bold text-gray-900 mb-2">Update User</h1>
                          <a href="{{ route('users.index') }}" class="text-gray-50 font-bold py-1 px-3 rounded text-xs bg-green-500 hover:bg-green-600 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill inline-block mr-2" viewBox="0 0 16 16">
                              <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                              <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                            <span>Go Back</span>
                          </a>
                        </div>
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <form class="" method="POST" action="{{ route('users.update', $user->id) }}">
                                @csrf
                                @method('PUT')
                                    <div class="w-full  px-3 mb-6 md:mb-0">
                                        <label for="name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Name</label>
                                        <input
                                            type="text"
                                            name="name" id="name"
                                            value="{{ old('name') ?? $user->name }}"
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('name')
                                            is-invalid
                                        @enderror"
                                            autofocus
                                        >
                                        @error('name')
                                            <small class="text-red-500">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="w-full  px-3 mb-6 md:mb-0">
                                        <label for="email" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Email</label>
                                        <input
                                            type="text"
                                            name="email" id="email"
                                            value="{{ old('email') ?? $user->email }}"
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('email')
                                            is-invalid
                                        @enderror"
                                            autofocus
                                        >
                                        @error('email')
                                            <small class="text-red-500">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="w-full  px-3 mb-6 md:mb-0">
                                        <button
                                        type="submit"
                                        class="w-full mt-2 text-center py-3 rounded bg-green-500 text-white hover:bg-green-900 focus:outline-none"
                                        >Update Account</button>
                                    </div>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- End Users --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
