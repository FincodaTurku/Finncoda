    <!--Navbar-->
        <div class = "navbar navbar-inverse navbar-static-top">
            <div class= "container">
                <a href = "{{ url('/') }}" class = "navbar-brand">FINCODA</a>
                <button class= "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                	<span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                </button>
                <div class = "collapse navbar-collapse navHeaderCollapse">
                	<ul class = "nav navbar-nav navbar-right">
                    	<li><a href="{{ action('DashboardController@index') }}">Dashboard</a></li>
                    	<li class = "dropdown"><a href="#" class = "dropdown-toggle" data-toggle = "dropdown">Survey Management<b class="caret"></b></a>
                        <!--Submenu-->
                        	<ul class = "dropdown-menu">
                            	<li><a href="{{ action('SurveyController@createNew') }}">Create new</a></li>
                                <li><a href="{{ action('SurveyController@index') }}">Surveys</a></li>
                            </ul>
                        </li>
                        <li class = "dropdown"><a href="#" class = "dropdown-toggle" data-toggle = "dropdown">Info<b class="caret"></b></a>
                        <!--Submenu-->
                        	<ul class = "dropdown-menu">
                            	<li><a href="{{ action('IndicatorGroupController@index') }}">Barometer</a></li>
                                <li><a href="#">News</a></li>
                            </ul>
                        </li>
						<li><a href="#">Reports</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
            </div>
        </div>