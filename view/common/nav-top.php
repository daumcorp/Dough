	<div class="nav_top nav_fixed">
		<div class="wrap_page">
			<h1>
				<a href="./?page=intro">
					<img src="images/daumlogo.png" class="logo" alt="Daum" width="50"/>
					Dough
				</a>
			</h1>
			<ul>
				<li <? if($page == "intro") echo "class='on'";?>><a href="?page=intro">Dough</a></li>
				<li <? if($page == "base") echo "class='on'";?>><a href="?page=base">Basic</a></li>
				<li <? if($page == "elements") echo "class='on'";?>><a href="?page=elements">Elements</a></li>
				<li <? if($page == "components") echo "class='on'";?>><a href="?page=components">Components</a></li>
				<li <? if($page == "plugin") echo "class='on'";?>><a href="?page=plugin">Plug-in</a></li>
			</ul>
			<div class="f_r">
				<a href="javascript:;" class="btn" id="goOven"  onclick="getLog('link_go_oven','http://oven.ftdev.daum.net');return false;">Go to Oven</a>
			</div>
		</div>
	</div>