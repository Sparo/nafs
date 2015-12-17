<ul class="nav nav-tabs">
	<li role="presentation" @if(action('AboutController@index') == Request::url())class="active"@endif><a href="{{ action('AboutController@index') }}">About</a></li>
	<li role="presentation" @if(action('EventsController@index') == Request::url())class="active"@endif><a href="{{ action('EventsController@index') }}">Events</a></li>
	<li role="presentation" @if(action('ClubsController@index') == Request::url())class="active"@endif><a href="{{ action('ClubsController@index') }}">Clubs</a></li>
	<li role="presentation" @if(action('CoachesController@index') == Request::url())class="active"@endif><a href="{{ action('CoachesController@index') }}">Coaches</a></li>
</ul>
