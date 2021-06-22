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
                                <path d="M.5 3.5A.5.5 0 0 1 1 4v3.248l6.267-3.636c.52-.302 1.233.043 1.233.696v2.94l6.267-3.636c.52-.302 1.233.043 1.233.696v7.384c0 .653-.713.998-1.233.696L8.5 8.752v2.94c0 .653-.713.998-1.233.696L1 8.752V12a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5zm7 1.133L1.696 8 7.5 11.367V4.633zm7.5 0L9.196 8 15 11.367V4.633z"/>
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
