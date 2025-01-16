@extends('layout.admin')


@section('content')
    {{-- <header class="bg-blue-600 text-white p-6">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">Investissez avec Confiance</h1>
            <p class="mt-2">Nous vous accompagnons dans vos choix d'investissement pour un avenir financier serein.</p>
            <a href="/services" class="bg-white text-blue-600 font-semibold py-2 px-4 rounded mt-4 inline-block">Découvrez nos services</a>
        </div>
    </header> --}}

    <div class="all p-10 bg-[#efe0c474]">

    <div class="container mx-auto p-6 mt-10 flex flex-col md:flex-row bg-[#e4dac5] rounded-lg">
        <div class="w-full md:w-1/2 pr-0 md:pr-4 mb-6 md:mb-0">
            <img src="slide/WhatsApp Image 2024-11-27 à 10.21.12_32935bc4.jpg" alt="Image inspirante" class="w-full h-auto rounded-lg shadow-lg">
        </div>
        <div class="w-full md:w-1/2 pl-0 md:pl-4">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">Bienvenue chez Financia </h1>
            <p class="text-lg md:text-xl mb-4">
                Chez <strong>Financia</strong>, nous croyons que chaque décision financière peut transformer votre avenir. Notre mission est de vous guider à travers un monde d'opportunités d'investissement, en vous fournissant des conseils d'experts et des stratégies adaptées à vos besoins.
            </p>
            <p class="text-lg md:text-xl mb-4">
                Nous savons que chaque client est unique. Que vous visiez la retraite, l'investissement immobilier ou la diversification de votre portefeuille, nous sommes là pour vous accompagner à chaque étape.
            </p>
            <p class="text-lg md:text-xl">
                Ensemble, bâtissons un avenir prospère. Faites confiance à notre expertise pour réaliser vos rêves financiers et atteindre vos objectifs à long terme.
            </p>
        </div>
    </div>


    <div class="mt-8 text-white">
        <div class="bg-orange-300 shadow-md rounded-lg p-6">
            <h2 class="text-3xl font-semibold mb-4">Nos Services</h2>
            <p class="text-gray-700 mb-4">
                Découvrez notre large gamme de services, incluant :
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-4">
                <li>Consultation personnalisée</li>
                <li>Développement de solutions sur mesure</li>
                <li>Support technique 24/7</li>
                <li>Formation pour vos équipes</li>
                <li>Plateforme d'investissement en ligne</li>
            </ul>
        </div>
    </div>

    <div class="mt-8">
        <div class="bg-orange-200 shadow-md rounded-lg p-4 md:p-6">
            <h2 class="text-2xl md:text-3xl font-semibold mb-4">Témoignages de Clients</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6">
                <div class="flex flex-col items-center">
                    <img src="tem\WhatsApp Image 2024-12-02 à 10.54.30_74d73c7b.jpg " alt="Client 1" class="rounded-full mb-2 w-24 h-32 md:w-32 md:h-32 object-cover">
                    <blockquote class="border-l-4 border-blue-600 pl-3 md:pl-4 italic text-gray-700 text-center text-sm md:text-base">
                        Travailler avec Financia a été une expérience exceptionnelle. Leur équipe est non seulement compétente, mais elle sait également écouter et comprendre les besoins de ses clients. Grâce à leur soutien, j'ai pu naviguer facilement dans le processus d'investisement. Je recommande fortement Financia à quiconque souhaite investir avec sérénité.
                    </blockquote>
                    <p class="mt-1 font-semibold text-sm md:text-base">- Client Satisfait</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="tem\WhatsApp Image 2024-12-02 à 10.56.14_259747ce.jpg" alt="Client 2" class="rounded-full mb-2 w-24 h-24 md:w-32 md:h-32 object-cover">
                    <blockquote class="border-l-4 border-blue-600 pl-3 md:pl-4 italic text-gray-700 text-center text-sm md:text-base">
                        Financia se distingue par son professionnalisme et son engagement envers ses clients. Dès le premier contact, j'ai été impressionné par leur expertise et leur disponibilité. Ils m'ont guidé à chaque étape de mon projet financier, rendant le processus à la fois simple et agréable. Je suis ravi d'avoir choisi Financia pour mon investissement.
                    </blockquote>
                    <p class="mt-1 font-semibold text-sm md:text-base">- Autre Client Satisfait</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="tem\WhatsApp Image 2024-12-02 à 10.57.35_b697ac6f.jpg" alt="Client 3" class="rounded-full mb-2 w-24 h-24 md:w-32 md:h-32 object-cover">
                    <blockquote class="border-l-4 border-blue-600 pl-3 md:pl-4 italic text-gray-700 text-center text-sm md:text-base">
                        Je ne peux que remercier Financia pour leur assistance précieuse. Leur approche personnalisée et leur connaissance approfondie de l'investissement ont fait toute la différence dans mon projet. L'équipe est toujours prête à répondre aux questions et à fournir des conseils adaptés. Financia est sans aucun doute un partenaire de confiance dans le domaine d'investissement.
                    </blockquote>
                    <p class="mt-1 font-semibold text-sm md:text-base">- Un Autre Client Satisfait</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8">
        <h2 class="text-3xl font-semibold mb-4">Contactez-Nous</h2>
        <p class="text-gray-700 mb-4">
            Prêt à discuter de votre projet ? <a href="/contact" class="text-blue-600 hover:underline">Contactez-nous</a> dès aujourd'hui pour une consultation gratuite !
        </p>
    </div>
</div>
@endsection
