<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traditional Fashion</title>
    <link href="CSS/tailwind.css" rel="stylesheet">
    <link href="CSS/styles.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    
</head>
<body style="background-image: url(images/Background/bg6.jpg);">

    <!--Header-->
    <header class="text-black-700 body-font bg-auto">
        <div class="content-around mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-extrabold items-center text-black-900 mb-4 md:mb-0" href="index.php">
            <img src="Logo/Logo1.png" alt="logo">
          </a>
          <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-black-900" href="index.php">Home</a>
            <a class="mr-5 hover:text-black-900" href="Saree.php">Saree</a>
            <a class="mr-5 hover:text-black-900" href="Bags.php">Bags</a>
            <a class="mr-5 hover:text-black-900" href="AboutUs.php">About Us</a>
            <a class="mr-5 hover:text-black-900" href="Contact.php">Contact</a>
            <a class="mr-5 hover:text-black-900" href="Terms&Conditions.php">Terms & Conditions</a>
          </nav>
        </div>
      </header>
      <div class="carousel relative shadow-2xl bg-white">
        <div class="carousel-inner relative overflow-hidden w-full">
          <!--Slide 1-->
          <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
          <div class="carousel-item absolute opacity-0" style="height:50vh;">
            <div class="block h-full w-full text-black text-5xl text-center"><img src="images/Slider/SareePoster3.jpg" alt="SareePoster1"></div>
          </div>
          <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-extrabold text-black hover:text-black rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
          <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-extrabold text-black hover:text-black rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
          
          <!--Slide 2-->
          <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
          <div class="carousel-item absolute opacity-0" style="height:50vh;">
            <div class="block h-full w-full text-black text-5xl text-center"><img src="images/Slider/bagsPoster.jpg" alt="SareePoster2"></div>
          </div>
          <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-extrabold text-black hover:text-black rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
          <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-extrabold text-black hover:text-black rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
          
          <!--Slide 3-->
          <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
          <div class="carousel-item absolute opacity-0" style="height:50vh;">
            <div class="block h-full w-full text-black text-5xl text-center"><img src="images/Slider/SareePoster2.jpg" height="50%" width="100%" alt="SareePOster3"></div>
          </div>
          <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-extrabold text-black hover:text-black rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
          <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-extrabold text-black hover:text-black rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
      
          <!-- Add additional indicators for each slide-->
          <ol class="carousel-indicators">
            <li class="inline-block mr-3">
              <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-black hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
              <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-black hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
              <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-black hover:text-blue-700">•</label>
            </li>
          </ol>
          
        </div>
      </div>
      <!--Gallary-->
      <section class="text-black-700 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
          <div class="flex w-full mb-20 flex-wrap">
            <h1 class="sm:text-3xl text-2xl font-extrabold title-font text-black-900 lg:w-1/3 lg:mb-0 mb-4">IS NOT ONLY FASHION</h1>
            <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">Symbolic of the rich legacy of the country, Indian Sarees are the traditional nine yards of fabric that women in India have worn for centuries. Ranging from the simple handloom cotton weaves that are chic and legendary, to the contemporary and stylish modernistic versions, Saree is one Indian dress that would inevitably make you look every inch a poised Indian beauty that you are.</p>
          </div>
          <div class="flex flex-wrap md:-m-2 -m-1">
            <div class="flex flex-wrap w-1/2">
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="images/Grafics/g1.jpg">
              </div>
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="images/Grafics/sg1.jpg">
              </div>
              <div class="md:p-2 p-1 w-full">
                <img alt="gallery" class="w-full h-full object-cover object-center block" src="images/Grafics/sg2.jpg">
              </div>
            </div>
            <div class="flex flex-wrap w-1/2">
              <div class="md:p-2 p-1 w-full">
                <img alt="gallery" class="w-full h-full object-cover object-center block" src="images/Grafics/g3.png">
              </div>
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="images/Grafics/sg3.jpg">
              </div>
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="images/Grafics/g4.jpeg">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--STATISTIC-->
      <section class="text-black-700 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -m-4 text-center">
            <div class="p-4 sm:w-1/4 w-1/2">
              <h2 class="title-font font-extrabold sm:text-4xl text-3xl text-black-900">24.7K</h2>
              <p class="leading-relaxed">Users</p>
            </div>
            <div class="p-4 sm:w-1/4 w-1/2">
              <h2 class="title-font font-extrabold sm:text-4xl text-3xl text-black-900">30.8K</h2>
              <p class="leading-relaxed">Subscribes</p>
            </div>
            <div class="p-4 sm:w-1/4 w-1/2">
              <h2 class="title-font font-extrabold sm:text-4xl text-3xl text-black-900">800+</h2>
              <p class="leading-relaxed">Views</p>
            </div>
            <div class="p-4 sm:w-1/4 w-1/2">
              <h2 class="title-font font-extrabold sm:text-4xl text-3xl text-black-900">1000+</h2>
              <p class="leading-relaxed">Products</p>
            </div>
          </div>
        </div>
      </section>
      <!--Footer-->
      <footer class="text-black-700 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap md:text-left text-center order-first">
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-extrabold text-black-900 tracking-widest text-sm mb-3">CATEGORIES IN SAREES</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-black-600 hover:text-black-800" href="BulkUniformSaree.php">Bulk Uniform Sarees</a>
                </li>
                <li>
                  <a class="text-black-600 hover:text-black-800" href="KanjivaramSilkSaree.php">Kanjivaram Silk Sarees</a>
                </li>
                <li>
                  <a class="text-black-600 hover:text-black-800" href="RawSilkSaree.php">Raw Silk Sarees</a>
                </li>
                <li>
                  <a class="text-black-600 hover:text-black-800" href="SoftSilkSaree.php">Soft Silk Sarees</a>
                </li>
                <li>
                  <a class="text-black-600 hover:text-black-800" href="PureSouthIndianCottonSaree.php">Pure South Indian Cotton Sarees</a>
                </li>
                <li>
                  <a class="text-black-600 hover:text-black-800" href="CrepeSilkSaree.php">Crepe Silk Sarees</a>
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-extrabold text-black-900 tracking-widest text-sm mb-3">CATEGORIES IN BAG</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-black-600 hover:text-black-800" href="ShoulderBags.php">Shoulder Bag</a>
                </li>
                <li>
                  <a class="text-black-600 hover:text-black-800" href="CrossBodyBags.php">Crossbody Bag</a>
                </li>
                <li>
                  <a class="text-black-600 hover:text-black-800" href="ShopperToteBags.php">Shopper Tote Bag</a>
                </li>
                <li>
                  <a class="text-black-600 hover:text-black-800" href="MicroMiniBags.php">Micro Mini Bag</a>
                </li>
                <li>
                  <a class="text-black-600 hover:text-black-800" href="TopHandleBags.php">Top Handle Bag</a>
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-extrabold text-black-900 tracking-widest text-sm mb-3">About</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-black-600 hover:text-black-800" href="AboutUs.php">About Us</a>
                </li>
                <li>
                  <a class="text-black-600 hover:text-black-800" href="Contact.php">Contacts</a>
                </li>
                <li>
                  <a class="text-black-600 hover:text-black-800" href="Terms&Conditions.php">Terms & Conditions</a>
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-extrabold text-black-900 tracking-widest text-sm mb-3">SUBSCRIBE</h2>
              <div class="flex xl:flex-no-wrap md:flex-no-wrap lg:flex-wrap flex-wrap justify-center md:justify-start">
                <input class="w-40 sm:w-auto bg-gray-100 rounded xl:mr-4 lg:mr-0 sm:mr-4 mr-2 border border-gray-400 focus:outline-none focus:border-indigo-500 text-base py-2 px-4" placeholder="Placeholder" type="text">
                <button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-black bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Subscribe</button>
              </div>
              <p class="text-black-500 text-sm mt-2 md:text-left text-center">Your Email Address</p>
            </div>
          </div>
        </div>
        <div class="bg-gray-200">
          <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
            <a href="index.php"><img src="Logo/Logo1.png" alt="logo"></a>
            <p class="text-sm text-black-500 sm:ml-6 sm:mt-0 mt-4">© 2020 SonalBlocks —
              <a href="https://twitter.com" rel="noopener noreferrer" class="text-black-600 ml-1" target="_blank">@SonalK</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
              <a class="text-black-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-black-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-black-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
              </a>
              <a class="ml-3 text-black-500">
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                  <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                  <circle cx="4" cy="4" r="2" stroke="none"></circle>
                </svg>
              </a>
            </span>
          </div>
        </div>
      </footer>
</body>
</html>