<!DOCTYPE html>
<html lang="en">
@include('user_login/headerProfil2')
<body>
    <div class="relative mx-40 flex mb-14">
        <!--foto profil dan follow -->
        <div class="container w-40 flex flex-col items-center">
        <div class="bg-grey rounded-full h-32 w-32 m-4 flex items-center justify-center">
            <img id="preview" src="" alt="Image Preview" class="h-full w-full rounded-full object-cover"/>
        </div>
        <div class="flex justify-center mb-2 ml-4">
            <input type="file" name="image" id="imageInput" accept="image/*" class="hidden" onchange="previewImage(event)" required />
            <input type="button" class="border border-white text-white bg-BlueAccent shadow-md hover:bg-slate-400 hover:border-slate-800 w-32 text-sm font-semibold text-center p-1 mr-4 mb-2 mt-1" value="Upload Gambar" onclick="document.getElementById('imageInput').click();"/>
        </div>
        </div>
      <!-- nama & komen -->
    <div class="container w-full flex flex-col items-start mx-2">
        <strong class="text-4xl mt-4 text-fontDefault mb-4">Lorem ipsumdolor sitamet.</strong>
        <div class="mb-0 w-full h-full">
            <div class="py-2 px-4 bg-white mb-2 h-40 border border-grey">
                <div id="comment" class="px-0 w-full text-sm text-fontDefault border-0 focus:ring-0 focus:outline-none resize-none" placeholder="Ketik bio anda..." name="bio"></div>
            </div>
            <input type="button" id="openModal" class="border border-white text-white bg-BlueAccent shadow-md hover:bg-slate-400 hover:border-slate-800 w-20 text-sm font-semibold text-center p-1 mr-4 mb-2" value="Edit Profil"/>
    </div>
      </div>
    </div>
    <div id="inputModal" class="fixed inset-0 items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 w-11/12 md:w-1/3">
            <h2 class="text-xl font-semibold mb-4">Edit Profile</h2>
            
            <!-- Image Upload -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Profile Image</label>
                <div class="flex items-center">
                    <img id="preview" src="" alt="Image Preview" class="h-20 w-20 rounded-full object-cover mr-4" />
                    <input type="file" id="imageInput" accept="image/*" class="hidden" onchange="previewImage(event)" />
                    <button type="button" class="border border-white text-white bg-BlueAccent shadow-md hover:bg-slate-400 hover:border-slate-800 w-32 text-sm font-semibold text-center p-1 mr-4 mb-2" onclick="document.getElementById('imageInput').click();">Upload Image</button>
                </div>
            </div>
    
            <!-- Username Input -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" class="mt-1 block w-full border border-gray-300  p-2" placeholder="Enter your username" />
            </div>
    
            <!-- Bio Input -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Bio</label>
                <textarea id="bio" class="mt-1 resize-none block w-full border border-gray-300  p-2" placeholder="Ketik bio anda..."></textarea>
            </div>
    
            <div class="flex justify-end mt-4">
                <button id="closeModal" class="border border-BlueAccent text-BlueAccent bg-white shadow-md hover:bg-slate-400 hover:border-slate-800 w-20 text-sm font-semibold text-center p-1 mr-4 mb-2" onclick="closeModal()">Cancel</button>
                <button class="border border-white text-white bg-BlueAccent shadow-md hover:bg-slate-400 hover:border-slate-800 w-20 text-sm font-semibold text-center p-1 mr-4 mb-2">Simpan</button>
            </div>
        </div>
    </div>    
</body>
<script>
    function previewImage(event) {
        const preview = document.getElementById('preview');
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            preview.src = e.target.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>
<script>
    function previewImage(event) {
        const preview = document.getElementById('preview');
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            preview.src = e.target.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        }
    }

    const openModalButton = document.getElementById('openModal');
    const closeModalButton = document.getElementById('closeModal');
    const modal = document.getElementById('inputModal');

    openModalButton.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    closeModalButton.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    function closeModal() {
        modal.classList.add('hidden');
    }
</script>
