<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KRKA CUP 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <style>
        
      html {
        scroll-behavior: smooth;
      }
      @import url('https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800;900&display=swap');

        .font-barlow {
            font-family: 'Barlow', sans-serif;
        }
    </style>
</head>
<body class="font-figtree">

<div class="fixed top-0 z-10 w-full text-white bg-gray-900">
    <div class="flex justify-around py-4">
        <a href="#home" class="nav-link hover:text-gray-300">Home</a>
        <a href="#about" class="nav-link hover:text-gray-300">About the Tournament</a>
        <a href="#accommodation" class="nav-link hover:text-gray-300">Teams & Schedules</a>
        <a href="#sponsors" class="nav-link hover:text-gray-300">Sponsors</a>
        <a href="#contact" class="nav-link hover:text-gray-300">Contact</a>
    </div>
</div>

<section id="home" class="flex items-center justify-center min-h-screen text-white bg-gradient-to-r from-green-500 to-blue-500 font-barlow">
    <div class="text-center">
        <h1 class="mb-4 text-6xl font-extrabold">Krka Cup 2024</h1>
        <p class="mb-2 text-2xl">8. & 9.6.2024</p>
        <p class="mb-2">Categories:</p>
        <div class="mb-4">
            <p class="text-lg"><strong>Saturday:</strong> U9 (2015) and U11 (2013)</p>
            <p class="text-lg"><strong>Sunday:</strong> U7 (2017), U8 (2016), and U10 (2014)</p>
        </div>
        <p class="text-2xl">Novo mesto, stadion Portoval</p>
        <a target="_blank" href="https://www.google.com/maps/dir//Topli%C5%A1ka+cesta+4,+8000+Novo+mesto/@45.802781,15.1563069,17z/data=!4m18!1m8!3m7!1s0x4764ffe631ded311:0x929e3c60821d5817!2sTopli%C5%A1ka+cesta+4,+8000+Novo+mesto!3b1!8m2!3d45.8027773!4d15.1588872!16s%2Fg%2F11c4q8xjrt!4m8!1m0!1m5!1m1!1s0x4764ffe631ded311:0x929e3c60821d5817!2m2!1d15.1588872!2d45.8027773!3e2?entry=ttu" class="inline-flex items-center space-x-2 transition duration-300 ease-in-out transform hover:scale-105 hover:rotate-3 hover:text-yellow-300">
            <img src="/img/icon.png" alt="icon" class="w-4 h-4">
            <span>Take me there!</span>
            <img src="/img/icon.png" alt="icon" class="w-4 h-4">
        </a>
    </div>
</section>
<section id="about" class="flex items-center justify-center min-h-screen p-10 text-white bg-gradient-to-r from-red-500 to-yellow-500">
    <div class="max-w-4xl space-y-4">
        {{-- <h2 class="text-5xl font-bold text-center">About the Tournament</h2> --}}
        <p class="text-3xl animate-bounce">Welcome to <span class="font-bold">KRKA CUP 2024</span>!</p>
        <p class="text-sm">In the heart of Novo mesto a football phenomenon has been growing. NK KRKA Novo mesto is proud to announce the 11th edition of the KRKA CUP, previously known as the LIONS CUP, a tournament that has become a cornerstone of youth football in our city and beyond. Since its rebranding in 2019, the tournament has welcomed over 100 teams annually, making it a not-to-be-missed event in the youth football calendar.</p>
        <div class="grid grid-cols-2 space-x-8">
            <div class="p-4 bg-gray-900 bg-opacity-75 rounded-lg shadow-lg">
                <div class="text-xl font-bold">DATE</div>
                <div class="text-4xl font-black">Saturday, 8.6. <br> Sunday, 9.6.</div>
            </div>
            <div class="p-4 bg-gray-900 bg-opacity-75 rounded-lg shadow-lg">
                <div class="text-xl font-bold">CATEGORIES</div>
                <div class="text-4xl font-black">U7 (2017) <br> U8 (2016) <br> U9 (2015) <br> U10 (2014) <br> U11 (2013)</div>
            </div>
        </div>
        <p class="text-sm">Our mission remains unchanged - to provide young athletes with as much playtime as possible, fostering their love for the game, honing their skills, and encouraging sportsmanship. The KRKA CUP is more than a tournament; it's an opportunity for growth, learning, and making lasting memories.</p>
        <p class="text-sm">The KRKA CUP 2024 will once again be a melting pot of talent, with teams from Bosnia, Serbia, Croatia, Austria, and, of course, Slovenia. This diversity brings a unique flavor to the tournament, offering our young athletes the invaluable experience of international competition right at their doorstep.</p>
        <p class="text-sm">Join us in making this year's tournament the best one yet! Stay tuned for more information on registration, schedules, and more.</p>
    </div>
