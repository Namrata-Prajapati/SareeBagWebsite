<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traditional Fashion</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="CSS/tailwind.css" rel="stylesheet">
    <link href="CSS/styles.css" rel="stylesheet">
</head>
<body style="background-image: url(images/Background/bg6.jpg);">
<?php
    include './header.php'
    ?>
      <section class="text-gray-700 body-font relative">
        <div class="container px-5 py-24 mx-auto flex sm:flex-no-wrap flex-wrap">
          <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
            <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
            <div class="bg-white relative flex flex-wrap py-6">
              <div class="lg:w-1/2 px-6">
                <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm">ADDRESS</h2>
                <p class="leading-relaxed">41,Traditional Fashions Mall, S.t. Roman Road, Dadar, Mumbai 400066.</p>
              </div>
              <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm">EMAIL</h2>
                <a class="text-red-500 leading-relaxed">sonalk139@gmail.com</a>
                <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mt-4">PHONE</h2>
                <p class="leading-relaxed">83861388</p>
              </div>
            </div>
          </div>
          <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
            <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
            <p class="leading-relaxed mb-5 text-gray-600">Please post your feedback here</p>
            <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-red-500 text-base px-4 py-2 mb-4" placeholder="Name" type="text">
            <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-red-500 text-base px-4 py-2 mb-4" placeholder="Email" type="email">
            <textarea class="bg-white rounded border border-gray-400 focus:outline-none h-32 focus:border-red-500 text-base px-4 py-2 mb-4 resize-none" placeholder="Message"></textarea>
            <button class="text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">Button</button>
            <p class="text-xs text-gray-500 mt-3">This Traditional Fashions always gives the respect customer's feedback.</p>
          </div>
        </div>
      </section>
      <!--Footer-->
      <footer class="text-white-700 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap md:text-left text-center order-first">
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-bold text-white-900 tracking-widest text-sm mb-3">CATEGORIES IN SAREES</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-white-600 hover:text-white-800" href="SareeWebpage/BulkUniformSaree.php">Bulk Uniform Sarees</a>
                </li>
                <li>
                  <a class="text-white-600 hover:text-white-800" href="SareeWebpage/KanjivaramSilkSaree.php">Kanjivaram Silk Sarees</a>
                </li>
                <li>
                  <a class="text-white-600 hover:text-white-800" href="SareeWebpage/RawSilkSaree.php">Raw Silk Sarees</a>
                </li>
                <li>
                  <a class="text-white-600 hover:text-white-800" href="SareeWebpage/SoftSilkSaree.php">Soft Silk Sarees</a>
                </li>
                <li>
                  <a class="text-white-600 hover:text-white-800" href="SareeWebpage/PureSouthIndianCottonSaree.php">Pure South Indian Cotton Sarees</a>
                </li>
                <li>
                  <a class="text-white-600 hover:text-white-800" href="SareeWebpage/CrepeSilkSaree.php">Crepe Silk Sarees</a>
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-bold text-white-900 tracking-widest text-sm mb-3">CATEGORIES IN BAG</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-white-600 hover:text-white-800" href="BagWebpage/ShoulderBags.php">Shoulder Bag</a>
                </li>
                <li>
                  <a class="text-white-600 hover:text-white-800" href="BagWebpage/CrossBodyBags.php">Crossbody Bag</a>
                </li>
                <li>
                  <a class="text-white-600 hover:text-white-800" href="BagWebpage/ShopperToteBags.php">Shopper Tote Bag</a>
                </li>
                <li>
                  <a class="text-white-600 hover:text-white-800" href="BagWebpage/MicroMiniBags.php">Micro Mini Bag</a>
                </li>
                <li>
                  <a class="text-white-600 hover:text-white-800" href="BagWebpage/TopHandleBags.php">Top Handle Bag</a>
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-bold text-white-900 tracking-widest text-sm mb-3">About</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-white-600 hover:text-white-800" href="AboutUs.php">About Us</a>
                </li>
                <li>
                  <a class="text-white-600 hover:text-white-800" href="Contact.php">Contacts</a>
                </li>
                <li>
                  <a class="text-white-600 hover:text-white-800" href="Terms&Conditions.php">Terms & Conditions</a>
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-bold text-white-900 tracking-widest text-sm mb-3">SUBSCRIBE</h2>
              <div class="flex xl:flex-no-wrap md:flex-no-wrap lg:flex-wrap flex-wrap justify-center md:justify-start">
                <input class="w-40 sm:w-auto bg-gray-100 rounded xl:mr-4 lg:mr-0 sm:mr-4 mr-2 border border-gray-400 focus:outline-none focus:border-indigo-500 text-base py-2 px-4" placeholder="Placeholder" type="text">
                <button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Subscribe</button>
              </div>
              <p class="text-white-500 text-sm mt-2 md:text-left text-center">Your Email Address</p>
            </div>
          </div>
        </div>
        <div class="bg-gray-200">
          <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
            <a href="Home.php"><img src="Logo/Logo1.png" alt="logo"></a>
            <p class="text-sm text-white-500 sm:ml-6 sm:mt-0 mt-4">© 2020 SonalBlocks —
              <a href="https://twitter.com" rel="noopener noreferrer" class="text-white-600 ml-1" target="_blank">@SonalK</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
              <a class="text-white-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-white-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-white-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
              </a>
              <a class="ml-3 text-white-500">
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