				<div class="scroll_fix">
					<div class="scroll_title">
						<h1>
<? if($page == "base"){ ?>					
						Basic
<? }elseif($page == "elements"){ ?>
						Elements
<? }elseif($page == "components"){ ?>						
						Components
<? }elseif($page == "plugin"){ ?>						
						Plug-in
<? } ?>
						</h1>
					</div>
					<ul class="list_article">

<? if($page == "base"){ ?>					
						<li><a href="#GlobalClass">일반 전역 클래스</a></li>
						<li><a href="#Wrap">Wrap</a></li>
						<li><a href="#GridSystem">Grid system</a></li>
<? }elseif($page == "elements"){ ?>
						<li><a href="#Headings">Headings</a></li>
						<li><a href="#Lists">Lists</a></li>
						<li><a href="#Form">Form elements</a></li>
						<li><a href="#Table">Table</a></li>
<? }elseif($page == "components"){ ?>						
						<li><a href="#GNB">Global Navigation</a></li>
						<li><a href="#Tab">Tab navigation</a></li>
						<li><a href="#Buttons">Buttons</a></li>
						<li><a href="#Panel">Panel</a></li>
						<li><a href="#Thumbnail">Thumbnail group</a></li>
						<li><a href="#Paging">Paging</a></li>
						<li><a href="#Popup">Popup window</a></li>
						<li><a href="#LineBreak">Line break</a></li>
<? }elseif($page == "plugin"){ ?>						
						<li><a href="#Responsible">반응형 웹 모듈</a></li>
<? } ?>
					</ul>


				</div>
				