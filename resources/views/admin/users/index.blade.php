<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ユーザー一覧') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 mx-auto">
                          <x-flash-message status="session('status')" />
                            <div class="flex justify-end mb-4">
                                <button onclick="location.href='{{ route('admin.users.create') }}'" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">新規登録</button>
                            </div>
                          <div class="lg:w-2/3 w-full mx-auto overflow-auto border-2 border-gray-500 rounded">
                            <table class="table-auto w-full text-left whitespace-no-wrap">
                              <thead>
                                <tr>
                                  <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">名前</th>
                                  <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">メールアドレス</th>
                                  <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">作成日</th>
                                  <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ( $users as $user)
                                <tr>
                                  <td class="px-4 py-3">{{ $user->name }}</td>
                                  <td class="px-4 py-3">{{ $user->email }}</td>
                                  <td class="px-4 py-3">{{ $user->created_at->diffForHumans() }}</td>
                                  <td class="md:px-4 py-3">
                                    <button onclick="location.href='{{ route('admin.users.edit', ['user' => $user->id]) }}'" class="text-white bg-indigo-400 border-0 py-2 px-4 focus:outline-none hover:bg-indigo-500 rounded text-lg">編集</button>
                                </td>
                                <form id="delete_{{$user->id}}" method="post" action="{{ route('admin.users.destroy', ['user' => $user->id])}}">
                                  @csrf
                                  @method('delete')
                                  <td class="md:px-4 py-3">
                                      <a href="#" data-id="{{ $user->id }}" onclick="deletePost(this)" class="text-white bg-red-400 border-0 py-2 px-4 focus:outline-none hover:bg-red-500 rounded text-lg">削除</a>
                                  </td>
                              </form>
                                </tr>
                                @endforeach                                
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </section>
                    {{-- クエリビルダ
                    @foreach ( $q_get as $q_admin)
                        {{ $q_admin->name }}
                        {{ Carbon\Carbon::parse($q_admin->created_at)->diffForHumans() }}                        
                    @endforeach --}}
                </div>
            </div>
        </div>
    </div>
    <script>
      function deletePost(e) {
          'use strict';
          if (confirm('本当に削除してもいいですか?')) {
              document.getElementById('delete_' + e.dataset.id).submit();
          }
      }
  </script>
</x-app-layout>