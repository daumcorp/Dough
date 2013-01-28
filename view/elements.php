	<div class="wrap_page nav_fixed" id="top">
		<div class="wrap">
			<div class="f_l grid_25 response_no_float response_no_grid">
<? include("./view/common/nav-left.php"); ?>
			</div>
			<div id="doughContent" class="f_r grid_70 response_no_float response_no_grid">

				<h2 id="Headings">Headings</h2>
				Dough의 폰트사이즈는 모두 상대적 크기(em)로 계산되며 이는 제목 태그에도 해당됩니다.<br/>
				따라서 사용자가 각 영역별 폰트사이즈를 직접 입력한 경우, 해당 영역에서의 폰트사이즈를 기준으로 달라질 수 있습니다.
				<div class="panel">
					<h1>Heading1 (제목1)</h1>
					<h2>Heading2 (제목2)</h2>
					<h3>Heading3 (제목3)</h3>
					<h4>Heading4 (제목4)</h4>
					<h5>Heading5 (제목5)</h5>
					<h6>Heading6 (제목6)</h6>
				</div>
				
				<span class="line_break"></span>
				
				<h2 id="Lists">Lists</h2>
				리스트는 순서있는 리스트(OL), 순서없는 리스트(UL)로 나뉘며 다음과 같은 형태로 표현됩니다.

				<h3>Default List (ol, ul)</h3>
				<ul>
					<li>리스트목록</li>
					<li>리스트목록</li>
				</ul>
				<div class="code">
