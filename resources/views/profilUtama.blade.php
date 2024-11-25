<!DOCTYPE html>
<html lang="en">
@include('headerProfil')
<body>
    <div class="relative mx-40 flex mt-4 mb-10">
        <!--foto profil dan follow -->
        <div class="container w-40 flex flex-col items-center">
        <div class="bg-grey rounded-full h-32 w-32 m-4 flex items-center justify-center">
            <img src=""/>
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
        <strong class="text-4xl mt-4 mb-6 text-fontDefault">Lorem ipsumdolor sitamet.</strong>
        <div class="mb-0 w-full h-full">
            <div class="py-2 px-4 bg-white mb-2 h-40 rounded-t-lg border border-grey">
                <textarea class="resize-none overflow-hidden px-0 w-full text-md text-fontDefault border-0 focus:ring-0 focus:outline-none disabled" placeholder="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem voluptatum dolorum officiis sunt voluptate, eveniet est aliquam ipsa tempora numquam odit consectetur inventore provident hic doloremque blanditiis pariatur" readonly></textarea>
            </div>
        </div>
    </div>
      </div>
</body>