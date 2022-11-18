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
                    エロクアント
                    @foreach ( $e_all as $e_admin)
                        {{ $e_admin->name }}
                        {{ $e_admin->created_at->diffForHumans() }}                        
                    @endforeach
                    クエリビルダ
                    @foreach ( $q_get as $q_admin)
                        {{ $q_admin->name }}
                        {{ Carbon\Carbon::parse($q_admin->created_at)->diffForHumans() }}                        
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>