<!DOCTYPE html>
<html lang="en">
@include('user_login/headerProfilLogin')
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
            <div class="py-2 px-4 bg-white mb-2 h-40 border border-grey">
                <textarea id="comment" class="px-0 w-full text-sm text-fontDefault border-0 focus:ring-0 focus:outline-none" placeholder="Ketik bio anda..." required></textarea>
            </div>
            <input type="button" class="border border-white text-white bg-BlueAccent shadow-md hover:bg-slate-400 hover:border-slate-800 w-20 text-sm font-semibold text-center p-1 mr-4 mb-2" value="Edit bio"/>
        </form>
    </div>
      </div>
    <!-- data diri -->
<div class="mx-60">
    <div class="flex items-center justify-center mb-2 mt-6">
        <h5 class="text-2xl font-bold leading-none text-BlueAccent mb-2">Data Profil</h5>
    </div>
<div class="border-t border-x-fontDefault">
<form>
    <div class="mt-4">
        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mb-4" placeholder="Isi nama lengkap" required />
    </div>
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="company" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir</label>
            <input type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Isi tanggal lahir" required />
        </div>  
        <div>
            <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
            <input type="url" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Isi jenis kelamin" required />
        </div>
    </div>
    <div class="mb-6">
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
            <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Isi nomor telepon" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
    <div class="mb-6 mt-4">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Email</label>
        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Isi alamat email" required />
    </div> 
    <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Isi Password" required />
    </div> 
    <div class="mb-4">
        <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Password</label>
        <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Isi password kembali" required />
    </div> 
    <input type="button" class="border border-white text-white bg-BlueAccent shadow-md hover:bg-slate-400 hover:border-slate-800 w-24 text-sm font-semibold text-center p-1 mr-4 mb-2 mt-2" value="Simpan"/>
</form>
</div>
</div>
</body>
