Responsible Module for Dough v 0.2.0 
(Daum Communicatinos 웹표준기술팀)

## Update

	Ver 0.2.0 - Dough 0.2.0 버젼에 맞춤 (2012.1.18)
	Ver 0.1.1 - 최초 배포버젼 (2012.1.18)

## Dependancy

	Dough 0.2.0 Core
	(dough script 0.2.0 로드 시 Top Navigation 튜닝 효과)

## Compatibility

	Mobile : Android, iOS 호환
	PC - Chrome, Safari, Firefox, Opera 최신버젼 기준 모두 호환
	(IE는 9버젼 이상부터 반응형 디자인 확인가능)

## Usage

	1. Dough Core와 함께 이 CSS 모듈을 로드시킵니다
	2. <body> 태그에 .responsible 클래스를 추가합니다.

## Global Class
	PC <‐> Mobile 간 레이아웃 변환 최적화를 위해, 본 모듈에서는 다음과 같은 전역클래스를 제공합니다.
	* .response_hide : 모바일 스크린으로 변환되었을 때 숨김 처리합니다.
	* .response_no_float : float:left 또는 float:right 속성을 가진 요소에 이 클래스를 줄 경우, 모바일 스크린으로 변환되었을 때 Float를 해제시켜 줍니다.
	* .response_no_grid : Grid 클래스 등으로 폭(Width) 퍼센티지를 가진 요소에 이 클래스를 줄 경우, 모바일 스크린으로 변환되었을 때 Width가 Auto로 초기화됩니다.