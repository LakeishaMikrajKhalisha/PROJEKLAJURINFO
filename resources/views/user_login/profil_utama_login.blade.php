<!DOCTYPE html>
<html lang="en">
@include('header_login')
<body>
    <div class="relative mx-40 flex">
        <!--foto profil dan follow -->
        <div class="container w-40 flex flex-col items-center">
        <div class="bg-grey rounded-full h-32 w-32 m-4 flex items-center justify-center">
            <img src=""/>
        </div>
        <div class="flex justify-center mb-2 ml-4">
            <input type="button" class="border border-white text-white bg-BlueAccent shadow-md hover:bg-slate-400 hover:border-slate-800 w-32 text-sm font-semibold text-center p-1 mr-4 mb-2 mt-1" value="Upload Gambar"/>
        </div>
        <div class="text-fontDefault flex items-center ml-1">
            <strong class="text-xl">1000</strong>
            <p class="m-2 text-xl">Followers</p>
        </div>
        <div class="text-fontDefault flex items-center ml-1">
            <strong class="text-xl">100</strong>
            <p class="m-2 text-xl">Following</p>
        </div>
      </div>
      <!-- nama & komen -->
    <div class="container w-full flex flex-col items-start mx-2">
        <strong class="text-4xl mt-4 text-fontDefault">Lorem ipsumdolor sitamet.</strong>
        <input type="button" class="border border-white text-white bg-BlueAccent shadow-md hover:bg-slate-400 hover:border-slate-800 w-32 text-sm font-semibold text-center p-1 mr-4 mb-2 mt-4" value="Ganti Username"/>
        <form class="mb-0 w-full h-full">
            <div class="py-2 px-4 bg-white mb-2 h-40 rounded-t-lg border border-grey">
                <textarea id="comment" class="px-0 w-full text-sm text-fontDefault border-0 focus:ring-0 focus:outline-none" placeholder="Ketik bio anda..." required></textarea>
            </div>
            <input type="button" class="border border-white text-white bg-BlueAccent shadow-md hover:bg-slate-400 hover:border-slate-800 w-20 text-sm font-semibold text-center p-1 mr-4 mb-2" value="Edit bio"/>
        </form>
    </div>
      </div>
    </div>
</body>