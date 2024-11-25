<!DOCTYPE html>
<html lang="en">
@include('mainHeader')
<body>
    <div class="mx-40 my-4">
        <div class="container mx-auto relative">
                <div class="mt-10 grid grid-cols-2 gap-4 my-2">
                    @foreach ($artikel as $judul)
                <div class="container max-w-xl max-h-full p-2">
                <div class="flex items-start">
                        <img src="{{ asset('storage\img.jpg') }}" class="bg-grey w-48 h-32">
                    <div class="float-right">
                    <div class="flex items-center ml-2 text-sm font-normal text-fontDefault border-fontDefault">
                        <a href="" class="hover:text-link text-BlueAccent">Kecantikan</a>
                        <p class="ml-1 text-grey">| {{ ($judul->created_at)}}</p>
                    </div>
                    <div class="ml-2" id="results">
                    <a href="{{ url('artikel/'.$judul->id)}}" class="hover:underline  hover:text-link hover:underline-offset-1 text-xl font-semibold"> {{ $judul->judulArtikel }}</a>
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
        </div>
</body>
</html> 