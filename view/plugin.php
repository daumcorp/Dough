	<div class="wrap_page nav_fixed" id="top">
		<div class="wrap">
			<div class="f_l grid_25 response_no_float response_no_grid">
<? include("./view/common/nav-left.php"); ?>
			</div>
			<div id="doughContent" class="f_r grid_70 response_no_float response_no_grid">
				<h2 id="Responsible">반응형 웹 모듈</h2>
				<div class="panel">
					Dough Core와 함께 반응형 CSS모듈을 로드시킬 경우,<br/>800px 이하의 폭을 가진 스크린에서 모바일애 최적화한 스타일이 출력됩니다.<br/>
					(현재 보고 계시는 Dough 사이트에 적용되어있습니다. <strong>화면 사이즈를 줄여보세요</strong>)
					<br/><br/>
					<a href="javascript:;" class="btn btn_green" onclick="getLog('link_download_responsible','./archive/dough-responsible-0.1.1.css');return false;">Responsible Web Module (0.1.1)</a>
					<span class="line_break"></span>
					
					<h3>Update</h3>
					<ul class="list_circle">
						<li><strong>Ver 0.1.1</strong> - 최초 배포버젼 (2012.1.18)</li>
					</ul>
					<span class="line_break"></span>
					
					<h3>Dependancy</h3>
					<ul class="list_circle">
						<li>Dough 0.1.1 (Core)</li>
					</ul>
					<span class="line_break"></span>
					
					<h3>Compatibility</h3>
					<ul class="list_circle">
						<li>Mobile : Android, iOS 호환</li>
						<li>
							PC - Chrome, Safari, Firefox, Opera 최신버젼 기준 모두 호환<br/>
							(IE는 9버젼 이상부터 반응형 디자인 확인가능)
						
						</li>
					</ul>
					<span class="line_break"></span>
					
					<h3>Usage</h3>
						<ol class="list_num">
							<li>Dough 0.1.1 Core와 함께 이 CSS 모듈을 로드시킵니다</li>
							<li><strong> &lt;body&gt;</strong> 태그에 <strong>.responsible</strong> 클래스를 추가합니다.</li>
						</ol>
					
					
					<h4>Global Class</h4>
					PC &lt;&dash;&gt; Mobile 간 레이아웃 변환 최적화를 위해, 본 모듈에서는 다음과 같은 전역클래스를 제공합니다.
					<ul class="list_circle">
						<li><strong>.response_no_float</strong><br/>float:left 또는 float:right 속성을 가진 요소에 이 클래스를 줄 경우, 모바일 스크린으로 변환되었을 때 Float를 해제시켜 줍니다.</li>
						<li><strong>.response_no_grid</strong><br/>Grid 클래스 등으로 폭(Width) 퍼센티지를 가진 요소에 이 클래스를 줄 경우, 모바일 스크린으로 변환되었을 때 Width가 Auto로 초기화됩니다.</li>
					</ul> 
					
				</div>
	
			</div>
		</div>
<? include("./view/common/footer.php"); ?>
	</div>
