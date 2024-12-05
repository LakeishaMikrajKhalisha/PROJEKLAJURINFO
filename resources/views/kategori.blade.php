<!DOCTYPE html>
<html lang="en">
@include('mainHeader')
<body>
    <div class="mx-40 my-4">
    <div class="container mx-auto relative">
            <div class="border ml-2 mt-6 max-w-32 text-center border-BlueAccent shadow-md">
                <p class="text-fontDefault font-medium flex mx-auto items-center justify-center text-lg">{{ $category->name }}</p></div>
            <div class="mt-10 grid grid-cols-2 gap-4 my-2">
                @foreach ($articles as $judul)
            <div class="container max-w-xl max-h-full p-2">
            <div class="flex items-start">
                    <img src="{{ asset('storage\img.jpg') }}" class="bg-grey w-48 h-32">
                <div class="float-right">
                <div class="flex items-center ml-2 text-sm font-normal text-fontDefault border-fontDefault">
                    <a href="{{ url('kategori/'.$category->id) }}" class="hover:text-link text-BlueAccent">{{ $category->name }}</a>
                    <p class="ml-1 text-grey">| {{($judul->created_at->format('d M Y'))}}</p>
                </div>
                <div class="ml-2">
                <a href="{{ url('artikel/'.$judul->id)}}" class="hover:underline  hover:text-link hover:underline-offset-1 text-xl font-semibold"> {{ $judul->judulArtikel }}</a>
                </div>
                </div>
            </div>
            </div>
            @endforeach
            </div> 
            <div class="mt-10">
                {{$articles->links()}}
            </div>
    </div> 
    </div>
</body>
</html> 