</section>

<section id="accommodation" class="flex items-center justify-center min-h-screen text-white bg-gradient-to-r from-green-400 to-blue-500">
    <div class="w-full max-w-6xl p-5">
        <h2 class="mb-6 text-5xl font-extrabold text-center">Teams and Schedules</h2>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-5">
            <div class="p-4 bg-gray-900 rounded-lg shadow-lg bg-opacity-80">
                <h3 class="mb-2 text-lg font-bold">U7 (2017)</h3> 
                <ul class="space-y-1 text-sm">
                    <li>NK KRKA 1</li>
                    <li>NK KRKA 2</li>
                    <li>NK KRKA 3</li>
                    <li>NK KRKA 4</li>
                    <li>NK JADRAN DEKANI 1</li>
                    <li>NK VIPAVA</li>
                    <li>NK KOLPA</li>
                    <li>NK JADRAN DEKANI 2</li>
                    <li>NK BELA KRAJINA</li>
                    <li>NK IVANČNA GORICA</li>
                    <li>NK ŠENTJERNEJ</li>
                    <li>NK TREBNJE</li>
                    <li>NK IHAN</li>
                    <li>NK DOMŽALE DOB RUMENI</li>
                    <li>NK DOMŽALE DOB MODRI</li>
                    <li>NK DOMŽALE DOB BELI</li>
                    <li>NK BRINJE GROSUPLJE 1</li>
                    <li>NK BRINJE GROSUPLJE 2</li>
                    <li>NK BRINJE GROSUPLJE 3</li>
                    <li>NK BRINJE GROSUPLJE 4</li>
                </ul>
                <div class="mt-4 text-sm">
                    <a href="https://www.meinturnierplan.de/showit.php?id=1716549895" target="_blank" class="block font-bold text-yellow-400 transition-transform transform schedule-link hover:scale-110 hover:text-orange-500">Schedule - First part</a>
<a href="https://www.meinturnierplan.de/showit.php?id=1716551011" target="_blank" class="block font-bold text-yellow-400 transition-transform transform schedule-link hover:scale-110 hover:text-orange-500">Schedule - Second part</a>
</div>
            </div>
            <div class="p-4 bg-gray-900 rounded-lg shadow-lg bg-opacity-80">
                <h3 class="mb-2 text-lg font-bold">U8 (2016)</h3> 
                <ul class="space-y-1 text-sm">
                    <li>NK KRKA 1</li>
                    <li>NK KRKA 2</li>
                    <li>NK KRKA 3</li>
                    <li>NK BRDA</li>
                    <li>NK JADRAN DEKANI 1</li>
                    <li>NK JADRAN DEKANI 2</li>
                    <li>NK IVANČNA GORICA 1</li>
                    <li>NK IVANČNA GORICA 2</li>
                    <li>NK POSAVJE KRŠKO</li>
                    <li>NK ŠENTJERNEJ</li>
                    <li>NK TREBNJE</li>
                    <li>NK BUČKA</li>
                    <li>ONŠ SOKOLI</li>
                    <li>NK MIRNA 1</li>
                    <li>NK MIRNA 2</li>
                    <li>NK BRITOF</li>
                </ul>
                <div class="mt-4 text-sm">
                    <a href="https://www.meinturnierplan.de/showit.php?id=1716548734" target="_blank" class="block font-bold text-yellow-400 transition-transform transform schedule-link hover:scale-110 hover:text-orange-500">Schedule - Group</a>
