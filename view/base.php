	<div class="wrap_page nav_fixed" id="top">
		<div class="wrap">
			<div class="f_l grid_25 response_no_float response_no_grid">
<? include("./view/common/nav-left.php"); ?>
			</div>
			<div id="doughContent" class="f_r grid_70 response_no_float response_no_grid">

				
				<h2 id="GlobalClass">일반 전역 클래스 (Global common class)</h2>
				흔히 사용되는 몇몇 클래스들이 전역으로 설정되어 있으므로 별도의 CSS 상속없이 사용할 수 있습니다.<br/>
				해당 클래스들은 다음과 같습니다.
				<h3>Styling Class</h3>
				<ul class="list_circle">
					<li><strong>.f_l</strong> : 좌측으로 흐르는 스타일 (float:left)</li>
					<li><strong>.f_r</strong> : 우측으로 흐르는 스타일 (float:right)</li>
					<li><strong>.cl_b</strong> : Floating 요소의 뒤 요소에 선언함으로써 Float를 해제시킵니다.</li>
					<li><strong>.show</strong> : 특정 요소에 대해 보이도록 설정 합니다.</li>
					<li><strong>.hide</strong> : 특정 요소에 대해 보이지 않도록 설정합니다.</li>
					<li><strong>.align_left</strong> : 왼쪽 정렬을 선언합니다.</li>
					<li><strong>.align_center</strong> : 가운데 정렬을 선언합니다.</li>
					<li><strong>.align_right</strong> : 오른쪽 정렬을 선언합니다.</li>
				</ul>
<? /*				
				<h3>Fonts Class</h3>
				Dough는 다음체와 다음볼드체를 제공합니다.<br/>
				&lt;Body&gt; 태그 자체에 선언하여 페이지 전체텍스트에 스타일링 할 수도 있습니다.
				<ul class="list_circle">
					<li>
						<strong>.font_daum</strong> : Daum Regular 서체
						<div class="panel font_daum">
							<h4>.font_daum 클래스를 적용한 예제입니다.</h4>
						</div>
					</li>
					<li>
						<strong>.font_daumbold</strong> : Daum Semibold 서체
						<div class="panel font_daumbold">
							<h4>.font_daumbold 클래스를 적용한 예제입니다.</h4>
						</div>
					</li>
				</ul>
 */ ?>
				<h3>Web Accessibility Class</h3>
				<ul class="list_circle">
					<li><strong>#daumIndex</strong> : 웹접근성 보조기구 등에 읽히는 스킵 내비게이션에 적용할 수 있습니다. (Daum 마크업 가이드에 따라 ID Selector로 제공됩니다.)</li>
					<li><strong>.ir_pm</strong> : Background 이미지 내 의미있는 텍스트의 대체텍스트를 제공할때 사용합니다.</li>
					<li><strong>.ir_wa</strong> : 중요한 이미지 대체텍스트로 이미지off시에도 대체 텍스트를 보여주고자 할때 사용합니다.</li>
					<li><strong>.screen_out</strong> : 대체텍스트가 아닌 접근성을 위한 숨김텍스트를 제공할때 사용합니다.</li>
					<li><strong>.screen_hide</strong> : screen_out클래스가 적용되지 않는 환경에서 해당 텍스트를 숨겨야 할때 사용합니다.</li>
				</ul>
				
				<span class="line_break"></span>
				
				<h2 id="Wrap">Wrap</h2>
				
				자식요소가 Float 속성을 가지지 않는 경우에는 별다른 클래스 선언없이 DIV,P 태그등을 사용하여도 무방하지만<br/>
				Float 속성을 가진 자식요소가 있을경우, 해당 요소들은 Normal-flow render에서 배제되어 붕 떠버리므로 부모 영역이 자식요소 영역을 품을 수 없습니다.<br/>
				이 때, 부모 태그에 <strong>class="wrap"</strong> 을 선언해줌으로써 부모 영역을 Float속성의 자식 영역까지 확장시킬 수 있습니다.
				
				<h3>부모의 영역에서 벗어난 경우</h3>
				<img src="./images/example-01.gif" class="img_example" alt="부모의 영역에서 벗어난 경우">
				
				<div class="code">
