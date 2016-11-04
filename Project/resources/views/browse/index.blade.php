        @extends('layouts.app')

@section('content')

    <div class="container-fluid">
    
        <div class="row">
            <div class="col-md-3 browse-filters">
                <div class="panel panel-filters">
                    <div class="panel-heading">Filters</div>
                    <div class="line"></div>
                    <div class="panel-body">
                        <a class="clear-link" href="{{url('/browse')}}"><i>Clear filters</i></a>
                        <form id="filter-form" action="{{ url('/browse/filter')}}">
                        <h4 id="toggle-console" class="toggle-filter">Consoles<a href="#" class="dropdown-filter"><span id="toggle-arrow-console" class="glyphicon glyphicon-menu-down console-down hvr-sink"></span><span id="toggle-arrow-genre" class="glyphicon glyphicon-menu-up console-up hvr-up"></span></a></h4> 

                        <div class="line"></div>

                        <div id="consoles-toggle">

                            <?php $consoles = Input::has('consoles') ? Input::get('consoles'): [] ?>
                        
                            <input id="c1" class="filter-check" type="checkbox" name="consoles[]" value="PlayStation 4" {{in_array('PlayStation 4', $consoles ) ? 'checked' :'' }}><label for="c1" ><span>PlayStation 4</span></label><br>
                            <input id="c2" class="filter-check" type="checkbox" name="consoles[]" value="PlayStation 3" {{in_array('PlayStation 3', $consoles ) ? 'checked' :'' }}><label for="c2" ><span>PlayStation 3</span></label><br>
                            <input id="c3" class="filter-check" type="checkbox" name="consoles[]" value="PlayStation 2" {{in_array('PlayStation 2', $consoles ) ? 'checked' :'' }}><label for="c3" ><span>PlayStation 2</span></label><br>
                            <input id="c4" class="filter-check" type="checkbox" name="consoles[]" value="PlayStation 1" {{in_array('PlayStation 1', $consoles ) ? 'checked' :'' }}><label for="c4" ><span>PlayStation 1</span></label><br>
                            <input id="c5" class="filter-check" type="checkbox" name="consoles[]" value="PS Vita" {{in_array('PS Vita', $consoles ) ? 'checked' :'' }}><label for="c5" ><span>PS Vita</span></label><br>
                            <input id="c6" class="filter-check" type="checkbox" name="consoles[]" value="Xbox One" {{in_array('Xbox One', $consoles ) ? 'checked' :'' }}><label for="c6" ><span>Xbox One</span></label><br>
                            <input id="c7" class="filter-check" type="checkbox" name="consoles[]" value="Xbox 360" {{in_array('Xbox 360', $consoles ) ? 'checked' :'' }}><label for="c7" ><span>Xbox 360</span></label><br>
                            <input id="c8" class="filter-check" type="checkbox" name="consoles[]" value="Xbox" {{in_array('Xbox', $consoles ) ? 'checked' :'' }}><label for="c8" ><span>Xbox</span></label><br>
                            <input id="c9" class="filter-check" type="checkbox" name="consoles[]" value="Wii" {{in_array('Wii', $consoles ) ? 'checked' :'' }}><label for="c9" ><span>Wii</span></label><br>
                            <input id="c10" class="filter-check" type="checkbox" name="consoles[]" value="Wii U"  {{in_array('Wii U', $consoles ) ? 'checked' :'' }}><label for="c10" ><span>Wii U</span></label><br>
                            <input id="c11" class="filter-check" type="checkbox" name="consoles[]" value="Nintentdo 3DS"  {{in_array('Nintentdo 3DS', $consoles ) ? 'checked' :'' }}><label for="c11" ><span>Nintendo 3DS</span></label><br>
                            <input id="c30" class="filter-check" type="checkbox" name="consoles[]" value="PC"  {{in_array('PC', $consoles ) ? 'checked' :'' }}><label for="c30" ><span>PC</span></label><br>
                            
                        </div>
                        <button class="btn btn-primary" type="submit">Filter</button>

                        <h4  id="toggle-genre" class="toggle-filter">Genres<a href="#" class="dropdown-filter"><span id="toggle-arrow-genre" class="glyphicon glyphicon-menu-down genre-down hvr-sink"></span><span id="toggle-arrow-genre" class="glyphicon glyphicon-menu-up genre-up hvr-up"></span></a></h4> 

                        <div class="line"></div>

                        <div id="genres-toggle">

                            <?php $genres = Input::has('genres') ? Input::get('genres'): [] ?>

                            <input id="c12" class="filter-check" type="checkbox" name="genres[]" value="Action" {{in_array('Action', $genres ) ? 'checked' :'' }}><label for="c12" ><span>Action</span></label><br>
                            <input id="c13" class="filter-check" type="checkbox" name="genres[]" value="Adventure"  {{in_array('Adventure', $genres ) ? 'checked' :'' }}><label for="c13" ><span>Adventure</span></label><br>
                            <input id="c14" class="filter-check" type="checkbox" name="genres[]" value="Education"  {{in_array('Education', $genres ) ? 'checked' :'' }}><label for="c14" ><span>Education</span></label><br>
                            <input id="c15" class="filter-check" type="checkbox" name="genres[]" value="Fighting"  {{in_array('Fighting', $genres ) ? 'checked' :'' }}><label for="c15" ><span>Fighting</span></label><br>
                            <input id="c16" class="filter-check" type="checkbox" name="genres[]" value="Flight"  {{in_array('Flight', $genres ) ? 'checked' :'' }}><label for="c16" ><span>Flight</span></label><br>
                            <input id="c17" class="filter-check" type="checkbox" name="genres[]" value="Horror"  {{in_array('Horror', $genres ) ? 'checked' :'' }}><label for="c17" ><span>Horror</span></label><br>
                            <input id="c18" class="filter-check" type="checkbox" name="genres[]" value="MMO"  {{in_array('MMO', $genres ) ? 'checked' :'' }}><label for="c18" ><span>MMO</span></label><br>
                            <input id="c19" class="filter-check" type="checkbox" name="genres[]" value="Music"  {{in_array('Music', $genres ) ? 'checked' :'' }}><label for="c19" ><span>Music</span></label><br>
                            <input id="c20" class="filter-check" type="checkbox" name="genres[]" value="Party"  {{in_array('Party', $genres ) ? 'checked' :'' }}><label for="c20" ><span>Party</span></label><br>
                            <input id="c21" class="filter-check" type="checkbox" name="genres[]" value="Platform"  {{in_array('Platform', $genres ) ? 'checked' :'' }}><label for="c21" ><span>Platform</span></label><br>
                            <input id="c22" class="filter-check" type="checkbox" name="genres[]" value="Puzzle"  {{in_array('Puzzle', $genres ) ? 'checked' :'' }}><label for="c22" ><span>Puzzle</span></label><br>
                            <input id="c23" class="filter-check" type="checkbox" name="genres[]" value="Race"  {{in_array('Race', $genres ) ? 'checked' :'' }}><label for="c23" ><span>Race</span></label><br>
                            <input id="c24" class="filter-check" type="checkbox" name="genres[]" value="RPG"  {{in_array('RPG', $genres ) ? 'checked' :'' }}><label for="c24" ><span>RPG</span></label><br>
                            <input id="c25" class="filter-check" type="checkbox" name="genres[]" value="Shooter"  {{in_array('Shooter', $genres ) ? 'checked' :'' }}><label for="c25" ><span>Shooter</span></label><br>
                            <input id="c26" class="filter-check" type="checkbox" name="genres[]" value="Simulation"  {{in_array('Simulation', $genres ) ? 'checked' :'' }}><label for="c26" ><span>Simulation</span></label><br>
                            <input id="c27" class="filter-check" type="checkbox" name="genres[]" value="Sport"  {{in_array('Sport', $genres ) ? 'checked' :'' }}><label for="c27" ><span>Sport</span></label><br>
                            <input id="c28" class="filter-check" type="checkbox" name="genres[]" value="Stealth"  {{in_array('Stealth', $genres ) ? 'checked' :'' }}><label for="c28" ><span>Stealth</span></label><br>
                            <input id="c29" class="filter-check" type="checkbox" name="genres[]" value="Strategy" {{in_array('Strategy', $genres ) ? 'checked' :'' }}><label for="c29" ><span>Strategy</span></label>

                        </div>
                        <button class="btn btn-primary" type="submit">Filter</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-9 ">
            <div class="search-engine">
                {!! Form::open(['action' => ['BrowseController@search']]) !!}
                {{ csrf_field() }}
                    {!! Form::text('search', null,
                                           array('required',
                                                'class'=>' searchbar form-control-search form-control',
                                                'placeholder'=>'Search for a game')) !!}
                     {!! Form::submit('Search',
                                                array('class'=>'btn btn-default')) !!}
                 {!! Form::close() !!}
            </div>

                <div class="panel panel-games">
                    <div class="panel-heading">Games</div>
                    <div class="line-browse"></div>
                    <div class="panel-body panel-browse">
                        <div class="row">
                            @if(count($games) == 0)
                            <div class="game-preview flex-box">
                                    <h1><i class="fa fa-search" aria-hidden="true"></i>   The are no games found.</h1>
                                </div>
                            </div>
                            @else
                            @foreach($games as $game)
                            <div class="game-preview">
                                <div class="col-md-4 col-sm-4 img-box">
                                    <a href="{{ url('/browse/game', $game->id) }}">
                                    <div class="preview-image-box">
                                    <img class="preview-image" src="@if(strpos($game->photoUrl, 'http://') !== false) {{ $game->photoUrl }} @else {{url('/uploads', $game->photoUrl)}} @endif"> 
                                    </div>
                                    </a>                                    
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <a href="{{ url('/browse/game', $game->id) }}"><h3 class="game-title">{{ $game->name }}</h3></a>
                                    <p><span class="bold">Console:</span> {{ $game->console }}</p>
                                    <p><span class="bold">Genre:</span> {{ $game->genre }}</p>
                                    <p><span class="bold">Description:<br></span> {{ str_limit(strip_tags($game->description, '<h2>'), 100) }}</p>
                                </div>
                                <div class="col-md-2 col-sm-2 more-info-box">
                                    <p><b>Added by:</b> <br><a href="{{ url('/profile', $game->user_id) }}">{{ $game->user->name }}</a></p>
                                    <p><b>On:</b> <br>{{ $game->created_at }}</p>
                                </div>
                            </div>
                            @endforeach
                            @endif
                            
                        </div>

                        <div class="text-center">
                             {!! $games->links() !!} 
                        </div>
                    </div>

                </div>
                
            </div>
        </div>

    </div>

@endsection