<a href="https://www.meinturnierplan.de/showit.php?id=1716549180" target="_blank" class="block font-bold text-yellow-400 transition-transform transform schedule-link hover:scale-110 hover:text-orange-500">Schedule - Golden</a>
<a href="https://www.meinturnierplan.de/showit.php?id=1716549598" target="_blank" class="block font-bold text-yellow-400 transition-transform transform schedule-link hover:scale-110 hover:text-orange-500">Schedule - Silver</a>
                </div>
            </div>
            <div class="p-4 bg-gray-900 rounded-lg shadow-lg bg-opacity-80">
                <h3 class="mb-2 text-lg font-bold">U9 (2015)</h3> 
                <ul class="space-y-1 text-sm">
                    <li>NK KRKA 1</li>
                    <li>NK KRKA 2</li>
                    <li>NK POSAVJE KRŠKO</li>
                    <li>NK JADRAN DEKANI 1</li>
                    <li>NK BRINJE GROSUPLJE 1</li>
                    <li>NK BRINJE GROSUPLJE 2</li>
                    <li>NK RADNIK URIJE</li>
                    <li>NK RADOMLJE</li>
                    <li>NK JADRAN DEKANI 2</li>
                    <li>NK DOMŽALE DOB</li>
                    <li>FK ILIČKA BRČKO</li>
                    <li>NK ŠENTJERNEJ</li>
                    <li>NK IVANČNA GORICA</li>
                    <li>NK TREBNJE</li>
                    <li>NK BREŽICE</li>
                    <li>NK MIRNA</li>
                </ul>
                <div class="mt-4 text-sm">
                    <a href="https://www.meinturnierplan.de/showit.php?id=1716377057" target="_blank" class="block font-bold text-yellow-400 transition-transform transform schedule-link hover:scale-110 hover:text-orange-500">Schedule - Group</a>
                    <a href="https://www.meinturnierplan.de/showit.php?id=1716378488" target="_blank" class="block font-bold text-yellow-400 transition-transform transform schedule-link hover:scale-110 hover:text-orange-500">Schedule - Golden</a>
                    <a href="https://www.meinturnierplan.de/showit.php?id=1716379665" target="_blank" class="block font-bold text-yellow-400 transition-transform transform schedule-link hover:scale-110 hover:text-orange-500">Schedule - Silver</a>
                </div>
            </div>
            <div class="p-4 bg-gray-900 rounded-lg shadow-lg bg-opacity-80">
                <h3 class="mb-2 text-lg font-bold">U10 (2014)</h3> 
                <ul class="space-y-1 text-sm">
                    <li>NK KRKA 1</li>
                    <li>NK KRKA 2</li>
                    <li>NK KRKA 3</li>
                    <li>NK RADOMLJE 1</li>
                    <li>NK RADOMLJE 2</li>
                    <li>NK IVANČNA GORICA</li>
                    <li>NK GROBIČANIN</li>
                    <li>NK ŠKOFJA LOKA</li>
                    <li>NK MIRNA</li>
                    <li>NK KOLPA</li>
                    <li>NK BELA KRAJINA</li>
                    <li>NK DRAVINJA</li>
                </ul>
                <div class="mt-4 text-sm">
                    <a href="https://www.meinturnierplan.de/showit.php?id=1716552562" target="_blank" class="block font-bold text-yellow-400 transition-transform transform schedule-link hover:scale-110 hover:text-orange-500">Schedule</a>                </div>
            </div>
            <div class="p-4 bg-gray-900 rounded-lg shadow-lg bg-opacity-80">
                <h3 class="mb-2 text-lg font-bold">U11 (2013)</h3> 
                <ul class="space-y-1 text-sm">
                    <li>NK KRKA 1</li>
                    <li>NK KRKA 2</li>
                    <li>NK RADNIK URIJE</li>
                    <li>NK BRINJE GROSUPLJE 1</li>
                    <li>NK ŽELJEZNIČAR DOBOJ</li>
                    <li>NK TRIGLAV BORDO</li>
                    <li>NK RADOMLJE RUMENI</li>
                    <li>NK POMORAC KOŠTRENA</li>
                    <li>NK IVANČNA GORICA</li>
                    <li>ND SLOVAN 1</li>
                    <li>ND SLOVAN 2</li>
                    <li>NK MIRNA</li>
                    <li>NK VRAPČE</li>
                    <li>NK TRIGLAV BELI</li>
                    <li>NK RADOMLJE ČRNI</li>
                    <li>NK BRINJE GROSUPLJE 2</li>
                </ul>
                <div class="mt-4 text-sm">
                    <a href="https://www.meinturnierplan.de/showit.php?id=1716380168" target="_blank" class="block font-bold text-yellow-400 transition-transform transform schedule-link hover:scale-110 hover:text-orange-500">Schedule - Group</a>
