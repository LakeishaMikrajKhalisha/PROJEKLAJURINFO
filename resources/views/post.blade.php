<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Judul Artikel</title>
</head>
<body class="mx-40 my-4">
    <div class="container mx-auto relative">
        <div class ="container max-w-2xl"> 
            <!--header content -->
            <div class="text-4xl font-bold">
            <!-- judul (input) -->
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime numquam maiores reprehenderit voluptatibus sit et mollitia</p></div>
             <!-- information (input)-->   
            <div class="border-t border-b border-grey mt-2 relative">
                <div class="flex items-center">
                <div class="h-5 w-5 m-2 rounded-full  bg-grey hover:bg-slate-600">
                <img src="" alt=""></div>
                <div class= "font-semibold text-sm my-2 text-BlueAccent hover:text-slate-600 hover:underline">
                <a href="">Arif Adi</a></div>
                <div class="font-normal text-sm text-grey m-2 pl-2 border-l border-slate-700">
                <p>06 Desember 2024</p></div>
                <div class="absolute top-0 right-0 h-5 w-5 m-2 rounded-full  bg-grey hover:bg-slate-600 justify-end">
                <img alt="" src=""></div>
                </div>
            </div>
            <!-- image upload (input)--> 
            <div class="object-cover h-52 w-auto mt-2 bg-grey">
            <img src="" alt=""></div>
            <!-- text content (input) -->
            <div class="mt-2">
                <div class="text-3xl font-bold">
                    <p>Lorem ipsum dolor sit amet?</p>
                </div>
                <div class="text-lg font-normal mt-2">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem voluptatum dolorum officiis sunt voluptate, eveniet est aliquam ipsa tempora numquam odit consectetur inventore provident hic doloremque blanditiis pariatur? Quibusdam, quae?</p><br>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis consequuntur quasi repudiandae tenetur consectetur ad facere id hic impedit sunt dolorem modi nemo perferendis vero possimus velit, fugiat molestias laboriosam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis consequuntur quasi repudiandae tenetur consectetur ad facere id hic impedit sunt dolorem modi nemo perferendis vero possimus velit, fugiat molestias laboriosam.</p><br>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis consequuntur quasi repudiandae tenetur consectetur ad facere id hic impedit sunt dolorem modi nemo perferendis vero possimus velit, fugiat molestias laboriosam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis consequuntur quasi repudiandae tenetur consectetur ad facere id hic impedit sunt dolorem modi nemo perferendis vero possimus velit, fugiat molestias laboriosam.</p><br>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis consequuntur quasi repudiandae tenetur consectetur ad facere id hic impedit sunt dolorem modi nemo perferendis vero possimus velit, fugiat molestias laboriosam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis consequuntur quasi repudiandae tenetur consectetur ad facere id hic impedit sunt dolorem modi nemo perferendis vero possimus velit, fugiat molestias laboriosam.</p>
                </div>
            </div>
            <!-- Kategori artikel (auto & href) -->
            <div class="border-t border-b border-slate-700 my-4 relative">
                <div class="flex items-center">
                <div class="font-semibold text-sm my-1">
                    <p>Kategori:</p>
                </div> 
                <div class="border-2 border-solid shadow-xl m-1 border-BlueAccent">
                    <a class="m-1 text-sm text-BlueAccent" href="">KESEHATAN</a></div>
                </div>
            </div>
            <!-- Komentar section -->
            <div class="container border my-4 border-grey relative">
            <form>
                <div class="m-4">
                <input type="text" name="" class="h-16 block w-full p-2.5 text-sm focus:ring-slate-700 focus:border-slate-700" placeholder="Beri Komentar..."/></div>
                <div class="flex justify-end">
                <button type="submit" class="border border-white text-white bg-BlueAccent hover:bg-slate-400 hover:border-slate-800 w-20 text-base font-semibold text-center p-1 mr-4 mb-2 shadow-md">Kirim</button></div>
            </form>
            </div>
            <!--Balas membalas komentar section-->
            <div class="border-b border-grey mt-2 relative">
                <div class="flex items-center">
                    <div class="h-5 w-5 my-2 rounded-full  bg-grey  hover:bg-slate-600">
                    <img src="" alt=""></div>
                    <div class= "font-semibold text-sm mx-2 my-2 hover:text-slate-600 hover:underline text-BlueAccent">
                    <a href="">Arif Adi</a></div>
                    <div class="font-normal text-sm ml-2 pl-2 border-l border-grey text-grey">
                    <p>06 Desember 2024</p></div>
                    <div class="absolute top-0 right-0 h-5 w-5 m-2 rounded-full bg-grey hover:bg-slate-600 justify-end">
                        <img alt="" src=""></div>
                </div>
                <form>
                <div>
                <p class="font-normal text-sm text-fontDefault mt-1 ml-7">Lorem ipsum dolor sit!</p>
                <input type="button" class="border border-white text-white bg-BlueAccent shadow-md hover:bg-slate-400 hover:border-slate-800 w-16 text-sm font-semibold text-center p-1 mr-4 mb-2 mt-1 ml-7" value="Balas"/></div>
                </form>
            </div>
            <div class="border-b border-grey mt-2 relative">
                <div class="flex items-center">
                    <div class="h-5 w-5 my-2 rounded-full  bg-grey  hover:bg-slate-600">
                    <img src="" alt=""></div>
                    <div class= "font-semibold text-sm mx-2 my-2 hover:text-slate-600 hover:underline text-BlueAccent">
                    <a href="">Arif Adi</a></div>
                    <div class="font-normal text-sm ml-2 pl-2 border-l border-grey text-grey">
                    <p>06 Desember 2024</p></div>
                    <div class="absolute top-0 right-0 h-5 w-5 m-2 rounded-full bg-grey hover:bg-slate-600 justify-end">
                        <img alt="" src=""></div>
                </div>
                <form>
                <div>
                <p class="font-normal text-sm font-Default mt-1 ml-7">Lorem ipsum dolor sit!</p>
                <input type="button" class="border border-white text-white bg-BlueAccent shadow-md hover:bg-slate-400 hover:border-slate-800 w-16 text-sm font-semibold text-center p-1 mr-4 mb-2 mt-1 ml-7" value="Balas"/></div>
                </form>
            </div>
            <!--end-->
            <!-- Rekomendasi artikel -->
            <div class="absolute right-0 top-0 mt-2">
                <div class="w-80 max-w-sm p-4 bg-white border border-grey shadow sm:p-8">
                    <div class="flex items-center justify-between mb-2">
                        <h5 class="text-xl font-bold leading-none text-fontDefault">Rekomendasi Artikel</h5>
                   </div>
                   <div class="flow-root">
                        <ul role="list" class="divide-y divide-grey">
                            <li class="py-3 sm:py-4 my-0">
                                <div class="flex items-center">
                                    <div class="flex-1 min-w-0">
                                        <a href="" class="text-sm font-medium text-fontDefault hover:text-link hover:underline hover:underline-offset-1">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id tempore, repellendus culpa minus
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                            <div class="flex items-center">
                                <div class="flex-1 min-w-0">
                                    <a href="" class="text-sm font-medium text-fontDefault hover:text-link hover:underline hover:underline-offset-1">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id tempore, repellendus culpa minus
                                    </a>
                                </div>
                            </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="flex-1 min-w-0">
                                        <a href="" class="text-sm font-medium text-fontDefault hover:text-link hover:underline hover:underline-offset-1">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id tempore, repellendus culpa minus
                                        </a>
                                    </div>
                                </div>
                                </li>
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center">
                                        <div class="flex-1 min-w-0">
                                            <a href="" class="text-sm font-medium text-fontDefault  hover:text-link hover:underline hover:underline-offset-1">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id tempore, repellendus culpa minus
                                            </a>
                                        </div>
                                    </div>
                                    </li>
                                    <li class="py-3 sm:py-4">
                                        <div class="flex items-center">
                                            <div class="flex-1 min-w-0">
                                                <a href="" class="text-sm font-medium text-fontDefault hover:text-link hover:underline hover:underline-offset-1">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id tempore, repellendus culpa minus
                                                </a>
                                            </div>
                                        </div>
                                        </li>
                        </ul>
                   </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>