@extends('layout.admin')

@section('title', 'Services')

@section('content')
<div class="container mx-auto p-5 bg-orange-50">
    <h1 class="text-4xl font-bold">Nos Services</h1>
    <p class="mt-4 text-gray-700">
        Nous offrons une gamme complète de services conçus pour répondre aux besoins de nos clients. Notre équipe d'experts est prête à fournir des solutions personnalisées pour vous aider à atteindre vos objectifs.
    </p>

    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col service-card"  >
            <img src="img/WhatsApp Image 2024-11-26 à 09.24.00_4a0ae8be.jpg" alt="Flashcash" class="w-32 h-32 object-cover rounded-full mb-4 mx-auto">
            <div class=" items-center mb-4 text-center ">
                <h2 class="text-2xl font-semibold ">
                 1.investisement </a>
                </h2>
            </div>
            <p class="text-gray-700 mb-4">
                Investir judicieusement est essentiel pour bâtir un avenir financier solide. Notre plateforme d'investissement en ligne offre des solutions accessibles pour faire croître votre patrimoine. Investissez facilement depuis chez vous avec une interface conviviale. Nous proposons une large gamme d'options pour diversifier votre portefeuille, y compris des actions et des fonds communs de placement. Profitez des recommandations de notre équipe d'experts pour prendre des décisions éclairées. Votre sécurité est notre priorité, avec des technologies de pointe pour protéger vos données et investissements.
            </p>

            <button class="bg-gradient-to-r from-green-400 to-blue-500 text-white text-2xl font-semibold py-2 px-6 rounded-lg shadow-lg hover:bg-gradient-to-l transition duration-300">
                <a href="https://flashcash.devfack.com/" class="no-underline text-white">Commencer</a>
            </button>
        </div>

        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col service-card">
            <img src="img\image.png    " alt="Développement de Solutions" class="w-32 h-32 object-cover rounded-full mb-4 mx-auto">
            <div class="text-center  items-center mb-4">
                <h2 class="text-2xl font-semibold ">2. l'immobilier</h2>
            </div>
            <p class="text-gray-700 mb-4">
                nous croyons que chaque brique posée est un pas vers la réalisation de vos rêves. L'immobilier n'est pas seulement un investissement, c'est une fondation pour un avenir solide et prospère. Chaque propriété que vous acquérez est une opportunité de créer des souvenirs et de bâtir un héritage.

Nous vous accompagnons dans chaque étape de ce parcours, vous offrant expertise et conseils pour maximiser votre potentiel.  Imaginez un espace qui vous ressemble, où chaque coin raconte votre histoire. Ensemble, transformons vos ambitions immobilières en réalité et construisons un avenir où vous vous épanouissez pleinement.
            </p>

            <button class="bg-gray-300 text-gray-500 text-2xl font-semibold py-2 px-6 rounded-lg shadow-md cursor-not-allowed" disabled>
                inactif
            </button>

        </div>

        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col service-card">
            <img src=" img\WhatsApp Image 2024-11-27 à 09.34.18_08f3adb4.jpg     " alt="Support Technique" class="w-32 h-32 object-cover rounded-full mb-4 mx-auto">
            <div class=" text-center  items-center mb-4">
                <h2 class="text-2xl font-semibold ">3. Support Technique</h2>
            </div>
            <p class="text-gray-700 mb-4">
                Notre équipe de support technique est disponible 24/7 pour vous aider avec tous vos problèmes techniques. Que ce soit une question mineure ou une situation urgente, nous sommes là pour vous accompagner à chaque étape. 
            </p>
            <button class="bg-gray-300 text-gray-500 text-2xl font-semibold py-2 px-6 rounded-lg shadow-md cursor-not-allowed" disabled>
                inactif
            </button>


        </div>

        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col service-card">
            <img src="img/WhatsApp Image 2024-11-27 à 08.45.46_c8c25156.jpg  " alt="Formation" class="w-32 h-32 object-cover rounded-full mb-4 mx-auto">
            <div class="text-center  items-center mb-4">
                <h2 class="text-2xl font-semibold ">4. Formation</h2>
            </div>
            <p class="text-gray-700 mb-4">
                Nous offrons des sessions de formation adaptées à vos équipes pour garantir une utilisation optimale de nos produits et services. Nos formateurs expérimentés partagent leurs connaissances pour améliorer vos compétences.
            </p>
            <button class="bg-gray-300 text-gray-500 text-2xl font-semibold py-2 px-6 rounded-lg shadow-md cursor-not-allowed" disabled>
                inactif
            </button>


        </div>


    </div>


</div>

        <div class="text-center">
        <a href="http://127.0.0.1:8000/contact" class="   bg-gradient-to-r from-yellow-300 to-orange-400 text-white font-bold py-2 px-6 rounded-full shadow-lg transition duration-300 hover:shadow-xl hover:scale-105">
            Nous Contacter
        </a>
        </div>


<footer class="mt-10 p-4 bg-gray-200 text-center">
    <p class="text-gray-700">© 2024 Votre Entreprise. Tous droits réservés.</p>

</footer>
@endsection
