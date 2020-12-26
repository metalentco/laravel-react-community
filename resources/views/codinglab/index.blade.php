@extends('layouts.layout5')

@section('title_base')
    CodingLab
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('assets/css/onlinetutorial/onlineindex.css')}}">
@endsection


@section('content')


<h1 class="grid-title">CodingLab</h1>

<div class="online-asside">
    <div class="online-card">
    <a href="{{ url('panelcodelab')}}" class="online-card__body">
        <span class="online-card__title">Menu o cabeseras</span></a>
        <div class="online-card__descrition"><span>Tecnologias Usadas en esta sección</span> </br>
          <p>HTML, CSS, JavaScript y ( jquery pero no indispensable)</p> 
        </div>
        
    </div>
    <div class="online-card">
        <a href="{{ url('panel1')}}" class="online-card__body"><span class="online-card__title">Sección de Paginas Completas, responsive y normal</span></a>
        <div class="online-card__descrition"><span>Tecnologias Usadas en esta sección</span></br>
            <p>HTML, CSS, JavaScript y ( jquery pero no indispensable)</p> 
        </div>
        
    </div>
    <div class="online-card">
        <a href="{{ url('panel2')}}" class="online-card__body"><span class="online-card__title">Sección de formularios y login</span></a>
        <div class="online-card__descrition"><span>Tecnologias Usadas en esta sección</span></br>
            <p>HTML, CSS, JavaScript y ( jquery pero no indispensable)</p>
        </div>
        
    </div>
    <div class="online-card">
        <a href="{{ url('panelcodelab1')}}" class="online-card__body"><span class="online-card__title">Animaciones </span></a>
        <div class="online-card__descrition"><span>Tecnologias Usadas en esta sección</span></br>
            <p>HTML, CSS, JavaScript y ( jquery pero no indispensable)</p>
    </div>
</div>
</div>

<div class="contenedor">
   
</div>

@endsection