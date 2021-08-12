<h3>Fornecedores:</h3>

{{-- Dessa forma se usa comentários --}}

@php
    //Dessa forma é possível usar o php puro

@endphp

@isset($fornecedores)
    @forelse ( $fornecedores as $indice => $fornecedor )
        Fornecedor: {{ $fornecedor['nome']}}
        <br>
        Status: {{$fornecedor['status']}}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Sem CNPJ' }}
        <br>
        Telefone: {{ $fornecedor['ddd'] ?? 'Sem DDD' }} - {{ $fornecedor['telefone'] ?? 'Sem Telefone' }}
        <hr>
    @empty
        Não Existem Fornecedores
    @endforelse
@endisset

{{-- 

Para exibir arrays 

@dd(array) 

Ex: @dd($fornecedores) 
--------------------------------------------------------
IF ELSES

@if(Condiçao)
    codigo html
@elseif(Condição)
     codigo html
@else
     codigo html
@endif

ex:
@if(count($fornecedores) > 0 && count($fornecedores)<10)
    <h4>Existem alguns fornecedores cadastrados</h4>
@elseif(count($fornecedores) > 10)
    <h4>Existem muitos fornecedores cadastrados</h4>
@else
    <h4>Ainda não existem fornecedores cadastrados</h4>
@endif
------------------------------------------------------------
Unless - Negação

@unless(Condição)
    Código Html
@endunless

Ex:
@unless($fornecedores[0]['status'] == 'S')
    Fornecedor Inativo
@endunless
----------------------------------------------------------------
Isset - Verifica se existe a variavel

@isset(Variavel)
    Código Html
@endisset

Ex:
@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome']}}
    <br>
@endisset

------------------------------------------------------------------
@empty - Verfica se variavel esta vazio (0, null, '', false)

@empty(Variavel)
    Código Html
@endEmpty

Exemplo:
@empty($fornecedores[0]['cnpj'])
    - vazio
@endEmpty
-----------------------------------------------------------
Compara e se existir imprime a variavel senãoimprime o default
{{ $Fornecedores[0]['cnpj'] ?? 'Sem CNPJ' }}
-----------------------------------------------
 @switch($fornecedores[0]['ddd'])
        @case('11')
            São Paulo
            @break
        @case('35')
            Minas
            @break
        @case('12')
            Can Jordão
            @break
        @default
            Estado Não Identificado
    @endswitch
-----------------------------------------------------------------------
 @for ($i = 0;isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome']}}
        <br>
        Status: {{$fornecedores[$i]['status']}}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Sem CNPJ' }}
        <br>
        Telefone: {{ $fornecedores[$i]['ddd'] ?? 'Sem DDD' }} - {{ $fornecedores[$i]['telefone'] ?? 'Sem Telefone' }}
        <hr>
    @endfor

--------------------------------------------------------------------------

@php $i = 0 @endphp
    @while(isset($fornecedores[$i]))
        Fornecedor: {{ $fornecedores[$i]['nome']}}
        <br>
        Status: {{$fornecedores[$i]['status']}}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Sem CNPJ' }}
        <br>
        Telefone: {{ $fornecedores[$i]['ddd'] ?? 'Sem DDD' }} - {{ $fornecedores[$i]['telefone'] ?? 'Sem Telefone' }}
        <hr>
        @php $i++ @endphp
    @endwhile
------------------------------------------------------------------------------------
@foreach ( $fornecedores as $indice => $fornecedor )
        Fornecedor: {{ $fornecedor['nome']}}
        <br>
        Status: {{$fornecedor['status']}}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Sem CNPJ' }}
        <br>
        Telefone: {{ $fornecedor['ddd'] ?? 'Sem DDD' }} - {{ $fornecedor['telefone'] ?? 'Sem Telefone' }}
        <hr>
    @endforeach
------------------------------------------------------------------------------------------
Forelse - semelhante ao foeeach com a opção empty para caso o array esteja vazio

@forelse ( $fornecedores as $indice => $fornecedor )
        Fornecedor: {{ $fornecedor['nome']}}
        <br>
        Status: {{$fornecedor['status']}}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Sem CNPJ' }}
        <br>
        Telefone: {{ $fornecedor['ddd'] ?? 'Sem DDD' }} - {{ $fornecedor['telefone'] ?? 'Sem Telefone' }}
        <hr>
    @empty
        Não Existem Fornecedores
    @endforelse
----------------------------------------------------------------------
Imprime do jeito que esta depois do arroba
@{{$fornecedor}}
-----------------------------------------------------------
Objeto loop é criado no foreach e forelse
$loop->iteration = retorna a interação em que ele esta
$loop->first = retorna true se for a primeira
$loop->last = retorna true se for a ultima
$loop->count = retorna o total de elementos 


--}}