<?=escapeCode('
<ul>
	<li>리스트목록</li>
	<li>리스트목록</li>
</ul>
')?>
				</div>
				
				<h3>ul class="list_article"</h3>
				<ul class="list_article">
					<li>
						<a href="javascript:;">리스트+링크 목록</a>
					</li>
					<li>
						<a href="javascript:;">리스트+링크 목록 글자수가 길어질 경우 Ellipsis로 말줄임이 처리됩니다.</a>
					</li>
				</ul>
				<div class="code">
<?=escapeCode('
<ul class="#{list_article}#">
	<li>
		<a href="javascript:;">리스트+링크 목록</a>
	</li>
	<li>
		<a href="javascript:;">리스트+링크 목록 글자수가 길어질 경우 Ellipsis로 말줄임이 처리됩니다.</a>
	</li>
</ul>
')?>
				</div>
				
				<h3>ul class="list_circle"</h3>
				<ul class="list_circle">
					<li>리스트목록</li>
					<li>리스트목록</li>
				</ul>
				<div class="code">
<?=escapeCode('
<ul class="#{list_circle}#">
	<li>리스트목록</li>
	<li>리스트목록</li>
</ul>
')?>
				</div>
				
				<h3>ol class="list_num"</h3>
				<ol class="list_num">
					<li>리스트 첫번째</li>
					<li>리스트 두번째</li>
				</ol>
				<div class="code">
<?=escapeCode('
<ol class="#{list_num}#">
	<li>리스트목록</li>
	<li>리스트목록</li>
</ol>
')?>
				</div>
				
				<span class="line_break"></span>

				<h2 id="Form">Form elements</h2>
				
				폼 구성요소들은 다음과 같은 스타일로 표현됩니다.<br/>Combo 표현을 위한 부모 클래스 지정 이외에 대부분의 Form 태그는 클래스기입을 필요로 하지 않습니다.<br/>
				
				
				<h3>Input Text</h3>
				<label>
					텍스트입력
					<input type="text" name="" placeholder="Input Text"/>
				</label>
				
				<div class="code">
<?=escapeCode('
<label>
	텍스트입력 <input type="text" name="" placeholder="Input Text"/>
</label>
')?>
				</div>
				
				<h3>Input Text with Button combo</h3>
				버튼 콤보와 마찬가지로, ".combo" 클래스를 가지는 부모요소 밑에 폼요소를 묶어 놓음으로써 하나로 합쳐진 형태의 표현이 가능합니다.<br/>
				<div class="combo">
					<input type="text" name="" size="27" placeholder="검색내용을 입력하세요"/>
					<button type="button" class="btn">입력</button>
				</div>
				<div class="code">
<?=escapeCode('
<div class="#{combo}#">
	<input type="text" name="" size="27" placeholder="검색내용을 입력하세요"/>
	<button type="button" class="btn">입력</button>
</div>
')?>
				</div>


				<h3>Select</h3>
				<select>
					<option value="" selected="selected">셀렉트1</option>
					<option value="">셀렉트2</option>
				</select>
				<div class="combo">
					<input  type="text" name="" size="15"/>
					<button type="button" class="btn">입력</button>
				</div>
				
				<div class="code">
<?=escapeCode('
<select>
	<option value="" selected="selected">셀렉트1</option>
	<option value="">셀렉트2</option>
</select>
')?>
				</div>
				
				<h3>Textarea</h3>
				<label>
					텍스트입력
					<textarea id="tf2" cols="30" rows="4"></textarea>
				</label>
				<div class="code">
<?=escapeCode('
<label>
	텍스트입력 <textarea id="tf2" cols="60" rows="4"></textarea>
</label>
')?>
				</div>
				<h3>Radio button</h3>
				<label>
					<input type="radio" name="rad" />
					라디오1
				</label>
				<label>
					<input type="radio" name="rad" />
					라디오2
				</label>
				<div class="code">
<?=escapeCode('
<label>
	<input type="radio" name="" /> 라디오1
</label>
')?>
				</div>
				<h3>Checkbox</h3>
				<label>
					<input type="checkbox" name="" />
					체크박스1
				</label>
				<label>
					<input type="checkbox" name="" />
					체크박스2
				</label>
				<label>
					<input type="checkbox" name="" />
					체크박스3
				</label>
				<div class="code">
<?=escapeCode('
<label>
	<input type="checkbox" name="" /> 체크박스1
</label>
')?>
				</div>
				<span class="line_break"></span>
	
				<h2 id="Table">Table</h2>
				
				Dough의 테이블은 기본적인 표형 테이블과 게시판형 테이블로 구분되어 사용될 수 있습니다.<br/>
				기본 표형 테이블은 table 태그만으로 사용할 수 있으며, 게시판형 테이블은 ".tbl_board" 클래스를 선언하여 사용할 수 있습니다.
				
				<h3>Default type</h3>
				<table>
					<caption>Generic table Example</caption>
					<colgroup>
					</colgroup>
					<thead>
						<tr>
							<th>제목셀1</th>
							<th>제목셀2</th>
							<th>제목셀3</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>제목</th>
							<td>내용</td>
							<td>내용</td>
						</tr>
						<tr>
							<th>제목</th>
							<td colspan="2">내용</td>
						</tr>
						<tr>
							<th>제목</th>
							<td rowspan="2">내용</td>
							<td>내용</td>
						</tr>
						<tr>
							<th>제목</th>
							<td>내용</td>
						</tr>
					</tbody>
				</table>
				
				<h3>Board type</h3>
				<table class="tbl_board">
					<caption>Vertical Table Example (Board type)</caption>
					<thead>
						<tr>
							<th>No.</th>
							<th>셀1</th>
							<th>셀2</th>
							<th>셀3</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>내용</td>
							<td>
								<input type="text" name="" size="15"/>
							</td>
							<td>
								<button type="button" class="btn">수정</button>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>내용</td>
							<td>
								<input type="text" name="" size="15"/>
							</td>
							<td>
								<button type="button" class="btn">수정</button>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>내용</td>
							<td>
								<input type="text" name="" size="15"/>
							</td>
							<td>
								<button type="button" class="btn">수정</button>
							</td>
						</tr>
						<tr>
							<td>4</td>
							<td>내용</td>
							<td>
								<input type="text" name="" size="15"/>
							</td>
							<td>
								<button type="button" class="btn">수정</button>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="code">
<?=escapeCode('
<table class="#{tbl_board}#">
	<caption>Vertical Table Example (Board type)</caption>
	<thead> ... </thead>
	<tbody> ... </tbody>
</table>
')?>
				</div>



			</div>
		</div>
<? include("./view/common/footer.php"); ?>
	</div>
