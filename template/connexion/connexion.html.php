<!-- <!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Connexion</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head> -->

<main class="w-[30%] h-[40%] flex items-center justify-center p-4  mt-[18%] ml-[35%] ">

  <div>
    <i class=" w-32 h-32 text-[5rem] text-white text-center"></i>
  </div>

  <div class="w-[30rem] h-[25rem]">
    <div class="text-center mb-8">
      <h1 class="text-3xl text-white font-bold bg-gradient-to-r from-[#DAF1DE] to-[#8EB69B] bg-clip-text mb-2">Veuillez entrer vos informations</h1>
    </div>

    <form  class="space-y-6" action="/connexion" method="POST">
      <div class="carteInput">
        <div class="flex items-center bg-white border border-green-accent rounded-full px-4 py-4 hover:bg-[#235347]/30 focus-within:bg-[#235347]/30 transition duration-300 transform hover:scale-110">
          <div class="bg-darker-bg  backdrop-blur-sm rounded-full p-2 mr-4">
            <i class="fas fa-user w-5 h-5 text-white text-center"></i>
          </div>
          <input  type="tel" placeholder="Login" class="bg-transparent text-black placeholder-black-200 w-full focus:outline-none">
        </div>
        <small  class="hidden text-[1rem] text-red-500 mt-[1.5rem] ml-[1rem]"></small>
      </div>

      <div class="carteInput">
        <div class="flex items-center bg-white border border-green-accent rounded-full px-4 py-4 hover:bg-[#235347]/30 focus-within:bg-[#235347]/30 transition duration-300 transform hover:scale-110">
          <div class="bg-darker-bg  backdrop-blur-sm rounded-full p-2 mr-4">
            <i class="fas fa-lock w-5 h-5 text-white text-center"></i>
          </div>
          <input  type="password" placeholder="Mot de passe" class="bg-transparent text-black placeholder-black-200 w-full focus:outline-none">
        </div>
        <small  class="hidden text-[1rem] text-red-500 mt-[1rem] ml-[1rem]"></small>
      </div>

      <button type="submit" class="w-full py-4 rounded-full bg-green-accent  text-black font-semibold text-lg shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300"><a >Se connecter</a></button>

      
    </form>
  </div>

</main>
<!-- </html> href="/connexion"
 -->