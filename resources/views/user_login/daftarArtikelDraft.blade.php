<!DOCTYPE html>
<html lang="en">
@include('user_login/headerProfilLogin')
<body>
            <div class="container mx-auto relative border-t border-gray">
                <div class="mt-10 grid grid-cols-2 gap-4 my-2">
                    @foreach ($artikel as $judul)
                <div class="container max-w-xl max-h-full p-2">
                <div class="flex items-start">
                        <img src="{{ asset('storage\img.jpg') }}" class="bg-grey w-48 h-32">
                    <div class="float-right">
                    <div class="flex items-center ml-2 text-sm font-normal text-fontDefault border-fontDefault">
                        @foreach ($judul->categories as $category)
                        <a href="{{ url('kategori/'.$category->id) }}" class="hover:text-link text-BlueAccent">{{ $category->name }} </a>
                        @if (!$loop->last), @endif
                        @endforeach
                        <p class="ml-1 text-grey">| {{ $judul->created_at }}</p>
                    </div>
                    <div class="ml-2">
                    <a href="{{ url('artikel/'.$judul->id)}}" class="hover:underline  hover:text-link hover:underline-offset-1 text-xl font-semibold"> {{ $judul->judulArtikel }}</a>
                    <div class="ml-1 mt-2 mr-2 flex items-start justify-between">
                        <div class="flex items-center justify-start">
                        <img width="10" class="h-5 w-auto" src="{{ asset('storage\eye_user.svg') }}"/>
                        <p class="text-sm text-fontDefault font-normal ml-1">100</p>
                        </div>
                        <a href="{{ url('artikel-draft/'.$judul->id.'/hapus') }}" class="text-BlueAccent ml-2 mr-1 text-sm hover:text-link items-center flex justify-end" target="_blank">Hapus   
                            <img width="10" class="h-5 w-auto fill-current text-grey ml-1" src="{{ asset('storage\trash.svg') }}"/></a>
                        <a href="{{ url('artikel/'.$judul->id.'/edit') }}" class="text-BlueAccent ml-2 mr-1 text-sm hover:text-link items-center flex justify-end" target="_blank">Edit    
                            <img width="10" class="h-5 w-auto text-grey ml-1" src="{{ asset('storage\editArtikel.svg') }}"/></a>
                    </div>
                    </div>
                    </div>
                </div>
                </div>
                @endforeach
                </div> 
                <div class="mt-10">
                    {{$artikel->links()}}
                </div>
    </div>
</body>