
<div class="a-tag-default">
    <div class="container-fluid mx-auto px-4 sm:px-8">
        <div>
          <div>
            <h2 class="text-2xl font-semibold leading-tight">Users List</h2>
          </div>
          <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div
              class="inline-block min-w-full shadow-md rounded-lg overflow-hidden"
            >

            <div class="flex flex-wrap -mx-3 mb-6 px-4" style="justify-content: space-between">
                <div class="w-full px-3" style="width: 10%">
                    Per Page: 
                    <select wire:model.live='perPage' class="appearance-none text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <option value="10">10</option>
                        <option value="20">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                <div class="w-full md:w-1/4 px-3">
                  <input wire:model.live="search" type="text" placeholder="Search Users..." class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                </div>
            </div>

              <table class="min-w-full leading-normal">
                <thead>
                  <tr>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                    >
                    <a href="#" role="button" wire:click.prevent="sortBy('name')">
                        Name
                        @include('livewire.components.sort_icon', ['field' => 'name'])
                    </a>

                    </th>

                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                    >
                    <a href="#" role="button" wire:click.prevent="sortBy('email')">
                        Email
                        @include('livewire.components.sort_icon', ['field' => 'email'])
                    </a>
                    </th>

                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                    >
                    <a href="#" role="button" wire:click.prevent="sortBy('phone')">
                        Phone
                        @include('livewire.components.sort_icon', ['field' => 'phone'])
                    </a>
                    </th>

                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                    >
                    <a href="#" role="button" wire:click.prevent="sortBy('is_active')">
                        Status
                        @include('livewire.components.sort_icon', ['field' => 'status'])
                    </a>
                    </th>
                    
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100"
                    ></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                            <div class="flex" style="align-items: center">
                                <div class="flex-shrink-0 w-10 h-10">
                                <img
                                    class="w-full h-full rounded-full"
                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                    alt=""
                                />
                                </div>
                                <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $user->name }}
                                </p>
                                </div>
                            </div>
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{ $user->email }}</p>
                            </td>

                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{ $user->phone }}</p>
                            </td>

                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                <span
                                    class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight"
                                >
                                    <span
                                    aria-hidden
                                    class="absolute inset-0 bg-green-200 opacity-50 rounded-full"
                                    ></span>
                                    <span class="relative">{{ $user->status }}</span>
                                </span>
                            </td>

                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm text-right"
                                >
                                <button
                                    type="button"
                                    class="inline-block text-gray-500 hover:text-gray-700"
                                >
                                    <svg
                                    class="inline-block h-6 w-6 fill-current"
                                    viewBox="0 0 24 24"
                                    >
                                    <path
                                        d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z"
                                    />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>

              <tfoot>
                <hr>
                {{ $users->links() }}
              </tfoot>
            </div>
            <p class="text-right">Made with ❤️ by Mohasin Hossain | <a href="https://mohasin.dev" target="_blank">mohasin.dev</a></p>
          </div>
        </div>
      </div>    
    </div>
</div>
