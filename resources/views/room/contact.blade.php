@extends('layout.admin')


@section('content')
<div class="all p-10 bg-[#efe0c474]">


<div class="container mx-auto mt-10">
    <h1 class="text-4xl font-bold">Contactez-Nous</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
        <!-- Bloc WhatsApp -->
        <div class="bg-green-100 border-l-4 border-green-500 p-4 rounded">
            <h2 class="text-2xl font-semibold">Contactez-nous via WhatsApp</h2>
            <p class="mt-2">Pour toute question, vous pouvez nous contacter directement sur WhatsApp.</p>

            <div class="mt-4">
                <button class="bg-green-500 text-white font-semibold py-2 px-4 rounded" id="dropdownButton">
                    Choisir un Service Client
                </button>
                <div class="hidden mt-2 bg-white border rounded shadow-md" id="dropdownMenu">
                    <a href="https://wa.me/237673536272" target="_blank" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Service Client 1</a>
                    <a href="https://wa.me/237652172346" target="_blank" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Service Client 2</a>
                </div>
            </div>
        </div>

        <script>
            document.getElementById('dropdownButton').onclick = function() {
                var menu = document.getElementById('dropdownMenu');
                menu.classList.toggle('hidden');
            }
        </script>

        <!-- Bloc Telegram -->
        <div class="bg-blue-100 border-l-4 border-blue-500 p-4 rounded">
            <h2 class="text-2xl font-semibold">Contactez-nous via Telegram</h2>
            <p class="mt-2">Pour toute question, vous pouvez nous contacter directement sur Telegram.</p>
            <a href="https://t.me/+jxxWPpNZTtJiM2Q0" target="_blank" class="inline-block bg-blue-500 text-white font-semibold py-2 px-4 rounded mt-4">Contacter sur Telegram</a>
        </div>
    </div>
</div>
@endsection