<?=escapeCode('
<div>
	<div class="f_l"> ... </div>
	<div class="f_r"> ... </div>
</div>
')?>
				</div>
				
				<h3>".wrap" 을 통해 부모 영역 확장</h3>
				<img src="./images/example-02.gif" class="img_example" alt=".wrap 을 통해 부모 영역 확장">
				<div class="code">
<?=escapeCode('
<div class="#{wrap}#">
	<div class="f_l"> ... </div>
	<div class="f_r"> ... </div>
</div>
')?>
				</div>
	
				<h3>wrap_page</h3>
				페이지 전체의 Wrap 표현을 위해서는 Body 안쪽의 최상위 영역에 ".wrap_page"을 기입합니다.<br/>
				이 경우 가로폭 978픽셀과 가운데 정렬 속성을 갖는 페이지 랩이 표현됩니다.
				<div class="code">
<?=escapeCode('
<div class="#{wrap_page}#">
	<div class="f_l"> ... </div>
	<div class="f_r"> ... </div>
</div>
')?>
				</div>
				<span class="line_break"></span>
				
				<h2 id="GridSystem">Grid system</h2>
				Dough는 레이아웃 설계를 위한 폭 조절을 퍼센티지(%)로 설정합니다.<br/>
				5%부터 95%까지 5% 단위로 쪼개어 설정할 수 있으며, ".grid_15" 또는 ".grid_50"과 같이 <strong>"grid_ + ${number}"</strong> 형식의 클래스를 사용합니다.<br/>
				<ul class="list_circle">
					<li><strong>.grid_5</strong> : 5%의 폭넓이를 가짐</li>
					<li><strong>.grid_10</strong> : 10%의 폭넓이를 가짐</li>
					<li><strong>.grid_15</strong> : 15%의 폭넓이를 가짐</li>
					<li><strong>.grid_20</strong> : 20%의 폭넓이를 가짐</li>
					<li><strong>.grid_25</strong> : 25%의 폭넓이를 가짐</li>
					<li><strong>.grid_30</strong> : 30%의 폭넓이를 가짐</li>
					<li><strong>.grid_35</strong> : 35%의 폭넓이를 가짐</li>
					<li><strong>.grid_40</strong> : 40%의 폭넓이를 가짐</li>
					<li><strong>.grid_45</strong> : 45%의 폭넓이를 가짐</li>
					<li><strong>.grid_50</strong> : 50%의 폭넓이를 가짐</li>
					<li><strong>.grid_55</strong> : 55%의 폭넓이를 가짐</li>
					<li><strong>.grid_60</strong> : 60%의 폭넓이를 가짐</li>
					<li><strong>.grid_65</strong> : 65%의 폭넓이를 가짐</li>
					<li><strong>.grid_70</strong> : 70%의 폭넓이를 가짐</li>
					<li><strong>.grid_75</strong> : 75%의 폭넓이를 가짐</li>
					<li><strong>.grid_80</strong> : 80%의 폭넓이를 가짐</li>
					<li><strong>.grid_85</strong> : 85%의 폭넓이를 가짐</li>
					<li><strong>.grid_90</strong> : 90%의 폭넓이를 가짐</li>
					<li><strong>.grid_95</strong> : 95%의 폭넓이를 가짐</li>
				</ul>
				<img src="./images/example-03.gif" class="img_example" alt="Grid_example">

				<div class="code">
<?=escapeCode('
<div class="wrap_page">
	<div class="f_l #{grid_20}#"> ... </div>
	<div class="f_r #{grid_70}#"> ... </div>
</div>
')?>
				</div>



			</div>
		</div>
<? include("./view/common/footer.php"); ?>
	</div>
