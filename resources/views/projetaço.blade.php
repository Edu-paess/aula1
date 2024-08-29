<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>

    <div>
    <div class="min-h-screen bg-gray-300">
  <div class="flex justify-between bg-white p-4">
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
      </svg>
    </div>
    <div class="flex font-bold">
      Rato_borrachudo
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 stroke-blue-600">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
      </svg>
    </div>
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
      </svg>
    </div>
  </div>
  <!-- não mecher daqui pra cima -->

  <div class="flex bg-white p-4">
    <!-- foto e nome -->
    <div class="w-28 text-center"><img class="aspect-square rounded-full object-cover" src="data:image/jpeg;base64,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" /> Dougla</div>
    <!-- NÃO MEXER MAIS DA QUI PRA CIMA -->

    <div class="flex grow items-center justify-around border">
      <div class="text-center">
        <div class="text-lg font-bold">2.000</div>4
        Posts
      </div>
      <div class="text-center">
        <div class="text-lg font-bold">1.683M</div>
        Seguindo
      </div>
      <div class="text-center">
        <div class="text-bold text-lg font-bold">1</div>
        seguindo
      </div>
    </div>
  </div>

  <!-- NAO MECHER NAS DIVIS A CIMA -->

  <pre class="bg-white">
❤️@douglinhas_cr7
💕Minha talibã
🎵Melhor youtuber

</pre >

<div class ="border px-4 bg-white flex justify-around space-x-2">
<button class = "p-2 rounded-md bg-blue-500 text-white grow ">
 seguir  
</button>

<button class= "p-2 rounded-md border border-gray-400 grow font-bold" >
    Mensagem

</button>

<button class="p-2 rounded-md  border border-gray-500 bg-white">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
</svg>
  </button>

</div>


<div class= " flex justify-around border bg-white p-4">

<div class = "w-24 text-center"> 

<div class= " flex border-2 rounded-full p-1 ">
  <img class ="aspect-square rounded-full object-cover" src="https://yt3.googleusercontent.com/l5abYaxRCYXw1-WGaWCY_TSRo7eTgxuRUoD-dpVVP2Y1CfzK8XvlItHtHI5z_JHUu_XAwr9g-g=s900-c-k-c0x00ffffff-no-rj" alt=""> 
 </div> 
Eu
</div>
<div class = "w-24 text-center"> 

<div class= " border-2 rounded-full p-1 ">
  <img class ="aspect-square rounded-full object-cover" src="https://a-static.mlcdn.com.br/470x352/mascara-rato-borrachudo-em-latex-spook/extrafestas/22535p/5df28f066c0306760cd664a019368bfa.jpeg" alt=""> 
 </div> 
Music
</div>
<div class = "w-24 text-center"> 

<div class= " border-2 rounded-full p-1 ">
  <img class ="aspect-square rounded-full object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYRE8cYh0yoZb7dM6vYYl2XvqR2v7nOMRuUQ&s" alt=""> 
 </div> 
Família
</div>
<div class = "w-24 text-center"> 

<div class= " border-2 rounded-full p-1 ">
  <img class ="aspect-square rounded-full object-cover" src="https://upload.wikimedia.org/wikipedia/commons/3/3c/StalinCropped1943%28b%29.jpg" alt=""> 
 </div> 
gameplay
</div>
</div>

<div class = "overflow-x-scroll">
<div class="border bg-white p-4 flex w-fit"></div>
</div>
<div class= "bg-white flex justify-around">
   <button class="grow border-b-2">
     <svg class="w-7 mx-auto fill-gray-400"<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M4 10L8 10V14H4V10ZM4 19V16H8V19H4ZM10 19V16H14V19H10ZM16 19V16H20V19H16ZM16 14V10H20V14H16ZM16 8V5H20V8H16ZM14 5V8H10V5H14ZM14 10V14H10V10H14ZM4 8V5H8V8L4 8ZM3 3C2.44772 3 2 3.44772 2 4V20C2 20.5523 2.44772 21 3 21H21C21.5523 21 22 20.5523 22 20V4C22 3.44772 21.5523 3 21 3H3Z"></path></svg>
   </button>
   <button class="grow border-b-2">
   <svg class="w-7 mx-auto fill-gray-400"<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M8 18.3915V5.60846L18.2264 12L8 18.3915ZM6 3.80421V20.1957C6 20.9812 6.86395 21.46 7.53 21.0437L20.6432 12.848C21.2699 12.4563 21.2699 11.5436 20.6432 11.152L7.53 2.95621C6.86395 2.53993 6 3.01878 6 3.80421Z"></path></svg>
   </button>

   <button class="grow border-b-2">
   <svg class="w-7 mx-auto fill-gray-400"<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M14 21L12 23L10 21H4.99509C3.89323 21 3 20.1074 3 19.0049V4.99509C3 3.89323 3.89262 3 4.99509 3H19.0049C20.1068 3 21 3.89262 21 4.99509V19.0049C21 20.1068 20.1074 21 19.0049 21H14ZM19 19V5H5V19H10.8284L12 20.1716L13.1716 19H19ZM7.97216 18.1808C7.35347 17.9129 6.76719 17.5843 6.22083 17.2024C7.46773 15.2753 9.63602 14 12.1022 14C14.5015 14 16.6189 15.2071 17.8801 17.0472C17.3438 17.4436 16.7664 17.7877 16.1555 18.0718C15.2472 16.8166 13.77 16 12.1022 16C10.3865 16 8.87271 16.8641 7.97216 18.1808ZM12 13C10.067 13 8.5 11.433 8.5 9.5C8.5 7.567 10.067 6 12 6C13.933 6 15.5 7.567 15.5 9.5C15.5 11.433 13.933 13 12 13ZM12 11C12.8284 11 13.5 10.3284 13.5 9.5C13.5 8.67157 12.8284 8 12 8C11.1716 8 10.5 8.67157 10.5 9.5C10.5 10.3284 11.1716 11 12 11Z"></path></svg>
   </button>
 </div>
<div class="bg-white grid grid-cols-3 gap-1 pt-2">
  <img class ="aspect-square object-cover" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Kanye_West_at_the_2009_Tribeca_Film_Festival_%28crop_2%29.jpg/1200px-Kanye_West_at_the_2009_Tribeca_Film_Festival_%28crop_2%29.jpg" alt="">
  <img class ="aspect-square object-cover" src="https://ofuxico.com.br/wp-content/uploads/2023/11/kanye-west-abc-news-tv.jpg" alt="">
   <img class ="aspect-square object-cover" src="https://uploads.metroimg.com/wp-content/uploads/2023/12/13121156/Kanye-West-e-criticado-por-roupa-em-festa.jpg" alt="">
  <img class ="aspect-square object-cover" src="https://media.gq.com/photos/5e8ddc703eac2600085a7d1c/16:9/w_2560%2Cc_limit/kanye-west-gq-cover-may-2020-01.jpg" alt="">
  
  <img class ="aspect-square object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyV2sW9C2XLfU5m5CHJ6cFhNuH92dkL_65gw&s" alt="">
  <img class ="aspect-square object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSk5p8rfCGRof94TBD5vIrOl6pMYrXUjn-dHg&s" alt="">
 </div>

 

</div>
</div>

</body>
</html>