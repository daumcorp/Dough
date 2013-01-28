	<div class="wrap_page nav_fixed" id="top">
		<div class="wrap">
			<div class="f_l grid_25 response_no_float response_no_grid">
<? include("./view/common/nav-left.php"); ?>
			</div>
			<div id="doughContent" class="f_r grid_70 response_no_float response_no_grid">
				
				<h2 id="GNB">Global Navigation</h2>
				Dough의 Global Navigation입니다.<br/>
				기본적으로 Page-top형과 일반 가로형, 세로형 3가지를 제공하며, 일반 가로형의 경우 1 Depth와 2 Depth 중 선택하여 사용할 수 있습니다.<br/>
				현재 선택여부 구분을 위해서는 LI태그에 ".on" 클래스를 기입합니다.
				
				<h3>Page-top형 (Default)</h3>
				<div class="nav_top">
					<h1>
						<img src="images/daumlogo.png" class="logo" alt="Daum" width="50"/>
						Dough
					</h1>
					<ul>
						<li><a href="javascript:;">Menu 1</a></li>
						<li class="on">
							<a href="javascript:;">Menu 2</a></li>
						<li><a href="javascript:;">Menu 3</a></li>
					</ul>
				</div> 
				
				<div class="code">
<?=escapeCode('
<div class="#{nav_top}#">
	<h1>
		<img src="images/daumlogo.png" class="logo" alt="Daum" width="50"/>
		Dough
	</h1>
	<ul>
		<li><a href="javascript:;">Menu 1</a></li>
		<li class="#{on}#"><a href="javascript:;">Menu 2</a></li>
		<li><a href="javascript:;">Menu 3</a></li>
	</ul>
</div>
<div class="wrap_page">
	...	
</div>
')?>
				</div>		
				
				<h3>Page-top형 (2 Depth)</h3>
				<div class="nav_top has_sub">
					<h1>
						<img src="images/daumlogo.png" class="logo" alt="Daum" width="50"/>
						Dough
					</h1>
					<ul>
						<li><a href="javascript:;">Menu 1</a></li>
						<li class="on">
							<a href="javascript:;">Menu 2</a>
							<ul>
								<li class="on"><a href="#none">메뉴1</a></li>
								<li><a href="#none">메뉴2</a></li>
								<li><a href="#none">메뉴3</a></li>
								<li><a href="#none">메뉴4</a></li>
							</ul>
						</li>
						<li><a href="javascript:;">Menu 3</a></li>
					</ul>
				</div> 
				
				<div class="code">
<?=escapeCode('
<div class="nav_top #{has_sub}#">
	<h1>
		<img src="images/daumlogo.png" class="logo" alt="Daum" width="50"/>
		Dough
	</h1>
	<ul>
		<li><a href="javascript:;">Menu 1</a></li>
		<li class="on">
			<a href="javascript:;">Menu 2</a>
			#{<ul>
				<li class="on"><a href="#none">메뉴1</a></li>
				<li><a href="#none">메뉴2</a></li>
			</ul>}#
		</li>
		<li><a href="javascript:;">Menu 3</a></li>
	</ul>
</div> 
<div class="wrap_page">
	...	
</div>
')?>
				</div>	
						
				<h3>Page-top형 (Fixed)</h3>
				현재 보시는 페이지 상단에 적용된 것이 Page-top Fixed형 Navigation입니다.<br/>
				<strong>스크롤에 관계없이 언제나 화면 최상단에 위치</strong>합니다. 
				GNB영역에 <strong>.nav_fixed</strong>를 추가하면 바로 적용되며, 뒤이어 나오는 <strong>.wrap_page</strong> 영역에도 <strong>.nav_fixed</strong>를 추가하시면 Fixed된 영역만큼 본문이 아래에 위치합니다.
				<div class="code">
<?=escapeCode('
<div class="nav_top #{nav_fixed}#">
	<h1>
		<img src="images/daumlogo.png" class="logo" alt="Daum" width="50"/>
		Dough
	</h1>
	<ul>
		<li><a href="#">메뉴A</a></li>
		<li class="#{on}#"><a href="#">메뉴B</a></li>
		<li><a href="#">메뉴C</a></li>
		<li><a href="#">My Page</a></li>
	</ul>
	<div class="combo f_r">
		<input type="text" name="" size="20">
		<button type="button" class="btn">검색</button>
	</div>
</div>
<div class="wrap_page #{nav_fixed}#">
	...	
</div>
')?>
				</div>
				
				
				<h3>일반 가로형 - 1 Depth</h3>
				<ul class="nav_bar">
					<li><a href="#">메뉴A</a></li>
					<li class="on"><a href="#">메뉴B</a></li>
					<li><a href="#">메뉴C</a></li>
				</ul>
				
				<div class="code">
<?=escapeCode('
<ul class="#{nav_bar}#">
	<li><a href="#">메뉴A</a></li>
	<li class="on"><a href="#">메뉴B</a></li>
	<li><a href="#">메뉴C</a></li>
</ul>
')?>
				</div>
				
				<h3>일반 가로형 - 2 Depth</h3>
				<ul class="nav_bar has_sub">
					<li><a href="#">메뉴A</a></li>
					<li class="on">
						<a href="#">메뉴B</a>
						<ul>
							<li class="on"><a href="#none">메뉴1</a></li>
							<li><a href="#none">메뉴2</a></li>
							<li><a href="#none">메뉴3</a></li>
							<li><a href="#none">메뉴4</a></li>
						</ul>
					</li>
					<li><a href="#">메뉴 C</a></li>
				</ul>

				<div class="code">
<?=escapeCode('
<ul class="nav_bar #{has_sub}#">
	<li><a href="#">메뉴A</a></li>
	<li class="on">
		<a href="#">메뉴B</a>
		<ul>
			<li class="on"><a href="#none">메뉴1</a></li>
			<li><a href="#none">메뉴2</a></li>
			<li><a href="#none">메뉴3</a></li>
			<li><a href="#none">메뉴4</a></li>
		</ul>
	</li>
	<li><a href="#">메뉴 메뉴 C</a></li>
	<li class="f_r"><a href="#">MY PAGE</a></li>
</ul>
')?>
				</div>

				<h3>세로형</h3>
				<div class="wrap">
					<ul class="nav_list has_sub grid_30 response_no_grid">
						<li class="tit">Sample Guide</li>
						<li class="on"><a href="#">메뉴1</a></li>
						<li><a href="#">메뉴2</a></li>
						<li><a href="#">메뉴3</a></li>
					</ul>
					
					<ul class="nav_list has_sub grid_30 response_no_grid">
						<li class="tit">Sample Guide</li>
						<li class="on">
							<a href="#">메뉴1</a>
							<ul>
								<li class="on"><a href="#">하위메뉴</a></li>
								<li><a href="#">하위메뉴</a></li>
								<li><a href="#">하위메뉴</a></li>
								<li><a href="#">하위메뉴</a></li>
							</ul>
						</li>
						<li><a href="#">메뉴2</a></li>
						<li><a href="#">메뉴3</a></li>
					</ul>
				</div>
				<div class="code">
<?=escapeCode('
<ul class="#{nav_list has_sub}#">
	<li class="tit">Sample Guide</li>
	<li class="on">
		<a href="#">메뉴1</a>
		<ul>
			<li class="on"><a href="#">하위메뉴</a></li>
			<li><a href="#">하위메뉴</a></li>
			<li><a href="#">하위메뉴</a></li>
			<li><a href="#">하위메뉴</a></li>
		</ul>
	</li>
	<li><a href="#">메뉴2</a></li>
	<li><a href="#">메뉴3</a></li>
</ul>
')?>
				</div>

				<span class="line_break"></span>
				
				<h2 id="Tab">Tab Navigation</h2>
				
				페이지 내 컨텐츠 구분을 위해 자주 사용되는 Tab navigation을 제공합니다.<br/>
				기본 타입 이외에 Small 타입도 제공하며, 각 탭별 선택여부 구분은 LI태그에 ".on" 클래스를 선언함으로써 표현가능합니다.
				
				<h3 id="anchor1">Default</h3>

				<ul class="tab_bar">
					<li class="on"><a href="javascript:;">탭메뉴1</a></li>
					<li><a href="javascript:;">탭메뉴2</a></li>
					<li><a href="javascript:;">탭메뉴3</a></li>
				</ul>

				<div class="code">
<?=escapeCode('
<ul class="#{tab_bar}#">
	<li class="on"><a href="#">탭메뉴1</a></li>
	<li><a href="#">탭메뉴2</a></li>
	<li><a href="#">탭메뉴3</a></li>
	<li class="f_r"><a href="#">탭메뉴4 (f_r)</a></li>
</ul>
')?>
				</div>

				<h3>Small</h3>
	
				<ul class="tab_bar tab_small">
					<li><a href="javascript:;">탭메뉴1</a></li>
					<li class="on"><a href="javascript:;">탭메뉴2</a></li>
					<li><a href="javascript:;">탭메뉴3</a></li>
				</ul>

				<div class="code">
<?=escapeCode('
<ul class="tab_bar #{tab_small}#">
	<li><a href="#">탭메뉴1</a></li>
	<li class="on"><a href="#">탭메뉴2</a></li>
	<li><a href="#">탭메뉴3</a></li>
</ul>
')?>
				</div>

				<span class="line_break"></span>
				
				<h2 id="Buttons">Buttons</h2>
				
				<a href="javascript:;" class="btn">Default</a>
				<a href="javascript:;" class="btn btn_blue">Blue</a>
				<a href="javascript:;" class="btn btn_purple">Purple</a>
				<a href="javascript:;" class="btn btn_red">Red</a>
				<a href="javascript:;" class="btn btn_yellow">Yellow</a>
				<a href="javascript:;" class="btn btn_green">Green</a>
				<a href="javascript:;" class="btn btn_black">Black</a>
				<br/><br/>
				
				Dough의 스타일은 CSS 기반으로 작성되었기 때문에 버튼 역시 내용 텍스트에 따라 자유롭게 사이즈가 변화하며,<br/>
				A태그, INPUT, BUTTON태그 모두 ".btn" 클래스를 선언함으로써 스타일링이 가능합니다.<br/>
				색상별로 현재까지 총 6가지를 제공하며, 크기별 분류는 총 4개의 사이즈를 제공합니다.

				<div class="code">
<?=escapeCode('
/* 아래 코드들은 모두 동일한 버튼 스타일을 표현합니다 */
<a href="#" class="btn">버튼</a>
<button type="button" class="btn">버튼</button>
<input type="button" class="btn" value="버튼"/>
')?>
				</div>

				<h3>색상별 분류</h3>
				
				<a href="javascript:;" class="btn">Default</a>
				<div class="code">
<?=escapeCode('
<a href="#" class="#{btn}#">버튼</a>
')?>
				</div>
				
				<a href="javascript:;" class="btn btn_blue">Blue</a>
				<div class="code">
<?=escapeCode('
<a href="#" class="btn #{btn_blue}#">Blue</a>
')?>
				</div>

				<a href="javascript:;" class="btn btn_purple">Purple</a>
				<div class="code">
<?=escapeCode('
<a href="#" class="#{btn btn_purple}#">버튼</a>
')?>
				</div>
				
				<a href="javascript:;" class="btn btn_red">Red</a>
				<div class="code">
<?=escapeCode('
<a href="#" class="btn #{btn_red}#">Red</a>
')?>
				</div>
				
				<a href="javascript:;" class="btn btn_yellow">Yellow</a>
				<div class="code">
<?=escapeCode('
<a href="#" class="btn #{btn_yellow}#">Yellow</a>
')?>
				</div>
				
				<a href="javascript:;" class="btn btn_green">Green</a>
				<div class="code">
<?=escapeCode('
<a href="#" class="btn #{btn_green}#">Green</a>
')?>
				</div>

				<a href="javascript:;" class="btn btn_black">Black</a>
				<div class="code">
<?=escapeCode('
<a href="#" class="btn #{btn_black}#">Black</a>
')?>
				</div>
				
				<h3>크기별 분류</h3>
				<a href="javascript:;" class="btn btn_mini">mini</a>
				<a href="javascript:;" class="btn btn_small">small</a>
				<a href="javascript:;" class="btn">기본사이즈</a>
				<a href="javascript:;" class="btn btn_large">라지(large)</a>
				<div class="code">
<?=escapeCode('
<a href="#" class="btn #{btn_mini}#">mini</a>
<a href="#" class="btn #{btn_small}#">small</a>
<a href="#" class="btn">기본사이즈</a>
<a href="#" class="btn #{btn_large}#">라지(large)</a>
')?>
				</div>
				<h3>Button Combo</h3>
				버튼들로만 이루어진 그룹에 ".combo" 클래스를 기입하면 각 버튼들이 한데 합쳐진 형태로 표현됩니다.<br/><br/>
				<div class="combo">
					<a href="javascript:;" class="btn">버튼</a>
					<a href="javascript:;" class="btn">버튼2</a>
					<a href="javascript:;" class="btn">버튼3</a>
				</div>
				<div class="code">
<?=escapeCode('
<div class="#{combo}#">
	<a href="#" class="btn">버튼</a>
	<a href="#" class="btn">버튼2</a>
	<a href="#" class="btn">버튼3</a>
</div>
')?>
				</div>				
				<span class="line_break"></span>
			
				
				<h2 id="Panel">Panel</h2>
				
				Panel은 페이지 컨텐츠 안에서 강조하고자 하는 용도로 사용될 수 있습니다.<br/>
				기본 스타일 이외에 panel_info, panel_dark, panel_alert 스타일이 제공됩니다.
				
				<h3>Default</h3>
				<p class="panel">
					2007년 한나라당 경선 청문회 때 그는 <b>"5·16은 구국의 혁명"이라고 단언했지만,</b> 올해 경선 과정에선 '불가피한 최선의 선택', '정상적인 것은 아니다.' 등으로 수위를 조절했다. 하지만 "불가피한 선택을 할 수밖에 없었던 것에서 아버지 스스로도 '불행한 군인을 만들었다'고 생각했던 것"이라고 밝히는 등 개인적 관점에 국한된 인식도 드러냈다.<br/>
				</p>

				<h3>Panel-info</h3>
				<p class="panel panel_info">
					2007년 한나라당 경선 청문회 때 그는 "5·16은 구국의 혁명"이라고 단언했지만, 올해 경선 과정에선 '불가피한 최선의 선택', '정상적인 것은 아니다.' 등으로 수위를 조절했다. 하지만 "불가피한 선택을 할 수밖에 없었던 것에서 아버지 스스로도 '불행한 군인을 만들었다'고 생각했던 것"이라고 밝히는 등 개인적 관점에 국한된 인식도 드러냈다.
				</p>
				
				<h3>Panel-dark</h3>
				<p class="panel panel_dark">
					2007년 한나라당 경선 청문회 때 그는 "5·16은 구국의 혁명"이라고 단언했지만, 올해 경선 과정에선 '불가피한 최선의 선택', '정상적인 것은 아니다.' 등으로 수위를 조절했다. 하지만 "불가피한 선택을 할 수밖에 없었던 것에서 아버지 스스로도 '불행한 군인을 만들었다'고 생각했던 것"이라고 밝히는 등 개인적 관점에 국한된 인식도 드러냈다.
				</p>

				<h3>Panel-alert</h3>
				<p class="panel panel_alert">
					2007년 한나라당 경선 청문회 때 그는 "5·16은 구국의 혁명"이라고 단언했지만, 올해 경선 과정에선 '불가피한 최선의 선택', '정상적인 것은 아니다.' 등으로 수위를 조절했다. 하지만 "불가피한 선택을 할 수밖에 없었던 것에서 아버지 스스로도 '불행한 군인을 만들었다'고 생각했던 것"이라고 밝히는 등 개인적 관점에 국한된 인식도 드러냈다.
				</p>
				<div class="code">
<?=escapeCode('
<p class="#{panel}#">
	2007년 한나라당 경선 청문회 때 그는 "5·16은 구국의 혁명"이라고 단언했지만...
</p>
<p class="#{panel panel_info}#">
	2007년 한나라당 경선 청문회 때 그는 "5·16은 구국의 혁명"이라고 단언했지만...
</p>
<p class="#{panel panel_dark}#">
	2007년 한나라당 경선 청문회 때 그는 "5·16은 구국의 혁명"이라고 단언했지만...
</p>
<p class="#{panel panel_alert}#">
	2007년 한나라당 경선 청문회 때 그는 "5·16은 구국의 혁명"이라고 단언했지만...
</p>
')?>
				</div>

				<span class="line_break"></span>

				
				<h2 id="Thumbnail">Thumbnail group</h2>
				
				썸네일 + 제목을 간략하게 표현할 수 있는 Thumbnail group을 제공합니다.<br/>
				기본 타입에서는 5열을 기준으로 표현되며, 전체 그룹을 묶는 UL태그에 "data-thumb-col" 속성을 부여함으로써  열의 개수를 변경할 수 있습니다.<br/>
				열의 개수는 3개부터 6개까지 지원합니다.
				<br/>
				<h3>Default type</h3>
				<ul class="group_thumb">
					<li class="thumb">
						<a href="#">
							<img src="http://icon.daumcdn.net/w/c/12/08/3434475802797703.jpeg" alt="이미지" />
							<span class="caption">"이젠 여자친구 사귈래요, 몸매 좋은 ...</span>
						</a>
					</li>
					<li class="thumb">
						<a href="#">
							<img src="http://icon.daumcdn.net/w/c/12/08/3434475802797703.jpeg" alt="이미지" />
							<span class="caption">"이젠 여자친구 사귈래요, 몸매 좋은 ...</span>
						</a>
					</li>
					<li class="thumb">
						<a href="#">
							<img src="http://icon.daumcdn.net/w/c/12/08/3434475802797703.jpeg" alt="이미지" />
							<span class="caption">"이젠 여자친구 사귈래요, 몸매 좋은 ...</span>
						</a>
					</li>
					<li class="thumb">
						<a href="#">
							<img src="http://icon.daumcdn.net/w/c/12/08/3434475802797703.jpeg" alt="이미지" />
							<span class="caption">"이젠 여자친구 사귈래요, 몸매 좋은 ...</span>
						</a>
					</li>
					<li class="thumb">
						<a href="#">
							<img src="http://icon.daumcdn.net/w/c/12/08/3434475802797703.jpeg" alt="이미지" />
							<span class="caption">"이젠 여자친구 사귈래요, 몸매 좋은 ...</span>
						</a>
					</li>
				</ul>
				<div class="code">
<?=escapeCode('
<ul class="#{group_thumb}#">
	...
	<li class="#{thumb}#">
		<a href="#">
			<img src="..." alt="이미지" />
			<span class="#{caption}#">"썸네일 내용 입력</span>
		</a>
	</li>
	...
</ul>
')?>
				</div>
				
				<h3>2 column type</h3>
				<ul class="group_thumb" data-thumb-col="2">
					<li class="thumb">
						<a href="#">
							<img src="http://icon.daumcdn.net/w/c/12/08/3434475802797703.jpeg" alt="이미지" />
							<span class="caption">"이젠 여자친구 사귈래요, 몸매 좋은 ...</span>
						</a>
					</li>
					<li class="thumb">
						<a href="#">
							<img src="http://icon.daumcdn.net/w/c/12/08/3434475802797703.jpeg" alt="이미지" />
							<span class="caption">"이젠 여자친구 사귈래요, 몸매 좋은 ...</span>
						</a>
					</li>
				</ul>
				<div class="code">
<?=escapeCode('
<ul class="group_thumb" #{data-thumb-col="2"}#> ... </ul>
')?>
				</div>
				<h3>3 column type</h3>
				<ul class="group_thumb" data-thumb-col="3">
					<li class="thumb">
						<a href="#">
							<img src="http://icon.daumcdn.net/w/c/12/08/3434475802797703.jpeg" alt="이미지" />
							<span class="caption">"이젠 여자친구 사귈래요, 몸매 좋은 ...</span>
						</a>
					</li>
					<li class="thumb">
						<a href="#">
							<img src="http://icon.daumcdn.net/w/c/12/08/3434475802797703.jpeg" alt="이미지" />
							<span class="caption">"이젠 여자친구 사귈래요, 몸매 좋은 ...</span>
						</a>
					</li>
					<li class="thumb">
						<a href="#">
							<img src="http://icon.daumcdn.net/w/c/12/08/3434475802797703.jpeg" alt="이미지" />
							<span class="caption">"이젠 여자친구 사귈래요, 몸매 좋은 ...</span>
						</a>
					</li>
				</ul>
				<div class="code">
<?=escapeCode('
<ul class="group_thumb" #{data-thumb-col="3"}#> ... </ul>
')?>
				</div>
				<h3>4 column type</h3>
				<ul class="group_thumb" data-thumb-col="4">
					<li class="thumb">
						<a href="#">
							<img src="http://icon.daumcdn.net/w/c/12/08/3434475802797703.jpeg" alt="이미지" />
							<span class="caption">"이젠 여자친구 사귈래요, 몸매 좋은 ...</span>
						</a>
					</li>
					<li class="thumb">
						<a href="#">
							<img src="http://icon.daumcdn.net/w/c/12/08/3434475802797703.jpeg" alt="이미지" />
							<span class="caption">"이젠 여자친구 사귈래요, 몸매 좋은 ...</span>
						</a>
					</li>
					<li class="thumb">
						<a href="#">
							<img src="http://icon.daumcdn.net/w/c/12/08/3434475802797703.jpeg" alt="이미지" />
							<span class="caption">"이젠 여자친구 사귈래요, 몸매 좋은 ...</span>
						</a>
					</li>
					<li class="thumb">
						<a href="#">
							<img src="http://icon.daumcdn.net/w/c/12/08/3434475802797703.jpeg" alt="이미지" />
							<span class="caption">"이젠 여자친구 사귈래요, 몸매 좋은 ...</span>
						</a>
					</li>
				</ul>
				<div class="code">
<?=escapeCode('
<ul class="group_thumb" #{data-thumb-col="4"}#> ... </ul>
')?>
				</div>
				<h3>6 column type</h3>
				<ul class="group_thumb" data-thumb-col="6">
					<li class="thumb">
						<a href="#">
							<img src="http://icon.daumcdn.net/w/c/12/08/3434475802797703.jpeg" alt="이미지" />
							<span class="caption">"이젠 여자친구 사귈래요, 몸매 좋은 ...</span>
						</a>
					</li>
					<li class="thumb">
						<a href="#">
							<img src="http://icon.daumcdn.net/w/c/12/08/3434475802797703.jpeg" alt="이미지" />
							<span class="caption">"이젠 여자친구 사귈래요, 몸매 좋은 ...</span>
						</a>
					</li>
					<li class="thumb">
						<a href="#">
							<img src="http://icon.daumcdn.net/w/c/12/08/3434475802797703.jpeg" alt="이미지" />
							<span class="caption">"이젠 여자친구 사귈래요, 몸매 좋은 ...</span>
						</a>
					</li>
					<li class="thumb">
						<a href="#">
							<img src="http://icon.daumcdn.net/w/c/12/08/3434475802797703.jpeg" alt="이미지" />
							<span class="caption">"이젠 여자친구 사귈래요, 몸매 좋은 ...</span>
						</a>
					</li>
					<li class="thumb">
						<a href="#">
							<img src="http://icon.daumcdn.net/w/c/12/08/3434475802797703.jpeg" alt="이미지" />
							<span class="caption">"이젠 여자친구 사귈래요, 몸매 좋은 ...</span>
						</a>
					</li>
					<li class="thumb">
						<a href="#">
							<img src="http://icon.daumcdn.net/w/c/12/08/3434475802797703.jpeg" alt="이미지" />
							<span class="caption">"이젠 여자친구 사귈래요, 몸매 좋은 ...</span>
						</a>
					</li>
				</ul>
				<div class="code">
<?=escapeCode('
<ul class="group_thumb" #{data-thumb-col="6"}#> ... </ul>
')?>
				</div>
					
				
				<span class="line_break"></span>
				
				<h2 id="Paging">Paging</h2>
				
				게시물 리스트의 페이지 링크 그룹입니다. 현재 선택된 상태의 번호에는 A태그 대신 SPAN태그에 ".on" 클래스를 기입하여 사용합니다.
				
				<div class="group_paging">
					<a href="#none" class="link_edge">이전</a>
					<a href="#none">1</a>
					<a href="#none">2</a>
					<span class="on">3</span>
					<a href="#none">4</a>
					<a href="#none">5</a>
					<a href="#none" class="link_edge">다음</a>
				</div>
				<div class="code">
<?=escapeCode('
<div class="#{group_paging}#">
	<a href="#none" class="#{link_edge}#">이전</a>
	<a href="#none">1</a>
	<a href="#none">2</a>
	#{<span class="on">3</span>}#
	<a href="#none">4</a>
	<a href="#none">5</a>
	<a href="#none" class="#{link_edge}#">다음</a>
</div>
')?>
				</div>
				<span class="line_break"></span>
				
				<h2 id="Popup">Popup window</h2>
				
				팝업윈도우(레이어팝업)는 현재 마크업과 스타일만 제공하며,<br/>
				추후 JS 플러그인 제공을 통해 간단한 스크립트 적용만으로 Open/Close 효과도 지원할 예정입니다.
				
				<div class="window">
					<div class="window_head">
						Window head
					</div>
					<div class="window_body">
						애플의 아이폰5가 다음 달 초에 국내 시장에 출시될 것으로 보인다.22일 복수의 전자·통신업계 관계자들에 따르면 아이폰5는 SK텔레콤과 KT 등 국내 이동통신사를 통해 12월 초 시판된다..
					</div>
					<div class="window_foot">
						<a href="javascript:;" class="btn btn_confirm">확인</a>
						<a href="javascript:;" class="btn">취소</a>
					</div>
				</div>
				<div class="code">
<?=escapeCode('
<div class="#{window}#">
	<div class="#{window_head}#">
		Window head
	</div>
	<div class="#{window_body}#">
		애플의 아이폰5가 다음 달 초에...
	</div>
	<div class="#{window_foot}#">
		<a href="#" class="btn btn_confirm">확인</a>
		<a href="#" class="btn">취소</a>
	</div>
</div>
')?>
				</div>
				<span class="line_break"></span>
				
				<h2 id="LineBreak">Line Break</h2>
				일반적으로 웹페이지 내에서 가로선은 HR태그를 이용할 수 있지만<br/>
				Dough에서는 디자인 통일성을 위해 별도로 ".line_break"라는 클래스를 제공합니다.<br/>
				<div class="code">
<?=escapeCode('
<span class="#{line_break}#"></span>
')?>
				</div>


			</div>
		</div>
<? include("./view/common/footer.php"); ?>
	</div>
