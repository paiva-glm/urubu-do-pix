@extends('layouts.app')

@section('title', 'Página Inicial')

@section('content_body')
<script type="module" src="{{ mix('js/app.js') }}"></script>

<h2 style="font-size: 30px; margin-top: 30px; margin-bottom: -26px;">Bem-vindo à página inicial!</h2>

<!-- Botão de áudio -->
<button id="audio-toggle" class="audio-off" title="Toggle audio">
    <i id="audio-icon" class="fas fa-volume-off"></i>
</button>
<audio id="audio" src="seu-audio.mp3"></audio>

<div class="container">
    <img src="https://imgs.search.brave.com/MPnyCBaDH6lXobGrSZU11F5gSEYhEjT2a0tfZrbheGw/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zMi10/ZWNodHVkby5nbGJp/bWcuY29tLzI1WnVO/TG5XRTlYVmIyZmt1/VVBRR2dlQ3NuUT0v/MHgwOjQ1MHg0NTAv/OTg0eDAvc21hcnQv/ZmlsdGVyczpzdHJp/cF9pY2MoKS9pLnMz/LmdsYmltZy5jb20v/djEvQVVUSF8wOGZi/ZjQ4YmMwNTI0ODc3/OTQzZmU4NmU0MzA4/N2U3YS9pbnRlcm5h/bF9waG90b3MvYnMv/MjAyMy84L2IvNjVm/djZjU0JDcWk1aFRB/akJFTFEvdXJ1YnUt/ZG8tcGl4LTEucG5n"
         style="width: 500px; height: 500px;">
    <p>
        As condições de vida desse país deixam as coisas difíceis para qualquer um viver a devida vida que merece. 
        Por isso eu trago a solução! isso mesmo eu! o urubu do pix, irei pegar uma quantia de dinheiro
        e aplicarei em diversos meios de investimentos e logo trarei <strong class="rgb-text">DEZ VEZES MAIS</strong> para você!
    </p>
    <button style="animation: rgbShadow 3s infinite linear;">Clique aqui!</button>
</div>

<!-- Modal / popup da roleta -->
<div id="modal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; 
    background: rgba(0,0,0,0.7); justify-content:center; align-items:center;">
    <div style="background:black; padding:20px; border-radius:10px; text-align:center; width:300px; position:relative;">
        <h3>Roleta do Urubu do Pix</h3>
        <div class="roleta" id="roleta"></div>
        <h2 id="resultado"></h2>
        <button id="close-modal" style="margin-top:10px;">Fechar</button>
    </div>
</div>
@endsection
