<div class="table-responsive">

    <table class="table" id="profissionalFavoritos-table">
        <thead class="bg-gradient-primary text-white">
            <tr>
                <th>Pet</th>
                <th>Profissional</th>
                <th colspan="3">Ações</th>
                <td></td>


            </tr>
        </thead>
        <tbody>
        @foreach($profissionalFavoritos as $profissionalFavorito)
            <tr>
                <td>{!! $profissionalFavorito->pet_id !!}</td>
                <td>{!! $profissionalFavorito->profissional_id !!}</td>

                    <td>
                        <div class="rating">
                            <label>
                                <input type="radio" name="stars" value="1" />
                                <span class="icon">★</span>
                            </label>
                            <label>
                                <input type="radio" name="stars" value="2" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </label>
                            <label>
                                <input type="radio" name="stars" value="3" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </label>
                            <label>
                                <input type="radio" name="stars" value="4" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </label>
                            <label>
                                <input type="radio" name="stars" value="5" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </label>
                    </td>
                <td>
                        {!! Form::open(['route' => ['profissionalFavoritos.update', $profissionalFavorito->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('profissionalFavoritos.edit', [$profissionalFavorito->id]) !!}" class='btn btn-secondary btn-xs'><i class="fas fa-edit"></i></a>
                            {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Deseja realmente excluir?')"]) !!}
                        </div>

                </td>

            </tr>

        @endforeach
        </tbody>
    </table>
</div>
