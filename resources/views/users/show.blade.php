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
                          <h1 class="text-2xl font-bold text-gray-900 mb-2">User Details</h1>
                          <a href="{{ route('users.index') }}" class="text-gray-50 font-bold py-1 px-3 rounded text-xs bg-green-500 hover:bg-green-600 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill inline-block mr-2" viewBox="0 0 16 16">
                                <path d="M.5 3.5A.5.5 0 0 1 1 4v3.248l6.267-3.636c.52-.302 1.233.043 1.233.696v2.94l6.267-3.636c.52-.302 1.233.043 1.233.696v7.384c0 .653-.713.998-1.233.696L8.5 8.752v2.94c0 .653-.713.998-1.233.696L1 8.752V12a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5zm7 1.133L1.696 8 7.5 11.367V4.633zm7.5 0L9.196 8 15 11.367V4.633z"/>
                              </svg>

                            <span>Go Back</span>
                          </a>
                        </div>
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <tr class="border-b border-gray-200">
                                    <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</td>
                                    <td class="text-sm font-medium text-gray-900">
                                        {{$user->id}}
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</td>
                                    <td class="text-sm font-medium text-gray-900">
                                        {{$user->name}}
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</td>
                                    <td class="text-sm font-medium text-gray-900">
                                        {{$user->email}}
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created Date</td>
                                    <td class="text-sm font-medium text-gray-900">
                                        {{$user->created_at}}
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Updated Date</td>
                                    <td class="text-sm font-medium text-gray-900">
                                        {{$user->updated_at}}
                                    </td>
                                </tr>
                            </table>
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