<a href="https://www.meinturnierplan.de/showit.php?id=1716381017" target="_blank" class="block font-bold text-yellow-400 transition-transform transform schedule-link hover:scale-110 hover:text-orange-500">Schedule - Golden</a>
<a href="https://www.meinturnierplan.de/showit.php?id=1716548397" target="_blank" class="block font-bold text-yellow-400 transition-transform transform schedule-link hover:scale-110 hover:text-orange-500">Schedule - Silver</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sponsors" class="flex items-center justify-center min-h-screen p-10 text-white bg-gradient-to-r from-indigo-500 to-purple-500">
    <div class="w-full max-w-6xl text-center">
        <h2 class="mb-6 text-5xl font-bold">Our Sponsors</h2>
        <p class="mb-8 text-sm">We are proud to be supported by some incredible companies and organizations. Their contributions make a significant impact on our ability to host this tournament.</p>
        
        <div class="mb-8">
            <!-- Main Sponsor -->
            <div class="flex justify-center mb-8">
                <div class="p-2 bg-white rounded-lg shadow-lg sponsor-logo">
                    <img src="/img/krka.png" alt="Main Sponsor Logo" class="h-40">
                </div>
            </div>
            <!-- Row of 4 Sponsors -->
            <div class="grid grid-cols-2 gap-4 mb-8 md:grid-cols-4">
                <div class="p-4 bg-white rounded-lg shadow-lg sponsor-logo">
                    <img src="/img/plazma.png" alt="Sponsor Logo 1" class="h-24 mx-auto">
                </div>
                <div class="p-4 bg-white rounded-lg shadow-lg sponsor-logo">
                    <img src="/img/terme.png" alt="Sponsor Logo 2" class="h-24 mx-auto">
                </div>
                <div class="p-4 bg-white rounded-lg shadow-lg sponsor-logo">
                    <img src="/img/scnm.png" alt="Sponsor Logo 3" class="h-24 mx-auto">
                </div>
                <div class="p-4 bg-white rounded-lg shadow-lg sponsor-logo">
                    <img src="/img/zagar.png" alt="Sponsor Logo 4" class="h-24 mx-auto">
                </div>
            </div>
            <!-- Rows of 6 Smaller Sponsors -->
            <div class="grid grid-cols-2 gap-4 md:grid-cols-6">
                <!-- Repeat this block for each smaller sponsor -->
                <div class="p-3 bg-white rounded-lg shadow-lg sponsor-logo">
                    <img src="/img/zavod.png" alt="Smaller Sponsor Logo" class="mx-auto h-18">
                </div>
                <div class="p-3 bg-white rounded-lg shadow-lg sponsor-logo">
                    <img src="/img/rudolf.png" alt="Smaller Sponsor Logo" class="mx-auto h-18">
                </div>
                <div class="p-3 bg-white rounded-lg shadow-lg sponsor-logo">
                    <img src="/img/monm.png" alt="Smaller Sponsor Logo" class="mx-auto h-18">
                </div>
                <div class="p-3 bg-white rounded-lg shadow-lg sponsor-logo">
                    <img src="/img/dana.png" alt="Smaller Sponsor Logo" class="mx-auto h-18">
                </div>
                <div class="p-3 bg-white rounded-lg shadow-lg sponsor-logo">
                    <img src="/img/sepic.png" alt="Smaller Sponsor Logo" class="mx-auto h-18">
                </div>
                <div class="p-3 bg-white rounded-lg shadow-lg sponsor-logo">
                    <img src="/img/intertour.png" alt="Smaller Sponsor Logo" class="mx-auto h-18">
                </div>
                
                <!-- Add more blocks as needed for each smaller sponsor -->
            </div>
        </div>
    </div>
</section>
<section id="contact" class="flex items-center justify-center min-h-screen text-white bg-gradient-to-r from-purple-500 to-pink-500">
    <div class="w-full max-w-lg p-10 bg-gray-900 bg-opacity-75 rounded-lg shadow-lg">
        <h2 class="mb-6 text-5xl font-extrabold text-center">Contact Us</h2>
        <div class="mb-8 text-center">
            <p class="text-xl"><strong>NK KRKA Novo mesto</strong></p>
            <p class="text-lg">Topliška cesta 4, 8000 Novo mesto</p>
            <p class="text-lg">Email: <a href="mailto:turnir@nkkrka.com" class="text-yellow-400 underline transition duration-300 hover:text-yellow-500">turnir@nkkrka.com</a></p>
        </div>
        <form action="#" method="POST" class="p-6 bg-gray-800 rounded-lg">
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-bold">Name</label>
                <input type="text" id="name" name="name" class="w-full p-3 text-black rounded" required>
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-bold">Email</label>
                <input type="email" id="email" name="email" class="w-full p-3 text-black rounded" required>
            </div>
            <div class="mb-6">
                <label for="message" class="block mb-2 text-sm font-bold">Message</label>
                <textarea id="message" name="message" class="w-full p-3 text-black rounded" rows="4" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="px-6 py-3 text-lg font-bold text-white transition duration-300 transform bg-yellow-500 rounded-lg shadow-lg hover:bg-yellow-600 hover:scale-105">Send</button>
            </div>
        </form>
    </div>
</section>

<footer class="p-4 text-center text-white bg-gray-800">
    &copy; 2024 Tournament Site
</footer>

</body>
</html>
  