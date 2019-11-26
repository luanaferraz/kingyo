<div class="table-responsive">
    <table class="table" id="profissionals-table">
        <thead class="bg-gradient-primary text-white">
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Avaliação</th>
            <th colspan="3">Favoritar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($profissionais as $profissional)
            <tr>
                <td>{!! $profissional->nome !!} <br> <strong>{!! $profissional->profissao !!}</strong></td>
                <td>{!! $profissional->rua !!}, nº{!! $profissional->numero !!} {!! $profissional->bairro !!} <br> {!! $profissional->cidade !!} | {!! $profissional->estado !!}</td>
                <td><a href="tel:{!! $profissional->telefone !!}">{!! $profissional->telefone !!}</a></td>
                <td>
                    @if( $profissional->nota != null && $profissional->nota != 0 )
                        @for($i =1; $i <=  $profissional->nota ; $i++)
                            <i class="fa fa-star star"></i>
                        @endfor
                        <p class="mb-0">Nota {!! $profissional->nota !!} de 5</p>
                    @else
                        <p>Nenhuma avaliação</p>
                    @endif
                </td>
                <td>
                    {!! Form::open(['route' => ['favoritos.store'], 'method' => 'post']) !!}
                    <div class='btn-group'>
                        <input type="hidden" name="profissional_id" value="{{$profissional->id}}">
                        <input type="hidden" name="tutor_id" value="{{$tutor_id}}">
                        @if(empty($profissional->profissional_id))
                            {!! Form::button('<i class="fas fa-heart "></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Deseja adicionar aos favoritos?')"]) !!}
                        @else
                            <a href="/favoritos" class="btn bg-light btn-xs"><i class="fas fa-heart red"></i></a>
                        @endif
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
